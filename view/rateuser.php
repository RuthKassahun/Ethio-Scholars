        <?php
          $active = "reserches";
           include_once './template/header.php';
          
//           echo '<script>alert('.$paperId.')</script>';
        ?> 

<?php

include ('../controller/db.php');  
  if(isset($_GET['id'])){
 $paperId=$_GET['id'];

$sql= "SELECT * FROM rating where paperId='".$paperId."'";
  
$res= mysqli_query($con,$sql);

 if($res){
//  echo 'Succesfully fetsched';
//    header("Location: researches.php");
 }
 else{
     echo 'Please try again';
 }
     
  }

?>


<?php

while ($row = mysqli_fetch_array($res)){
       $username=$row['5'];
         $feedback=$row['3'];
          $ratingnumber=$row['4'];
    
//    echo $id. "" . $name . "<a href='download.php?dow=$path'>Download</a><br>";
?>
        <?php
echo ' <div class="row"><div class="col-8">
    <div class="media" style="margin:20px; margin-left:600px;">
     <img class="d-flex mr-3" width="100px" height="100px;"   src="images.jpg" alt="Generic placeholder image">
   <div class="media-body" style="margin-left:10px;">';

    echo '<h3> '.$username.'</h5>';
          echo '<h5>  '.$feedback.'</h5>';
          for($a=0;$a<$ratingnumber;$a++){
      echo'<label  class="amber-text" for="5"><h1>☆</h1></label>';
//          echo '<label for="5">☆</label></div>';
      }
        echo '<hr>';
 echo' </div>
</div>
</div>
</div>
';
     }
?>


 <?php
       include_once './template/footer.php';
        ?> 
 
 