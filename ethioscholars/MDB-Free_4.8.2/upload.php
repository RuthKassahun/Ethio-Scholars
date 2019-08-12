<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
      <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Material Design Bootstrap</title>
  <!-- Font Awesome -->
  <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"> -->
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">
  
  <style>
     .upload{
              /*width: 300px;*/
                /*height: 100%;*/
                /*background-color: buttonface;*/
                alignment-adjust: central;
           /*margin: 0px 40px 60px 20px;*/
           padding: 30px;
      }
      
  </style>
    </head>
   <?php
       include_once '../MDB-Free_4.8.2/header.php';
        ?>   
    <body>
        <div class="upload">
         <div class="d-flex justify-content-center"> 
       <!-- Default form contact -->
<form class="text-center border border-light p-5">

    <p class="h4 mb-4">Upload Paper</p>

    <!-- Name -->
    <input type="text" id="defaultContactFormTitle" class="form-control mb-4" placeholder="Title">

  
    <!-- department -->
    <!--<label>Department</label>-->
    <select class="browser-default custom-select mb-4">
        <option value="1" selected>Department</option>
        <option value="2">Computer science</option>
        <option value="3">engineerings</option>
        <option value="4">Feature request</option>
        <option value="5">Feature request</option>
    </select>

    <!-- Message -->
    <!--<label>Description</label>-->
    <div class="form-group">
        <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3" placeholder="Description about the paper"></textarea>
    </div>
  <!-- Email -->
  <input type="number" id="defaultContactFormPrice" class="form-control mb-4" placeholder="Price">

<!--     Copy 
    <div class="custom-control custom-checkbox mb-4">
        <input type="checkbox" class="custom-control-input" id="defaultContactFormCopy">
        <label class="custom-control-label" for="defaultContactFormCopy">Send me a copy of this message</label>
    </div>-->
    <div class="md-form">
  <input placeholder="Published Date" type="text" id="date-picker-example" class="form-control datepicker">
  <label for="date-picker-example">
  </label>
</div>
<div class="input-group">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
  </div>
  <div class="custom-file">
    <input type="file" class="custom-file-input" id="inputGroupFile01"
      aria-describedby="inputGroupFileAddon01">
    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
  </div>
</div>
<br>
    <!-- Send button -->
    <button class="btn btn-light" type="submit">Upload</button>

</form>
<!-- Default form contact -->
</div>
       </div> 
<!--        <br>
         <br>-->
          
          <?php
       include_once '../MDB-Free_4.8.2/footer.php';
        ?> 
         <!-- SCRIPTS -->
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
