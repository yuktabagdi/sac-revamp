	<?php
	session_start();
	if(isset($_POST['submit']))
	{
	$email = $_POST["email"];
	$name = $_POST["name"];
	$address = $_POST["address"];
	$city = $_POST["city"];
	$state = $_POST["state"];
	$country = $_POST["country"];
	$zipCode = $_POST["zipCode"];
	$mobile = $_POST["mobile"];
	$dob = $_POST["dob"];
	$marital = $_POST["marital"];
	$industry = $_POST["industry"];
	$profession = $_POST["profession"];
	$orgName = $_POST["orgName"];
	$designation = $_POST["designation"];
	$work_city = $_POST["work_city"];
	$work_state = $_POST["work_state"];
	$work_country = $_POST["work_country"];
	$work_zipCode = $_POST["work_zipCode"];
	$work_address = $_POST["work_address"];
	$rollNum = $_POST["rollNum"];
	$joinYear = $_POST["joinYear"];
	$degree = $_POST["degree"];
	$department = $_POST["department"];
	$hall = $_POST["hall"];
	$graduatingYear = $_POST["graduatingYear"];
	$accompanyingNo = $_POST["accompanyingNo"];
	date_default_timezone_set('Asia/Kolkata');
	$time=date("Y-m-d H:i:s");

	include 'database.inc.php';

	if($email != "" && $password != "" && $orgName != "" && $designation != "" && $department != "" && $degree != "" && $hall !="")
	{
	$sql = "INSERT INTO Homecoming (email,Time, name, password, address, city, state, country, zipCode, mobile, dob, marital, industry, profession, orgName, designation, work_city, work_state, work_country, work_zipCode, work_address, rollNum, joinYear, degree, department, hall, graduatingYear, accompanyingNo,hobbies,involvements)
			VALUES ('$email','$time', '$name', '$password', '$address', '$city', '$state', '$country', '$zipCode', '$mobile', '$dob', '$marital', '$industry', '$profession', '$orgName', '$designation', '$work_city', '$work_state', '$work_country', '$work_zipCode', '$work_address', '$rollNum', '$joinYear', '$degree', '$department', '$hall', '$graduatingYear', '$accompanyingNo','$hobbies', '$involvements')";
	$_SESSION["email"] = $email;
	$query_run = mysqli_query($connect, $sql);
	if($query_run){
		echo '<script type="text/javascript">alert("Congratulations... You are Successfully Registered")</script>';
	}
	else{
		echo '<script type="text/javascript">alert("There is an error... Please Try Again")</script>';
	}
	}
	}
	?>
	<!DOCTYPE html>
	<html lang="en">

	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<title>SAC</title>
	<link rel="stylesheet" type="text/css" href="css/homecoming.css">
	<link href="https://fonts.googleapis.com/css2?family=Encode+Sans+Expanded:wght@200&display=swap" rel="stylesheet">
	</head>
	<body>
	<section class="section-1">
		<?php include'navbar.php' ?>
		<header>
		<div class="container-fluid img">
		</div>
		</header>
	</section>
		
		<section class="section-2 pt-0" style="padding-bottom:10rem;">
		<div class="container-fluid" style="padding:0 9rem;">
			<div class="row">
				<div class="col-md-7">
					<h1 class="one">ABOUT US</h1>
					<div class="row">
						<div class="col-md-10 justify-content-left">
							<p class="pt-3 x">
							We live our day to day lives oblivious to the beauty that surrounds us and by the time we do realise what
							exactly it is that we've been blessed with, it's generally too late. However when the good ol' days call
							yet again, nostalgia surrounds us as we walk the hallowed boulevards of our youth. The Annual Alumni Meet 
							brings to our alumni a chance to reconnect with their Alma Mater. It lets them relive the carefree days of 
							their college lives as they get a chance to visit all the locations they once frequented.
							</p>
							<div>
								<button type="button" name="login" id="login" class="btn" data-toggle="modal" data-target="#loginModal" >REGISTER </button>
								<div id="loginModal" class="modal fade" role="dialog" style="padding-left:5%;">
								<div class="modal-dialog modal-dialog-centered" style="min-width:400px;">
								<!-- Modal content-->
								<div class="modal-content">
										<div class="body">
										<div class="modal-header">
												<h3 class="modal-title">Join with Us</h3>
												<button  type="button" class="close" data-dismiss="modal">&times;</button>

										</div>
										<div class="modal-body">
										<form class="text-dark" style="opacity: 1;" id="form1" method="POST">

										<div class="form-group">
											<label for="FirstName">Name</label>
											<input type="text" class="form-control" id="FirstName" aria-describedby="FirstName" required>
										</div>

										<div class="form-row">
											<div class="form-group col-md-6">
												<label for="email">Email ID <span style="color:red;">*</span></label>
												<input class="form-control"  type="email"  name="email" id="email" required>
											</div>
											<div class="form-group col-md-6">
											<label for="password">Password (For future login) <span style="color:red;">*</span></label>
												<input  type="password" id="password" name="password" class="form-control" required>  	
											</div>
										</div>

										<div class="form-group">
											<label for="inputAddress">Address</label>
											<input type="text" class="form-control" id="inputAddress" required>
										</div>
										<div class="form-row">
											<div class="form-group col-md-4">
											<label for="inputCity">City</label>
											<input type="text" class="form-control" id="inputCity" required>
											</div>
											<div class="form-group col-md-4">
											<label for="inputState">State</label>
											<input type="text" class="form-control" id="personal_state" name="state" >
											</div>
											<div class="form-group col-md-4">
											<label for="inputZip">Zip Code</label>
											<input type="text" class="form-control" id="inputZip" required>
											</div>
										</div>

										<div class="form-group">
										<label for="mobile">Mobile <span style="color:red;">*</span></label>
										<input  type="text"  class="form-control"  name="mobile" id="mobile" required>
										
										</div>

										<div class="form-row">
											<div class="form-group col-md-6">
											<label for="dob">Date of Birth</label>
											<input type="date" class="form-control" id="dob" placeholder="dob">
											</div>
											<div class="form-group col-md-6">
											<label for="marital">Marital Status</label>
											<div class="btn-group btn-group-toggle" data-toggle="buttons" id="Gender">
												<label class="btn btn-secondary form-control" for="male">
												<input type="radio" name="male" id="male"> Single
												</label>
												<label class="btn btn-secondary form-control" for="female">
												<input type="radio" name="female" id="female"> Married
												</label>
												<label class="btn btn-secondary form-control" for="others">
												<input type="radio" name="others" id="others"> Others
												</label>
											</div>
											</div>
										</div>
										<hr class="center">
										<div class="row" class="pl-3">
										<h3 class="pl-3">Work Experience</h3>
										</div>
										<hr class="center">
										<div class="form-row">
											<div class="form-group col-md-6">
											<label for="ind">Industry </label>
											<input  class="form-control" type="text" id="ind" name="industry"  >
											</div>
											<div class="form-group col-md-6">
											<label for="prof">Profession </label> 
											<input class="form-control" type="text" id="prof" name="profession" >	
											</div>
										</div>
										<div class="form-row">
											<div class="form-group col-md-6">
											<label for="org">Organisation Name <span style="color:red;">*</span></label>
											<input  class="form-control" type="text" id="org" name="orgName" required>
											</div>
											<div class="form-group col-md-6">
											<label for="desig">Designation <span style="color:red;">*</span></label> 
											<input  class="form-control" type="text" id="desig" name="designation" required>	
											</div>
										</div>
										
										<div class="form-group">
											<label for="inputAddress">Address</label>
											<input type="text" class="form-control" id="inputAddress" required>
										</div>
										<div class="form-row">
											<div class="form-group col-md-4">
											<label for="inputCity">City</label>
											<input type="text" class="form-control" id="inputCity" required>
											</div>
											<div class="form-group col-md-4">
											<label for="inputState">State</label>
											<input type="text" class="form-control" id="personal_state" name="state" >
											</div>
											<div class="form-group col-md-4">
											<label for="inputZip">Zip Code</label>
											<input type="text" class="form-control" id="inputZip" required>
											</div>
										</div>
										<hr class="center">	
										<div class="row" class="pl-3">
										<h3 class="pl-3">Nostalgic Section</h3>
										</div>	
										<hr class="center">
										<div class="form-group">
												<label for="roll">Roll Number</label>
												<input  type="text" class="form-control" id="roll" name="rollNum">
										</div>
										<div class="form-row">
											<div class="form-group col-md-4">
											<label for="degree">Degree <span style="color:red;">*</span></label>
											<input  type="text" class="form-control" id="degree" name="degree" required>
											
											</div>
											<div class="form-group col-md-4">
											<label for="dept">Department <span style="color:red;">*</span></label>	
											<input  type="text" class="form-control" id="dept" name="department" required>
											</div>
											<div class="form-group col-md-4">
											<label for="hall">Hall <span style="color:red;">*</span></label>	
											<input  type="text" class="form-control"  id="hall" name="hall" required>
											</div>
										</div>
										<div class="form-row">
											<div class="form-group col-md-6">
											<label for="join">Join Year <span style="color:red;">*</span></label>
											<input  type="number" min="1951" class="form-control" max="2007" id="join" name="joinYear" required>
											</div>
											<div class="form-group col-md-6">
											<label for="yog">Year of Graduating <span style="color:red;">*</span></label>
											<input  type="number" min="1955" class="form-control" max="2010" id="yog" name="graduatingYear"  required>               	
											</div>
										</div>
										<div class="form-row">
											<div class="form-group col-md-6">
												<label for="accompanyingNo">Accompaniments(Number of guests)<span style="color:red;">*</span></label>  
												<input  type="number" min="0" id="accompanyingNo" class="form-control" name="accompanyingNo" required> 
											</div>
											<div class="form-group col-md-6">
											<label for="yog">Hobbies</label>  
											<input  type="text" id="hobbies" class="form-control" name="hobbies">         	
											</div>
										</div>
										<div class="form-row">
											<label for="yog">Involvements (Societies, Hall Events, etc) </label>
											<input  type="text" id="involvements" class="form-control" name="involvements">	
											</div>
										</div>
										<div class="pl-3">
										<p class="btn btn-secondary" type="submit" name="submit">Register</p>
										</div>
										</form>
										</div>
										</div>
									</div>     
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-5">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="col-md-10 col-12 trailer" style="padding-top:3.5rem; padding-bottom:15rem;">
							<div class="first"></div>
							<div class="second"></div>
							<div class="third">
								<img src="img/homecoming/group2.jpg" class="img-2 x">
	</div>							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</section> 
	<section class="section-3 pt-3">
		<div class="container-fluid p-0">
		<div style="padding:0 3rem;">
			<div class="row">
				<div class="col-md-3 d-flex justify-content-center">
					<h1 class="gallery-h3 pt-5">GRAND REUNION</h1>
				</div>		
				<div class="col-md-9">
				<div class="container">
				<div class="row d-flex justify-content-center">
				<div class="col-md-8 x">
						<div class="image">
						<img src="img/homecoming/netaji2.jpg" class="img-fluid image__img">
						<div class="image__overlay image__overlay--primary text-center">
						</div></div>
					</div>			
				<div class="col-md-4 x">
							<div class="image">
						<img  src="img/homecoming/award1.jpg" class="img-fluid image__img">
						<div class="image__overlay image__overlay--primary">
								<div class="image__title"></div>
								<p class="image__description"></p>	
					</div></div>
					<div class="image pt-3">
						<img  src="img/homecoming/award2.jpg" class="img-fluid image__img">
						<div class="image__overlay image__overlay--primary">
								<div class="image__title"></div>
								<p class="image__description"></p>	
					</div></div>					</div>
				</div>
				</div>
		</div>
		</div>
		</div>
		</div>
	</section>
	<section class="section-3 pt-3">
		<div class="container-fluid p-0">
		<div style="padding:0 3rem;">
			<div class="row">
				<div class="col-md-3 d-flex justify-content-center">
					<h1 class="gallery-h3 pt-5">Musical Night</h1>
				</div>		
				<div class="col-md-9">
				<div class="container">
				<div class="row d-flex justify-content-center">
				<div class="col-md-3 x pr-0 pt-2">			
					<div class="image pt-3 pb-3">
						<img  src="img/homecoming/gala2.jpg" class="img-fluid image__img">
						<div class="image__overlay image__overlay--primary text-center">
								<div class="image__title">Gala Dinner</div>
								<p class="image__description"></p>	
					</div></div>
						<div class="image pt-3 pb-3">
						<img  src="img/homecoming/gala4.jpg" class="img-fluid image__img"><div class="image__overlay image__overlay--primary">
								<div class="image__title">Gala Dinner</div>
								<p class="image__description"></p>	
					</div></div>			
				</div>
				<div class="col-md-9 x pl-1">
					<div class="image">
						<img  src="img/homecoming/collage_homecoming.jpg" class="img-fluid image__img">
						<div class="image__overlay image__overlay--primary text-center">
								<div class="image__title">Musical Night</div>
								<p class="image__description">Taking a trip back to memory lane, Students' alumni cell presented Eastern Technology Music Society that took our alumni back, straight to 
								their KGP days as they sang with us just like they used to do it in their college days.</p>	
					</div></div>
				</div>
				</div>
				</div>
		</div>
		</div>
		</div>
		</div>
	</section>


	<section class="section-3 pt-3">
		<div class="container-fluid p-0">
		<div style="padding:0 3rem;">
			<div class="row">
				<div class="col-md-3 d-flex justify-content-center">
					<h1 class="gallery-h3 pt-5">Campus Tour</h1>
				</div>		
				<div class="col-md-9">
				<div class="container">
				<div class="row d-flex justify-content-center">
				<div class="col-md-4 x align-items-center">
						
					<div class="image">
						<img  src="img/homecoming/group1.jpg" class="img-fluid image__img">
						<div class="image__overlay image__overlay--primary text-center">
								<div class="image__title">Campus Tour</div>
								<p class="image__description">Campus Tour is our way of showing the 2200 acre campus in a nutshell and highlighting all the major developments around.
	</p>	
					</div></div>
					<div class="image pt-3">

						<img  src="img/homecoming/campus_tour.jpg" class="img-fluid image__img">
						<div class="image__overlay image__overlay--primary text-center">
								<div class="image__title">Campus Tour</div>
								<p class="image__description">Remember the place where we took our first picture in the campus</p>	
					</div></div>
					
				</div>
				<div class="col-md-8 x">
					<div class="image">
						<img src="img/homecoming/group2.jpg" class="img-fluid image__img">
						<div class="image__overlay image__overlay--primary text-center">
								<div class="image__title">Campus Tour</div>
								<p class="image__description">In the progressive world we live in, there are a lot of changes and yet a lot of constants and it’s a pleasure to see the 
								newer developments in harmony with the same old roads.</p>	
					</div></div>
				</div>
				</div>
				</div>
		</div>
		</div>
		</div>
		</div>
	</section>
	<section class="section-3 pt-3">
		<div class="container-fluid p-0">
		<div style="padding:0 3rem;">
			<div class="row">
				<div class="col-md-3 d-flex justify-content-center">
					<h1 class="gallery-h3 pt-5">Department Visit</h1>
				</div>		
				<div class="col-md-9">
				<div class="container">
				<div class="row d-flex justify-content-center">
				<div class="col-md-6 x align-items-center">
						<div class="image">
						<img  src="img/homecoming/dept4.jpg" class="img-fluid image__img">
						<div class="image__overlay image__overlay--primary text-center">
								<div class="image__title">Department Visit</div>
								<p class="image__description">Departments are our own shrine of knowledge filled with
								bittersweet memories, and a visit surely brings back memories of all the hard work,
								learning, and excitement</p>
					</div></div>
					
				</div>
				<div class="col-md-6 x">
										<div class="image">
						<img  src="img/homecoming/dept.jpg" class="img-fluid image__img">
						<div class="image__overlay image__overlay--primary text-center">	
					</div></div>
				</div>
				<div class="col-md-6 x">
										<div class="image pt-3">
						<img  src="img/homecoming/dept5.jpg" class="img-fluid image__img">
						<div class="image__overlay image__overlay--primary text-center">	
					</div></div>
				</div>
				<div class="col-md-6 x">
										<div class="image pt-3">
						<img  src="img/homecoming/dept2.jpg" class="img-fluid image__img">
						<div class="image__overlay image__overlay--primary text-center">	
					</div></div>
				</div>
				</div>
				</div>
		</div>
		</div>
		</div>
		</div>
	</section>


	<section class="section-3 pt-3">
		<div class="container-fluid p-0">
		<div style="padding:0 3rem;">
			<div class="row">
				<div class="col-md-3 d-flex justify-content-center">
					<h1 class="gallery-h3 pt-5">Entertania</h1>
				</div>		
				<div class="col-md-9">
				<div class="container">
				<div class="row d-flex justify-content-center">
				<div class="col-md-8 x">
					<div class="image">

						<img src="img/homecoming/comedian.jpg" class="img-fluid image__img">
						<div class="image__overlay image__overlay--primary text-center">
								<div class="image__title">Stand-Up Comedy</div>
								<p class="image__description">Smiles can cast the most powerful spell of love and happiness.</p>	
					</div></div>
				</div>
				<div class="col-md-4 x align-items-center">
						
					<div class="image">

						<img  src="img/homecoming/etms1.jpg" class="img-fluid image__img">
						<div class="image__overlay image__overlay--primary">
								<div class="image__title"></div>
								<p class="image__description"></p>	
					</div></div>
					<div class="image pt-3">
						<img  src="img/homecoming/etms2.jpg" class="img-fluid image__img"><div class="image__overlay image__overlay--primary">
								<div class="image__title"></div>
								<p class="image__description"></p>
					</div></div>
					
				</div>
				</div>
				</div>
		</div>
		</div>
		</div>
		</div>
	</section>
	<section class="section-3 pt-3 pb-5">
		<div class="container-fluid p-0">
		<div style="padding:0 3rem;">
			<div class="row">
				<div class="col-md-3 d-flex justify-content-center">
					<h1 class="gallery-h3 pt-5">Illumination</h1>
				</div>		
				<div class="col-md-9">
				<div class="container">
				<div class="row d-flex justify-content-center">
				<div class="col-md-8 x">
						<div class="image">
						<img src="img/homecoming/lantern2.jpg" class="img-fluid image__img">
						<div class="image__overlay image__overlay--primary text-center">
								<div class="image__title">Illumination</div>
								<p class="image__description">The Illumination with diyas followed by the release of sky lanterns creates 
								an aura of happiness all around before we kick.</p>	
					</div></div>
					</div>			
		</div>
		</div>
		</div>
		</div>
		</div>
		</div>
	</section>

	<?php include'footer.php' ?>
	<?php include 'preloader.php' ?>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	
	<script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/gsap-latest-beta.min.js"></script>
	<script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/ScrollTrigger.min.js"></script>
		<script>
			
		var arr = document.getElementsByClassName("x");
		for(var i=0; i<arr.length;i++)
		{
			gsap.from(arr[i], {
			scrollTrigger: {
			trigger: arr[i],
			toggleActions: "play none none none"
			},
			opacity:0,
			duration:1.5, 
			y:50 
			});  
	}  

		</script>
	</body>
	</html>