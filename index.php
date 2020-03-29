<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php include 'link/link.php'; ?>
<?php include 'css/style.php'; ?>	
<?php require 'save.php'; ?>
<nav class="navbar navbar-expand-lg  nav_style p-4 "  >
  <a class="navbar-brand pl-5" href="#">COVID-19</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pl-5">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#aboutid">About </a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#sympid">Symptoms </a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#preventid">Prevention </a>
      </li>
       <li class="nav-item">
       	<a class="nav-link" href="#contactid">Contact</a>
    </ul>

    
  </div>
</nav>

    		<div class="main_header">
    			<div class="row w-100 h-100">
    				<div class="col-lg-5  col-md-5 col-12 order-lg-1 order-2">
    					<div class="leftside w-100 h-100 d-flex justify-content-center align-items-center pt-3">
    						<img src="images/unity1.jpeg" width="300" height="300">
    					</div>
    				</div>
    				<div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1">
    					<div class="rightside w-100 h-100 d-flex justify-content-center align-items-center pt-3 ">
    						<h1>Let's Stay Safe & Fight Together Against Cor<span class="corona_rot" ><img src="images/co19.jpeg" ></span>na virus</h1>
    					</div>
    				</div>

			</div>

			<!-- ********************* corona latest Update ********************* -->

			<section class="corona_update">
				<div class="mb-3">
					<h3 class="text-uppercase text-center">COVID-19 UPDATES</h3>		
 				</div>	

 				<div class="d-flex justify-content-around align-items-center count_style">
 						<div>	
 								<h1 class="count">150000</h1>
 								<p>Passenger screened at airport</p>
 						</div>
 						<div>	
 								<h1 class="count">753</h1>
 								<p>Active COVID-19 Cases *</p>
 						</div>
 						<div>	
 								<h1 class="count">40</h1>
 								<p>cured/discharged cases</p>
 						</div>
 						<div>	
 								<h1 class="count">67</h1>
 								<p>Death Cases</p>
 						</div>
 					</div>	
				</section>

				<!-- ****************** about Section ********************** -->

				<div class="container-fluid sub_section pt-5  pb-5 " id="aboutid">
					<div class="section_header text-center mb-5 mt-4">
						<h1>About COVID-19</h1>
					</div>

					 <div class="row pt-5" >
				 		<div class="col-lg-5 col-md-6 col-12 ml-5" >	
				 			<img src="images/chain.gif" class="img-fluid">	
						</div>

						<div class="col-lg-6 col-md-6 col-12">	
							<h2>What is COVID-19 (Corona-Virus)	</h2>
							<p>Coronavirus disease (COVID-19) is an infectious disease caused by a new virus.
                               The disease causes respiratory illness (like the flu) with symptoms such as a cough, fever, and in more severe cases, difficulty breathing. You can protect yourself by washing your hands frequently, avoiding touching your face, and avoiding close contact (1 meter or 3 feet) with people who are unwell.</p>

							<p>Coronavirus disease spreads primarily through contact with an infected person when they cough or sneeze. It also spreads when a person touches a surface or object that has the virus on it, then touches their eyes, nose, or mouth.	</p>
						</div>
				 	</div>

				 </div>

				 <!-- ****************** corona symptoms ********************** -->

				 <div class="container-fluid  pt-5  pb-5 " id="sympid">
					<div class="section_header text-center mb-5 mt-4">
						<h1>Coronavirus Symptoms</h1>
					</div>

					<div class="container">
						<div class="row">
							<div class="col-lg-4 col-md-4 col-12 mt-5 ">
								<figure class="text-center">
								<img src="images/cough.jpeg" class="img-fluid bg-info" width="120" height="120"	>
								<figcaption>cough</figcaption>
								</figure>
							</div>
							<div class="col-lg-4 col-md-4 col-12 mt-5 ">
								<figure class="text-center">
								<img src="images/cold1.jpeg" class="img-fluid bg-info" width="120" height="120"	>
								<figcaption>cold</figcaption>
								</figure>
							</div>
							<div class="col-lg-4 col-md-4 col-12  mt-5">
								<figure class="text-center">
								<img src="images/fever.jpg" class="img-fluid bg-info" width="120" height="120"	>
								<figcaption>Fever</figcaption>
								</figure>
							</div>
							<div class="col-lg-4 col-md-4 col-12  mt-5">
								<figure class="text-center">
								<img src="images/tired.jpeg" class="img-fluid bg-info" width="120" height="120"	>
								<figcaption>TriedNess </figcaption>
								</figure>
							</div>
							<div class="col-lg-4 col-md-4 col-12  mt-5">
								<figure class="text-center">
								<img src="images/br1.jpeg" class="img-fluid bg-info" width="120" height="120"	>
								<figcaption>Diffculty breathing (Severe case)</figcaption>
								</figure>
							</div>
							<div class="col-lg-4 col-md-4 col-12  mt-5">
								<figure class="text-center">
								<img src="images/run.jpeg" class="img-fluid bg-info" width="120" height="120"	>
								<figcaption>Running Noise</figcaption>
								</figure>
							</div>
						</div>
					</div>


					<!-- ****************** Preventions Against Coronavirus ********************** -->

				<div class="container-fluid sub_section pt-5  pb-5 " id="preventid">
					<div class="section_header text-center mb-5 mt-4">
						<h1>6 Steps Preventions Against Coronavirus </h1>
					</div>

					<div class="container">
						<div class="row">
							<div class="col-lg-4 col-md-4 col-12 mt-5">
								<div class="row">
									<div class="col-lg-4 col-md-4 col-12 mt-5 ">
									<figure class="text-center">
								    <img src="images/soap.jpeg" class="img-fluid" width="90" height="90"	>
								    <!-- <figcaption>cough</figcaption> -->
								    </figure>
									</div>

									<div class="col-lg-8 col-md-8 col-12 mt-5" >
										<p>	Wash your hands regular for 20 seconds, with soap and water or alcohol-based hand rub </p>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-12 mt-5 ">
								<div class="row">
									<div class="col-lg-4 col-md-4 col-12 mt-5 ">
									<figure class="text-center">
								    <img src="images/mask.jpeg" class="img-fluid" width="90" height="90"	>
								    <!-- <figcaption>cough</figcaption> -->
								    </figure>
									</div>

									<div class="col-lg-8 col-md-8 col-12 mt-5" >
										<p>	Cover your nose and mouth with a disposable tissue or flexed elbow when you cough or sneeze</p>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-12 mt-5 ">
								<div class="row">
									<div class="col-lg-4 col-md-4 col-12 mt-5 ">
									<figure class="text-center">
								    <img src="images/3ft.jpeg" class="img-fluid" width="90" height="90"	>
								    <!-- <figcaption>cough</figcaption> -->
								    </figure>
									</div>

									<div class="col-lg-8 col-md-8 col-12 mt-5" >
										<p>Avoid Close contact(1 meter or 3 feet) with people who are unwell </p>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-12 mt-5 ">
								<div class="row">
									<div class="col-lg-4 col-md-4 col-12 mt-5 ">
									<figure class="text-center">
								    <img src="images/home.jpeg" class="img-fluid" width="90" height="90"	>
								    <!-- <figcaption>cough</figcaption> -->
								    </figure>
									</div>

									<div class="col-lg-8 col-md-8 col-12 mt-5" >
										<p>	Stay home and self-isolate from other in the household if you feel unwell </p>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-12 mt-5 ">
								<div class="row">
									<div class="col-lg-4 col-md-4 col-12 mt-5 ">
									<figure class="text-center">
								    <img src="images/news.jpeg" class="img-fluid" width="90" height="90"	>
								    <!-- <figcaption>cough</figcaption> -->
								    </figure>
									</div>

									<div class="col-lg-8 col-md-8 col-12 mt-5" >
										<p>	Stay connected to news & follow the instruction given by government </p>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-12 mt-5 ">
								<div class="row">
									<div class="col-lg-4 col-md-4 col-12 mt-5 ">
									<figure class="text-center">
								    <img src="images/info.jpeg" class="img-fluid" width="90" height="90"	>
								    <!-- <figcaption>cough</figcaption> -->
								    </figure>
									</div>

									<div class="col-lg-8 col-md-8 col-12 mt-5" >
										<p>	if you have fever.cough and difficulty breathing. seek medical care early </p>
									</div>
								</div>
							</div>
					</div>
				</div>
			</div>
							<!-- ****************** Contact Us ASAP ********************** -->

		<div class="container-fluid  pt-5  pb-5 " id="contactid">
					<div class="section_header text-center mb-5 mt-4">
						<h1>Contact Us ASAP </h1>
					</div>

					<div class="container">
						<div class="row">
							<div class="col-lg-8 offset-lg-2 col-12 mt-5 ">
								<form action="/corono_go/save.php" method="Post">
  										<div class="form-group">
    										<label>Username</label>
    										<input type="Text" 
    										class="form-control" 
    										name="username"
    										placeholder="Username"
    										autocomplete="off"
    										required="Username">
  										</div>

  										<div class="form-group">
    										<label for="exampleFormControlInput1">Email address</label>
    										<input type="email" 
    										class="form-control" 
    										name="email" 
    										placeholder="name@example.com"
    										autocomplete="off"
    										required="email">
  										</div>

  										<div class="form-group">
    										<label>Mobile Number</label>
    										<input type="number" 
    										class="form-control" 
    										name="mobile"
    										placeholder="Mobile"
    										autocomplete="off"
    										required="Mobile">
  										</div>

  										<div>
  											<label>Select Symptoms</label>
  										</div>
  											
  										

  										<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
  										<input type="checkbox" 
  										class="custom-control-input"
  										id="customcheckbox1" 
  										name="coronasym[]"
  										value="fever">
  										<label class="custom-control-label" for="customcheckbox1">
  										Fever	
  										</label>
  									    </div>

  									    <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
  										<input type="checkbox" 
  										class="custom-control-input"
  										id="customcheckbox2" 
  										name="coronasym[]"
  										value="cold">
  										<label class="custom-control-label" for="customcheckbox2">
  										Cold	
  										</label>
  									    </div>

  									    <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
  										<input type="checkbox" 
  										class="custom-control-input"
  										id="customcheckbox3" 
  										name="coronasym[]"
  										value="Diffculty in breath">
  										<label class="custom-control-label" for="customcheckbox3">
  										Diffculty in breath	
  										</label>
  									    </div>

  									    <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
  										<input type="checkbox" 
  										class="custom-control-input"
  										id="customcheckbox4" 
  										name="coronasym[]"
  										value="Feeling Weak">
  										<label class="custom-control-label" for="customcheckbox4">
  										Feeling Weak
  									    </label>
  									    </div>



  
  										<div class="form-group mt-3">
    										<label for="exampleFormControlTextarea1">Describe How You are Feeling</label>
    										<textarea class="form-control" 
    										name="message" 
    										rows="3">
    										</textarea>
  										</div>

  										<button type="submit" class="btn btn-success "name="submit">Submit</button>
										<button type="Reset" class="btn btn-danger">Reset</button>
								</form>
	  						</div>
						</div>
					</div>		
				</div>

				<!-- ///////////////////top cursor///////////////////// -->
				<div class="container scrolltop float-right pr-5">
					<i class="fa fa-arrow-up" aria-hidden="true" onclick="topFunction()" id="myBtn"></i>
				</div>


				<!-- /////////////footer////////////////////// -->

				<footer class="mt-5 " >
				 <div class="footer_style text-black text-center container-fluid mb-0">
				    <p>	Copyright@ Anil Gawade</p>
				</div>
				</footer>

</body>

<script type="text/javascript">

	$('.count').counterUp({
		delay: 10,

		time:3000
	});



	mybutton = document.getElementById("myBtn");
	//when the user scroll down 20px from the top of the document ,show the button

	window.onsrcoll = function(){scrollfunction()};

	function scrollfunction (){
		if(document.body.scrolltop > 100 || document.documentElement.scrolltop > 100 ){
			mybutton.style.display ="block";
		    }
		     else
			{
				mybutton.style.display="none"
			}
		    	}

		    //when the user clicks on the button, scroll to the top of the Document

		    function topFunction(){
		    	document.body.scrolltop=0; 
		    	document.documentElement.scrolltop=0;
		    }
</script>
</html>




