<?php 

	
	setcookie('check', 'true', time()-100, '/');
	header('location: ../view/adminlogin.html');
?>