
<?php
 
 
 if(isset($_POST['kirim'])){
  $email = $_POST['email'];
  $Namalengkap = $_POST['Namalengkap'];
  $usernames = $_POST['username'];
  $no_telepon = $_POST['no_telepon'];
  $alamat = $_POST['alamat'];
  $gender = $_POST['gender'];
  $hobi = $_POST['hobi'];
 }


?>





<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

<table>

  <h2>Data From</h2>
<table class="table table-bordered border-dark">
  <thead>
    <tr>
      <th scope="col">NO</th>
      <th scope="col">Email</th>
      <td scope="col"> <?php echo $email ?? "Janganko Lupai isi ini kolom "; ?> </td>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Nama Lengkap</td>
      <td> <?php echo $Namalengkap ?? "Janganko Lupai isi ini kolom "; ?>  </td>
      
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Usernames</td>
      <td> <?php echo $usernames ?? "Janganko Lupai isi ini kolom "; ?>  </td>
    </tr>

    <tr>
      <th scope="row">3</th>
      <td>No Telepon</td>
      <td> <?php echo $no_telepon ?? "Janganko Lupai isi ini kolom "; ?>  </td>
    </tr>

    <tr>
      <th scope="row">4</th>
      <td>Alamat</td>
      <td> <?php echo $alamat ?? "Janganko Lupai isi ini kolom "; ?>  </td>
    </tr>

    <tr>
      <th scope="row">5</th>
      <td>Jenis Kelamin</td>
      <td> <?php echo $gender ?? "Janganko Lupai isi ini kolom "; ?>  </td>
    </tr>

    <tr>
      <th scope="row">6</th>
      <td>Hobi</td>
      <td> <?php echo $hobi ?? "Janganko Lupai isi ini kolom "; ?>  </td>
    </tr>
  </tbody>

</table>

<a href="index.php">Kembali Ke home</a>


<!-- session -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>