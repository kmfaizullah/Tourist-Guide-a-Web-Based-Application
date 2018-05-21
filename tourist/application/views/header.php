<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
     <link rel="stylesheet" href="css/custom.css">

     <link rel="stylesheet" href="<?php echo base_url()?>/assests/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
     <link rel="stylesheet" href="<?php echo base_url()?>/assests/css/custom.css"> 
     <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>/assests/css/style.css">

     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <title>Picnic Spot</title>
  </head>
  <body>
    

 
 <header>
<!---------------------------------- Navbar---Start---------------------------------------------->
<div class="container">
      <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #00A0AE">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">

      <a class="navbar-brand" style="color: white;" href="#">Tourist Guide</a>
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item ">
          <a class="nav-link" href="home" style="color: white;" >Home <span class="sr-only">(current)</span></a>
        </li>
        
        <li class="btn-group">   
          <a class="nav-link" style="color: white;" >Places</a>

          <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white; background-color: #0193a0">
            <span class="sr-only">Toggle Dropdown</span>
          </button>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="historic">Historic</a>
            <a class="dropdown-item" href="popular">Most Popular</a>
            <a class="dropdown-item" href="picnic">Picnic Spot</a>
            <a class="dropdown-item" href="adventure">Adventurious</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="ex">Extras</a>
          </div>
        </li>

        <li class="nav-item">
          <a class="nav-link" style="color: white;" href="about">About Us</a>
        </li>


        <li class="nav-item">
          <a class="nav-link" style="color: white;" href="contact">Contact</a>
        </li>
      </ul>
    </div>

      <form action="searchprocess" method="post" class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" name="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0 bg-success"  style="color: white;" type="submit">Search</button>
      </form>
     </nav>
    </div>

</header>

<!---------------------------------- Navbar---Ends -------------------------------------->