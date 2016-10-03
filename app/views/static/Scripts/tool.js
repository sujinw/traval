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


/**
 * 移动端model弹窗和提示插件封装
 */
//////////////////////////////////////////////////////////////////////////////////////////////
//=============================DEMO======================================================== //
//  
/*var model1 = new model({
    title:"模态框标题",
    content:"这是一条模态框的提示说明",
  button:{
    '确定':{
      callback:function(){
        model1.close(function(){
          new model({
            id:"aa",
          });
        });
      }
    }
  }
});*/
// new model({id:"test"});
/*new tips({
  closed:function(){
    new tips({
      id:'tips-1',
      icon:'success',
      closed:function(){
        new tips({
          id:"warn",
          icon:"warn",
          closed:function(){
            alert('全部展示完成了');
          }
        });
      }
    });
  }
});                                                                                      //
                                                                                   //
//////////////////////////////////////////////////////////////////////////////////////////////
//合并json*/ 
function addJson(jsonbject1, jsonbject2) {
    var resultJsonObject={};
    for(var attr in jsonbject1){
        resultJsonObject[attr]=jsonbject1[attr];
    }
    for(var attr in jsonbject2){
        resultJsonObject[attr]=jsonbject2[attr];
    }
 
    return resultJsonObject;
};
function debug(title,data){
    console.log(title);
    console.log(data)
}
function jsonHasKey(json,key){
    if(typeof json !== 'object') return false;
    if(json[key]){return true}
    return false;
}
function attr(ele,key,value){
    ele.setAttribute(key,value);
}
function removeNodeById(id) {
    var node = document.getElementById(id);
    if (node) {
        node.parentNode.removeChild(node);
    }
}
/**
 * [模态框]
 * @param    {[type]}                 window [description]
 * @return   {[type]}                        [description]
 * @Author   Rukic
 * @DateTime 2016-09-24T20:55:33+0800
 */
