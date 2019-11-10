
<?php
session_start();        
include_once '../php/env.php';
require_once 'dbconnect.php';

if (isset($_SESSION['admin'])) {
  header("Location: home.php");
  exit;
}

if (isset($_POST['btn-login'])) {
  
  $uname = $_POST['name'];
  $pass = $_POST['password'];
  
  $query = $DBcon->query("SELECT * FROM admin WHERE name = '$uname'");
  $row=$query->fetch_array();
  
  $count = $query->num_rows; // if email/password are correct returns must be 1 row
  if (password_verify($pass, $row['password']) && $count==1) {
    $_SESSION['admin'] = $row['id'];
    $update = FALSE;
    foreach ($row as $value) {
        if($value == NULL){
            $update = TRUE;
        }
    }
    if ($update === TRUE) {
        header("Location: user.php");
    }
    else {
        header("Location: home.php");
    }
        
    } else {
     $msg =  "<h3 style='color:rgb(209, 8, 8);text-align:center;'>You're not an Admin</h3>";
  }
  $DBcon->close();
}
?>
<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
  <title>ADMIN&mdash;LOGIN</title>
  <style type="text/css">
    body{
            background: url('images/4_b.jpg');
            background-repeat: no-repeat;
            background-clip: content-box;
            background-position: 50%;
            background-size: 100% 100%;
            background-origin: content-box
        }
        .input{
            width: 85%;
            border: 0;
            padding: 15px 15px 15px 0px;
            border-bottom: 2px solid #000 !important;
            border-radius: 2px;
            background: transparent
        }
        .alert{
          color:rgb(209, 8, 8);
          text-align:center;
        }
        .alert-success{
          color:blue;
          text-align:center;
        }
   </style>
</head>
<body>
  <div>
    <form action="" method="POST" >
        <fieldset class="myfield" >
            <legend class="myfield-legend"><img src="../images/logo2.png" class=""></legend>
  
          <center>
            <font style="text-align: center; text-transform: uppercase" ><u>Welcome To Admin Login Page</u></font>
              <?php 
                if (isset($msg)) {
                      echo $msg;
                } 
              ?>
            <div class="dropper-form" style="margin-top: 50px">
              <!-- <label for="name">USERNAME:  </label> -->
              <input class="input" type="text" name="name"  style=""  placeholder="USERNAME" autocomplete="true"><br>
              <!-- <label for="password">PASSWORD:  </label> -->
              <input class="input" type="password" name="password"  style="margin-top: 10px" placeholder="PASSWORD" autocomplete="true"><br>
              <input type="submit" class="login-btn-small" name="btn-login" value="Login">
              <p>OR</p>
              <a href="create_account.php"><button class="login-btn-small-fade" type="button">Create Account</button></a>
            </div>
          </center>
      </fieldset>
    </form>
  </div>
  
</body>
</html>
