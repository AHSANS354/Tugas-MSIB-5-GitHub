<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <style>
    body{
        background: url("images/wp_admin.jpg");
        background-repeat: no-repeat;
        background-size: cover;
    }
    .text-light{
        text-shadow: 2px 2px #000;
    }
  </style>
  <body>
    <?php
        $helo = 'Hello, Admin Selamat datang!';
        $lat = 'ini adalah dasboard admin latihan tugas pada pertemuan ke 4 materi PHP';
        $back = 'Back to Login';
    ?>
    <div class="container p-5 mt-5">
        <div class="row p-5">
            <div class="col-12 d-flex justify-content-center text-light">
                <h1><?= $helo ?></h1>
            </div>
            <div class="col-12 d-flex justify-content-center text-light fw-bold">
                <span><?= $lat ?></span>
            </div>
        </div>
        <div class="row p-5">
            <div class="col d-flex justify-content-center">
                <a href="login.php" class="btn btn-primary"><?= $back ?></a>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>