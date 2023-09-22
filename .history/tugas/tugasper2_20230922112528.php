<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Pertemuan ke 2 PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <h1>Input Data</h1>
    <form method="POST">
        <div class="row gap-3">
            <!-- input nama -->
            <div class="col">
                <label for="nama">Nama : </label>
                <input type="text" name="nama" placeholder="Masukkan Nama Anda!" require>
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
            <input type="radio" name="hobby" id="hobby1" value="Hobby 1"><label for="hobby1">Hobby 1</label>
            <input type="radio" name="hobby" id="hobby2" value="Hobby 2"><label for="hobby2">Hobby 2</label>
            <input type="radio" name="hobby" id="hobby3" value="Hobby 3"><label for="hobby3">Hobby 3</label>
            <input type="radio" name="hobby" id="hobby4" value="Hobby 4"><label for="hobby4">Hobby 4</label>
            <input type="radio" name="hobby" id="hobby5" value="Hobby 5"><label for="hobby5">Hobby 5</label>
            <input type="radio" name="hobby" id="hobby6" value="Hobby 6"><label for="hobby6">Hobby 6</label>
            <input type="radio" name="hobby" id="hobby7" value="Hobby 7"><label for="hobby7">Hobby 7</label>
            <input type="radio" name="hobby" id="hobby8" value="Hobby 8"><label for="hobby8">Hobby 8</label>
            <input type="radio" name="hobby" id="hobby9" value="Hobby 9"><label for="hobby9">Hobby 9</label>
            <input type="radio" name="hobby" id="hobby10" value="Hobby 10"><label for="hobby10">Hobby 10</label>
        </div>
    </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>