<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <title>SAC</title>
  <link rel="stylesheet" type="text/css" href="css/AAM.css">
     <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Encode+Sans+Expanded:wght@200&display=swap" rel="stylesheet">
</head>



<body>
<section class="section-1 pb-0">
      <?php include'navbar.php' ?>
    <header>
    <div class="header">

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
			<p class="pt-3 one">
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
					<div class="col-md-10 col-12 trailer" style="padding-right:9rem; padding-top:3.5rem; padding-bottom:15rem;">
						<div class="first"></div>
						<div class="second"></div>
						<div class="third">
							<iframe src="https://www.youtube.com/embed/BPaRgF4rTRE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
				<h1 class="gallery-h3 pt-5">Arena</h1>
			</div>
			<div class="col-md-9">
			<div class="container">
				<div class="row d-flex justify-content-center">
					<div class="col-md-6 x">
					<div class="image">
					<img  src="img/day1/arena3.jpg" class="img-fluid image__img">
				      <div class="image__overlay image__overlay--primary text-center">
							<div class="image__title">Arena</div>
							<p class="image__description">The Arena is a nostalgia-filled site welcoming the Alumni to share their old memories with us.</p>	
				</div></div>
			</div>
			<div class="col-md-3 x align-items-center">
					<div class="image">
					<img  src="img/day2/arena.jpg" class="img-fluid image__img">
				      <div class="image__overlay image__overlay--primary text-center">
					</div></div>
				<div class="image pt-3">
					<img  src="img/day2/cake_cutting.jpg" class="img-fluid image__img">
				      <div class="image__overlay image__overlay--primary text-center">
					  </div></div>
				
			</div>
			<div class="col-md-3 x align-items-center">
					<div class="image">
					<img  src="img/day1/alumni4.jpg" class="img-fluid image__img">
				      <div class="image__overlay image__overlay--primary text-center">
						</div></div>
				<div class="image pt-3">
					<img  src="img/day1/alumni2.jpg" class="img-fluid image__img">
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
				<h1 class="gallery-h3 pt-5">Grand Reunion</h1>
			</div>		
			<div class="col-md-9">
			<div class="container">
			<div class="row d-flex justify-content-center">
			<div class="col-md-4 x align-items-center">
					
				<div class="image ">
					<img  src="img/day1/awards.jpg" class="img-fluid image__img">
				      <div class="image__overlay image__overlay--primary text-center">
								</div></div>
				<div class="image pt-3">
					<img  src="img/day1/alumni.jpg" class="img-fluid image__img">
				      <div class="image__overlay image__overlay--primary text-center">
					  
							</div></div>
				
			</div>
			<div class="col-md-8 x">
				<div class="image">
				<img  src="img/day3/ceremony4.jpg" class="img-fluid image__img">
				<div class="image__overlay image__overlay--primary text-center">
				<div class="image__title">Grand Reunion</div>
							<p class="image__description">The Annual Alumni Meet is a fascinating trip down memory lane
							that allows our alumni to see old friends again and remember places and stories that were 
							almost forgotten.
</p>
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
				<h1 class=" gallery-h3 pt-5">Department Visit</h1>
			</div>		
			<div class="col-md-9">
			<div class="container">
			<div class="row d-flex justify-content-center">
			<div class="col-md-4 x align-items-center">
					<div class="image">
					<img  src="img/day2/nalanda2.jpg" class="img-fluid image__img">
					<div class="image__overlay image__overlay--primary text-center">
				</div></div>
				<div class="image pt-3">
					<img  src="img/day1/alumni.jpg" class="img-fluid image__img">
				      <div class="image__overlay image__overlay--primary text-center">
					</div></div>
				
			</div>
			<div class="col-md-8 x">
				<div class="image">
					<img  src="img/day1/dept_visit2.jpg" class="img-fluid image__img">
					<div class="image__overlay image__overlay--primary text-center">
							<div class="image__title">Department Visit</div>
							<p class="image__description">Departments are our own shrine of knowledge filled with bittersweet 
							memories, and a visit back to this shrine surely brings back memories of all the hard work, 
							learning, and excitement.</p>	
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
				<h1 class="gallery-h3 pt-5">Musical Night</h1>
			</div>		
			<div class="col-md-9">
			<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="col-md-6 content-overlay x">	
				<div class="image">
					<img  src="img/yellow-diary.jfif" class="img-fluid image__img">
				</div>
				</div>
				<div class="col-md-6 content-overlay x">	
				<div class="image">
					<img  src="img/day2/yellow-diary.jpg" class="img-fluid image__img">
				</div>
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
				<h1 class="gallery-h3 pt-5">Hall Visit</h1>
			</div>		
			<div class="col-md-9">
			<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="col-md-3 content-overlay x">					
					<div class="image ">
					<img  src="img/day1/flames.jpg" class="img-fluid image__img">
					<div class="image__overlay image__overlay--primary">
				</div></div>				
					<div class="image pt-3">
					<img  src="img/day1/hall_visit2.jpg" class="img-fluid image__img">
					<div class="image__overlay image__overlay--primary">
				</div></div>
