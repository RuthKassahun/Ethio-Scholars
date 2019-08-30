<?php

include ('controller/db.php'); 

$sql= "SELECT * FROM grantdoc";

$res= mysqli_query($con,$sql);

?>
<a href="grantupload.php">Add new document</a><br>

<?php

while ($row = mysqli_fetch_array($res)){
    $id=$row['id'];
//    $name=$row['name'];
    $path= $row['path'];
     $picpath= $row['picpath'];
    
//    echo $id. "" . $name . "<a href='download.php?dow=$path'>Download</a><br>";

//     echo '<img src="'.$picpath.'" width="60" height="70" alt="cover"/>';
    echo '<img src="'.$picpath.'" width="40" height="40" alt="img1"/>';
    echo $id.  "<a href='uploads/../grantdownload.php?id=".$id."'>Download</a><br>";

}
?>

