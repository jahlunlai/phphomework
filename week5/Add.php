<?php

session_start();

if ( isset( $_POST['Product'] ) )

	$_SESSION['Quantity']=$_POST['Quantity'];

	$id=$_POST['Product'];
	$_SESSION['ID']=$id;

	switch ($id) {
		case "Cellphone":
			$_SESSION['Name'] = "Type A Cellphone";
			$_SESSION['Price']= 100;
			break;
		case "Computer":
			$_SESSION['Name']= "Super Computer";
			$_SESSION['Price']= 200;
			break;
		case "Mouse":
			$_SESSION['Name']= "Fastest Mouse";
			$_SESSION['Price']= 50;
			break;

		default:
			# code...
			break;
	}
	header("Location:savecart.php");
 
 ?>