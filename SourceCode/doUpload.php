<?php
/**
 * Created by PhpStorm.
 * User: 木土其金建
 * Date: 2018/5/28
 * Time: 11:37
 */
header("content-Type:text/html;charset=utf-8");
date_default_timezone_set("PRC");

function getInfo($file,$no)
{

    if (isset($_FILES[$file]) && $_FILES[$file]['error']==0)
    {
 $UploadTime=date('Y-m-d-h-i-s');

        $fileName=$_FILES["$file"]["name"];
        $tempname=$_FILES["$file"]["tmp_name"];

        if (move_uploaded_file($tempname,'file/'.$no."&".$UploadTime."&".$fileName))
        {
            echo '上传成功';
            echo '<br>';
            echo '路径'.getcwd();
        }
        else{
            echo '上传或者移动失败';
        }

    }
    echo '第'.$no.'个文件名字'.$_FILES[$file]['name'];
    echo '<br>';
    echo '第'.$no.'个文件大小'.$_FILES[$file]['size'];
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

?>
