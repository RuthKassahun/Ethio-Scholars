<?php
    $active = "researches";
    include_once './template/header.php';
 ?>  <?php

include ('../controller/db.php');  
$accId = $_SESSION['accountId'];
if(isset($_GET['search']) && $_GET['search']==""){
    $sql= "SELECT * FROM documents WHERE accId = '$accId'";
}
if(isset($_GET['search'])){
    $sql= "SELECT * FROM documents WHERE title like '%$_GET[search]%' AND accId = '$accId'";
}else{
    $sql= "SELECT * FROM documents WHERE accId = '$accId'";
}


$res= mysqli_query($con,$sql);

?>


<div class="container d-flex justify-content-end mt-3" >
    <form class="form-inline" style="width: 400px;  margin-left: 10px; margin-right: 20px; margin-top: 20px;" method="GET" action="researches.php">
        <i class="fas fa-search" aria-hidden="true"></i>
        <input name="search" class="form-control form-control-sm ml-3 w-75" type="text" placeholder="Search"
          aria-label="Search">
      </form>
</div>
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
             
       