<!DOCTYPE html>
<html>
<head>
     <title> Admin Panel </title>
     <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>/assests/css/style.css">


<body background="<?php echo base_url()?>/assests/img/eifel.jpg">
     <div class = "loginbox" >

     <h1> Signup Here </h1> 
     <form action="signupprocess" method="post">

     	<p>Fullname</p>
          <input type ="text" name="fullname" placeholder="Enter Username">

          <p>Username</p>
          <input type ="text" name="username" placeholder="Enter Username">
          <p> Password </p>
          <input type ="password" name="password" placeholder="Enter Password">

          <p>Email</p>
          <input type ="text" name="email" placeholder="Email">


          <input type="Submit" name="" value="Signup">
      </form>
 </div>
</body>
</head>
</html>
