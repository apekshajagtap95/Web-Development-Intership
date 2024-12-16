<?php
  $connection = mysqli_connect("localhost","root","");
  $db = mysqli_select_db($connection,"data");

  if(isset($_POST['register'])){
    $query = "insert into info values('$_POST[name]','$_POST[email]','$_POST[password]')";
    $query_run = mysqli_query($connection,$query);
    if($query_run){
      echo "<script>alert('Registration successfully...You may now login.');
      window.location.href = 'index.php';
      </script>";
    }
    else{
      echo "<script>alert('Registration failed...try again');
      window.location.href = 'register.php';
      </script>";
    }
  }
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Register Page</title>
    <!-- Bootstrap files -->
    <link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
    <script src="bootstrap-4.4.1/js/bootstrap.min.js" charset="utf-8"></script>
    <!-- CSS File -->
    <!-- <link rel="stylesheet" href="style.css"> -->
  

  </head>
  
  <body  style="background:url('l2.png') no-repeat center center/cover;">

    <!-- Login from code starts here -->
    <section id="login_form">
      <div class="row"  >
        <div class="col-md-4 m-auto block">
          <h4 style="margin-top:100px;color:orange;"><b><u>Register form</u></b></h4>
          <form action="" method="post">
          <div class="form-group">
              <lable style="color:yellow;">Name:</label>
                <input class="form-control" type="text" required name="name" placeholder="Enter your name">
            </div>
            <div class="form-group">
              <lable style="color:yellow;">Email ID:</label>
                <input class="form-control" type="text" required name="email" placeholder="Enter your email">
            </div>
            <div class="form-group">
              <lable style="color:yellow;">Passowrd:</label>
                <input class="form-control" type="password" required name="password" placeholder="Enter your Password">
            </div>
            <button class="btn btn-primary" type="submit" name="register">Register</button>
          </form>
          <!-- <a href="index.php"  style="color:red;">Click here to login</a> -->
        </div>
      </div>
    </section>
  </body>
</html>
