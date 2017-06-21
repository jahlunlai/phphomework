<?php


$link = @mysqli_connect(
	'localhost',
	'root',
	'jahlun',
	'FormToSql'
	);
if($link){
	echo "connectted";
	
}
else{
	echo "faild";
	echo "<br>";
}

mysqli_query($link, "SET NAMES utf8");






$id=$_GET["id"];



$sql2="DELETE FROM test2 WHERE no='$id'";


$result=mysqli_query($link,$sql2);
$result=mysqli_query($link,"SELECT * FROM test2");
	

echo "<table border=1>";	

	while($row=mysqli_fetch_assoc($result)){
	
		$id=$row["no"];

		$no=$row["no"];
		$name=$row["name"];
		$tel=$row["tel"];
		$gender=$row["gender"];
		$birthday=$row["birthday"];
		$diet=$row["diet"];
		$identify=$row["ID"];
		$interest=$row["interest"];
		$skill=$row["skill"];
		$intro=$row["intro"];
			

		echo "<tr>";


		echo "<td>";
		echo $row["no"];
		echo "</td>";

		echo "<td>";
		echo $row["name"];
		echo "</td>";

		echo "<td>";
		echo $row["tel"];
		echo "</td>";

		echo "<td>";
		echo $row["gender"];
		echo "</td>";

		echo "<td>";
		echo $row["birthday"];
		echo "</td>";

		echo "<td>";
		echo $row["diet"];
		echo "</td>";

		echo "<td>";
		echo $row["ID"];
		echo "</td>";

		echo "<td>";
		echo $row["interest"];
		echo "</td>";

		echo "<td>";
		echo $row["skill"];
		echo "</td>";

		echo "<td>";
		echo $row["intro"];
		echo "</td>";

		echo "<td>";
		echo "<a href='del.php?id=$no'>刪除資料</a>";
		echo "</td>";

		echo "</tr>";
	}		
	echo "</table>";	

mysqli_close($link);


?> 