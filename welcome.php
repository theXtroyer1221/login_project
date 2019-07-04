<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="login.css">
  <title>php text</title>
</head>

<body>
  <?php
    $x = 5;

     echo "<p> the number is $x </p>";
     ?>
     <?php
   $username = $_POST["username"];
   $email = $_POST["email"];
   $password = $_POST["password"];

   if (!empty($username) || !empty($email) || !empty($password)) {
     $host = "localhost";
     $dbUsername = "root";
     $dbpassword = "";
     $dbname = "login_project_php"

     //create connection
     $conn = new mysqli($host, $dbUsername, $dbpassword, $dbname);
     if (mysqli_connect_error()) {
       die('connect error('. mysqli_connnect_errorno() . ')'. mysqli_connect_error());
     } else {
       $SELECT = "SELECT email from register where email = ? limit 1"
       $INSERT = "INSERT into register (username, email, password) values (?, ?, ?)"
     }
   } else {
     echo "<p> all fields are required </p>";
     die();
   }
      ?>
    <p>welcome <br>
    <?php echo $username; ?><br>
  </p>
    <p>Your email address is: <br>
    <?php echo $email; ?>
</p>
</body>

</html>
