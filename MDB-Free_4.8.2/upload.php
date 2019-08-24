     <?php
//       $active = "upload";
//       include_once './template/header.php';
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
        
        <div class="upload">
         <div class="d-flex justify-content-center"> 
             
             
             
       <!-- Default form contact -->
<form class="text-center border border-light p-5" action="upload.php" method="post" enctype="multipart/form-data">

    <p class="h4 mb-4">Upload Paper</p>

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

<!--     Copy 
    <div class="custom-control custom-checkbox mb-4">
        <input type="checkbox" class="custom-control-input" id="defaultContactFormCopy">
        <label class="custom-control-label" for="defaultContactFormCopy">Send me a copy of this message</label>
    </div>-->
    <div class="md-form">
        <input placeholder="Published Date" type="date" id="date-picker-example" class="form-control datepicker" name="pdate" required>
  <label for="date-picker-example">
  </label>
</div>
<!--<div class="input-group">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
  </div>-->
  <div class="custom-file">
    <input type="file" class="custom-file-input" id="inputGroupFile01"
      aria-describedby="inputGroupFileAddon01" name="myfile">
    <label class="custom-file-label" for="inputGroupFile01" required>Choose file</label>
  </div>

<div class="custom-file">
    <input type="file" class="custom-file-input" id="inputGroupFile01"
      aria-describedby="inputGroupFileAddon01" name="picfile">
    <label class="custom-file-label" for="inputGroupFile01" required>Choose Cover Image</label>
  </div>
<br>
<button class="btn btn-light" type="submit" name="submit">Upload</button>
</div>

    <!-- Send button -->
    

</form>
<!-- Default form contact -->
</div>
       </div> 

          
       
     

       
       
       
       <?php

include ('../control/db.php');  

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
$query=  mysqli_query($con,"INSERT INTO documents (path,title,dept,desciption,price,published,picpath) values ('$location','$doc_name','$dept','$desc','$price','$pdate','$locationpic')");
                
//header('Location:index.php');
        echo 'Sucessfully inserted';
       
       
      
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
 <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script> 
</body>
       </html>