</div>
				<div class="col-md-3 content-overlay x">					
					<div class="image ">
					<img  src="img/day1/flames2.jpg" class="img-fluid image__img">
					<div class="image__overlay image__overlay--primary">
				</div></div>				
					<div class="image pt-2">
					<img  src="img/day1/hall_visit4.jpg" class="img-fluid image__img">
					<div class="image__overlay image__overlay--primary">
				</div></div></div>
				
				<div class="col-md-6 content-overlay x">
										<div class="image">

					<img src="img/day1/hall_visit.jpg" class="img-fluid image__img">
					<div class="image__overlay image__overlay--primary text-center">
							<div class="image__title">Hall Visit</div>
							<p class="image__description">The place we learnt and lived for the 4 most important years in our life surely has a fragment of our soul inside
							it and to come back to our hall of residence is nothing less than a reunion of all of our soul.</p>	
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
			<div class="col-md-7 content-overlay x">
				<div class="image">
					<img  src="img/day2/campus_tour.jpg" class="img-fluid image__img">
					<div class="image__overlay image__overlay--primary text-center">
													<div class="image__title">Campus Tour</div>
							<p class="image__description">Campus Tour is our way of showing the 2200 acre campus in a nutshell
							and highlighting all the major developments around.
</p>	
				</div></div></div>
				<div class="col-md-5 content-overlay x">
									<div class="image">

					<img  src="img/day2/campus_tour2.jpg" class="img-fluid image__img">
					<div class="image__overlay image__overlay--primary text-center">
									<div class="image__title">Campus Tour</div>
							<p class="image__description"></p>	
				</div></div>
				</div>		
	</div>
	<div class="row d-flex justify-content-center pt-3">	
	<div class="col-md-5 x">
					<div class="image">
					<img  src="img/day2/nalanda.jpg" class="img-fluid image__img">
					<div class="image__overlay image__overlay--primary text-center text-center">
								<div class="image__title">Campus Tour</div>
							<p class="image__description">
					</p>	
				</div></div>
				</div>
				<div class="col-md-7 x">
					<div class="image">
					<img src="img/day2/football.jpg" class="img-fluid image__img">
					<div class="image__overlay image__overlay--primary">
					<div class="image__title">Campus Tour</div>
							<p class="image__description">In the progressive world we live in, there are a lot of changes and yet a lot of constants 
							and it’s a pleasure to see the newer developments in harmony with the same old roads.</p>
				</div></div></div>
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
				<div class="col-md-8 content-overlay x">	
					<div class="image">
					<img src="img/day1/akash2.jpg" class="img-fluid image__img">
					<div class="image__overlay image__overlay--primary text-center">
						<div class="image__title">Stand-Up Comedy</div>
							<p class="image__description">Smiles can cast the most powerful spell of love and happiness.</p>	
				</div></div>								
		</div>
		<div class="col-md-4 content-overlay x">					
				<div class="image">
					<img  src="img/day1/toat.jpg" class="img-fluid image__img">
					<div class="image__overlay image__overlay--primary">
					
				</div></div>
				<div class="image pt-3">
					<img  src="img/day1/toat2.jpg" class="img-fluid image__img">
					<div class="image__overlay image__overlay--primary">
					
				</div></div></div>
				
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
				<h1 class="gallery-h3 pt-5">Illumination</h1>
			</div>		
			<div class="col-md-9">
			<div class="container">
			<div class="row d-flex justify-content-center">
		<div class="col-md-4 content-overlay x">					
			<div class="image">
					<img  src="img/day2/illu1.jpg" class="img-fluid image__img">
					<div class="image__overlay image__overlay--primary">
				</div></div>
				<div class="image pt-3">
					<img  src="img/day2/lantern.jpg" class="img-fluid image__img">
					<div class="image__overlay image__overlay--primary">
							<div class="image__title">Illumination</div>
							<p class="image__description"></p>	
				</div></div>			
				</div>			
