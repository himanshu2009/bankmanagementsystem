<?php
include("connection.php");
$ano=$_GET['acno'];
$sqlvar = "update CustAcTab set custapp='Y' where acno=$ano";
$result = $con->query($sqlvar);
if($result){
    header('location: admincustapp.php');
}

?>