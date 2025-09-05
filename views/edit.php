<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <!-- CDN CSS Bootstrap -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <!-- CDN Font Awesome -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <!-- CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <?php
        include "nav.php";
        require "../classes/User.php";

        $obj = new User;
        $user = $obj->find($_GET['id']);
    ?>
    <div class="container">
        <div class="w-50 mx-auto">
            <form action="../actions/edit.php" method="post" enctype="multipart/form-data">
                <h2 class="h4 text-center mb-3">EDIT USER</h2>
                
                <!-- icon/photo -->
                 <?php if($user['photo']){ ?>
                        <img src="../assets/images/<?= $user['photo'] ?>" alt="" class ="edit-photo d-block mx-auto mb-3">
                <?php }else{ ?>
                 <i class="fa-solid fa-user text-secondary d-block mx-auto edit-icon mb-3"></i>
                <?php } ?>

                 <input type="file" name="photo" id="photo" class="form-control w-auto mb-3 mx-auto">

                 <!-- first name -->
                  <label for="first-name" class="form-label">First Name</label>
                  <input type="text" name="first_name" id="first-name" required maxlength="50" value="<?= $user['first_name'] ?>" class="form-control mb-3">

                <!-- last name -->
                 <label for="last-name" class="form-label">Last Name</label>
                 <input type="text" name="last_name" id="last-name" required maxlength="50" value="<?= $user['last_name']?>" class="form-control mb-3">

                 <!-- username -->
                 <label for="username" class="form-label fw-bold">Username</label>
                 <input type="text" name="username" id="username" required maxlength="50" value="<?= $user['username']?>" class="form-control mb-4"> 

                 <div class="text-end">
                    <a href="dashboard.php" class="btn btn-secondary">Cancel</a>
                    <button type="submit" class="btn btn-warning px-5 ms-1">Save</button>
                 </div>
            </form>
        </div>
    </div>
 <!-- CDN JS Bootstrap -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>   
</body>
</html>