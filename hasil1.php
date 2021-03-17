<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Data Karyawan</title>
  </head>
  <body>
    <center><h2>Data Karyawan Anda</h2></center>
    <table class="table table-dark table-hover">

<tr>
      <th scope="col">Nama Perusahaan</th>
      <th scope="col">Nama Departemen</th>
      <th scope="col">Nama Karyawan</th>
      <th scope="col">Jabatan</th>
      <th scope="col">Gaji Per bulan</th>
      <th scope="col">Gaji Per hari</th>
    </tr>
    <tr>
      <th scope="col"><?php echo $_POST ['namaP']?></th>
      <th scope="col"><?php echo $_POST ['namaD']?></th>
      <th scope="col"><?php echo $_POST ['namaK']?></th>
      <th scope="col"><?php echo $_POST ['jabatan']?></th>
      <th scope="col"><?php echo $_POST ['Gaji'] ?></th>
      <th scope="col"><?php 
      $gaji = $_POST['Gaji'];
      $gaji= $gaji / 30;
      echo $gaji?></th>
      

    </tr>
 
</table>
</table>
    
    
  </body>
</html>
