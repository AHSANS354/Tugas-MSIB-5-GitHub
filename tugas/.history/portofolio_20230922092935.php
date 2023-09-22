<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <style>
      #content {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
      }
    </style>
  </head>
  <body class="bg-dark">
    <div class="home">
      <div class="row">
        <ul class="nav fixed-top justify-content-center bg-dark p-3 gap-3 shadow">
          <li class="nav-item">
            <a class="nav-link text-warning" href="home.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-warning" href="portofolio.php">Portofolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-warning" href="contact.php">Contact</a>
          </li>
        </ul>
      </div>
      <div class="content">
        <div class="row mt-5 pt-5 row-cols-1 row-cols-md-3 g-4" id="content">
          <div class="col text-light text-center"><h1>My Project</h1></div>
          <div class="col">
            <div class="card">
              <a href="https://barberhop.vercel.app/" target="_blank">
                <img src="images/barber.png" class="card-img-top" alt="..." />
              </a>
              <div class="card-body">
                <h5 class="card-title">Project Barbershop</h5>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <a href="https://gypsum-interior.vercel.app/" target="_blank">
                <img src="images/gipsum.png" class="card-img-top" alt="..." />
              </a>
              <div class="card-body">
                <h5 class="card-title">Gypsum Interior</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer text-light text-center mt-5 p-2">&copy; Khasan Dullatif || 2023</footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
