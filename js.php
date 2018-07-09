<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
$url='https://m.ithome.com/html/369423.htm';
$html = file_get_contents($url);
echo "<xmp>".$html."</xmp>";
/*$html="dwadwadwadaw";
$file = fopen("test.txt","X");
fwrite($file,$html);
fclose($file)*/
?>
</body>
</html>