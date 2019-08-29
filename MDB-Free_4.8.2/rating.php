         <?php
          $active = "reserches";
           include_once './template/header.php';
           $paperId = $_GET['id'];
            
              
        ?> 

<?php
$output = 0;

include_once("../controller/db.php");
//
//if(isset($_POST['subRate'])){
//    $itemId = 123;
//    $userID = 1234567;
//    $insertRating = "INSERT INTO  (itemId, userId, ratingNumber, title, comments, created, modified) VALUES ('".$itemId."', '".$userID."', '".$_POST['rating']."', '".$_POST['title']."', '".$_POST["comment"]."', '".date("Y-m-d H:i:s")."', '".date("Y-m-d H:i:s")."')";
//    $db->query($insertRating) or die($db->error);
//    echo "rating saved!";
//}




if(isset($_POST['subRate'])){
   
//   $paperId = $_GET['id'];
//                 $id_new=$_SESSION['id_new'];
//  echo '<script>alert('.$paperId.')</script>';
    
      $accId= $_SESSION['accountId'];
      $username=$_SESSION['username'];
    
     $comment = $_POST['comment'];
   $ratingnumber = $_POST['rating'];
 
  
 $query=  mysqli_query($con,"INSERT INTO rating (accId,paperId,feedback,ratingnumber,username) values ('$accId','$paperId','$comment','$ratingnumber','$username')");
 
 if($query){
     
    $output= 1; 
    
 }
 else{
     $output = 2;
 }
    }      




?>

   
        <style>
            body{
                background-color: whitesmoke;
            }
            /*shows the stars side by side, centered, and in reverse order than the HMTL*/
            h5{
                /*background-color: white;*/
                
            }
.rating {
    display: flex;
    flex-direction: row-reverse;
    justify-content: center;
  }
  
  /*hides the radio buttons*/
  .rating > input{ display:none;}
  
  /*style the empty stars, sets position:relative as base for pseudo-elements*/
  .rating > label {
    position: relative;
    width: 1.1em;
    font-size: 4vw;
    color: #FFD700;
    cursor: pointer;
  }
  
  /* sets filled star pseudo-elements */
  .rating > label::before{ 
    content: "\2605";
    position: absolute;
    opacity: 0;
  }
  /*overlays a filled start character to the hovered element and all previous siblings*/
  .rating > label:hover:before,
  .rating > label:hover ~ label:before {
    opacity: 1 !important;
  }
  
  /*overlays a filled start character on the selected element and all previous siblings*/
  .rating > input:checked ~ label:before{
    opacity:1;
  }
  
  /*when an element is selected and pointer re-enters the rating container, selected rate and siblings get semi transparent, as reminder of current selection*/
  .rating:hover > input:checked ~ label:before{ opacity: 0.4; }
  
  /*just aesthetics*/
  body{ background:white; color: black;}
  h1, p{ text-align: center;}
  p{ font-size: 1.2rem;}
  @media only screen and (max-width: 600px) {
    h1{font-size: 14px;}
    p{font-size: 12px;}
  }
  .shadow-textarea textarea.form-control::placeholder {
    font-weight: 300;
}
.shadow-textarea textarea.form-control {
    padding-left: 0.8rem;
}
        </style>
    </head>
   
        
        <div class="d-flex justify-content-center" style="margin:100px;">
          
            <form action="rating.php?id=<?php echo $paperId;?>" method="post">
                      <h2>Rate this Research Paper</h2>
            <div class="rating">
                
              <!--elements are in reversed order, to allow "previous sibling selectors" in CSS-->
              <input type="radio" name="rating" value="5" id="5"><label for="5">☆</label>
              <input type="radio" name="rating" value="4" id="4"><label for="4">☆</label>
              <input type="radio" name="rating" value="3" id="3"><label for="3">☆</label>
              <input type="radio" name="rating" value="2" id="2"><label for="2">☆</label>
              <input type="radio" name="rating" value="1" id="1"><label for="1">☆</label>
            </div>
<!--              <div class="form-group">
            <label for="comment">Comment*</label>
            <textarea class="form-control" rows="5" id="comment" name="comment" required></textarea>
            </div>
                    -->
               <div class="form-group shadow-textarea">
                   <label for="exampleFormControlTextarea6"><h5 style="color:black;">Your Comment</h5></label>
                   <textarea class="form-control z-depth-1" name="comment" required id="exampleFormControlTextarea6" rows="7" placeholder="Write your comment here..."></textarea>
</div>     
                    
                    
                    
                 <div class="form-group">
                     <button type="submit" name="subRate" class="btn btn-light" id="saveReview">Save Review</button>
                     
                 <?php if($output==1){?>
                  <p class="text-success">Successfully Submitted</p>
                 <?php }?>
                 <?php if($output==2){?>
                  <p class="text-danger">Invalid Input</p>
                 <?php }?>
                 
                 </div>
                     </form>
             
            </div>
         <?php
       include_once './template/footer.php';
        ?> 
       