;(function(window){

    function model(option){
        var defaultOpt = {
            id:"model",
            button:{
                "取消":{
                    style:{'background':'#fff',"color":"#999"},
                    callback:function(){}
                },
                "确定":{
                    style:{'background':'#fff',"color":"#0BB20C"},
                    callback:function(){}
                }
            },
            content:"model封装",
            title:"标题",
            shadow:true,//遮罩
            shadowClose:true,
            closed:function(){},
        }
        option = typeof option === 'object' ? option : {};
        this.opt = addJson(defaultOpt,option);
        this.init();    
    }
    model.prototype = {
        init:function(){
            this.createCss();
            this.createShadow();
            this.createWin();
            this.createTitle();
            this.createContent();
            this.createBtn();
            this.innsertToBody();

            //事件
            //this.closeEvent();

            if(this.opt.shadowClose){
                var shadow = document.getElementsByClassName('model-shadow')[0];

                var self = this;
                shadow.onclick = function(){
                    self.close();
                }
            }
        },
        createWin:function(){
            var win = document.createElement('div');
            //设置id
            attr(win,'id',this.opt['id']);
            attr(win,'class','model-phone');
            console.log(win);
            this.win = win;
        },
        createShadow:function(){
            var shadow = document.createElement('div');
                attr(shadow,'id','model-shadow-'+this.opt.id);
                attr(shadow,'class','model-shadow');
                this.shadow = shadow;
        },
        createTitle:function(){
            var title = document.createElement('div');
            attr(title,'class','model-title');
            title.innerHTML = this.opt.title;
            this.title = title;
            this.win.appendChild(this.title);
        },
        createContent:function(){
            var content = document.createElement('div');
            attr(content,'class','model-content');
            content.innerHTML = this.opt['content'];
            console.log(content);
            this.content=content;
            this.win.appendChild(content);
        },
        createBtn:function(){
            var btns = this.opt.button;
            var btnBox = document.createElement('div');
            attr(btnBox,'class','model-btn-box');
            var i=0;
            for(var k in btns){

                var btn = document.createElement('a');

                if((i+1)%2 == 0 ){
                    attr(btn,"class","two-btn");
                }
                btn.innerHTML = k;
                if(jsonHasKey(btns[k],'style')){
                    var styleText = "";
                    for(var key in btns[k]['style']){
                        styleText += key + ":" + btns[k]['style'][key] + ";";
                    }
                    attr(btn,'href','javascript:;');
                    attr(btn,'style',styleText);
                    console.log(btns[k]['style']);
                }
                if(jsonHasKey(btns[k], 'callback')){
                    debug('事件',typeof btns[k]['callback']);
                    //绑定回调
                    if(typeof btns[k]['callback'] === 'function'){
                        btn.onclick =  function(){
                            btns[k]['callback']();
                        }
                    }
                }
                btnBox.appendChild(btn);
                i++;
            }
            console.log(btnBox)
            this.btnBox;
            this.win.appendChild(btnBox);
            
        },
        createCss:function(){
            var cssText = document.createElement("style");
                attr(cssText,'id',this.opt['id']+"_style");
            var str = ".model-shadow{position: fixed;z-index: 1000;width: 100%;height: 100%;top: 0;left: 0;background: rgba(0,0,0,.6);}";
                str+= ".model-phone{position: fixed;z-index: 5000;width: 85%;top: 50%;left: 50%;-webkit-transform: translate(-50%,-50%); transform: translate(-50%,-50%);background-color: #fafafc;text-align: center; border-radius: 3px;overflow: hidden;}"
                str+= ".model-phone .model-title{font-weight: 400;font-size: 17px;padding: 1.2em 20px .5em;}";
                str+= ".model-phone .model-content{padding: 0 20px;font-size: 15px;color: #888;word-wrap: break-word; word-break: break-all;}";
                str+= ".model-phone .model-btn-box{position: relative;line-height: 42px;margin-top: 20px;font-size: 17px;display: -webkit-box;display: -webkit-flex; display: flex;}";
                str+= ".model-phone .model-btn-box:after{content: '';position: absolute;left: 0; top: 0; right: 0;height: 1px; border-top: 1px solid #D5D5D6; color: #D5D5D6; -webkit-transform-origin: 0 0;transform-origin: 0 0; -webkit-transform: scaleY(0.5);transform: scaleY(0.5);}";
                str+= ".model-phone .model-btn-box .two-btn:after{content: ''; position: absolute; left: 0;top: 0; width: 1px; bottom: 0; border-left: 1px solid #D5D5D6;color: #D5D5D6; -webkit-transform-origin: 0 0;transform-origin: 0 0; -webkit-transform: scaleX(0.5);transform: scaleX(0.5);}";
                str+= ".model-phone .model-btn-box a{display: block; -webkit-box-flex: 1; -webkit-flex: 1; flex: 1; color: #3cc51f;text-decoration: none; -webkit-tap-highlight-color: rgba(0,0,0,0);position: relative;}";
            cssText.innerHTML = str;            
            this.cssText = cssText;
            document.getElementsByTagName('body')[0].appendChild(this.cssText);

        },
        innsertToBody:function(){
            //插入
            var body = document.getElementsByTagName('body')[0];
            if(jsonHasKey(this.opt,'shadow')){
                //this.shadow.appendChild(this.win);
                body.appendChild(this.shadow);
                body.appendChild(this.win);
            }else{
                body.appendChild(this.win);
            }
        },
        //事件开始
        close:function(fun){
            var shadow = document.getElementsByClassName('model-shadow')[0];
            var win = document.getElementsByClassName('model-phone')[0];
            console.log(shadow);
            win.style.display = 'none';
            shadow.style.display = 'none';
            removeNodeById('model-shadow-'+this.opt.id)
            removeNodeById(this.opt['id']+"_style")
            removeNodeById(this.opt.id)
            this.opt.closed();
            if(typeof fun === 'function'){
                fun();
            }
        }
    }
    window.model = model;
})(window)
/**
 * [提示插件]
 * @param    {[type]}                 window [description]
 * @return   {[type]}                        [description]
 * @Author   Rukic
 * @DateTime 2016-09-24T22:07:07+0800
 */
