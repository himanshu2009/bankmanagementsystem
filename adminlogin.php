
<?php
include("connection.php");
session_start();

if($_SERVER['REQUEST_METHOD']=='POST')
{
    // echo "All fine !";
    $value1 = $_POST['text1'];
    $value2 = $_POST['text2'];
    // echo $value1." ".$value2;
    $sqlvar = "select * from logintab where userid='$value1' and pword='$value2'";
    $result = $con->query($sqlvar);
    if($result -> num_rows > 0){
        header("location: adminmainpage.php");
    }
    else{
        echo "UserID or Password is not correct...";
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
<body>
    <br>
    <br>
    <br>
    <div class="container">
        <h1>Welcome to BMS</h1>
        <br>
        <form name=form1 method="post" action="adminlogin.php">
        <h2>Admin Login</h2>
        <br>
        <table class=center width=50% border=1 cellspacing=5 cellpadding=5>
            <tr>
                <td>UserID</td>
                <td><input type=text name=text1></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type=password name=text2></td>
            </tr>
            <tr>
                <td><a href="mainpage.php">Back</a></td>
                <td><input type=submit name=Login style="height: 25px; width: 150px"></td>
            </tr>
        </table>
        </form>
    </div>
</body>
</html>