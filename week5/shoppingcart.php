<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>購物車</title>
	<style>
		.td_align {text-align: right}
	</style>
</head>
<body>
	
</body>
</html>

<?php 
		session_start();
		echo "<table>";
		echo "<td>功能</td>";
		echo "<td>種類</td>";
		echo "<td>名稱</td>";
		echo "<td>價格</td>";
		echo "<td>數量</td>";	
		
		echo "</tr>";
		$flag = ' ';
		$date = strtotime("+7 days", time());
		$total = 0;
		while (list($arr, $value) = each($_COOKIE)) 
		{
			if (isset($_COOKIE[$arr]) && is_array($_COOKIE[$arr])) 
			{
				if ($flag) 
				{
					$flag = false;
				}
				else
				{
					$flag = true;
				}
				echo "<tr><td>";
				echo "<a href='delete.php?Id=" . $arr . "'>";
				echo "刪除</a></td>";
				$price = 0;
				$quantity = 0;
				while (list($name, $value)=each($_COOKIE[$arr])) 
				{
					echo "<td>" . $value . "</td>";
					if ($name == "Price") 
					{
						$price = $value;
					}
					else if ($name == "Quantity")
					{
						$quantity = $value;
					}
				}
				$total += $price * $quantity;
			}
				echo "</tr>";
		}	
	echo "<td>";	
	echo "總金額 = NT$";	
		 
	echo $total;
	
	echo "元</td>";
	echo "</tr>";

	echo "</table>";
	echo "<br>";
	echo "<a href='index.php'>商品目錄</a></td>";
?>