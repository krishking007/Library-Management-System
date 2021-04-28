<?php
	require('functions.php');
	session_start();
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"lms");
	$book_name = "";
	$author = "";
	$editor = "";
	$book_no = "";
	$price = "";
	$query = "select books.book_name,books.book_no,books.book_price,books.author_name,books.Editor from books ";
?>
<!DOCTYPE html>
<html>
<head>
	<title>User Dashboard</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
	<link rel="stylesheet" type="text/css" href="../bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="../bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="../bootstrap-4.4.1/js/bootstrap.min.js"></script>
  	<style type="text/css">
  		#side_bar{
  			background-color: whitesmoke;
  			padding: 50px;
  			width: 300px;
  			height: 450px;
  		}
  	</style>
</head>
<body bgcolor="skyblue">
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand"><center><h1><B>Library Management System</h1></B></center></a>
			</div>
			<center>
			<h2><font style="color: white"><span><strong>Welcome: <?php echo $_SESSION['name'];?></strong></span></font>
			<font style="color: white"><span><strong>Email: <?php echo $_SESSION['email'];?></strong></span></font></center></h2>
			
					
			</ul>
		</div>
	</nav>
<nav class="navbar " style="background-color: #e3f2fd">
				
				
</div>	
</nav>

<span><marquee><h3>RADHAKRISHNAN</h3></marquee></span><br><br>
<div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-8">
		<form>
			<center>
			<table class="table-bordered" border="1" width="900px" style="text-align: center">
				<tr>
					<th>Book Name:</th>
					<th>Author Name:</th>
					<th>Editor Name:</th>
					<th>Year of edition:</th>
					<th>ISBN Number:</th>
				</tr>
				<?php
					$query_run = mysqli_query($connection,$query);
					while($row = mysqli_fetch_assoc($query_run)){
						$book_name = $row['book_name'];
						$author = $row['author_name'];
						$Editor = $row['Editor'];
						$price = $row['book_price'];
						$book_no = $row['book_no'];
				?>
						<tr>
							<td><?php echo $book_name;?></td>
							<td><?php echo $author;?></td>
							<td><?php echo $Editor;?></td>
							<td><?php echo $price;?></td>
							<td><?php echo $book_no;?></td>
						</tr>
						<?php
					}
				?>
			</table>
		</center>
		</form>
		<a  href="user_dashboard.php"  ><center><h3>Go back</h3></center></a>
	</div>
	<div class="col-md-2"></div>
</div>
	
</body>
</html>