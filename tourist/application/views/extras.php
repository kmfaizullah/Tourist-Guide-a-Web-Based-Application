
<!---------------------------------- Navbar---Ends -------------------------------------->
<div class="container">
   <div>

    <div style="padding-bottom: 15px; padding-top: 15px;">
        <div class="jumbotron jumbotron-fluid" style="background-color: #343434;">
             <div class="container">
              <h1 class="display-4" style="color: white; text-align: center;">Our upcomming tour & Booking going on</h1>
            </div>
          </div>
        <div>
            <table class="table table-striped" style="border: 2px solid gray">
            <thead>
              <tr style="text-align: center;">
                <th scope="col">Sl No</th>
                <th scope="col">Place</th>
                <th scope="col">Date</th>
                <th scope="col">Approximate Cost</th>
              </tr>
            </thead>
            <tbody>
            <?php foreach ($userdata1 as $ud) {?>
              <tr style="text-align: center;">
                 
                <td><?php echo $ud['n_id'];?></td>
                <td><?php echo $ud['upcoming'];?></td>
                <td><?php echo $ud['date'];?></td>
                <td><?php echo $ud['cost'];?></td>
              </tr>
              <?php }?>
            </tbody>
          </table>
        </div>
      
    </div> 



    <div style="padding-bottom: 15px; padding-top: 15px;">
        <div class="jumbotron jumbotron-fluid" style="background-color: #343434;">
             <div class="container">
              <h1 class="display-4" style="color: white; text-align: center;">Our Given tour</h1>
            </div>
          </div>
        <div>
            <table class="table table-striped" style="border: 2px solid gray">
            <thead>
              <tr style="text-align: center;">
                <th scope="col">Sl No</th>
                <th scope="col">Place</th>
                <th scope="col">Date</th>
                <th scope="col">Cost</th>
              </tr>
            </thead>
            <tbody>
            <?php foreach ($userdata2 as $ud2) {?>
              <tr style="text-align: center;">
                 
                <td><?php echo $ud2['sl_id'];?></td>
                <td><?php echo $ud2['place'];?></td>
                <td><?php echo $ud2['date'];?></td>
                <td><?php echo $ud2['cost'];?></td>
              </tr>
              <?php }?>
            </tbody>
          </table>
        </div>
      
    </div> 

  </div>





  <!------------------Footer-------------------------->

