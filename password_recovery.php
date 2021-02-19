<?php
session_start();

include_once "header.php";
?>



<section class="static about-sec">
        <div class="container">
            <h1 style ="text-transform:lowercase">Reset password</h1>

             
<?php 
if(isset($_POST['mail']))
{
require_once "database.php";
require_once "src/PHPMailer.php";
require_once "src/Exception.php";
require_once "src/SMTP.php";
require_once "vendor/autoload.php";

$email = $_POST['mail'];

$conn = db_connect();  
 $query="SELECT * FROM customer WHERE u_mail='$email' ";

 $result = mysqli_query($conn, $query);

 $raw =mysqli_fetch_assoc($result);


 
$id=$raw['id'];   
$mail = new  PHPMailer\PHPMailer\PHPMailer();

$mail->IsSMTP();
//$mail->SMTPDebug = 1;
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'ssl';
$mail->Host = "smtp.gmail.com";
$mail->Port = 465; // or 587
$mail->IsHTML(true);

$mail->Username = "yourmobileapp2017@gmail.com";
$mail->Password = "ABCD@123456";
$mail->setFrom('yourmobileapp2017@gmail.com', 'Nti Shopping');
$mail->addAddress($email, "NTI Shopping");
$mail->Subject = 'Forget Password';

$secret_code=rand(500000,50000000);

$_SESSION['secret_code']=$secret_code;


$mail->Body=" your verfiction code is $secret_code  <br> go to the folloing link  http://localhost/theme/password_update.php?id=$id&code=$secret_code";


if(!$mail->send()) {
    //  echo "Opps! For some technical reasons we couldn't able to sent you an email. We will shortly get back to you with download details.";	
      echo "Mailer Error: " . $mail->ErrorInfo;
  }
  else{
      
      echo("<div class='alert alert-success'> Check Your Email </div>");		 
  } 


}
?>

            <div class="alert alert-secondary" role="alert">enter your Email And will send Email With code</div>
            <div class="form">
                <form action="password_recovery.php" method="POST">
                
                 <div class="row">

                        <div class="col-md-5">

                            <input  type ="email" name="mail" placeholder="Enter your email here " required>

                            
                        </div>

                        <div class="col-md-5">

                           

                        </div>
                        <div class="col-lg-8 col-md-12">
                        <input type="submit"  style ="width:193px;background-color: darkslategray;" name ="pass_update" class="btn black primary"></input>


                              


                            <h5>not Registered? <a href="register.php"></a></h5>
                            
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>











<?php
include_once "footer.php";

?>