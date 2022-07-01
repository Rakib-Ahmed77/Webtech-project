<?php
    $title = "Inventory Page";
    require_once('../Model/db.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>
        Sales Target
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
    </body>
</html>

<?php

    echo "<center><hr/><h2>Sales Target</h2><hr/></center>";

      $sql = "select * from salestarget";
      $conn = getConnection();
      $result = mysqli_query($conn, $sql);

      echo "<table align=center width = 50% border=1 cellspacing=15% cellpadding=15%>
      <tr>
          <td align = center><b> Name</b></td>
          <td align = center><b>Start from</b></td>
          <td align = center><b>Finish</b></td>
      </tr>";

      while($row = mysqli_fetch_assoc($result)){
            echo "<tr>
                    <td align = center>{$row['name']}</td>
                    <td align = center>{$row['quantity']}</td>
                    <td align = center>{$row['type']}</td>
                </tr>";
      }
?>