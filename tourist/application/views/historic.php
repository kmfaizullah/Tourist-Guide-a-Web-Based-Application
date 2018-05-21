
<!---------------------------------- Navbar---Ends -------------------------------------->
<div class="container">
    <div style="padding-top: 20px; padding-bottom: 20px;" class="row">
      
        <div class="row">
        <?php foreach ($userdata as $ud) {?>
            <div class="col-sm-6">
              <div class="card">
                <img class="card-img-top" src="<?php echo base_url()?><?php echo $ud['img'];?>" alt="Card image cap">
                <div class="card-body">
               
                <h5 class="card-title"><?php echo $ud['place_name'];?></h5>
                  <p class="card-text"><?php echo $ud['description'];?></p>
                  
                </div>
                <br>
              </div>
            </div>

             <?php }?>
          
            </div>
           

          </div>




  <!------------------Footer-------------------------->

