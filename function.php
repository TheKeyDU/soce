<?php

function getDirSize($dirname)
{
    $dirsize=0;
    $handle=opendir($dirname);
    while($filename=readdir($handle))
    {
        if ($filename!="." && $filename!="..")
        {$file=$dirname . '/' .$filename;
            if (is_dir($file))
            {
                $dirsize+=getDirSize($file);

            }
            else{
                $dirsize+=filesize($file);
            }
        }


    }
    closedir($handle);

    return $dirsize ;
}

function  showDownlaod($name){
    global $dir;
    $dlurl= "<a href=".$dir."\\".$name.">";
    echo "<button>".$dlurl ."<font size='5px' color='#191970'>"."下载"."</font>"."</a>"."</button>"."<br>";
}
function textToBeBuleAndBig($Str)
{
    echo "<button><font size='5px' color='#191970'>".$Str."</font>"."</button>"."<br>";


}
function textToBeBuleAndsmall($Str)
{
    echo "<button><font size='2px' color='#191970'>".$Str."</font>"."</button>"."<br>";


}
function  aToBeBule($link,$str){
    global $dir;
    $dlurl= "<a href=".$dir."\\".$link.">";
    echo "<button>".$dlurl ."<font size='5px' color='#191970'>".$str."</font>"."</a>"."</button>"."<br>";
}
function addIpAndHistory()
{

        if (getenv("HTTP_CLIENT_IP") && strcasecmp(getenv("HTTP_CLIENT_IP"), "unknown"))
            $ip = getenv("HTTP_CLIENT_IP");
        else if (getenv("HTTP_X_FORWARDED_FOR") && strcasecmp(getenv("HTTP_X_FORWARDED_FOR"), "unknown"))
            $ip = getenv("HTTP_X_FORWARDED_FOR");
        else if (getenv("REMOTE_ADDR") && strcasecmp(getenv("REMOTE_ADDR"), "unknown"))
            $ip = getenv("REMOTE_ADDR");
        else if (isset($_SERVER['REMOTE_ADDR']) && $_SERVER['REMOTE_ADDR'] && strcasecmp($_SERVER['REMOTE_ADDR'], "unknown"))
            $ip = $_SERVER['REMOTE_ADDR'];
        else
            $ip = "unknown";
        return($ip);



}
function textToBeBuleAndBiger($Str)
{
    echo "<button><font size='20px' color='#191970'>".$Str."</font>"."</button>"."<br>";


}
?>