<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comfirm Delete</title>
    <!-- CDN CSS Bootstrap -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <!-- CDN Font Awesome -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

     <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <?php include "nav.php" ?>
    <div class="container">
        <div class="w-25 mx-auto text-center">
            <i class="fa-solid fa-triangle-exclamation text-warning display-1 mb-3"></i>

            <h2 class="h3 text-danger mb-5">DELETE ACCOUNT</h2>

            <p class="fw-bold">Are you sure you want to delete your account?</p>

            <div class="row gx-4">
                <div class="col-6">
                    <a href="" class="btn btn-secondary w-100">Cancel</a>
                </div>
                <div class="col-6">
                    <form action="../actions/delete.php" method="post">
                        <button type="submit" class="btn btn-outline-danger w-100">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<!-- CDN JS Bootstrap -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>  
</body>
</html>