<?php
	session_start();

	session_start();
  	if (!isset($_SESSION['vu'])) {
    	header("Location: ../account/login.php");
  	}
  	else{
		extract($_POST);
		$UserID = $_SESSION['ui'];
		$con = mysqli_connect("localhost","root","","mobileshop");

		$sql = "INSERT INTO wishlist (WishlistID, wishlist.UserID, ProductID) VALUES (NULL, '$UserID', '$ProductID')";

		mysqli_query($con,$sql);

		if (mysqli_errno($con)) {
			header("Location: collections.php?Something_issue");
		}
		else{
			header("Location: collections.php?added_successfully_wishlist");
		}
	}

?>