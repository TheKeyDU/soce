<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <title>Cs</title>
</head>
<body>
you can't download SourceCodes,but you can browse index directory.....
<br>
<?php
header('content-type:text/html;charset=utf-8');

$dir = "./";
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

</body>
</html>
