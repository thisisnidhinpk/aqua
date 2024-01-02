<?php
   include_once("../config.php");
   
    if ( $_SESSION['user'] == '' ) {
        header("Location: logout.php");exit();
    } 
    $userID=$_SESSION['user'];


if(isset($_GET['id']))
{
$table=$_REQUEST['table'];
$id=$_REQUEST['id'];
$return=$_REQUEST['return'];
$subTable=$_REQUEST['subTable'];

$date = new DateTime(null, new DateTimezone("Asia/Kolkata"));
$curDt = $date->format('Y-m-d');
$curTime = $date->format('H:i a');

$query = "DELETE FROM  $table WHERE id ='$id'";
$result = mysql_query($query) or die("error");
if($result)
{
    if($subTable!='')
    {
        $subTableID=$_REQUEST['subTableID'];
        $query = "DELETE FROM  $subTable WHERE $subTableID ='$id'";
        $result = mysql_query($query);
        
    }
?>
	<!-- <script>alert('Terminated Successfully..')</script> -->
	<script>window.location.assign('?p=<?=$return;?>')</script>
<?php
	exit();
}else{
?>	
	<script>window.location.assign('?p=<?=$return;?>')</script>
<?php
    exit();
}
}
?>