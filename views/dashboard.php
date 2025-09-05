<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
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
        $all_users = $obj->all();
    ?>

    <div class="container">
        <table class="table table-light w-50 mx-auto">
            <thead class="table-light">
                <tr>
                    <td></td>
                    <td>ID</td>
                    <td>First Name</td>
                    <td>Last Name</td>
                    <td>Username</td>
                    <td></td>
                </tr>
            </thead>
            <tbody>
                <?php while($user = $all_users->fetch_assoc()) { ?>
                    <tr>
                        <!-- icon/photo -->
                        <td>
                            <?php if($user['photo']){ ?>
                                <img src="../assets/images/<?= $user['photo'] ?>" alt="" class ="dashboard-photo">
                            <?php }else{ ?>
                                <i class="fa-solid fa-user text-secondary d-block text-center"></i>
                            <?php }?>
                        </td>
                        <!-- id, etc -->
                         <td><?= $user['id'] ?></td>
                         <td><?= $user['first_name'] ?></td>
                         <td><?= $user['last_name'] ?></td>
                         <td><?= $user['username'] ?></td>
                         <!-- buttons -->
                          <td>
                            <?php if($_SESSION['user_id'] == $user['id']) { ?>
                                <a href="edit.php?id=<?= $_SESSION['user_id'] ?>" class="btn btn-outline-warning"><i class="fa-regular fa-pen-to-square"></i></a>
                                <!-- edit.php?id=2 -->
                                <a href="delete.php" class="btn btn-outline-danger ms-1"><i class="fa-regular fa-trash-can"></i></a>
                            <?php } ?>
                          </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>