<?php

include_once "header.php";

?>


<section class="static about-sec">
        <div class="container">
            <h1>Admin/ Login</h1>
            <p class="alert alert-warning" role="alert"> by signing in as admin you will be able to add edit and delete books on the website and you will be able see orders and status of each order </p>
            <div class="form">
                <form   method="post" action="admin_verify.php">
               
                 <div class="row">

                        <div class="col-md-5">

                            <input name="name" placeholder="Enter admin Name" required>

                            <span class="required-star">*</span>
                        </div>
                  </div>
                  <div class="row">
                        <div class="col-md-5">

                            <input name="pass" type="password" placeholder="Enter admin password" required>
                            <span class="required-star">*</span>
                        </div>
                        </div>
                        <div class="col-lg-8 col-md-12">
                        <input type="submit"  style ="width:193px;background-color: darkslategray;" name="submit" class="btn black primary"></input>

                            <h5>not Admin <a href="login.php">login  as a user here </a></h5>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>


    <?php 

include_once "footer.php"


?>