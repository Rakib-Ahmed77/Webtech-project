<?php
$title = "view All product";

if (file_exists('../Model/stock.json')) {
    $current_data = file_get_contents('../Model/stock.json');
    $array_data = json_decode($current_data, true);
    $pname = $array_data[0]['ProductName'];
    $Quan = $array_data[0]['Quantity'];

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>
        index
    </title>
</head>
<body background="../Asset/bg.jpg">
        <div class="main" id="home">
            <br />
            <h3 align="center">
                <font face="sans" size="4">
                    <a href="home.html">BACK</a>&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="../index.html">HOME</a>&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="../Controller/logout.php">LOGOUT</a>&nbsp;&nbsp;&nbsp;&nbsp;
                </font>
            </h3>
        </div>
        <td>
            <table border="2px solid black" width='40%' align='center'>
                <tr>
                    <th>One Thousand Bundle</th>
                    <th>Quantity</th>
        </tr>
        <tr>
            <td><?php echo $pname; ?> </td>
            <td><?php echo $Quan; ?></td>
        </tr>
    </table>
</td>
<br><br><br>
            <center>
                <a href="order.html"> Order Stock</a> | 
                <a href="vieworder.php">View Ordered Stock</a>
            </center>
</body>
</html>