<?php
//mailing features
//$txtprodName=$_POST["txtprodName"];
$txtname=$_POST["txtName"];
$txtcontactnum=$_POST["txtContactnum"];
$txtemail=$_POST["txtEmail"];
$txtaddress=$_POST["txtAddress"];
$txtremark=$_POST["txtRemark"];
//mailing function here..

$to="theerthamknr@gmail.com";
$subject="Enquiry";



//  $message = "CCCC\r\nCCCC CCCC \r CCC \n CCC \r\n CCC \n\r CCCC";
 $message = "An enquiry received from\n Name:".$txtname."\n Contact Number:".$txtcontactnum."\n Email:".$txtemail."\n Address:".$txtaddress."\n Remark:".$txtremark."\n";
    $headers = 'From:Admin-Aqualuxy <enquiry@aqualuxy.com>' . "\r\n";
    $headers .= "Content-Type: text/plain; charset=\"UTF-8\"; format=flowed \r\n";
    $headers .= "Mime-Version: 1.0 \r\n"; 
    $headers .= "Content-Transfer-Encoding: quoted-printable \r\n";

if(mail($to,$subject,$message,$headers))
{
   $arrayName=array("status"=>true,"Msg"=>"Enquiry Send");

echo json_encode($arrayName);
}
else
{
    $arrayName=array("status"=>false,"Msg"=>"Error");

    echo json_encode($arrayName);
}
?>