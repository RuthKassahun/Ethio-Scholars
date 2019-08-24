
  <?php
  mysqli_connect("localhost","root","")or die("could not connect");
  include_once '../controller/dbcontroller.php';
  include_once '../controller/dbconnect.php';

  
  
  $db=new dbcontroller();
  $db2=new dbconnect();
  $conn=$db2->connect();
  
  //collect
  if(isset($_POST['search'])){
      $searchq = $_POST['search'];
//      $searchq = $_preg_replace("#[^0-9a-z]#i", "", $seachq);
     $query="SELECT * FROM searchgrant WHERE fieldname LIKE '%".$searchq."%' OR fieldid  LIKE '%".$searchq."%'";
     $result = mysqli_query($conn, $query);
      $count = mysqli_num_rows($result);
      
      if ($count == 0)
      {
          $output= 'no result to be found';
      }
      else{ 
          while($rows = mysqli_fetch_array($result)){
           $fname = $rows[1];    
            $fid = $rows[0]; 
            $output= '<div>' .$fname. '' . $fid. '</div>';
            $ss="<script>document.getElementById('msg').html('".$output."')</script>";
            
            echo  $output;
          }
      }
  }
  //its to fitech from db, n to dispaly i use the php for each img,discription, by row
  $query="Select * from grantdoc";
  $result3=mysqli_query($conn,$query);
  //this ends there
  
  ?>

 










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
            .section1{
                margin-right: 250px;
                margin-left: 250px;
                margin-top: 50px;
                margin-bottom: 200px;
                padding:50px;

            }
            .a{
                text-color:black;
            }
        
        </style>
    </head>
 <body>

                   <form action ="grant.php" method="post">
                    
                    <input type="text" name="search" placeholder="search by keyword">
                    <input type="submit" value=">>>">
                </form> 

        <!-- Section: Blog v.3 -->
        <div class="section1">
<section class="my-5">
           
    <!-- Section heading -->
    <h2 class="h1-responsive font-weight-bold text-center my-5">Grants</h2>
    <!-- Section description -->
    <p class="text-center dark-grey-text w-responsive mx-auto mb-5">Duis aute irure dolor in reprehenderit in
      voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
      proident, sunt in culpa qui officia deserunt mollit anim id est laborumhgkjdhkgjhdfjhd</p>
          // use php to fitch and loop all db files using array
        <?php while ($row=  mysqli_fetch_array($result3)):;?>
    <!-- Grid row -->
    <div class="row">
  
      <!-- Grid column -->
      <div class="col-lg-5 col-xl-4">
  
        <!-- Featured image -->
        <div class="view overlay rounded z-depth-1-half mb-lg-0 mb-4">
            <img class="img-fluid" src="<?php echo $row[7];?>" alt="women's in charge">
           
          <a>
            <div class="mask rgba-white-slight"></div>
          </a>
        </div>
  
      </div>
      <!-- Grid column -->
  
      <!-- Grid column -->
      <div class="col-lg-7 col-xl-8">
  
        <!-- Post title -->
        <h3 class="font-weight-bold mb-3"><strong><a href="#"><?php echo $row[2]; ?></a></strong></h3>
        <!-- Excerpt -->
        <p class="dark-grey-text"><?php echo $row[4]; ?></p>
        <p> <a class="font-weight-bold"><?php echo $row[6];?></p>
        <!-- Read more button -->
<!--        <a class="btn  btn-light btn-md text-white-50 bg-dark" >-->
            <a href="http://etd.aau.edu.et/handle/123456789/1658">Read more</a></a>
        //
        <div class="spinner-grow text-light" role="status">
                <span class="sr-only">Loading...</span>
              </div>
              <div class="spinner-grow text-light" role="status">
                <span class="sr-only">Loading...</span>
              </div>
              <div class="spinner-grow text-light" role="status">
                <span class="sr-only">Loading...</span>
              </div>
              <div class="spinner-grow text-light" role="status">
                <span class="sr-only">Loading...</span>
              </div>
              <div class="spinner-grow text-light" role="status">
                <span class="sr-only">Loading...</span>
              </div>
              <div class="spinner-grow text-light" role="status">
                <span class="sr-only">Loading...</span>
              </div>
              <div class="spinner-grow text-light" role="status">
                <span class="sr-only">Loading...</span>
              </div>
              <div class="spinner-grow text-light" role="status">
                <span class="sr-only">Loading...</span>
              </div>
        //
  
      </div>
      <!-- Grid column -->
  //
