<?php 
session_start(); 
if(!isset($_SESSION['name'])){
     header("Location: login.php"); 
     exit(); 
     } 
     ?> 
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="dashboard">
    <main class="card dashboard-card">
        <div class="brand">
            <div class="brand-mark">A</div>
            <div>
                <div class="brand-title">Auth Portal</div>
                <div class="brand-sub">Signed in</div>
            </div>
        </div>
        <h1>Welcome <?php echo $_SESSION['name']; ?></h1> 
        <p class="muted">You are logged in successfully.</p>
        <a class="btn btn-outline" href="logout.php">Logout</a>
    </main>
</body>
</html>
