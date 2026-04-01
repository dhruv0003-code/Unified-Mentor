<?php
include("../config/db.php");

if(isset($_POST['register'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO users(name,email,password) VALUES(?,?,?)");
    $stmt->bind_param("sss", $name, $email, $password);
    $stmt->execute();

    header("Location: login.php");
}
?>

<?php include("../includes/header.php"); ?>

<div class="row justify-content-center">
<div class="col-md-4">
<div class="card p-4 shadow">
<h3 class="text-center">Register</h3>

<form method="POST">
<input name="name" class="form-control mb-2" placeholder="Name" required>
<input name="email" type="email" class="form-control mb-2" placeholder="Email" required>
<input name="password" type="password" class="form-control mb-2" placeholder="Password" required>
<button class="btn btn-success w-100" name="register">Register</button>
</form>

</div>
</div>
</div>

<?php include("../includes/footer.php"); ?>