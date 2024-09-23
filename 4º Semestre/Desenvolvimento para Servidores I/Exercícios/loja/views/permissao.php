<?php
	if (isset($_SESSION['tipo']) && $_SESSION['tipo'] != 'A')
	{
		header('location:index.php');
	}
?>