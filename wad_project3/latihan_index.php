<?php
    $conn = mysqli_connect("localhost:3308","root","","wad_project3");
    $result = mysqli_query($conn, 'SELECT * FROM students');
    //$data = mysqli_fetch_object($result);
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LATIHAN PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
  <h1>DAFTAR MAHASISWA</h1>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">Nomor</th>
      <th scope="col">NIM</th>
      <th scope="col">Nama</th>
      <th scope="col">Alamat</th>
    </tr>
  </thead>
  <tbody>
    <?php while ( $data = mysqli_fetch_object ($result)) {
    ?>
    <tr>
      <th scope="row"><?php echo $data -> Id?></th>
      <td><?php echo $data -> NIM?></td>
      <td><?php echo $data -> Name?></td>
      <td><?php echo $data -> Address?></td>
    </tr>
    <?php } ?>
  </tbody>
</table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>