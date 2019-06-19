<?php
include("class/users.php");
$email=$_SESSION['email'];
$profile=new users;
$profile->users_profile($email);
$profile->cat_shows();
//print_r($profile->data);
?>

<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="nav.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>


/* Change background color of buttons on hover */

/* Create an active/current "tab button" class */


/* Style the tab content */
#ttt{
border-right: 2px solid gray;
}


</style>

  
  
  
  
</head>
<body>
<div class="container">
    <div class="row">
	     <div class="col-md-12">
		        <div class="panel with-nav-tabs panel-primary">
				   <div class="panel-heading">
				           <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab1primary" data-toggle="tab">Home</a></li>
                            <li><a href="#tab2primary" data-toggle="tab">AboutUs</a></li>
                            <li class="dropdown">
                                <a href="#" data-toggle="dropdown">Courses<span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#tab4primary" data-toggle="tab">IIT-JAM</a></li>
                                    <li><a href="#tab5primary" data-toggle="tab">CSIR-NET-JRF</a></li>
									<li><a href="#tab6primary" data-toggle="tab">GATE</a></li>
									<li><a href="#tab7primary" data-toggle="tab">NBHM</a></li>
									<li><a href="#tab8primary" data-toggle="tab">TIFR</a></li>
                                </ul>
                            </li>
							<!--video lecture-->
							<li class="dropdown">
                                <a href="#" data-toggle="dropdown">VideoLecture<span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#iit" data-toggle="tab">IIT-JEE(Mains && Advance)</a></li>
                                    <li><a href="#iitjam" data-toggle="tab">IIT-JAM/NBHM/TIFR & Others Msc Entrance exam</a></li>
									<li><a href="#Gate" data-toggle="tab">CSIR-NET/GATE</a></li>
									<li><a href="#tech" data-toggle="tab">B.TECH</a></li>
									<li><a href="#eletwe" data-toggle="tab">11<sup>th</sup>&12<sup>th</sup></a></li>
                                </ul>
                            </li>
						
							<li><a href="#test" data-toggle="tab">OnlineTest</a></li>
							<li><a href="#contect" data-toggle="tab">ContectUs</a></li>
							<li><a href="#profile" data-toggle="tab">Profile</a></li>
							<li style="float:right"><a href="#logout" data-toggle="tab">Logout</a></li>
                        </ul>
				   </div>
				   
				     <div class="panel-body">
                    <div class="tab-content">
					
					<!--coding for home tab-->
                        <div class="tab-pane fade in active" id="tab1primary">
						    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="https://placehold.it/1200x400?text=ONLINE%20EDUCATION%20FOR%20YOU" alt="Image" width="100%" height="400px">
        <div class="carousel-caption">
          <h3>Online Education</h3>
          
        </div>      
      </div>

      <div class="item">
        <img src="https://placehold.it/1200x400?text=BY%20ANIL%20TUTORIAL" alt="Image">
        <div class="carousel-caption">
          <h3>More Sell $</h3>
          <p>Lorem ipsum...</p>
        </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
  
<div class="container text-center">    
  <h3>What We Do</h3><br>
  <div class="row">
    <div class="col-sm-6">
      <iframe width="400" height="300" src="https://www.youtube.com/embed/efn4Ha6irZk?list=PLAVdEWUVpPAh4QK0tOzKa0CQ-Pr4UJ_TB" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	  <br>
      <button type="button" class="btn btn-primary" style="height:30px;width:400px"><a href="connnn.html" style="color:black;text-size:bold; width=400">Contect Us For Live Classes on(8pm to 9pm)monday to friday</a></button>
    </div>
    <div class="col-sm-6" style="margin-left=20px"> 
       <iframe width="400" height="300" src="https://www.youtube.com/embed/S8fBuX-k_4I" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>  
      </br>
	  <button type="button" class="btn btn-primary"  style="height:30px;width:400px"><a href="connnn.html" style="color:black;text-size:bold; width=400">click here to send us request</a></button>
   </div>
  </div>
