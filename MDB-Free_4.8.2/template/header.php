
<?php 
    session_start();
    $role = $_SESSION['role'];
?>
<!DOCTYPE html>

<!--To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.-->

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Material Design Bootstrap</title>
         <!--Font Awesome--> 
         <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"> 
         <!--Bootstrap core CSS--> 
        <link href="css/bootstrap.min.css" rel="stylesheet">
         <!--Material Design Bootstrap--> 
        <link href="css/mdb.min.css" rel="stylesheet">
         <!--Your custom styles (optional)--> 
        <link href="css/style.css" rel="stylesheet">
        <style>
        .navbar{
               padding-top: 35px;
               padding-bottom:35px; 
            }
        .navbar .nav-item{
                margin-right: 10px;
          
            }
        .navbar .nav-link{
                padding-right:20px !important;
                padding-left: 20px !important;
                color: black;
            }
            .active{
                background: gray;
                border-radius: 4px;
            }
            .active .nav-link{
                 color: white !important;
            }
            div.img {
                margin: 20px;
                border: 10px solid #ccc;
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
                border: 1px solid #ccc;
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
        .grant{
          widith:100;
          height:150;
          margin-left: 400px;
          margin-right: 400px;
          padding: 100px;
      }
      .upload{
             
           alignment-adjust: central;
           /*margin: 0px 40px 60px 20px;*/
           padding: 30px;
      }
/*      img {
    border-radius: 50%;
}*/
        </style>
    </head>
    
    <body>
            <nav class="mb-1 navbar navbar-expand-lg navbar-light bg-white px-4">
                <img src="./img3.jpg" height="30" class="d-inline-block align-top mr-2"
                  alt="mdb logo">
                <a class="navbar-brand" href="#">Ethio Scholars</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
                aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
                <ul class="navbar-nav ml-auto">
                   <li class="nav-item <?php if($active=="home") echo "active"?>">
                      <a class="nav-link" href="home.php">Home
                      <span class="sr-only">(current)</span>
                      </a>
                  </li>
                  
                  <li class="nav-item <?php if($active=="services") echo "active"?>">
                      <a class="nav-link" href="service.php">Services</a>
                  </li>
                 <?php if($role == "user" || $role == "enterprise"){ ?>
                  <li class="nav-item <?php if($active=="researches") echo "active"?>">
                      <a class="nav-link" href="researches.php">Researches</a>
                  </li>

                 <?php } ?>
                  <?php if($role == "indpendentresearcher" || $role == "university"){ ?>
                  <li class="nav-item <?php if($active=="upload") echo "active"?>">
                      <a class="nav-link" href="upload.php">Upload</a>
                  </li>
                  <li class="nav-item <?php if($active=="grant") echo "active"?>">
                      <a class="nav-link" href="grant.php">Grant</a>
                  </li>
                  
                 <?php } ?>
                  <li class="nav-item <?php if($active=="team") echo "active"?>">
                      <a class="nav-link" href="team.php">Team</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
                      aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-user"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-default"
                      aria-labelledby="navbarDropdownMenuLink-333">
                        
                      <a class="dropdown-item" href="#">Change Password</a>
                      <a class="dropdown-item" href="logout.php">logout</a>
                      <!--<a class="dropdown-item" href="#">Something else here</a>-->
                    </div>
                  </li>
                </ul>
                
              </div>
            </nav>
