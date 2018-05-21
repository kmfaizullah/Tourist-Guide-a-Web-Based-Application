<!DOCTYPE html>
<html>
<head>
     <title> Admin Panel </title>
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="<?php echo base_url()?>/assests/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
     <link rel="stylesheet" href="<?php echo base_url()?>/assests/css/custom.css"> 
     <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>/assests/css/style.css">

     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>


</head>

<body >

    <div >
     <div class = "loginbox" >
     <form action="popularprocess" method="post">

     	<p>Place code</p>
          <input type ="text" name="pcode" placeholder="Enter place code">

          <p>Place name</p>
          <input type ="text" name="pname" placeholder="Enter Placename">
          <p> Description </p>
          <input type ="text" name="description" placeholder="Place description">

          <p>location</p>
          <input type ="text" name="location" placeholder="location">

          <p>distance</p>
          <input type ="text" name="distance" placeholder="distance">
          <p>Fk Place Code</p>
          <input type ="text" name="placecode" placeholder="fk Place Code">
          



          <input type="Submit" name="" value="Submit">
      </form>
   </div>
   </div>


</body>

</html>
