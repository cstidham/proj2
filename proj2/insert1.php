<html>
<link rel="stylesheet" href="./css/style1.css">
<body>





<?php

$host = "localhost";
$user = "root";
$password ="";
$database = "demo";

$name ="";
$email="";
$message="";

/* Attempt to connect to MySQL database */
  $con = mysqli_connect($host, $user, $password, $database);

  if(isset($_POST['insert']))
  {
      $data = getPosts();
      $insert_Query = "INSERT INTO `contact`(`name`,`email`, `message`) VALUES ('$_POST[name]','$_POST[email]','$_POST[message]')";
      try{
          $insert_Result = mysqli_query($con, $insert_Query);

          if($insert_Result)
          {
              if(mysqli_affected_rows($connect) > 0)
              {
                  echo 'Data Inserted';

              }else{
                  echo 'Data Not Inserted';
              }
          }
      } catch (Exception $ex) {
          echo 'Error Insert '.$ex->getMessage();
      }
  }

?>

</body>

</html>