<?php endwhile; ?>
  
 
<!--  <section class="my-5">

        
      
         Grid row 
        <div class="row">
      
           Grid column 
          <div class="col-lg-5 col-xl-4">
      
             Featured image 
            <div class="view overlay rounded z-depth-1-half mb-lg-0 mb-4">
                <img class="img-fluid" src="<?php echo $row[7];?>" alt="Sample image">
              <a>
                <div class="mask rgba-white-slight"></div>
              </a>
            </div>
      
          </div>
           Grid column 
      
           Grid column 
          <div class="col-lg-7 col-xl-8">
      
             Post title 
            <h3 class="font-weight-bold mb-3"><strong><a href="#"><?php echo $row[2]; ?></a></strong></h3>
             Excerpt 
            <p class="dark-grey-text"><?php echo $row[4]; ?></p>
            <p> <a class="font-weight-bold"><?php echo $row[6];?> </p>
             Read more button 
            <a class="btn  btn-light btn-md text-white-50 bg-dark">
                <a href="https://www.utoledo.edu/med/globalhealth/addisababaEthiopia.html">Read more</a></a>
            //
            <div class="spinner-grow text-light" role="status">
                    <span class="sr-only">Loading...</span>
                  </div>
                  <div class="spinner-grow text-light" role="status">
                    <span class="sr-only">Loading...</span>
                  </div>
                  <div class="spinner-grow text-light" role="status">
                    <span class="sr-only">Loading...</span>
                  </div>
                  <div class="spinner-grow text-light" role="status">
                    <span class="sr-only">Loading...</span>
                  </div>
                  <div class="spinner-grow text-light" role="status">
                    <span class="sr-only">Loading...</span>
                  </div>
                  <div class="spinner-grow text-light" role="status">
                    <span class="sr-only">Loading...</span>
                  </div>
                  <div class="spinner-grow text-light" role="status">
                    <span class="sr-only">Loading...</span>
                  </div>
                  <div class="spinner-grow text-light" role="status">
                    <span class="sr-only">Loading...</span>
                  </div>
            //
      
          </div>
//

<section class="my-5">

        
      
         Grid row 
        <div class="row">
      
           Grid column 
          <div class="col-lg-5 col-xl-4">
      
             Featured image 
            <div class="view overlay rounded z-depth-1-half mb-lg-0 mb-4">
                <img class="img-fluid" src="<?php echo $row[7];?>" alt="Sample image">
              <a>
                <div class="mask rgba-white-slight"></div>
              </a>
            </div>
      
          </div>
           Grid column 
      
           Grid column 
          <div class="col-lg-7 col-xl-8">
      
             Post title 
            <h3 class="font-weight-bold mb-3"><strong><a href="#"><?php echo $row[2]; ?></a></h3>
             Excerpt 
            <p class="dark-grey-text"><?php echo $row[4]; ?></p>
            <p> <a class="font-weight-bold"><?php echo $row[6];?> </p>
             Read more button 
            <a class="btn  btn-light btn-md text-white-50 bg-dark">
                <a href="https://eacecivil.org/">Read more</a>
            //
            <div class="spinner-grow text-light" role="status">
                    <span class="sr-only">Loading...</span>
                  </div>
                  <div class="spinner-grow text-light" role="status">
                    <span class="sr-only">Loading...</span>
                  </div>
                  <div class="spinner-grow text-light" role="status">
                    <span class="sr-only">Loading...</span>
                  </div>
                  <div class="spinner-grow text-light" role="status">
                    <span class="sr-only">Loading...</span>
                  </div>
                  <div class="spinner-grow text-light" role="status">
                    <span class="sr-only">Loading...</span>
                  </div>
                  <div class="spinner-grow text-light" role="status">
                    <span class="sr-only">Loading...</span>
                  </div>
                  <div class="spinner-grow text-light" role="status">
                    <span class="sr-only">Loading...</span>
                  </div>
                  <div class="spinner-grow text-light" role="status">
                    <span class="sr-only">Loading...</span>
                  </div>
            //
      
          </div>
          //-->
