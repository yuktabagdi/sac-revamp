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
                    <h4 class="modal-title">Lay the road for next generations</h4>
                    <button style="background-color:blue;padding:0;" type="button" class="close" data-dismiss="modal">&times;</button>

               </div>
               <div class="modal-body">
                    <input type="text" name="username" id="username" class="form-control" autocomplete="none" placeholder="User Name"/>
                    <br />
                    <input type="email" name="email" id="email"class="form-control"placeholder="email">
                    <br>
                    <input type="password" name="password" id="password"class="form-control"placeholder="password">
                    <br>
                    <input type="password" name="password" id="re-password"class="form-control"placeholder="re-enter password">
                    <br>
                    <input type="text" name="department" id="department" class="form-control"placeholder="Select your department" />
                    <br />
                    <input type="text" name="graduation" id="graduation" class="form-control"placeholder="Year of Graduation" />
                    <br />
                    <input type="text" name="Feild" id="fieldofexperience" class="form-control"placeholder="Your field of experience" />
                    <br />
                    <label for="mentees"> Preffered no.of Mentees</label>
                    <input type="number" name="mentees" id="mentees" class="form-control"placeholder="No.of mentees"/>
                    <br />
                    <label for="field of mentor">IN which field do you like to mentor</label>
                    <input type="text" name="field of mentor"id="fieldofmentor" class="form-control"placeholder="Choose your first preference"/>
                    <br>
                    <input type="text" name="more preference"id="morepreference" class="form-control"placeholder="Do you want more Preferences"/>
                    <br>
                    <input type="text" name="field of mentor-2"id="extrafield2" class="form-control"placeholder="Choose your second preference"/>
                    <br>
                    <input type="text" name="field of mentor-3"id="extrafield3" class="form-control"placeholder="Choose your third preference"/>
                    <br>
                    <label for="contact">Contact Information</label>
                    <input type="number" name="phone number" id="phonenumbeer" class="form-control" autocomplete="none" placeholder="Phone Number"/>
                    <br />
                    <input type="text" name="organisation" id="organisation" class="form-control"placeholder="Enter your organisation" />
                    <br />
                    <input type="text" name="designation" id="Designation" class="form-control"placeholder="Enter your Designation" />
                    <br />
                    <button style="margin-left:45%;" type="button" name="login_button" id="login_button" class="btn btn-lg btn-primary">Login</button>
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
           var re-password = $('#re-password').val();
           var department = $('#department').val();
           var graduation = $('#graduation').val();
           var fieldofexperince = $('#fieldofexperince').val();
           var morepreference = $('#morepreference').val();
           var fieldofmentor = $('#fieldofmentor').val();
           var extrafield2 = $('#extrafield2').val();
           var extrafield3 = $('#extrafield3').val();
           var phonenumber = $('#phonenumber').val();
           var organisation = $('#organisation').val();
           var Designation = $('#Designation').val();
           if(username != '' && password != '')
           {
                $.ajax({
                     url:"action.php",
                     method:"POST",
                     data: {username:username, email:email,password:password,re-password:re-password,department:department,graduation:graduation,fieldofexperince:fieldofexperince,morepreference:morepreference,fieldofmentor:fieldofmentor,extrafield2:extrafield2,extrafield3:extrafield3,phonenumber:phonenumber,organisation:organisation,Designation:Designation},
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
