<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="./vendor/css/bootstrap.css">

</head>

<body>

    <div class="col-12 d-flex justify-content-center align-item-center">
        <div class="card col-md-6">
            <div class="card-body">
                <form action="login.php" method="POST">
                    <?php
                    if (isset($_GET['data'])) {
                        if ($_GET['data'] == "gagal") {
                            echo "<div class='alert alert-danger'>login GAGAL !!</div>";
                        } else if ($_GET['data'] == "logout") {
                            echo "<div class='alert alert-info'>berhasil LOG OUT !!</div>";
                        } else if ($_GET['data'] == "belum_login") {
                            echo "<div class='alert alert-danger'>ANDA BELUM LOGIN !!</div>";
                        }
                    }
                    ?>
                    <div class="mb-3">
                        <label  class="form-label">Username</label>
                        <input type="text" class="form-control" name="username" id="username" aria-describedby="username">
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Password</label>
                        <input type="text" class="form-control" name="password" id="password" aria-describedby="password">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>