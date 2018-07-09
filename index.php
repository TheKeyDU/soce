<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" contreg.htmlnt="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">

    <title>杜其键主页</title>
</head>
<body>
<?php
require './function.php';
header("content-Type:text/html;charset=utf-8");
$ip=addIpAndHistory();
 textToBeBuleAndBiger($ip) ;
date_default_timezone_set("PRC");
 $time=date("Y-m-d-h:i:s");
$conn = @mysqli_connect("localhost","root","root");
if (!$conn){
    die("SUCESS" . mysql_error());
}
mysqli_select_db( $conn,"website");
$re=mysqli_query($conn,"INSERT INTO his(ip,time)VALUES ('$ip','$time')");
if ($re)
{
    echo "!";
}

?>
<br>
<a href="uploadIndex.php" style="font-size: 30px ;font-family: '微软雅黑';color: crimson " >上传文件</a>
<br>
<a href="\user_reg\login&regIndex.php" style="font-size: 30px ;font-family: '微软雅黑';color: crimson " >登陆注册</a>
<br>
<a href="\guestbook\index.php" style="font-size: 30px ;font-family: '微软雅黑';color: crimson " >留言板</a>
<br>
<h1 id="info"> a</h1>
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
    infos.style.fontSize="20px";
    infos.innerHTML=txt;

</script>
</body>
</html