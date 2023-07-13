<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="Style_Contact.css">
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

    include("config.php");
    if(isset($_POST['Submit'])) {
       $nume = $_POST['nume'];
       $prenume = $_POST['prenume'];
       $email = $_POST['email'];
       $feedback = $_POST['feedback'];

    if(empty($nume)) {
    echo "<h2>NUME INVALID</h2>";
    }
    if(empty($prenume)) {
    echo "<h2>PRENUME INVALID</h2>";
    }
    if(empty($email) || strpos($email,"@") == 0) {
    echo "<h2>EMAIL INVALID</h2>";
    }
      else {
    $result = mysqli_query($cser, "INSERT INTO contact (NUME,PRENUME,EMAIL,FEEDBACK) VALUES('$nume','$prenume','$email','$feedback')");

    echo "<h1>DATE ADAUGATE</h1>";

    }
    }
    ?>
     <a href="Acasa.html" class="ContinuaContact">Acasa...</a>
  </body>
</html>
