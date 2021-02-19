<?php
 session_start();
 if(isset($_SESSION["username"]))
{
 include_once "header2.php";
}
else{

header("location:login.php");

}



    unset($_SESSION['cart']);


    ?>
    
   
<section class="static about-sec">
        <div class="container">
            <h1>My Account / payment operation </h1>
            <p class="alert alert-success" role="alert">purshase opertion have been done succefully  delivery instrictions have been sent to your mail</p>

    
           <p class="alert alert-warning" role="alert">your cart is empty now </p>



</div>

</section>
<?php
	if(isset($conn)){
		mysqli_close($conn);
	}
	require_once "./footer.php";
?>