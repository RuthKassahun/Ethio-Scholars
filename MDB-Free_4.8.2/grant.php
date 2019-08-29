 <?php
   $active = "grant";
   include_once './template/header.php';
  ?> 
 

  <?php
  mysqli_connect("localhost","root","")or die("could not connect");
  include_once '../controller/dbcontroller.php';
  include_once '../controller/dbconnect.php';

  $db=new dbcontroller();
  $db2=new dbconnect();
  $conn=$db2->connect();
  $query="Select * from grantdoc";
   $result=mysqli_query($conn,$query);
  ?>
  <!--$res= mysqli_query($con,$sql);-->
 
<?php
while ($row = mysqli_fetch_array($result)){
    $id=$row['id'];
    
    $name=$row['title'];
    
    $dept=$row['dept'];
      $desciption=$row['disc'];
      
       $published=$row['published'];
    $path= $row['path'];
    $picpath= $row['picpath'];
    
//    echo $id. "" . $name . "<a href='download.php?dow=$path'>Download</a><br>";
?>
  
      <?php
echo '
    
    <div class="d-flex justify-content-center -">
    <div class="media" style="margin:200px; ">
  <img width="300" height="300" class="d-flex mr-3" src="'. $row[7].'" alt="Generic placeholder image">
  <div class="media-body" style="margin-left:50px;">';

    echo '<h3 style="font-style-bold">Titile : ' .$row[2].'</h5>';

//     echo'<h3>Depatment:'.$row[3].'</h3>';

        echo'<h3 style="font-size: 20px;"> Description: '.$row[4].'</h3>';
    
       echo'<p> '.$row[6].'</p>';
        echo '<hr>';
       
       echo "<a href='http://etd.aau.edu.et/handle/123456789/1658'>Read more</a>'";
 echo' </div>
</div>
</div>
';
}
?>
  <button>  style="font-"  </button>
  


         <?php
       include_once './template/footer.php';
        ?> 
        
 