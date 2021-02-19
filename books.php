<?php
  session_start();
  if(isset($_SESSION["username"]))
{
	include_once "header2.php";
}
else{
  include_once "header.php";
  
	
}
  $count = 0;
  // connecto database
  require_once "database.php";
  $conn = db_connect();

  $query = "SELECT book_isbn,book_title ,book_price, book_image FROM books";
  $result = mysqli_query($conn, $query);
  if(!$result){
    echo "Can't retrieve data " . mysqli_error($conn);
    exit;
  }

  $title = "<p>Full Catalogs of Books</p>";
?>
  <section class="static about-sec">
        <div class="container">
            <h1>All categorise of books here </h1>
            



    <?php for($i = 0; $i < mysqli_num_rows($result); $i++){ ?>
      <div class="row" style= "padding-left:100px">
        <?php while($query_row = mysqli_fetch_assoc($result)){ ?>
          <div class="col-md-3" style="">
            <a href="book.php?bookisbn=<?php echo $query_row['book_isbn']; ?>">
              <img style ="margin-bottom:0px;" class="img-responsive img-thumbnail" src="./images/<?php echo $query_row['book_image']; ?>">
          
            </a>
            <h6 style="margin-top:30px;margin-bottom:50px"><?php echo $query_row['book_title']; ?> <br>   <span><?php echo $query_row['book_price']; ?>$</span> </h6>
             <h6></h6>
          </div>
        <?php
          $count++;
          if($count >= 4){
              $count = 0;
              break;
            }
          } ?> 
      
      </div>
      </section>
<?php
      }
  if(isset($conn)) { mysqli_close($conn); }
  require_once "footer.php";
?>