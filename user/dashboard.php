<?php include("../includes/auth_check.php"); ?>
<?php include("../includes/header.php"); ?>

<h2>Welcome to Dashboard 👋</h2>

<div class="row mt-4">

<div class="col-md-4">
    <div class="card p-3 shadow">
        <h5>Add Product</h5>
        <a href="add_product.php" class="btn btn-dark">Add</a>
    </div>
</div>

<div class="col-md-4">
    <div class="card p-3 shadow">
        <h5>View Products</h5>
        <a href="view_products.php" class="btn btn-primary">View</a>
    </div>
</div>

</div>

<?php include("../includes/footer.php"); ?>