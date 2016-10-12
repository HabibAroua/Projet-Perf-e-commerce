<!DOCTYPE html>
<html xmlns:fb="http://ogp.me/ns/fb#" itemtype="http://schema.org"><head><meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=IE7"><meta name="fragment" content="!"><meta name="robots" content="NOODP"><meta charset="utf-8"><meta property="og:site_name" content="Coursera"><meta property="fb:admins" content="727836538,4807654"><meta property="fb:app_id" content="823425307723964"><meta name="twitter:site" content="Coursera"><meta name="twitter:app:name:iphone" content="Coursera"><meta name="twitter:app:name:ipad" content="Coursera"><meta name="twitter:app:name:googleplay" content="Coursera"><meta name="twitter:app:id:iphone" content="id736535961"><meta name="twitter:app:id:ipad" content="id736535961"><meta name="twitter:app:id:googleplay" content="org.coursera.android"><meta name="prerender-status-code" content="503"><meta name="viewport" content="width=device-width, initial-scale=1"><link rel="apple-touch-icon" sizes="57x57" href="https://d3njjcbhbojbot.cloudfront.net/web/images/favicons/apple-touch-icon-57x57.png"><link rel="apple-touch-icon" sizes="60x60" href="https://d3njjcbhbojbot.cloudfront.net/web/images/favicons/apple-touch-icon-60x60.png"><link rel="apple-touch-icon" sizes="72x72" href="https://d3njjcbhbojbot.cloudfront.net/web/images/favicons/apple-touch-icon-72x72.png"><link rel="apple-touch-icon" sizes="76x76" href="https://d3njjcbhbojbot.cloudfront.net/web/images/favicons/apple-touch-icon-76x76.png"><link rel="apple-touch-icon" sizes="114x114" href="https://d3njjcbhbojbot.cloudfront.net/web/images/favicons/apple-touch-icon-114x114.png"><link rel="apple-touch-icon" sizes="120x120" href="https://d3njjcbhbojbot.cloudfront.net/web/images/favicons/apple-touch-icon-120x120.png"><link rel="apple-touch-icon" sizes="144x144" href="https://d3njjcbhbojbot.cloudfront.net/web/images/favicons/apple-touch-icon-144x144.png"><link rel="apple-touch-icon" sizes="152x152" href="https://d3njjcbhbojbot.cloudfront.net/web/images/favicons/apple-touch-icon-152x152.png"><link rel="apple-touch-icon" sizes="180x180" href="https://d3njjcbhbojbot.cloudfront.net/web/images/favicons/apple-touch-icon-180x180.png"><link rel="icon" type="image/png" href="https://d3njjcbhbojbot.cloudfront.net/web/images/favicons/icon-194x194.png" sizes="194x194"><link rel="icon" type="image/png" href="https://d3njjcbhbojbot.cloudfront.net/web/images/favicons/android-chrome-192x192.png" sizes="192x192"><link rel="icon" type="image/png" href="https://d3njjcbhbojbot.cloudfront.net/web/images/favicons/icon-blue-96x96.png" sizes="96x96"><link rel="icon" type="image/png" href="https://d3njjcbhbojbot.cloudfront.net/web/images/favicons/icon-blue-16x16.png" sizes="16x16"><link rel="icon" type="image/png" href="https://d3njjcbhbojbot.cloudfront.net/web/images/favicons/icon-blue-32x32.png" sizes="32x32"><meta name="msapplication-TileColor" content="#2d89ef"><meta name="msapplication-TileImage" content="https://d3njjcbhbojbot.cloudfront.net/web/images/favicons/mstile-144x144.png"><meta name="theme-color" content="#4689c6"><meta property="og:title" content="Coursera - Free Online Courses From Top Universities"><meta property="og:locale" content="en_US"><meta property="og:type" content="website"><meta name="description" content="Take free online classes from 140+ top universities and educational organizations. We partner with schools like Stanford, Yale, Princeton, and others to offer courses in dozens of topics, from computer science to teaching and beyond. Whether you are pursuing a passion or looking to advance your career, Coursera provides open, free education for everyone."><meta property="og:description" content="Take free online classes from 140+ top universities and educational organizations. We partner with schools like Stanford, Yale, Princeton, and others to offer courses in dozens of topics, from computer science to teaching and beyond. Whether you are pursuing a passion or looking to advance your career, Coursera provides open, free education for everyone."><meta name="image" content="http://s3.amazonaws.com/coursera/media/Coursera_Computer_Narrow.png"><meta property="og:image" content="http://s3.amazonaws.com/coursera/media/Coursera_Computer_Narrow.png"><meta property="og:url" content="https://www.coursera.org/learn/interactive-computer-graphics/home"><meta property="qc:admins" content="366737676376375235216727"><script>// NOTE: This file gets included in Jade pre-transformed so it must be ES5-safe.

(
    function(global, factory)
	{
        if (typeof exports === 'object' && typeof module != 'undefined')
		{
            module.exports = factory();
        }
       	else if (typeof define === 'function' && define.amd) 
		{
			define(factory);
        }
		else 
		{
            global.errorTracker = factory();
        }
    }
	(this, function() 
	{
		var lastError = {};
        function errorEquals(left, right) 
		{
			return ['message', 'url', 'line', 'column'].every(function(field)
			{
                return left[field] == right[field];
            });
        }

        return function(tracker, options) 
		{
            options = options || {};
            var logger = options.logger || (window && window.console) || {error: function() {}};
            var version = options.version || '';
            var versionTimestamp = options.versionTimestamp || '';
            var stringifyError = function(error) 
			{
				var plainObject = {};
                if (error && typeof(error) == 'object')
				{
					Object.getOwnPropertyNames(error).forEach(function(key) 
					{
                        plainObject[key] = error[key];
                    });
                }
                return JSON.stringify(plainObject);
            };
            var logClientSideError = function(message, url, line, column, error) {
            if (line === undefined || line == null || !url) return;
            if (message.target && message.type) 
			{
				message = message.type;
            }
            if (error && error.stack)
		    {
                var findStackUrlRegExp = /\(([^)\s]+?):\d+:\d+\)/gm;
                var findLastStackUrlRegExp = /\s*(https?:\/\/[^:\s]+?):\d+:\d+\s*$/gm;
                var match;
                var local = true;
            while (match = findStackUrlRegExp.exec(error.stack))
			{
				if (match && !options.scriptFilter.test(match[1])) 
				{
                    local = false;
                    break;
                }
            }
            if (local) 
			{
				while (match = findLastStackUrlRegExp.exec(error.stack)) 
			    {
                    if (match && !options.scriptFilter.test(match[1])) 
					{
                        local = false;
                        break;
                    }
                }
            }
            if (!local) return;
        }
        var errorStr = stringifyError(error);
        var errorDescrip = 
		{
            message: message,
            script: url,
            line: line,
            url: window && window.document ? window.document.URL : url,
            column: column,
            error: errorStr,
            version: version,
            versionTimestamp: versionTimestamp
        };
        logger.error(errorStr);
        var trackableUrl = url && (!options.scriptFilter || options.scriptFilter.test(url));
        if (trackableUrl)
		{
            var isNewError = !errorEquals(errorDescrip, lastError);
            if (isNewError) 
		    {
                lastError = errorDescrip;
                 tracker(errorDescrip);
            }
        }
    };

    if (typeof window !== 'undefined')
	{
        window.onerror = logClientSideError;
        if (window.errorTracker) 
		{
            delete window.errorTracker;
        }
    }
	else 
	{
        return logClientSideError;
    }
 };
}));
window._204 = [];
window._400 = [];
if(window.errorTracker) {
  window.errorTracker(
    function(error) {
      window._400.push({key:'page.error.javascript', value:error});
    },
    {
      scriptFilter: new RegExp('^/|^' + location.protocol + '//' + location.host + '|^https://d3njjcbhbojbot.cloudfront.net/web/'),
      version:"da617f4985968492ca006d572245eca4d85ca7e4",
      versionTimestamp:"1472847705"
    });
}</script><style>@font-face {
  font-family: 'coursera-iconfont';
  src: url("https://d3njjcbhbojbot.cloudfront.net/web/bundles/styleguide/icons/fonts/coursera.v25.eot");
  src: url("https://d3njjcbhbojbot.cloudfront.net/web/bundles/styleguide/icons/fonts/coursera.v25.eot?#iefix") format('embedded-opentype'),
       url("https://d3njjcbhbojbot.cloudfront.net/web/bundles/styleguide/icons/fonts/coursera.v25.woff") format('woff'),
       url("https://d3njjcbhbojbot.cloudfront.net/web/bundles/styleguide/icons/fonts/coursera.v25.ttf") format('truetype'),
       url("https://d3njjcbhbojbot.cloudfront.net/web/bundles/styleguide/icons/fonts/coursera.v25.svg") format('svg');
}

@font-face {
  font-family: 'OpenSans-Light';
  src: url("https://d3njjcbhbojbot.cloudfront.net/web/type/opensans/OpenSans-Light.eot");
  src: url("https://d3njjcbhbojbot.cloudfront.net/web/type/opensans/OpenSans-Light.eot?#iefix") format('embedded-opentype'),
       url("https://d3njjcbhbojbot.cloudfront.net/web/type/opensans/OpenSans-Light.woff2") format('woff2'),
       url("https://d3njjcbhbojbot.cloudfront.net/web/type/opensans/OpenSans-Light.woff") format('woff'),
       url("https://d3njjcbhbojbot.cloudfront.net/web/type/opensans/OpenSans-Light.ttf") format('truetype'),
       url("https://d3njjcbhbojbot.cloudfront.net/web/type/opensans/OpenSans-Light.svg#OpenSans-Light") format('svg');
  font-weight: normal;
  font-style: normal;
}
@font-face {
  font-family: 'OpenSans';
  src: url("https://d3njjcbhbojbot.cloudfront.net/web/type/opensans/OpenSans-Regular.eot");
  src: url("https://d3njjcbhbojbot.cloudfront.net/web/type/opensans/OpenSans-Regular.eot?#iefix") format('embedded-opentype'),
       url("https://d3njjcbhbojbot.cloudfront.net/web/type/opensans/OpenSans-Regular.woff2") format('woff2'),
       url("https://d3njjcbhbojbot.cloudfront.net/web/type/opensans/OpenSans-Regular.woff") format('woff'),
       url("https://d3njjcbhbojbot.cloudfront.net/web/type/opensans/OpenSans-Regular.ttf") format('truetype'),
       url("https://d3njjcbhbojbot.cloudfront.net/web/type/opensans/OpenSans-Regular.svg#OpenSans-Regular") format('svg');
  font-weight: normal;
  font-style: normal;
}
@font-face {
  font-family: 'OpenSans-Semibold';
  src: url("https://d3njjcbhbojbot.cloudfront.net/web/type/opensans/OpenSans-Semibold.eot");
  src: url("https://d3njjcbhbojbot.cloudfront.net/web/type/opensans/OpenSans-Semibold.eot?#iefix") format('embedded-opentype'),
       url("https://d3njjcbhbojbot.cloudfront.net/web/type/opensans/OpenSans-Semibold.woff2") format('woff2'),
       url("https://d3njjcbhbojbot.cloudfront.net/web/type/opensans/OpenSans-Semibold.woff") format('woff'),
       url("https://d3njjcbhbojbot.cloudfront.net/web/type/opensans/OpenSans-Semibold.ttf") format('truetype'),
       url("https://d3njjcbhbojbot.cloudfront.net/web/type/opensans/OpenSans-Semibold.svg#OpenSans-Semibold") format('svg');
  font-weight: normal;
  font-style: normal;
}
@font-face {
  font-family: 'OpenSans';
  src: url("https://d3njjcbhbojbot.cloudfront.net/web/type/opensans/OpenSans-Bold.eot");
  src: url("https://d3njjcbhbojbot.cloudfront.net/web/type/opensans/OpenSans-Bold.eot?#iefix") format('embedded-opentype'),
       url("https://d3njjcbhbojbot.cloudfront.net/web/type/opensans/OpenSans-Bold.woff2") format('woff2'),
       url("https://d3njjcbhbojbot.cloudfront.net/web/type/opensans/OpenSans-Bold.woff") format('woff'),
       url("https://d3njjcbhbojbot.cloudfront.net/web/type/opensans/OpenSans-Bold.ttf") format('truetype'),
       url("https://d3njjcbhbojbot.cloudfront.net/web/type/opensans/OpenSans-Bold.svg#OpenSans-Bold") format('svg');
  font-weight: bold;
  font-style: normal;
}
@font-face {
  font-family: 'Merriweather';
  src: url("https://d3njjcbhbojbot.cloudfront.net/web/type/merriweather/Merriweather-Regular.eot");
  src: url("https://d3njjcbhbojbot.cloudfront.net/web/type/merriweather/Merriweather-Regular.eot?#iefix") format('embedded-opentype'),
       url("https://d3njjcbhbojbot.cloudfront.net/web/type/merriweather/Merriweather-Regular.woff2") format('woff2'),
       url("https://d3njjcbhbojbot.cloudfront.net/web/type/merriweather/Merriweather-Regular.woff") format('woff'),
       url("https://d3njjcbhbojbot.cloudfront.net/web/type/merriweather/Merriweather-Regular.ttf") format('truetype'),
       url("https://d3njjcbhbojbot.cloudfront.net/web/type/merriweather/Merriweather-Regular.svg#Merriweather-Regular") format('svg');
  font-weight: normal;
  font-style: normal;
}
@font-face {
  font-family: 'Merriweather-Light';
  src: url("https://d3njjcbhbojbot.cloudfront.net/web/type/merriweather/Merriweather-Light.eot");
  src: url("https://d3njjcbhbojbot.cloudfront.net/web/type/merriweather/Merriweather-Light.eot?#iefix") format('embedded-opentype'),
       url("https://d3njjcbhbojbot.cloudfront.net/web/type/merriweather/Merriweather-Light.woff2") format('woff2'),
       url("https://d3njjcbhbojbot.cloudfront.net/web/type/merriweather/Merriweather-Light.woff") format('woff'),
       url("https://d3njjcbhbojbot.cloudfront.net/web/type/merriweather/Merriweather-Light.ttf") format('truetype'),
       url("https://d3njjcbhbojbot.cloudfront.net/web/type/merriweather/Merriweather-Regular.svg#Merriweather-Light") format('svg');
  font-weight: normal;
  font-style: normal;
}
@font-face {
  font-family: 'sdp-icons';
  src: url('https://d3njjcbhbojbot.cloudfront.net/web/bundles/s12n/icons/fonts/sdp-icons.v1.eot');
  src: url('https://d3njjcbhbojbot.cloudfront.net/web/bundles/s12n/icons/fonts/sdp-icons.v1.eot') format('embedded-opentype'),
       url('https://d3njjcbhbojbot.cloudfront.net/web/bundles/s12n/icons/fonts/sdp-icons.v1.ttf') format('truetype'),
       url('https://d3njjcbhbojbot.cloudfront.net/web/bundles/s12n/icons/fonts/sdp-icons.v1.woff') format('woff'),
       url('https://d3njjcbhbojbot.cloudfront.net/web/bundles/s12n/icons/fonts/sdp-icons.v1.svg') format('svg');
  font-weight: normal;
  font-style: normal;
}</style><link href="https://d3njjcbhbojbot.cloudfront.net/web/da617f4985968492ca006d572245eca4d85ca7e4/pages/open-course/index.css" rel="stylesheet" type="text/css"></head><body><!-- - track IE8 and less browser for eventing purposes--><!--[if lte IE 8]><script>window._gaq = window._gaq || [];
window._gaq.push(
    ['_setAccount', 'UA-28377374-1'],
    ['_setDomainName', window.location.hostname],
    ['_setAllowLinker', true],
    ['_trackPageview', window.location.pathname]);</script><script src="https://ssl.google-analytics.com/ga.js"></script><![endif]--><div id="fb-root"></div><div id="rendered-content"><div data-js="origami"><div style="position:absolute;top:0px;left:0px;width:100%;height:100%;background:#fafafa;padding-top:5%;z-index:-1"><div id="coursera-loading-nojs" style="text-align:center; margin-bottom:10px;display:none;"><div>Please use a<a href="https://learner.coursera.help/hc/articles/209818543">modern browser</a> with JavaScript enabled to use Coursera.</div><div id="get-browser-zh" style="display:none;">请下载现代的浏览器（<a href="http://windows.microsoft.com/zh-cn/internet-explorer/download-ie">IE10</a>或<a href="https://www.google.com/intl/zh-CN/chrome/browser/">Google Chrome</a>）来使用Coursera。</div></div><div></div><div id="coursera-loading-js" style="display: none; margin-left: 25%; width: 50%;"><div style="width: 100px; padding-left: 50%; margin-left: -50px;"><svg id="coursera-animated-logo" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="100px" height="80px" xml:space="preserve" viewBox="-5 0 450 223.727"><path stroke="#4089c8" stroke-width="4.3" fill="#DCDCDC" d="M 185.56 16.417 C 185.56 16.417 177.006 12.068 167.595 8.528 C 167.231 8.389 166.867 8.25 166.496 8.12 C 165.367 7.712 164.244 7.312 163.099 6.932 C 153.088 3.596 142.586 1.52 131.764 0.586999 L 131.771 0.579999 C 131.488 0.550999 131.206 0.527999 130.923 0.506999 C 129.259 0.390999 127.578 0.194999 125.922 0.113999 C 124.109 0.0409991 122.294 0.00399907 120.503 -0.00300093 H 119.493 C 99.588 0.065 81.097 4.138 64.202 12.216 C 45.272 21.338 29.91 34.632 18.551 51.766 C 7.202 68.886 1.003 87.898 0.119 108.298 C 0.045 110.045 0 111.767 0 113.484 C -0.023 142.018 10.391 167.108 31.053 188.177 C 52.637 210.264 80.711 222.182 114.426 223.58 C 116.588 223.666 118.722 223.726 120.847 223.726 C 139.919 223.726 157.549 220.317 173.38 213.556 C 177.327 211.867 181.17 209.884 185.094 207.67 C 187.227 206.446 189.241 205.136 191.241 203.736 L 192.72 202.745 L 195.21 201.026 C 198.206 198.897 201 196.567 203.736 194.09 L 204.68 193.186 C 206.285 191.671 207.883 190.127 209.399 188.526 L 215.071 182.114 L 217.233 179.404 L 218.245 177.946 L 219.256 176.489 C 227.684 162.329 255.124 110.802 255.124 110.802 V 110.699 L 256.752 107.553 L 258.119 105.09 C 262.171 97.732 265.08 92.503 268.945 86.996 L 269.056 86.841 C 278.079 73.752 293.581 64.441 311.862 62.867 C 342.539 60.23 369.4 80.379 371.868 107.872 C 374.327 135.378 351.458 159.81 320.784 162.445 C 314.406 162.997 308.196 162.56 302.336 161.278 L 302.202 161.333 C 279.693 156.638 265.367 140.242 258.304 132.906 L 228.795 187.167 C 228.795 187.167 237.963 196.405 244.247 201.018 C 250.532 205.629 258.662 210.174 265.157 212.973 C 280.915 219.702 298.033 223.725 316.948 223.725 C 319.156 223.725 318.703 223.725 320.992 223.637 C 354.677 222.239 384.675 209.33 406.318 187.214 C 426.824 166.234 437.951 142.25 438.047 113.889 V 113.076 C 438.039 111.503 438 109.915 437.935 108.326 C 437.86 106.607 437.748 104.918 437.6 103.228 C 437.6 103.228 437.6 103.212 437.6 103.197 C 437.6 103.197 437.6 103.182 437.6 103.171 C 435.965 84.694 429.863 67.414 419.509 51.795 C 414.878 44.831 409.601 38.508 403.692 32.826 C 395.042 24.521 385.052 17.637 373.784 12.202 C 356.823 4.1 338.079 0.0139968 318.077 0.0139968 C 316.123 0.0139968 314.093 0.0429968 312.02 0.123997 C 297.964 0.764997 284.385 3.423 271.624 8.122 C 258.744 12.777 247.542 18.925 238.37 26.297 C 236.498 27.769 234.468 29.59 232.291 31.601 L 230.715 33.146 L 228.568 35.418 H 228.583 H 228.599 L 227.594 36.409 L 227.103 36.948 L 224.546 39.643 C 222.651 41.771 220.839 43.898 219.151 45.996 L 219.135 45.967 L 219.076 45.909 C 215.568 50.178 212.319 54.592 209.94 58.57 C 208.32 61.12 206.737 63.742 205.221 66.364 L 184.284 108.689 L 184.314 108.718 L 183.213 110.861 L 180.901 115.552 C 176.323 124.825 171.41 134.091 165.917 141.726 C 153.653 155.161 139.806 161.715 122.005 161.715 C 120.757 161.715 119.479 161.656 118.186 161.599 C 107.468 161.162 98.259 158.626 90.105 153.79 C 89.229 153.265 88.38 152.742 87.563 152.186 C 80.903 147.756 75.798 142.076 71.978 134.964 C 67.644 126.923 65.72 118.728 66.001 109.998 C 66.016 109.779 66.023 109.576 66.023 109.373 C 66.61 95.503 71.902 84.72 82.553 75.394 C 85.132 73.18 87.845 71.286 90.677 69.596 C 91.079 69.363 91.473 69.131 91.873 68.926 C 99.789 64.613 108.798 62.473 119.129 62.473 L 122.339 62.559 C 138.743 63.186 151.378 68.315 161.472 78.308 L 193.12 21.487  Z"></path></svg></div><div id="coursera-loading-text"><h3 id="coursera-loading-ar" style="display: none;">تحميل</h3><h3 id="coursera-loading-de" style="display: none;">Lädt...</h3><h3 id="coursera-loading-fr" style="display: none;">Chargement...</h3><h3 id="coursera-loading-en" style="display: none;">Loading...</h3><h3 id="coursera-loading-es" style="display: none;">Cargando...</h3><h3 id="coursera-loading-pr" style="display: none;">Carregando...</h3><h3 id="coursera-loading-ru" style="display: none;">Загрузка...</h3><h3 id="coursera-loading-tr" style="display: none;">Yükleniyor...</h3><h3 id="coursera-loading-zh" style="display: none;">载入中</h3></div></div><noscript><div style="text-align:center; margin-bottom:10px;">Please use a<a href="https://learner.coursera.help/hc/articles/209818543">modern browser</a> with JavaScript enabled to use Coursera.</div></noscript></div></div></div><!--[if gte IE 9]><script>document.getElementById("coursera-loading-js").style.display = 'block';</script><![endif]-->
