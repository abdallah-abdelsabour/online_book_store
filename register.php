<?php 

include_once "server.php";
include_once "header.php";



?>


<section class="static about-sec">
        <div class="container">
            <h1>My Account / REgister</h1>
            <p>Create Account</p>
            <div class="form" style="width: 70%;">
            
                
            
                    <form action="register.php" method="POST">
                  
                    <?php

                    if( count( $errors) >= 1){

                         foreach($errors as $error ){

                            echo "<div class='alert alert-warning' style ='font-size: 13px;' > $error </div>" ;
                        }
                    };

                    ?>

                    <input type="text" placeholder ="name" name ="username" required class="form-control">
                   <input type="text" placeholder =" Email"  required name ="email" class="form-control">
                   <input type="password" placeholder = "password" required=""  name ="password_1" class="form-control">
                   <input type="text"  placeholder = "confirm password"  required="" name ="password_2"  class="form-control">
                   <input type="submit" name ="reg_user" class="btn black"></input>
                
                   <h5>do you have Account? <a href="login.php">Login here</a></h5>
                 
                </form>
            </div>
        </div>
    </section>






<?php 

include_once "footer.php"


?>