<div class="col-md-8 content-overlay x">
										<div class="image">

					<img src="img/day2/kgp_arena.jpg" class="img-fluid image__img">
					<div class="image__overlay image__overlay--primary text-center">
				<div class="image__title">Illumination</div>
							<p class="image__description">The Illumination with diyas followed by the release of sky lanterns 
							creates an aura of happiness all around before we kick.</p>	
				</div></div>
				</div>	
				</div>
				<div class="row d-flex justify-content-center pt-3">
				<div class="col-md-4 content-overlay x">
					<div class="image">
					<img  src="img/day2/night1.jpg" class="img-fluid image__img">
					<div class="image__overlay image__overlay--primary">
							<div class="image__title">Gala Dinner</div>
				</div></div>
				</div>
				<div class="col-md-4 content-overlay x">
				<div class="image">
					<img  src="img/day2/night2.jpg" class="img-fluid image__img">
					<div class="image__overlay image__overlay--primary">
							<div class="image__title">Gala Dinner</div>
				</div></div>
				</div>
				<div class="col-md-4 content-overlay x">
										<div class="image">

					<img  src="img/day2/night3.jpg" class="img-fluid image__img">
					<div class="image__overlay image__overlay--primary">
							<div class="image__title">Gala Dinner</div>
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
				<h1 class="gallery-h3 pt-5">2.2 marathon</h1>
			</div>
			<div class="col-md-9">
			<div class="container">
			<div class="row d-flex justify-content-center">
					<div class="col-md-6 content-overlay x">
					<div class="image">
					<img  src="img/day3/emo.jpg" class="img-fluid image__img">
					<div class="image__overlay image__overlay--primary">
				</div></div>
				</div>
				<div class="col-md-6 content-overlay x">
									<div class="image">

					<img  src="img/day3/marathon.jpg" class="img-fluid image__img">
					<div class="image__overlay image__overlay--primary text-center">
							<div class="image__title">2.2 Marathon</div>
							<p class="image__description">The iconic 2.2 km marathon around the heart of the campus in which all 
							students and alumni are invited to run together to foster the spirit of good health and harmony.</p>	
				</div></div>
				</div>
			</div>
			<div class="row d-flex justify-content-center pt-3 x">
					<div class="col-md-8 content-overlay">
										<div class="image">

					<img src="img/day3/closing_ceremony.jpg" class="img-fluid image__img">
					<div class="image__overlay image__overlay--primary">
							<div class="image__title">Closing Ceremony</div>	
				</div></div>
				</div>
			</div>
		</div>
		</div>
	</div>
	</div>
	</div>
	</div>
  </section>

	<?php include'footer.php' ?>
	<?php include'preloader.php' ?>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
  <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/gsap-latest-beta.min.js"></script>
   <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/ScrollTrigger.min.js"></script>
   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
            </script>
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
 $(window).on('load', function() {
    if ($('#preloader').length) {
      $('#preloader').delay(100).fadeOut('fast', function() {
        $(this).remove();
      });
    }
  });


$(document).ready(function(){ 
    $(window).scroll(function(){ 
        if ($(this).scrollTop() > 100) { 
            $('.back-to-top').fadeIn(); 
        } else { 
            $('.back-to-top').fadeOut(); 
        } 
    }); 
    $('.back-to-top').click(function(){ 
        $("html, body").animate({ scrollTop: 0 }, 600); 
        return false; 
    }); 
});


	</script>
  </body>
  </html>