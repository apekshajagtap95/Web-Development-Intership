<?php
  session_start();
  $connection = mysqli_connect("localhost","root","");
  $db = mysqli_select_db($connection,"data");

  if(isset($_POST['login'])){
    $query = "select * from admins where email = '$_POST[email]' AND password = '$_POST[password]'";
    $query_run = mysqli_query($connection,$query);
    if(mysqli_num_rows($query_run)){
      $_SESSION['email'] = $_POST['email'];
      while($row = mysqli_fetch_assoc($query_run)){
        echo "<script>
        window.location.href = 'admin_dashboard.php';
        </script>";
      }
    }
    else{
      echo "<script>alert('Please Enter correct email id and password');

      </script>";
    }
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Online Notice Board System</title>
    <!-- Bootstrap files -->
    <link rel="stylesheet" type="text/css" href="../bootstrap-4.4.1/css/bootstrap.min.css">
    <script src="../bootstrap-4.4.1/js/bootstrap.min.js" charset="utf-8"></script>
    <!-- CSS File -->
    <link rel="stylesheet" href="../css/style.css">
  </head>
  <body style="background:url('l2.png') no-repeat center center/cover;">
    <!-- Header section code start here  -->
    <div class="row" id="header">
      <div class="col-md-4">
      </div>
      <div class="col-md-4">
        <h3>Online Notice Board System</h3>
      </div>
      <div class="col-md-4">
      </div>
    </div>

    <!-- Admin Login from code starts here -->
    <section id="login_form">
      <div class="row">
        <div class="col-md-4 m-auto block">
          <h2 style="text-align:center;color:white"><u>Admin Login</u> </h2>
          <form action="index1.php" method="post">
            <div class="form-group">
              <lable style="color:yellow;">Email ID:</label>
                <input class="form-control" type="text" name="email" placeholder="Enter your email">
            </div>
            <div class="form-group">
              <lable style="color:yellow;">Password:</label>
                <input class="form-control" type="password" name="password" placeholder="Enter your Password">
            </div>
            <button class="btn btn-primary" type="submit" name="login">Login</button>
          </form>
          <!-- <a href="register.php">Click here to register</a> -->
        </div>
      </div>
    </section>
  </body>
</html>
