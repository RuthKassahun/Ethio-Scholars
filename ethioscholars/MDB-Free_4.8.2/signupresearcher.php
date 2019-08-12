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
      
  </style>
    </head>
    
      <?php
//       include_once '../MDB-Free_4.8.2/header.php';
        ?>   
    <body>
        <div class="signup">
         <div class="d-flex justify-content-center"> 
       <!-- Default form register -->
<form class="text-center border border-light p-5">

    <p class="h4 mb-4">Sign up</p>

    <div class="form-row mb-4">
        <div class="col">
            <!-- First name -->
            <input type="text" id="defaultRegisterFormFirstName" class="form-control" placeholder="First name">
        </div>
        <div class="col">
            <!-- Last name -->
            <input type="text" id="defaultRegisterFormLastName" class="form-control" placeholder="Last name">
        </div>
    </div>
     <div class="col">
    <!-- E-mail -->
    <input type="email" id="defaultRegisterFormEmail" class="form-control mb-4" placeholder="E-mail">
     </div>
    
<!--     Material input email 
            <div class="col">
                <i class="fa fa-exclamation-triangle prefix grey-text"></i>
                <input type="email" id="defaultRegisterFormConfirmEmail" class="form-control mb-4 placeholder="Confirm your email">
                <label for="materialFormCardConfirmEx" class="font-weight-light"></label>
            </div>-->
    <div class="col">
    <!-- Phone number -->
    <input type="text" id="defaultRegisterPhonePassword" class="form-control" placeholder="Phone Number" aria-describedby="defaultRegisterFormPhoneHelpBlock">
<!--    <small id="defaultRegisterFormPhoneHelpBlock" class="form-text text-muted mb-4">
        Optional - for two step authentication
    </small>-->
    </div>
     </br>
    <div class="col">
    <!--address-->
    <input type="text" id="defaultRegisterFormAddress" class="form-control" placeholder="Address">
    </div>
     </br>
    <div class="col">
    <!--location-->
    <input type="text" id="defaultRegisterFormLocation" class="form-control" placeholder="Location">
    </div>
    </br>
    
     <!-- Subject -->
    <!--<label>Subject</label>-->
    <select class="browser-default custom-select mb-4">
        <option value="" disabled>Choose option</option>
        <option value="1" selected>Educational Level</option>
        <option value="2">MS.c</option>
        <!--2-4 yr work exp. and publishing and community-->
        <option value="3">Assistance Professor </option>
        <option value="4">PHD</option>
        <option value="5">Associate Professor</option>
        <option value="6">Professor</option>
        
    </select>

    <!--username-->
    <input type="text" id="defaultRegisterFormUsername" class="form-control" placeholder="Username">
    <!-- Password -->
     </br>
    <input type="password" id="defaultRegisterFormPassword" class="form-control" placeholder="Password" aria-describedby="defaultRegisterFormPasswordHelpBlock">
    <small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
        At least 8 characters and 1 digit
    </small>

    

    <!-- Newsletter -->
<!--    <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="defaultRegisterFormNewsletter">
        <label class="custom-control-label" for="defaultRegisterFormNewsletter">Subscribe to our newsletter</label>
    </div>-->

    <!-- Sign up button -->
    <button class="btn btn-white" type="submit">Sign Up</button>

    <!-- Social register -->
<!--    <p>or sign up with:</p>

    <a type="button" class="light-blue-text mx-2">
        <i class="fab fa-facebook-f"></i>
    </a>
    <a type="button" class="light-blue-text mx-2">
        <i class="fab fa-twitter"></i>
    </a>
    <a type="button" class="light-blue-text mx-2">
        <i class="fab fa-linkedin-in"></i>
    </a>
    <a type="button" class="light-blue-text mx-2">
        <i class="fab fa-github"></i>
    </a>-->

    <!--<hr>-->

<!--     Terms of service 
    <p>By clicking
        <em>Sign up</em> you agree to our
        <a href="" target="_blank">terms of service</a>-->

</form>
<!-- Default form register -->
         </div>    
        </div>
         <?php
//       include_once '../MDB-Free_4.8.2/footer.php';
        ?>
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
