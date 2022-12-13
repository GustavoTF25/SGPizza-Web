<?php
	

	if(!$_SESSION['emaillogin']) 
	{
		header('Location: erro.php');
		exit();
	}
?>