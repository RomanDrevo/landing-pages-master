var	system_time = 0;

function showLoading(){
	$('#loading').show();
}

function hideLoading(){
	$('#loading').hide();
}

function pad(number, length){
	var str = ""+number;
	while (str.length < length) {
		str = '0'+str;
	}
	return str
}

function checkTime(i)
{
	if (i<10)
	{
		i="0" + i;
	}
	return i;
}

function systemTime()
{
	var offset = new Date().getTimezoneOffset(),
		offset_str = ((offset<0? '+':'-')+
		pad(parseInt(Math.abs(offset/60)), 2)+
		pad(Math.abs(offset%60), 2));

//	var today=new Date((system_time + offset*60)*1000),
	var today=new Date((system_time)*1000),
		h=today.getHours(),
		m=today.getMinutes(),
		s=today.getSeconds();

	m=checkTime(m);
	s=checkTime(s);
	document.getElementById('system_time').innerHTML=h+":"+m+":"+s;
	document.getElementById('my_timezone').innerHTML=offset_str;

	setTimeout(function(){system_time++;systemTime()},1000);
}

function getRandomInt(min, max) {
    return Math.floor(Math.random() * (max - min + 1)) + min;
}

function getCookie(name,dflt) {
    var matches = document.cookie.match(new RegExp(
        "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
    ));
    return matches ? decodeURIComponent(matches[1]) : dflt;
}

function setCookie(name, value, options) {
    options = options || {};

    var expires = options.expires;

    if (typeof expires == "number" && expires) {
        var d = new Date();
        d.setTime(d.getTime() + expires*1000);
        expires = options.expires = d;
    }
    if (expires && expires.toUTCString) {
        options.expires = expires.toUTCString();
    }

    value = encodeURIComponent(value);

    var updatedCookie = name + "=" + value;

    for(var propName in options) {
        updatedCookie += "; " + propName;
        var propValue = options[propName];
        if (propValue !== true) {
            updatedCookie += "=" + propValue;
        }
    }

    document.cookie = updatedCookie;
}

function getParameterByName(name) {
    name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
    var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
        results = regex.exec(location.search);
    return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
}

function ExitSplash(params){
    params = params || {};
    params.message = params.message || '';
    params.iframe_url;
    params.url_type = params.url_type || 'static';
    params.extra_desctruction = params.extra_desctruction || function(){};

    PreventExitSplash = false;

    if(params.url_type == 'static'){
        $('a[target!="blank"]').on('click',function(){
            PreventExitSplash=true;
        });
    }
    else{
        $(document).on('click','a[target!="blank"]',function(){
            PreventExitSplash=true;
        });
    }




    var disableformsfunc = function(){
        var f = document.getElementsByTagName('form');
        for (var i=0;i<f.length;i++){
            if(!f[i].onclick){ f[i].onclick=function(){ PreventExitSplash=true; }}
            else if (!f[i].onsubmit){ f[i].onsubmit=function(){ PreventExitSplash=true; }}
        }
    };

    disableformsfunc();


    $(window).off('beforeunload');
    $(window).on('beforeunload',function(){
        if(!PreventExitSplash){
            var BODY = $('body');

            params.extra_desctruction();

            BODY.children('div,table').remove();
            $('html,body').scrollTop(0);
            BODY.append(
                '<div id="mainIframeOuterTrue" style="position:fixed;top:0;left:0;width:100%;height:100%;display:none;"><iframe style="width:100%;height:100%;display:block" scrolling="auto" frameborder="0" src="'+params.iframe_url+'"></iframe></div>'
            );
            $("#mainIframeOuterTrue").show();

            PreventExitSplash = true; // For idiot browsers

            return params.message;
        }
    });
}