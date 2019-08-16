     <?php
       $active = "upload";
       include_once './template/header.php';
        ?>   
    
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
<!--<div class="input-group">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
  </div>-->
  <div class="custom-file">
    <input type="file" class="custom-file-input" id="inputGroupFile01"
      aria-describedby="inputGroupFileAddon01">
    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
  </div>
<br>
<button class="btn btn-light" type="submit">Upload</button>
</div>

    <!-- Send button -->
    

</form>
<!-- Default form contact -->
</div>
       </div> 

          <?php
       include_once './template/footer.php';
        ?> 
       