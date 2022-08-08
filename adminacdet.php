<?php
include("connection.php");
session_start();
$res="";

if($_SERVER['REQUEST_METHOD']=='POST')
{
    // echo "All fine !";
    $value1 = $_POST['text1'];
    $value2 = $_POST['text2'];
    $value3 = $_POST['text3'];
    $value4 = $_POST['text4'];
    // echo $value1." ".$value2;
    $sqlvar = "insert into actypetab values('$value1','$value2','$value3',$value4)";
    $result = $con->query($sqlvar);
    if($result){
        $res="Record Inserted";
    }
    else{
        $res="Record Not Inserted !";
    }
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
        <form name=form1 method="post" action="adminacdet.php">
            <table class=center width=60% border=1 bgcolor=#ffddaa>
                <!-- <h2>Account Type Details Entry</h2> -->
                <br>
                <tr><td colspan=2>Account Type Details Entry</td></td></td></tr>
                <tr><td>Account Name</td><td><input type=text name=text1></td></td></tr>
                <tr><td>Account Detail</td><td><input type=text name=text2></td></tr>
                <tr><td>Facilities</td><td><input type=text name=text3></td></tr>
                <tr><td>Minimum Balance</td><td><input type=text name=text4></td></tr>
                <tr><td><a href="adminmainpage.php">Back</a></td><td><input type=submit name=Login style="height: 30px; width: 100px"></td></tr>
                <tr><td colspan=2><?php echo $res; ?></td></td></td></tr>
            </table>
        </form>
    </div>
</body>
</html>