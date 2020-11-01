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
<link rel="stylesheet" href="css/login.css">
    <title>Document</title>
</head>
      <body>
                  <nav class="navbar sticky-top navbar-light bg-light">

                     <button type="button" name="login" id="login" class="btn btn-primary" data-toggle="modal" data-target="#loginModal">Login</button>
                       <ul class="navbar-nav header">
                         <li class="nav-item active">
                           <h3 class="navbar-brand" style="margin:0;">Associate With Us </h3>
                         </li>
                       </ul>
                </nav>
      </body>
 </html>
 <div id="loginModal" class="modal fade" role="dialog" style="padding-left:5%;">
      <div class="modal-dialog " style="min-width:400px;">
           <div class="modal-content">
             <div class="body">
               <div class="modal-header">
                    <h4 class="modal-title">Join with Us</h4>
                    <button  type="button" class="close" data-dismiss="modal">&times;</button>

               </div>
               <div class="modal-body">
                 <label for="username" style="margin:0;">Username</label>
                    <input type="text" name="username" id="username" class="input" autocomplete="none" placeholder="User Name"/>
                    <br />
                    <label for="designation" style="margin:0;">Designation</label>
                    <input type="text" name="designation" id="designation" class="input"placeholder="Designation" />
                    <br />
                    <label for="details" style="margin:0;">Details</label>
                    <input type="text" name="details" id="details" class="input"placeholder="details" />
                    <br />
                    <label for="email" style="margin:0;">Email</label>
                    <input type="email" name="email" id="email "class="input"placeholder="email">
                    <br>
                    <label for="phonenumber" style="margin:0;">Phonenumber</label>
                    <input type="number" name="phonenumber" id="number" class="input"placeholder="Phone Number"autocomplete="none" onchange="f1(this)" />
                    <p class="error" style="display:none;color:red;margin-bottom:0;opacity:0.7;">please enter correct number !</p>
                    <br />
                    <label for="Address" style="margin:0;">Address</label>
                    <input type="text" name="Address" id="Address" class="input"placeholder="Address" />
                    <br />
                    <button type="button" name="login_button" id="login_button" class="btn btn-lg btn-block btn-primary">Login</button>
               </div>
             </div>
           </div>
      </div>
 </div>
 <script>
 $(document).ready(function(){
      $('#login_button').click(function(){
           var username = $('#username').val();
           var designation = $('#designation').val();
           var details = $('#details').val();
           var email = $('#email').val();
           var phonenumber = $('#number').val();
           var address = $('#Address').val();
           if(username != '' && designation != '' && email!='' && phonenumber!=''&&address!=''&&details!='')
           {
                $.ajax({
                     url:"action.php",
                     method:"POST",
                     data: {username:username, designation:designation ,details:details,email:email,phonenumber:phonenumber,address:address},
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
                alert("Every field is required");
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
<<<<<<< HEAD
 function f1(x){
   number= $('#number').val();
   if(number.length!=10)
   {
        $(".error").css("display","block");
   }
   else {
       $(".error").css("display","none");
   }

 }
=======
 // When the user scrolls the page, execute myFunction
window.onscroll = function() {myFunction()};

// Get the navbar
var navbar = document.getElementById("navbar");

// Get the offset position of the navbar
var sticky = navbar.offsetTop;

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
>>>>>>> upstream/main
 </script>
