<!DOCTYPE html>
<html>
<head>
     <title> Admin Panel </title>
     <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>/assests/css/style.css">


<body background="<?php echo base_url()?>/assests/img/pic.jpg">
     <div class = "loginbox" >
     <img src="<?php echo base_url()?>/assests/img/avatar2.jpg" class = "avatar2"> 
     <h1> Login Here </h1> 
     <form action="loginprocess" method="post">
          <p>Username</p>
          <input type ="text" name="username" placeholder="Enter Username">
          <p> Password </p>
          <input type ="Password" name="password" placeholder="Enter Password">
          <input type="Submit" name="" value="Login">
      </form>
      <br>
      <br>
      <br>
      <p>Create new account. Go to <a style="color: yellow" class="dropdown-item" href="signup">Signup</a</p>
 </div>
</body>
</head>
</html>
