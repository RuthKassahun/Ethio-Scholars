<?php
    $active = "researches";
    include_once './template/header.php';
 ?>  <?php

include ('../controller/db.php');  


$sql= "SELECT * FROM documents";

$res= mysqli_query($con,$sql);

?>



<?php

while ($row = mysqli_fetch_array($res)){
    $id=$row['paperid'];
    $name=$row['title'];
    
    $dept=$row['dept'];
      $desciption=$row['desciption'];
      $price=$row['price'];
     
       $published=$row['published'];
    $path= $row['path'];
    $picpath= $row['picpath'];
    
//    echo $id. "" . $name . "<a href='download.php?dow=$path'>Download</a><br>";
?>
        <?php
echo '
    <div class="d-flex justify-content-center">
    <div class="media" style="margin:50px; ">
  <img width="150" height="200" class="d-flex mr-3" src="'.$picpath.'" alt="Generic placeholder image">
  <div class="media-body" style="margin-left:10px;">';

    echo '<h3>Titile : '.$name.'</h5>';
          echo '<h5> Department : '.$dept.'</h5>';
          echo '<h5> Abstract</h5>';
         echo '<p style="width:500px;">'.$desciption.'</p>';
         echo '<h5> Published date : '.$published.'</h5>';
        echo "<a href='downloadpage.php?id=".$id."'>Download</a>";
         echo "<a style='margin-left:100px;' href='rating.php?id=".$id."'>Rate and Review</a>";
         echo "<a style='margin-left:100px;' href='rateuser.php?id=".$id."'>See Review/comment</a>";
        echo '<hr>';
 echo' </div>
</div>
</div>

';
      // echo '<img src="'.$picpath.'" width="60" height="70" alt="cover"/>';
    
       
       
    //echo $id. "" . $name . $picpath. "<a href='download.php?id=".$id."'>Download</a><br>";
    
 

}
?>


            


<!--</div>-->
<?php 
 include_once './template/footer.php';
?>
             
       