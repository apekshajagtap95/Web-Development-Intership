<?php

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>User Dashboard</title>
    <!-- Bootstrap files -->
    <script src="bootstrap-4.4.1/js/bootstrap.min.js" charset="utf-8"></script>
    <link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
    <!-- CSS File -->
    <link rel="stylesheet" href="css/style.css">
    <script src="jQuery/juqery_latest.js" charset="utf-8"></script>

    <script type="text/javascript">
      // function preventBack() (window.history.forward());
      // setTimeout("preventBack()",0);
      // window.onunload=function(){null;}

      $(document).ready(function(){
        $("#edit_profile_button").click(function(){
          $("#main_content").load('edit_profile.php');
        });

        $("#view_notice_button").click(function(){
          $("#main_content").load('view_notice.php');
        });

      });
    </script>
  </head>
  <body style="background-color: white;">
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
    <br>
    <section id="container">
      <div class="row">
        <div class="col-md-2" id="left_sidebar">
          <img src="sl.jpg" class="img-rounded" width="200px" height="200px">
          <br>
          <br>
          <!-- <button type="button" class="btn btn-primary btn-block" id="edit_profile_button">Edit Profile</button> -->
          <button type="button" class="btn btn-warning btn-block" id="view_notice_button">View All Notices</button><br>
          <a href="http://localhost/Internship/Online%20Notice%20Board/admin/index1.php" type="button" class="btn btn-success btn-block">Admin</a><br>
          <a href="http://127.0.0.1:5500/main/page2.html" type="button" class="btn btn-success btn-block" style="background-color:brown;">Exit</a><br>
        </div>
        <div class="col-md-8" id="main_content">
          <h2>Welcome to user Dashboard</h2>
          <!-- <p style="color:red;">
          It is in development.</p> -->
          
        </div>
      </div>
    </section>
  </body>
</html>
