  
     <?php
    
    
     $active = "services";
       include_once './template/header.php';
        $role=$_SESSION['role'];
        ?>  
  
          <div class="d-flex justify-content-center ">
            <!--<div class="card booking-card" style="width:1200px;  margin-top: 100px; margin-left: 150px;" >-->

            <div class="card-deck" style="margin-left: 300px; margin-right: 300px; margin-top: 100px;">

              <!-- Card -->
              <?php if($role=="university" || $role=="indpendentresearcher"):;?>
              <div class="card mb-4 " style="width: 600px; height: 400px;">

                <!--Card image-->
                <div class="view overlay ">
                    <li class="fa fa-upload  fa-6x amber-text" style="margin-left:100px;margin-bottom: 10px;margin-top: 100px; margin-right: 100px;" ></li>
                    <!--<img class="card-img-top" src=""  style="width: 380px; height: 240px;" >-->
                  <a href="upload.php">
                    <div class="mask rgba-white"></div>
                  </a>
                </div>

    <!--Card content-->
    <div class="container">
    <div class="card-body col-mp-2 row ">

      <!--Title-->
      <a href="upload.php"> <h4 class="card-title black-text"<center><u>UPLOAD</u></center></h4></a>
      <!--Text-->
      <p class="card-text">Universities and Independent researchers can upload their research papers.</p>
      <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
     

    </div>
    

  
      <div class="card mb-4" style="width: 600px; height: 400px;">

    <!--Card image-->
    <div class="view overlay">
        <li class="fa fa-money-check-alt  fa-6x amber-text" style="margin-left:100px;margin-bottom: 10px;margin-top: 100px; margin-right: 100px;" ></li>
        <!--<img class="card-img-top" src="fundingpic.jpg" style="width: 380px; height: 240px;" alt="Card image cap">-->
      <a href="grant">
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>

    <!--Card content-->
    <div class="card-body">

      <!--Title-->
      <a href="grant.php"> <h4 class="card-title black-text"<center><u>Grant</u></center></h4></a>
      <!--<h4 class="card-title"><center>GRANTS</center></h4>-->
      <!--Text-->
      <p class="card-text">We offer grant opportunities for Universities and Independent researchers to finance their research.</p>
      <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
   

    </div>

  </div> 
               </div> 
 <?php else :;?>
  <!-- Card -->

  <!-- Card -->
  <div class="card mb-4" style="width: 400px; height: 400px;">

    <!--Card image-->
    <div class="view overlay">
        <li class="fa fa-download  fa-6x amber-text" style="margin-left:100px;margin-bottom: 10px;margin-top: 100px; margin-right: 100px;" width="30px"></li>
        <!--<img class="card-img-top" src="down.jpg" style="width: 380px; height: 240px;" alt="Card image cap">-->
      <a href="researches.php">
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>

    <!--Card content-->
    <div class="card-body">

      <!--Title-->
      <a href="researches.php"> <h4 class="card-title black-text"<center><b><u>Download</u></b></center></h4></a>
      <!--<h4 class="card-title"><center>DOWNLOAD</center></h4>-->
      <!--Text-->
      <p class="card-text">Enterprises and users can download any research paper they are looking for.</p>
      <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
     
    </div>

  </div>
  
  <!-- Card -->

  <!-- Card -->
  
              </div>
<!--              </div>-->
         
  <div class="d-flex justify-content-center">
  
<div class="card-deck row" style="margin-left: 300px; margin-right: 300px; margin-top: 20px; ">

  <!-- Card -->
  <div class="card mb-4" style="width: 400px; height: 400px;">

    <!--Card image-->
    <div class="view overlay">
        <li class="fa fa-search  fa-6x amber-text" style="margin-left:100px;margin-bottom: 10px;margin-top: 100px; margin-right: 100px;" ></li>
        <!--<img class="card-img-top" src="searchpic.jpg" style="width: 380px; height: 240px;" alt="Card image cap">-->
      <a href="researches.php">
        <div class="mask rgba-white"></div>
      </a>
    </div>

    <!--Card content-->
    <div class="card-body">

      <!--Title-->
      <a href="researches.php"> <h4 class="card-title black-text"<center><b><u>Search Any Paper</u></b></center></h4></a>
<!--      <h4 class="card-title"><center>SEARCH ANY PAPER</center></h4>-->
      <!--Text-->
      <p class="card-text">Search for any research paper you are looking for.</p>
      <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
      

    </div>

  </div>
 

  </div>
 </div>

              </div>
         
             <?php endif;?>
         
               </div> 
                </div> 
          
       
        <?php
        include_once './template/footer.php';
        ?>
   
