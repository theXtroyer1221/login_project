<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <title>php text</title>
</head>

<body>
  <?php
     $username = $_POST["username"];
     $email = $_POST["email"];
     $password = $_POST["password"];

     if (!empty($username) || !empty($email) || !empty($password)) {
       $host = "localhost";
       $dbUsername = "root";
       $dbpassword = "";
       $dbname = "login_project_php";

       //create connection
       $conn = new mysqli($host, $dbUsername, $dbpassword, $dbname);
       if (mysqli_connect_error()) {
          die('connect error('. mysqli_connnect_errorno() . ')'. mysqli_connect_error());
       } else {
           $SELECT = "SELECT email from users where email = ? limit 1";
           $INSERT = "INSERT INTO `users`( `username`, `email`, `password`) VALUES ( ?, ?, ?)";


         //prepare statment
         $stmt = $conn->prepare($SELECT);
         $stmt->bind_param("sss", $username, $email , $password);
         $stmt->execute();
         $stmt->bind_result($email);
         $stmt->store_result();
         $rnum = $stmt->num_rows;

           //prepare statment
           $stmt = $conn->prepare($SELECT);
           $stmt->bind_param("sss", $username, $email , $password);
           $stmt->execute();
           $stmt->bind_result($email);
           $stmt->store_result();
           $rnum = $stmt->num_rows;


           if ($rnum==0) {
             $stmt->close();

             $stmt = $conn->prepare($INSERT);
             $stmt->bind_param("sss", $username, $email, $password);
             $stmt->execute();
             echo "User created peace";
           } else {
             echo "Someone already registerd with this email ";
           }
           $stmt->close();
           $conn->close();
       }
     } else {
       echo "<p> all fields are required </p>";
       die();
     }

    else {
     echo "<p> all fields are required </p>";
     die();
   }
      ?>
    <div class="login_username container transparent">
      <p>welcome
        <?php echo $username; ?><br>

        ?>
      <div class="login_username container transparent">
      <p>
        <?php echo "welcome $username"; ?><br>
      </p>
      <p class="email_login">Your email address is:
        <?php echo $email; ?>
      </p>
    </div>
    <div id="main_container" class="container">
      <h>Thanks for registering at Lorem ipsum</h5>
        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
          irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem, ipsum dolor sit amet consectetur
          adipisicing elit. Distinctio ab excepturi exercitationem est ipsam nam, culpa consequatur porro suscipit eos modi odit in reprehenderit blanditiis maiores nulla dicta sunt voluptas!</p>
        <h5>What can you do now?</h5>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip
          ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan.</p>
        <h5>Lorem ipsum</h5>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip
          ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan. Nam liber tempor cum soluta nobis eleifend option congue
          nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius.</p>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip
          ex ea commodo consequat.</p>
        <h5>Dolor sit amet</h5>
        <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt
          lectores legere me lius quod ii legunt saepius. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan.</p>
        <h5>The wonderful sweet mornings</h5>
        <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I
          am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents. I should be incapable of drawing a single stroke at the present moment; and yet I feel that I never was a greater artist than
          now. When, while the lovely valley teems with vapour around me, and the meridian sun strikes the upper surface of the impenetrable foliage of my trees, and but a few stray gleams steal into the inner sanctuary, I throw myself down among the
          tall grass by the trickling stream; and, as I lie close to the earth, a thousand unknown plants are noticed by me: when I hear the buzz of the little world among the stalks, and grow familiar with the countless indescribable forms of the insects
          and flies, then I feel the presence of the Almighty, who formed us in his own image, and the breath of that universal love which bears and sustains us.</p>
        <img src="lorem_2.png" />
        <h5>Darkness absorbs it’s power</h5>
        <p>As it floats around us in an eternity of bliss; and then, my friend, when darkness overspreads my eyes, and heaven and earth seem to dwell in my soul and absorb its power, like the form of a beloved mistress, then I often think with longing, Oh,
          would I could describe these conceptions, could impress upon paper all that is living so full and warm within me, that it might be the mirror of my soul, as my soul is the mirror of the infinite God! O my friend -- but it is too much for my
          strength -- I sink under the weight of the splendour of these visions! A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence
          in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents. I should be incapable of drawing a single stroke at the
          present moment; and yet I feel that I never was a greater artist than now. </p>
        <h5>The greatness behing the mountains</h5>
        <p>When, while the lovely valley teems with vapour around me, and the meridian sun strikes the upper surface of the impenetrable foliage of my trees, and but a few stray gleams steal into the inner sanctuary, I throw myself down among the tall grass
          by the trickling stream; and, as I lie close to the earth, a thousand unknown plants are noticed by me: when I hear the buzz of the little world among the stalks, and grow familiar with the countless indescribable forms of the insects and flies,
          then I feel the presence of the Almighty, who formed us in his own image, and the breath of that universal love <img src="lorem_3.png" /> <br> which bears and sustains us. As it floats around us in an eternity of bliss; and then, my friend,
          when darkness overspreads my eyes, and heaven and earth seem to dwell in my soul and absorb its power, like the form of a beloved mistress, then I often think with longing, Oh, would I could describe these conceptions, could impress upon paper
          all that is living so full and warm within me, that it might be the mirror of my soul, as my soul is the mirror of the infinite God! O my friend -- but it is too much for my strength -- I sink under the weight of the splendour of these visions!
          A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine.
          I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents. I should be incapable of drawing a single stroke at the present moment; and yet I feel that I never was a greater artist
          than now. When, while the lovely valley teems with vapour around me, and the meridian sun strikes the upper surface of the impenetrable foliage of my trees, and but a few stray gleams steal into the inner sanctuary.</p>
        <h5>The story behind it</h5>
        <p> I throw myself down among the tall grass by the trickling stream; and, as I lie close to the earth, a thousand unknown plants are noticed by me: when I hear the buzz of the little world among the stalks, and grow familiar with the countless indescribable
          forms of the insects and flies, then I feel the presence of the Almighty, who formed us in his own image, and the breath of that universal love which bears and sustains us, as it floats around us in an eternity of bliss; and then, my friend,
          when darkness overspreads my eyes, and heaven and earth seem to dwell in my soul and absorb its power, like the form of a beloved mistress, then I often think with longing, Oh, would I could describe these conceptions, could impress upon paper
          all that is living so full and warm within me, that it might be the mirror of my soul, as my soul is the mirror of the infinite God! O my friend -- but it is too much for my strength -- I sink under the weight of the splendour of these visions!A
          wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls.</p>
    </div>
</body>

</html>
