<?php
include("connection.php");
session_start();
$res="";

if($_SERVER['REQUEST_METHOD']=='POST')
{
    // echo "All fine !";
    $value1 = $_POST['text1'];
    $value2 = $_POST['text2'];
    $value3 = $_POST['text4'];
    $value4 = $_POST['text5'];
    $value5 = $_POST['text6'];
    $value6 = $_POST['text7'];

    $value7 = $_SESSION['actype'];
    // echo $value1." ".$value2;
    $sqlvar = "INSERT INTO `bankdatabase`.`custactab`(`acno`, `pword`, `acName`, `acAdd`, `MobileNo`, `email`, `actypename`,`custapp`) VALUES ($value1,'$value2','$value3','$value4',$value5,'$value6','$value7','N')";
    // $sqlvar = "insert into CustAcTab values($value1,'$value2','$value3','$value4', $value5, '$value6', '$value7')";
    // echo ($sqlvar);
    $result = $con->query($sqlvar);
    if($result){
        $res="Record Inserted";
    }
    else{
        $res="Record Not Inserted !";
    }
}
else {
    $_SESSION['actype'] = $_GET['actype'];
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>BMS</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<style>
    table{
        font-size: 19px;
    }
</style>
<body>
    <br>
    <br>
    <br>
    <div class="container">
        <h1>Welcome to BMS</h1>
        <br>
        <h2>Customer Signup</h2>
        <form name=form1 method="post" action="custsignup.php">
            <table class=center width=80% border=1 bgcolor=#ffddaa>
                <!-- <h2>Account Type Details Entry</h2> -->
                <br>
                <tr><td>Account No(10digit)</td><td><input type=text name=text1></td></td></tr>
                <tr><td>Password</td><td><input type=password name=text2></td></tr>
                <tr><td>Retype Password</td><td><input type=password name=text3></td></tr>
                <tr><td>Person Name</td><td><input type=text name=text4></td></tr>
                <tr><td>Address</td><td><textarea name=text5 rows=4></textarea></td></tr>
                <tr><td>Mobile Number</td><td><input type=text name=text6></td></tr>
                <tr><td>EmailID</td><td><input type=text name=text7></td></tr>


                <tr><td><a href="mainpage.php">Back</a></td><td><input type=submit name=Login style="height: 30px; width: 100px"></td></tr>
                <tr><td colspan=2><?php echo $res; ?></td></td></td></tr>
            </table>
        </form>
    </div>
</body>
</html>