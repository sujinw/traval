<?php
/**
 * session操作类
 */
namespace core\lib\library;
class session
{
    public static function set($name, $value)
    {
        return $_SESSION[$name] = $value;
    }

    public static function get($name)
    {
        return isset($_SESSION[$name]) ? $_SESSION[$name] : '';
    }

    public function all(){
        return isset($_SESSION) ? $_SESSION : '';
    }

    public function drop($name)
    {
        if (isset($_SESSION[$name])) {
            unset($_SESSION[$name]);
            return true;
        } else {
            return false;
        }
    }

    public function dropAll()
    {
        if (isset($_SESSION)) {
            session_unset();
        }
    }
}
