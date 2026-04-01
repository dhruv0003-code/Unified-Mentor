<?php
session_start();
include("../config/db.php");

if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM users WHERE email=?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if($user && password_verify($password, $user['password'])){
        $_SESSION['user_id'] = $user['id'];
        header("Location: ../user/dashboard.php");
    } else {
        $error = "Invalid Login!";
    }
}
?>

<?php include("../includes/header.php"); ?>

<div class="row justify-content-center">
<div class="col-md-4">
<div class="card p-4 shadow">
<h3 class="text-center">Login</h3>

<?php if(isset($error)) echo "<p class='text-danger'>$error</p>"; ?>

<form method="POST">
<input type="email" name="email" class="form-control mb-2" placeholder="Email" required>
<input type="password" name="password" class="form-control mb-2" placeholder="Password" required>
<button class="btn btn-dark w-100" name="login">Login</button>
</form>

<p class="mt-3 text-center">
No account? <a href="register.php">Register</a>
</p>

</div>
</div>
</div>

<?php include("../includes/footer.php"); ?>