<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <title>杜其键</title>
    <style type="text/css">
        .setbg{
            background: url("b.jpg");
            background-size:100% auto;


        }
    </style>
</head>
<body>
<div class ="setbg">
    <?php


    require './function.php';

    echo "<font size='5px' color='#ff7f50'>".'磁盘空间容量：'.round((getDirSize("file/")/1048576),3)."MB/13312MB"."</font>";

    ?>

    <form method="post" action="doUpload.php" enctype="multipart/form-data">
        <input type="file" name="file1" >
        <br>
        <input type="file" name="file2">
        <br>
        <input type="file" name="file3">
        <br>
        <input type="file" name="file4">
        <br>
        <input type="file" name="file5">
        <br>
        <input type="submit" name="btn" value=上传>
        <br><br><br><br><br><br><br><br>

    </form>

        <button><a href="download.php"><font size='5px' color='#ff7f50'>下载</font></a></button>
        <button><a href="Cs.php"><font size='5px' color='#ff7f50'>浏览源码和Index目录</font></a></button>
</div>
</body>
</html>