</div><br>
						
						
							
						</div>
					<!-- end the code of home tag here-->
                        <div class="tab-pane fade" id="tab2primary">Primary 2</div>
						<div class="tab-pane fade" id="profile">
						      <h1>showing profile</h1>
						    <!-- showing users profile-->
							 
							  <table class="table">
								<thead>
								  <tr>
									<th>id</th>
									<th>name</th>
									<th>email</th>
									<th>image</th>
								  </tr>
								</thead>
								<tbody>
	
								<?php 
								 foreach($profile->data as $prof)
							     {?>
								 <tr>
								 <td><?php echo $prof['id'];?></td>
                                 <td><?php echo $prof['name'];?></td>
                                 <td><?php echo $prof['email'];?></td>
                                 <td><img src="img/<?php echo $prof['img'];?>" alt="" width="35px" height="30px" /></td>
                                 </tr>
                                </tbody>
                             	<?php 	}?>
                               </table>

							  
						
						</div>
						<div class="tab-pane fade" id="logout">Logout</div>
						
						<!-- About IIT-JAM-->
                        <div class="tab-pane fade" id="tab4primary">coming soon</div>

						        
						<!-- End OF IIT-JAM-->
						
						<!-- starting to csr-->
                        <div class="tab-pane fade" id="tab5primary">
						   <div class="row">
						      <div class="col-sm-3">
							     <div class="btn btn-group btn-block">
									<button onclick="Introduction()">Introduction</button>
									<button onclick="Eligibility_Criteria()">Eligibility_Criteria</button>
									<button onclick="Pattern()">Pattern</button>
									<button onclick="Marking()">Marking_Scheme</button>
									<button onclick="Syllabus_Refrence_Books()">Syllabus & Refrence_Books</button>
									<button onclick="previous()">Previous_Year_Paper</button>
									<button onclick="Book()">Books&Notes</button>
									
									
								 </div>
							  </div>
							  <div class="col-sm-6" id="side">
							    
							  </div>
							  
						   </div>
						   <script>
						    function Book(){
							   var codeBlock = '<div class="content">'+'<img src="img/book.png"><img>'+'</div>'
							   document.getElementById("side").innerHTML = codeBlock
							}
						    function Introduction()
							{
							  var codeBlock = '<div class="content">'+'<b><p>This exam named as CSIR NET is conducted by CSIR (Council of Scientific and Industrial Research) with the objective to determine the eligibility of the candidates of India, which is awarded with Junior Research Fellowships (JRF) /NET (National Eligibility Test) and also to determine eligibility for the appointment of Lecturers (NET) in a number of subjects that fall under the stream of Science & Technology. Exams conducted by CSIR are in the following areas:-</p></b>'
							  +'<ul><li>Chemical Sciences</li><li>Earth Sciences</li><li>Atmospheric Sciences</li><li>Ocean Sciences</li><li>Planetary Sciences</li><li>Mathematical Sciences</li><li>physical Sciences</li></ul>'+
							  '</div>';
							  document.getElementById("side").innerHTML = codeBlock
							}
							function Eligibility_Criteria()
							{
							 var codeBlock = '<div class="content">'+'<img src="img/Capture.png"></img>'+'<img src="img/Capture1.png"></img>'+'</div>';
							 document.getElementById("side").innerHTML = codeBlock
							}
							function Pattern()
							{
							var codeBlock = '<div class="content">'+'<img src="img/pt.PNG"></img>'+'<p>The revised exam scheme and model Question paper may be seen at CSIR HRDG website <a href="www.csirhrdg.res.in">www.csirhrdg.res.in</a></p>'+'</div>';
							 document.getElementById("side").innerHTML = codeBlock
							}
							function Syllabus_Refrence_Books()
							{
							var codeBlock = '<div class="content">'+'<img src="img/sy.png"></img>'+'<img src="img/sy1.png"></img>'+'<img src="img/sy2.png"></img>'+'<img src="img/sy3.png"></img>'+'<img src="img/sy4.png"></img>'
							+'<img src="img/sy5.png"></img>'+'<img src="img/sy6.png"></img>'+'</div>';
							 document.getElementById("side").innerHTML = codeBlock
							}
							function Marking()
							{
							var codeBlock = '<div class="content">'+'<img src="img/mark1.png"></img>'+'<img src="img/mark2.png"></img>'+'</div>';
							 document.getElementById("side").innerHTML = codeBlock
							}
							function previous()
							{
							 var codeBlock='<div class="content">'+'<h3>DECEMBER</h3>'+'<a href="https://drive.google.com/file/d/1qrC_wLwxN04MGPMCcstOc8ArsWSP47NK/view?usp=sharing"><h5>QuestionPaper2015</h5></a>'+
							 '<a href="https://drive.google.com/file/d/17IWiUgTJrvLuBtJ6pKlyzfj9LUcG3HOG/view?usp=sharing"><h5>AnswerKey2015</h5></a>'+
							 '<a href="https://drive.google.com/file/d/1ENYIPW1O1kvYbQr2z8Y48yzk0Ma1k5s0/view?usp=sharing "><h5>QuestionPaper2016</h5></a>'+
							 '<a href="https://drive.google.com/file/d/1XQPOWSpN_Qw8X8P1IiEarw98n6ymQ8CO/view?usp=sharing "><h5>AnswerKey2016</h5></a>'
							 +'<a href=" https://drive.google.com/file/d/1ZzAQwASggKQsiuWP-X8rQjysVNNgkPXO/view?usp=sharing "><h5>QuestionPaper2017</h5></a>'+
							 '<a href="https://drive.google.com/file/d/16C5mcH7izCwF9U_oa9Ay1lj8ntbOcPVj/view?usp=sharing  "><h5>AnswerKey2017</h5></a>'+
							 '<a href="https://drive.google.com/file/d/1aPsREivDIp44_Jg_LTnBCk6Z--0rVI2h/view?usp=sharing "><h5>QuestionPaper2018</h5></a>'+
							 '<a href="https://drive.google.com/file/d/1Fjb1HNs1qaWJqMe4t35-Ly3rCSBsA4zO/view?usp=sharing  "><h5>AnswerKey2018</h5></a>'+'</div>'
							 document.getElementById("side").innerHTML = codeBlock
							}
						   </script>
						</div>
						<!--end of CSir-->
						<div class="tab-pane fade" id="tab6primary">Primary 6</div>
						<div class="tab-pane fade" id="tab7primary">Primary 7</div>
						<div class="tab-pane fade" id="tab8primary">Primary 8</div>
						
						<!-- iit main and advances-->
						  <div class="tab-pane fade" id="iit">
						      <center><h3>List of content that you should read for iit and their lecture</h3></center>
						       <hr>
						      <div class="row">
							      <div class="col-sm-4" id="ttt">
								   <ul>
									<li><h2>11<sup>th</sup></h2>
								      <ul>
									  <li>Sets</li>
									  <li>Relation and Function</li>
									  <li>Trigonometric Function</li>
									  <li>Principal of Mathamatical Induction</li>
									  <li>Complex Numbers and Quadratic Equation</li>
									  <li>Linear Inequalities</li>
									  <li>Permutation and Combination</li>
									  <li>Binomial Theorem</li>
									  <li>Sequences and Series</li>
									  <li>Straight Line</li>
									  <li>Conic Section</li>
									  <li>Introduction to Three Dimension Geomerty</li>
									  <li>Limits and Derivatives</li>
									  <li>Mathamatical Reasoning</li>
									  <li>Probability</li>
									  </ul>
									</li>
									<hr>
									<li><h2>12<sup>th</sup></h2>
								      <ul>
									  <li>Relation and Function</li>
									  <li>Invers Trigonometric Function</li>
									  <li>Matrices</li>
									  <li>Determinants</li>
									  <li>Continuity And Differentiability</li>
									  <li>Application of Derivatives</li>
									  <li>Integral</li>
									  <li>Application of Integral</li>
									  <li>Differential equation</li>
									  <li>Vectors</li>
									  <li>Three Dimension Geometry</li>
									  <li>Linear programming</li>
									  <li>Probability</li>
									  </ul>
									</li>
									
                              </ul>
								  </div>
								  <div class="col-sm-8">
								      <iframe width="710" height="360" src="https://www.youtube.com/embed/7f-DL-E_Aoc?list=PLAVdEWUVpPAhdau-ETlquiCCtnCa6HiyT" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
									  <hr>
                                      <button type="button" class="btn btn-primary btn-lg btn-block"><a href="https://unacademy.com/user/anil_kumar" style="color:black;text-size:bold">Click here for more videos</a></button>
                                      <button type="button" class="btn btn-primary btn-lg btn-block"><a href="https://www.youtube.com/channel/UCgKEzKfv1wdMx6Hd3rnG9Aw" style="color:black;text-size:bold">Suscribe Anil_Tutorial On youtube</a></button>
								  </div>
								  
								  
								  
							  </div>
						  
						  
						  </div>
						<!-- iit end-->
						
						<!-- here is the starting of iit jam--->
						<div class="tab-pane fade" id="iitjam">
						    <center><h3>List of content that you should read for IIT-JAM/NBHM/TIFR and their lecture</h3></center>
						       <hr>
							  <div class="row">
							      <div class="col-sm-3" id="ttt">
								    <ul>
										<li>Linear Algebra</li>
										<li>Real Analysis</li>
										<li>Sequences & Series of Real Variable</li>
										<li>Abstract Algebra</li>
										<li>Integral Calculus</li>
										<li>Vector Calculus</li>
										<li>Differential Equation</li>
										<li>Function of One Variable</li>
										<li>Function of Several Variable</li>
								    </ul>
                                  </div>
								  <div class="col-sm-9">
								     <iframe  src="https://www.youtube.com/embed/x99ydWmXbAM?list=PLAVdEWUVpPAhPVLG8oXSPWLpW3rwSWxT7" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                     <iframe  src="https://www.youtube.com/embed/2kcf6gDLSM4?list=PLAVdEWUVpPAgyvvNwHDTfHVhGHCU5Swb2" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                     <iframe  src="https://www.youtube.com/embed/VYa3sJKXVIU?list=PLAVdEWUVpPAiCzAyafuuMtlpw2ouAKMhf" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
									 <iframe  src="https://www.youtube.com/embed/1MVdTZk6hIE?list=PLAVdEWUVpPAj8yrRDJXiAk1pHf4KrJqvl" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
								     <hr>
									 <button type="button" class="btn btn-primary btn-lg btn-block"><a href="https://www.youtube.com/channel/UCgKEzKfv1wdMx6Hd3rnG9Aw" style="color:black;text-size:bold">Suscribe Anil_Tutorial On youtube</a></button>
								 </div>
								  
                              </div>   							  
						</div>
						
						<!--end of iit jam-->
						<!-- starting of Gate -->
						
						<div class="tab-pane fade" id="Gate">
						   <center><h3>List of content that you should read for CSIR-NET/GATE and their lecture</h3></center>
						   <hr>
						   <div class="row">
						       <div class="col-sm-3" id="ttt">
							       <ul>
										<li>Linear Algebra</li>
										<li>Real Analysis</li>
										<li>Complex Analysis</li>
										<li>Ordinary Differential Equation</li>
										<li>Partial Differential Equation</li>
										<li>Numerical Analysis</li>
										<li>Calculus of variation</li>
										<li>Integral Equation</li>
										<li>Linear programming problem</li>
								    </ul>
                       
							   </div>
							   <div class="col-sm-9">
							        <iframe  src="https://www.youtube.com/embed/VYa3sJKXVIU?list=PLAVdEWUVpPAiCzAyafuuMtlpw2ouAKMhf" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							        <iframe  src="https://www.youtube.com/embed/DLzbZyr_cc4?list=PLAVdEWUVpPAhQ4zcQ7s3KVP7VYPysZms0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							        <iframe  height="400"width="600" src="https://www.youtube.com/embed/cE_-p1d4Adw?list=PLAVdEWUVpPAggHXDpPPkkpNUqfUNZo5te" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							   <hr>
									 <button type="button" class="btn btn-primary btn-lg btn-block"><a href="https://www.youtube.com/channel/UCgKEzKfv1wdMx6Hd3rnG9Aw" style="color:black;text-size:bold">Suscribe Anil_Tutorial On youtube</a></button>
						
							  </div>
						   </div>
						</div> 
						
						
						<!--ending of gate-->
						
						<!--Starting of B.tech-->
						
						<div class="tab-pane fade" id="tech">
						<center><h3>List of content that you should read for B.TECH and their lecture</h3></center><hr>
						    <div class="row">
							   <div class="col-sm-3" id="ttt">
							        <ul>
										<li>Engineering Mathamatics-1</li>
										<li>Engineering Mathamatics-2</li>
										<li>Engineering Mathamatics-3</li>
								    </ul>
							   </div>
							   <div class="col-sm-9">
							      <iframe  src="https://www.youtube.com/embed/efn4Ha6irZk?list=PLAVdEWUVpPAh4QK0tOzKa0CQ-Pr4UJ_TB" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							      <iframe  src="https://www.youtube.com/embed/VYa3sJKXVIU?list=PLAVdEWUVpPAi5kqJIrGttFiPy4X6O5Goo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							      <iframe  src="https://www.youtube.com/embed/dmjHvyYpF-E?list=PLAVdEWUVpPAiaQQKkEYqtM8iUR_MUhy-5" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
   								  <iframe  src="https://www.youtube.com/embed/VYa3sJKXVIU?list=PLAVdEWUVpPAiCzAyafuuMtlpw2ouAKMhf" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							    <hr>
									 <button type="button" class="btn btn-primary btn-lg btn-block"><a href="https://www.youtube.com/channel/UCgKEzKfv1wdMx6Hd3rnG9Aw" style="color:black;text-size:bold">Suscribe Anil_Tutorial On youtube</a></button>
						
							  </div>
						    </div>
						
						</div>
						<!--ending of B.tech -->
						<div class="tab-pane fade" id="eletwe"><center><h4>Coming Soon</h4></center></div>
						
						<!--for quiz system-->
						<div class="tab-pane fade" id="test">
						 <center><button type="button" class="btn btn-primary" data-toggle="tab" href="#select" >Start Quiz</button></center>
                        
						<div class="col-sm-4"></div>
	   <div class="col-sm-4"><br>
	   <div id="select" class="tab-pane fade">

		 <form  method="post" action="qus_show.php">
		  <select class="form-control" id="" name="cat">
		  <option>select category</option>
		   <?php	
          		   
		  foreach($profile->cat as $category)
		  {  ?>			  			
			<option value="<?php echo $category['id'];?>"><?php echo $category['cat_name'];?></option>
			<?php   }?>
		  </select><br>
		   <center><input type="submit" value="submit" class="btn btn-primary"/></center>
		</form>
	  </div>
	  </div>
	  <div class="col-sm-4"></div>
						
						</div>
						
						<!-- quiz will end here>
						
						<!------for contect us page-->
						
						
						<div class="tab-pane fade" id="contect">
						
						<!--<div class="container">-->

    <form class="well form-horizontal" action=" " method="post"  id="contact_form">
