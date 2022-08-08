


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
        <h2>Transaction List</h2>
        <br>
        <table class=center border=1 width=80% cellpadding=5 cellspacing=5>
            <tr><td>Transaction No</td><td>Date</td><td>Account No</td><td>Credited Amount</td><td>Debited Amount</td></tr>
        <?php
        include("connection.php");

        $sqlvar = "select * from tranTab order by tranNo desc";
        $result = $con->query($sqlvar);

        while($row=$result->fetch_row()){
            echo("<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[4]."</td></tr>");
        }
        ?>
        </table>
        <a href="adminmainpage.php">Back</a>
    </div>
</body>
</html>