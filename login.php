<?php

include_once "server.php";
include_once "header.php";

?>


<section class="static about-sec">
        <div class="container">
            <h1>My Account / Login</h1>
            <p>please login withe your Email And password so you can enjoy our services</p>
            <div class="form">
                <form action="login.php" method="POST">
                <?php

               if( count( $errors) >= 1){

                   foreach($errors as $error ){

                       echo "<div class='alert alert-warning' > $error </div>" ;
                   }
               };
            
               ?>
                 <div class="row">

                        <div class="col-md-5">

                            <input type ="mail" name="usermail" placeholder="Enter User Mail" required>

                            <span class="required-star">*</span>
                        </div>

                        <div class="col-md-5">

                            <input name="password" type="text" placeholder="Enter your password" required>
                            <span class="required-star">*</span>
                        </div>
                        <div class="col-lg-8 col-md-12">
                        <input type="submit"  style ="width:193px;background-color: darkslategray;" name ="login_user" class="btn black primary"></input>

                            <h5>not Registered? <a href="register.php">REgister here</a></h5>
                            <h5> <a href="password_recovery.php">Forget Password</a></h5>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>


    <?php 

include_once "footer.php"


?>