<!--[if lte IE 8]><script>document.getElementById("coursera-loading-nojs").style.display = 'block';</script><![endif]-->
<!--[if !IE]> --><script>document.getElementById("coursera-loading-js").style.display = 'block';
var showLoadingText = false;
if (/MSIE/i.test(navigator.userAgent) || /rv:11.0/i.test(navigator.userAgent)) {
  // IE doesn't support svg animations, so show a supported animation instead
  document.getElementById('coursera-animated-logo').style.animation = 'pulse 2s infinite ease;';
  showLoadingText = true;
}
var locale = "fr_FR".toLowerCase().replace(/_/g, '-');
try {
  var language_code = locale.split('-')[0];
  if (/ar|de|fr|es|en|pr|ru|tr|zh/.test(language_code) || showLoadingText) {
    //- Otherwise show a loading message in the person's language, if we have it
    document.getElementById('coursera-loading-' + language_code).style.display = 'block';
  }
} catch (e) {
  document.getElementById('coursera-loading-en').style.display = 'block';
}</script><style>@keyframes drawlogo {
  0%   { stroke-dashoffset: 2024; fill: #DCDCDC; stroke: #4089c8; }
  60%  { fill: #DCDCDC; }
  80%  { fill: #4089c8; stroke-dashoffset: 0; }
  95%  { fill: #4089c8; stroke: #4089c8; }
  100% { fill: #DCDCDC; stroke-dashoffset: 0; stroke: #f5f5f5; }
}
@-webkit-keyframes drawlogo {
  0%   { stroke-dashoffset: 2024; fill: #DCDCDC; stroke: #4089c8; }
  60%  { fill: #DCDCDC; }
  80%  { fill: #4089c8; stroke-dashoffset: 0; }
  95%  { fill: #4089c8; stroke: #4089c8; }
  100% { fill: #DCDCDC; stroke-dashoffset: 0; stroke: #f5f5f5; }
}
@-moz-keyframes drawlogo {
  0%   { stroke-dashoffset: 2024; fill: #DCDCDC; stroke: #4089c8; }
  60%  { fill: #DCDCDC; }
  80%  { fill: #4089c8; stroke-dashoffset: 0; }
  95%  { fill: #4089c8; stroke: #4089c8; }
  100% { fill: #DCDCDC; stroke-dashoffset: 0; stroke: #f5f5f5; }
}
@-o-keyframes drawlogo {
  0%   { stroke-dashoffset: 2024; fill: #DCDCDC; stroke: #4089c8; }
  60%  { fill: #DCDCDC; }
  80%  { fill: #4089c8; stroke-dashoffset: 0; }
  95%  { fill: #4089c8; stroke: #4089c8; }
  100% { fill: #DCDCDC; stroke-dashoffset: 0; stroke: #f5f5f5; }
}
@keyframes pulse {
  50%   { opacity: .3; }
}

#coursera-loading-text h3, #coursera-loading-text h4 {
  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif !important;
}

#coursera-animated-logo path {
  fill: #4089c8;
  stroke: #4089c8;
  stroke-width: 5;
  stroke-linecap: round;
  stroke-dasharray: 2024 2024;
  animation:         drawlogo 2s infinite ease-in-out; /* IE 10+, Fx 29+ */
  -webkit-animation: drawlogo 2s infinite ease-in-out; /* Safari 4+ */
  -moz-animation:    drawlogo 2s infinite ease-in-out; /* Fx 5+ */
  -o-animation:      drawlogo 2s infinite ease-in-out; /* Opera 12+ */
}
.coursera-loading-quote, #coursera-loading-text {
  width: 100%;
  text-align: center;
}

#coursera-loading-text h3 {
  font-size: 1.4em;
  margin-bottom: 40px;
  font-weight: normal;
}

.coursera-loading-quote-byline {
  font-size: 1em;
  text-align: center;
  color: #7f7f7f;
}</style><!-- <![endif]--><script>if (/zh/i.test("fr_FR")) {
  document.getElementById('get-browser-zh').style.display = 'block';
}</script><script>//
// NOTE: this file is required as-in in browsers, untransformed by Babel
//

/* eslint-disable dot-notation */
/* eslint-disable quote-props */

// This function will take care of merging the configured paths and maps with the defaults we've set out below.
// Because our map objects are deep objects, we need a deep merge to make sure we can properly override defaults.
// If you want to simply remove a map entry, pass null as the value. We need to remove these null values from the
// final result because the R.js Optimizer doesn't like null paths, but we're assuming that you didn't want that map
// entry anyway.
function merge() {
  var i = 1;
  for (i; i < arguments.length; i += 1) {
    for (var property in arguments[i]) {
      if (arguments[i][property] && arguments[i][property].constructor &&
        arguments[i][property].constructor === Object) {
        arguments[0][property] = arguments[0][property] || {};
        merge(arguments[0][property], arguments[i][property]);
      } else if (arguments[i][property] !== undefined) {
        arguments[0][property] = arguments[i][property];
      }
    }
  }
  return arguments[0];
}

// We want to pollute the global scope so we can grab this in another script tag
function requireConfig(options) {

  var baseLibs = {
    'backbone': 'js/vendor/backbone.v1-1-2',
  };

  // Add to this object anytime you introduce a new 'path' into require.
  // When you do add or update any key/value pair here, touch the mapped file to
  // force pre-normalization of the file in your diph.
  //
  // What this does: while building static.crane, for any file that matches the left
  // key, Crane requireNormalize tasks hard-codes its module id to the value on the right.
  var preNormalize = {
    'js/lib/i18n._t': 'i18n',
    'js/vendor/requirejs-json.v0-4-0': 'json',
    'bundles/requirejs/vendor/require.text-cors.v2-0-7': 'text',
    'bundles/requirejs/vendor/require.css.v0-1-8': 'css',
    'js/vendor/fetch.v0-7.amd': 'fetch',
    'bundles/videojs/lib/video.v5-8': 'videojs',

    'vendor/lib/react.v0-14': 'react',
    'vendor/lib/react.v0-14.min': 'react',
    'vendor/cnpm/react-dom.v0-14': 'react-dom',
    'vendor/cnpm/react-dom.v0-14.min': 'react-dom',
    'vendor/cnpm/react-dom-server.v0-14': 'react-dom-server',
    'vendor/cnpm/react-dom-server.v0-14.min': 'react-dom-server',
    'vendor/lib/react-bootstrap.v0-21-2': 'react-bootstrap',

    'js/vendor/react-intl.v1.amd': 'react-intl',
    'js/vendor/underscore.v1-8-3': 'underscore',
    'js/vendor/moment.v2-10': 'moment',
    'js/vendor/q.v1-0-1': 'q',
    'js/vendor/classnames.v1-2': 'classnames',
    'js/vendor/react-sortable-mixin.v0-1-0': 'react-sortable-mixin',
    'js/vendor/backbone-associations.v0-6-1': 'backbone-associations',
    'js/vendor/jquery.v1-7': 'jquery',
    'js/vendor/brace.v0-8-0': 'brace',
    'js/vendor/punycode.v1-4-1': 'punycode',

    'vendor/cnpm/leaflet.v0-7/leaflet-src': 'leaflet',

    'vendor/cnpm/d3.v3/d3': 'd3',
    'vendor/cnpm/d3-tip.v0-6/index': 'd3-tip',
    'vendor/cnpm/moment-timezone.v0-5-1/builds/moment-timezone-with-data': 'moment-timezone',
    'vendor/cnpm/datamaps.v0-4/dist/datamaps.all': 'datamaps-all',
    'vendor/cnpm/topojson.v1-6/topojson': 'topojson',
    'vendor/cnpm/fixed-data-table.v0.4.6/dist/fixed-data-table': 'fixed-data-table',
    'vendor/cnpm/react-transform-catch-errors.v1-0-2/index': 'react-transform-catch-errors',
    'vendor/cnpm/react-router.v2-4/umd/ReactRouter': 'react-router',
    'vendor/cnpm/react-router.v2-4/umd/ReactRouter.min': 'react-router',
    'vendor/cnpm/react-modal.v1-2-1/react-modal': 'react-modal',
    'vendor/cnpm/react-addons-test-utils.v0-14/index': 'react-addons-test-utils',
    'vendor/cnpm/react-addons-pure-render-mixin.v0-14/index': 'react-addons-pure-render-mixin',
    'vendor/cnpm/react-addons-css-transition-group.v0-14/index': 'react-addons-css-transition-group',
    'vendor/cnpm/react-addons-transition-group.v0-14/index': 'react-addons-transition-group',
    'bundles/naptimejs/index': 'naptime',
  };

  var emptyPaths = {
    // This changes from deploy to deploy.
    // If it were in the bundle, it would be impossible to cache between deploys.
    'js/app/config': 'empty:'
  };

  var basePaths = merge(emptyPaths, {
    // These are all of our require.js plugins.
    'css': 'bundles/requirejs/vendor/require.css.v0-1-8',
    'i18n': 'js/lib/i18n._t',
    'json': 'js/vendor/requirejs-json.v0-4-0',
    'text': 'bundles/requirejs/vendor/require.text-cors.v2-0-7',

    // Actual libraries
    'backbone': 'js/vendor/backbone.v1-1-2',
    'backbone-associations': 'js/vendor/backbone-associations.v0-6-1',
    'classnames': 'js/vendor/classnames.v1-2',
    'react-sortable-mixin': 'js/vendor/react-sortable-mixin.v0-1-0',
    'fetch': 'js/vendor/fetch.v0-7.amd',
    'jquery': 'js/vendor/jquery.v2-1',
    'moment': 'js/vendor/moment.v2-10',
    'moment-timezone': 'vendor/cnpm/moment-timezone.v0-5-1/builds/moment-timezone-with-data',
    'origami': 'js/app/origamiSingleton',
    'q': 'js/vendor/q.v1-0-1',

    'react': 'vendor/lib/react.v0-14',
    'react-dom': 'vendor/cnpm/react-dom.v0-14',
    'react-dom-server': 'vendor/cnpm/react-dom-server.v0-14',
    'react-router': 'vendor/cnpm/react-router.v2-4/umd/ReactRouter',
    'react-bootstrap': 'vendor/lib/react-bootstrap.v0-21-2',
    'react-transform-catch-errors': 'vendor/cnpm/react-transform-catch-errors.v1-0-2/index',
    'react-modal': 'vendor/cnpm/react-modal.v1-2-1/react-modal',
    'react-addons-test-utils': 'vendor/cnpm/react-addons-test-utils.v0-14/index',
    'react-addons-pure-render-mixin': 'vendor/cnpm/react-addons-pure-render-mixin.v0-14/index',
    'react-addons-css-transition-group': 'vendor/cnpm/react-addons-css-transition-group.v0-14/index',
    'react-addons-transition-group': 'vendor/cnpm/react-addons-transition-group.v0-14/index',

      // provideRenderPassWaitFor is used by data loading higher order components during
      // SSR but mocked out on the client.
    'bundles/ssr/lib/renderQueue/pushPromiseToServerRenderQueue': 'bundles/requirejs/identity',

    'react-intl': 'js/vendor/react-intl.v1.amd',
    'scribe': 'js/vendor/scribe.v1-3-2',
    'brace': 'js/vendor/brace.v0-8-0',
    'punycode': 'js/vendor/punycode.v1-4-1',
    'bloodhound': 'js/vendor/bloodhound.v0-11-1',
    'typeahead': 'js/vendor/jquery.typeahead.v0-11-1',
    'underscore': 'js/vendor/underscore.v1-8-3',
    'jsuri': 'vendor/cnpm/jsuri.v1-3-1/Uri',
    'videojs': 'bundles/videojs/lib/video.v5-8',
    'selectize': 'bundles/vendor/selectize/selectize.v0.12.1',

    'leaflet': 'vendor/cnpm/leaflet.v0-7/leaflet-src',

    'd3': 'vendor/cnpm/d3.v3/d3',
    'd3-tip': 'vendor/cnpm/d3-tip.v0-6/index',
    'datamaps-all': 'vendor/cnpm/datamaps.v0-4/dist/datamaps.all',
    'topojson': 'vendor/cnpm/topojson.v1-6/topojson',
    'fixed-data-table': 'vendor/cnpm/fixed-data-table.v0.4.6/dist/fixed-data-table',

    'naptime': 'bundles/naptimejs/index',

    // R.js Helpers
    'css-builder.v0-1-8': 'bundles/requirejs/vendor/css-builder.v0-1-8',
    'normalize.v0-1-8': 'bundles/requirejs/vendor/normalize.v0-1-8'
  });

  var baseShim = {
    'underscore': {
      exports: '_'
    },
    'backbone': {
      deps: ['underscore', 'jquery'],
      exports: 'Backbone',
      init: function(_, $) {
        _.noConflict();
        $.noConflict();
        return this.Backbone.noConflict();
      }
    }
  };

  // We're going to establish that all Phoenix configurations be the base configuration from now on, and require that
  // older configurations override these presets, so that moving forward we can have every module set using the Phoenix
  // configuration.
  var baseMap = {
    '*': {
      // Let's start with the vendor configurations.
      // TODO(jon) revert versioned files where only changes are the aliases.
      'backbone': 'js/vendor/backbone.v1-1-2',

      // TODO(jon) revert this crutch to get tests to pass when resolving require maps
      'memoize': 'js/lib/require.memoize',
      'jsuri': 'vendor/cnpm/jsuri.v1-3-1/Uri',
      'lazy': 'bundles/requirejs/plugins/lazy',
      'origami': 'js/app/origamiSingleton',

      // This is in both `paths` and `map` to resolve Webpack alias interop issues as well as
      // to resolve Require.js module-resolution issues with `preNormalized` modules
      'bundles/ssr/lib/renderQueue/pushPromiseToServerRenderQueue': 'bundles/requirejs/identity',
    },
    'js/lib/backbone-associations': {
      'backbone': 'js/vendor/backbone.v1-1-2'
    },
    'js/lib/pluralizer': {
      'backbone': 'js/vendor/backbone.v1-1-2' // needs >= 0.9.9
    }
  };

  function cleanConfig(obj) {
    for (var key in obj) { // eslint-disable-line guard-for-in
      var value = obj[key];
      if (value && value.constructor && value.constructor === Object) {
        cleanConfig(value);
      } else if (value === null) {
        delete obj[key];
      }
    }
    return obj;
  }

  function extendFrom(base) {
    return function() {
      var argArray = Array.prototype.slice.call(arguments, 0);
      var mergedConfig = merge.apply(this, [{}, base].concat(argArray));
      return cleanConfig(mergedConfig);
    };
  }

  var extendMap = extendFrom(baseMap);
  var extendPaths = extendFrom(basePaths);

  if (options) {
    return merge({}, options, {
      paths: extendPaths(options.paths),
      map: extendMap(options.map),
      packages: requireConfig.packages
    });
  } else {
    return {
      extendMap: extendMap,
      extendPaths: extendPaths,
      preNormalize: preNormalize,
      authPaths: {
        'jquery': 'js/vendor/jquery.v1-7',
      },
      authMap: {
        '*': {
          'pages/auth/models/user': 'pages/auth/test/data/user',
          'backbone': null,
        }
      },
      // These two should always be used in conjunction
      sitePaths: {
        'jquery': 'js/vendor/jquery.v1-7',
        'backbone': 'js/vendor/backbone.v0-9-2',
      },
      siteMap: {
        '*': {
          'backbone': null,
        },
        'pages/open-course': baseLibs,
        'bundles/catalogP': {backbone: null},
        'bundles/phoenix': baseLibs,
        'bundles/product': baseLibs,
        'bundles/epic': baseLibs,
        'js/lib/underscore.extend': baseLibs,
        'js/lib/fsm': baseLibs
      },
      siteShim: baseShim
    };
  }
}

requireConfig.packages = [{
  name: 'react-dom',
  main: 'index',
  location: 'vendor/cnpm/react-dom.v0-14',
}];

/**
 * Update paths to use pre-minified files that we have in the codebase
 */
function hardMinify(paths) {
  /* eslint-disable no-param-reassign */
  // our uglify doesn't remove React's validation warnings, so use React distribution min in prod

  // paths['react'] = 'vendor/cnpm/react.v0-14/index.min';
  // paths['react-router'] = 'vendor/cnpm/react-router.v2-4/umd/ReactRouter.min';

  // needed only while developing, so do nothing in minified builds
  paths['bundles/requirejs/pseudoLocSetup'] = 'bundles/requirejs/null';

  // development version of jQuery has an extra assert() function that gets invoked a lot
  paths['jquery'] = 'js/vendor/jquery.v2-1.min';

  // paths['react-modal'] = 'vendor/cnpm/react-modal.v1-1-1/react-modal.min';

  /* eslint-enable no-param-reassign */
}

if (typeof exports !== 'undefined') {
  module.exports = requireConfig;
  module.exports.merge = merge;
  module.exports.hardMinify = hardMinify;
}
</script><script>var require = {
  enforceDefine: true,
  waitSeconds: 75,
  baseUrl: "https://d3njjcbhbojbot.cloudfront.net/web/da617f4985968492ca006d572245eca4d85ca7e4/",
  urlArgs: false ? 'v=1472848351617' : '',
  paths: requireConfig().extendPaths(),
  shim: requireConfig().siteShim,
  map: requireConfig().extendMap(),
  packages: requireConfig.packages,
  config: {
    i18n: {
      locale: 'fr_FR',
    },
    text: {
      useXhr: function (url, protocol, hostname, port) {
        return true;
      }
    }
  }
};
require.bundles = bundles['bundles/ondemand/startApp.js'];
</script><script>try {
  var versionedPaths = JSON.parse("{\"js/app/preloader.js\":\"md5/js/app/preloader.r.rjsBundle.0b842fa2315441b9be24520136ba554e.6.js\",\"pages/auth/twofa/entry.js\":\"md5/pages/auth/twofa/entry.sub.rjsBundle.af86e790abe12f84b8238e342bc44658.6.js\",\"pages/about/routes.js\":\"md5/pages/about/routes.r.rjsBundle.21e704aa3c5ce87d73a86278fbcf7ac5.6.js\",\"pages/auth/twofa/resetBackupCodes.js\":\"md5/pages/auth/twofa/resetBackupCodes.sub.rjsBundle.91c11ef71bd03340afd7c2ffaf5b39bc.6.js\",\"bundles/peer-cml-migration/components/MigratorApp.js\":\"md5/bundles/peer-cml-migration/components/MigratorApp.sub.rjsBundle.5d2135a2bd5e410eb6ef2396ebe1c00f.6.js\",\"pages/signature/routes.js\":\"md5/pages/signature/routes.r.rjsBundle.dbb8f37a9dd5dca6c93bc6d2734b1a1f.6.js\",\"pages/auth/twofa/enable.js\":\"md5/pages/auth/twofa/enable.sub.rjsBundle.f9134bdd01292bd131f5d343419cad1e.6.js\",\"pages/peer-cml-migration/startApp.js\":\"md5/pages/peer-cml-migration/startApp.sub.rjsBundle.cb0c93f6a932e29564741cd8243ca677.6.js\",\"pages/specialization/startApp.js\":\"md5/pages/specialization/startApp.sub.rjsBundle.9ac13e78a0a1078fc2aec31da798dd05.6.js\",\"bundles/catalog-browse/components/DomainPage.js\":\"md5/bundles/catalog-browse/components/DomainPage.sub.rjsBundle.5a7b42b1a0f56636a65876a6c247aad0.6.js\",\"bundles/catalog-browse/components/RootPage.js\":\"md5/bundles/catalog-browse/components/RootPage.sub.rjsBundle.9755d4172ca01fb4344f3ccd400f7a2a.6.js\",\"js/app/loader.js\":\"md5/js/app/loader.r.rjsBundle.fede0a9317367ee3d6f2495e28fff8ab.6.js\",\"pages/auth/twofa/disable.js\":\"md5/pages/auth/twofa/disable.sub.rjsBundle.cc108ec7a8b3d9f3b2c4992898b0f147.6.js\",\"bundles/global-skills-initiative/components/GlobalSkillsInitiativeApp.js\":\"md5/bundles/global-skills-initiative/components/GlobalSkillsInitiativeApp.sub.rjsBundle.28c502257220fe277a0ef2c2f37bdefb.6.js\",\"bundles/catalog-browse/components/SubdomainPage.js\":\"md5/bundles/catalog-browse/components/SubdomainPage.sub.rjsBundle.8c69d2c8b7adc1d8ed3f376284702638.6.js\",\"pages/auth/startApp.js\":\"md5/pages/auth/startApp.sub.rjsBundle.7d0ce4867ddec9e17ef1007e70a18926.6.js\",\"bundles/global-skills-initiative/components/GlobalSkillsInitiativeLandingPage.js\":\"md5/bundles/global-skills-initiative/components/GlobalSkillsInitiativeLandingPage.sub.rjsBundle.296dbeb9944ebb69ca098e810dfb64b7.6.js\",\"bundles/catalog-browse/components/FeaturedListLandingPage.js\":\"md5/bundles/catalog-browse/components/FeaturedListLandingPage.sub.rjsBundle.fe9dc4089f71c4232b9752de9b1b4c7e.6.js\",\"bundles/my-purchases/components/VouchersLoader.js\":\"md5/bundles/my-purchases/components/VouchersLoader.sub.rjsBundle.09109a033b0d654df31c23123dda86b0.6.js\",\"bundles/directory/components/DirectoryPage.js\":\"md5/bundles/directory/components/DirectoryPage.sub.rjsBundle.6f869879176ac38848165e9205b623ec.6.js\",\"bundles/front-page/components/FrontPage.js\":\"md5/bundles/front-page/components/FrontPage.sub.rjsBundle.6a72ac2d7c5814a8442acb6120e8989e.6.js\",\"pages/my-purchases/startApp.js\":\"md5/pages/my-purchases/startApp.sub.rjsBundle.b579b6782ea1ecc143e4c20eb32eb0a9.6.js\",\"bundles/payments/components/finaid/FinaidApp.js\":\"md5/bundles/payments/components/finaid/FinaidApp.sub.rjsBundle.7efeea434e8a76f81e00479b58663e50.6.js\",\"bundles/catalog-search/components/NotFound.js\":\"md5/bundles/catalog-search/components/NotFound.sub.rjsBundle.a34a2e7a3522fd7944b4466aa851d7d8.6.js\",\"pages/accomplishments/record/entry.js\":\"md5/pages/accomplishments/record/entry.sub.rjsBundle.a3a0984d25d6b0fb8bfb955e321c3628.6.js\",\"pages/directory/startApp.js\":\"md5/pages/directory/startApp.sub.rjsBundle.58eba7d4ee8bd76e5556963f0c5db737.6.js\",\"bundles/front-page/components/FrontPage2016.js\":\"md5/bundles/front-page/components/FrontPage2016.sub.rjsBundle.dd8bb2171ac60b65380f9c7864e7211b.6.js\",\"bundles/teach-course/components/TeachBanner.js\":\"md5/bundles/teach-course/components/TeachBanner.sub.rjsBundle.bfd152ae163d885684bc544bbed024c6.6.js\",\"pages/accomplishments/certificate/entry.js\":\"md5/pages/accomplishments/certificate/entry.sub.rjsBundle.808c1c84ed98a63473b28c58bd6f6331.6.js\",\"bundles/payments/components/checkout/PaymentCheckoutApp.js\":\"md5/bundles/payments/components/checkout/PaymentCheckoutApp.sub.rjsBundle.ab5e28adc0915e8889171e86ec35fa78.6.js\",\"bundles/s12n/components/NotFound.js\":\"md5/bundles/s12n/components/NotFound.sub.rjsBundle.41da806a58c5f266abb2f5e7e58c6b8a.6.js\",\"bundles/internet-org/components/front-page/IorgFrontPage.js\":\"md5/bundles/internet-org/components/front-page/IorgFrontPage.sub.rjsBundle.c67a3048f46cb3f022c09a1f473452fa.6.js\",\"bundles/internet-org/components/course/IorgCdp.js\":\"md5/bundles/internet-org/components/course/IorgCdp.sub.rjsBundle.05896ecd8c80875a471ad23b3ed365cb.6.js\",\"pages/home/routes.js\":\"md5/pages/home/routes.r.rjsBundle.c7074158d15e510299a34fe2ad664215.6.js\",\"pages/auth/twofa/backupCodes.js\":\"md5/pages/auth/twofa/backupCodes.sub.rjsBundle.0daf82fa9205d2d86d5a26d9c2ca7135.6.js\",\"bundles/peer-cml-migration/components/Migrator.js\":\"md5/bundles/peer-cml-migration/components/Migrator.sub.rjsBundle.e497b1b7c9f3240d61c338eeeb633c67.6.js\",\"pages/front-page/startApp.js\":\"md5/pages/front-page/startApp.sub.rjsBundle.449980a0e9a41409c37c457251445715.6.js\",\"pages/catalog/startApp.js\":\"md5/pages/catalog/startApp.sub.rjsBundle.bb3142b8165b91108c6e019dc7673487.6.js\",\"pages/accomplishments/specialization/entry.js\":\"md5/pages/accomplishments/specialization/entry.sub.rjsBundle.738938e7f5fb82c1599b9ee190ff2ba0.6.js\",\"bundles/internet-org/components/course/IorgLecture.js\":\"md5/bundles/internet-org/components/course/IorgLecture.sub.rjsBundle.0c0f1edd299fffd534f5865325016b41.6.js\",\"bundles/membership-admin/components/MembershipEditor.js\":\"md5/bundles/membership-admin/components/MembershipEditor.sub.rjsBundle.724c6d02139964ac6978497ed8398ff0.6.js\",\"bundles/membership-admin/components/DataLoader.js\":\"md5/bundles/membership-admin/components/DataLoader.sub.rjsBundle.f24f5318d23b7ce13aad2dff1db079d0.6.js\",\"bundles/phoenix-cdp/components/PhoenixCdp.js\":\"md5/bundles/phoenix-cdp/components/PhoenixCdp.sub.rjsBundle.b7b22e2b4bdfa55826c7f9667c568987.6.js\",\"bundles/accomplishments/components/Accomplishments.js\":\"md5/bundles/accomplishments/components/Accomplishments.sub.rjsBundle.d8b540ef281e2b5963f83ee9dd74bbd8.6.js\",\"bundles/s12n/components/LandingPage.js\":\"md5/bundles/s12n/components/LandingPage.sub.rjsBundle.abd054196a981df5c22e711971920833.6.js\",\"bundles/phoenix-cdp/components/PhoenixCdp2016.js\":\"md5/bundles/phoenix-cdp/components/PhoenixCdp2016.sub.rjsBundle.81f880bb677951e8e0fa9e092f964a76.6.js\",\"bundles/admin-groups/components/GroupAdmin.js\":\"md5/bundles/admin-groups/components/GroupAdmin.sub.rjsBundle.115829bbf6268c34cd5664d778ecc789.6.js\",\"pages/specialization/entry.js\":\"md5/pages/specialization/entry.sub.rjsBundle.6a3eee9c4f178464f366581c0b7d9f9c.6.js\",\"bundles/directory/components/NotFound.js\":\"md5/bundles/directory/components/NotFound.sub.rjsBundle.a52ca4fee839a37c5a97eee3c128137a.6.js\",\"pages/global-skills-initiative/startApp.js\":\"md5/pages/global-skills-initiative/startApp.sub.rjsBundle.21d3d2ce863ef30cfe26c3ed436e0708.6.js\",\"bundles/catalog-search/components/CatalogSearch.js\":\"md5/bundles/catalog-search/components/CatalogSearch.sub.rjsBundle.976ff233a30f9642072c626669b56759.6.js\",\"pages/payments/startApp.js\":\"md5/pages/payments/startApp.sub.rjsBundle.1657e3401fd1ce7492a526509e800c38.6.js\",\"bundles/internet-org/components/IorgNotFound.js\":\"md5/bundles/internet-org/components/IorgNotFound.sub.rjsBundle.1fa1b2bfdcdc654df288829733d49aa9.6.js\",\"bundles/phoenix-cdp/components/PhoenixCdpMain.js\":\"md5/bundles/phoenix-cdp/components/PhoenixCdpMain.sub.rjsBundle.da1b216f01e52c5f3977a4969e121906.6.js\",\"bundles/admin/components/SpecializationAdmin.js\":\"md5/bundles/admin/components/SpecializationAdmin.sub.rjsBundle.6771395964703052bee5b1c01d0096e9.6.js\",\"bundles/program-members/components/ProgramMembersApp.js\":\"md5/bundles/program-members/components/ProgramMembersApp.sub.rjsBundle.f4790035ceff0b5f72262692895d025e.6.js\",\"bundles/enterprise/startApp.js\":\"md5/bundles/enterprise/startApp.sub.rjsBundle.f0080a7b185feea4139e9cef7eeaee62.6.js\",\"pages/s12n/startApp.js\":\"md5/pages/s12n/startApp.sub.rjsBundle.d0effc924311fc18838dfcbc6311fa1a.6.js\",\"bundles/phoenix-cdp/components/PhoenixCdpBanner.js\":\"md5/bundles/phoenix-cdp/components/PhoenixCdpBanner.sub.rjsBundle.f900da1975f1f7706c040e6827714473.6.js\",\"bundles/admin/components/CourseAdmin.js\":\"md5/bundles/admin/components/CourseAdmin.sub.rjsBundle.2459c1ed0957dc0c4cb18a03547c8419.6.js\",\"bundles/enterprise/components/EnterpriseApp.js\":\"md5/bundles/enterprise/components/EnterpriseApp.sub.rjsBundle.914b3692bad66b79b46b1a15e5dd6bdc.6.js\",\"bundles/teams/components/curriculum/TeamsCartPage.js\":\"md5/bundles/teams/components/curriculum/TeamsCartPage.sub.rjsBundle.5dd76ecfc5ad02aa57e9d31ad1af5af4.6.js\",\"bundles/saml-sso/components/SSOReturnPage.js\":\"md5/bundles/saml-sso/components/SSOReturnPage.sub.rjsBundle.f42bb9e91fbb155b4de4a4794649d7b4.6.js\",\"bundles/saml-sso/components/SamlLoginPage.js\":\"md5/bundles/saml-sso/components/SamlLoginPage.sub.rjsBundle.7a79d10d5f143901ef82a310a1428ffe.6.js\",\"pages/phoenix-cdp/startApp.js\":\"md5/pages/phoenix-cdp/startApp.sub.rjsBundle.eb349a74a5383bf5d5b7b00255a5bf96.6.js\",\"bundles/admin/components/InstitutionsAdmin.js\":\"md5/bundles/admin/components/InstitutionsAdmin.sub.rjsBundle.7f59ec92e608e67694a87a751212e815.6.js\",\"bundles/account-settings/components/SettingsApp.js\":\"md5/bundles/account-settings/components/SettingsApp.sub.rjsBundle.10e9df9eab710fb271d93ce7bd68acec.6.js\",\"pages/saml-sso/startApp.js\":\"md5/pages/saml-sso/startApp.sub.rjsBundle.a3a454f664a691cff4e5b8c0cf4b4b23.6.js\",\"pages/star/routes.js\":\"md5/pages/star/routes.sub.rjsBundle.7f6dc3c12b99bd3b6c851ed9acab6e2c.6.js\",\"pages/accomplishments/routes.js\":\"md5/pages/accomplishments/routes.sub.rjsBundle.84a96919896864a56f5a4265d492a4ad.6.js\",\"pages/internet-org/startApp.js\":\"md5/pages/internet-org/startApp.sub.rjsBundle.1dc72f8a12086de03c78558b673479a5.6.js\",\"pages/membership-admin/startApp.js\":\"md5/pages/membership-admin/startApp.sub.rjsBundle.958eb48de3cb98dd99d797a3b2d51931.6.js\",\"bundles/dashboard/components/DashboardApp.js\":\"md5/bundles/dashboard/components/DashboardApp.sub.rjsBundle.ce7510d42259f77e16b547b6d2958024.6.js\",\"bundles/dashboard/components/Enrollments.js\":\"md5/bundles/dashboard/components/Enrollments.sub.rjsBundle.0d615175c7d22a581f153211c30f16ec.6.js\",\"bundles/quick-questions/components/AdminPage.js\":\"md5/bundles/quick-questions/components/AdminPage.sub.rjsBundle.a5dd967cd0aac5599efcc8960b180135.6.js\",\"bundles/groups/components/GroupApp.js\":\"md5/bundles/groups/components/GroupApp.sub.rjsBundle.94bceccf4929497575e0a47286174bb0.6.js\",\"bundles/groups/components/GroupAppContainer.js\":\"md5/bundles/groups/components/GroupAppContainer.sub.rjsBundle.90e948e0b2d80b4d4995f0af8f0a7dc5.6.js\",\"pages/hut/routes.js\":\"md5/pages/hut/routes.sub.rjsBundle.6be6e76befdefa9e765c6154f77fbdcd.6.js\",\"pages/quick-questions/startApp.js\":\"md5/pages/quick-questions/startApp.sub.rjsBundle.ebb5e608d6db22bfea5c041f354e81ed.6.js\",\"pages/star/panelman.js\":\"md5/pages/star/panelman.sub.rjsBundle.0dcb1296d02c0536fee12443cfc73419.6.js\",\"bundles/groups/components/GroupSettingsTool.js\":\"md5/bundles/groups/components/GroupSettingsTool.sub.rjsBundle.45466bd33b964d125ce0acf5d3e9553e.6.js\",\"bundles/groups/components/GroupAnnouncementTool.js\":\"md5/bundles/groups/components/GroupAnnouncementTool.sub.rjsBundle.8f30766d15fcd6f4b9883ba9a7d296f1.6.js\",\"bundles/groups-content-grading/components/GroupGradingTool.js\":\"md5/bundles/groups-content-grading/components/GroupGradingTool.sub.rjsBundle.22a99588153df71fe0bb5e5f15676ce2.6.js\",\"bundles/groups-content-modules/components/GroupModulesTool.js\":\"md5/bundles/groups-content-modules/components/GroupModulesTool.sub.rjsBundle.6dedecbfd67ac5e69d0c53fcfb8e72b8.6.js\",\"bundles/groups-dashboard-content/components/TeamProjectSubmissionTool.js\":\"md5/bundles/groups-dashboard-content/components/TeamProjectSubmissionTool.sub.rjsBundle.d3a28e15e5b2448c21a9483f3cb0e61d.6.js\",\"bundles/groups-dashboard-content/components/IndividualProjectSubmissionTool.js\":\"md5/bundles/groups-dashboard-content/components/IndividualProjectSubmissionTool.sub.rjsBundle.46b997188f1739f94fc0f6933ab30fdb.6.js\",\"bundles/teach-partner/components/ExportsPartnerPage.js\":\"md5/bundles/teach-partner/components/ExportsPartnerPage.sub.rjsBundle.18bd722f27f050ff8796ad747e6f7664.6.js\",\"bundles/account-settings/startApp.js\":\"md5/bundles/account-settings/startApp.sub.rjsBundle.c1c8d3189c9a06fdf6d8d3f9a2a56e61.6.js\",\"bundles/admin-dashboard/components/AdminDashboardApp.js\":\"md5/bundles/admin-dashboard/components/AdminDashboardApp.sub.rjsBundle.8db4ce9d2e57dd26d7d53f0f7647db8a.6.js\",\"bundles/groups/components/MemberTool.js\":\"md5/bundles/groups/components/MemberTool.sub.rjsBundle.c848410051ea38485e3b949ce4e2e844.6.js\",\"bundles/author-team-assignment/components/TeamAssignmentAuthoringTool.js\":\"md5/bundles/author-team-assignment/components/TeamAssignmentAuthoringTool.sub.rjsBundle.017f3c2aae44701cbdb0e805308b1827.6.js\",\"bundles/admin/components/StaffAdmin.js\":\"md5/bundles/admin/components/StaffAdmin.sub.rjsBundle.3f68ec082e60c04ea88cfcb288b119ae.6.js\",\"bundles/teach-partner/startApp.js\":\"md5/bundles/teach-partner/startApp.sub.rjsBundle.0d9ad41ca95c22d8fe1d1d622270a4ca.6.js\",\"bundles/program-admin/startApp.js\":\"md5/bundles/program-admin/startApp.sub.rjsBundle.b55968ae5e86861e5de9e7e61cf692f7.6.js\",\"bundles/ondemand/components/ClosedCourseRedirectApp.js\":\"md5/bundles/ondemand/components/ClosedCourseRedirectApp.sub.rjsBundle.32bc775c039564c968f97b10b90d7c19.6.js\",\"bundles/group-events/components/OfficeHoursPage.js\":\"md5/bundles/group-events/components/OfficeHoursPage.sub.rjsBundle.ee73b57773146ca8fef25ed3a3daee84.6.js\",\"bundles/ondemand/components/PeriodPage.js\":\"md5/bundles/ondemand/components/PeriodPage.sub.rjsBundle.fba06b9ca9bb9e532bdcbe096078b42e.6.js\",\"bundles/admin-dashboard/startApp.js\":\"md5/bundles/admin-dashboard/startApp.sub.rjsBundle.72a2b15cfa6a1c9de5f31a0be28f2624.6.js\",\"bundles/groups/components/GradebookExportTool.js\":\"md5/bundles/groups/components/GradebookExportTool.sub.rjsBundle.fabeaa99a8f583a2dc1f966a496a7976.6.js\",\"bundles/groups-dashboard-content/components/ProjectSubmissionTool.js\":\"md5/bundles/groups-dashboard-content/components/ProjectSubmissionTool.sub.rjsBundle.013b03fd3e82466f8130dc05dc126a01.6.js\",\"bundles/teach-partner/components/PromotionsPartnerPage.js\":\"md5/bundles/teach-partner/components/PromotionsPartnerPage.sub.rjsBundle.491b3f1cce6ea9245c315c94080291eb.6.js\",\"bundles/course-manager/components/CourseManagerPage.js\":\"md5/bundles/course-manager/components/CourseManagerPage.sub.rjsBundle.5f74882097ad1afa178017534105615d.6.js\",\"bundles/ondemand/components/HomePage.js\":\"md5/bundles/ondemand/components/HomePage.sub.rjsBundle.23365ff6c97ab22e04241bc2bf650146.6.js\",\"bundles/group-roster/components/GroupClassmatesPage.js\":\"md5/bundles/group-roster/components/GroupClassmatesPage.sub.rjsBundle.84e544a635903688cc3161bb79aec715.6.js\",\"bundles/ondemand/components/item/ItemGroupDescriptionPage.js\":\"md5/bundles/ondemand/components/item/ItemGroupDescriptionPage.sub.rjsBundle.be3f4d7164a666fbc5a02ab63e9ab9ce.6.js\",\"bundles/ondemand/components/notebook/NotebookWorkspaceItem.js\":\"md5/bundles/ondemand/components/notebook/NotebookWorkspaceItem.sub.rjsBundle.c558e57cdec22c8ebe6451677db8007b.6.js\",\"bundles/ondemand/components/reading/ReadingItem.js\":\"md5/bundles/ondemand/components/reading/ReadingItem.sub.rjsBundle.38c009d29c0b661fd31b5e80ca481e8c.6.js\",\"bundles/ondemand/components/lti/LtiItem.js\":\"md5/bundles/ondemand/components/lti/LtiItem.sub.rjsBundle.802a163ec6e1fe4139a9cfe50bb1ab31.6.js\",\"bundles/teach-partner/components/MonitorPartnerPage.js\":\"md5/bundles/teach-partner/components/MonitorPartnerPage.sub.rjsBundle.385616be990be6fc9c67d276316f89b1.6.js\",\"bundles/ondemand/components/FullscreenLayoutHandler.js\":\"md5/bundles/ondemand/components/FullscreenLayoutHandler.sub.rjsBundle.8bdc6ed6d91d86789649cf8149752b79.6.js\",\"bundles/ondemand/components/OndemandApp.js\":\"md5/bundles/ondemand/components/OndemandApp.sub.rjsBundle.697cdfe957a3c4cc14cc1cb13cfff8b4.6.js\",\"bundles/slide-player/components/SlideshowItem.js\":\"md5/bundles/slide-player/components/SlideshowItem.sub.rjsBundle.dd429bf9c2a34814594fa694384fa937.6.js\",\"bundles/ondemand/components/ItemLayoutHandler.js\":\"md5/bundles/ondemand/components/ItemLayoutHandler.sub.rjsBundle.b7c04b88ad6df01ec1e975bf8a06712a.6.js\",\"bundles/ondemand/components/programming/ProgrammingInstructions.js\":\"md5/bundles/ondemand/components/programming/ProgrammingInstructions.sub.rjsBundle.9b7d09a512c8bd972611777353a0014d.6.js\",\"bundles/peer/components/PeerItemReview.js\":\"md5/bundles/peer/components/PeerItemReview.sub.rjsBundle.0d714e175432a119d2f4bda3c4a685ac.6.js\",\"bundles/ondemand/components/programming/ProgrammingItem.js\":\"md5/bundles/ondemand/components/programming/ProgrammingItem.sub.rjsBundle.86e2e488849b0ef6eb29e322ca6aba22.6.js\",\"bundles/ondemand/components/programming/ProgrammingSubmission.js\":\"md5/bundles/ondemand/components/programming/ProgrammingSubmission.sub.rjsBundle.11c7f00ce6fd1f6a95c693d2dd4f887c.6.js\",\"bundles/ondemand/components/quiz/QuizItem.js\":\"md5/bundles/ondemand/components/quiz/QuizItem.sub.rjsBundle.1b5e9a1792b5c6dbda0fa359d7f03365.6.js\",\"bundles/ondemand/components/programming/ProgrammingDiscussions.js\":\"md5/bundles/ondemand/components/programming/ProgrammingDiscussions.sub.rjsBundle.0557b24253cfa8f5b6af79300d527dc4.6.js\",\"bundles/teams/startApp.js\":\"md5/bundles/teams/startApp.sub.rjsBundle.f4b42fb9b279b1ca086cd0b4850ebbfd.6.js\",\"bundles/university-program/components/LandingPage.js\":\"md5/bundles/university-program/components/LandingPage.sub.rjsBundle.7923e2415bcb018fb3658615caa42d66.6.js\",\"bundles/groups-invitation/components/GroupInvitationTool.js\":\"md5/bundles/groups-invitation/components/GroupInvitationTool.sub.rjsBundle.1cb6967de158b535bc5412e46afc4258.6.js\",\"pages/groups/startApp.js\":\"md5/pages/groups/startApp.sub.rjsBundle.57e8058df0d0cd199eba03f532c0c2c3.6.js\",\"bundles/ondemand/components/CourseInfoPage.js\":\"md5/bundles/ondemand/components/CourseInfoPage.sub.rjsBundle.b05c41288de0c3e553217bac7c9695d3.6.js\",\"bundles/team/components/TeamItemInstructions.js\":\"md5/bundles/team/components/TeamItemInstructions.sub.rjsBundle.c5afb0faa8760ce4bc60fd9406939bb5.6.js\",\"bundles/peer-admin/components/PeerReviewAdminLearnContainer.js\":\"md5/bundles/peer-admin/components/PeerReviewAdminLearnContainer.sub.rjsBundle.74d17c29a7664095f8f3e9c64f4e87cd.6.js\",\"bundles/peer/components/PeerItemDiscussionsContainer.js\":\"md5/bundles/peer/components/PeerItemDiscussionsContainer.sub.rjsBundle.38867c80cf759a92853c29e01a0d19df.6.js\",\"bundles/assess/lib/editor/editor.js\":\"md5/bundles/assess/lib/editor/editor.sub.rjsBundle.92d157cc03368f8f395a9691339d009e.6.js\",\"bundles/peer/components/PeerItemSubmit.js\":\"md5/bundles/peer/components/PeerItemSubmit.sub.rjsBundle.560c0b2cd2f886f26a872c59405ad36b.6.js\",\"bundles/discussions/components/DiscussionsApp.js\":\"md5/bundles/discussions/components/DiscussionsApp.sub.rjsBundle.a570fd4040d24e477ed461256b921513.6.js\",\"bundles/discussions/components/ModuleToWeekRedirect.js\":\"md5/bundles/discussions/components/ModuleToWeekRedirect.sub.rjsBundle.fc96028f8fc73707fa19968ccaa63cf1.6.js\",\"bundles/discussions/components/forums/ThreadsView.js\":\"md5/bundles/discussions/components/forums/ThreadsView.sub.rjsBundle.85008039110591531e253b0a3a93e1ea.6.js\",\"bundles/team/components/TeamItem.js\":\"md5/bundles/team/components/TeamItem.sub.rjsBundle.02e08c0b0590cccdc136aadccbdecfe5.6.js\",\"bundles/discussions/components/landing/DiscussionsLandingPage.js\":\"md5/bundles/discussions/components/landing/DiscussionsLandingPage.sub.rjsBundle.18f947e004d4b202a7e674b5a9889931.6.js\",\"pages/open-course/admin/entry.js\":\"md5/pages/open-course/admin/entry.sub.rjsBundle.1e6e2efae781533a902f775bda8a9271.6.js\",\"pages/seo/public-lecture/entry.js\":\"md5/pages/seo/public-lecture/entry.sub.rjsBundle.93bc5642b5691bf8050b4b9dd069ff07.6.js\",\"pages/university-program/startApp.js\":\"md5/pages/university-program/startApp.sub.rjsBundle.df986df683328303e65036342f9d5acb.6.js\",\"bundles/groups-content/components/GroupContentTool.js\":\"md5/bundles/groups-content/components/GroupContentTool.sub.rjsBundle.f4b5dd2c7234b6ebaeb7ef6cf447d4f1.6.js\",\"bundles/program-home/startApp.js\":\"md5/bundles/program-home/startApp.sub.rjsBundle.7c46a0da2a89084b9f4daac9522d3c16.6.js\",\"bundles/ondemand/components/assignments/AssignmentsPage.js\":\"md5/bundles/ondemand/components/assignments/AssignmentsPage.sub.rjsBundle.782ef3a57fa6a4f7bc8468bcfdc3d391.6.js\",\"bundles/ondemand/components/discussionPrompt/DiscussionPrompt.js\":\"md5/bundles/ondemand/components/discussionPrompt/DiscussionPrompt.sub.rjsBundle.86406ccd003614826055939f00f68982.6.js\",\"bundles/mobile/index.js\":\"md5/bundles/mobile/index.sub.rjsBundle.6796082cff1a175b88289ba7766b1baa.6.js\",\"bundles/discussions/components/threadSettings/ThreadSettings.js\":\"md5/bundles/discussions/components/threadSettings/ThreadSettings.sub.rjsBundle.ed53c5ced83874e1a18cd24f2717782b.6.js\",\"bundles/ondemand/components/CourseInfoPage2016.js\":\"md5/bundles/ondemand/components/CourseInfoPage2016.sub.rjsBundle.518be28d323c625f929bdb328d06d921.6.js\",\"pages/open-course/peerReview/views/closedFeedback.js\":\"md5/pages/open-course/peerReview/views/closedFeedback.sub.rjsBundle.19896798877e13dfef3cb82b6f47ded2.6.js\",\"bundles/profile/components/ProfileApp.js\":\"md5/bundles/profile/components/ProfileApp.sub.rjsBundle.abc2b81d129247f87da57c4284dfd1b3.6.js\",\"pages/open-course/item/views/locked.js\":\"md5/pages/open-course/item/views/locked.sub.rjsBundle.e2d9c107427b29d49d23aab15e2005a5.6.js\",\"pages/open-course/video/util/video.js\":\"md5/pages/open-course/video/util/video.sub.rjsBundle.91a405feca002518f23d477031b9a4ec.6.js\",\"bundles/author-readings/components/ModalReadingsAuthoringTool.js\":\"md5/bundles/author-readings/components/ModalReadingsAuthoringTool.sub.rjsBundle.e158691d6d397d270db7ac1df0b3ab30.6.js\",\"bundles/ondemand/components/HomeLayout.js\":\"md5/bundles/ondemand/components/HomeLayout.sub.rjsBundle.e94cd6c2edc6231cf7f5cba97becc3ab.6.js\",\"bundles/peer/components/PeerItemInstructions.js\":\"md5/bundles/peer/components/PeerItemInstructions.sub.rjsBundle.fc9e8bbe11589a5f978a9f19598a48a1.6.js\",\"bundles/team/components/TeamItemTeamMembers.js\":\"md5/bundles/team/components/TeamItemTeamMembers.sub.rjsBundle.bf874d19d0a288fb3cae6c1f0cc4dc9b.6.js\",\"pages/open-course/verifiedCertificate/entry.js\":\"md5/pages/open-course/verifiedCertificate/entry.sub.rjsBundle.bb2ac99d8633e089ca1207afa6257444.6.js\",\"pages/open-course/peerReview/views/assignment.js\":\"md5/pages/open-course/peerReview/views/assignment.sub.rjsBundle.7121ec5fc71891f59f99c3a4560b0df5.6.js\",\"bundles/author-quiz/components/ModalQuizAuthoringTool.js\":\"md5/bundles/author-quiz/components/ModalQuizAuthoringTool.sub.rjsBundle.aaf03938c222421a19c614be63a37eb0.6.js\",\"bundles/discussions/components/discussionsBody/DiscussionsBody.js\":\"md5/bundles/discussions/components/discussionsBody/DiscussionsBody.sub.rjsBundle.12795fed32917dedbf3c782d447c2492.6.js\",\"pages/open-course/peerReview/views/rubricPreview.js\":\"md5/pages/open-course/peerReview/views/rubricPreview.sub.rjsBundle.35ba44adf273ffa04d1749b2a2ca24de.6.js\",\"bundles/author-programming/components/ProgrammingAuthoringTool.js\":\"md5/bundles/author-programming/components/ProgrammingAuthoringTool.sub.rjsBundle.ec65ff600ee397c1f563f03d4b55a74f.6.js\",\"bundles/author-course/components/CourseAuthoringTool.js\":\"md5/bundles/author-course/components/CourseAuthoringTool.sub.rjsBundle.0bd5f8759fdac9219ef6bc858d833ec9.6.js\",\"bundles/teach-exports/components/CourseExportsAppContainer.js\":\"md5/bundles/teach-exports/components/CourseExportsAppContainer.sub.rjsBundle.a67de136cf1c67b70ac3dcb7ec8900d9.6.js\",\"bundles/author-triggered-emails/components/TriggeredEmailsTool.js\":\"md5/bundles/author-triggered-emails/components/TriggeredEmailsTool.sub.rjsBundle.5da2c3f577b0c0f4c4509ff977182bad.6.js\",\"bundles/author-peer-review/components/PeerReviewAuthoringTool.js\":\"md5/bundles/author-peer-review/components/PeerReviewAuthoringTool.sub.rjsBundle.18cecd573cb27fd1ed299337d9c230c5.6.js\",\"bundles/monitor-course/components/MonitorCourseTool.js\":\"md5/bundles/monitor-course/components/MonitorCourseTool.sub.rjsBundle.a190673a2c8a2882574608373bb5dc0e.6.js\",\"bundles/monitor-course/components/MonitorCourseFeedback.js\":\"md5/bundles/monitor-course/components/MonitorCourseFeedback.sub.rjsBundle.c847f392004ff07a4a3a774a24b6688f.6.js\",\"bundles/monitor-course/components/RetentionPanel.js\":\"md5/bundles/monitor-course/components/RetentionPanel.sub.rjsBundle.62cf5b24d8a4afe9d409bb2274fed5dd.6.js\",\"bundles/monitor-course/components/ContentPanel.js\":\"md5/bundles/monitor-course/components/ContentPanel.sub.rjsBundle.610c17ef803465e6775f4f22196003b8.6.js\",\"bundles/ondemand/components/video/VideoItem.js\":\"md5/bundles/ondemand/components/video/VideoItem.sub.rjsBundle.df69b4b57c74933b19735e763c07156e.6.js\",\"bundles/peer/components/PeerItem.js\":\"md5/bundles/peer/components/PeerItem.sub.rjsBundle.f4adfbb60827b751ece0bcdf0ef184bf.6.js\",\"bundles/team/components/TeamItemSubmit.js\":\"md5/bundles/team/components/TeamItemSubmit.sub.rjsBundle.32cf959f6c290c0d931f2c27ebb82149.6.js\",\"pages/open-course/peerReview/entry.js\":\"md5/pages/open-course/peerReview/entry.sub.rjsBundle.2cf1fc38a06f0d5b47f74316a1fe78ae.6.js\",\"bundles/phoenix/utils/loadVideojsForAudio.js\":\"md5/bundles/phoenix/utils/loadVideojsForAudio.sub.rjsBundle.be814b9afaa2f03c63a5c026e9628db6.6.js\",\"bundles/phoenix/components/NotFound.js\":\"md5/bundles/phoenix/components/NotFound.sub.rjsBundle.e6e03ad9ca63ff88d7f3efd3f1b06dfb.6.js\",\"bundles/author-announcement/components/AnnouncementTool.js\":\"md5/bundles/author-announcement/components/AnnouncementTool.sub.rjsBundle.fe3afd3fee3cdda412d82497da54081b.6.js\",\"bundles/monitor-course/components/PollsPanel.js\":\"md5/bundles/monitor-course/components/PollsPanel.sub.rjsBundle.2dc5a75bace496184d595ab5a953d5a1.6.js\",\"bundles/monitor-course/components/OverviewPanel.js\":\"md5/bundles/monitor-course/components/OverviewPanel.sub.rjsBundle.f4a7e11d0802ec3c86252c0c24e4de1c.6.js\",\"bundles/asset-admin/components/AssetAdminApp.js\":\"md5/bundles/asset-admin/components/AssetAdminApp.sub.rjsBundle.33062a40be455015da84586341eff370.6.js\",\"bundles/peer-admin/components/PeerReviewAdminTeachContainer.js\":\"md5/bundles/peer-admin/components/PeerReviewAdminTeachContainer.sub.rjsBundle.a7346f24ee4604718acb7d7848bca489.6.js\",\"bundles/author-course/components/CourseSettingsEditor.js\":\"md5/bundles/author-course/components/CourseSettingsEditor.sub.rjsBundle.b1334407cd83b29979193922341b6cc3.6.js\",\"bundles/author-course/components/CourseInfoEditor.js\":\"md5/bundles/author-course/components/CourseInfoEditor.sub.rjsBundle.d9add88bf4773070307582aee461ceaa.6.js\",\"bundles/monitor-course/components/CourseRatings.js\":\"md5/bundles/monitor-course/components/CourseRatings.sub.rjsBundle.74fdb68ed89fac6cfecfd9d0be9b5afe.6.js\",\"bundles/author-references/components/CourseReferencesEditor.js\":\"md5/bundles/author-references/components/CourseReferencesEditor.sub.rjsBundle.74d6f495896c71fccbe1e813c6bcf30a.6.js\",\"bundles/author-course/components/CourseSuperUserTool.js\":\"md5/bundles/author-course/components/CourseSuperUserTool.sub.rjsBundle.b6de61e718366d10f9ba70f54e4aa0d0.6.js\",\"bundles/author-superuser/components/CoursePeerAdmin.js\":\"md5/bundles/author-superuser/components/CoursePeerAdmin.sub.rjsBundle.04ad47f9a71d21e63231e35bd5b5d53d.6.js\",\"bundles/author-superuser/components/ForumsEditor.js\":\"md5/bundles/author-superuser/components/ForumsEditor.sub.rjsBundle.a8ecf2abdc54ab28bc89a0c2f8ac33e8.6.js\",\"bundles/author-superuser/components/CoursePricesEditor.js\":\"md5/bundles/author-superuser/components/CoursePricesEditor.sub.rjsBundle.0212dbc81fb21ff540b11594817c2b07.6.js\",\"bundles/author-superuser/components/CourseSuperuserSettingsEditor.js\":\"md5/bundles/author-superuser/components/CourseSuperuserSettingsEditor.sub.rjsBundle.35dfbd0d9cae7b21ef60afae1528b4a1.6.js\",\"bundles/monitor-course-feedback/components/ItemDashboard.js\":\"md5/bundles/monitor-course-feedback/components/ItemDashboard.sub.rjsBundle.eb69b1cc77cc7ff4d11203a738db237f.6.js\",\"bundles/author-sessions/components/AuthoringSessionsPageWithCourse.js\":\"md5/bundles/author-sessions/components/AuthoringSessionsPageWithCourse.sub.rjsBundle.d11ae041cba98b0f32ffacf3998e0f7a.6.js\",\"bundles/monitor-course-feedback/components/CourseDashboard.js\":\"md5/bundles/monitor-course-feedback/components/CourseDashboard.sub.rjsBundle.29db5c90f79a7f2c795c68467481fb10.6.js\",\"bundles/ondemand/startApp.js\":\"md5/bundles/ondemand/startApp.sub.rjsBundle.51edf7adb70b73e54d0cedd97bed9064.6.js\",\"bundles/author-communication/components/CommunicationTool.js\":\"md5/bundles/author-communication/components/CommunicationTool.sub.rjsBundle.13d276eeabcaeedb31a6edd6e9db60e9.6.js\",\"bundles/monitor-course/components/ReachPanel.js\":\"md5/bundles/monitor-course/components/ReachPanel.sub.rjsBundle.7b8f76408431e98167663bf1351419e5.6.js\",\"bundles/author-course/components/CourseMaterialEditor.js\":\"md5/bundles/author-course/components/CourseMaterialEditor.sub.rjsBundle.99ce1304b9794cc37f6d4e79a15e0e5c.6.js\",\"bundles/author-superuser/components/CourseMentorsEditor.js\":\"md5/bundles/author-superuser/components/CourseMentorsEditor.sub.rjsBundle.b373c50550aa59148bbe8f0f1ed3b78a.6.js\",\"bundles/monitor-course-feedback/components/ItemFeedback.js\":\"md5/bundles/monitor-course-feedback/components/ItemFeedback.sub.rjsBundle.7da8f319a0f08f7521e9adefa6464145.6.js\",\"bundles/monitor-course-feedback/components/ItemGrades.js\":\"md5/bundles/monitor-course-feedback/components/ItemGrades.sub.rjsBundle.f314a038d5c1686b82226d321a24df4d.6.js\",\"bundles/teach-s12n/components/S12nAppContainer.js\":\"md5/bundles/teach-s12n/components/S12nAppContainer.sub.rjsBundle.38bb8133f894cef95a0d0873759099bd.6.js\",\"pages/finaid/FinaidPage.js\":\"md5/pages/finaid/FinaidPage.sub.rjsBundle.42384154c9b8af88c57d27d1ac13311e.6.js\",\"bundles/nextgen-task/components/TaskAttemptPage.js\":\"md5/bundles/nextgen-task/components/TaskAttemptPage.sub.rjsBundle.b444aae66d4206de22052882be3a08b4.6.js\",\"bundles/author-superuser/components/CourseExpertEditorPanel.js\":\"md5/bundles/author-superuser/components/CourseExpertEditorPanel.sub.rjsBundle.a77d55df90bd793b53257382522d2762.6.js\",\"bundles/finaid/components/FinaidCourseLandingPage.js\":\"md5/bundles/finaid/components/FinaidCourseLandingPage.sub.rjsBundle.347d5690e39ab13696761b12f134a5a2.6.js\",\"bundles/nextgen-task/components/TaskPreviewPage.js\":\"md5/bundles/nextgen-task/components/TaskPreviewPage.sub.rjsBundle.cc609d518ae307545ca704da69b027a6.6.js\",\"pages/partners/startApp.js\":\"md5/pages/partners/startApp.sub.rjsBundle.30c4ecc9f992d5663a833f1c75d30dc5.6.js\",\"bundles/dashboard-2016/components/Dashboard2016App.js\":\"md5/bundles/dashboard-2016/components/Dashboard2016App.sub.rjsBundle.d97507fecd18f89313d2541780727306.6.js\",\"bundles/dashboard-2016/components/MyEnrollments.js\":\"md5/bundles/dashboard-2016/components/MyEnrollments.sub.rjsBundle.53b5d36bd2087f2b011f120844f3dd21.6.js\",\"pages/finaid/startApp.js\":\"md5/pages/finaid/startApp.sub.rjsBundle.13fad1bb1499f4d46fbef5f4b0a7ea92.6.js\",\"bundles/nextgen-task/startApp.js\":\"md5/bundles/nextgen-task/startApp.sub.rjsBundle.09529796adb5364a5f6174555f6afafd.6.js\",\"pages/monitor-s12n/startApp.js\":\"md5/pages/monitor-s12n/startApp.sub.rjsBundle.222c46206e22f839f9ee0e68e89c44f4.6.js\",\"bundles/dashboard-2016/components/OldAccomplishmentsAdapter.js\":\"md5/bundles/dashboard-2016/components/OldAccomplishmentsAdapter.sub.rjsBundle.e5c3eb11d64744987276ff18146228ea.6.js\",\"bundles/dashboard-2016/startApp.js\":\"md5/bundles/dashboard-2016/startApp.sub.rjsBundle.821a27744f79ad4a4fccfcaa3472d522.6.js\",\"pages/open-course/routes.js\":\"md5/pages/open-course/routes.sub.rjsBundle.a3de2d520fda960590e6dc585511bcc1.6.js\",\"pages/open-course/peerReview/views/preview.js\":\"md5/pages/open-course/peerReview/views/preview.sub.rjsBundle.1caaeaeb510ef1fbe79f6197cec193e6.6.js\",\"bundles/author-lecture/components/ModalLectureAuthoringTool.js\":\"md5/bundles/author-lecture/components/ModalLectureAuthoringTool.sub.rjsBundle.d40960ba36ebcd754476e10f2965081b.6.js\",\"bundles/author-grade/components/GradeAuthoringTool.js\":\"md5/bundles/author-grade/components/GradeAuthoringTool.sub.rjsBundle.0fcaba2be190c97ef075e50fa2041b60.6.js\",\"bundles/monitor-course/components/Stories.js\":\"md5/bundles/monitor-course/components/Stories.sub.rjsBundle.afbb2536d7c8fd841143f6d3a2a24c40.6.js\",\"bundles/author-module-week-mapping/components/ModuleWeekMappingEditor.js\":\"md5/bundles/author-module-week-mapping/components/ModuleWeekMappingEditor.sub.rjsBundle.f966148241cc323068c666ab140aa3dd.6.js\",\"bundles/author-superuser/components/CourseMigrationPanel.js\":\"md5/bundles/author-superuser/components/CourseMigrationPanel.sub.rjsBundle.65dc1933f183a9cee8c12351993df44b.6.js\",\"bundles/finaid/components/FinaidCourseApplication.js\":\"md5/bundles/finaid/components/FinaidCourseApplication.sub.rjsBundle.07dba21ca0c33bb4f53e4fd5cf5a5998.6.js\",\"bundles/nextgen-task/components/TaskAdminPage.js\":\"md5/bundles/nextgen-task/components/TaskAdminPage.sub.rjsBundle.b279f318a28be13679dfc445cb74f43e.6.js\",\"pages/teach-course/startApp.js\":\"md5/pages/teach-course/startApp.sub.rjsBundle.4ecd28015eebb7c75adaaaf20fb949e8.6.js\",\"bundles/nextgen-task/components/TaskListPage.js\":\"md5/bundles/nextgen-task/components/TaskListPage.sub.rjsBundle.3d22ed2dda274ccca62869858b1c51aa.6.js\",\"bundles/dashboard/components/Notifications.js\":\"md5/bundles/dashboard/components/Notifications.sub.rjsBundle.7ea1652d3079599cc37a3165a05fb392.6.js\"}");
} catch(e) {
  var versionedPaths = {};
}
var baseAssetUrl = 'https://d3njjcbhbojbot.cloudfront.net/web/';

for (var path in versionedPaths) {
  require.paths[path.replace('.js', '')] = baseAssetUrl + versionedPaths[path].replace('.js', '');
}</script><script>var loadScript = function(url, success, async) {
  var newScript = document.createElement('script');
  var scripts = document.getElementsByTagName('script');
  
  newScript.type = 'text/javascript';
  newScript.async = async || false;
  newScript.crossorigin = 'anonymous';
  
  if (success) {
    if (newScript.addEventListener) {
      newScript.addEventListener('load', function() {
       success();
      }, false);
    } else if(newScript.readyState) {
      newScript.onreadystatechange = function() {
        if (this.readyState == 'complete') {
          newScript.onreadystatechange = null;
          success();
        }
      };
    }
  }
  
  if (scripts && scripts.length) {
    var lastScript = scripts[scripts.length - 1];
    lastScript.parentNode.insertBefore(newScript, lastScript.nextSibling);
  } else if (window.document && window.document.body) {
    window.document.body.appendChild(newScript);
  }
  
  // IE9 will execute the proper order if src is set AFTER injection
  newScript.src = url;
}

window.coursera = {};
</script><script>/* global coursera */
// Provide a string that will be replaced by edge.
// Make sure to use double quotes because edge only escapes double quotes.
// Then check that edge actually did the replacement.
// Otherwise return an empty object.
// You must use double quotes for the injected string
coursera.epicOverrides = (function() {
  var injectedString = "{\"elements\":[{\"namespace\":\"siteOnDemandCompletion\",\"idForAllocation\":\"20791749\",\"experimentId\":\"nniFkP9REeSoAa1wDSbKdg\",\"variantId\":\"QrI28HibSqagqBuE_FA2Jw\",\"parameterName\":\"showCourseScheduleByDefaultCourses\",\"id\":0,\"version\":1,\"value\":{\"development\":[\"Auue1KA-EeS9VCIACyUcdg\",\"2UHGXkNtEeSfwCIACxeXRw\",\"03osAJejEeSA2iIACzAQrQ\",\"tWgmnb03EeS5IyIACyCAHg\",\"mG1NQnUvEeS8UyIACzYI5Q\",\"Q9urcdfwEeStziIAC2gVQw\",\"UCVlZaWxEeSHRCIACyUEiQ\",\"ClCx1sbdEeShXyIAC5MC2w\"],\"production\":[\"Auue1KA-EeS9VCIACyUcdg\",\"2UHGXkNtEeSfwCIACxeXRw\",\"03osAJejEeSA2iIACzAQrQ\",\"tWgmnb03EeS5IyIACyCAHg\",\"mG1NQnUvEeS8UyIACzYI5Q\",\"Q9urcdfwEeStziIAC2gVQw\",\"UCVlZaWxEeSHRCIACyUEiQ\",\"ClCx1sbdEeShXyIAC5MC2w\"],\"testing\":[\"Auue1KA-EeS9VCIACyUcdg\",\"2UHGXkNtEeSfwCIACxeXRw\",\"03osAJejEeSA2iIACzAQrQ\",\"tWgmnb03EeS5IyIACyCAHg\",\"mG1NQnUvEeS8UyIACzYI5Q\",\"Q9urcdfwEeStziIAC2gVQw\",\"UCVlZaWxEeSHRCIACyUEiQ\",\"ClCx1sbdEeShXyIAC5MC2w\"]},\"status\":\"RUNNING\"},{\"namespace\":\"UniversityProduct\",\"idForAllocation\":\"2656112986-1470347693857\",\"experimentId\":\"5TmI4BucEeaJ1js1DqnyLg\",\"variantId\":\"iywnYRbpT0qZ7EKP4OSsaw\",\"parameterName\":\"enableQualification\",\"id\":1,\"version\":1,\"value\":[\"masters-in-computer-data-science\",\"imba\"],\"status\":\"RUNNING\"},{\"namespace\":\"siteCatalog\",\"idForAllocation\":\"2656112986-1470347693857\",\"experimentId\":\"yjoe0Ma-EeSuwYfluGPDdA\",\"variantId\":\"18PXoHtJTfy8PXptGOUI1w\",\"parameterName\":\"numRelatedCourses\",\"id\":2,\"version\":1,\"value\":9,\"status\":\"RUNNING\"},{\"namespace\":\"UniversityProduct\",\"idForAllocation\":\"20791749\",\"experimentId\":\"tMI-sImrEeWsY90HTkZIJg\",\"variantId\":\"dRgOax9fTdabTSj-594pUA\",\"parameterName\":\"showPreLaunchBanner\",\"id\":3,\"version\":1,\"value\":true,\"status\":\"RUNNING\"},{\"namespace\":\"DiscussionsApiRollout\",\"idForAllocation\":\"20791749\",\"experimentId\":\"G-twIFqKEeaHp385GRhrZA\",\"variantId\":\"6xCHX9e0R4uzGZJbfH4ZhA\",\"parameterName\":\"coursesUsingNewDiscussionsApis\",\"id\":4,\"version\":1,\"value\":[\"7prp2knvEeaLEAqUHs9hMw\",\"r92qqknvEeaNVA7r6h-zAw\",\"nRm9s0nvEeagxwr1Kg22cw\",\"_GXCL0nuEeaZRQ4866lvJw\",\"WfYL1UnuEea4vhJIkIeSTQ\",\"OHnQI0nuEeaS0App9RAxLw\",\"yeli1ehUEeSBtCIAC3lLIA\",\"OmgIw0C2EeWZtA4u62x6lQ\",\"ZNeGqEC2EeWC4g7VhG4bTQ\",\"KDbA8hYREeWCWhKuhISYpw\"],\"status\":\"RUNNING\"},{\"namespace\":\"siteLoggedOutHomepage\",\"idForAllocation\":\"2656112986-1470347693857\",\"experimentId\":\"gMOjkK2tEeS77ZOYvk9AFA\",\"variantId\":\"lQ-0JDanQde383SyXIfb1A\",\"parameterName\":\"epicSanityCheck\",\"id\":5,\"version\":1,\"value\":\"#ABABAB\",\"status\":\"RUNNING\"},{\"namespace\":\"epicSanityTest\",\"idForAllocation\":\"20791749\",\"experimentId\":\"LEZNYOOTEeSOKMFEh4LNLw\",\"variantId\":\"233IiC_IRT-Cu6ytY3hTzw\",\"parameterName\":\"byUserAllocationTest\",\"id\":6,\"version\":1,\"value\":0.1,\"status\":\"RUNNING\"},{\"namespace\":\"siteOnDemandCompletion\",\"idForAllocation\":\"20791749\",\"experimentId\":\"kDsScFsGEeWNxBt6w9EiLw\",\"variantId\":\"K4AteT8QR0GlBnIna5Hz8g\",\"parameterName\":\"showInviteFriends\",\"id\":7,\"version\":1,\"value\":\"friendFocused\",\"status\":\"RUNNING\"},{\"namespace\":\"UniversityProduct\",\"idForAllocation\":\"20791749\",\"experimentId\":\"aZuOAPg3EeWUjS_yrDwHuA\",\"variantId\":\"yeNFUXOKR1elutRDkeNNsA\",\"parameterName\":\"enableProgramHome\",\"id\":8,\"version\":1,\"value\":true,\"status\":\"RUNNING\"},{\"namespace\":\"PeerReview\",\"idForAllocation\":\"20791749\",\"experimentId\":\"sN1JgELNEeaZoKN4lOePlg\",\"variantId\":\"pbroSpIPQMyyxq-ATm_c0A\",\"parameterName\":\"mentorGradingExperimentSessions\",\"id\":9,\"version\":1,\"value\":[\"Nh2Y4jpREea1pw5frt5utw\",\"TYVP9iBVEeaIERIKn_tddw\",\"Nh0jgzpREeai1RIqHM9jYQ\",\"JoDcfTpREeai1RIqHM9jYQ\",\"Jn98sjpREeadRwqDTecQDw\",\"dXdwucnfEeWs-BKzmUStyw\",\"-QsiiTpQEeazPQoUWGdJ9Q\",\"-QPPqTpQEeaJZA6Ew5-W7Q\",\"c6e6ns0JEeWQzA7MOZsNDQ\",\"JfUarTjNEeakuhJbRt69hQ\",\"3dxGzD2ZEeaSvQr5rWp-YQ\",\"3dtb-z2ZEeaXnBKVQldqyw\",\"e2-JVgmLEeau9AoaFBtgPw\",\"RayQbQmLEeayPAoPBKi3uQ\",\"H_SFtD2cEeai1RIqHM9jYQ\",\"H_NNXj2cEeajOxLxiFQ2FQ\",\"Rjb8cz2cEea1pw5frt5utw\",\"RjSMVj2cEeaswA4y58BhkQ\",\"hnJUFiXVEeaqDg5upLny3Q\",\"YXNWfz2cEeaL_xIEq4QdBw\",\"YXBw6z2cEeaDRA5SxbW7qQ\",\"2oHHiXVEea6-g6AAdRd5w\",\"h0LubUVmEeaPHQrkCWo3rw\",\"h0WGn0VmEeakjgrw866CBw\",\"H5ieQEVOEeag-Q7qt7iPGQ\",\"lcF9EkVOEeadRwqDTecQDw\",\"Vwr5jC9DEeaCnQ4uxkc-rQ\",\"wt_4LUYpEeaS0w6RXgoWAw\",\"wt8NvEYpEeaSvQr5rWp-YQ\",\"eFrrWryDEeWARArsHojuCw\",\"H6kYxkVOEeaIhBLoYw6bKw\",\"neGVsytVEeaaVA48G_0dEQ\",\"T7eAEyUMEeaPnhLgQwuIcQ\",\"_v9fXxoLEea8qw7iXbJ_IQ\",\"wuDhoUYpEeaswA4y58BhkQ\",\"wuAemkYpEeajOxLxiFQ2FQ\",\"kTbm4w8LEeaSqwpdV4Ekkw\",\"lcGjzkVOEeaSvQr5rWp-YQ\"],\"status\":\"RUNNING\"},{\"tagTarget\":{\"targetType\":\"WHITELIST\",\"tagName\":\"course_id\",\"tagValues\":[\"GdeNrll1EeSROyIACtiVvg\",\"Gtv4Xb1-EeS-ViIACwYKVQ\"]},\"namespace\":\"epicSanityTest\",\"idForAllocation\":\"20791749\",\"experimentId\":\"wKqJkHRHEeWSRCEdMbvyHQ\",\"variantId\":\"dT8s3hUeQe2bwStGn4Lg9A\",\"parameterName\":\"byUserTagTargetingTest\",\"id\":10,\"version\":1,\"value\":0.1,\"status\":\"RUNNING\"},{\"namespace\":\"siteOnDemandCompletion\",\"idForAllocation\":\"20791749\",\"experimentId\":\"SKtmsDrxEeW_SutdTZl09g\",\"variantId\":\"a5GaOqTSRTGg3nT5EQZIeQ\",\"parameterName\":\"showNearbyLearners\",\"id\":11,\"version\":1,\"value\":false,\"status\":\"RUNNING\"},{\"namespace\":\"Growth\",\"idForAllocation\":\"2656112986-1470347693857\",\"experimentId\":\"QelAsDdHEeaDGDunJxeMfg\",\"variantId\":\"BwgtUar-Q5CWhOiu1klmog\",\"parameterName\":\"enableSparkDeprecation\",\"id\":12,\"version\":1,\"value\":true,\"status\":\"RUNNING\"},{\"namespace\":\"siteOnDemandCompletion\",\"idForAllocation\":\"20791749\",\"experimentId\":\"ptVBwPKKEeSwXNXEdqMF9g\",\"variantId\":\"iQpIOtFYQPq4vrsuEvherA\",\"parameterName\":\"lockedAssessments\",\"id\":13,\"version\":1,\"value\":false,\"status\":\"RUNNING\"},{\"namespace\":\"JupyterNotebook\",\"idForAllocation\":\"20791749\",\"experimentId\":\"YWQHwG-TEeaA5BmCJMgaGA\",\"variantId\":\"01eiATLlSW--DR4dQV_0RQ\",\"parameterName\":\"enabledCourseIds\",\"id\":14,\"version\":1,\"value\":[\"QrJStTJkEeaVZA5K9cHVCQ\",\"RZ1S0B0MEeacvQ6cODzg5Q\"],\"status\":\"RUNNING\"},{\"namespace\":\"UniversityProduct\",\"idForAllocation\":\"20791749\",\"experimentId\":\"c_-yQHdZEeWSRCEdMbvyHQ\",\"variantId\":\"oLdEraIgT16sPtQIz8lK4w\",\"parameterName\":\"enableAssetAdminInLecture\",\"id\":15,\"version\":1,\"value\":true,\"status\":\"RUNNING\"},{\"namespace\":\"paidLearnerExperience\",\"idForAllocation\":\"20791749\",\"experimentId\":\"IxQKYJkfEeWNAk_1SMkpcg\",\"variantId\":\"76QRqaBqShKR1-RaK8TVDQ\",\"parameterName\":\"planningAhead\",\"id\":16,\"version\":1,\"value\":true,\"status\":\"RUNNING\"},{\"namespace\":\"Growth\",\"idForAllocation\":\"20791749\",\"experimentId\":\"1T6kUNG7EeWwHc3K8S0T3w\",\"variantId\":\"Xzh36SUDRoes2vmbwmcIUw\",\"parameterName\":\"showShoppingCart\",\"id\":17,\"version\":1,\"value\":false,\"status\":\"RUNNING\"},{\"namespace\":\"featureBlacklist\",\"idForAllocation\":\"20791749\",\"experimentId\":\"OBkBsBBMEeWn7q_gIvwNTw\",\"variantId\":\"jYg22rHHQUesvH4BKViJyg\",\"parameterName\":\"discussions\",\"id\":18,\"version\":1,\"value\":[\"iQZflcZ7EeOoFhIxOQQuEA\",\"1ndQqNPxEeSloiIAC3kKUw\",\"PLnREdJzEeSeOiIACzWBkQ\",\"iRBJm_LREeSplSIACzYDNg\",\"-DeBzORjEeSwliIAC3sMgg\",\"YOH__fNOEeSbSyIACxeWxg\",\"0aY3BdGZEeSX5iIAC4tS5g\",\"oZwETNccEeSV9iIAC0wBBw\",\"L7stsPOKEeSlpiIAC7NwBA\",\"MdNTKtdhEeSgyyIAC4cL9g\",\"3791_tdbEeS2-SIAC4-TTw\",\"e4SzF9c1EeS-LCIAC3icWw\",\"D-kRGMhiEeSHHCIAC12q0A\",\"zKZY59dlEeSQOCIAC0ELFw\",\"bzK7K9cYEeSV9iIAC0wBBw\",\"IFz46F48EeSncCIAC0eNkA\",\"PGQphxLCEeSD_CIACooXkA\",\"W-ayAiM9EeSjriIACzaDig\",\"nnd5lshWEeSA1yIACye2oA\",\"afDgOoSTEeSA1yIAC1EHSw\",\"bWG8V3TiEeSG_CIAC0UpQg\",\"ugSnwH9hEeSiIiIAC3lQMQ\",\"_UsmIV-PEeSnpyIACzWBsQ\",\"Y1sD7WReEeSPwSIACy-XPg\",\"__JK5M3TEeSa0iIAC9RQCQ\",\"pB5I3GYSEeSuUyIAC0mIhA\",\"5qe8W_5iEeSiniIAC1OXJA\",\"ClCx1sbdEeShXyIAC5MC2w\",\"LrTP0yv9EeWccAqzeA4VPw\",\"QKGzLQoYEeWKzSIAC7Uk8A\",\"CQk7JA46EeWuEBJhzy2uFw\",\"1b9VUDu6EeWdUgozVKt3nw\",\"jFTD2Tu2EeWFSA6UPWxRyQ\",\"kKyRFEEiEeWB_AoW1KYI4Q\",\"AXmFGEEjEeWpogr5ZO8qxQ\",\"Nq5uokEjEeWC4g7VhG4bTQ\",\"gDXTbUEjEeWKOBLv1z6n9w\",\"Af_9xkEkEeWpogr5ZO8qxQ\",\"YNmbV0EkEeWBrBIWi3mmCw\",\"mXOBuEEkEeWKOBLv1z6n9w\",\"5d5-vUEkEeWKOBLv1z6n9w\",\"HbD0pCZVEeW6YBLN1oULHQ\",\"gh5rVEd3EeW2ZBIIl17oPw\",\"CEwR00UZEeWb8RJf7Z1H0w\",\"GF_8bTVpEeWfzhKP8GtZlQ\",\"gh5rVEd3EeW2ZBIIl17oPw\",\"8To4DTVtEeWWBQrVFXqd1w\",\"hgw1Nkd5EeW8cBKtDAegYw\",\"bTYGrDVuEeW6RApRXdjJPw\",\"yVldYUd5EeWb5ArkqfgJBw\",\"5seL5DVuEeWa2g6sjqf03Q\",\"GG7g_Ed6EeWb5ArkqfgJBw\",\"X55NADVvEeW6RApRXdjJPw\",\"TEfLGl5WEeW5iQpSR8Sfhw\",\"wD1C7I_eEeWZyg6bf_Oxkw\",\"8K9bbo2MEeWeogpSJNat4w\",\"gPmGQZoiEeWXlw53nZA94w\",\"rWOCs42DEeWIbw4397jVQw\",\"R3QoIjeuEeWCYBKNeFwojw\",\"r63_BkfVEeWJHwqqqPAooQ\",\"7Sx79iWNEeWs4gorU6Q1Yw\",\"5c9BeiTUEeW3AhKilvRZ0Q\",\"RoH18NECEeWoww7Hc7148Q\",\"m0Du-7_DEeWn-wqIckNy5Q\",\"Ymu_3LNCEeWoKQ4rUD57pQ\",\"hkuKsxboEeaBJhInEtv6gQ\"],\"status\":\"RUNNING\"},{\"namespace\":\"UniversityProduct\",\"idForAllocation\":\"20791749\",\"experimentId\":\"VpmBwN8bEeW13pllysu66A\",\"variantId\":\"F9-0yupmQYKkPTOBwgms5w\",\"parameterName\":\"honorsAuthoringTestCourses\",\"id\":19,\"version\":1,\"value\":[\"faclearn-test\",\"grace-red-pandas\",\"grace-test\",\"board-game-strat\",\"marc-honors-test-course\",\"harrypotter\",\"grace-honors-authoring\",\"marc-rasi-honors-test\",\"peter-barna-honors-test\",\"linlin-xia-honors-test\",\"julia-cambre-honors-test\",\"kara-behnke-honors-test\",\"evan-shore-honors-test\",\"xiaofei-zhang-honors-test\",\"isaacs-honors-course\",\"honors-test-2\",\"honors-test-3\",\"honors-test-4\",\"guy-lee-honors\",\"dwinegar-honors-test-v1\"],\"status\":\"RUNNING\"},{\"namespace\":\"siteOnDemandCompletion\",\"idForAllocation\":\"20791749\",\"experimentId\":\"GBH-sDrxEeW4xcMAp3RbZw\",\"variantId\":\"lTNFhZj_STCjKpksRTVVrA\",\"parameterName\":\"showNearbyLearnersSessions\",\"id\":20,\"version\":1,\"value\":[\"RuMKADF_EeWddiIAC9pDDA\",\"Qr3tKyXLEeW_ESIAC7Psdg\",\"UjoB7CXLEeWAsyIACnuV7A\",\"wY_PQkYLEeWBcQqYSpqLgQ\",\"ThmX1EKyEeWTMBKhOZsGeQ\",\"ovQBC0KyEeWBHArcQOD9cw\"],\"status\":\"RUNNING\"},{\"namespace\":\"Growth\",\"idForAllocation\":\"20791749\",\"experimentId\":\"N3LGMNwZEeWd2EWHjPJEZg\",\"variantId\":\"5iXDdS5iRWOft02PTD8wig\",\"parameterName\":\"surveyMonkeyPromoUnitSurveyIds\",\"id\":21,\"version\":1,\"value\":[\"5KBMYCQ\"],\"status\":\"RUNNING\"},{\"namespace\":\"Growth\",\"idForAllocation\":\"2656112986-1470347693857\",\"experimentId\":\"EqT-sGMIEeafU4s5mDpOxA\",\"variantId\":\"EuM1sJaiRQCnoVHypjQcfw\",\"parameterName\":\"enableHeaderCatalogDropdown\",\"id\":22,\"version\":1,\"value\":true,\"status\":\"RUNNING\"},{\"namespace\":\"GLEDashboard\",\"idForAllocation\":\"20791749\",\"experimentId\":\"DP0UYDo8EeawbP1rPLpdEQ\",\"variantId\":\"6wNy0ounSlevqzj0vDG98g\",\"parameterName\":\"gleDashboardEnabled\",\"id\":23,\"version\":1,\"value\":true,\"status\":\"RUNNING\"},{\"namespace\":\"featureBlacklist\",\"idForAllocation\":\"20791749\",\"experimentId\":\"Qrz48FivEeWzgnv_xfJzhw\",\"variantId\":\"hp3MfSEuQ8G7obUqyaGUzw\",\"parameterName\":\"defaultDeadlines\",\"id\":24,\"version\":1,\"value\":[\"VYaXsC1oEeS76CIACxAQww\",\"Ijr8rurHEeSb-yIACwuKNg\",\"QgmoVdT2EeSlhSIACx2EBw\"],\"status\":\"RUNNING\"},{\"tagTarget\":{\"targetType\":\"WHITELIST\",\"tagName\":\"specialization_id\",\"tagValues\":[\"-8--wp23EeWX1grj0DVfGw\",\"ZxUbYRX3EeWXAyIAC0mP-A\",\"WAWz4plFEeWuQhIPCjYhEw\",\"pFm4BbZFEeWwLQ637j7aJw\",\"UCOl25lDEeWuQhIPCjYhEw\",\"VhBX5alEEeW3mhLW1_Ertw\",\"zj2VppjQEeWh0Q5bBaG7rw\",\"GAa2DkahEeWGYgrxbG8BSw\",\"-yLMaOraEeWe1wpXTEWo_Q\",\"Vsgr9J9aEeWj3Q6iLfN-8Q\",\"oZnIo5n3EeWr3RIZBKdvgw\"]},\"namespace\":\"siteOnDemandCompletion\",\"idForAllocation\":\"20791749\",\"experimentId\":\"BnO6EDfYEeaCU4-QltFs5Q\",\"variantId\":\"gAh1O_bUT-yoXIhTBJU2dQ\",\"parameterName\":\"enableGleHome\",\"id\":25,\"version\":1,\"value\":true,\"status\":\"RUNNING\"},{\"namespace\":\"featureBlacklist\",\"idForAllocation\":\"2656112986-1470347693857\",\"experimentId\":\"_OvcUBwtEeWHaIGkK0VUdA\",\"variantId\":\"RwcPRcvnSBaZcRvzhma6ow\",\"parameterName\":\"privacyUsers\",\"id\":26,\"version\":1,\"value\":[\"c3505fbfa8eef219a2076583c86352c9\",\"56fa950469da5c51aac7d0472c950e9c\",\"33ed9837320daa6dcbc14d2d0450ce8a\",\"6e3f06153c2a81d0a10814e24b5e716d\",\"0c1a02d2024f211713e17ce8e418c5e3\",\"8284d5516e63d0bc5d6b1b287049f58d\"],\"status\":\"RUNNING\"},{\"namespace\":\"payments\",\"idForAllocation\":\"2656112986-1470347693857\",\"experimentId\":\"fudkcNgpEeSqkYGQJ8cHlw\",\"variantId\":\"ra58cefUTtaVghYFW7Fl2A\",\"parameterName\":\"sparkPaymentsInGringotts\",\"id\":27,\"version\":1,\"value\":{\"development\":[5000006],\"production\":[974820,974608,972963,974644,973866,975068,975020,972886,972945,975350,975894,976158,976313,976428,976300,975652,976303,976301,976304,976302,976305,974676,976519,112,204,226,228,370,970196,970221,970222,970223,970262,970263,970288,970308,970391,970454,970465,970487,970496,970567,970636,970656,970725,970726,970786,970824,970892,970906,970911,970913,970914,970915,970916,970917,970918,970919,970925,970926,970927,970928,970929,970930,970938,970951,970952,971013,971041,971044,971045,971055,971083,971086,971246,971273,971280,971379,971491,971510,971512,971619,971624,971705,971711,971749,971808,971817,971898,971994,972006,972038,972041,972069,972071,972072,972094,972107,972108,972112,972113,972114,972126,972132,972153,972154,972155,972156,972157,972159,972160,972161,972162,972163,972164,972165,972166,972198,972216,972217,972218,972219,972220,972221,972222,972247,972357,972358,972380,972386,972401,972403,972414,972415,972466,972515,972516,972517,972518,972519,972520,972526,972530,972647,972648,972670,972699,972746,972750,972763,972802,972868,972873,972971,972974,973077,973098,973106,973109,973246,973325,973347,973348,973349,973350,973351,973352,973353,973382,973392,973393,973445,973551,973552,973595,973648,973670,973726,973808,973811,973822,973823,973824,973825,973833,973834,973836,973838,973840,973863,973871,973872,973874,973875,973876,973878,973893,973894,973898,973899,973900,973901,973902,973903,973907,973908,973909,973920,973925,973926,973927,973928,973929,973930,973931,973932,973933,973934,973935,973938,973939,973940,973941,973946,973947,973948,973949,973950,973951,973952,973953,973954,973955,973956,973957,973958,973959,973960,973961,973962,973963,973964,973965,973966,973967,973968,973981,973985,973986,973987,973989,973995,973996,974005,974006,974023,974025,974036,974053,974065,974117,974138,974175,974250,974329,974330,974361,974362,974363,974380,974385,974387,974389,974390,974398,974420,974422,974423,974424,974425,974429,974430,974431,974432,974433,974434,974454,974514,974530,974531,974532,974533,974534,974611,974613,974614,974615,974616,974617,974631,974632,974633,974634,974635,974637,974668,974669,974670,974671,974672,974673,974674,974675,974676,974677,974678,974686,974687,974688,974689,974737,974738,974739,974740,974741,974742,974743,974744,974758,974759,974760,974761,974791,974792,974793,974794,974802,974803,974804,974805,974806,974807,974809,974826,974827,974828,974829,974830,974831,974838,974839,974843,974844,974845,974846,974847,974848,974849,974851,974860,974875,974876,974877,974880,974881,974882,974883,974884,974900,974901,974902,974903,974933,974946,974948,974949,974950,974963,975030,975031,975032,975035,975038,975072,975073,975077,975078,975079,975080,975081,975082,975083,975084,975231,975232,975233,975234,975235,975236,975237,975238,975239,975240,975241,975242,975243,975244,975245,975246,975247,975248,975249,975250,975251,975252,975253,975254,975255,975256,975257,975258,975259,975260,975261,975262,975263,975264,975265,975266,975267,975271,975278,975286,975305,975372,975373,975374,975389,975432,975433,975434,975446,975525,975526,975527,975528,975529,975530,975539,975540,975541,975547,975595,975596,975597,975598,975627,975628,975629,975630,975631,975632,975640,975641,975642,975643,975644,975645,975646,975647,975648,975649,975650,975651,975652,975707,975809,975821,975822,975823,975824,975846,975868,975933,975958,975959,975960,975961,975962,975963,975964,975965,975966,975967,975968,975969,975970,975971,975972,975973,975974,975975,975976,975977,975978,975992,975994,975996,976011,976014,976017,976018,976019,976025,976049,976050,976053,976057,976058,976059,976060,976061,976062,976080,976084,976085,976086,976104,976105,976106,976112,976113,976114,976115,976116,976183,976184,976185,976186,976187,976191,976249,976278,976286,976300,976301,976302,976303,976304,976305,976310,976336,976338,976340,976341,976343,976348,976357,976358,976392,976393,976394,976438,976439,976494,976495,976519,976520,976641,976642,976643,976644,300,970404,970940,971760,302,970405,971111,971609,971830,972739,974237,974969,975695,971031,971831,971832,972740,974238,974970,975694,972075,972076,972134,972135,972572,972573,972574,972575,972577,972579,973486,973487,973488,973489,973490,973754,973978,973979,973980,974721,974722,974723,974724,974725,974726,974727,974728,974729,974730,974731,975096,975097,975098,975099,975100,976331,972077,972078,972138,972139,972576,972578,972580,972581,972583,973491,973492,973493,973494,973495,973496,973757,973973,973974,973975,973976,973977,974762,974763,974769,974773,974778,975101,975102,975103,975104,975105,975106,975107,975108,975109,972079,972080,972136,972137,972582,972584,972585,972586,972587,973497,973498,973499,973500,973501,973502,973758,974176,974764,974770,974771,974772,974774,974776,974777,974780,975110,975111,975112,975113,975114,975115,975116,975117,975118,975119,972081,972082,972140,972141,972588,972591,972594,972597,973503,973504,973505,973506,973507,973508,973509,973759,974177,974765,974766,974767,974768,974775,974779,974781,975120,975121,975122,975123,975124,975125,975126,975127,975128,975129,975130,972083,972084,972142,972143,972590,972592,972596,972599,973510,973511,973512,973513,973514,973515,973516,973760,974178,975131,975132,975133,975134,975135,975136,975137,975138,975139,975140,975141,975142,975143,975144,975145,975146,975147,975148,975149,975150,972085,972086,972144,972145,972601,972605,972607,973010,973517,973518,973519,973520,973521,973522,973523,973761,974179,975151,975152,975153,975154,975155,975156,975157,975158,975159,975160,975161,975162,975163,975164,975165,975166,975167,975168,972087,972088,972146,972147,972589,972593,972595,972598,973524,973525,973530,973531,973532,973533,973534,973762,974224,975169,975170,975171,975172,975173,975174,975175,975176,975177,975178,975179,975180,975181,975182,975183,975184,975185,975186,972089,972090,972148,972149,972602,972604,972608,973543,973544,973545,973546,973547,973548,973549,973550,973763,974222,975187,975188,975189,975190,975191,975192,975193,975194,975195,975196,975197,975198,975199,975200,975201,975203,975204,975205,972091,972092,972150,972151,972600,972603,972606,973535,973536,973537,973538,973539,973540,973541,973542,973764,974223,975206,975215,975216,975217,975218,975219,975220,975221,975222,975223,973249,973753,974126,975318,976134,976135],\"testing\":[],\"staging\":[]},\"status\":\"RUNNING\"},{\"namespace\":\"Growth\",\"idForAllocation\":\"2656112986-1470347693857\",\"experimentId\":\"7PDP0Gr3EeaJUnutHLgYPw\",\"variantId\":\"P7DVGVFAQIqf5GH6ggld8Q\",\"parameterName\":\"enableOnboarding2016Routes\",\"id\":28,\"version\":1,\"value\":true,\"status\":\"RUNNING\"},{\"namespace\":\"UniversityProduct\",\"idForAllocation\":\"20791749\",\"experimentId\":\"khbl0DJ3EeaoZskJs7bWAg\",\"variantId\":\"uzNfRVVvTSOH8fg7jeUK_Q\",\"parameterName\":\"enableTeams\",\"id\":29,\"version\":1,\"value\":true,\"status\":\"RUNNING\"},{\"namespace\":\"siteCatalog\",\"idForAllocation\":\"2656112986-1470347693857\",\"experimentId\":\"Zle6UBF1Eealhb3-tuI1ig\",\"variantId\":\"X6sRpJg6Sr6nQFoGF6WH8Q\",\"parameterName\":\"enableDegreesUpsellInCatalog\",\"id\":30,\"version\":1,\"value\":false,\"status\":\"RUNNING\"},{\"namespace\":\"UniversityProduct\",\"idForAllocation\":\"2656112986-1470347693857\",\"experimentId\":\"1qMbIFLEEea7tpWNqDxbGg\",\"variantId\":\"UsF0KFp9SB2Gq_RF1EydPg\",\"parameterName\":\"enableEnterprise\",\"id\":31,\"version\":1,\"value\":true,\"status\":\"RUNNING\"},{\"namespace\":\"siteOnDemandCompletion\",\"idForAllocation\":\"20791749\",\"experimentId\":\"HW7xkA4vEeWHUUdqJMvoCQ\",\"variantId\":\"5dXK3xSPS62hk-6ziDIurA\",\"parameterName\":\"fullyLaunchedHomeCourseIds\",\"id\":32,\"version\":1,\"value\":[\"WChOZHTVEeSi3yIACzSGcw\",\"Auue1KA-EeS9VCIACyUcdg\",\"2UHGXkNtEeSfwCIACxeXRw\",\"mG1NQnUvEeS8UyIACzYI5Q\",\"03osAJejEeSA2iIACzAQrQ\",\"4G2HtIWlEeSlzyIACiGe0w\",\"tWgmnb03EeS5IyIACyCAHg\",\"mTJHKj0pEeSGwyIACxCdDw\",\"Q9urcdfwEeStziIAC2gVQw\",\"UCVlZaWxEeSHRCIACyUEiQ\",\"-_a5rfggEeS0mSIACx2P1w\",\"RKMa0PTnEeSR9SIAC7LYOA\",\"skaKZPNTEeS7fSIACzYDNg\",\"MWII7A2TEeWoRw4pD4cXmw\",\"mYVoGA4fEeWkZg42h4yEYQ\",\"mYVoGA4fEeWkZg42h4yEYQ\",\"6mOCpgP8EeWmBSIAC9UI2A\",\"RwNT9Q4kEeWoRw4pD4cXmw\",\"-CDC9Q7JEeWPhwrBf2tcNQ\",\"Gtv4Xb1-EeS-ViIACwYKVQ\",\"Gtv4Xb1-EeS-ViIACwYKVQ\",\"A0IYf6jOEeSnlCIAC1EMbw\",\"b1G36Q75EeWMFBICvJtBuQ\",\"j3fuwJ3EEeSfuyIACxcGsQ\",\"8PRAaA76EeWkZg42h4yEYQ\",\"yNYeSg71EeWhsgqB1eduww\",\"ZkeKUQ78EeWPhwrBf2tcNQ\",\"YHdkRA79EeWuEBJhzy2uFw\",\"zz2Eww-UEeWoRw4pD4cXmw\",\"SAZf_ay2EeS5uiIACk-Zyg\",\"GdeNrll1EeSROyIACtiVvg\",\"tMHV7wu7EeWoRw4pD4cXmw\",\"1oJb3Q_bEeWMFBICvJtBuQ\",\"1ddSAQDKEeW0KyIACxqWIg\",\"iLI6egl6EeWw4CIACxsM5w\",\"YPGkFhCNEeWvmQrN_lODCw\",\"hhFDsQ72EeWPhwrBf2tcNQ\",\"Qx-vkAocEeWAYyIACmGIdw\",\"3cmY9AVPEeWr2CIAC20DIw\",\"hhFDsQ72EeWPhwrBf2tcNQ\",\"iHvwrvQ3EeS9pCIAC3jaow\",\"wWmv2BEhEeWvmQrN_lODCw\",\"awHMl_57EeSmPCIACyqGBw\",\"ZQDT5AS2EeWmBSIAC9UI2A\",\"usIwBhODEeWfzgpfp_iBVw\",\"6kAowBObEeWfzgpfp_iBVw\",\"-nkoihN6EeWCWhKuhISYpw\",\"3WznoRCoEeWhTg59fTWfpQ\",\"mG15ZhQ9EeWCWhKuhISYpw\",\"9zXfqf2IEeSnBSIACi-PoQ\",\"57Uu8hRTEeWCWhKuhISYpw\",\"TN2PygiBEeW4diIACwKO-g\",\"EwR6zhSDEeWCWhKuhISYpw\",\"q6P-8ed8EeSglCIACzUL2A\",\"qXxuFBUnEeWhTg59fTWfpQ\",\"tGbJuel4EeSnMSIACzuFJw\",\"5-A3g_KJEeS3yyIAC4eMqw\",\"h4KWW5YGEeS7eSIAC0CAGw\",\"z_MvXQoVEeWCpyIAC3lAyw\",\"V9_aHBU7EeWfzgpfp_iBVw\",\"c8dPVxUQEeWpKw4zIcjkHw\",\"-nRRAPmuEeSndSIAC7LTLQ\",\"C-Eq4BUkEeWfzgpfp_iBVw\",\"wsKEixV2EeWfzgpfp_iBVw\",\"DmetrPp5EeScaiIAC9WIJw\",\"MdyEHhSBEeWvmQrN_lODCw\",\"21IE8mqeEeSCnCIAC0ETWQ\",\"oWawIRajEeWEjBINzvDOWw\",\"thIk3xXjEeWvmQrN_lODCw\",\"pCa5-xauEeWEjBINzvDOWw\",\"IJOwrRbLEeWKlgqs7LdhRw\",\"T_hpstgKEeSA2iIAC22KLw\",\"7mVd2Bh8EeWiMA6gO89JYQ\",\"192QixZOEeWKlgqs7LdhRw\",\"oFRMKhbHEeWKlgqs7LdhRw\",\"wrevyBkaEeW9dA4X94-nLQ\",\"nACfmBkHEeWjrA6seF25aw\",\"qu8u8vqKEeSDoyIAC1CH0g\",\"rklWchkuEeWg_RJGAuFGjw\",\"9Ubk9xbUEeWKAgoqLfhrnw\",\"9Ubk9xbUEeWKAgoqLfhrnw\",\"CTlGQf2KEeSToSIACxsEgg\",\"3PL16--wEeSbxyIACw0OOQ\",\"2iD7dxkvEeW9dA4X94-nLQ\",\"-Eu38u08EeSKeyIACwQXPg\",\"V5SinKHsEeSqoSIACzsKQg\",\"cdBWwMNwEeS3kiIACx2NTg\",\"71uAg8wYEeSyoSIACwgCjw\",\"SrM6V-3pEeSJZSIAC0gHUg\",\"lUcQU1MNEeSstCIAC1GOZw\",\"PK8RF2g8EeSYbSIACzWPZQ\",\"HIUPOchIEeSA1yIACye2oA\",\"d086Bc9YEeSS_CIACzcAUg\",\"_aXKkBnJEeW9dA4X94-nLQ\",\"BJXF0TLTEeSasiIACxClrQ\",\"Niihyrb2EeSNXyIAC0mVOQ\",\"ofu7SKAEEeSrqiIAC46RtQ\",\"Fw4ZgaAIEeSrPCIAC1SWlw\",\"-1YwAnTLEeSjmyIAC0aXFg\",\"O_jWsQCnEeWKrCIAC49PHA\",\"QUTOlO03EeSC-CIAC38Bjw\",\"zn0YnhqsEeW9dA4X94-nLQ\",\"LaPkiBkDEeW2kQ6Me2SR7Q\",\"J_4ubhrPEeWsqgoIBu2JdQ\",\"lHabnht2EeWo5g5SXpDA8Q\",\"UTmoThr5EeWqIgq-TOy4Xw\",\"r32oHRuLEeWxXBLj8jbgsw\",\"mGM6AmlPEeSdNiIACrbZkA\",\"DEzfnLcYEeSz_CIAC1SRTA\",\"Ugk2Sxt_EeWBKhJRV_B8Gw\",\"sQEO1tohEeSQryIAC46GNw\",\"7tQ_XRkwEeWg_RJGAuFGjw\",\"hIc_pBqaEeWwrBKfKrqlSQ\",\"jOA_JhudEeWo5g5SXpDA8Q\",\"wS6YM72kEeSuIiIAC0uZhw\",\"dUNIFe9gEeSIIyIAC7LOhg\",\"NvjGfPeCEeSW1SIAC3oCCQ\",\"Gn2FwjeBEeSauSIAC0iVUQ\",\"WQMNShxYEeWP9g4JMjGIiQ\",\"fCKQimXqEeSuUyIAC0mIhA\",\"dBcr3BxdEeWxXBLj8jbgsw\",\"dPkbnh6zEeWP0w4yK2369w\",\"Tr9rK6JtEeSwKiIACiONVg\",\"XgJjBB9pEeWS6wrbVw_uEw\",\"ClCx1sbdEeShXyIAC5MC2w\",\"XeB2pvgkEeS36CIACw8Krw\",\"l9ryvRniEeWjrA6seF25aw\",\"d8F1aSA5EeWXzxJxfIL00w\",\"Atq3ziANEeWKeQ6ae81EbQ\",\"S2yYbyBiEeWa6hIFcmm3AQ\",\"s6_Z4SBAEeWcQw5YiljpGw\",\"uTjoICDXEeWXzxJxfIL00w\",\"JJ1g_B6sEeWFIxLDnS6_kQ\",\"A4W_GyDjEeW5Rwo0txKkgQ\",\"_PYZqCETEeW5Rwo0txKkgQ\",\"7O843CBJEeWcQw5YiljpGw\",\"D5GKj_UHEeSBSSIAC7JSBQ\",\"n3pvbSEREeWa6hIFcmm3AQ\",\"eo6NBCQPEeW5Rwo0txKkgQ\",\"ODnbKv_6EeSa0SIACyGBQw\",\"s5sEkwAHEeW9ISIACxWDhA\",\"rNpCSyQbEeWXzxJxfIL00w\",\"CN4C2CQnEeW5Rwo0txKkgQ\",\"7sFKfSQbEeWKeQ6ae81EbQ\",\"JqRWYR9_EeW5Rwo0txKkgQ\",\"o4yIjxxHEeWo5g5SXpDA8Q\",\"lQe1wR6cEeWP0w4yK2369w\",\"lqYVDO97EeSh_CIAC00HFA\",\"Ip_Fve-2EeSYxiIACxCnuw\",\"SpWNUyTfEeWxbhIkPfddLQ\",\"XRy7uCAeEeWKeQ6ae81EbQ\",\"CQk7JA46EeWuEBJhzy2uFw\",\"6byT1CWWEeW5pgpJEN0S6w\",\"-qKIDPnAEeS1QCIACy-KcQ\",\"eV-OTCTuEeWCGRL6mLoB5w\",\"QtAD8SXCEeWxbhIkPfddLQ\",\"CUKQcLcZEeSyXSIAC4tPlA\",\"6CxMgSTREeW3AhKilvRZ0Q\",\"A82QaHtJEeSliSIAC0EO7A\",\"mwj3ASWcEeWs4gorU6Q1Yw\",\"feddFyYDEeWP8AqYi9cmiw\",\"n5CoLR9qEeWzvQrNfP9t6Q\",\"D4GcwyW8EeWxbhIkPfddLQ\",\"iVmYEwMtEeWKrCIAC49PHA\",\"zl8I6wM2EeW0KyIACxqWIg\",\"U-w7EwASEeWiniIAC1OXJA\",\"-A_ToPNPEeSAEiIAC9TCSQ\",\"HbD0pCZVEeW6YBLN1oULHQ\",\"zTzjmvssEeSDoyIAC1CH0g\",\"gmsPUNGEEeSHqyIAC1AQBw\",\"krsj8B9UEeWhyRJ32U-zUw\",\"euRJEycxEeWP8AqYi9cmiw\",\"-jlqaCdNEeWZdgqPAjBN5w\",\"86Us9ue2EeS8JiIACsuR3w\",\"ZBQa0imAEeWdZwpK5HlOww\",\"QPA-0CmkEeWNhhKV-KxDhQ\",\"Wi5dZymSEeWNhhKV-KxDhQ\",\"qqRBbiEREeW5Rwo0txKkgQ\",\"9zXfqf2IEeSnBSIACi-PoQ\",\"HnfPZCR1EeWDEQ4YpP0FCQ\",\"lYw3nxuGEeWo5g5SXpDA8Q\",\"vSbhoSpqEeWNhhKV-KxDhQ\",\"1cz3WSsXEeWccAqzeA4VPw\",\"86Us9ue2EeS8JiIACsuR3w\",\"VuB23StaEeWccAqzeA4VPw\",\"5JJoCSsxEeWWnhJMxi0Z9Q\",\"pFOAWyaQEeWUyQ53Y6fgIQ\",\"C2WKsCXPEeWUyQ53Y6fgIQ\",\"-uFb-Ca0EeW6YBLN1oULHQ\",\"h8_mExnXEeWDtQoum3sFeQ\",\"0EqoQy7_EeWPngoW78wA_Q\",\"aAo9tS8NEeWv_w7cMMH1Uw\",\"xQHOMy81EeWPngoW78wA_Q\",\"Hr9lByyfEeWccAqzeA4VPw\",\"-O2O1Sy8EeWV6Q7jN0iEaQ\",\"s0uHeCzMEeWPngoW78wA_Q\",\"-qKIDPnAEeS1QCIACy-KcQ\",\"SpWNUyTfEeWxbhIkPfddLQ\",\"s4CUmzCqEeWPngoW78wA_Q\",\"3UY0FCmGEeWFggqB2SRvtQ\",\"yS8ezjDPEeW-zwq84wShFQ\",\"fjjF0gVfEeW0KyIACxqWIg\",\"yNYeSg71EeWhsgqB1eduww\",\"RmRwVDGaEeWsOA5fzAmxbw\",\"1hXB7TJfEeWFJhJQP1CW-Q\",\"Jh3a5yndEeWdZwpK5HlOww\",\"cKvqIUXWEeSAFiIACyyIrg\",\"LzAc0DSdEeWgIQ7IEhB31Q\",\"VxTqEC8iEeWUWxIOAnoaFQ\",\"DmetrPp5EeScaiIAC9WIJw\",\"WQMNShxYEeWP9g4JMjGIiQ\",\"XgJjBB9pEeWS6wrbVw_uEw\",\"XRy7uCAeEeWKeQ6ae81EbQ\",\"feddFyYDEeWP8AqYi9cmiw\",\"s1k4AzYgEeWa2g6sjqf03Q\",\"g4FwNDVyEeWW9BKhJ4xW0Q\",\"1q0a_TY6EeWBMQ5pdIoFkQ\",\"bRPXgjY9EeW6RApRXdjJPw\",\"SigFcjZtEeW6RApRXdjJPw\",\"w8XFGTVyEeWW9BKhJ4xW0Q\",\"2mShqDVyEeW6RApRXdjJPw\",\"oOIROTccEeWCYBKNeFwojw\",\"ct7G8DVLEeWfzhKP8GtZlQ\",\"JgEhzTokEeWO-Qq6rEZAow\",\"5tcVqTpTEeWO-Qq6rEZAow\",\"k2Ty4TonEeWO-Qq6rEZAow\",\"hHc_5i-9EeWv_w7cMMH1Uw\",\"_ehbrDx9EeWFSA6UPWxRyQ\",\"towthzydEeW0tw4knrMo3Q\",\"wmoTBzyAEeWFSA6UPWxRyQ\",\"trDN9vgGEeSW1SIAC3oCCQ\",\"lXNlz0B0EeWKOBLv1z6n9w\",\"Hr9lByyfEeWccAqzeA4VPw\"],\"status\":\"RUNNING\"},{\"namespace\":\"UniversityProduct\",\"idForAllocation\":\"20791749\",\"experimentId\":\"NyEcMAfpEeaGwkV5GXpNAg\",\"variantId\":\"L6DdBhd3R4-O8kATTv-t_w\",\"parameterName\":\"enableProgramAdmin\",\"id\":33,\"version\":1,\"value\":true,\"status\":\"RUNNING\"},{\"namespace\":\"siteOnDemandCompletion\",\"idForAllocation\":\"20791749\",\"experimentId\":\"3EwmUEbTEeWd_X_ta8Mo0Q\",\"variantId\":\"Y5mOBwJRRRm4MAYwUewLPA\",\"parameterName\":\"showOnboardModal\",\"id\":34,\"version\":1,\"value\":false,\"status\":\"RUNNING\"},{\"tagTarget\":{\"targetType\":\"WHITELIST\",\"tagName\":\"course_id\",\"tagValues\":[\"f2WcTizkEeamRw4FTpNrUQ\"]},\"namespace\":\"PeerReview\",\"idForAllocation\":\"20791749\",\"experimentId\":\"rPA-YDQHEeaIVHsWNp0sww\",\"variantId\":\"o9EQrxGrQraMG-rMBeHswQ\",\"parameterName\":\"mentorGradingVariant\",\"id\":35,\"version\":1,\"value\":true,\"status\":\"RUNNING\"},{\"namespace\":\"siteOnDemandCompletion\",\"idForAllocation\":\"20791749\",\"experimentId\":\"1sWUQGP8EeaA5BmCJMgaGA\",\"variantId\":\"61KQoNNySE-p5XtF-NK9gQ\",\"parameterName\":\"enableNewCourseInfo\",\"id\":36,\"version\":1,\"value\":true,\"status\":\"RUNNING\"},{\"namespace\":\"Growth\",\"idForAllocation\":\"20791749\",\"experimentId\":\"mtOXkNmZEeWVoufGzEaRSA\",\"variantId\":\"_K8Vao2SQ7KfzbLNIJD6CA\",\"parameterName\":\"showDashboardNotifications\",\"id\":37,\"version\":1,\"value\":true,\"status\":\"RUNNING\"},{\"namespace\":\"UniversityProduct\",\"idForAllocation\":\"20791749\",\"experimentId\":\"BrVdcJenEeWQBg3iw-AZ7A\",\"variantId\":\"hNiOp1BTRvas-fT8OWgRfg\",\"parameterName\":\"showApologyBannerForCompletion\",\"id\":38,\"version\":1,\"value\":[\"a-programar\",\"ableton-live\",\"altruism\",\"analisis-de-datos\",\"analytics-business-metrics\",\"aplicativo-para-iphone\",\"aprendo\",\"arduino-platform\",\"art-activity\",\"artinquiry\",\"arts-culture-strategy\",\"astro\",\"astrobiology\",\"aulaconstructivista\",\"being-a-teacher\",\"big-history\",\"bim-sumo\",\"bim-yingyong\",\"blended-learning\",\"business-strategy\",\"cad\",\"cad3d\",\"calculus1\",\"career-success-capstone\",\"chang-jian-man-xing-bing\",\"ciencia\",\"coaching-teachers\",\"como-autoconstruir-tu-vivienda\",\"competitivestrategy\",\"conflict-resolution-skills\",\"creatividad\",\"creativity-innovation\",\"cyber-security-domain\",\"data-analysis-tools\",\"data-visualization\",\"database-management\",\"decentralization-africa\",\"design-principles\",\"diabetes\",\"disability-awareness\",\"disaster-preparedness\",\"duke-programming-web\",\"dyslexia-difficulties\",\"ebola-essentials-for-health-professionals\",\"ebola-vaincre-ensemble\",\"energy-business\",\"english-principles\",\"entrepreneur-changement\",\"entrepreneurship-development\",\"finanzas-empresariales\",\"finanzas-personales\",\"fixing-healthcare\",\"foundations-business-strategy\",\"fundamentals-of-graphic-design\",\"future-education\",\"future-of-energy\",\"game-design\",\"game-development\",\"genetics-society\",\"gestao-escolar\",\"getting-started-with-essay-writing\",\"greening-the-economy\",\"guitar\",\"health-for-all\",\"hotel-distribution\",\"how-to-teach-us\",\"html-css-javascript\",\"human-computer-interaction\",\"importance-of-listening\",\"interaction-techniques\",\"intercultural-communication\",\"interfaz-ios\",\"intro-programming\",\"introcss\",\"iot\",\"jazz-improvisation\",\"jews-in-china\",\"ji-chu-guang-xue\",\"jianzhu-zixun-jianmo\",\"kierkegaard\",\"lavenir-de-la-decision\",\"leadership-21st-century\",\"leadership-collaboration\",\"leadership-skills\",\"leadership-storytelling\",\"learn-chinese\",\"learning-assessment\",\"ma-ke-si\",\"machine-learning\",\"management-philosophy\",\"managerial-accounting\",\"managerial-accounting-tools\",\"managing-talent\",\"marketing-plan\",\"max-weber\",\"microbiome\",\"modern-art-ideas\",\"modern-postmodern-1\",\"modern-postmodern-2\",\"motivate-people-teams\",\"music-production\",\"musicianship\",\"object-oriented-java\",\"objective-c\",\"pap\",\"pensamiento-sistemico\",\"people-analytics\",\"poetry-workshop\",\"political-philosophy\",\"political-philosophy-2\",\"predictive-analytics\",\"professional-teacher\",\"project-management-capstone\",\"public-relations\",\"python\",\"python-data\",\"python-network-data\",\"quantitative-methods\",\"research-methods\",\"rookie-teaching\",\"science-of-meditation\",\"security\",\"social-computing\",\"songwriting\",\"soulbeliefs\",\"soulbeliefs2\",\"soulbeliefs3\",\"spss-ruanjian\",\"strategic-business-analytics\",\"strategic-management\",\"strategy-formulation\",\"superhero\",\"swift\",\"swift-programming\",\"teach-violin-lessons\",\"teacher-curriculum\",\"teacher-relationships\",\"teaching\",\"teaching-character\",\"teaching-elementary\",\"teaching-learning\",\"teaching-plan\",\"teaching-secondary\",\"the-holocaust\",\"together-teacher\",\"types-of-conflict\",\"unwritten-constitution\",\"user-research\",\"video-game-story\",\"web-frameworks\",\"website-coding\",\"wei-dian-ying\",\"what-is-social\",\"writing-for-children\",\"written-constitution\",\"xin-li-xue-sheng-huo\",\"zhichang-suyang\",\"zhong-yao-zhi-shi\",\"zhong-yi-yao-wen-hua\",\"2-speed-it\",\"2d-cad\",\"3d-cad\"],\"status\":\"RUNNING\"},{\"namespace\":\"UniversityProduct\",\"idForAllocation\":\"2656112986-1470347693857\",\"experimentId\":\"8xs1QPY-EeWNiR0-xiyvFg\",\"variantId\":\"GZ8mOH90R8y5ZqnSjekzrw\",\"parameterName\":\"enableMCSDSPage\",\"id\":39,\"version\":1,\"value\":true,\"status\":\"RUNNING\"},{\"namespace\":\"siteOnDemandCompletion\",\"idForAllocation\":\"20791749\",\"experimentId\":\"2YizMA7xEeWoEe0NX_zBYA\",\"variantId\":\"e_39sF-CQHOp5lnu1SPX1Q\",\"parameterName\":\"squashedML\",\"id\":40,\"version\":1,\"value\":true,\"status\":\"RUNNING\"},{\"namespace\":\"Growth\",\"idForAllocation\":\"2656112986-1470347693857\",\"experimentId\":\"Yk09QD4lEeawbP1rPLpdEQ\",\"variantId\":\"vexjV85yQPGRCe2y40tsdQ\",\"parameterName\":\"pdpv2Rollout\",\"id\":41,\"version\":1,\"value\":true,\"status\":\"RUNNING\"},{\"namespace\":\"UniversityProduct\",\"idForAllocation\":\"20791749\",\"experimentId\":\"SB40AGhmEeWyGLnqPFmazQ\",\"variantId\":\"MFDoeB0mTo6AE4UUDBqj7g\",\"parameterName\":\"enableAssetAdminInCMLEditor\",\"id\":42,\"version\":1,\"value\":true,\"status\":\"RUNNING\"},{\"namespace\":\"UniversityProduct\",\"idForAllocation\":\"20791749\",\"experimentId\":\"G_rP4JJMEeWw601RR-ZoMQ\",\"variantId\":\"KIQqH9ulSMGBTxSVgLOcFQ\",\"parameterName\":\"enableSlidesItemType\",\"id\":43,\"version\":1,\"value\":{\"videos\":{}},\"status\":\"RUNNING\"},{\"namespace\":\"siteOnDemandCompletion\",\"idForAllocation\":\"20791749\",\"experimentId\":\"BoNmgGF5EeW264lvr6wWLQ\",\"variantId\":\"6snswFHiTN-JNgqAG470Fw\",\"parameterName\":\"inviteFriendsEmail\",\"id\":44,\"version\":1,\"value\":\"challengeBanner\",\"status\":\"RUNNING\"},{\"namespace\":\"Growth\",\"idForAllocation\":\"2656112986-1470347693857\",\"experimentId\":\"qmxzIGSuEeay13H9EhMOkw\",\"variantId\":\"vZuDbsieTS236zKrmFtRsg\",\"parameterName\":\"enablePostDaphneLeadershipPage\",\"id\":45,\"version\":1,\"value\":true,\"status\":\"RUNNING\"},{\"namespace\":\"Growth\",\"idForAllocation\":\"20791749\",\"experimentId\":\"lz3HUOJEEeWfB5VYeGVwNQ\",\"variantId\":\"9DKoUBc1R_qIY2BkvO9iQA\",\"parameterName\":\"showRemoveCartLink\",\"id\":46,\"version\":1,\"value\":false,\"status\":\"RUNNING\"},{\"namespace\":\"siteOnDemandCompletion\",\"idForAllocation\":\"20791749\",\"experimentId\":\"iVVisAsDEeWn7q_gIvwNTw\",\"variantId\":\"TZ6SnHDMSaG0-O7gImI4Cg\",\"parameterName\":\"itemVideoDownloadBlacklist\",\"id\":47,\"version\":1,\"value\":[\"3EPZVpSGEeSb9SIACzCJlg\",\"lHabnht2EeWo5g5SXpDA8Q\",\"6DwzaCw7EeWGvAojQA48rw\",\"K28H5jJ0EeWgIQ7IEhB31Q\",\"mYp5R_2ZEeSToSIACxsEgg\",\"9p1NWzJzEeWFJhJQP1CW-Q\",\"tCC8OzJzEeWLGgqjU3pHlw\",\"I82JCSWXEeWtRg6boA3D-Q\",\"BPkiQyWcEeWxbhIkPfddLQ\",\"iN8yoSWdEeWCGRL6mLoB5w\",\"O941HzsyEeWjyxInT4zYJQ\",\"NjakpyWaEeWs4gorU6Q1Yw\",\"zwNXQiWXEeWCGRL6mLoB5w\"],\"status\":\"RUNNING\"},{\"namespace\":\"FrontendMobile\",\"idForAllocation\":\"2656112986-1470347693857\",\"experimentId\":\"vSJGcIKbEeW2J49N2NYU4A\",\"variantId\":\"EXAKovmtQCmoOVC1LPRSiA\",\"parameterName\":\"blacklistedUniversalLinks\",\"id\":48,\"version\":1,\"value\":{\"paths\":[\"/specializations/datamining\",\"/specializations/virtualteacher\",\"/specializations/cloudcomputing\",\"/specializations/globalaffairs\",\"/specializations/reasoning\",\"/specializations/contentstrategy\",\"/specializations/finance\",\"/specializations/jhudatascience\",\"/specializations/systemsbiology\",\"/specializations/genomics\",\"/specializations/cybersecurity\",\"/specializations/entrepreneurship\",\"/specializations/valuation\",\"/specializations/whartonfoundations\",\"/specializations/whartonchinese\",\"/specializations/fundamentalscomputing2\",\"/specializations/bioinformatics\",\"/specializations/neuro\",\"/specializations/mobilecloudcomputing2\",\"/specializations/humancomputerinteraction\",\"/specializations/medicaltech\"]},\"status\":\"RUNNING\"},{\"namespace\":\"Growth\",\"idForAllocation\":\"2656112986-1470347693857\",\"experimentId\":\"FKAhoGjKEeatiYVHIX59SA\",\"variantId\":\"tjoMm6AvQ5ml8vRUBq7WcA\",\"parameterName\":\"enableSimplifiedSDPSubheader\",\"id\":49,\"version\":1,\"value\":true,\"status\":\"RUNNING\"},{\"namespace\":\"siteOnDemandCompletion\",\"idForAllocation\":\"20791749\",\"experimentId\":\"0yNvIFsPEeWsnsuOqFLS8w\",\"variantId\":\"9CYugjqvSSSjZggdDMWzpg\",\"parameterName\":\"showInviteFriendsSessions\",\"id\":50,\"version\":1,\"value\":[\"rNag6lM0EeWUBw792DK9fQ\",\"ugBhUVM0EeWUBw792DK9fQ\",\"_0ZMvV4rEeWtThIg5CtnjQ\",\"3ggrcF4rEeWqGw6RaHDb6w\"],\"status\":\"RUNNING\"},{\"namespace\":\"Growth\",\"idForAllocation\":\"2656112986-1470347693857\",\"experimentId\":\"ciEqMGn8EeauIQsaygJ3_Q\",\"variantId\":\"npktmwc0Rk-THaKHXR0OVw\",\"parameterName\":\"drtvHomepageBannerType\",\"id\":51,\"version\":1,\"value\":\"v1\",\"status\":\"RUNNING\"},{\"namespace\":\"epicSanityTest\",\"idForAllocation\":\"/learn/interactive-computer-graphics/home\",\"experimentId\":\"OUxDMOI5EeSBHlt3m4P7NA\",\"variantId\":\"Nfi3uP_sQQ-dyU9UANZQHw\",\"parameterName\":\"byUrlAATest\",\"id\":52,\"version\":1,\"value\":\"#ABABAB\",\"status\":\"RUNNING\"},{\"namespace\":\"Growth\",\"idForAllocation\":\"20791749\",\"experimentId\":\"sqU_IFA9EeanzANyJ_InYA\",\"variantId\":\"5Tvc4CH3S46CBvepK88Szw\",\"parameterName\":\"showOnboardingSurvey\",\"id\":53,\"version\":1,\"value\":true,\"status\":\"RUNNING\"},{\"namespace\":\"Growth\",\"idForAllocation\":\"20791749\",\"experimentId\":\"dTGaMNG8EeWxJvMGGSGINQ\",\"variantId\":\"mq1WCvBbT_ikpYWRl6ZgRw\",\"parameterName\":\"shoppingCartExperimentRollout\",\"id\":54,\"version\":1,\"value\":true,\"status\":\"RUNNING\"},{\"namespace\":\"Growth\",\"idForAllocation\":\"2656112986-1470347693857\",\"experimentId\":\"KDYPsGsMEeaYHzGvmo438Q\",\"variantId\":\"RtbJpOXERLOfP0olE9bmHw\",\"parameterName\":\"hideSdpPrice\",\"id\":55,\"version\":1,\"value\":false,\"status\":\"RUNNING\"},{\"namespace\":\"Growth\",\"idForAllocation\":\"20791749\",\"experimentId\":\"VcVDAMk8EeWkHdXs3m69IQ\",\"variantId\":\"AsKq0q16S_mC-ehjRfYgjA\",\"parameterName\":\"premiumExperienceSingleCourseIds\",\"id\":56,\"version\":1,\"value\":[\"VTyPXbMXEeW-cQqGkhsQ8w\",\"b75Wh7MYEeWKaQ6n__gsuQ\",\"mKzzYp5YEeWVBgpelZA5Jw\",\"ct7G8DVLEeWfzhKP8GtZlQ\",\"NKKAyLLzEeWABgp2r5zOmw\",\"X_ZG4rVzEeWq2A7HIftJ6w\",\"eH8S1b38EeWxzxJER_JW2w\",\"XZomz77LEeWn1ApTWZT9Yw\",\"JI9lH7iAEeWddwqLXioIgw\",\"teQEkL-gEeWw3xJ2buBW3w\",\"hpIHP7ubEeWFzg5riIt8qw\"],\"status\":\"RUNNING\"},{\"namespace\":\"epicSanityTest\",\"idForAllocation\":\"20791749\",\"experimentId\":\"f0nwgOOSEeSOKMFEh4LNLw\",\"variantId\":\"vORmtVT9RmKnBTov0LyD8Q\",\"parameterName\":\"byUserAATest\",\"id\":57,\"version\":1,\"value\":\"#AAAAAA\",\"status\":\"RUNNING\"},{\"namespace\":\"payments\",\"idForAllocation\":\"2656112986-1470347693857\",\"experimentId\":\"AuDdAD0qEeWw65VdD2HA3w\",\"variantId\":\"q-dt5jG9RFWo2LyBAYR7XQ\",\"parameterName\":\"sparkSpecializationPaymentsInGringotts\",\"id\":58,\"version\":1,\"value\":{\"development\":[\"37\"],\"production\":[\"1\",\"2\",\"3\",\"4\",\"5\",\"6\",\"7\",\"8\",\"9\",\"10\",\"11\",\"12\",\"13\",\"14\",\"15\",\"16\",\"17\",\"18\",\"19\",\"20\",\"21\",\"22\",\"23\",\"24\",\"25\",\"26\",\"27\",\"28\",\"29\",\"30\",\"31\",\"32\",\"33\",\"34\",\"35\",\"36\",\"37\",\"38\",\"39\",\"40\",\"41\",\"42\",\"43\",\"44\",\"45\",\"46\"],\"testing\":[],\"staging\":[]},\"status\":\"RUNNING\"},{\"namespace\":\"epicSanityTest\",\"idForAllocation\":\"2656112986-1470347693857\",\"experimentId\":\"D8MboOOTEeS9AxsvPmsp6g\",\"variantId\":\"WWOhbRYxRUKMx9K89M0rXA\",\"parameterName\":\"bySessionAllocationTest\",\"id\":59,\"version\":1,\"value\":0.1,\"status\":\"RUNNING\"},{\"namespace\":\"siteCatalog\",\"idForAllocation\":\"2656112986-1470347693857\",\"experimentId\":\"6bAesCwfEeW4xcMAp3RbZw\",\"variantId\":\"KrJyxYVOR_meSnWU41Q0Ag\",\"parameterName\":\"showPreEnrollCourses\",\"id\":60,\"version\":1,\"value\":true,\"status\":\"RUNNING\"},{\"namespace\":\"siteOnDemandCompletion\",\"idForAllocation\":\"20791749\",\"experimentId\":\"3XIEkP9JEeSyzFEZhyqtDQ\",\"variantId\":\"R3cbjx6aTNuWetuvmdyJOg\",\"parameterName\":\"showCourseScheduleByDefault\",\"id\":61,\"version\":1,\"value\":false,\"status\":\"RUNNING\"}],\"paging\":{},\"linked\":{}}";

  if (injectedString.search('EPIC_SITE_HOME_PLACEHOLDER') >= 0) {
    return {};
  }

  var epicResponse = injectedString && injectedString !== undefined ? JSON.parse(injectedString) : {};
  return epicResponse.elements || {};
})();
/* globals coursera */
/* eslint-disable quotes */
coursera.user = (function() {
  var userJson = "{\"last_name\":null,\"website_twitter\":\"Habib_Aroua\",\"full_name\":\"Habib Aroua\",\"bio\":\"My name is Habib Aroua I'm 21 years old i want ameliorate my skills \",\"identity_verified\":false,\"photo\":\"\",\"work_status\":-1,\"birthday_day\":15,\"signature_track\":{},\"website_facebook\":\"habibaroua\",\"timezone\":\"America/Los_Angeles\",\"id\":20791749,\"website_linkedin\":\"\",\"location_lat\":null,\"email_address\":\"Habibha.aroua82@gmail.com\",\"location_lng\":null,\"work_opt_in_all_courses\":null,\"location_city\":\"\",\"first_name\":null,\"work_remote\":null,\"location_country\":\"\",\"privacy\":1000,\"work_location_lat\":null,\"photo_120\":\"\",\"locale\":\"fr_FR\",\"is_superuser\":false,\"location\":\"Tunisia\",\"work_location_country\":null,\"website_gplus\":\"\",\"birthday_month\":11,\"work_company_medium\":null,\"work_company_small\":null,\"website\":\"\",\"website_github\":\"\",\"resume\":null,\"work_location_city\":null,\"work_skills\":null,\"work_salary\":null,\"groups\":[],\"work_company_large\":null,\"work_location_state\":null,\"display_name\":\"Habib Aroua\",\"birthday_year\":1994,\"location_state\":\"\",\"work_location\":null,\"work_agree\":null,\"work_location_lng\":null,\"gender\":2,\"work_relocate\":null,\"photo_60\":\"\",\"is_staff\":false,\"photo_24\":\"\",\"email_verified\":false,\"work_title\":null,\"work_authorization\":null,\"external_id\":\"7781df17a9ca837d441e2aded169b9bd\",\"education_highest_level\":0}";
  try {
    return JSON.parse(userJson);
  } catch (e) {
    return {};
  }
})();
/* globals coursera*/
// Defines a named AMD module containing the course ID
coursera.courseId = (function() {
  return 'Qx-vkAocEeWAYyIACmGIdw';
})();
var loadRequireStubs = function() {(function() {
  var createNode = require.createNode;
  require.createNode = function(config, moduleName, url) {
    var scriptNode = createNode.apply(this, arguments);
    var assetUrl = 'https://d3njjcbhbojbot.cloudfront.net/web/';
    var forwardSlash = /^\//;
    if ((new RegExp(assetUrl)).test(url) || forwardSlash.test(url)) {
      scriptNode.setAttribute('crossorigin', 'anonymous');
    }
    return scriptNode;
  };
})();define('js/app/config', [], function() {
  var config = JSON.parse('{"debug":false,"environment":"production","log":"error","out":"js/app/config.js","dir":{"home":"/"},"url":{"api":"/maestro/api/","maestro":"/maestro/api/","base":"https://www.coursera.org/","cloudfront_api":"https://d1hpa2gdx2lr6r.cloudfront.net/maestro/api/","accounts":"https://accounts.coursera.org/","assets":"https://d3njjcbhbojbot.cloudfront.net/web/","resource_assets":"https://coursera_assets.s3.amazonaws.com/","app_assets":"https://d3njjcbhbojbot.cloudfront.net/web/da617f4985968492ca006d572245eca4d85ca7e4/","imageProxyRoot":"https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/"},"version":"da617f4985968492ca006d572245eca4d85ca7e4","versionTimestamp":"1472847705","gapi_eventing_data":{"project_number":"274249572679","api_key":"","client_id":"274249572679-al8nc3ttcavj0n91due232a3h6s3r9vk.apps.googleusercontent.com"},"bigquery":{"dataset":"mydataset","table_prefix":"livedata_"}}');
  if (config) {    config.requestCountryCode = 'TN';
    return config;
  } else {
    return {};
  }
});window.prerenderReady = false; window.logRequireError = function(Error) {
   // we are filtering out 'timeout', 'define', 'nodefine'
   if (Error.requireType === 'requirejs') {   
     var message = Error.message || 'undefined';
     var log = 'requirejs error (type:' + Error.requireType + ', message:' + message + ')';
     window.onerror(
       log,
       window.location.href,
       1,
       1,
       Error
     );
   }
 }; window.require.onError = window.logRequireError;};</script><!--[if lte IE 9]><script>var queueScript = function(scripts, callback) {
  return function() {
    if (scripts.length > 1) {
      loadScript(scripts.shift(), queueScript(scripts, callback));
    } else {
      loadScript(scripts.shift(), callback);
    }
  }
};

var queue = function(scripts, callback) {
  queueScript(scripts, callback)();
}

var scripts = [
  'https://d3njjcbhbojbot.cloudfront.net/web/bundles/vendor/Intl.js.v0-1-4/Intl.en-US.js',
  "https://d3njjcbhbojbot.cloudfront.net/web/" + (versionedPaths['js/app/preloader.js'] || "js/app/preloader.js"),
  "https://d3njjcbhbojbot.cloudfront.net/web/" + (versionedPaths['js/app/loader.js'] || "js/app/loader.js"),
  "https://d3njjcbhbojbot.cloudfront.net/web/" + (versionedPaths['bundles/ondemand/startApp.js'] || "bundles/ondemand/startApp.js")
];

queue(scripts, function() {
  loadRequireStubs();
  require(['js/app/preloader'], function(preloader) {
    preloader.instrumentAfterPreload();
  });
  require(['js/app/loader'], function(load) {
    load('bundles/ondemand/startApp');
  });
});</script><![endif]-->
<!--[if !IE]> --><script>if (!window.JSON) {
  loadScript('https://d3njjcbhbojbot.cloudfront.net/web/js/vendor/json2.js');
}

if (!window.Intl) {
  loadScript('https://d3njjcbhbojbot.cloudfront.net/web/bundles/vendor/Intl.js.v0-1-4/Intl.en-US.js');
}
</script><script>// the loadScript events order will be preserved by execution
// however, the two require calls happen async, so except for loading of the static libraries
// they should not depend on each other (execution wise)
loadScript("https://d3njjcbhbojbot.cloudfront.net/web/" + (versionedPaths['js/app/preloader.js'] || "js/app/preloader.js"), function() {
  loadRequireStubs();
  require(['js/app/preloader'], function(preloader) {
    preloader.instrumentAfterPreload();
  });
});
loadScript("https://d3njjcbhbojbot.cloudfront.net/web/" + (versionedPaths['js/app/loader.js'] || "js/app/loader.js"));
loadScript("https://d3njjcbhbojbot.cloudfront.net/web/" + (versionedPaths['bundles/ondemand/startApp.js'] || "bundles/ondemand/startApp.js"), function() {
  require(['js/app/loader'], function(load) {
    load('bundles/ondemand/startApp');
  });
});</script><!-- <![endif]--><script type="text/javascript">function linkAlternate(hreflang, subdomain) {
  var domain = subdomain + '.coursera.org';
  
  var link = document.createElement('link');
  link.hreflang = hreflang;
  link.rel = 'alternate';
  link.href = window.location.protocol + '//' + domain + window.location.pathname;
  
  document.head.appendChild(link);
}

function linkLocale(locale) {
  //- our locale sites are hosted at subdomains
  linkAlternate(locale, locale);
}

//- copied from an nls config
var localesSupported = [
  'es',
  'fr',
  'pt',
  'ru',
  'tr',
  'zh',
  'zh-tw',
];

localesSupported.forEach(linkLocale);
linkAlternate('en', 'www');
linkAlternate('x-default', 'www');</script>
<?php

?>
</body>
</html>