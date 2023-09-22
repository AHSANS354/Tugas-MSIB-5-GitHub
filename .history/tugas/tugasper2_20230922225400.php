<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Pertemuan ke 2 PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">

        <h1 class="p-3">Input Data</h1>
        <form method="POST">
            <div class="row d-flex flex-column gap-3">
            <!-- input nama -->
            <div class="col">
                <label for="nama" class="form-label">Nama : </label>
                <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Anda!" require>
            </div>
            <!-- //input seleksi pekerjaan (select option) -->
            <div class="col">
                <label for="pekerjaan">Pekerjaan :</label>
            <select name="pekerjaan" id="">
            <option value="">==> Pilih Pekerjaan <==</option>
            <option value="Pekerjaan 1">Pekerjaan 1</option>
            <option value="Pekerjaan 2">Pekerjaan 2</option>
            <option value="Pekerjaan 3">Pekerjaan 3</option>
            <option value="Pekerjaan 4">Pekerjaan 4</option>
            <option value="Pekerjaan 5">Pekerjaan 5</option>
            <option value="Pekerjaan 6">Pekerjaan 6</option>
            <option value="Pekerjaan 7">Pekerjaan 7</option>
            <option value="Pekerjaan 8">Pekerjaan 8</option>
            <option value="Pekerjaan 9">Pekerjaan 9</option>
            <option value="Pekerjaan 10">Pekerjaan 10</option>
        </select>
    </div>
    <!-- // input Hobby (radio button) -->
        <div class="col">
        <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
            <label class="form-check-label" for="flexRadioDefault1">
                Default radio
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
            <label class="form-check-label" for="flexRadioDefault2">
                Default checked radio
            </label>
        </div>
        </div>
        <div class="col text-center">
            <button type="submit" name="proses" class="btn btn-primary">Simpan</button>
        </div>
    </div>
</form>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>