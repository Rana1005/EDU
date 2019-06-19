<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
  <style>
    body {
   background-image: url("img/image.jpeg");
   background-repeat:no
   width="100%";
   height="100%"
}
  
  </style>
<body> 
<br>
<div class="container">
   	<div class="row">
	<div class="col-sm-12">
    <div class="panel panel-primary">
      <div class="panel-heading"><h2><center>Welcome to Anil Tuotorial.Best place of online learning<center></h2></div>
    </div>
	</div>
</div>	
</div>
 <div class="container">
   	<div class="row">
	    <div class="col-sm-3"> 

          </div>

		 <div class="col-sm-6"> 
		     <div class="panel panel-primary">
		       <div class="panel-heading"><h2>Sign up</h2></div>
                 <div class="panel-body">
				 
				<?php
				  if(isset($_GET['run'])&& $_GET['run']=="success")
				  {
					  echo "your registration is successfully";
				  }
				?>
                  <form role="form" method="post" action="sign_up.php" enctype="multipart/form-data">
				   <div class="form-group">
                   <label for="name">Name:</label>
                   <input type="text" class="form-control" id="name" name="n" placeholder="Enter name">
                  </div>
                 
                  <div class="form-group">
                   <label for="email">Email:</label>
                   <input type="email" class="form-control" id="email" name="e" placeholder="Enter email">
                  </div>
                 <div class="form-group">
                   <label for="pwd">Password:</label>
                   <input type="password" class="form-control" id="pwd" name="p" placeholder="Enter password">
                 </div>
				  <div class="form-group">
                   <label for="img">Upload your image:</label>
                   <input type="file" class="form-control" name="img" id="file" >
                 </div>
                 <button type="submit" class="btn btn-default">Submit</button>
                 </form>
			   </div>
           </div>
          </div>
		  <div class="col-sm-3"> 

          </div>
		  
		  </div>
		  </div>