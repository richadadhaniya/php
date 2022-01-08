<?php

	session_start();
// }
	//ADD to Cart
	if(isset($_GET['nm']))
	{
		$_SESSION['carts'][]=array("product name"=>$_GET['nm'], "price"=>$_GET['mrp'], "image"=>$_GET['img'], "qty"=>1);
	} 
	
	
	// Update Cart
	else if(! empty($_POST))
	{
		foreach($_POST as $id=>$val)
		{
			$_SESSION['carts'][$id]['qty']= $val;
		}
	}
	//End Update cart


	//Delete cart
	else if(isset($_GET['id']))
	{
		$id = $_GET['id'];
		unset($_SESSION['carts'][$id]);
	}

	//end delete cart
	
	header("location:cart.php");
?>