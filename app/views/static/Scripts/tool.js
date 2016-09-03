"use strict";

//获取url参数
function request(paras){
	var url = location.href;
	var paraString = url.substring(url.indexOf("?")+1,url.length).split("&");
	var paraObj = {};
	for (i=0; j=paraString[i]; i++){
		paraObj[j.substring(0,j.indexOf("=")).toLowerCase()] = j.substring(j.indexOf("=")+1,j.length);
	}
	var returnValue = paraObj[paras.toLowerCase()];
	if(typeof(returnValue)=="undefined"){
		return "";
	}else{
    	return  returnValue;
	}
}
//获取字符串长度 区分中英文, 中文两个字节
String.prototype.getBytes = function () {
    var cArr = this.match(/[^\x00-\xff]/ig);
    return this.length + (cArr == null ? 0 : cArr.length);
}
//截取字符串长度 区分中英文, 中文两个字节. 超出部分中指定字符串代替 需引用 String.prototype.getBytes
String.prototype.cutBytes = function (strLen, replaceStr) {
    var str = this.toString();
    if (str.getBytes() <= strLen)
        return str;
    var returnStr = "";
    var tempLen = 0;
    for (var i = 0; i < str.length; i++) {
        var tempChar = str[i].match(/[^\x00-\xff]/ig);
        returnStr += str[i];
        tempLen += tempChar == null ? 1 : 2;
        if (tempLen >= strLen) {
            return i + 1 < str.length ? returnStr + replaceStr : returnStr;
        }
    }
    return "";
};

