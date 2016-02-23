<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<title>"Студия Ч" - студия ландшафтного дизайна / результаты поиска</title>
<meta http-equiv="Content-Type" content="text/html; charset=Windows-1251">
<META content='&copy; "Студия Ч", 2004 г. Все права защищены.' name="copyright">
<META content="Роман Чириков" name="Author">
<META content='"Студия Ч" занимается проектированием и реализацией обустройства частных земельных участков' name="Description">
<META content="студия, дизайн, ландшафт, проект, работа, земля, растения, деревья, заказ, цветы, разработка, деньги, участок" name="Keywords">
<style type="text/css">
A:hover {color: #363636; text-decoration: none;}
A {color: #225c21; text-decoration: none;}
</style>
<script language="JavaScript">
window.status='Добро пожаловать на сайт студии по ландшафтному дизайну "Студии Ч"!'
</script>
</head>
<body leftmargin="0" rightmargin="0">
<basefont face="Verdana" color="#000000">
<center>
<table width="770">
<tr><td colspan="2">
<!---->
<table bgcolor="#FCDC7A"><tr><td align="center" valign="middle" width="770" height="70">[логотип]</td></tr></table>
<!---->
</td></tr>
<tr><td valign="top">
<!-- меню -->
	<table width="200" cellpadding="0" cellspacing="0">
	<tr valign="top"><td><img src="images/menu.gif"><img src="images/topline.gif"><img src="images/kray2.gif"></td></tr>
	</table>
	<table frame="vsides" width="200" border="2" bordercolor="009900"><tr><td bordercolor="#ffffff">
	<a href="index.php"><b>Главная</b> <img src="images/str.gif" border="0"></a><br>
	<a href="foto.php"><b>Фотографии</b> <img src="images/str.gif" border="0"></a><br>
	<a href="ostudii.php"><b>О студии</b> <img src="images/str.gif" border="0"></a><br>
	<a href="foto.php"><b>Портфолио</b> <img src="images/str.gif" border="0"></a><br>
	</td></tr>
	</table>
	<table width="200" cellpadding="0" cellspacing="0">
	<tr valign="top"><td><img src="images/kray4.gif"><img src="images/bottomline.gif"><img src="images/kray3.gif"></td></tr>
	</table>
<!-- !меню -->
<br>
<!-- поиск -->
	<table width="200" cellpadding="0" cellspacing="0">
	<tr valign="top"><td><img src="images/search.gif"><img src="images/topline.gif"><img src="images/kray2.gif"></td></tr>
	</table>
	<table frame="vsides" width="200" border="2" bordercolor="009900"><tr><td bordercolor="#ffffff" valign="middle">
	<form action="search.php?go=1" method="post"><table cellpadding="0" cellspacing="0"><tr><td valign="middle">
	<input type="Text" name="word" value="<?php print "$word" ?>">&nbsp;</td><td valign="middle"><input type="Image" src="images/gosearch.gif"><td></td></tr>
	<tr><td></form><a href="bigsearch.php"><font size="-1">Расширенный поиск <img src="images/str.gif" border="0"></font></a></td></tr></table>
	</td></tr>
	</table>
	<table width="200" cellpadding="0" cellspacing="0">
	<tr valign="top"><td><img src="images/kray4.gif"><img src="images/bottomline.gif"><img src="images/kray3.gif"></td></tr>
	</table>
<!-- !поиск -->
</td>
<td valign="top">
<!-- результаты -->
	<table width="569" cellpadding="0" cellspacing="0">
	<tr valign="top"><td><img src="images/results.gif"><img src="images/topline.gif"><img src="images/topline.gif"><img src="images/topline.gif"><img src="images/topline.gif"><img src="images/topline3.gif"><img src="images/kray2.gif"></td></tr>
	</table>
	<table frame="vsides" width="569" border="2" bordercolor="009900"><tr><td bordercolor="#ffffff">

<?php
$nosearch = array();
$len = 3; # Минимальная длина слова для поиска (число от 0 до 20).								#
$color = "#355AC8"; # Значение цвета, которым будут выделены в результатах слова, введённые для поиска.				#
$ncolor = "#225c21"; # Значение цвета, которым будет выделено количество результатов.						#
$nosearch[] = ".gif";													#
$nosearch[] = ".jpg";													#
$nosearch[] = "search.php";
$nosearch[] = "admin.php";
$nosearch[] = "shownews.php";
$nosearch[] = "inf.txt";

$base = "./";
if(isset($go)) {
$s = strlen($word);
if($s < $len) {
	if (substr($len, 0, 1) == 1) { $e = "-го символа"; };
    if (substr($len, 0, 1) > 1 && substr($len, 0, 1) < 5) { $e = "-х символов"; };
    if (substr($len, 0, 1) > 4) { $e = "-и символов";};
	if($s == 0) {$x = " ничего не ввели.";}
	if($s > 0) {$x = " ввели только $s.";}
	print "Ключевое слово должно содержать <i>не меньше $len$e</i>. Вы$x<br>
	</td></tr>
	</table>
	<table width='569' cellpadding='0' cellspacing='0'>
	<tr valign='top'><td><img src='images/kray4.gif'><img src='images/bottomline2.gif'><img src='images/kray3.gif'></td></tr>
	</table>
<!-- !о студии -->
</td>
</tr>
</table>
</center>
</body>
</html>
";
	exit;
}
reset($nosearch);
$files = array();
print "<ul>";
$bas = opendir($base);
$results = array();
while ($file = readdir($bas)) {
	if($file != "." && $file != ".." && !is_dir($file)) {
		if(!in_array($file, $nosearch)){
			$files[] = basename($file);
		}
	}
}
$files = array_unique($files);
foreach ($files as $file) {
	$strings = file($file);
	foreach ($strings as $str) {
		$str = strip_tags($str,"<b><i>");
		if(eregi($word, $str)) {
			$length = strlen($str);
			$str33 = strtolower($str);
			$word33 = strtolower($word);
			$pos = strpos($str33, $word33);
			$str1 = substr($str, 0, $pos);
			$str2 = substr($str, $pos, $s);
			$str3 = substr($str, $pos+$s, $length);
			$str2 = "<font color=$color><b>$str2</b></font>";
			$re =  "<img src='images/str.gif'><a href=$file>".$str1.$str2.$str3."</a><br><br>";
			$results[] = $re;
		}
	}
}
$n = count($results);
if ($n == 0) {
	print "Ни одного совпадения не найдено.\n
		</td></tr>
	</table>
	<table width='569' cellpadding='0' cellspacing='0'>
	<tr valign='top'><td><img src='images/kray4.gif'><img src='images/bottomline2.gif'><img src='images/kray3.gif'></td></tr>
	</table>
<!-- !о студии -->
</td>
</tr>
</table>
</center>
</body>
</html>";
	exit;
}
else {
	$w = 0;
	if ($n > 9 && $n < 100) {$w = 1;}
	if ($n >99 && $n < 1000) {$w = 2;}
	if (substr($n, $w, 1) == 1) { $e = "е:"; };
	if ($n > 10 && $n < 20) { $e = "й:";}
	else {
		if (substr($n, $w, 1) > 1 && substr($n, $w, 1) < 5) { $e = "я:"; }
		if (substr($n, $w, 1) > 4 || substr($n, $w, 1) == 0) { $e = "й:";}
	}
}
print "<br>Всего найдено <font color=$ncolor><b>$n</b></font> совпадени";
print "$e<br><br>";

foreach($results as $r) {print "$r";}
print "</ul>";
}//isset
?>
</td></tr>
	</table>
	<table width="569" cellpadding="0" cellspacing="0">
	<tr valign="top"><td><img src="images/kray4.gif"><img src="images/bottomline2.gif"><img src="images/kray3.gif"></td></tr>
	</table>
<!-- !о студии -->
</td>
</tr>
</table>
</center>
</body>
</html>
