<?php 


session_start();

require_once "header.php";


?>


<section class="static about-sec">
        <div class="container">
            <h1>My Account / change password</h1>
            <?php 
                 
                 if(isset($_POST['pass_update']))
               {

                if($_POST['pass1']!=$_POST['pass2']){
                    echo '<div class="alert alert-danger" role="alert">
                                     This is a success alert—check it out!
                                     </div>';
                }
              else{
                $pass =$_POST['pass1'];
                $pass =md5($pass);

                $id =$_GET['id'];

                require_once "database.php";

                $sql = "UPDATE customer SET u_pass='$pass' WHERE id='$id'";
                $conn = db_connect();
                       
                 $result = mysqli_query($conn, $sql);
                 echo '<div class="alert alert-success" role="alert">
                 password have been reset please go to login login 
               </div>';
                }
                     
                    
                }
                 
            
            
            
            ?>

 
            <div class="form">
                <form  method="POST">
              
        
              
              
                 <div class="row">

                        <div class="col-md-5">

                            <input name="pass1" placeholder="Enter new password" required>

                            
                        </div>

                        <div class="col-md-5">

                            <input name="pass2" type="text" placeholder="confirm passwprd" required>
                            
                        </div>
                        <div class="col-lg-8 col-md-12">
                        <input type="submit"  style ="width:193px;background-color: darkslategray;" name ="pass_update" class="btn black primary"></input>
                           
                           
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>


















<?php 



require_once "footer.php";
?>