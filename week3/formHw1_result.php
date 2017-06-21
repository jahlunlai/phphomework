<?php

$name=$_GET["name"];
	echo "Name: ".$name."<br>";
	

$Htel=$_GET["Htel"];
$Ctel1=$_GET["Ctel1"];
$Ctel2=$_GET["Ctel2"];
	if(is_numeric($Htel)&&is_numeric($Ctel1)&&is_numeric($Ctel2))
	{
		echo "Htel: ".$Htel."<br>";
		echo "Cellphone: ".$Ctel1.$Ctel2."<br>";
	}
	else{
		echo "電話的欄位輸入數字<br>";
	}
$gender=$_GET["gender"];
		if($gender=="男")
	{
	echo "Gender: ".$gender."<br>";
	echo "<body bgcolor='yellow'>";
	}
	else{
	echo "Your gender: girl<br>";}
	echo "<body bgcolor='pink'>";

$birthday=$_GET["birthday"];
	echo "birthday :".$birthday."<br>";
$diet=$_GET["diet"];
	echo "Diet: ".$diet."<br>";
$ID=$_GET["ID"];
	echo "Your ID is:".$ID."<br>";

$interest=$_GET["interest"];
	echo "Your interest: <br/>";
		for($i=0;$i<count($interest);$i++){
			echo $interest[$i];
			echo "<br/>";
		}



$skill=$_GET["skill"];
	echo "your skill:<br>";
	echo $skill = implode (" ", $skill);
	echo "<br/>";
$intro=$_GET["intro"];
	echo "Introduce:".$intro."<br>";

?>
