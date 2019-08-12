<?php
    $output = "";
    if(isset($_POST['btnSignup'])){
        include_once('../Controller/AccountController.php');
        include_once('../Model/Student.php');
        $date = date("Y-m-d H:i:s",time());
        $student = new Student(0,$_POST['name'],$_POST['phone'],$_POST['program'],$_POST['username'],$_POST['password'],$date);
        $accountController = new AccountController();
        $output = $accountController->addStudent($student);
    }
?>
<html>
    <head>
  
        <title>Signup with User </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
               
                background-color: #f9f9f9;
        }
        .container{
            font-family: Times new roman;
            background-color:white;
           border-radius: calc;
            border-style: solid;
            border-color: cadetblue;
            border-width: 1px;
            text-align: center; 
            margin-bottom: 300px;
            margin-top: 100px;
            margin-right: 300px;
            height: 900px;
            width: 700px;
            margin-left: 400px;
            padding-bottom:0px;
            padding-top: 0px;
           }
            
     
     
        </style>
    </head>
    <body>     
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-3 mt-5">
                    <!-- Material form register -->
                    <!--<div class="card" >////
                        <h1> <b>Sign Up with User</h1>
                    <h5 class="card-header info-color  white-text text-center py-4</h5>
                    <h1><strong>Sign up with User </strong></h1>

                    <!--Card content-->
                    <div class="card-body px-lg-5 pt-0">
                        <h3> <b>Sign Up with User</h3>
                        <!-- Form -->
                        <form class="text-center" method="POST" style="color: #757575;" action="Download.php">

                                <div class="form-row">
                                <div class="col">
                                    <!-- First name -->
                                    <div class="md-form">
                                        <label for="materialRegisterFormFirstName">FName</label>
                                        <input name="name" type="text" id="materialRegisterFormFirstName" class="form-control">
                                     </div>
                                </div>
                       
                            <div class="form-row">
                                <div class="col">
                                    <!-- First name -->
                                    <div class="md-form">
                                         <label for="materialRegisterFormFirstName">Lname</label>
                                        <input name="phone" type="text" id="materialRegisterFormFirstName" class="form-control">
                                   </div>
                            <div class="form-row">
                           
                                    <!-- Last name -->
                                    <div class="md-form">
                                         <label for="materialRegisterFormLastName">phone</label>
                                        <input name="username" type="text" id="materialRegisterFormLastName" class="form-control"> 
                                     
                              <!--  </div>
                                <div class="md-form">
                                     <label for="materialRegisterFormLastName">Username</label>
                                        <input name="username" type="text" id="materialRegisterFormLastName" class="form-control">
                              -->
                                <div class="md-form">
                                     <label for="materialRegisterFormLastName">Email</label>
                                        <input name="username" type="text" id="materialRegisterFormLastName" class="form-control">
                                       
                                    </div>
                                     
                                <div class="md-form">
                                    <label for="materialRegisterFormLastName">Address</label>
                                        <input name="username" type="text" id="materialRegisterFormLastName" class="form-control">
                                   
                                    </div>
                                       
                                <div class="col">
                        
                                    <!-- Last name -->
                               <div class="md-form">
                                <label for="materialRegisterFormLastName">Password</label>
                                        <input name="password" type="password" id="materialRegisterForm>LastName" class="form-control">
                                        
                                    </div>
                                </div>
                            </div>
                                

                         
                            <!-- Default unchecked -->
                           <!-- <div class="custom-control custom-radio">
                            
                            </div>
                            <div class="md-form">-->
                            <select name="program" class="browser-default custom-select" name="dropdown">
                 
                                   
                          aria-haspopup="true" aria-expanded="false">Dropdown</a>
                            <option selected value="UG" type="text">Education level</option>
                            <option value="PG">Bachilor's</option>
                            <option value="PG">Master's</option>
                            <option value="PG">PHD</option><br><br>
                            </select>
                            </div>
                            <br>

                            <!-- Sign up button -->
                            <button name="btnSignup" class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">Sign up</button>
                            <p style="color:green;"><?php echo $output;?></p>
                            <!-- Register -->
                            <p>
                            <a href="./studentLogin.php"></a>
                            </p>
                        </form>
                        <!-- Form -->

                    </div>

                    </div>
                    <!-- Material form register -->
                    </div>

                </div>
            </div>
        </div> 
        
        </div>
        <!-- Material form login -->
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
