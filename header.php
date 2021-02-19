<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Book Store</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#03a6f3">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/styles.css">

    
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> -->
.
<style>


.dropdown:hover>.dropdown-menu {
  display: block;
}

.dropdown>.dropdown-toggle:active {
  /*Without this, clicking will make it sticky*/
    pointer-events: none;
}

</style>
</head>

<body>
    <header>
        
        <div class="main-menu">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="logo"></a>
                   
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="navbar-item">
             

                          <div class="dropdown" style="background:#fff;color:#ff9700;">
                         <button  style="background:#fff;color:#ff9700;" class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            categories
                          </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="category.php?books_id=2">computer scince</a>
                        <a class="dropdown-item" href="category.php?books_id=4">self development</a>
                                <a class="dropdown-item" href="category.php?books_id=1">busness</a>
                                 <a class="dropdown-item" href="category.php?books_id=5">agriculture</a>
                                <a class="dropdown-item" href="category.php?books_id=3">Arts</a>

                               
                            </div>
                     </div>


                          


                    
                            </li>
                            <li class="navbar-item">
                                <a href="books.php" class="nav-link" style="">All books </a>
                            </li>
                            <li class="navbar-item">
                                <a href="shipping.php" class="nav-link" style="">shiping</a>
                            </li>
                            <li class="navbar-item">
                                <a href="register.php" class="nav-link" style="color:#ff9700;">Register</a>
                            </li>
                            <li class="navbar-item active">
                                <a href="login.php" class="nav-link" style="color:#ff9700;">Login</a>
                            </li>
                        </ul>
                        <a href="cart.php" style="margin-bottom: 16px;">
                           <div class="cart my-2 my-lg-0">
                            <span>
                                <i class="fa fa-shopping-cart"  aria-hidden="true" style="font-size:54px;color:black;"></i></span>

                           

                            </div>
                         <a style="color:black; margin-left:47;margin-bottom: 16px;" href="admin.php"> admin login</a>
                       
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <div class="breadcrumb">
        <div class="container">
            <a class="breadcrumb-item" href="index.php">Home</a>
            <span class="breadcrumb-item active"><?php echo $title ?> </span>
        </div>
