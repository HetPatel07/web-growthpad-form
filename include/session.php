<?php 
    if(!isset($_SESSION))
    {
     session_start();   
    }
	include 'conn.php';
    if(isset($_SESSION['admin']))
    {
		header('location: admin/home.php');
        exit();
	}
?>

