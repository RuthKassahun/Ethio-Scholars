     <?php
       $active = "upload";
       include_once './template/header.php';
      
       $accountId=$_SESSION['accountId'];
       if($accountId==''){
            header("Location: landingpage.php");
       }
       
        ?>   
         

        <div class="upload">
         <div class="d-flex justify-content-center"> 
             
             
             
       <!-- Default form contact -->
       <form class="text-center border border-light p-5" style="background-color: white;" action="upload.php" method="post" enctype="multipart/form-data">

    <p class="h4 mb-4 amber-text">Upload Paper</p>

    <!-- Name -->
    <input type="text" id="defaultContactFormTitle" class="form-control mb-4" placeholder="Title" name="doc_name" required>

  
    <!-- department -->
    <!--<label>Department</label>-->
    <select class="browser-default custom-select mb-4" name="dept" required>
         <option value="0">Department</option>
        <option value="computer science">Computer science</option>
        <option value="enginnering">engineerings</option>
        <option value="social science">Social Science</option>
        <option value="other science">Other Science</option>
    </select>

    <!-- Message -->
    <!--<label>Description</label>-->
    <div class="form-group">
        <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" required rows="3" placeholder="Abstract" name="desc"></textarea>
    </div>
  <!-- Email -->
  <input type="number" id="defaultContactFormPrice" class="form-control mb-4" placeholder="Price" name="price" required>


    <div class="md-form">
        <input placeholder="Published Date" type="date" id="date-picker-example" class="form-control datepicker" name="pdate" required>
        <label for="date-picker-example" style="margin-top: 15px;"><h5><center>Choose Published date</center></h5>
  </label>
</div>

  <div class="custom-file">
    <input type="file" class="custom-file-input" id="inputGroupFile01"
      aria-describedby="inputGroupFileAddon01" name="myfile">
    <label class="custom-file-label" for="inputGroupFile01" required>Choose file</label>
  </div>

  <div class="custom-file" style="margin-top: 20px;">
    <input type="file" class="custom-file-input" id="inputGroupFile01"
      aria-describedby="inputGroupFileAddon01" name="picfile">
    <label class="custom-file-label" for="inputGroupFile01" required>Choose Cover Image</label>
  </div>
<br>
<button class="btn btn-warning-white" style="margin-top: 30px; background-color: #ffc107;"type="submit" name="submit"><b>Upload</b></button>
</form>
</div>
</div>
       
       <?php

include ('../controller/db.php');  

if(isset($_POST['submit'])){
    $doc_name=$_POST['doc_name'];
    $dept=$_POST['dept'];
    $desc=$_POST['desc'];
    $price=$_POST['price'];
    $pdate=$_POST['pdate'];
     
    
    $name=$_FILES['myfile']['name'];
    $tmp_name=$_FILES['myfile']['tmp_name'];
    
    $picname=$_FILES['picfile']['name'];
    $tmp_name_pic=$_FILES['picfile']['tmp_name'];
    
    if($name &&  $doc_name && $dept &&  $desc && $price &&  $pdate && $picname){
        
        $location="doc/$name";
         $locationpic="imag/$picname";
         
        if($_FILES['myfile']['error']>0){
            echo 'file too large';
        }
        
//        if($_FILES['myfile']['size']< 25000){
//            
//            echo "file size exceddes";
//        }
        
        
        else{
        move_uploaded_file($tmp_name, $location);
        move_uploaded_file($tmp_name_pic, $locationpic);
        
       // $query=  mysqli_query($con,"INSERT INTO documents (title,path,dept,desciption,price,published) values ('$doc_name','$location','$dept','$desc','$price','$pdate')");
$query=  mysqli_query($con,"INSERT INTO documents (path,title,dept,desciption,price,published,picpath,accId) values ('$location','$doc_name','$dept','$desc','$price','$pdate','$locationpic','$accountId')");
                
//header('Location:index.php');
        echo 'Sucessfully Uploaded';
       
       
      
        }
    }
    else{
        die("Please select a file");
    }
}
?>
<!--<form action="upload.php" method="post" enctype="multipart/form-data">
    <label>Document Name</label>
    <input type="text" name="doc_name">
    <input type="file" name="myfile">
    <input type="submit" name="submit" value="Upload">
    
</form>-->
 

          <?php
       include_once './template/footer.php';
        ?> 
       