<fieldset>

<!-- Form Name -->
<legend>Contact Us Today!</legend>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">Name</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="first_name" placeholder="First Name" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Father Name</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="last_name" placeholder="Last Name" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Text input-->
       <div class="form-group">
  <label class="col-md-4 control-label">E-Mail</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input name="email" placeholder="E-Mail Address" class="form-control"  type="text">
    </div>
  </div>
</div>
<!----couse select-->
<div class="form-group"> 
  <label class="col-md-4 control-label">Course</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="state" class="form-control selectpicker" >
      <option value=" " >Please select your course</option>
      <option>A</option>
      <option>B</option>
	  <option>B</option>
	  <option>B</option>
	  <option>B</option>
	  <option>B</option>
	  <option>B</option>
	  <option>B</option>
	  <option>B</option>
	  <option>B</option>
	  <option>B</option>
      
    </select>
  </div>
</div>
</div>


<!-- Text input-->
       
<div class="form-group">
  <label class="col-md-4 control-label">Phone #</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
  <input name="phone" placeholder="+91 9694570677" class="form-control" type="text">
    </div>
  </div>
</div>

<!-- Text input-->
      
<div class="form-group">
  <label class="col-md-4 control-label">Address</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="address" placeholder="Address" class="form-control" type="text">
    </div>
  </div>
</div>

<!-- Text input-->
 
<div class="form-group">
  <label class="col-md-4 control-label">City</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="city" placeholder="city" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Select Basic -->
   
<div class="form-group"> 
  <label class="col-md-4 control-label">State</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="state" class="form-control selectpicker" >
      <option value=" " >Please select your state</option>
      <option>A</option>
      <option>B</option>
	  <option>B</option>
	  <option>B</option>
	  <option>B</option>
	  <option>B</option>
	  <option>B</option>
	  <option>B</option>
	  <option>B</option>
	  <option>B</option>
	  <option>B</option>
      
    </select>
  </div>
</div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">pin Code</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="zip" placeholder="Zip Code" class="form-control"  type="text">
    </div>
</div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">Query</label>
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
        	<textarea class="form-control" name="comment" placeholder="Your suggestion or feedback or any question"></textarea>
  </div>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
    <button type="submit" class="btn btn-warning" >Send <span class="glyphicon glyphicon-send"></span></button>
  </div>
</div>

</fieldset>
</form>
</div>
 <!--   </div> /.container -->

						
						
						
						
						
						</div>
						
						
						
                    </div>
                </div>
				   
				   
				</div>
			
		 </div>
	
	
	
	
	</div>

</div>

</body>
</html>
