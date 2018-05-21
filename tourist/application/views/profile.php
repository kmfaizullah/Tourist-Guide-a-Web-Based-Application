<!DOCTYPE html>
<html>
<head>
	     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="<?php echo base_url()?>/assests/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
     <link rel="stylesheet" href="<?php echo base_url()?>/assests/css/custom.css"> 
     <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>/assests/css/style.css">

     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
	<title>Admin profile</title>
</head>
<body>
	<div class="container">
		<div class="row" style="padding-top: 10px;">
			<div class="col-sm-4" style="border: 5px  solid black;">
				<h3 style="text-align: center; padding-top: 50px; color: blue;">Welcome to your Profile </h3>
				<?php foreach ($userdata2 as $ud) {?>
				<p>Fullname: <?php echo $ud['fullname'];?></p>
				<p>Username: <?php echo $ud['username'];?> </p>
				<?php }?>
			</div>
			<div class="col-sm-8" style="">
		<div>
            <table class="table table-striped" style="border: 2px solid gray">
            <thead>
              <tr style="text-align: center;">
                <th scope="col">Name</th>
                <th scope="col">Location</th>
                <th scope="col">Message</th>
              </tr>
            </thead>
            <tbody>
            <h3 style="text-align: center;">Messages from Users</h3>
            <?php foreach ($userdata1 as $ud) {?>
              <tr style="text-align: center;">
                 
                <td><?php echo $ud['name'];?></td>
                <td><?php echo $ud['location'];?></td>
                <td><?php echo $ud['message'];?></td>
              </tr>
              <?php }?>
            </tbody>
          </table>
        </div>
			</div>
		</div>		

	</div>

</body>
</html>