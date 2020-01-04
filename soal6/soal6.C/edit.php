<?php
// including the database connection file
include_once("config.php");

if(isset($_POST['update']))
{	

	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	$chasier = mysqli_real_escape_string($mysqli, $_POST['chasier']);
	$category = mysqli_real_escape_string($mysqli, $_POST['category']);
	$fav = mysqli_real_escape_string($mysqli, $_POST['fav']);
	$price = mysqli_real_escape_string($mysqli, $_POST['price']);	
	// checking empty fields
	if(empty($fav) || empty($price)) {	
			
		if(empty($fav)) {
			echo "<font class='alert-danger text-danger'>Name field is empty.</font><br/>";
		}
		
		if(empty($price)) {
			echo "<font class='alert-danger text-danger'>Age field is empty.</font><br/>";
		}

	} else {	
	// 	//updating the table
		$result = mysqli_query($mysqli, "UPDATE TB_Product SET name='$fav',price=$price,kategoriId=$category,cashireId=$chasier WHERE id=$id;");
	// 	//redirectig to the display page. In our case, it is index.php
		header("Location: index.php");
	}
}
?>
<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM TB_Product WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
	$name = $res['name'];
	$price = $res['price'];
	$kategoriId = $res['kategoriId'];
	$cashireId = $res['cashireId'];	
}

$Chasier = mysqli_query($mysqli,"SELECT TB_Cashier.id,TB_Cashier.name FROM TB_Cashier;");
$Category = mysqli_query($mysqli,"SELECT TB_Category.id,TB_Category.name FROM TB_Category;");

?>
<html>
<head>	
	<link rel="stylesheet" href="style/bootstrap.min.css">
    <link rel="stylesheet" href="style/main.css">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.4.1.min.js"></script>
	<title>Edit Data</title>
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <img src="img/logo2.png" class="img-fluid mr-3" alt="">
            <a class="navbar-brand" href="#">
	            <span class="title-head">ARKADEMY</span> COFFE SHOP
            </a>
        </div>
    </nav>
    <section class="content">
    	<div class="container">
    		<div class="row justify-content-center">
    			<div class="col-md-8">
    				<div class="card">
    					<div class="card-body">
    						<form action="/edit.php" method="POST">
    							<input type="hidden" name="id" value="<?= $id ?>">
								<div class="form-group">
					            	<select class="form-control" name="chasier">
					            		<?php while($res = mysqli_fetch_array($Chasier)){?>
								      		<option <?php $res[0]==$cashireId ? 'selected':'' ?> value="<?= $res[0] ?>"><?= $res[1] ?></option>
					    				<?php } ?>
					    			</select>
            					</div>
            					<div class="form-group">
					            <select class="form-control" name="category">
					            	<?php while($res = mysqli_fetch_array($Category)){?>
								      	<option <?php $res[0] == $kategoriId ? 'selected':'' ?> value="<?= $res[0] ?>"><?= $res[1] ?></option>
					    			<?php } ?>
					    		</select>
            					</div>
            					<div class="form-group">
					                <input type="text" class="form-control" name="fav" value="<?= $name ?>">
					            </div>
					            <div class="form-group">
					                <input type="text" class="form-control" name="price" value="<?= $price ?>">
					            </div>
            					<input type="submit" name="update" class="btn-block btn btn-pink" value="update">
    						</form>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>
</body>
</html>
