<?php
$output = "";
include_once '../controller/dbcontroller.php';
$success = false;
if(isset($_POST['submit'])){
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$phonenumber=$_POST['phonenumber'];
$address=$_POST['address'];
$location=$_POST['location'];
$educationallevel=$_POST['educationallevel'];
$username=$_POST['username'];
$password=$_POST['password'];

  
$db=new dbcontroller();
$result=$db->addindpendentresearcher_pass($username,$password);

       
if($result=='1'){
    $accId = $db->getId($username,$password);
   $db->indpendentresearchersignup($firstname,$lastname,$email,$phonenumber,$address,$location,$educationallevel,$accId);
   $success = true;

  }else{
 
      $output =  'Username already taken Please try again';
}
}
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
         <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Ethio-Scholar</title>
   <link rel="icon" type="image/png" href="logo_1.PNG"/>
  <!-- Font Awesome -->
  <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"> -->
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">
  <style>
      body{
            background-color: whitesmoke;
             margin-top: 30px;
            }
            p{
    color: #ffc107;
     }
    
      a {
    color: black;
}
a:hover{
    color: darkgray;
}
.buttonback {
    background-color: white;
    color: black;
    border: 2px solid #e7e7e7;
    margin-left: 1550px;
    /*padding: 25px 20px 10px 10px;*/
}
      
  </style>
    </head>
    
    <body>
       
       
         <div class="d-flex justify-content-center"> 
       <!-- Default form register -->
       <form class="text-center border border-light p-5" style="background-color: white; width: 50%;" action="signupresearcher.php" method="post">

    <p class="h4 mb-4">Independent Researcher Sign up</p>

    <div class="form-row mb-4">
        <div class="col">
            <!-- First name -->
            <input type="text" id="defaultRegisterFormFirstName" class="form-control" placeholder="First name" name="firstname" required>
        </div>
        <div class="col">
            <!-- Last name -->
            <input type="text" id="defaultRegisterFormLastName" class="form-control" placeholder="Last name" name="lastname" required>
        </div>
    </div>
     <!--<div class="col">-->
    <!-- E-mail -->
    <input type="email" id="defaultRegisterFormEmail" class="form-control mb-4" placeholder="E-mail" name="email" required>
    <small>Phone Format:  123-456-7890</small>
    <input type="tel" id="phone" class="form-control mb-4" placeholder="Phone Number" name="phonenumber" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" size="20" minlength="10" maxlength="14" required>
<!--<input type="text" id="defaultRegisterPhonePassword" class="form-control" placeholder="Phone Number" aria-describedby="defaultRegisterFormPhoneHelpBlock" name="phonenumber" required>-->
     </br>
     <input type="text" id="defaultRegisterFormAddress" class="form-control" placeholder="Address" name="address" required>
    <!--</div>-->
     </br>
     <input type="text" id="defaultRegisterFormLocation" class="form-control" placeholder="Area of study" name="location" required>
    <!--</div>-->
    </br>
    
     
    <select class="browser-default custom-select mb-4" name="educationallevel" required>
        <option value="" disabled>Choose option</option>
        <option value="" selected>Educational Level</option>
        <option value="MS.c">MS.c</option>
        <!--2-4 yr work exp. and publishing and community-->
        <option value="Assistance Professor">Assistance Professor </option>
        <option value="PHD">PHD</option>
        <option value="Associate Professor">Associate Professor</option>
        <option value="Professor">Professor</option>
        
    </select>

    <!--username-->
    <input type="text" id="defaultRegisterFormUsername" class="form-control" placeholder="Username" name="username" required>
    <!-- Password -->
    <p class="text-danger"><?php echo $output;?></p>
     </br>
     <input type="password" id="defaultRegisterFormPassword" class="form-control" placeholder="Password" aria-describedby="defaultRegisterFormPasswordHelpBlock" name="password" required>
    <small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
      
    </small>
     <!--<input type="password" id="defaultRegisterFormPassword" class="form-control" placeholder="Confirm Password" aria-describedby="defaultRegisterFormPasswordHelpBlock">-->
   
    <button class="btn btn-outline-amber" type="submit" name="submit">
                 SIGN UP
               </button>
               <button id="modal" class="btn btn-outline-amber d-none" data-toggle="modal" data-target="#basicExampleModal">
                 Model
               </button>
      
      <p class="font-small grey-text d-flex justify-content-center">Already have an account? <a href="./login.php" class="dark-grey-text font-weight-bold ml-1">Login</a></p>
        </form>
<!-- Default form register -->
         </div>    
       
               <!-- Modal -->
               <div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                 aria-hidden="true">
                 <div class="modal-dialog" role="document">
                   <div class="modal-content">
                     <div class="modal-header">
                       <h5 class="modal-title" id="exampleModalLabel">Ethio-Scholars, Independent Researcher</h5>
                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                       </button>
                     </div>
                     <div class="modal-body">
                      Succesfully registered. Do you want to Login?
                     </div>
                     <div class="modal-footer">
                         <button class="btn btn-grey" data-dismiss="modal">Close</button>
                         <a href="./login.php" class="btn btn-amber">Login</a>
                     </div>
                   </div>
                 </div>
               </div>
     
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <?php if($success==true){ ?>
  <script type="text/javascript">
      $(document).ready(function(){
          $('#modal').click();
       });
  </script>
  <?php } ?>
    </body>
</html>
