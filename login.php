<?php
    session_start();

    $error = "";
    if(isset($_POST["login"])){
        $email=trim($_POST["email"]);
        $password=trim($_POST["password"]);
        $users=file("users.txt");
        $found = false;

        foreach($users as $user){
            $parts = array_map('trim', explode(",", $user));
            if (count($parts) < 4) {
                continue;
            }
            list($name, $e, $phoneNo, $p) = $parts;
            if($email === $e && $password === $p){ 
                $_SESSION["name"]=$name;
                $found = true;
                header("Location:dashboard.php");
                exit;
            }
        }
        if(!$found){ $error = "Invalid login"; }
    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="auth-page">
    <main class="card">
        <div class="brand">
            <div class="brand-mark">A</div>
            <div>
                <div class="brand-title">Auth Portal</div>
                <div class="brand-sub">Welcome back</div>
            </div>
        </div>
        <h1>Log in</h1>
        <?php if($error !== ""){ ?>
            <div class="alert"><?php echo $error; ?></div>
        <?php } ?>
        <form method="POST" class="form">
            <label class="field">
                <span>Email</span>
                <input type="email" name="email" placeholder="you@example.com" required>
            </label>
            <label class="field">
                <span>Password</span>
                <input type="password" name="password" placeholder="Your password" required >
            </label>
            <button class="btn" name="login">Login</button> 
        </form>
        <p class="muted">No account? <a class="link" href="signup.php">Create one</a></p>
    </main>
</body>
</html>
