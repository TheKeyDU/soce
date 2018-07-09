<?php
header('content-type:text/html;charset=utf-8');

$dir = "file/";
if (is_dir($dir)){
  if ($dh = opendir($dir)){
    while (($file = readdir($dh)) !== false){
	  echo showDown($file);
	  echo "<br>";
    }
    closedir($dh);
  }
}
function showDown($name){
    global $dir;
   $dlurl= "<a href=".$dir."\\".$name.">";
echo $dlurl .$name."</a>";
echo "<br>";
}
?>
