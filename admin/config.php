<?php
	
		// $_SERVER['DOCUMENT_ROOT'];
//original
	
 //     $abs_path			=	$_SERVER['DOCUMENT_ROOT'];	
	// $host_name			=	"localhost";	
	// $db_user_name		=	"aqualuxy_user";
	// $db_user_pwd		=	"+6eB3yCYCgqs";	
	// $db_name			=	"aqualuxy_db";
	// $page_list_limit	=	10;
	// $item_per_page = 10;
	// $con = mysql_connect($host_name,$db_user_name,$db_user_pwd,$db_name) or die(mysql_error());
	// $conn = mysql_select_db($db_name) or die(mysql_error());
	// $date = new DateTime(null, new DateTimezone("Asia/Kolkata"));
 //    $curDt = $date->format('Y-m-d');
 //    $curTime = $date->format('H:i a');
 //    $today=date('d-m-Y');
 //    $loginUser=$_SESSION['user'];
 //    $now=$date->format('Y-m-d H:i:s');
 //    $loginUser=$_SESSION['user'];
	
	// $_SERVER['DOCUMENT_ROOT'];
	
	 $abs_path			=	$_SERVER['DOCUMENT_ROOT'];
	//  $db_user_name		=	"aqualuxy";
	// $db_user_pwd		="YUJuG4a0S@6Hx*s";
	 	
	// $host_name			=	"localhost";	
		
	// $db_name			=	"aqualuxy_aquadb_live";
	$db_user_name		=	"root";
	$db_user_pwd		="";
	 	
	$host_name			=	"localhost";	
		
	$db_name			=	"aqualuxy_db2021";
	$page_list_limit	=	10;
	$item_per_page = 10;
	//$con = mysql_connect($host_name,$db_user_name,$db_user_pwd,$db_name) or die(mysql_error());
	//$conn = mysql_select_db($db_name) or die(mysql_error());

$con = new mysqli($host_name,$db_user_name,$db_user_pwd,$db_name) or die($con ->connect_error);
	$date = new DateTime(null, new DateTimezone("Asia/Kolkata"));
    $curDt = $date->format('Y-m-d');
    $curTime = $date->format('H:i a');
    $today=date('d-m-Y');
    //$loginUser=$_SESSION['user'];
    $now=$date->format('Y-m-d H:i:s');
    //$loginUser=$_SESSION['user'];

?>