<?php
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
    
    $paperId = 26;
 $accId = 23;
     $comment = $_POST['comment'];
$ratingnumber = $_POST['rating'];
$username='sel';
  
 $query=  mysqli_query($con,"INSERT INTO rating (accId,paperId,feedback,ratingnumber,username) values ('$accId','$paperId','$comment','$ratingnumber','$username')");
 
 if($query){
     
     
     echo 'Succesfully submitted';
 }
 else{
     echo 'Not added to database';
 }
       
}



?>


<!DOCTYPE html>
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
         
   
        <style>
/*            body{
                background-color: white;
            }*/
            /*shows the stars side by side, centered, and in reverse order than the HMTL*/
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
    <body>
        
        <div class="d-flex justify-content-center" style="margin:100px;">
          
                <form action="rating.php" method="post">
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
  <label for="exampleFormControlTextarea6">Your Comment</label>
  <textarea class="form-control z-depth-1" name="comment" id="exampleFormControlTextarea6" rows="7" placeholder="Write your comment here..."></textarea>
</div>     
                    
                    
                    
                 <div class="form-group">
                 <button type="submit" name="subRate" class="btn btn-grey" id="saveReview">Save Review</button> 
                 </div>
                    </form>
            </div>
    </body>
</html>