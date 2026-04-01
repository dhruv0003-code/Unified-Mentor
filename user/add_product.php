<?php
session_start();
include("../config/db.php");

if(isset($_POST['add'])){
    $title = $_POST['title'];
    $category = $_POST['category'];
    $size = $_POST['size'];
    $condition = $_POST['condition'];

    $image = $_FILES['image']['name'];
    move_uploaded_file($_FILES['image']['tmp_name'], "../uploads/".$image);

    $uid = $_SESSION['user_id'];

    mysqli_query($conn, "INSERT INTO products(user_id,title,category,size,condition_type,image)
                         VALUES('$uid','$title','$category','$size','$condition','$image')");
}
?>

<form method="POST" enctype="multipart/form-data">
    <input name="title" placeholder="Title"><br>
    <input name="category" placeholder="Category"><br>
    <input name="size" placeholder="Size"><br>
    <input name="condition" placeholder="Condition"><br>
    <input type="file" name="image"><br>
    <button name="add">Add Product</button>
</form>