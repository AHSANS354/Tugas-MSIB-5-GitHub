<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container d-flex justify-content-center align-items-center p-5">
        <div class="row text-center border">
            <div class="col mt-4 mb-4">
                <h1>Login</h1>
            </div>
            <div class="row d-flex flex-column mb-4">
                <div class="col-auto">
                    <label for="nama" class="col-form-label">Usernama</label>
                </div>
                <div class="col-auto">
                <input class="form-control" name="nama" type="text" placeholder="Input Username" aria-label="default input example">
                </div>
                <div class="col-auto">
                    <label for="pass" class="col-form-label">Password</label>
                </div>
                <div class="col-auto">
                    <input type="password" id="pass" name="pass"placeholder="Input Password"  class="form-control" aria-describedby="passwordHelpInline">
                </div>
                <div class="col-auto">
                    <span id="passwordHelpInline" class="form-text">
                        Must be 8-20 characters long.
                    </span>
                </div>
                <div class="col-auto mt-2">
                    <button type="submit" class="btn btn-primary">Login</button>   
                </div>
            </div>
            <footer class="mt-4 mb-4">&copy; Khasan || MSIB 5 2023</footer>
             </div>
            </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>