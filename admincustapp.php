


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
        font-size=20px;
    }
</style>
<body>
    <br>
    <br>
    <br>
    <div class="container">
        <h1>Welcome to BMS</h1>
        <br>
        <h2>Account Aproval Requests</h2>
        <br>
        <table class=center border=1 width=80% cellpadding=5 cellspacing=5>
            <tr><td>Account No</td><td>Name</td><td>Address</td><td>Mobile No</td><td>Email</td><td>Account Type</td></tr>
        <?php
        include("connection.php");

        $sqlvar = "select * from CustAcTab where custapp='N'";
        $result = $con->query($sqlvar);

        while($row=$result->fetch_row()){
            echo("<tr><td><a href=adminapp.php?acno=".$row[0].">".$row[0]."</a></td><td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[4]."</td><td>".$row[5]."</td><td>".$row[6]."</td></tr>");
        }
        ?>
        </table>
        <a href="adminmainpage.php">Back</a>
    </div>
</body>
</html>
