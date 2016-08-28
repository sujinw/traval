<?php
/*
 * 验证码类
 * entry 生成验证码
 * check 检查验证码，返回true or false
 * 可以自行设置高宽
 * */
namespace core\lib\library;

use core\lib\library\session;

class verify
{
    public static $codetxt = 'qaxswedcvfrtgbnhyujmkip3456789';
    public static $height = 30;
    public static $width = 100;

    public function __construct($option = '')
    {
        if (is_array($option)) {
            self::$height = $option['height'];
            self::$width = $option['width'];
        }
    }

    //生产验证码
    public function entry()
    {
        $captchCode = '';

        $image = imagecreatetruecolor(self::$width, self::$height);
        $bgcolor = imagecolorallocate($image, 255, 255, 255);
        imagefill($image, 0, 0, $bgcolor);

        //生产验证码内容
        for ($i = 0; $i < 4; $i++) {
            $fontsize = 5;
            $fontcolor = imagecolorallocate($image, rand(0, 120), rand(0, 120), rand(0, 120));
            $fontcontent = substr(self::$codetxt, rand(0, strlen(self::$codetxt) - 1), 1);

            $captchCode .= $fontcontent;

            $x = ($i * self::$width / 4) + rand(5, 10);
            $y = rand(5, 10);

            imagestring($image, $fontsize, $x, $y, $fontcontent, $fontcolor);
        }

        //生成干扰内容
        for ($i = 0; $i < 400; $i++) {
            $pointcolor = imagecolorallocate($image, rand(50, 200), rand(50, 200), rand(50, 200));
            imagesetpixel($image, rand(1, self::$width), rand(1, self::$width), rand(1, self::$width));
        }

        header('content-type:image/png');
        imagepng($image);

        //end
        imagedestroy($image);

        //保存到session中
        $_SESSION['verify_code'] = $captchCode;
    }

    public function check($code)
    {
        if (isset($_SESSION['verify_code'])) {
            if ($_SESSION['verify_code'] == $code) {
                return true;
            } else {
                return false;
            }
        } else {
            throw new \Exception('验证码还没有创造');
        }
    }
}