;(function(window){
    function tips(option){
        var defaultOpt = {
                id:"tips",
                icon:'loading',//false不要,success,warn,loading
                tips:"提示信息",
                timeOut:3,//单位秒
                closed:function(){},
            }
            option = typeof option === 'object' ? option : {};
            this.opt = addJson(defaultOpt,option);
            this.init();
    }
    tips.prototype = {
        init:function(){
            this.createCss();
            this.createWin();
            this.createIcon();
            this.createTips();
            this.insertToBody();

            //自动关闭
            if(this.opt.timeOut){
                var self = this;
                setTimeout(function(){
                    self.close(self.closed());
                },parseInt(self.opt.timeOut)*1000);
            }
        },
        createWin : function(){
            var win = document.createElement('div');
            attr(win,"id",this.opt.id);
            attr(win,"class",'tips-win');
            this.win = win;
        },
        createIcon : function(){
            var icon = document.createElement('i');
            if(this.opt.icon){
                attr(icon,'class','tips-icon '+this.opt.icon);
            }
            this.icon = icon;
            this.win.appendChild(icon);
        },
        createTips:function(){
            var tips = document.createElement('p');
            attr(tips,'class','tips-content');
            tips.innerHTML = this.opt.tips;
            this.tips = tips;
            this.win.appendChild(tips);
        },
        createCss:function(){
            var style = document.createElement('style');
            var cssText = "@font-face {font-weight: normal;font-style: normal;  font-family: 'weui';  src: url('data:application/octet-stream;base64,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') format('truetype');}";
                cssText += ".tips-win{position: fixed;z-index: 5000; width: 7.6em; min-height: 7.6em; top: 180px; left: 50%; margin-left: -3.8em;background: rgba(40, 40, 40, 0.75); text-align: center; border-radius: 5px;color: #FFFFFF;}"       
                cssText += ".tips-win .tips-icon{margin: 22px 0 0; display: block;}";
                cssText += ".tips-win .tips-icon:before{color: #FFFFFF;font-size: 55px;font-family: 'weui'; font-style: normal;font-weight: normal; speak: none;display: inline-block;vertical-align: middle;text-decoration: inherit;width: 1em;margin-right: .2em;text-align: center;font-variant: normal;text-transform: none;line-height: 1em;margin-left: .2em; text-shadow: 1px 1px 1px rgba(127, 127, 127, 0.3); }"
                cssText += ".tips-win .success:before{ content:'\\EA08';}";
                cssText += ".tips-win .warn:before{ content:'\\EA0B';}";
                cssText += ".tips-win .loading{width: 20px; height: 20px;display: inline-block;vertical-align: middle;-webkit-animation: weuiLoading 1s steps(12, end) infinite;animation: weuiLoading 1s steps(12, end) infinite; background: transparent url(data:image/svg+xml;base64,PHN2ZyBjbGFzcz0iciIgd2lkdGg9JzEyMHB4JyBoZWlnaHQ9JzEyMHB4JyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAxMDAgMTAwIj4KICAgIDxyZWN0IHg9IjAiIHk9IjAiIHdpZHRoPSIxMDAiIGhlaWdodD0iMTAwIiBmaWxsPSJub25lIiBjbGFzcz0iYmsiPjwvcmVjdD4KICAgIDxyZWN0IHg9JzQ2LjUnIHk9JzQwJyB3aWR0aD0nNycgaGVpZ2h0PScyMCcgcng9JzUnIHJ5PSc1JyBmaWxsPScjRTlFOUU5JwogICAgICAgICAgdHJhbnNmb3JtPSdyb3RhdGUoMCA1MCA1MCkgdHJhbnNsYXRlKDAgLTMwKSc+CiAgICA8L3JlY3Q+CiAgICA8cmVjdCB4PSc0Ni41JyB5PSc0MCcgd2lkdGg9JzcnIGhlaWdodD0nMjAnIHJ4PSc1JyByeT0nNScgZmlsbD0nIzk4OTY5NycKICAgICAgICAgIHRyYW5zZm9ybT0ncm90YXRlKDMwIDUwIDUwKSB0cmFuc2xhdGUoMCAtMzApJz4KICAgICAgICAgICAgICAgICByZXBlYXRDb3VudD0naW5kZWZpbml0ZScvPgogICAgPC9yZWN0PgogICAgPHJlY3QgeD0nNDYuNScgeT0nNDAnIHdpZHRoPSc3JyBoZWlnaHQ9JzIwJyByeD0nNScgcnk9JzUnIGZpbGw9JyM5Qjk5OUEnCiAgICAgICAgICB0cmFuc2Zvcm09J3JvdGF0ZSg2MCA1MCA1MCkgdHJhbnNsYXRlKDAgLTMwKSc+CiAgICAgICAgICAgICAgICAgcmVwZWF0Q291bnQ9J2luZGVmaW5pdGUnLz4KICAgIDwvcmVjdD4KICAgIDxyZWN0IHg9JzQ2LjUnIHk9JzQwJyB3aWR0aD0nNycgaGVpZ2h0PScyMCcgcng9JzUnIHJ5PSc1JyBmaWxsPScjQTNBMUEyJwogICAgICAgICAgdHJhbnNmb3JtPSdyb3RhdGUoOTAgNTAgNTApIHRyYW5zbGF0ZSgwIC0zMCknPgogICAgPC9yZWN0PgogICAgPHJlY3QgeD0nNDYuNScgeT0nNDAnIHdpZHRoPSc3JyBoZWlnaHQ9JzIwJyByeD0nNScgcnk9JzUnIGZpbGw9JyNBQkE5QUEnCiAgICAgICAgICB0cmFuc2Zvcm09J3JvdGF0ZSgxMjAgNTAgNTApIHRyYW5zbGF0ZSgwIC0zMCknPgogICAgPC9yZWN0PgogICAgPHJlY3QgeD0nNDYuNScgeT0nNDAnIHdpZHRoPSc3JyBoZWlnaHQ9JzIwJyByeD0nNScgcnk9JzUnIGZpbGw9JyNCMkIyQjInCiAgICAgICAgICB0cmFuc2Zvcm09J3JvdGF0ZSgxNTAgNTAgNTApIHRyYW5zbGF0ZSgwIC0zMCknPgogICAgPC9yZWN0PgogICAgPHJlY3QgeD0nNDYuNScgeT0nNDAnIHdpZHRoPSc3JyBoZWlnaHQ9JzIwJyByeD0nNScgcnk9JzUnIGZpbGw9JyNCQUI4QjknCiAgICAgICAgICB0cmFuc2Zvcm09J3JvdGF0ZSgxODAgNTAgNTApIHRyYW5zbGF0ZSgwIC0zMCknPgogICAgPC9yZWN0PgogICAgPHJlY3QgeD0nNDYuNScgeT0nNDAnIHdpZHRoPSc3JyBoZWlnaHQ9JzIwJyByeD0nNScgcnk9JzUnIGZpbGw9JyNDMkMwQzEnCiAgICAgICAgICB0cmFuc2Zvcm09J3JvdGF0ZSgyMTAgNTAgNTApIHRyYW5zbGF0ZSgwIC0zMCknPgogICAgPC9yZWN0PgogICAgPHJlY3QgeD0nNDYuNScgeT0nNDAnIHdpZHRoPSc3JyBoZWlnaHQ9JzIwJyByeD0nNScgcnk9JzUnIGZpbGw9JyNDQkNCQ0InCiAgICAgICAgICB0cmFuc2Zvcm09J3JvdGF0ZSgyNDAgNTAgNTApIHRyYW5zbGF0ZSgwIC0zMCknPgogICAgPC9yZWN0PgogICAgPHJlY3QgeD0nNDYuNScgeT0nNDAnIHdpZHRoPSc3JyBoZWlnaHQ9JzIwJyByeD0nNScgcnk9JzUnIGZpbGw9JyNEMkQyRDInCiAgICAgICAgICB0cmFuc2Zvcm09J3JvdGF0ZSgyNzAgNTAgNTApIHRyYW5zbGF0ZSgwIC0zMCknPgogICAgPC9yZWN0PgogICAgPHJlY3QgeD0nNDYuNScgeT0nNDAnIHdpZHRoPSc3JyBoZWlnaHQ9JzIwJyByeD0nNScgcnk9JzUnIGZpbGw9JyNEQURBREEnCiAgICAgICAgICB0cmFuc2Zvcm09J3JvdGF0ZSgzMDAgNTAgNTApIHRyYW5zbGF0ZSgwIC0zMCknPgogICAgPC9yZWN0PgogICAgPHJlY3QgeD0nNDYuNScgeT0nNDAnIHdpZHRoPSc3JyBoZWlnaHQ9JzIwJyByeD0nNScgcnk9JzUnIGZpbGw9JyNFMkUyRTInCiAgICAgICAgICB0cmFuc2Zvcm09J3JvdGF0ZSgzMzAgNTAgNTApIHRyYW5zbGF0ZSgwIC0zMCknPgogICAgPC9yZWN0Pgo8L3N2Zz4=) no-repeat;background-size: 100%;}";
                cssText += ".tips-win .loading{margin: 30px 0 0;width: 38px;height: 38px;vertical-align: baseline;}";
                cssText += "@-webkit-keyframes weuiLoading {0% { -webkit-transform: rotate3d(0, 0, 1, 0deg);}100% {-webkit-transform: rotate3d(0, 0, 1, 360deg);}}@keyframes weuiLoading {0%{-webkit-transform: rotate3d(0, 0, 1, 0deg);}100% {-webkit-transform: rotate3d(0, 0, 1, 360deg);}}";
                attr(style,'id',this.opt.id+"-style");
                style.innerHTML = cssText;
                this.css = style;
        },
        insertToBody:function(){
            var body = document.getElementsByTagName('body')[0];
            body.appendChild(this.css);
            body.appendChild(this.win);
        },
        close:function(fun){
            var win = document.getElementById(this.opt.id);
            var style = document.getElementById(this.opt.id+"-style");
            win.style.display = 'none';
            removeNodeById(this.opt.id);
            removeNodeById(this.opt.id+"-style");
            if(typeof fun === 'function'){
                fun();
            }
        },
        closed:function(){
            if(typeof this.opt.closed === 'function'){
                this.opt.closed();
            }
        }
    }
    window.tips = tips;
})(window)