<?php
include_once '../controller/dbcontroller.php';
if(isset($_POST['submit'])){
$companyname=$_POST['companyname'];
$companyemail=$_POST['companyemail'];
$location=$_POST['location'];
$companywebsite=$_POST['companywebsite'];
$fax=$_POST['fax'];
$postbox=$_POST['postbox'];
$companyphone1=$_POST['companyphone1'];
$companyphone2=$_POST['companyphone2'];
$companyphone3=$_POST['companyphone3'];
$fullname=$_POST['fullname'];
$position=$_POST['position'];
$address=$_POST['address'];
$email=$_POST['email'];
$username=$_POST['username'];
$password=$_POST['password'];

$db=new dbcontroller();
  $result=$db->addenterprise_pass($username,$password);

if($result=='1'){
    $accId = $db->getId($username,$password);
  $db->enterprisesignup($companyname,$companyemail,$location,$companywebsite,$fax,
        $postbox,$companyphone1,$companyphone2,$companyphone3,$fullname,$position,$address,$email,$accId);
       header("Location: landingpage.php"); 
//    echo 'Enterprise Successfully signup';
  }else{
   echo 'Please try again';
} 
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Material Design Bootstrap</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">
  <style>
    div.img {
        margin: 20px;
        border: 1px solid #ccc;
        float: left;
        width: 150px;
        margin-top: 50px;
        
    }
    div.img2 {
        margin: 1px;
       
        float: left;
        width: 300px;
        margin-top: 50px;
    }
    div.img:hover {
        border: 1px solid #777;
    }
    
    div.img img {
        width: 100%;
        height: auto;
    }
    
    div.desc {
        padding: 15px;
        text-align: center;
    }
    
    .button {
    background-color:lightslategray;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
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
   <button class="button buttonback"><a href="landingpage.php">Back</a></button>
 <!-- Default form register -->
 <form class="text-center border border-light p-5" style="margin-right: 300px; margin-left: 300px; margin-top: 50px;" action="enterpriseSignup.php" method="post">

        <p class="h4 mb-4">Sign up</p>
        <fieldset>
                <legend>Company Information</legend>
        <div class="form-row mb-4">
            <div class="col">
                <!-- First name -->
                <input type="text" id="defaultRegisterFormFirstName" class="form-control" placeholder="Company name" name="companyname" required>
            </div>
            
            <div class="col">
                    <!-- Last name -->
                    <input type="email" id="defaultRegisterFormEmail" class="form-control mb-4" placeholder=" Company E-mail" name="companyemail" required>
     </div>
        </div>
     </fieldset>
    
    <div class="form-row mb-4">
            <div class="col">
                <!-- First name -->
                <input type="text" id="defaultRegisterFormFirstName" class="form-control" placeholder="Location" name="location" required>
            </div>
            
        </div>
        <div class="form-row mb-4">
                <div class="col">
                    <!-- First name -->
                    <input type="text" id="defaultRegisterFormFirstName" class="form-control" placeholder="Company Website" name="companywebsite" required>
                </div>
                
            </div>

        <div class="form-row mb-4">
                <div class="col">
                    <!-- First name -->
                    <input type="text" id="defaultRegisterFormFirstName" class="form-control" placeholder="Fax" name="fax" required>
                </div>
                
                <div class="col">
                        <!-- Last name -->
                        <input type="text" id="defaultRegisterFormEmail" class="form-control mb-4" placeholder=" PO Box" name="postbox" required>
         </div>
            </div>

            <div class="form-row mb-4">
                    <div class="col">
                        <!-- First name -->
                        <input type="number" id="defaultRegisterFormFirstName" class="form-control" placeholder="Company Phone 1" name="companyphone1" required>
                    </div>
                    
                    <div class="col">
                            <!-- Last name -->
                            <input type="number" id="defaultRegisterFormEmail" class="form-control mb-4" placeholder=" Company Phone 2" name="companyphone2" required>
             </div>
             <div class="col">
                    <!-- Last name -->
                    <input type="number" id="defaultRegisterFormEmail" class="form-control mb-4" placeholder=" Company Phone 3" name="companyphone3" required>
     </div>
                </div>
               
<hr>

<fieldset>
        <legend>Employee Information</legend>
<div class="form-row mb-4">
    <div class="col">
        <!-- First name -->
        <input type="text" id="defaultRegisterFormFirstName" class="form-control" placeholder="Full name" name="fullname" required>
    </div>
    
  
</div>
 </fieldset>

<div class="form-row mb-4">
    <div class="col">
        <!-- First name -->
        <input type="text" id="defaultRegisterFormFirstName" class="form-control" placeholder="position" name="position" required>
    </div>
    
</div>
<div class="form-row mb-4">
        <div class="col">
            <!-- First name -->
            <input type="text" id="defaultRegisterFormFirstName" class="form-control" placeholder="Address" name="address" required>
        </div>
        
    </div>
    <div class="form-row mb-4">
        <div class="col">
            <!-- First name -->
            <input type="email" id="defaultRegisterFormEmail" class="form-control mb-4" placeholder="Email" name="email" required>
 
            </div>
        
    </div>

    <div class="form-row mb-4">
            <div class="col">
                <!-- First name -->
                <input type="text" id="defaultRegisterFormFirstName" class="form-control" placeholder="Username" name="username" required>
            </div>
            
            <div class="col">
                    <!-- Last name -->
                    <input type="password" id="defaultRegisterFormEmail" class="form-control mb-4" placeholder="Passoword" name="password" requireds>
     </div>
<!--     <div class="col">
             Last name 
            <input type="number" id="defaultRegisterFormEmail" class="form-control mb-4" placeholder="Confirm Password">
</div>-->
        </div>
       
</div>
        <!-- Sign up button -->
     
        <!--<button type="button" class="btn btn-blue-grey"><a href="../MDB-Free_4.8.2/home.php">SIGN UP</a></button>-->
        <button class="btn btn-white" type="submit" name="submit">SIGN UP</button>
        <!-- Social register -->
       
    </form>
    <!-- Default form register -->
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