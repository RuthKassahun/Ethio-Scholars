<?php

include ('../control/db.php');  

$sql= "SELECT * FROM documents";

$res= mysqli_query($con,$sql);

?>
<html>
    
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
         
    </head>
    <body>


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
    <div class="media" style="margin:100px; margin-left:400px;">
  <img width="150" height="200" class="d-flex mr-3" src="'.$picpath.'" alt="Generic placeholder image">
  <div class="media-body" style="margin-left:10px;">';

    echo '<h3>Titile : '.$name.'</h5>';
          echo '<h5> Department : '.$dept.'</h5>';
          echo '<h5> Abstract</h5>';
         echo '<p>'.$desciption.'</p>';
         echo '<h5> Published date : '.$published.'</h5>';
        echo "<a href='downloadpage.php?id=".$id."'>Download</a>";
        echo '<hr>';
 echo' </div>
</div>

';
      // echo '<img src="'.$picpath.'" width="60" height="70" alt="cover"/>';
    
       
       
    //echo $id. "" . $name . $picpath. "<a href='download.php?id=".$id."'>Download</a><br>";
    
 

}
?>

