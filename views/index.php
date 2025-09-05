<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- CDN CSS Bootstrap -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body class="bg-light">
    <form action="../actions/login.php" method="post" class="border rounded-3 w-25 mx-auto my-4 p-4 bg-white">
        <h1 class="display-6 text-center mb-5">LOGIN</h1>

        <input type="text" name="username" id="username" placeholder="USERNAME" required maxlength="50" class="form-control mb-2">
        <input type="password" name="password" id="password" placeholder="PASSWORD" required minlength="8" class="form-control mb-5">

        <button type="submit" class="btn btn-primary w-100 mb-3">Log In</button>
        <p class="text-center">
            <a href="register.php">Create Account</a>
        </p>
    </form>  
    <!-- CDN JS Bootstrap -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>  
</body>

</html>