                <?php
                $active = "upload";
                include_once './template/header.php';
                 ?>   

            <link rel="stylesheet" type="text/css" href="../css/paymentcss.css" />
            <div class="d-flex justify-content-center">
              <form action="./payment-instruction.php"class="text-center border border-light p-5" method="post"style="margin-right: 300px; margin-left: 300px; margin-top: 50px;"action="payment-instruction.php">
              <p class="h4 mb-4">Payment Details</p>
                  <fieldset>
                      <!--  <button type="button" class="btn btn-white">--><img src="../MDB-Free_4.8.2/img/images/CBE-logo.jpg" width="150px" height="150px"></button>
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

                  <button type="button" class="btn btn-white"><a href="paymentinstruction.php">Continue</a></button>
                  </a>
                  <!-- Social register -->
              </form>
            </div>
    <?php
       include_once './template/footer.php';
        ?> 