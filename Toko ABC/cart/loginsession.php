<?php
    session_start();

    if (isset ($_POST['Login'])) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    //periksa login
    if ($user == "fina" && $pass == "12345") {
      //menciptakan session
      $_SESSION['login'] = $user ;

      //menuju ke halaman product
      header("location:list-product.php");
    }else{
      header("location:loginsession.php");
    }
  } else {
    ?>
    <html>
    <head>
    <title>Login here...</title>
    </head>
    <body>
    <form action="" method="post">
    <h2>Login Here...</h2>
      Username : <input type="text" name="user"><br>
      Password : <input type="password" name="pass"><br>
      <input type="submit" name="Login" value="Log In">
    </form>
    </body>
    </html>
  <?php 
    } 
  ?>
<!-- </body>
</html> -->