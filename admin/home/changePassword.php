<?php
  session_start();
   include_once("../config.php");
   
    if ($_SESSION['user'] == '' ) {
        header("Location: logout.php");exit();
    } 
    $userID=$_SESSION['user'];


if(isset($_POST['action']))
{
    $password=$_POST['password'];
    $query = "UPDATE tbl_admin set pass='$password' WHERE uname ='$userID'";
    $result = mysql_query($query) or die("error");
    if($result)
    {
        echo  "success";
    }
    else
    {
        echo  "fail";
    }
}
?>