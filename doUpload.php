<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <title>上传</title>
    <style type="text/css">
        .setbg{
            background: url("c.jpg");
            background-size:100% auto;


        }
    </style>
</head>
<body>
<div class ="setbg">
    <?php
    /**
     * Created by PhpStorm.
     * User: 木土其金建
     * Date: 2018/5/28
     * Time: 11:37
     */

    header("content-Type:text/html;charset=utf-8");

    date_default_timezone_set("PRC");
    require './function.php';
    function getInfo($file,$no)
    {

        if (isset($_FILES[$file]) && $_FILES[$file]['error']==0)
        {
            $UploadTime=date('Y-m-d-h-i-s');

            $fileName=$_FILES["$file"]["name"];
            $tempname=$_FILES["$file"]["tmp_name"];
            iconv('utf-8','gb2312',$fileName);
            $FN='file/'.$no."&".$UploadTime."&".$fileName;
            $arrayT=explode('.',$fileName);
            if (move_uploaded_file($tempname,"file/".$no."&".$UploadTime.iconv('UTF-8','gb2312',$fileName)))
            {
                echo "<button><font size='5px' color='#191970'>".'磁盘空间容量：'.round((getDirSize("file/")/1048576),3)."MB/13312MB"."</font>.</button>";
          echo "<br>";
               textToBeBuleAndBig("上传成功");
                textToBeBuleAndBig("路径：".getcwd());
                textToBeBuleAndsmall("在文件夹中的Url:".$FN);
                textToBeBuleAndBig('第'.$no.'个文件大小'.round(($_FILES[$file]['size']/1024),3)."KB");
                textToBeBuleAndBig("文件的格式:".$arrayT[1]);


            }
            else{
             echo "<button><font size='10px' color='#191970'>".'上传或者移动失败！请重试或者联系我！！!'."</font>.</button>";;
            }

        }
        echo '第'.$no.'个文件,文件名: '.$_FILES[$file]['name'];
        echo '<br>';
        echo '第'.$no.'个文件错误'.$_FILES[$file]['error'];
        echo '<br>';
        echo '第'.$no.'个文件类型'.$_FILES[$file]['type'];
        echo '<br>';
        echo '第'.$no.'个文临时名称'.$_FILES[$file]['tmp_name'];
        echo '<br>';
    }
    for ($i=1;$i<=5;$i++)
    {
        getInfo('file'.$i,$i);
        echo '<br>';

    }
    echo "<button><font size='5px' color='#191970'><a href='download.php'>跳转到下载</font></a></button>";

    echo "<button><font size='5px' color='#191970'><a href='uploadIndex.php'>继续上传</font></a></button>";

    ?>
</div>
</body>
</html>