<?php 

//include ('inc/db.php'); 
//
//if(isset($_GET['dow'])){
//    
//    $path=$_GET['dow'];
//    $res = mysqli_query($con,"SELECT * FROM documents WHERE path='$path'");
//    
//    header('Content-Type:application/octet-stream');
//    header('Content-Disposition :attachement; filename"'.basename($path).'"');
//    header('Content-Length : '. filesize($path));
//    readfile($path);
//}




?>

<?php

//include ('inc/db.php'); 
//
//if(isset($_GET['dow'])){
//    
//    $path=$_GET['dow'];
//    $res = mysqli_query($con,"SELECT * FROM documents WHERE path='$path'");
//    
//    header('Content-Type:application/octet-stream');
//    header('Content-Disposition :attachement; filename"'.basename($path).'"');
//    header('Content-Length : '. filesize($path));
//    readfile($path);
//}
//
//


?>

<?php
include ('../control/db.php');

if(isset($_GET['id'])){
    $id=$_GET['id'];
//    $stat= $con->prepare("SELECT * FROM documents WHERE id=?");
//    $stat->bindParam(1,$id);
//    $stat->execute();
//    $data= $stat->fetch['filename'];
    
    $res = mysqli_query($con,"SELECT * FROM documents WHERE paperid='$id'");
    
    $row = mysqli_fetch_array($res);
    $file=$row['path'];
    if(file_exists($file)){
        $fileName = basename($file);
        $fileSize = filesize($file);
        // Output headers.
         echo $fileSize;
        header("Cache-Control: private");
        header("Content-Type: application/stream");
        header("Content-Length: ".$fileSize);
        header("Content-Disposition: attachment; filename=".$fileName);

        // Output file.
        readfile ($file);                   
        exit();  
    }else{
        echo "Error";
    }
}
?>

<?php


?>