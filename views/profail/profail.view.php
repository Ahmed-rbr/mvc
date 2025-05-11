<?php
require basePath("views/partes/head.php");
require basePath("views/partes/nave.php");
if(isset($_SESSION['user'])){
    $user=$_SESSION['user'];
}

?>

<div class="container mt-5">
    <div class="card shadow" style="max-width: 500px; margin: auto;">
        <div class="card-body">
            <h3 class="card-title mb-3">User Profile</h3>
            <p><strong>Username:</strong> <?= htmlspecialchars($user['username']) ?></p>
            <p><strong>Email:</strong> <?= htmlspecialchars($user['email']) ?></p>

            <a href="/mvc/edit_profile" class="btn btn-primary mt-3">Edit Profile</a>
            <a href="/mvc/out" class="btn btn-danger mt-3">Logout</a>
        </div>
    </div>
</div>
