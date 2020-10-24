<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="css/mentee.css">
    <title>Document</title>
</head>
      <body>
           <br />
           <div class="container"  style="width:80px;margin-left:4%;padding-top:2%;">
                <?php
                if(isset($_SESSION['username']))
                {
                ?>
                <div align="center">
                     <h1>Welcome - <?php echo $_SESSION['username']; ?></h1><br />
                     <a href="#" id="logout">Logout</a>
                </div>
                <?php
                }
                else
                {
                ?>
                <div>
                     <button type="button" name="login" id="login" class="btn btn-success" data-toggle="modal" data-target="#loginModal">Login</button>
                </div>
                <?php
                }
                ?>
           </div>
           <br />
      </body>
 </html>
 <div id="loginModal" class="modal fade" role="dialog">
      <div class="modal-dialog row">
           <div class="modal-content">
             <div class="body">
               <div class="modal-header">
                    <h4 class="modal-title">Follow the Paths of Successful Engineers</h4>
                    <button  type="button" class="close" data-dismiss="modal">&times;</button>

               </div>
               <div class="modal-body">
                 <form class="form-horizontal" method="post" action="https://sac.iitkgp.ac.in/mentorship/mentee_registration">
                   <input type="hidden" name="_token" value="BoMRwZovLvPhkKoNk1SBlGTCS1rckmFFzqvifopT">

                   <div class="form-group">
                     <div class="col-sm-12">
                       <input type="name" name="name"id="username" class="form-control" placeholder="Enter your name" required="required">
                     </div>
                   </div>

                   <div class="form-group">
                     <div class="col-sm-12">
                       <input type="email" name="email"id="email" class="form-control" placeholder="Enter your email" required="required">
                     </div>
                   </div>

                   <div class="form-group">
                     <div class="col-sm-12">
                       <input type="password" name="password"id="password" class="form-control" placeholder="Enter your password" required="required">
                     </div>
                   </div>

                   <div class="form-group">
                     <div class="col-sm-12">
                       <input type="password" name="password_confirmation"id="re-password" class="form-control" placeholder="Re-Enter your password" required="required">
                     </div>
                   </div>

                   <div class="form-group">
                     <div class="col-sm-12">
                       <select required name='department'id="department" class='form-control'  >
                         <option  value="" disabled selected >Select Your Department</option>
                         <option value="AE">Aerospace Engineering</option>
                         <option value="AG">Agricultural & Food Engineering</option>
                         <option value="AR">Architecture & Regional Planning</option>
                         <option value="BT">Biotechnology</option>
                         <option value="CE">Civil Engineering</option>
                         <option value="CH">Chemical Engineering</option>
                         <option value="CS">Computer Science & Engineering</option>
                         <option value="CY">Chemistry</option>
                         <option value="EE">Electrical Engineering</option>
                         <option value="EC">Electronics & Electrical Communication Engineering</option>
                         <option value="GG">Geology & Geophysics</option>
                         <option value="HS">Humanities & Social Sciences</option>
                         <option value="IM">Industrial & Systems Engineering</option>
                         <option value="MA">Mathematics</option>
                         <option value="ME">Mechanical Engineering</option>
                         <option value="MT">Metallurgical & Materials Engineering</option>
                         <option value="MI">Mining Engineering</option>
                         <option value="NA">Ocean Engineering & Naval Architecture</option>
                         <option value="PH">Physics</option>
                         <option value="ATDC">Advanced Techology Development Center</option>
                         <option value="CET">Center for Educational Technology</option>
                         <option value="CYE">Cryogenic Engineering</option>
                         <option value="MS">Materials Science</option>
                         <option value="ORALS">Oceans, Rivers, Atmosphere and Land Sciences</option>
                         <option value="CBE">P K Sinha Centre for Bio Energy</option>
                         <option value="REC">Reliability Engineering Centre</option>
                         <option value="RTC">Rubber Technology Centre</option>
                         <option value="RDC">Rural Development Centre</option>
                         <option value="GSSST">G S Sanyal School of Telecommunications</option>
                         <option value="IT">Information Technology</option>
                         <option value="RCIM">Ranbir and Chitra Gupta School of Infrastructure Design and Management</option>
                         <option value="RMSEE">Rajendra Mishra School of Engineering Entrepreneurship</option>
                         <option value="RGSIPL">Rajiv Gandhi School of Intellectual Property Law</option>
                         <option value="MST">Medical Science & Technology</option>
                         <option value="SB">School of Bioscience</option>
                         <option value="SEST">School of Environment Science and Technology</option>
                         <option value="SES">School of Energy Science</option>
                         <option value="SNST">School of Nano-Science and Technology</option>
                         <option value="SWS">School of Water Resources</option>
                         <option value="VGSOM">Vinod Gupta School of Management</option>

                       </select>
                     </div>
                   </div>
                   <div class="form-group">
                     <div class="col-sm-12" id="hall">
                       <select required name='hall' class='form-control' class="required">
                         <option  value="" disabled selected >Select Your Hall</option>
                         <option value="SAM">Sir Ashutosh Mukherjee  Hall</option>
                         <option value="AZ">Azad  Hall</option>
                         <option value="BCR">B C Roy  Hall</option>
                         <option value="BRAH">B R Ambedkar  Hall</option>
                         <option value="GH">Gokhale  Hall</option>
                         <option value="HJB">Homi Bhabha  Hall</option>
                         <option value="JCB">J C Bose  Hall</option>
                         <option value="LLR">Lala Lajpat Rai  Hall</option>
                         <option value="LBS">Lal Bahadur Shastri </option>
                         <option value="MMM">Madan Mohan Malviya  Hall</option>
                         <option value="MS">Megnad Saha  Hall</option>
                         <option value="MT">Mother Teresa  Hall</option>
                         <option value="NH">Nehru  Hall</option>
                         <option value="PT">Patel  Hall</option>
                         <option value="RK">Radha Krishnan  Hall</option>
                         <option value="RP">Rajendra Prasad  Hall</option>
                         <option value="RLB">Rani Laxmibai  Hall</option>
                         <option value="SN">Sarojini Naidu / Indira Gandhi  Hall</option>
                         <option value="SNVH"> Sister Nivedita Hall </option>
                         <option value="VS">Vidyasagar  Hall</option>
                         <option value="VSRC">Vikram Sarabhai Residential Complex</option>
                         <option value="ZH">Zakir Hussain  Hall</option>
                       </select>
                     </div>
                   </div>
                   <div class="form-group">
                     <div class="col-sm-12">
                       <input type="text" name="roll"id="rollnumber" class="form-control" placeholder="Enter your Roll No." required="required">
                     </div>
                   </div>
                   <div class="form-group">
                     <div class="col-sm-12">
                       <input type="text" name="cgpa"id="cgpa" class="form-control" placeholder="Enter your CGPA" >
                     </div>
                   </div>



                   <div class="form-group">
                     <div class="col-sm-12">
                       <select required name='current'id="currentyear" class='form-control' class="required">
                         <option  value="" disabled selected >Choose your Current Academic Year</option>
                         <option value='1'>1</option>
                         <option value='2'>2</option>
                         <option value='3'>3</option>
                         <option value='4'>4</option>
                         <option value='5'>5</option>

                       </select>
                     </div>
                   </div>

                   <div class="form-group">
                     <div class="col-sm-12">
                       <input type="text" name="q1"id="q1" class="form-control" placeholder="What is the most important thing you wish to know from your mentor ?" required="required" maxlength="200">
                     </div>
                   </div>

                   <div class="form-group">
                     <div class="col-sm-12">
                       <input type="text" name="q2"id="q2" class="form-control" placeholder="What are your major reasons for joining the mentorship programme ?" required="required" maxlength="200">
                     </div>
                   </div>

                   <div class="form-group">
                     <div class="col-sm-12">
                       <input type="text" name="hcity"id="hcity" class="form-control" placeholder="Enter your hometown/Location of Summer Internship" required="required" maxlength="40">
                     </div>
          </div>

                   <div class="form-group" >
                     <div class="col-sm-12" >
                       <h4>In which field do you want to  be Mentored?</h4>
                       <select required name='pref1'id="1st-preference" class='form-control' class="required">
                         <option  value="" disabled selected >Choose your 1st Preference</option>
                         <option value='4'>Banking & Finance</option>
                         <option value='23'>Entrepreneurship</option>
                         <option value='24'>Consulting</option>
                         <option value='25'>Data Analytics</option>
                         <option value='26'>Software Development</option>
                         <option value="27">Marketing</option>
                         <option value="28">Civil Services</option>
                         <optgroup label="Core Fields"></optgroup>
                         <option value='1'>Aerospace Engineering</option>
                         <option value='2'>Agricultural & Food Engineering</option>
                         <option value='3'>Architecture & Regional Planning</option>
                         <option value='5'>Biotechnology</option>
                         <option value='6'>Civil Engineering</option>
                         <option value='7'>Chemical Engineering</option>
                         <option value='9'>Computer Science & Engineering</option>

                         <option value='11'>Chemistry</option>
                         <option value='12'>Electrical Engineering</option>
                         <option value='13'>Electronics & Electrical Communication Engineering</option>

                         <option value='14'>Geology & Geophysics</option>
                         <option value='15'>Humanities & Social Sciences</option>
                         <option value='16'>Industrial & Systems Engineering</option>
                         <option value='17'>Mathematics</option>
                         <option value='18'>Mechanical Engineering</option>
                         <option value='19'>Metallurgical & Materials Engineering</option>
                         <option value='20'>Mining Engineering</option>
                         <option value='21'>Ocean Engineering & Naval Architecture</option>
                         <option value='22'>Physics</option>

                       </select>
                     </div>
                   </div>

                   <div class="form-group">
                     <div class="col-sm-12">
                       <select required name='pref2'id="2nd-preference" class='form-control' class="required">
                         <option  value="" disabled selected >Choose your 2nd Preference</option>

                         <option value='4'>Banking & Finance</option>
                         <option value='23'>Entrepreneurship</option>
                         <option value='24'>Consulting</option>
                         <option value='25'>Data Analytics</option>
                         <option value='26'>Software Development</option>
                         <option value="27">Marketing</option>
                         <option value="28">Civil Services</option>
                         <optgroup label="Core Fields"></optgroup>
                         <option value='1'>Aerospace Engineering</option>
                         <option value='2'>Agricultural & Food Engineering</option>
                         <option value='3'>Architecture & Regional Planning</option>
                         <option value='5'>Biotechnology</option>
                         <option value='6'>Civil Engineering</option>
                         <option value='7'>Chemical Engineering</option>
                         <option value='9'>Computer Science & Engineering</option>

                         <option value='11'>Chemistry</option>
                         <option value='12'>Electrical Engineering</option>
                         <option value='13'>Electronics & Electrical Communication Engineering</option>

                         <option value='14'>Geology & Geophysics</option>
                         <option value='15'>Humanities & Social Sciences</option>
                         <option value='16'>Industrial & Systems Engineering</option>
                         <option value='17'>Mathematics</option>
                         <option value='18'>Mechanical Engineering</option>
                         <option value='19'>Metallurgical & Materials Engineering</option>
                         <option value='20'>Mining Engineering</option>
                         <option value='21'>Ocean Engineering & Naval Architecture</option>
                         <option value='22'>Physics</option>

                       </select>
                     </div>
                   </div>

                   <div class="form-group">
                     <div class="col-sm-12">
                       <select required name='pref3'id="3rd-preference" class='form-control' class="required">
                         <option  value="" disabled selected >Choose your 3rd Preference</option>
                         <option value='4'>Banking & Finance</option>
                         <!-- Deleted Management Consultancy pref 10 -->
                         <option value='23'>Entrepreneurship</option>
                         <option value='24'>Consulting</option>
                         <option value='25'>Data Analytics</option>
                         <option value='26'>Software Development</option>
                         <option value="27">Marketing</option>
                         <option value="28">Civil Services</option>
                         <optgroup label="Core Fields"></optgroup>
                         <option value='1'>Aerospace Engineering</option>
                         <option value='2'>Agricultural & Food Engineering</option>
                         <option value='3'>Architecture & Regional Planning</option>
                         <option value='5'>Biotechnology</option>
                         <option value='6'>Civil Engineering</option>
                         <option value='7'>Chemical Engineering</option>
                         <option value='9'>Computer Science & Engineering</option>

                         <option value='11'>Chemistry</option>
                         <option value='12'>Electrical Engineering</option>
                         <option value='13'>Electronics & Electrical Communication Engineering</option>

                         <option value='14'>Geology & Geophysics</option>
                         <option value='15'>Humanities & Social Sciences</option>
                         <option value='16'>Industrial & Systems Engineering</option>
                         <option value='17'>Mathematics</option>
                         <option value='18'>Mechanical Engineering</option>
                         <option value='19'>Metallurgical & Materials Engineering</option>
                         <option value='20'>Mining Engineering</option>
                         <option value='21'>Ocean Engineering & Naval Architecture</option>
                         <option value='22'>Physics</option>

                       </select>
                     </div>
                   </div>

                   <h3>Contact Details</h3>

                   <div class="form-group">
                     <div class="col-sm-12">
                       <input type="text" name="phone"id="phone-number" class="form-control" placeholder="Enter your Phone No." required="required">
                     </div>
                   </div>
                   <div class="form-group">
                     <div class="col-sm-12">
                       <input type="text" name="fb"id="facebook-url" class="form-control" placeholder="Enter your Facebook Profile link" required="required">
                     </div>
                   </div>
                   <div class="form-group">
                     <div class="col-sm-12">
                       <input type="text" name="linkedin"id="linkedin-url" class="form-control" placeholder="Enter your LinkedIn Profile link" >
                     </div>
                   </div>
                   <div class="form-group"	>
                     <div class="col-sm-12">
                       <button   name="sub2" style="width:100%" class="btn  btn-primary" >Submit</button>
                     </div>
                   </div>
                 </form>
               </div>
             </div>
           </div>
      </div>
 </div>
 <script>
 $(document).ready(function(){
      $('#login_button').click(function(){
           var username = $('#username').val();
           var email = $('#email').val();
           var password = $('#password').val();
           var re_password = $('#re-password').val();
           var department = $('#department').val();
           var hall = $('#hall').val();
           var rollnumber = $('#rollnumber').val();
           var cgpa = $('#cgpa').val();
           var currentyear = $('#currentyear').val();
           var q1 = $('#q1').val();
           var q2 = $('#q2').val();
           var hcity = $('#hcity').val();
           var preference1 = $('#1st-preference').val();
           var preference2 = $('#2nd-preference').val();
           var preference3 = $('#3rd-preference').val();
           var phonenumber = $('#phone-number').val();
           var furl = $('#facebook-url').val();
           var lurl = $('#linkedin-url').val();
           if (password!==re_password) {
             alert("password doesnt match with conformation password!");
           }
           if(password.length<8){
             alert("please enter the password of minimum 8 letters");
           }
           if(username != '' && password != ''&&email=''&&re_password=''&&department=''&&hall=''&& rollnumber=''&&cgpa=''&&currentyear=''&&q1=''&&q2=''&&hctiy=''&&preference1=''&&preference2=''&&preference3=''&&phonenumber=''&&furl=''&&lurl='')
           {
                $.ajax({
                     url:"action.php",
                     method:"POST",
                     data: {username:username, email:email,password:password,re_password:re_password,rollnumber:rollnumber,cgpa:cgpa,department:department,currentyear:currentyear,hall:hall,q1:q1,q2:q2,hcity:hcity,preference1:preference1,preference2:preference2,preference3:preference3,phonenumber:phonenumber,furl:furl,lurl:lurl},
                     success:function(data)
                     {
                          //alert(data);
                          if(data == 'No')
                          {
                               alert("Wrong Data");
                          }
                          else
                          {
                               $('#loginModal').hide();
                               location.reload();
                          }
                     }
                });
           }
           else
           {
                alert("Both Fields are required");
           }
      });
      $('#logout').click(function(){
           var action = "logout";
           $.ajax({
                url:"action.php",
                method:"POST",
                data:{action:action},
                success:function()
                {
                     location.reload();
                }
           });
      });
 });
 </script>
