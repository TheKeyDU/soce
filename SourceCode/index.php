<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>杜其键</title>

<style>
body {
  margin: 0;
  width: 100vw;
  height: 100vh;
  background: #ffffff;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}

.world {
  -webkit-perspective: 800px;
          perspective: 800px;
  width: 100vh;
  height: 100vh;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}

.cube {
  -webkit-transform-style: preserve-3d;
          transform-style: preserve-3d;
  -webkit-backface-visibility: hidden;
          backface-visibility: hidden;
  width: 50vh;
  height: 50vh;
  position: relative;
  -webkit-animation: rotator 4.5s linear infinite;
          animation: rotator 4.5s linear infinite;
  outline: 0;
}
.cube * {
  background: #000;
  box-shadow: 0 0 3vh currentColor;
  -webkit-transition: background 0.4s ease-in-out, box-shadow 0.4s ease-in-out;
  transition: background 0.4s ease-in-out, box-shadow 0.4s ease-in-out;
}
.cube:hover * {
  background: currentColor;
  box-shadow: 0 0 20vh currentColor;
}
.cube .cube__front {
  color: deeppink;
  -webkit-transform: translateZ(25vh);
          transform: translateZ(25vh);
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}
.cube .cube__right {
  color: lightcoral;
  -webkit-transform: rotateY(90deg) translateZ(25vh);
          transform: rotateY(90deg) translateZ(25vh);
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}
.cube .cube__left {
  color: skyblue;
  -webkit-transform: rotateY(270deg) translateZ(25vh);
          transform: rotateY(270deg) translateZ(25vh);
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}
.cube .cube__back {
  color: seagreen;
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  -webkit-transform: rotateY(180deg) translateZ(25vh);
          transform: rotateY(180deg) translateZ(25vh);
}
.cube .cube__top {
  color: mediumseagreen;
  -webkit-transform: rotateX(90deg) translateZ(25vh);
          transform: rotateX(90deg) translateZ(25vh);
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}
.cube .cube__bottom {
  color: dodgerblue;
  -webkit-transform: rotateX(270deg) translateZ(25vh);
          transform: rotateX(270deg) translateZ(25vh);
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}

@-webkit-keyframes rotator {
  0% {
    -webkit-transform: rotateX(0deg) rotateY(0deg);
            transform: rotateX(0deg) rotateY(0deg);
  }
  100% {
    -webkit-transform: rotateX(360deg) rotateY(360deg);
            transform: rotateX(360deg) rotateY(360deg);
  }
}

@keyframes rotator {
  0% {
    -webkit-transform: rotateX(0deg) rotateY(0deg);
            transform: rotateX(0deg) rotateY(0deg);
  }
  100% {
    -webkit-transform: rotateX(360deg) rotateY(360deg);
            transform: rotateX(360deg) rotateY(360deg);
  }
}
</style>
</head>
<body>
<br>
<p id="time"><font size="100px" color="#00ffcc"></font></p>
<br>

<div style="text-align:center;clear:both">
<script src="/gg_bd_ad_720x90.js" type="text/javascript"></script>
<script src="/follow.js" type="text/javascript"></script>
</div>
      <iframe frameborder="0" scrolling="no" src="index2.html" width="50%" height="50%"></iframe>
	  
      <iframe frameborder="0" scrolling="no" src="index2.html" width="50%"height="50%"></iframe>
<button type="button" onclick="showLogin()" ><font size="70dp" color="#ff3300">管理员登陆</font><br>
<h3 id ="info"><font size="20px" color="#ffffff">info</font></h3>
<a href="uploadIndex.php">上传文件</a>
<script>
txt=Date();
txt += "<p>浏览器code: " + navigator.appCodeName + "</p>";
txt+= "<p>浏览器名字: " + navigator.appName + "</p>";
txt+= "<p>浏览器版本: " + navigator.appVersion + "</p>";
txt+= "<p>支持cookie？: " + navigator.cookieEnabled + "</p>";
txt+= "<p>工具版本 " + navigator.platform + "</p>";
txt+= "<p>用户头文件" + navigator.userAgent + "</p>";
txt+= "<p>用户语言" + navigator.systemLanguage + "</p>";

var infos= document.getElementById("info");
infos.style.color="ff0000";
infos.innerHTML=txt;
	function move(obj)
	{
	obj.innerHTML="!!!!!!";
	
	}
	function out(obj)
	{
	obj.innerHTML="维护中！！！";
	}
function showLogin()
{
prompt("输入KEY!");

}
</script>

</body>
</html>