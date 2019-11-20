<?php
        session_start();
        if (isset($_SESSION['admin'])) {
          header("location: home.php");
        }
        include_once '../php/env.php';
        include_once 'dbconnect.php';
        $DBconn = new PDO("mysql:host=$sever;dbname=$database", $username, $dbpass);
        if(isset($_POST['btn-create'])){
            $uname = $DBcon->real_escape_string($_REQUEST['name']);
            $pass = $DBcon->real_escape_string($_REQUEST['password']);
            $cpass = $DBcon->real_escape_string($_REQUEST['cpassword']);
            $tag = $DBcon->real_escape_string($_REQUEST['tag']);
            $errs = 0;
            if ($pass !== $cpass) {
              $errs += 1;
              $msg = "<h3 class='alert'>PASSWORDS DON'T MATCH</h3>";
            }
            if ($tag !== "unnkonetadmin") {
                $errs +=1;
                if($errs > 1){$msg .= "<h3 class='alert'>KEY Don't exist. Get a KEY from existing admins</h3>";}
                else{$msg = "<h3 class='alert'>KEY Don't exist. Get a KEY from existing admins</h3>";}
            }
            $query = "SELECT * FROM `admin` ";
            $stmt = $DBconn->prepare( $query );
            $stmt->execute();
            while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
              if($uname == "$row[name]" && $pass == "$row[password]"){
                $errs += 1;
                if ($errs > 1) {
                $msg .= "<h3 class='alert'>An Account Already exist</h3>";
                }else{
                  $msg = "<h3 class='alert'>An Account Already exist</h3>";
                }
              } 
            }
            if ($errs < 1 ) {
              $password = password_hash($pass, PASSWORD_DEFAULT);
              $sql = "INSERT INTO `admin` (`name`, `password`) "
                    . "VALUES ('$uname', '$password') ";
              if ($DBcon->query($sql) === true) {
                $msg = "<h3 class='alert-sucess' style='color:blue;'>Hey ".$uname.", you can Login Now</h3>";
              }
              else {
                $msg = "<h3 class='alert'>Error registering</h3>";
              }
            }
          }
          //echo $_SERVER['SERVER_NAME'];
?>
<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width" />
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
  <script src="assets/js/ui.js"></script>
  <style type="text/css">
      body{
          background: url('images/4_b.jpg');
          background-repeat: no-repeat;
          background-clip: content-box;
          background-position: 50%;
          background-size: 100% 100%;
          background-origin: content-box;
          padding-left: -60px
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
  <title>Create-Account::UNNKONET</title>
</head>
<body>
    <div style="">
    <form action="" method="POST" >
        <fieldset class="myfield" >
            <legend class="myfield-legend"><img src="../images/logo2.png" class=""></legend>
  
          <center>
              <font style="text-align: center; text-transform: uppercase; color: #bd2130" title="admins only">Only for Admins</font>
              <?php 
                if (isset($msg)) {
                      echo $msg;
                } 
              ?>
            <div class="dropper-form" style="margin-top: 50px">
              <!-- <label for="name">USERNAME:  </label> -->
              <input class="input" type="text" name="name"  style=""  placeholder="USERNAME" required="true"><br>
              <!-- <label for="password">PASSWORD:  </label> -->
              <input class="input" type="password" name="password"  style="margin-top: 10px" placeholder="PASSWORD" required="true" autocomplete="false"><br>
              <!-- <label for="password">CONFIRM:&nbsp;&nbsp;&nbsp;  </label> -->
              <input class="input" type="password" name="cpassword"  style="margin-top: 10px" placeholder="CONFIRM PASSWORD" required="true"><br>
              <!-- <label for="tag" title="Get a tag from existing admin">KEY (required)</label> -->
              <input class="input" id="input" type="text" name="tag"  style="margin-top: 10px" placeholder="KEY" title="get a key from an admin" required="true"><br>
              <input  type="submit" class="login-btn-small" name="btn-create" value="Create Account">
              <p>OR</p>
              <a href="index.php"><button class="login-btn-small-fade" type="button">Log In</button></a>
            </div>
          </center> 
      </fieldset>
    </form>
  </div>
  
</body>
</html>
