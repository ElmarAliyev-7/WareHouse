<?php
require "db.php";
include "layouts/header.php";

if (isset($_POST['login_submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (!$username || !$password) {
        echo '<div class="alert alert-warning">Butun saheler doldurulmalidi</div>';
    } else {
        $hashed_pass = md5($password);
        $sql    = "SELECT * FROM users WHERE username='$username' AND password='$hashed_pass'";
        foreach  ($conn->query($sql) as $row) {
            print $row['username'] . "\n";
            print  $row['password'] . "\n";
        }
    }
}

?>

<style>
    .btn-color{
        background-color: #0e1c36;
        color: #fff;

    }

    .profile-image-pic{
        height: 200px;
        width: 200px;
        object-fit: cover;
    }



    .cardbody-color{
        background-color: #ebf2fa;
    }

    a{
        text-decoration: none;
    }
</style>
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h2 class="text-center text-dark mt-5">Admin Panel</h2>
            <div class="card my-5">

                <form class="card-body cardbody-color p-lg-5" action="" method="POST">

                    <div class="text-center">
                        <img src="https://cdn.pixabay.com/photo/2016/03/31/19/56/avatar-1295397__340.png" class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3"
                             width="200px" alt="profile">
                    </div>

                    <div class="mb-3">
                        <input type="text" class="form-control" id="Username" aria-describedby="emailHelp"
                          placeholder="User Name" name="username">
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" id="password" placeholder="password" name="password">
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-color px-5 mb-5 w-100" name="login_submit">Login</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

<?php include "layouts/footer.php"; ?>
