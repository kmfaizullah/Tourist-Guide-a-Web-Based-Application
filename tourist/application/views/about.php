

<!---------------------------------- Navbar---Ends -------------------------------------->
<div class="container">
  <div class="abu">
  <div style="padding-top: 15px;">
     <div class="jumbotron jumbotron-fluid" style="background-color: #343434;">
             <div class="container">
              <h1 class="display-4" style="text-align: center; color: white;">Our Business Status </h1>
            </div>
      </div>
    <div class="row">
      <div class="col-md-6">
        <h2 style="text-align: center;">Our Goal<br></h2>
      <p>Successful businesses are based on both goals and objectives, as they clarify the purpose of the business and help identify necessary actions Goals are general statements of desired achievement, while objectives are the specific steps or actions you take to reach your goal. Both goals and objectives should be specific and measurable. Goals can involve areas such as profitability, growth and customer service, with a range of objectives that can be used to meet those goals.<br>A common business goal is to run a profitable operation, which typically means increasing revenue while limiting expenses. To reach this goal, objectives could consist of increasing annual sales by 10 percent or landing three new accounts each month. Expense objectives could involve finding a new operating facility that decreases your rent by $200 a month or cutting monthly utility bills by 15 percent.</p>
      </div>
      <div class="col-md-6">
        <h2 style="text-align: center;">Our policies<br></h2>
      <p>Successful businesses are based on both goals and objectives, as they clarify the purpose of the business and help identify necessary actions Goals are general statements of desired achievement, while objectives are the specific steps or actions you take to reach your goal. Both goals and objectives should be specific and measurable. Goals can involve areas such as profitability, growth and customer service, with a range of objectives that can be used to meet those goals.<br>A common business goal is to run a profitable operation, which typically means increasing revenue while limiting expenses. To reach this goal, objectives could consist of increasing annual sales by 10 percent or landing three new accounts each month. Expense objectives could involve finding a new operating facility that decreases your rent by $200 a month or cutting monthly utility bills by 15 percent.</p>
      </div>
     </div>
    </div>
    <div class="sp">
     <div style="background-color: #e5e5e5">
       <div class="jumbotron jumbotron-fluid" style="background-color: #343434;">
             <div class="container">
              <h1 class="display-6" style="text-align: center; color: white;">Our team</h1>
            </div>
          </div>
       <div class="row" style="padding: 10px; ">
      <?php foreach ($userdata as $ud) {?>
             <div class="col-sm-4">
              <div class="card" style="border-radius: 25px;">
                <img class="card-img-top" src="<?php echo base_url()?><?php echo $ud['img'];?>" alt="Card image cap">
                <div class="card-body" style="background-color: black; padding-top: 5px;">
                <h5 class="card-title" style="text-align: center; color: #7d6c41"><?php echo $ud['name'];?></h5>
                  <p class="card-text" style="text-align: center; color: white;"> ID: <?php echo $ud['ID'];?></p>
                  <p class="card-text" style="text-align: center; color: white;"> Dept: <?php echo $ud['Dept'];?></p>
                  <p class="card-text" style="text-align: center; color:white;"> Subject: <?php echo $ud['Subject'];?></p>
                  
                </div>
              </div>
            </div>
            <?php }?>
           
    
      </div>
      </div>
    </div>
    



  </div>




  <!------------------Footer-------------------------->

