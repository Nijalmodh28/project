<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="registerDesing.css">
</head>
<body>
    <section>
    <div class="login-box">
        <form action="nersaryPlant.php" method="post">
        <h2>Login</h2>
        <div class="input-box">
            <span class="icon"><ion-icon name="mail"></ion-icon></span>
            <input type="text" name ="email" required>
            <label>First Name</label>
        </div>       
         <div class="input-box">
            <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
            <input type="password" name ="password" required>
            <label>Last Name</label>
        </div>
        <div class="input-box">
            <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
            <input type="password" name ="password" required>
            <label>Email</label>
        </div>
        <div class="input-box">
            <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
            <input type="password" name ="password" required>
            <label>password</label>
        </div>
        <div class="remember-forgot">
            <label ><input type="checkbox">Remember me</label>
            <a href="#" name = "update">Forgot Password ?</a>
        </div>
        <button type="submit" name = "submit">Login</button>
    </form>
    </div>
</section>
</body>
</html>

