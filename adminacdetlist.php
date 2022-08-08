


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
        font-size=19px;
    }
</style>
<body>
    <br>
    <br>
    <br>
    <div class="container">
        <h1>Welcome to BMS</h1>
        <br>
        <h2>Account Details List</h2>
        <br>
        <table class=center border=1 width=80% cellpadding=5 cellspacing=5>
            <tr><td>Account Name</td><td>Details</td><td>Facilities</td><td>Minimum Balance</td></tr>
        <?php
        include("connection.php");

        $sqlvar = "select * from actypetab order by actypeName";
        $result = $con->query($sqlvar);

        while($row=$result->fetch_row()){
            echo("<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td></tr>");
        }
        ?>
        </table>
        <a href="adminmainpage.php">Back</a>
    </div>
</body>
</html>