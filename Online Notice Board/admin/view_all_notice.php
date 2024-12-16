<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <br>
    <center><h3>All Notices</h3></center><br>
    <?php
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"data");
    $query = 'select * from notice';
    $query_run = mysqli_query($connection,$query);
    while($row = mysqli_fetch_assoc($query_run)){
      ?>
      <div class="card">
        <div class="card-body">
          <h5 class="card-title"><?php echo $row['to_whom'];?></h5>
          <h3 class="card-title"><?php echo $row['subject'];?></h3>
          <p class="card-text"><?php echo $row['message'];?></p>
        </div>
      </div>
      <?php
    }
    ?>
  </body>
</html>
