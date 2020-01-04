<?php
include_once("config.php");

$Product = mysqli_query($mysqli, "SELECT TB_Product.id,TB_Cashier.name,TB_Product.name,TB_Category.name,TB_Product.price   from TB_Product inner join TB_Cashier  on TB_Cashier.id=TB_Product.cashireId inner join TB_Category on TB_Category.id=TB_Product.kategoriId;");

$Chasier = mysqli_query($mysqli,"SELECT TB_Cashier.id,TB_Cashier.name FROM TB_Cashier;");
$Category = mysqli_query($mysqli,"SELECT TB_Category.id,TB_Category.name FROM TB_Category;");


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style/bootstrap.min.css">
    <link rel="stylesheet" href="style/main.css">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.4.1.min.js"></script>
    <title>ARKADEMY COFFEE SHOP</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <img src="img/logo2.png" class="img-fluid mr-3" alt="">
            <a class="navbar-brand" href="#">
	                <span class="title-head">ARKADEMY</span> COFFE SHOP
            </a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <button onclick="popUp()" class="btn btn-outline-success ml-auto my-2 my-sm-0 btn-pink" type="submit">ADD</button>
            </div>
        </div>
    </nav>
    <section class="content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card outerTable">
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Chasier</th>
                                        <th scope="col">Product</th>
                                        <th scope="col">Category</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody> 
                                    <!-- all rows -->
                                    <?php $num=1 ?>
                                    <?php while($res = mysqli_fetch_array($Product)) {?>
                                    <tr>
                                        <th scope="row"><?= $num++ ?></th>
                                        <td><?= $res[1] ?></td>
                                        <td><?= $res[2] ?></td>
                                        <td><?= $res[3] ?></td>
                                        <td>Rp.<?= $res[4] ?></td>
                                        <td>
                                            <a href="/edit.php?id=<?=$res[0]?>" class="text-success">
                                                <h5 class="d-inline">edit</h5>
                                            </a>|
                                            <a href="/delete.php?id=<?=$res[0]?>" class="text-danger">
                                                <h5 class="d-inline">hapus</h5>
                                            </a>
                                        </td>
                                    </tr>
                                   <?php }?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="card popUP" id="popUp" style="display: none;">
        <div class="card-body">
            <div class="card-title">
                <h4>ADD</h4>
            </div>
        <form action="/add.php" method="post">
            <div class="form-group">
            	<select class="form-control" name="chasier">
            		<?php while($res = mysqli_fetch_array($Chasier)){?>
			      		<option value="<?= $res[0] ?>"><?= $res[1] ?></option>
    				<?php } ?>
    			</select>
            </div>
            <div class="form-group">
            	<select class="form-control" name="category">
            		<?php while($res = mysqli_fetch_array($Category)){?>
			      		<option value="<?= $res[0] ?>"> <?= $res[1] ?> </option>
    				<?php } ?>
    			</select>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="fav" placeholder="Drink">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="price" placeholder="10000">
            </div>
            <input type="submit" name="Submit" class="btn-block btn btn-pink" value="Submit">
        </form>
    </div>

 <script src="js/main.js"></script>
</body>

</html>