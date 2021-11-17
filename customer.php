<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="https://www.thesparksfoundationsingapore.org/images/logo_small.png" type="image/png">
  <link rel="stylesheet" href="css/style.css">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <title>MONEY GRAM BANK</title>
    <!--stylesheet-->
    
</head>
<body>
  <?php
    include 'config.php';
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn,$sql);
?>
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
    <h2 class="text-center pt-4">Transfer Money</h2>
    <br>
        <div class="row">
            <div class="col">
                <div class="table-responsive-sm">
                <table class="table table-hover table-sm table-striped table-condensed table-bordered">
                    <thead>
                        <tr>
                        <th scope="col" class="text-center py-2">Id</th>
                        <th scope="col" class="text-center py-2">Name</th>
                        <th scope="col" class="text-center py-2">E-Mail</th>
                        <th scope="col" class="text-center py-2">Balance</th>
                        <th scope="col" class="text-center py-2">Operation</th>
                        </tr>
                    </thead>
                    <tbody>
            <?php 
                while($rows=mysqli_fetch_assoc($result)){
            ?>
                <tr>
                    <td class="py-2"><?php echo $rows['id'] ?></td>
                    <td class="py-2"><?php echo $rows['name']?></td>
                    <td class="py-2"><?php echo $rows['email']?></td>
                    <td class="py-2"><?php echo $rows['balance']?></td>
                    <td><a href="userdetails.php?id= <?php echo $rows['id'] ;?>"> <button type="button" class="btn">Transact</button></a></td> 
                </tr>
                <?php
              }
          ?>
      
                  </tbody>
              </table>
              </div>
          </div>
      </div> 
   </div>
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> 
 
 
 
 
 
  <div class="footer">
    <div class="container text-center">
      <h4>2021 © Developed by ROHIT GUPTA</h4>
        <h5>Task-1 web development internship</h5>
        <h6>THE SPARKS FOUNDATION</h6>
    </div>
  </div>
</body>
</html>