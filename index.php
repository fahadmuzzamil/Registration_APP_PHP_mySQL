<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
<style>
	 body{
               background:url("bg.jpg")
          }
          form{
               width: 500px;
               border: 2px solid #ccc;
               padding: 30px;
               background: rgba(255,255,255,.3);
               border-radius: 15px;
               box-shadow: 0px 0px 5px 5px rgb(8, 38, 66) inset;
               box-shadow: 0px 0px 5px 5px rgb(8, 38, 66);
               }
</style>
</head>

<body>
     <form action="login.php" method="post" enctype = "multipart/form-data">
     	<h2>LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label style = " color: rgb(8, 38, 66);">User Name</label>
     	<input type="text" name="uname" placeholder="Enter User Name"><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Enter Password"><br>

     	<button type="submit">Login</button>
          <a href="signup.php" class="ca">Create an account</a>
     </form>
</body>
</html>