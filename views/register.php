<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!-- CDN CSS Bootstrap -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body class="bg-light">
    <form action="../actions/register.php" method="post" class="border rounded-3 w-25 mx-auto my-4 p-5 bg-white">
        <h1 class="display-6 text-center mb-5">REGISTER</h1>

        <!-- first name -->
         <label for="first-name" class="form-label">First Name</label>
         <input type="text" name="first_name" id="first-name" class="form-control mb-3" required maxlength="50">

         <!-- last name -->
          <label for="last-name" class="form-label">Last Name</label>
          <input type="text" name="last_name" id="last-name" class="form-control mb-3" required maxlength="50">

        <!-- username -->
         <label for="username" class="form-label fw-bold">Username</label>
         <input type="text" name="username" id="username" class="form-control mb-3" required maxlength="50">

         <!-- password -->
          <label for="password" class="form-label fw-bold">Password</label>
          <input type="password" name="password" id="password" class="form-control" required minlength="8" maxlength="50">
          <p class="form-text">
            Password must be at least 8 characters long.
          </p>

          <button type="submit" class="btn btn-success w-100">Register</button>
          <p class="mb-0 text-center mt-3">
            Registered already? <a href="index.php">Log in</a>.
          </p>
    </form>
    <!-- CDN JS Bootstrap -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>