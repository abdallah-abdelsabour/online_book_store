<?php
	session_start();
    
    
	if(!isset($_SESSION['admin']) && $_SESSION['admin'] != true){
		header("Location: admin.php");
	}

    include_once "admin-header.php";


	$title = "List book";
	require_once "database.php";
	$conn = db_connect();
	$result = getAll($conn);

?>   

    
    <!-- <style>
    .breadcrumb{
       padding: 126px;
    
    </style> -->
   
    <section class="static about-sec">
        <div class="container">

            <h1>Admin</h1>
            <p  class="btn btn-success"><a href="admin_add.php">Add new book</a></p>
                 
	<table >
		<tr>
			<th>ISBN</th>
			<th>Title</th>
			<th>Author</th>
			<th>Image</th>
			<th>Description</th>
			<th>Price</th>
			<th>CATEGORY</th>
			<th>&nbsp;</th>
			<th>&nbsp;</th>
		</tr>
		<?php while($row = mysqli_fetch_assoc($result)){ ?>
		<tr>
			<td><?php echo $row['book_isbn']; ?></td>
			<td><?php echo $row['book_title']; ?></td>
			<td><?php echo $row['book_author']; ?></td>
			<td><img src="./images/<?php echo $row['book_image']; ?>" alt=""></td>
			<td><?php echo $row['book_descr']; ?></td>
			<td><?php echo $row['book_price']; ?></td>
			<td><?php echo getPubName($conn, $row['publisherid']); ?></td>
			<td><a  class="btn-mod" style="color: blue;
                     border-radius: 35%;  font-size: larger;" href="admin_edit.php?bookisbn=<?php echo $row['book_isbn']; ?>">Edit</a></td>
			<td><a  style="color: red; 
                     border-radius: 35%;  font-size: larger;" href="admin_delete.php?bookisbn=<?php echo $row['book_isbn']; ?>">Delete</a></td>
		</tr>
		<?php } ?>
	</table>

    </div>

	</section>
<?php
	if(isset($conn)) {mysqli_close($conn);}
    
    require_once "footer.php";         

?>


