<?php

# 每月變換圖片

echo "一、每月變換圖片<br>";
echo "現在月份：";
echo date('m');
echo "<p>";


$nowMonth=date('m');

$pic1="<img src=\"month1.jpg\" width='200'>";
$pic2="<img src=\"month2.jpg\" width='200'>";
$pic3="<img src=\"month3.jpg\" width='200'>";
$pic4="<img src=\"month4.jpg\" width='200'>";
$pic5="<img src=\"month5.jpg\" width='200'>";
$pic6="<img src=\"month6.jpg\" width='200'>";
$pic7="<img src=\"month7.jpg\" width='200'>";
$pic8="<img src=\"month8.jpg\" width='200'>";
$pic9="<img src=\"month9.jpg\" width='200'>";
$pic10="<img src=\"month10.jpg\" width='200'>";
$pic11="<img src=\"month11.jpg\" width='200'>";
$pic12="<img src=\"month12.jpg\" width='200'>";

switch ($nowMonth) {
	case '01':
		echo $pic1;
		break;
	case '02':
		echo $pic2;
		break;
	case '03':
		echo $pic3;
		break;
	case '04':
		echo $pic4;
		break;
	case '05':
		echo $pic5;
		break;
	case '06':
		echo $pic6;
		break;
	case '07':
		echo $pic7;
		break;
	case '08':
		echo $pic8;
		break;
	case '09':
		echo $pic9;
		break;
	case '10':
		echo $pic10;
		break;
	case '11':
		echo $pic11;
		break;
	case '12':
		echo $pic12;
		break;	
	default:
		# code...
		break;
}

echo "<p>";

#顯示現在時間
#年月日時分秒星期
$nowTime=strtotime("now+8hours");
echo "二、現在時間：<br>".date("Y年m月d日 h時i分s秒a 星期:l", $nowTime);
echo "<p>";

#世界末日倒數

$dEnd=strtotime("11:59:59pm December 31 2017");

echo "三、世界末日：<br>".date("Y年m月d日 h時i分s秒a", $dEnd);
echo "<br>";
$dNow=strtotime("now+8hours");

$count=$dEnd-$dNow;
echo "距今日倒數計時：";
echo "<br>";

$countDay=floor($count/60/60/24);
$countHour=floor(($count-$countDay*60*60*24)/60/60);
$countMin=floor(($count-$countDay*60*60*24-$countHour*60*60)/60);
$countSecond=floor(($count-$countDay*60*60*24-$countHour*60*60-$countMin*60));

echo $countDay."天";
echo $countHour."時";
echo $countMin."分";
echo $countSecond."秒";

echo "<p>";





?>
