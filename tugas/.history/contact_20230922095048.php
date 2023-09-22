<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />
    <style>
      .content {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
      }
      i {
        font-size: 5rem;
      }
    </style>
  </head>
  <?php
  $home = 'Home';
  $porto = 'Portofolio';
  $kontak = 'Contact';
  $linkedin = 'Khasan Dullatif';
  $insta = '@ahsans_';
  $wa = '+62 821 3641 3106';
  $git = 'AHSANS354';
  $foter = 'Khasan Dullatif || 2023';
  ?>
  <body class="bg-dark">
    <div class="home">
      <div class="row">
        <ul class="nav fixed-top justify-content-center bg-dark p-3 gap-3 shadow">
          <li class="nav-item">
            <a class="nav-link text-warning" href="home.php"><?= $home ?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-warning" href="portofolio.php"><?= $porto ?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-warning" href="contact.php"></a>
          </li>
        </ul>
      </div>
      <div class="content">
        <div class="row mt-5 pt-5">
          <div class="col d-flex flex-column">
            <a href="https://www.linkedin.com/in/khasan-dullatif/" target="_blank" class="d-flex align-items-center gap-3 text-light text-decoration-none"><i class="bi bi-linkedin text-info"></i></a>

            <a href="https://www.instagram.com/_ahsans_/" target="_blank" class="d-flex align-items-center gap-3 text-light text-decoration-none"><i class="bi bi-instagram" style="color: #c13584"></i></a>

            <a href="https://wa.me/+6282136413106/" target="_blank" class="d-flex align-items-center gap-3 text-light text-decoration-none"><i class="bi bi-whatsapp text-success"></i></a>

            <a href="https://github.com/AHSANS354" target="_blank" class="d-flex align-items-center gap-3 text-light text-decoration-none"><i class="bi bi-github text-light"></i></a>
          </div>
        </div>
      </div>
      <footer class="footer text-light text-center mt-5 p-2">&copy; </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
