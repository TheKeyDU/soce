<?php
/***********************************************************
* ����˵��
* 5idev ���԰����ư�
* �����԰����Ϊ www.5idev.com �ṩ�������԰�̳�ʹ��
* ��վ�Ըó��򲻱����κ�Ȩ�����������޸Ĵ���ʹ��
* �����԰�̵̳�ַ��http://www.5idev.com/p-php_guestbook.shtml
***********************************************************/
/***********************************************************
* index.php ���԰���ҳ���ļ�
***********************************************************/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link rel="stylesheet" type="text/css" href="style/style.css" />
<title>��������</title>
<script language="JavaScript">
function InputCheck(form1)
{
  if (form1.nickname.value == "")
  {
    alert("�����������ǳơ�");
    form1.nickname.focus();
    return (false);
  }
  if (form1.content.value == "")
  {
    alert("�������ݲ���Ϊ�ա�");
    form1.content.focus();
    return (false);
  }
}
</script>
</head>
<body>
<div id="container">
<div id="guestbook"><!--�����б�-->
<h3>�����б�</h3>
<?php
date_default_timezone_set("PRC");
// ��������ļ�
require("./conn.php");
require("./config.php");

// ȷ����ǰҳ�� $p ����
@$p = $_GET['p']?$_GET['p']:1;
// ����ָ��
$offset = ($p-1)*$pagesize;

$query_sql = "SELECT * FROM guestbook ORDER BY id DESC LIMIT  $offset , $pagesize";
$result = mysql_query($query_sql);
// ������ִ����˳�
if(!$result) exit('��ѯ���ݴ���'.mysql_error());
// ѭ�����
while($gb_array = mysql_fetch_array($result)){
?>
<div class="guestbook-list">
<p class="guestbook-head">
<img src="images/<?=$gb_array['face']?>.gif" />
<span class="bold"><?=$gb_array['nickname']?></span> <span class="guestbook-time">[<?=date("Y-m-d H:i", $gb_array['createtime'])?>]</span></p>
<p class="guestbook-content"><?=nl2br($gb_array['content'])?></p>
<?php
	// �ظ�
	if(!empty($gb_array['replytime'])) {
?>
<p class="guestbook-head">����Ա�ظ��� <span class="guestbook-time">[<?=date("Y-m-d H:i", $gb_array['replytime'])?>]</span></p>
<p class="guestbook-content"><?=nl2br($gb_array['reply'])?></p>
<?php
	}	// �ظ�����
?>
</div>
<?php
}	//whileѭ������
?>
<div class="guestbook-list guestbook-page">
<p>
<?php
//��������ҳ��
$count_result = mysql_query("SELECT count(*) FROM guestbook");
$count_array = mysql_fetch_array($count_result);
$pagenum = ceil($count_array['count(*)']/$pagesize);
echo '�� ',$count_array['count(*)'],' ������';
if ($pagenum > 1) {
	for($i=1;$i<=$pagenum;$i++) {
		if($i==$p) {
			echo '&nbsp;[',$i,']';
		} else {
			echo '&nbsp;<a href="index.php?p=',$i,'">'.$i.'</a>';
		}
	}
}
?>
</p>
</div>
</div><!--�����б����-->

<div id="guestbook-form">
<h3>��������</h3>
<form id="form1" name="form1" method="post" action="submiting.php" onSubmit="return InputCheck(this)">
<p>
<label for="title">��&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;��:</label>
<input id="nickname" name="nickname" type="text" /><span>(������д��������16���ַ���)</span>
</p>
<p>
<label for="title">�����ʼ�:</label>
<input id="email" name="email" type="text" /><span>(�Ǳ��룬������60���ַ���)</span>
</p>
<p>
<label for="face">ͷ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;��:</label>
<input type="radio" name="face" value="1" checked>
<img src="images/1.gif" /> 
<input type="radio" name="face" value="2">
<img src="images/2.gif" />
<input type="radio" name="face" value="3">
<img src="images/3.gif" /> 
<input type="radio" name="face" value="4">
<img src="images/4.gif" /> 
<input type="radio" name="face" value="5">
<img src="images/5.gif" /> 
<input type="radio" name="face" value="6">
<img src="images/6.gif" /> 
<input type="radio" name="face" value="7">
<img src="images/7.gif" />
</p>
<p class="leftmargin">
<input type="radio" name="face" value="8">
<img src="images/8.gif" /> 
<input type="radio" name="face" value="9">
<img src="images/9.gif" /> 
<input type="radio" name="face" value="10">
<img src="images/10.gif" /> 
<input type="radio" name="face" value="11">
<img src="images/11.gif" /> 
<input type="radio" name="face" value="12">
<img src="images/12.gif" /> 
<input type="radio" name="face" value="13">
<img src="images/13.gif" /> 
<input type="radio" name="face" value="14">
<img src="images/14.gif" />
</p>
<p>
<p>
<label for="title">��������:</label>
<textarea id="content" name="content"></textarea>
</p>
<input type="submit" name="submit" class="submit" value="  ȷ ��  " />
<span>(���Ծ����ػ�����������߷��棬�Ͻ�����ɫ�顢��������������) </span>
</form>
</div>
</div><!--container-->
</body>
</html>