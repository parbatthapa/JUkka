<?php
require 'function.php';

	if($_POST["email"])
	{
		$s="insert into newsletter(email) values('" . $_POST["email"] ."')";
		mysqli_query($cn,$s);
		mysqli_close($cn);
		echo "<script>alert('Record Save');</script>";
		header("location:index.php");

	}
	
	?>