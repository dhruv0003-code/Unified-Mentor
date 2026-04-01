<?php include("../includes/auth_check.php"); ?>
<?php include("../config/db.php"); ?>
<?php include("../includes/header.php"); ?>

<div class="row">

<?php
$res = $conn->query("SELECT * FROM products");

while($row = $res->fetch_assoc()){
?>
<div class="col-md-3 mb-4">
    <div class="card shadow">
        <img src="../uploads/<?php echo $row['image']; ?>" class="card-img-top" height="200">
        <div class="card-body">
            <h5><?php echo $row['title']; ?></h5>
            <p><?php echo $row['category']; ?> | <?php echo $row['size']; ?></p>

            <a href="swap_request.php?product_id=<?php echo $row['id']; ?>&user_id=<?php echo $row['user_id']; ?>" 
            class="btn btn-warning w-100">
            Offer Swap
            </a>
        </div>
    </div>
</div>
<?php } ?>

</div>

<?php include("../includes/footer.php"); ?>