<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!--  <meta http-equiv="x-ua-compatible" content="ie=edge">-->
  <title>Material Design Bootstrap</title>
  <!-- Font Awesome -->
  <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"> -->
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">
<!--  <script type="text/javascript" src="jss.js"></script>-->
 
</head>


<!-- Material form login --> 
<div class="card" style="margin-left: 400px; margin-top: 100px; width: 50%" style="background-image: url(ab.jpg); width: 28rem;">

  <h5 class="card-header info-color white-text text-center py-4">
    <strong>Change New Password</strong>
  </h5>

  <!--Card content-->
  <div class="card-body px-lg-5 pt-0">

    <!-- Form -->
    <form class="text-center" style="color: #757575;" action="../model/updatePass.php" method="post" name="users">
        
        <div class="md-form">
            <input type="text" id="materialLoginFormPassword" class="form-control" name="user">
        <label for="materialLoginFormPassword">User Name</label>
      </div>

       <div class="md-form">
           <input type="password" id="materialLoginFormPassword" class="form-control" name="passward">
        <label for="materialLoginFormPassword">Old Password</label>
      </div>

      <!-- Password -->
      <div class="md-form">
        <input type="password" id="materialLoginFormPassword" class="form-control" name="newpass" >
        <label for="materialLoginFormPassword">New Password</label>
        
      </div>
<div class="md-form">
        <input type="password" id="materialLoginFormPassword" class="form-control" name="confirmpass">
        <label for="materialLoginFormPassword">Confirm Password</label>
        
      </div>
      <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit" onclick="validate()">Change Password</button>

      <!-- Register -->
      

    </form>

      <script>
          function validate(){



var pass =document.forms["users"]["newpass"].value;
var confirmpass= document.forms["users"]["confirmpass"].value;

if(pass !== confirmpass){
   alert("New Password doesn't match")
    //header("Location: /onlineStudentCleranceSystem/MDB-Free_4.8.2/ruth/r.html");
}


}
          </script>

      <!-- Sign in button -->
    
    <!-- Form -->

  </div>

</div>
<!-- Material form login -->
<!-- Default form login -->
    
    

<!-- Footer -->


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
