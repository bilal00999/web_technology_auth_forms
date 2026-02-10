<?php
    $error = "";
    if(isset($_POST["signup"])){
        $name = trim($_POST["name"]);
        $email = trim($_POST["email"]);
        $phoneNo = trim($_POST["phoneno"]);
        $password = trim($_POST["password"]);
        $confirmPassword = trim($_POST["confirm_password"]);

        if ($password !== $confirmPassword) {
            $error = "Passwords do not match";
        } else {
            $data = $name . "," . $email . "," . $phoneNo . "," . $password . "\n";

            file_put_contents("users.txt", $data, FILE_APPEND);
            header("Location:login.php");
            exit;
        }
    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign up</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="auth-page">
    <main class="card">
        <div class="brand">
            <div class="brand-mark">A</div>
            <div>
                <div class="brand-title">Auth Portal</div>
                <div class="brand-sub">Create your account</div>
            </div>
        </div>
        <h1>Sign up</h1>
        <?php if($error !== ""){ ?>
            <div class="alert"><?php echo $error; ?></div>
        <?php } ?>
        <form method="POST" class="form">
            <label class="field">
                <span>Name</span>
                <input type="text" name="name" placeholder="Full name" required>
            </label>
            <label class="field">
                <span>Email</span>
                <input type="email" name="email" placeholder="you@example.com" required>
            </label>
            <label class="field">
                <span>Phone</span>
                <input type="phoneno" name="phoneno" placeholder="Your phone number" required>
            </label>
            <label class="field">
                <span>Password</span>
                <input type="password" name="password" placeholder="Create password" required >
            </label>
            <label class="field">
                <span>Confirm Password</span>
                <input type="password" name="confirm_password" placeholder="Repeat password" required>
            </label>
            <button class="btn" name="signup">Create account</button> 
        </form>
        <p class="muted">Already have an account? <a class="link" href="login.php">Log in</a></p>
    </main>
</body>
</html>
