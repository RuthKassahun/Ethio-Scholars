<?php
$output='';
include_once '../controller/dbcontroller.php';
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
  $result=$db->adduser_pass($username,$password);

       
if($result=='1'){
    $accId = $db->getId($username,$password);
   $db->usersignup($firstname,$lastname,$email,$phonenumber,$address,$location,$educationallevel,$accId);

    header("Location: landingpage.php");
     }else{
   $output =  'Username already taken Please try again'; 
}
}
?>
 <?php
//function phpAlert($msg) {
//   echo '<script type="text/javascript">alert("' . $msg . '")</script>';
//   $msg="Sucessfully login";
//}
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
  <title>Material Design Bootstrap</title>
  <!-- Font Awesome -->
  <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"> -->
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">
  <style>
     .signup{
              /*width: 300px;*/
                /*height: 100%;*/
                /*background-color: buttonface;*/
                alignment-adjust: central;
           /*margin: 0px 40px 60px 20px;*/
           padding: 30px;
      }
      a{
          color: black;
         
      }
      a:hover {
    color: darkgray;
}
.buttonback {
    background-color: white;
    color: black;
    border: 2px solid #e7e7e7;
    margin-left: 1550px;
    /*padding-top: 15px;*/
}
      
  </style>
    </head>
    
    
    <body>
        <!--<button class="button buttonback"><a href="landingpage.php">Back</a></button>-->
        <div class="signup">
         <div class="d-flex justify-content-center"> 
       <!-- Default form register -->
       <form></form>
       <form action="signupuser.php" method="post" class="text-center border border-light p-5">

    <p class="h4 mb-4">Sign up</p>

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
    <input type="email" id="defaultRegisterFormEmail" class="form-control mb-4" placeholder="E-mail" name="email"  required>
    <input type="text" id="defaultRegisterPhonePassword" class="form-control" placeholder="Phone Number" name="phonenumber" aria-describedby="defaultRegisterFormPhoneHelpBlock" required>
     </br>
     <input type="text" id="defaultRegisterFormAddress" class="form-control" placeholder="Address" name="address" required>
    <!--</div>-->
     </br>
     <input type="text" id="defaultRegisterFormLocation" class="form-control" placeholder="Location" name="location" required>
    <!--</div>-->
    </br>
    
     <!-- Subject -->
    <!--<label>Subject</label>-->
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
     <input type="password" id="defaultRegisterFormPassword" class="form-control" placeholder="Password" name="password" aria-describedby="defaultRegisterFormPasswordHelpBlock" required>
    <small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
       
    </small>
     <!--<input type="password" id="defaultRegisterFormPassword" class="form-control" placeholder="Confirm Password" aria-describedby="defaultRegisterFormPasswordHelpBlock">-->
     <button class="btn btn-white" type="submit" name="submit">SIGN UP</button>
       
    <!--<button class="btn btn-white" >SIGN UP</button>-->

   </form>
         </div>    
        </div>
      
         <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
    </body>
</html>
