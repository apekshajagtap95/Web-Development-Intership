<?php
  $connection = mysqli_connect("localhost","root","");
  $db = mysqli_select_db($connection,"data");

  if(isset($_POST['login'])){
    // if (empty($name)) {
    //   header("Location: index.php?error=Name is required");
    //   exit();
    // }
    // else if(empty($pass)) {
    //   header("Location: index.php?error=Password is required");
    //   exit();
    // }
    //else {
     $query = " select * from info where email = '$_POST[email]' AND password = '$_POST[password]'";
     $query_run = mysqli_query($connection,$query);
     if(mysqli_num_rows($query_run)){
       while($row = mysqli_fetch_assoc($query_run)){
         echo "<script>
         window.location.href = 'http://127.0.0.1:5500/main/page2.html';
         </script>";
       }
     }
     else{
       echo "<script>alert('Login failed...please enter correct email and password');
       window.location.href = 'index.php';
       </script>";
      }
    //}
  }
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login Page</title>
    <!-- Bootstrap files -->
    <link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
    <script src="bootstrap-4.4.1/js/bootstrap.min.js" charset="utf-8"></script>
    <!-- CSS File -->
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body style="background:url('l2.png') no-repeat center center/cover;">

    <!-- Login from code starts here -->
    <section id="login_form">
      <div class="row">
        <div class="col-md-4 m-auto block">
          <h1 style="margin-top:100px;color:orange;margin-left:130px;padding:50px;"><b><u>Login</u></b></h1>
          <form action="index.php" method="post">
            <!-- <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?> -->
            <div class="form-group">
              <lable style="color:yellow;">Email ID:</label>
                <input class="form-control" type="text" required name="email" placeholder="Enter your email">
            </div>
            <div class="form-group">
              <lable style="color:yellow;">Passowrd:</label>
                <input class="form-control" type="password" required name="password" placeholder="Enter your Password">
            </div>
            <button class="btn btn-primary" type="submit" name="login">Login</button>
          </form>
        </div>
      </div>
    </section>
  </body>
</html>
