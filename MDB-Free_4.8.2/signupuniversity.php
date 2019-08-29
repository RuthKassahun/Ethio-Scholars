<?php
$output= '';
$output2= '';
$output3= '';

include_once '../controller/dbcontroller.php';
if(isset($_POST['submit'])){
$institutionname=$_POST['institutionname'];
$institutionemail=$_POST['institutionemail'];
$location=$_POST['location'];
$institutionwebsite=$_POST['institutionwebsite'];
$fax=$_POST['fax'];
$postbox=$_POST['postbox'];
$institutionphone1=$_POST['institutionphone1'];
$institutionphone2=$_POST['institutionphone2'];
//$institutionphone3=$_POST['institutionphone3'];
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$position=$_POST['position'];
$address=$_POST['address'];
$email=$_POST['email'];
$username=$_POST['username'];
$password=$_POST['password'];

$db=new dbcontroller();
$result=$db->adduniversity_pass($username,$password);       
if($result=='1'){
    $accId = $db->getId($username,$password);
    $result=$db->universitysignup($institutionname,$institutionemail,$location,$institutionwebsite,$fax,
        $postbox,$institutionphone1,$institutionphone2,$firstname,$lastname,$position,$address,$email,$accId);

  $output2='Successfully signup now you can';
  ?>

      <?php
      $output3='here';
   
//    header("Location: login.php");
}else{
  $output =  'Username already taken Please try again';
} 
}

 
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Ethio-Scholar</title>
   <link rel="icon" type="image/png" href="logo.PNG"/>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">
  <style>
      body{
          padding: 2px;
          background-color: whitesmoke;
      }
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
        border: 1px solid #ffc107;
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
         hover:#ffc107;
      }
      a:hover {
    color: darkgray;
}
.buttonback {
    background-color: white;
    color: black;
    border: 2px solid #e7e7e7;
    margin-left: 1550px;
    padding-top: 15px;
}
p{
    color: #ffc107;
}
input:focus{
    border-color: #ffc107 !important;
   
}
    </style>
</head>

<body>
    <div class="d-flex justify-content-center">
    <form class="text-center border border-light p-5" style="margin-top: 40px; margin-bottom: 80px; background-color: white;" action="signupuniversity.php" method="post">

        <p class="h4 mb-4">University Sign up</p>
        <fieldset>
                <legend>University Information</legend>
        <div class="form-row mb-4">
            <div class="col">
                <!-- First name -->
         <input type="text" id="defaultRegisterFormFirstName" class="form-control" placeholder="Inistitution name" name="institutionname" required>
            </div>
            
            <div class="col">
                    <!-- Last name -->
         <input type="email" id="defaultRegisterFormEmail" class="form-control mb-4" placeholder="Institution  E-mail" name="institutionemail" required>
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
       <input type="text" id="defaultRegisterFormFirstName" class="form-control" placeholder="Inistitution Website" name="institutionwebsite" required>
                </div>
                
            </div>

        <div class="form-row mb-4">
                <div class="col">
                    <!-- First name -->
      <input type="text" id="defaultRegisterFormFirstName" class="form-control" placeholder="Fax" name="fax">
                </div>
                
                <div class="col">
                        
       <input type="text" id="defaultRegisterFormEmail" class="form-control mb-4" placeholder=" PO Box" name="postbox">
         </div>
            </div>

            <div class="form-row mb-4">
                    <div class="col">
                        
       <input type="number" id="defaultRegisterFormFirstName" class="form-control" placeholder="Inistitution Phone 1" name="institutionphone1" required>
                    </div>
                    
                    <div class="col">
                            
       <input type="number" id="defaultRegisterFormEmail" class="form-control mb-4" placeholder=" Inistitution Phone 2" name="institutionphone2">
             </div>
             
              </div>
<hr>

                    <fieldset>
                  <legend>Employee Information</legend>
                  <p>(An Employee is a person represented by the university to upload a research paper) </p>
              <div class="form-row mb-4">
                  <div class="col" style="border-color:">
                  <!-- First name -->
                  <input type="text" id="defaultRegisterFormFirstName" class="form-control" placeholder="First name" name="firstname" required>
              </div>
               <div class="col">
                  <!-- last name -->
                  <input type="text" id="defaultRegisterFormFirstName" class="form-control" placeholder="Last name" name="lastname" required>
              </div>

                   </div>
                   </fieldset>

            <div class="form-row mb-4">
                <div class="col">
                    <!-- First name -->
         <input type="text" id="defaultRegisterFormFirstName" class="form-control" placeholder="Position" name="position" required>
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
            <p class="text-danger"><?php echo $output;?></p>
              
            </div>
         
            
            <div class="col">
                    <!-- Last name -->
                    <input type="password" id="defaultRegisterFormEmail" class="form-control mb-4" placeholder="Password" name="password" required>
     </div>

        </div>
    
<button class="btn btn-outline-warning"  type="submit" name="submit">SIGN UP</button>
                <p class="text-success"><?php echo $output2 .'<a href="../MDB-Free_4.8.2/login.php" class="dark-gray-text font-weight-bold ml-1">Login</a>'.$output3;?></p>
          <p class="font-small grey-text d-flex justify-content-center">Already have an account? <a href="../MDB-Free_4.8.2/login.php" class="dark-grey-text font-weight-bold ml-1">Login</a></p>
    </form>
        </div>
   
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
</body>

</html>