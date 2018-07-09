<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <title>下载</title>
</head>
<style type="text/css">
    .setbg{
        background: url("d.jpg");
        background-size:100% auto;


    }
</style>
<body>
<div class="setbg">
<?php
header('content-type:text/html;charset=utf-8');
require './function.php';

textToBeBuleAndBig("磁盘空间容量：".round((getDirSize("file/")/1048576),3)."MB/13312MB");
date_default_timezone_set("PRC");
$dir = "file/";
$path1="D:/WWW/soce/file/";
if (is_dir($dir)){
    if ($dh = opendir($dir)){
        while (($file = readdir($dh)) !== false){
if($file!="."&&$file!=".."){

            $arrayT=explode('.',$file);
             textToBeBuleAndsmall("文件名： ".iconv("gb2312","utf-8",$file));
              textToBeBuleAndsmall("文件大小:". round(filesize($path1.$file)/1024,2)."kb") ;
               echo "文件格式:".
                $arrayT[1].
                "<br>".
                "文件创建时间:".
                date('Y-m-d-h:i:s',filectime($path1.$file));
            showDownlaod(iconv("gb2312","utf-8",$file))
            ;
            echo "<br>";
        }}
        closedir($dh);
    }
}
echo "<button><font size='5px' color='#191970'><a href='uploadIndex.php'>继续上传</font></a></button>";
?>
    </div>
</body>
</html>