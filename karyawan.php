<!doctype html>
<html lang="en">
  <head>
    <style>
    
    body{
        margin: 3px;
        padding: 3px;
    }
    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Data Karyawan</title>
  </head>
  <body>
  <div class="container" style="padding-left:30%; padding-top:20px;"> 
  <h2>Isi Data Karyawan</h2>

<form  method="POST" action="hasil1.php">
<div class="mb-3">
<label for="exampleFormControlInput1" class="form-label">Nama Perusahaan</label>
<input type="text" name="namaP" class="form-control" id="exampleFormControlInput1" placeholder="Nama Perusahaan" style="width:40%;">
</div>
<div class="mb-3">
<label for="exampleFormControlInput1" class="form-label">Nama Departemen</label>
<input type="text" name="namaD" class="form-control" id="exampleFormControlInput1" placeholder="Nama Departemen" style="width:40%;">
</div>
<div class="mb-3">
<label for="exampleFormControlInput1" class="form-label">Nama Karyawan</label>
<input type="text" name="namaK" class="form-control" id="exampleFormControlInput1" placeholder="Nama Karyawan" style="width:40%;">
</div>
<div class="mb-3">
<label for="exampleFormControlInput1" class="form-label">Jabatan</label>
<input type="text" name="jabatan" class="form-control" id="exampleFormControlInput1" placeholder="Jabatan" style="width:40%;">
</div>
<div class="mb-3">
<label for="exampleFormControlInput1" class="form-label">Gaji</label>
<input type="text" name="Gaji" class="form-control" id="exampleFormControlInput1" placeholder="Gaji Perbulan" style="width:40%;">
</div>
<button type="submit" name="submit" value="submit" class="btn btn-danger" style="margin-left:100px;">KIRIM</button>
</div>

    </form>
  </body>
</html>
