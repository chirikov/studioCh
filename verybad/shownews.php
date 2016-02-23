<?php
$fp = "news.txt";
$news = file($fp);
$n = count($news);
if($n < 1) {print "--Пока новостей нет.--";}
else {
rsort($news, SORT_NUMERIC);
reset($news);
print "<table>";
if($n < 5) {$r = $n;} else {$r = 5;}
$x = 0;
while($x < $r) {
	$part = explode("|", $news[$x]);
	$date = date("d.m.Y", $part[0]);
	print "<tr><td valign='top'><font color='#347731'><i>$date</i></font> : </td><td>".$part[1]."</td></tr>";
	$x++;
}
print "</table>";
}
?>