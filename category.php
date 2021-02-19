<?php
  session_start();
  if(isset($_SESSION["username"]))
{
	include_once "header2.php";
}
else{
  include_once "header.php";
  
	
}

$cat_id =$_GET['books_id'];
  $count = 0;
  // connecto database
  require_once "database.php";
  $conn = db_connect();

  $query = "SELECT * FROM books WHERE publisherid ='$cat_id' ";
  $result = mysqli_query($conn, $query);
  if(!$result){
    echo "Can't retrieve data " . mysqli_error($conn);
    exit;
  }
   switch($_GET['books_id']){
      case 2:
        $category="computer scince books";
        break;
      case 1:
        $category="busness  books"; 
       break;
       case 3:
        $category="Art  books";
        break;
        case 4:
          $category="self devolopment  books";
          break;
          case 5:
            $category="agrictuler  books";
            break;
            case 6:
              $category="novels  books";
              break;
   }






  
?>


<!-- <section class="static about-sec">
        <div class="container">
            <h1 style="padding-left:348px;"><?php echo $category ?></h1> -->
    <div class="container">        
            
          
  
    <?php for($i = 0; $i < mysqli_num_rows($result); $i++){ ?>
      <div class="row" style= "padding-left:150px">
        <?php while($query_row = mysqli_fetch_assoc($result)){ ?>
          <div class="col-md-3" style="">
            <a href="book.php?bookisbn=<?php echo $query_row['book_isbn']; ?>">
              <img   style ="margin-bottom:0px; width:200px; height:300px;" class="img-responsive img-thumbnail" src="./images/<?php echo $query_row['book_image']; ?>">
          
            </a>
            
            <h6 style="margin-top:30px;margin-bottom:50px"><?php echo $query_row['book_title']; ?> <br>   <span><?php echo $query_row['book_price']; ?> $ </span> </h6>
          </div>
        <?php
          $count++;
          if($count >= 4){
              $count = 0;
              break;
            }
          } ?> 
      
      </div>

      </div>
 
   
<?php
      }
  if(isset($conn)) { mysqli_close($conn); }
  require_once "footer.php";
?>