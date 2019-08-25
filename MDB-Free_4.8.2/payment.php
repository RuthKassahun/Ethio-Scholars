<!DOCTYPE html>
<html lang="en">

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
    div.img {
        margin: 20px;
        border: 1px solid #ccc;
        float: left;
        width: 150px;
        margin-top: 50px;
        
    }
    div.img2 {
        margin: 1px;
       
        float: left;
        width: 300px;
        margin-top: 50px;
    }
    div.img:hover {
        border: 1px solid #777;
    }
    
    div.img img {
        width: 100%;
        height: auto;
    }
    
    div.desc {
        padding: 15px;
        text-align: center;
    }
    
    .button {
    background-color:lightslategray;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
    </style>
</head>

<body>
    <form action="./payment-instruction.php"class="text-center border border-light p-5" method="post"style="margin-right: 300px; margin-left: 300px; margin-top: 50px;"action="payment-instruction.php">
 <p class="h4 mb-4">Payment Details</p>
        <fieldset>
            <!--  <button type="button" class="btn btn-white">--><image src="CBE-logo.jpg" width="150px" height="150px"></button>
            <P><b>CBE</b></P>
            <p>Payment Details your's Selection CBE </p>
        <div class="form-row mb-4">
            <div class="col">
               
                <!-- First name -->
                <input type="text" id="defaultRegisterFormFirstName" class="form-control" placeholder="Firstname">
            </div>
            
            <div class="col">
                    <!-- Last name -->
                    <input type="email" id="defaultRegisterFormEmail" class="form-control mb-4" placeholder="Lastname">
     </div>
        </div>
    </fieldset>
    
    <div class="form-row mb-4">
            <div class="col">
                <!-- First name -->
                <input type="text" id="defaultRegisterFormFirstName" class="form-control" placeholder="Email">
            </div>
            
        </div>
        <div class="form-row mb-4">
                <div class="col">
                    <!-- First name -->
                    <input type="text" id="defaultRegisterFormFirstName" class="form-control" placeholder="Phone">
                </div>
                
            </div>

        
            <br>
            <br>
    
        <!-- Sign up button -->
     
        <button type="button" class="btn btn-blue-grey">Continue</button>
           <a href="#payment-instruction.php"></a>
        <!-- Social register -->
    </form>
    <!-- Default form register -->
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