<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
    body {
   background-image: url("img/image.jpeg");
   background-repeat:no
   width="100%";
   height="100%"
}
  
  </style>
</head>
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
			  <div class="panel-heading"><h2>Login</h2></div>
			  <div class="panel-body">
			  
			  	<?php
				  if(isset($_GET['run'])&& $_GET['run']=="failed")
				  {
					  echo "your email or password is not correct";
				  }
				?>	  
			
              <form role="form" action="signin_sub.php" method="post">
               <div class="form-group">
                  <label for="email">Email:</label>
                  <input type="email" class="form-control" name="e" id="email" placeholder="Enter email">
               </div>
               <div class="form-group">
                  <label for="pwd">Password:</label>
                  <input type="password" class="form-control" name="p" id="pwd" placeholder="Enter password">
               </div>
              <button type="submit" class="btn btn-default">Submit</button>
             </form>
		    </div>
           </div>
		   <p style="color:red">Don't have account <a style="color:white" href="register.php">register here</a>
	 </div>
		  <div class="col-sm-3"> 

          </div>


</div>
</div>
</body>
</html>
