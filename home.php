<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
     <style>
          body{
               background: linear-gradient(blue,red);
               display: flex;
               flex-direction: column;
               justify-content:center;
               align-items:center;
               height: 100vh;
          }
          h1{color: yellow}
          h2{color: white}
          a{
               text-decoration:none;
               color: blue;
          }
          span{
               color: yellow;
          }
     </style>
</head>
<body>
     <h1>Hello <?php echo $_SESSION['name']; ?></h1>
     <h2>Your Username is <?php echo $_SESSION['user_name']; ?></h2> 
     <h3>Your password is totally Encrypted: <span> <?php echo $_SESSION['pass']; ?></span></h3>
     <br>
     <h1><a href="logout.php">Logout</a></h1>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>