//数组操作
var arr = {
	/**
	 * [arrayIndexOf 查找数组中是否存在某个元素]
	 * @Author   Rukic
	 * @DateTime 2016-09-02T16:59:23+0800
	 * @param    {[type]}                 arr    [要查找的数组]
	 * @param    {[type]}                 obj    [元素]
	 * @param    {[type]}                 iStart [开始位置]
	 * @return   {[type]}                        [下标（index）无则返回-1]
	 */
	arrayIndexOf: function (arr, obj, iStart) {
	    if (Array.prototype.indexOf) {
	        return arr.indexOf(obj, (iStart || 0));
	    }
	    else {
	        for (var i = (iStart || 0), j = arr.length; i < j; i++) {
	            if (arr[i] === obj) {
	                return i;
	            }
	        }
	        return -1;
	    }
	},
	 /**
     * 合并多个数组为一个数组
     * @param {Array} args 要合并的数组参数，如：arr1,arr2,arr3...
     * @returns {Array} 合并后的结果数组
     */
    Concat: function (args) {
        return [].concat.apply([], arguments);
    },
    /**
     * 将一个或多个数组合并为一个字符串
     * @param {String} separator 指定分隔符
     * @param {Array} args 要合并的数组参数(arr1,arr2,arr3...)
     * @returns {String} 合并后的字符串
     */
    Join: function (separator, args) {
        var source = [];
        if (arguments.length > 2) {
            for (var i = 1; i < arguments.length; i++) {
                source = source.concat(arguments[i]);
            }
        } else {
            source = arguments[1];
        }
        return source.join(separator);
    },
    /**
    * 判断指定val是否在数组array中
    * @param {Object} val 需要判断的值
    * @param {Array} array 所在的数组
    * @param {Number} idx 从数组array的idx处开始判断，若未指定，则从整个数组array中判断
    * @returns {Number} val在array中的位置，若不在，则返回-1
    */
    InArray: function (val, array, idx) {
        if (!array) return -1;
        var arrLen = array.length;
        idx = idx || 0;
        idx = (idx < 0 || idx > array.length - 1) ? 0 : idx;
        for (; idx < arrLen; idx++) {
            if (array[idx] === val) {
                return idx;
            }
        }
        return -1;
    },
    /**
     * 去掉array中的重复项
     * @param {Array} arr 需要去重的数组
     * @returns {Array} 去重后的新数组
     */
    Unique: function (arr) {
        if (!arr || arr.length <= 1) {
            return arr;
        }
        var _arr = arr.sort(), duplicateIdx = [], idxLength = 0;
        for (var i = 1; i < _arr.length; i++) {
            if (_arr[i] === _arr[i - 1]) {
                idxLength = duplicateIdx.push(i);
            }
        }
        if (idxLength > 0) {
            while (idxLength--) {
                _arr.splice(duplicateIdx[idxLength], 1);
            }
            arr = _arr;
        }
        return arr;
    },
    /**
     * 在指定数组中删除指定的数据
     * @param {Array} sourceArr 待操作的数组
     * @param {Array} removeArr 需要删除的项
     * @returns {Array} 新的数组
     */
    Remove: function (sourceArr, removeArr) {
        if (!sourceArr || !removeArr || removeArr.length === 0) {
            return sourceArr;
        }
        removeArr = this.Unique(removeArr);
        var sourceLen = sourceArr.length,
            removeLen = removeArr.length,
            tempIdx = -1;

        for (var i = 0; i < sourceLen; i++) {
            for (var j = 0; j < removeLen; j++) {
                tempIdx = this.InArray(removeArr[j], sourceArr);
                if (tempIdx >= 0) {
                    sourceArr.splice(tempIdx, 1);
                    sourceLen = sourceArr.length;
                }
            }
        }

        return sourceArr;
    },
    /**
     * 将obj转换为Array
     * @param {object} obj 要转换为Array的对象
     * @returns {Array} 转换后的数组
     */
    ToArray: function (obj) {
        if (!obj) {
            return null;
        }
        if (dataLib.IsString(obj)) {
            obj = eval(obj);
            return dataLib.IsArray(obj) ? obj : null;
        }
        if (!obj.length) {
            return null;
        }
        return [].slice.call(obj);
    }
}
var HtmlUtil = {
    /*1.用正则表达式实现html转码*/
    htmlEncodeByRegExp:function (str){  
         var s = "";
         if(str.length == 0) return "";
         s = str.replace(/&/g,"&amp;");
         s = s.replace(/</g,"&lt;");
         s = s.replace(/>/g,"&gt;");
         s = s.replace(/ /g,"&nbsp;");
         s = s.replace(/\'/g,"&#39;");
         s = s.replace(/\"/g,"&quot;");
         return s;  
   },
   /*2.用正则表达式实现html解码*/
   htmlDecodeByRegExp:function (str){  
         var s = "";
         if(str.length == 0) return "";
         s = str.replace(/&amp;/g,"&");
         s = s.replace(/&lt;/g,"<");
         s = s.replace(/&gt;/g,">");
         s = s.replace(/&nbsp;/g," ");
         s = s.replace(/&#39;/g,"\'");
         s = s.replace(/&quot;/g,"\"");
         return s;  
   }
};
/**
 * [callTips 简单弹出提示建议用zepto.dialog.js插件]
 * @Author   Rukic
 * @DateTime 2016-09-02T17:02:54+0800
 * @param    {[type]}                 txt [提示的文字信息]
 * @return   {[type]}                     [description]
 */
function callTips(txt){
    $(document.body).append('<style>.new_tips{z-index:301;position:fixed;width:150px;border-radius:30px;line-height:40px;margin:0 auto;left:0;right:0;bottom:100px; background-color: rgba(0,0,0,0.7); color:#FFF;text-align:center;font-size:18px}</style><div class="new_tips">'+txt+'</div>');setTimeout(function () {$('.new_tips').prev('style').remove();$('.new_tips').remove();}, 2000);
}
var cookie ={
	//获得coolie 的值
	get : function(name) {
		var _cookieStr = document.cookie;

		var cookieArray = _cookieStr.split("; "); //得到分割的cookie名值对
		for (var i = 0; i < cookieArray.length; i++) {
			var arr = cookieArray[i].split("="); //将名和值分开   
			if (arr[0] == name) return decodeURIComponent(arr[1]); //如果是指定的cookie，则返回它的值   
		}
		return "";
	},
	//设置cookie
	set : function(cookiename, cookievalue, hours) {
		var date = new Date();
		date.setTime(date.getTime() + Number(hours) * 3600 * 1000);
		document.cookie = cookiename + "=" + cookievalue + "; path=/;expires = " + date.toGMTString();
	},
	//删除cookie
	del : function(name) {
		var date = new Date();
		date.setTime(date.getTime() - 10000);
		document.cookie = name + "=;expires=" + (new Date(0)).toGMTString();
	},
}
//================================================================================
//localStorage
;(function(window){

	var domainStr = "www.traval.html";
	window.$storage = null;
	function store(){
		var self = this;
		this.set = function(_name,_str){
			localStorage.setItem(domainStr + _name,_str);
		}
		this.get =  function(_name){
			if(localStorage.getItem(domainStr+_name)){
				return localStorage.getItem(domainStr + _name);
			}else{
				return null;	
			}	
		}
		this.del =  function(_name){
			localStorage.removeItem(domainStr+_name);
		}
	}
	function supports_html5_storage() { 
  		try{ 
      		return 'localStorage' in window && window['localStorage'] !== null; 
  		}catch(e){ 
     		return false; 
  		} 
	}	
	if(supports_html5_storage){
		window.store = new store();
	}else{
		throw new Error("your browser not support html5 Storage");	
	}
})(window);

window.Date.format=function (date, sFormat, sLanguage) {
    var time = {};
    time.Year = date.getFullYear();
    time.TYear = ("" + time.Year).substr(2);
    time.Month = date.getMonth() + 1;
    time.TMonth = time.Month < 10 ? "0" + time.Month : time.Month;
    time.Day = date.getDate();
    time.TDay = time.Day < 10 ? "0" + time.Day : time.Day;
    time.Hour = date.getHours();
    time.THour = time.Hour < 10 ? "0" + time.Hour : time.Hour;
    time.hour = time.Hour < 13 ? time.Hour : time.Hour - 12;
    time.Thour = time.hour < 10 ? "0" + time.hour : time.hour;
    time.Minute = date.getMinutes();
    time.TMinute = time.Minute < 10 ? "0" + time.Minute : time.Minute;
    time.Second = date.getSeconds();
    time.TSecond = time.Second < 10 ? "0" + time.Second : time.Second;
    time.Millisecond = date.getMilliseconds();
    time.Week = date.getDay();

    var MMMArrEn = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        MMMArr = ["一月", "二月", "三月", "四月", "五月", "六月", "七月", "八月", "九月", "十月", "十一月", "十二月"],
        WeekArrEn = ["Sun", "Mon", "Tue", "Web", "Thu", "Fri", "Sat"],
        WeekArr = ["星期日", "星期一", "星期二", "星期三", "星期四", "星期五", "星期六"],
        oNumber = time.Millisecond / 1000;

    if (sFormat != undefined && sFormat.replace(/\s/g, "").length > 0) {
        if (sLanguage != undefined && sLanguage === "en") {
            MMMArr = MMMArrEn.slice(0);
            WeekArr = WeekArrEn.slice(0);
        }
        sFormat = sFormat.replace(/yyyy/ig, time.Year)
        .replace(/yyy/ig, time.Year)
        .replace(/yy/ig, time.TYear)
        .replace(/y/ig, time.TYear)
        .replace(/MMM/g, MMMArr[time.Month - 1])
        .replace(/MM/g, time.TMonth)
        .replace(/M/g, time.Month)
        .replace(/dd/ig, time.TDay)
        .replace(/d/ig, time.Day)
        .replace(/HH/g, time.THour)
        .replace(/H/g, time.Hour)
        .replace(/hh/g, time.Thour)
        .replace(/h/g, time.hour)
        .replace(/mm/g, time.TMinute)
        .replace(/m/g, time.Minute)
        .replace(/ss/ig, time.TSecond)
        .replace(/s/ig, time.Second)
        .replace(/fff/ig, time.Millisecond)
        .replace(/ff/ig, oNumber.toFixed(2) * 100)
        .replace(/f/ig, oNumber.toFixed(1) * 10)
        .replace(/EEE/g, WeekArr[time.Week]);
    }
    else {
        sFormat = time.Year + "-" + time.Month + "-" + time.Day + " " + time.Hour + ":" + time.Minute + ":" + time.Second;
    }
    return sFormat;
}
// dateDiff表示两个时间之间相隔多长时间，返回的是"10分钟"、"2天"等字符串，一般用在要显示"XX分钟前"、"XX天前"时。
// dateInterval表示两个时间精确差（精确到秒），返回的是"1天：1小时：1分钟：1秒"这样的字符串。
var date = {
	dateDiff: function (biggerDate, smallerDate) {
    var intervalSeconds = parseInt((biggerDate - smallerDate) / 1000);
    if (intervalSeconds < 60) {
        return intervalSeconds + "秒";
    }
    else if (intervalSeconds < 60 * 60) {
        return Math.floor(intervalSeconds / 60) + "分钟";
    }
    else if (intervalSeconds < 60 * 60 * 24) {
        return Math.floor(intervalSeconds / (60 * 60)) + "小时";
    }
    else if (intervalSeconds < 60 * 60 * 24 * 7) {
        return Math.floor(intervalSeconds / (60 * 60 * 24)) + "天";
    }
    else if (intervalSeconds < 60 * 60 * 24 * 31) {
        return Math.floor(intervalSeconds / (60 * 60 * 24 * 7)) + "周";
    }
    else if (intervalSeconds < 60 * 60 * 24 * 365) {
        return Math.floor(intervalSeconds / (60 * 60 * 24 * 30)) + "月";
    }
    else if (intervalSeconds < 60 * 60 * 24 * 365 * 1000) {
        return Math.floor(intervalSeconds / (60 * 60 * 24 * 365)) + "年";
    }
    else {
        return Math.floor(intervalSeconds / (60 * 60 * 24)) + "天";
    }
	},
	dateInterval: function (biggerDate, smallerDate) {
	    var intervalSeconds = parseInt((biggerDate - smallerDate) / 1000),
	        day = Math.floor(intervalSeconds / (60 * 60 * 24)),
	        hour = Math.floor((intervalSeconds - day * 24 * 60 * 60) / 3600),
	        minute = Math.floor((intervalSeconds - day * 24 * 60 * 60 - hour * 3600) / 60),
	        second = Math.floor(intervalSeconds - day * 24 * 60 * 60 - hour * 3600 - minute * 60);
	    return day + "天:" + hour + "小时:" + minute + "分钟:" + second + "秒";
	},
	//date format 
	add0:function(m){
		return m<10?'0'+m:m;
	},
	format:function(dataString,style){
		//shijianchuo是整数，否则要parseInt转换
		style = style || 0;
		var time = new Date(dataString);
		var y = time.getFullYear();
		var m = time.getMonth()+1;
		var d = time.getDate();
		var h = time.getHours();
		var mm = time.getMinutes();
		var s = time.getSeconds();
		//'+add0(h)+':'+add0(mm)+':'+add0(s);

		if(style == 1) {
			return y+'/'+this.add0(m)+'/'+this.add0(d);
		}else if(style == 2){
			return  y+'-'+this.add0(m)+'-'+this.add0(d);
		}else{
			return y+'/'+this.add0(m)+'/'+this.add0(d)+' '+this.add0(h)+':'+this.add0(mm)+':'+this.add0(s);

		}
	}
}

var data = {
	/**
     * 将值转为int型，若失败，则返回0
     * @param {string} val 要转换的值
     * @returns {int}
     */
    GetInt: function (val) {
        return this.GetIntDefault(val, 0);
    },
    /**
     * 将值转为int型，若失败，则返回null
     * @param {string} val 要转换的值
     * @returns {int?} 如果转换失败，则返回null
     */
    GetIntNull: function (val) {
        return this.GetIntDefault(val, null);
    },
    /**
     * 将值转为int型，若失败，则返回defaultValue
     * @param {string} val 要转换的值
     * @param {int} defaultValue 默认值
     * @returns {int} 转换结果
     */
    GetIntDefault: function (val, defaultValue) {
        return parseInt(val, 10) || defaultValue;
    },
    /**
     * 将值转为float型，若失败，则返回0
     * @param {string} val 要转换的值
     * @returns {float} 转换结果
     */
    GetFloat: function (val) {
        return this.GetFloatDefault(val, 0);
    },
    /**
     * 将值转为float型，若失败，则返回null
     * @param {string} val 要转换的值
     * @returns {float?} 转换结果
     */
    GetFloatNull: function (val) {
        return this.GetFloatDefault(val, null);
    },
    /**
     * 将值转为float型，若失败，则返回defaultValue
     * @param {string} val 要转换的值
     * @param {float} defaultValue 默认值
     * @returns {float} 转换结果
     */
    GetFloatDefault: function (val, defaultValue) {
        return parseFloat(val) || defaultValue;
    },
    /**
     * 将值转为object(eval)
     * @param {string} val 要转换的值
     * @returns {object} 转换结果
     */
    GetObject: function (val) {
        return eval(val);
    },
    /**
     * 判断val是否为数字
     * @param {object} val 要判断的值
     * @returns {Boolean} 判断结果
     */
    IsNumber: function (val) {
        return (typeof (val) === 'number' || typeof (val) === 'string') && val !== '' && !isNaN(val);
    },
    /**
     * 判断指定值是否为一个对象
     * @param {object} val 要判断的值
     * @returns {Boolean} 判断结果
     */
    IsObject: function (val) {
        return val !== null && typeof val === 'object';
    },
    /**
     * 判断指定值是否为Date对象
     * @param {object} val 要判断的值
     * @returns {Boolean} 判断结果
     */
    IsDate: function (val) {
        return val instanceof Date && !isNaN(val.valueOf());
    },
    /**
     * 判断指定值是否为数组
     * @param {object} val 要判断的值
     * @returns {Boolean} 判断结果
     */
    IsArray: function (val) {
        return Object.prototype.toString.call(val) === "[object Array]";
    },
    /**
     * 判断指定值为null或为空字符串
     * @param {string} val 要判断的值
     * @returns {Boolean} 判断结果
     */
    IsNullOrEmpty: function (val) {
        return null === val || val === "";
    },
    /**
     * 判断指定值为null，或为空字符串，或为空白字符串
     * @param {string} val 要判断的值
     * @returns {Boolean} 判断结果
     */
    IsNullOrWhiteSpace: function (val) {
        return this.IsNullOrEmpty(stringLib.Trim(val));
    },
    /**
     * 判断指定值是否为html元素
     * @param {object} val 要判断的值
     * @returns {Boolean} 判断结果
     */
    IsElement: function (val) {
        return typeof HTMLElement === "object" ? val instanceof HTMLElement : val && typeof val === "object" && val !== null && val.nodeType === 1 && typeof val.nodeName === "string";
    },
    /**
     * 判断指定值是否为function
     * @param {object} val 要判断的值
     * @returns {Boolean} 判断结果
     */
    IsFunction: function (val) {
        return Object.prototype.toString.call(val) == '[object Function]';
    },
    /**
     * 判断指定值是否为String
     * @param {object} val 要判断的值
     * @returns {Boolean} 判断结果
     */
    IsString: function (val) {
        return typeof val == 'string' || val instanceof String;
    },
    /**
     * 判断指定字符串是否为"true"
     * @param {string} val 要判断的值
     * @returns {bool} 判断结果
     */
    IsBoolean: function (val) {
        return /^true$/i.test(val);
    },
    /**
     * 判断指定值是否为RegExp对象
     * @param {object} val 要判断的值
     * @returns {bool} 判断结果
     */
    IsRegExp: function (val) {
        return val && val instanceof RegExp;
    },
    /**
     * 判断指定值是否为NaN
     * @param {object} val 要判断的值
     * @returns {Boolean} 判断结果
     */
    IsNaN: function (val) {
        return isNaN(val);
    },
    /**
     * 判断指定值是否为null
     * @param {object} val 要判断的值
     * @returns {Boolean} 判断结果
     */
    IsNull: function (val) {
        return !arg1 && arg1!==0 && typeof arg1!=="boolean"?true:false;;
    },
    /**
     * 判断指定值是否为undefined
     * @param {object} val 要判断的值
     * @returns {Boolean} 判断结果
     */
    IsUndefined: function (val) {
        return val === undefined || typeof (val) === "undefined";
    },
    /**
     * 指定值是否全部为大写
     * @param {string} val 要判断的值
     * @returns {Boolean} 判断结果
     */
    IsUpper: function (val) {
        return val.toUpperCase() === val;
    },
    /**
     * 指定值是否全部为小写
     * @param {string} val 要判断的值
     * @returns {Boolean} 判断结果
     */
    IsLower: function (val) {
        return val.toLowerCase() === val;
    }
}

var json = {
	/**
     * 是否包含名key
     * @param {object} json json对象
     * @param {string} keyName key名
     * @returns {bool} 判断结果
     */
    HasKey: function (json, keyName) {
        var r = false;
        if (json) {
            if (keyName in json) {
                r = true;
            }
        }
        return r;
    },
    /**
     * 是否包含值value
     * @param {object} json json对象
     * @param {object} keyValue value值
     * @returns {bool} 判断结果
     */
    HasValue: function (json, keyValue) {
        var r = false;
        if (json) {
            for (var k in json) {
                if (json[k] === keyValue) {
                    r = true;
                    break;
                }
            }
        }
        return r;
    },
    /**
     * json对象转成param形式的字符串，如{a:1,b:2,c:[3,4,5]}=>"a=1&b=2&c=3&c=4&c=5"
     * @param {object} json 待转换的json数据源
     * @returns {string} 转换结果
     */
    ToParams: function (json) {
        if (!json) return "";
        var arr = [], temp = "";
        for (var m in json) {
            temp = "";
            if (dataLib.IsArray(json[m])) {
                temp = json[m].join("&" + m + "=");
            } else {
                temp = json[m];
            }
            arr.push(m + "=" + temp);
        }
        return arr.join("&");
    }
}

var image = {
	/**
    * 判断Content-Type(Mime-Type) 是否为gif格式
    * @param {string} type ContentType
    * @returns {bool} 判断结果
    */
    IsGif: function (type) {
        return /^image\/gif$/i.test(type);
    },
    /**
    * 判断Content-Type(Mime-Type) 是否为jpg/jpeg格式
    * @param {string} type ContentType
    * @returns {bool} 判断结果
    */
    IsJpg: function (type) {
        return /^(image\/jpeg)|(application\/x\-jpg)$/i.test(type);
    },
    /**
    * 判断Content-Type(Mime-Type) 是否为png格式
    * @param {string} type ContentType
    * @returns {bool} 判断结果        
    */
    IsPng: function (type) {
        return /^(image\/png)|(application\/x\-png)$/i.test(type);
    },
    /**
    * 判断Content-Type(Mime-Type) 是否为bmp格式
    * @param {string} type ContentType
    * @returns {bool} 判断结果
    */
    IsBmp: function (type) {
        return /^application\/x\-bmp$/i.test(type);
    },
    /**
    * 判断Content-Type(Mime-Type) 是否为gif/jpg/jpeg/png/bmp格式
    * @param {string} type ContentType
    * @returns {bool} 判断结果
    */
    IsImage: function (type) {
        return /^(image\/(gif|jpeg|png))|(application\/(x\-jpg|x\-png|x\-bmp))$/i.test(type);
    }
}