<!--        
          <section class="my-5">

        
      
                 Grid row 
                <div class="row">
              
                   Grid column 
                  <div class="col-lg-5 col-xl-4">
              
                     Featured image 
                    <div class="view overlay rounded z-depth-1-half mb-lg-0 mb-4">
                        <img class="img-fluid" src="../<?php echo $row[7];?>" alt="Sample image">
                      <a>
                        <div class="mask rgba-white-slight"></div>
                      </a>
                    </div>
              
                  </div>
                   Grid column 
              
                   Grid column 
                  <div class="col-lg-7 col-xl-8">
              
                     Post title 
                    <h3 class="font-weight-bold mb-3"><strong><a href="#"><?php echo $row[2]; ?></a></strong></h3>
                     Excerpt 
                    <p class="dark-grey-text"><?php echo $row[4]; ?></p>
                     Post data 
                    <p> <a class="font-weight-bold"><?php echo $row[6];?> </p>
                     Read more button 
                    <a class="btn  btn-light btn-md text-white-50 bg-dark">
                       <a href="http://www.ethiopians.com/EthCITA.html"> Read more</a>
                    //
                    <div class="spinner-grow text-light" role="status">
                            <span class="sr-only">Loading...</span>
                          </div>
                          <div class="spinner-grow text-light" role="status">
                            <span class="sr-only">Loading...</span>
                          </div>
                          <div class="spinner-grow text-light" role="status">
                            <span class="sr-only">Loading...</span>
                          </div>
                          <div class="spinner-grow text-light" role="status">
                            <span class="sr-only">Loading...</span>
                          </div>
                          <div class="spinner-grow text-light" role="status">
                            <span class="sr-only">Loading...</span>
                          </div>
                          <div class="spinner-grow text-light" role="status">
                            <span class="sr-only">Loading...</span>
                          </div>
                          <div class="spinner-grow text-light" role="status">
                            <span class="sr-only">Loading...</span>
                          </div>
                          <div class="spinner-grow text-light" role="status">
                            <span class="sr-only">Loading...</span>
                          </div>
                    //
              
                  </div>
          //

          //
         
          <section class="my-5">

        
      
                 Grid row 
                <div class="row">
              
                   Grid column 
                  <div class="col-lg-5 col-xl-4">
              
                     Featured image 
                    <div class="view overlay rounded z-depth-1-half mb-lg-0 mb-4">
                        <img class="img-fluid" src="../<?php echo $row[7];?>" alt="Sample image">
                      <a>
                        <div class="mask rgba-white-slight"></div>
                      </a>
                    </div>
              
                  </div>
                   Grid column 
              
                   Grid column 
                  <div class="col-lg-7 col-xl-8">
              
                     Post title 
                    <h3 class="font-weight-bold mb-3"><strong><a href="#"><?php echo $row[2]; ?></strong></h3>
                     Excerpt 
                    <p class="dark-grey-text"><?php echo $row[4]; ?></p>
                     Post data 
                    <p> <a class="font-weight-bold"><?php echo $row[6]; ?></p>
                     Read more button 
                    <a class="btn  btn-light btn-md text-white-50 bg-dark">
                        <a href="https://opendocs.ids.ac.uk/opendocs/handle/123456789/996">Read more</a>
                    //
                    <div class="spinner-grow text-light" role="status">
                            <span class="sr-only">Loading...</span>
                          </div>
                          <div class="spinner-grow text-light" role="status">
                            <span class="sr-only">Loading...</span>
                          </div>
                          <div class="spinner-grow text-light" role="status">
                            <span class="sr-only">Loading...</span>
                          </div>
                          <div class="spinner-grow text-light" role="status">
                            <span class="sr-only">Loading...</span>
                          </div>
                          <div class="spinner-grow text-light" role="status">
                            <span class="sr-only">Loading...</span>
                          </div>
                          <div class="spinner-grow text-light" role="status">
                            <span class="sr-only">Loading...</span>
                          </div>
                          <div class="spinner-grow text-light" role="status">
                            <span class="sr-only">Loading...</span>
                          </div>
                          <div class="spinner-grow text-light" role="status">
                            <span class="sr-only">Loading...</span>
                          </div>
                    //
              
                  </div>-->
          //
          //
<!--          <section class="my-5">

        
      
                 Grid row 
                <div class="row">
              
                   Grid column 
                  <div class="col-lg-5 col-xl-4">
              
                     Featured image 
                    <div class="view overlay rounded z-depth-1-half mb-lg-0 mb-4">
                        <img class="img-fluid" src="../<?php echo $row[7];?>" alt="Sample image">
                      <a>
                        <div class="mask rgba-white-slight"></div>
                      </a>
                    </div>
              
                  </div>
                   Grid column 
              
                   Grid column 
                  <div class="col-lg-7 col-xl-8">
              
                     Post title 
                    <h3 class="font-weight-bold mb-3"><strong><a href="#"><?php echo $row[2]; ?></strong></h3>
                     Excerpt 
                    <p class="dark-grey-text"><?php echo $row[4]; ?></p>
                    <p> <a class="font-weight-bold">"><?php echo $row[6]; ?></p>
                     Read more button 
                    <a class="btn  btn-light btn-md text-white-50 bg-dark"></a>
                        <a href="https://www.nature.com/news/2010/100409/full/news.2010.173.html">Read more</a>
                    //
                    <div class="spinner-grow text-light" role="status">
                            <span class="sr-only">Loading...</span>
                          </div>
                          <div class="spinner-grow text-light" role="status">
                            <span class="sr-only">Loading...</span>
                          </div>
                          <div class="spinner-grow text-light" role="status">
                            <span class="sr-only">Loading...</span>
                          </div>
                          <div class="spinner-grow text-light" role="status">
                            <span class="sr-only">Loading...</span>
                          </div>
                          <div class="spinner-grow text-light" role="status">
                            <span class="sr-only">Loading...</span>
                          </div>
                          <div class="spinner-grow text-light" role="status">
                            <span class="sr-only">Loading...</span>
                          </div>
                          <div class="spinner-grow text-light" role="status">
                            <span class="sr-only">Loading...</span>
                          </div>
                          <div class="spinner-grow text-light" role="status">
                            <span class="sr-only">Loading...</span>
                          </div>-->
                    //
              
                  </div>
          //

       </div>
      </section>
</div>


                
                
                
                <div id="msg"></div>
                
                
                
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

 