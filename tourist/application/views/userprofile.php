<!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
     <link rel="stylesheet" href="css/custom.css">
	<title>user</title>
</head>
<body>
<div class="container">
	<div class="row" style="padding-top: 10px; padding-bottom: 5px;">
      <div class="col-md-4" style="">
        	<p> Welcome to admin panel </p>
        	 <?php foreach($users as $users){?>
    			 <tr><td> <?=$users->fullname;?> </td><td> <?=$users->email;?> </td><td><?=$users->username;?></td></tr>     
        		<?php }?>
      </div>
      <div class="col-md-8" style="">
        	     <div>
            <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">Sl No</th>
                <th scope="col">From</th>
                <th scope="col">To</th>
                <th scope="col">Date</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Dhaka</td>
                <td>Chittagong</td>
                <td>10-5-2018</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Dhaka</td>
                <td>Sylhet</td>
                <td>1-6-2018</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Dhaka</td>
                <td>Nilgiri</td>
                <td>31-12-2018</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
	
</div>
</body>
</html>