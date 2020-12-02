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
<link rel="stylesheet" href="css/mentor.css">
    <title>Document</title>
</head>
      <body>
           <div class="container"  style="width:80px;margin-left:4%;padding-top:2%;">
                     <button type="button" name="login" id="login" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#loginModal">Login</button>
           </div>
           <div id="loginModal" class="modal fade" role="dialog" style="padding-left:5%;">
                <div class="modal-dialog" style="min-width:400px;">
                     <div class="modal-content">
                       <div class="body">
                         <div class="modal-header">
                              <h4 class="modal-title">Lay the road for next generations</h4>
                              <button type="button" class="close" data-dismiss="modal">&times;</button>

                         </div>
                         <div class="modal-body">
                           <form class="form-horizontal" method="post" action="https://sac.iitkgp.ac.in/mentorship/mentor_registration">
                             <input type="hidden" name="_token" value="PsbGXbDMF6nIjElNT19TkbnVMXVkDB1QlZtIGfKx">

                             <div class="form-group">
                               <div class="col-sm-12"style="margin-bottom:0;">
                                 <label for="name">Name</label>
                               </div>
                               <div class="col-sm-12">
                                 <input type="name" name="name" class="form-control"id="username" placeholder="Enter your name" required="required" value=""style="border:0;background-color:#e8e8e8;font-size:0.9em;">
                               </div>
                             </div>

                             <div class="form-group">
                               <div class="col-sm-12"style="margin-bottom:0;">
                                 <label for="email">Email</label>
                               </div>
                               <div class="col-sm-12">
                                 <input type="email" name="email" class="form-control"id="email" placeholder="Enter your email" required="required" value=""style="border:0;background-color:#e8e8e8;font-size:0.9em;">
                               </div>
                             </div>

                             <div class="form-group">
                               <div class="col-sm-12"style="margin-bottom:0;">
                                 <label for="password">Password</label>
                               </div>
                               <div class="col-sm-12">
                                 <input type="password" name="password" class="form-control"id="passwword" placeholder="Enter your password" required="required"style="border:0;background-color:#e8e8e8;font-size:0.9em;">
                               </div>
                             </div>

                             <div class="form-group">
                               <div class="col-sm-12"style="margin-bottom:0;">
                                 <label for="re-password">Re-Password</label>
                               </div>
                               <div class="col-sm-12">
                                 <input type="password" name="password_confirmation"id="re-password" class="form-control" placeholder="Re-Enter your password " required="required"style="border:0;background-color:#e8e8e8;font-size:0.9em;">
                               </div>
                             </div>

                             <div class="form-group">
                               <div class="col-sm-12"style="margin-bottom:0;">
                                 <label for="department">Department</label>
                               </div>
                               <div class="col-sm-12">
                                 <select required="" name="department"id="department" class="form-control"style="border:0;background-color:#e8e8e8;font-size:0.9em;">
                                   <option value="" disabled="" selected="">Select Your Department</option>
                                   <option value="AE">Aerospace Engineering</option>
                                   <option value="AG">Agricultural &amp; Food Engineering</option>
                                   <option value="AR">Architecture &amp; Regional Planning</option>
                                   <option value="BT">Biotechnology</option>
                                   <option value="CE">Civil Engineering</option>
                                   <option value="CH">Chemical Engineering</option>
                                   <option value="CS">Computer Science &amp; Engineering</option>
                                   <option value="CY">Chemistry</option>
                                   <option value="EE">Electrical Engineering</option>
                                   <option value="EC">Electronics &amp; Electrical Communication Engineering</option>
                                   <option value="GG">Geology &amp; Geophysics</option>
                                   <option value="HS">Humanities  &amp; Social Sciences</option>
                                   <option value="IM"> Industrial &amp; Systems Engineering</option>
                                   <option value="MA">Mathematics</option>
                                   <option value="ME">Mechanical Engineering</option>
                                   <option value="MT">Metallurgical &amp; Materials Engineering</option>
                                   <option value="MI">Mining Engineering</option>
                                   <option value="NA">Ocean Engineering &amp; Naval Architecture</option>
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
                                   <option value="MST">Medical Science &amp; Technology</option>
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
                               <div class="col-sm-12"style="margin-bottom:0;">
                                 <label for="graduation">Graduation year</label>
                               </div>
                               <div class="col-sm-12">
                                 <input type="text" name="pout"id="graduation" class="form-control" placeholder="Enter Your Year Of Graduation" required="required" value=""style="border:0;background-color:#e8e8e8;font-size:0.9em;">

                               </div>
                             </div>

                             <div class="form-group">
                               <div class="col-sm-12"style="margin-bottom:0;">
                                 <label for="fieldofexperince">Fieldofexperince</label>
                               </div>
                               <div class="col-sm-12">
                                 <input type="text" name="foe"id="fieldofexperince" class="form-control" placeholder="Enter Your Field Of Expertise" required="required" value=""style="border:0;background-color:#e8e8e8;font-size:0.9em;">

                               </div>
                             </div>



                             <div class="form-group">
                               <div class="col-sm-3" style="display:inline-block;">
                                 <p>Preferred No. Of Mentees</p>
                               </div>
                               <div class="col-sm-4" style="display:inline-block;">
                                 <select required="" name="mentee"id="mentees" class="form-control"style="border:0;background-color:#e8e8e8;font-size:0.9em;">
                                   <option value="" disabled="" selected="">No. of Mentees</option>
                                   <option value="2">Two</option>
                                   <option value="3">Three</option>
                                   <option value="4">Four</option>
                                   <option value="5">Five</option>
                                   <option value="6">Six</option>
                                   <option value="7">Seven</option>
                                   <option value="8">Eight</option>
                                 </select>
                               </div>
                             </div>

                             <h5>In which field do you want to Mentor?</h5>

                             <div class="form-group">
                               <div class="col-sm-12"style="margin-bottom:0;">
                                 <label for="fieldofmentor">Fieldofmentor</label>
                               </div>
                               <div class="col-sm-12">
                                 <select required="" name="pref1"id="fieldofmentor" class="form-control"style="border:0;background-color:#e8e8e8;font-size:0.9em;">
                                   <option value="" disabled="" selected="">Choose your 1st Preference</option>
                                   <option value="4">Banking &amp; Finance</option>
                                   <option value="23">Entrepreneurship</option>
                                   <option value="24">Consulting</option>
                                   <option value="25">Data Analytics</option>
                                   <option value="26">Software Development</option>
                                   <option value="27">Marketing</option>
                                   <option value="28">Civil Services</option>
                                   <optgroup label="Core Fields"></optgroup>
                                   <option value="1">Aerospace Engineering</option>
                                   <option value="2">Agricultural &amp; Food Engineering</option>
                                   <option value="3">Architecture &amp; Regional Planning</option>
                                   <option value="5">Biotechnology</option>
                                   <option value="6">Civil Engineering</option>
                                   <option value="7">Chemical Engineering</option>
                                   <option value="9">Computer Science &amp; Engineering</option>

                                   <option value="11">Chemistry</option>
                                   <option value="12">Electrical Engineering</option>
                                   <option value="13">Electronics &amp; Electrical Communication Engineering</option>

                                   <option value="14">Geology &amp; Geophysics</option>
                                   <option value="15">Humanities &amp; Social Sciences</option>
                                   <option value="16">Industrial &amp; Systems Engineering</option>
                                   <option value="17">Mathematics</option>
                                   <option value="18">Mechanical Engineering</option>
                                   <option value="19">Metallurgical &amp; Materials Engineering</option>
                                   <option value="20">Mining Engineering</option>
                                   <option value="21">Ocean Engineering &amp; Naval Architecture</option>
                                   <option value="22">Physics</option>
                                 </select>
                               </div>
                             </div>

                             <div class="form-group">
                               <div class="col-sm-12">
                                 <select onchange="f1(this)" class="form-control"id="morepreference"style="border:0;background-color:#e8e8e8;font-size:0.9em;">
                                   <option value="-1">Do You Want More Preferences</option>
                                   <option>Yes</option>
                                   <option>No</option>
                                 </select>
                               </div>
                             </div>


                             <div id="f1">
                               <div class="form-group">
                                 <div class="col-sm-12"style="margin-bottom:0;">
                                   <label for="extrafield2">Extrafield</label>
                                 </div>
                                 <div class="col-sm-12">
                                   <select name="pref2"id="extrafield2" class="form-control"style="border:0;background-color:#e8e8e8;font-size:0.9em;">
                                     <option>Choose your 2nd Preference</option>

                                   <option value="4">Banking &amp; Finance</option>
                                   <option value="23">Entrepreneurship</option>
                                   <option value="24">Consulting</option>
                                   <option value="25">Data Analytics</option>
                                   <option value="26">Software Development</option>
                                   <option value="27">Marketing</option>
                                   <option value="28">Civil Services</option>
                                   <optgroup label="Core Fields"></optgroup>
                                   <option value="1">Aerospace Engineering</option>
                                   <option value="2">Agricultural &amp; Food Engineering</option>
                                   <option value="3">Architecture &amp; Regional Planning</option>
                                   <option value="5">Biotechnology</option>
                                   <option value="6">Civil Engineering</option>
                                   <option value="7">Chemical Engineering</option>
                                   <option value="9">Computer Science &amp; Engineering</option>

                                   <option value="11">Chemistry</option>
                                   <option value="12">Electrical Engineering</option>
                                   <option value="13">Electronics &amp; Electrical Communication Engineering</option>

                                   <option value="14">Geology &amp; Geophysics</option>
                                   <option value="15">Humanities &amp; Social Sciences</option>
                                   <option value="16">Industrial &amp; Systems Engineering</option>
                                   <option value="17">Mathematics</option>
                                   <option value="18">Mechanical Engineering</option>
                                   <option value="19">Metallurgical &amp; Materials Engineering</option>
                                   <option value="20">Mining Engineering</option>
                                   <option value="21">Ocean Engineering &amp; Naval Architecture</option>
                                   <option value="22">Physics</option>
                                   </select>
                                 </div>
                               </div>
                               <div class="form-group">
                                 <div class="col-sm-12"style="margin-bottom:0;">
                                   <label for="extrafield3">Extrafield</label>
                                 </div>
                                 <div class="col-sm-12">
                                   <select name="pref3"id="extrafield3" class="form-control"style="border:0;background-color:#e8e8e8;font-size:0.9em;">
                                     <option>Choose your 3rd Preference</option>
                                   <option value="4">Banking &amp; Finance</option>
                                   <option value="23">Entrepreneurship</option>
                                   <option value="24">Consulting</option>
                                   <option value="25">Data Analytics</option>
                                   <option value="26">Software Development</option>
                                   <option value="27">Marketing</option>
                                   <option value="28">Civil Services</option>
                                   <optgroup label="Core Fields"></optgroup>
                                   <option value="1">Aerospace Engineering</option>
                                   <option value="2">Agricultural &amp; Food Engineering</option>
                                   <option value="3">Architecture &amp; Regional Planning</option>
                                   <option value="5">Biotechnology</option>
                                   <option value="6">Civil Engineering</option>
                                   <option value="7">Chemical Engineering</option>
                                   <option value="9">Computer Science &amp; Engineering</option>

                                   <option value="11">Chemistry</option>
                                   <option value="12">Electrical Engineering</option>
                                   <option value="13">Electronics &amp; Electrical Communication Engineering</option>

                                   <option value="14">Geology &amp; Geophysics</option>
                                   <option value="15">Humanities &amp; Social Sciences</option>
                                   <option value="16">Industrial &amp; Systems Engineering</option>
                                   <option value="17">Mathematics</option>
                                   <option value="18">Mechanical Engineering</option>
                                   <option value="19">Metallurgical &amp; Materials Engineering</option>
                                   <option value="20">Mining Engineering</option>
                                   <option value="21">Ocean Engineering &amp; Naval Architecture</option>
                                   <option value="22">Physics</option>
                                   </select>
                                 </div>
                               </div>
                             </div>

                             <h5 class="center"> Contact Details </h5>

                             <div class="form-group">
                               <div class="col-sm-12"style="margin-bottom:0;">
                                 <label for="phonenumber">Phonenumber</label>
                               </div>
                               <div class="col-sm-12">
                                 <input type="text" name="phone"id="phonenumber" class="form-control" placeholder="Enter Your Phone No." required="required" value=""style="border:0;background-color:#e8e8e8;font-size:0.9em;">

                               </div>
                             </div>




                             <div class="form-group">
                               <div class="col-sm-12"style="margin-bottom:0;">
                                 <label for="organisation">Organisation</label>
                               </div>
                               <div class="col-sm-12">
                                 <input type="text" name="firm" class="form-control"id="organisation" placeholder="Enter Your Organisation" required="required" value=""style="border:0;background-color:#e8e8e8;font-size:0.9em;">

                               </div>
                             </div>

                             <div class="form-group">
                               <div class="col-sm-12"style="margin-bottom:0;">
                                 <label for="desg">Designation</label>
                               </div>
                               <div class="col-sm-12">
                                 <input type="text" name="desg" class="form-control"id="Designation" placeholder="Enter Your Designation" required="required" value=""style="border:0;background-color:#e8e8e8;font-size:0.9em;">
                               </div>
                             </div>


                             <div class="form-group">
                               <div class="col-sm-12">
                                 <button name="sub2" style="width:100%" class="btn btn-lg btn-primary">Submit</button>
                               </div>
                             </div>

                           </form>
                         </div>
                       </div>
                     </div>
                </div>
           </div>
      </body>
 </html>

 <script>
 $(document).ready(function(){
      $('#login_button').click(function(){
           var username = $('#username').val();
           var email = $('#email').val();
           var password = $('#password').val();
           var repassword = $('#re-password').val();
           var department = $('#department').val();
           var graduation = $('#graduation').val();
            var mentees = $('#mentees').val();
           var fieldofexperince = $('#fieldofexperince').val();
           var morepreference = $('#morepreference').val();
           var fieldofmentor = $('#fieldofmentor').val();
           var extrafield2 = $('#extrafield2').val();
           var extrafield3 = $('#extrafield3').val();
           var phonenumber = $('#phonenumber').val();
           var organisation = $('#organisation').val();
           var Designation = $('#Designation').val();
                $.ajax({
                     url:"action.php",
                     method:"POST",
                     data: {username:username, email:email,password:password,repassword:repassword,department:department,graduation:graduation,fieldofexperince:fieldofexperince,morepreference:morepreference,fieldofmentor:fieldofmentor,extrafield2:extrafield2,extrafield3:extrafield3,phonenumber:phonenumber,organisation:organisation,Designation:Designation},
                     if(username === '' && email === '' &&password===''&&repassword===''&&department===''&&graduation===''&&fieldofexperince===''&&morepreference===''&&fieldofmentor===''&&phonenumber===''&&organisation===''&&Designation==='')
                     {
                       alert("Both Fields are required");
                    }
                     success:function(data)
                     {

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

      });
	}
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
 function f1(x){
   if(x.options[x.selectedIndex].text=="Yes") {
     document.getElementById("f1").style.display="block";
   }
   else {
     document.getElementById("f1").style.display="none";
   }
 </script>
