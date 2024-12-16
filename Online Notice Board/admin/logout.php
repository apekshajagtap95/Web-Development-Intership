<?php
  session_start();
  session_unset();
  session_destroy();
  header("Location:http://localhost/Internship/Online%20Notice%20Board/index.php");
 ?>

 <!-- <!DOCTYPE html>
 <html lang="en">
 <head>
      <script type="text/javascript">
      function preventBack() (window.history.forward());
      setTimeout("preventBack()",0);
      window.onunload=function(){null;}
</script>
 </head>
 </html> -->
