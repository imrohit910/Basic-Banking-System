<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="https://www.thesparksfoundationsingapore.org/images/logo_small.png" type="image/png">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <title>MONEY GRAM BANK</title>
    <!--stylesheet-->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark" style="background-color:rgb(216, 238, 219);">
    <div class="container-fluid">
      
        <a class="navbar-brand" href="index.php" style="color: rgb(11, 12, 11); font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;font-size:x-large;"><img src="https://www.thesparksfoundationsingapore.org/images/logo_small.png "width=25px;>MONEY GRAM BANK</a>
      </div>
      <ul class="nav navbar-nav navbar-right" style="font-style: italic; font-size: medium; padding-right: 10px;">
        <li><a href="index.php" style="font-family: fantasy; color: red;">Home</a></li>
        <li><a href="customer.php" style="font-family: fantasy; color: red;">View Customer</a></li>
        <li><a href="transhistory.php" style="font-family: fantasy; color: red;">Transition History</a></li>
        <li><a href="about.php" style="font-family: fantasy; color: red;">About</a></li>
      </ul>
    
    </div>
  </nav>
 
	<div class="container">
        <h2 class="text-center pt-4">Transaction History</h2>
        
       <br>
       <div class="table-responsive-sm">
    <table class="table table-hover table-striped table-condensed table-bordered">
        <thead>
            <tr>
                <th class="text-center">S.No.</th>
                <th class="text-center">Sender</th>
                <th class="text-center">Receiver</th>
                <th class="text-center">Amount</th>
                <th class="text-center">Date & Time</th>
            </tr>
        </thead>
        <tbody>
        <?php

            include 'config.php';

            $sql ="select * from transaction";

            $query =mysqli_query($conn, $sql);

            while($rows = mysqli_fetch_assoc($query))
            {
        ?>

            <tr>
            <td class="py-2"><?php echo $rows['sno']; ?></td>
            <td class="py-2"><?php echo $rows['sender']; ?></td>
            <td class="py-2"><?php echo $rows['receiver']; ?></td>
            <td class="py-2"><?php echo $rows['balance']; ?> </td>
            <td class="py-2"><?php echo $rows['datetime']; ?> </td>
                
        <?php
            }

        ?>
        </tbody>
    </table>

    </div>
</div>
 
 
 
 
 
  <div class="footer">
    <div class="container text-center">
      <h4>2021 © Developed by ROHIT GUPTA</h4>
        <h5>Task-1 web development internship</h5>
        <h6>THE SPARKS FOUNDATION</h6>
    </div>
  </div>
</body>
</html>