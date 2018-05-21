
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url()?>/assests/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
     <link rel="stylesheet" href="<?php echo base_url()?>/assests/css/custom.css">
    <title>Home</title>
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


<div class="container">
<div class="part2">

<!---------------------------------- Slider---starts -------------------------------------->

<div class="sld">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="<?php echo base_url()?>/assests/img/1.png" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo base_url()?>/assests/img/2.png" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo base_url()?>/assests/img/3.png" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>

<!---------------------------------- Slider---Ends -------------------------------------->

    <div class="bod">
      <div class="txt">
        <div class="row">
         <div class="col-md-6">
           <h2 style="color: #1aae5f;">Purposes of Tourist Guide</h2> <br> <hr>
           
           <p style="padding-left: 10px;">Some travelers—you, perhaps—are averse to the very premise of a guided tour. No self-assumed sophisticate wants to be led around by someone holding a whistle and a Ping-Pong paddle with a number on it. I certainly never did, in my indie-traveler youth. Instead I relied on books, on my own wits, and on friends and local contacts, who’d point me to the underground galleries and unsung sites that I believed told the real story of a place. In hindsight, I was poring over footnotes and ignoring the main text.<br>This error first struck me on a visit to Varanasi, India. At the time I was still naive enough to think I knew everything, or that I could at least figure it out on my own. So I spent three days walking the banks of the Ganges, watching the most bewildering scenes drift by. The experience was undeniably visceral, yet ultimately unsatisfying—like a Hindi movie with the subtitles off. On my fourth morning I met a local professor at a teahouse who offered to show me around in exchange for lunch. We spent the afternoon retracing my earlier steps, with my guide explaining everything I’d missed: not just the what and the who, but the how and the why.<br></p> 
          </div>
         <div class="col-md-6">
           <h2 style="color: #1aae5f; "> Why customers should prefer Tourist Guide?</h2> <hr>
           <p style="padding-left: 10px;">Bangladesh, of course, begs for interpretation, which is why seasoned travelers will hire a guide in Varanasi or Delhi or Mumbai when they wouldn’t consider it in Rome or Paris or London. But even the latter cities come to new life—even after your umpteenth visit—when seen with a skilled guide. Indeed, some of my most memorable tours took me not to obscure or exotic sites but around places I’d considered familiar: the Tower of London, midtown Manhattan, the heart of ancient Rome. <br>Savvy tour leaders read their audience as well as they read the city, staying ever attuned to the ebb and flow of engagement. (The ideal candidate not only has a Ph.D. but also moonlights in an improv troupe.) Such skills are essential, since there is no such thing as a “typical” tour client, according to Fant: some are scholars themselves; others have barely cracked a guidebook. She recalls a couple who signed up for a tour of ancient Rome. The husband had no interest in art or museums, but happened to be in the bathroom-supply business: “He wound up asking a zillion questions about the fountains—how they worked, how water moved through the city. They became the basis of our walk.”</p>
            </div>
          </div> 
        </div>
        
        <div class="servc">
          <div class="jumbotron jumbotron-fluid" style="background-color:  #1aae5f;">
             <div class="container">
              <h1 class="display-4 text-white"  >Our Services</h1>
            </div>
          </div>

          <div class="row" style="padding-left: 10px; padding-right: 10px;">
            <div class="col-sm-3">
              <div class="card">
                <img class="card-img-top" src="<?php echo base_url()?>/assests/img/5.png" alt="Card image cap">
                <div class="card-body">
                <h5 class="card-title">Places</h5>
                  <p class="card-text">We would like to have different trip in many places. We organize everything for your trip. Your ar welcome to have a good experince of traveling with us.</p>
                  
                </div>
              </div>
            </div>
            <div class="col-sm-3">
             <div class="card">
                 <img class="card-img-top" src="<?php echo base_url()?>/assests/img/7.png" alt="Card image cap">
                
                <div class="card-body">
                <h5 class="card-title">Tour Plan</h5>
                  <p class="card-text">We would like to ensure evrything before our plans. We realize well organization is required for a good trip. We beleive than it will be one of the best experience of your life to join with us.</p>
                  
                </div>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="card">
               <img class="card-img-top" src="<?php echo base_url()?>/assests/img/6.png" alt="Card image cap">
                <div class="card-body">
                <h5 class="card-title">Accomodation </h5>
                  <p class="card-text">We are conscious enough about our client. We would like to make best uses of our resources. For this reason we try to provide every facilities for our customers.</p>
                  
                </div>
              </div>
            </div>
            <div class="col-sm-3">
             <div class="card">
                <img class="card-img-top" src="<?php echo base_url()?>/assests/img/8.png" alt="Card image cap">
                <div class="card-body">
                <h5 class="card-title">Extras</h5>
                  <p class="card-text">Our website helps to find out our most of the activities. You can book our some onging offer through this website. You also get to know our upcomming plans.</p>
                 
                </div>
              </div>
            </div>
          </div>
        </div>
    
    </div>


  </div>


<!------------------Footer-------------------------->

<div class="part3" style="background-color: #014165">
<br>
<div class="container">
<div class="row" >
  <div class="col-sm-4">
  <div class="row" style="text-align: center; color: white; padding-left: 10px; padding-right: 10px;"> Social Links:</div><br>
  <div class="row">
    <div class="col-sm-2"><a href="www.facebook.com"><img src="<?php echo base_url()?>/assests/img/14.png"> </a></div>
    <div class="col-sm-2"><a href="https://www.youtube.com/"><img src="<?php echo base_url()?>/assests/img/15.png"></a></div>
  </div> 
  <div class="row" style="padding-top: 5px;">
    <div class="col-sm-2"><a href="https://www.google.com/search?q=gmail&ie=utf-8&oe=utf-8&client=firefox-b"><img src="<?php echo base_url()?>/assests/img/13.png"> </a></div>
    <div class="col-sm-2"><a href="https://twitter.com/signup?lang=en"><img src="<?php echo base_url()?>/assests/img/16.png"></a></div>
  </div>  
  </div>
  <div class="col-sm-4" style="color: white;">
    <h4>Address:</h4>
    <p>Suit: B2; Block :B <br>Road: 7,
      Bashundhara R/A, Dhaka,
      Bangladesh.
      <br><br>
      Email: 12345678@gmail.com
      Phone: 01123456789 </p>
  </div>
  <div class="col-sm-4">
    <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d14600.111225739593!2d90.4227266290041!3d23.817610233232543!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sbashundhara+block+b+road+7!5e0!3m2!1sen!2sbd!4v1515656677792" width="350" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
  </div>
</div>
</div>
<br>
</div>








  <!------------------Copyright-------------------------->
  <div class="part4">
  <div class="navbar navbar-expand-lg navbar-light" style="background-color: black">
  <div class="row"></div>
    <div class="col-sm-4"></div>
    <div class="col-sm-8">
      <p style="color:white"> Copyright@CSE 311</p>
    </div> 
  </div>
  </div>
    <!----------------------------- Optional JavaScript ------------------------->
    <!-- ----------jQuery first, then Popper.js, then Bootstrap JS -------------->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
    </div>
  </body>
</html>