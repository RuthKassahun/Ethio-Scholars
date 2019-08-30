<?php
$output= '';
include_once '../controller/dbcontroller.php';
$success = false;
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
 $success = true;

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
   <link rel="icon" type="image/png" href="logo_1.PNG"/>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">
  <script>
      
  </script>
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
    <form class="text-center border border-light p-5" style="margin-top: 40px; margin-bottom: 80px; background-color: white;" action="#" method="post">

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
        <input type="text" id="defaultRegisterFormFirstName" class="form-control" placeholder="Address" name="location" required>
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
        <small>Phone Format: 123-456-7890</small>
            <div class="form-row mb-4">
               
                    <div class="col">
                      
              <input type="tel" id="phone" class="form-control mb-4" placeholder="Inistitution Phone 1" name="institutionphone1" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" size="20" minlength="10" maxlength="14" required>              
     
                    </div>
                        <div class="col">
                        <input type="tel" id="phone" class="form-control mb-4" placeholder="Inistitution Phone 2" name="institutionphone2" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" size="20" minlength="10" maxlength="14">                   
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
    
         <button class="btn btn-outline-amber" type="submit" name="submit">
                 SIGN UP
               </button>
               <button id="modal" class="btn btn-outline-amber d-none" data-toggle="modal" data-target="#basicExampleModal">
                 Model
               </button>
                <!--<p class="text-success"></p>-->
          <p class="font-small grey-text d-flex justify-content-center">Already have an account? <a href="./login.php" class="dark-grey-text font-weight-bold ml-1">Login</a></p>
    </form>
        </div>
    
    <!-- Modal -->
               <div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                 aria-hidden="true">
                 <div class="modal-dialog" role="document">
                   <div class="modal-content">
                     <div class="modal-header">
                       <h5 class="modal-title" id="exampleModalLabel">Ethio-Scholars, University</h5>
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
  
  <?php } ?>
  </script>
</body>

</html>