<?php
 
 include 'coneksi.php';

//  var_dump($koneksi);

$sql = 'SELECT * FROM  data_mahasiswa';
$hasil = mysqli_query($koneksi, $sql);

// var_dump($hasil);

// if (mysqli_num_rows($hasil) > 0)
// {
//   // looping
//   while($row = mysqli_fetch_assoc($hasil))
//   {
//     echo "nama : " . $row['nama'] . "Stambuk" . $row ['stambuk'] . "<br>";
//   }
// }
// else
// {
//   echo "Data tidak ada ";
// }


?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pertemuan 9</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

    <div class="container">
        <h1 class="text-center">Data mahasiswa</h1>
        
        <a class="btn btn-success mb-4" href="create.php">Tambah Data</a>
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th scope="row">No</th>
                    <td scope="row">Stambuk</td>
                    <td scope="row">Nama Lengkap</td>
                    <td scope="row">Jurusan</td>
                    <td scope="row">Alamat</td>
                    <td scope="row">Tanggal Lahir</td>
                    <td scope="row">Aksi</td>
                  </tr>
            </thead>
            <tbody>

              <?php  if(mysqli_num_rows($hasil) > 0){
                 $no = 1; 
                 while($row = mysqli_fetch_assoc($hasil)):  
                ?>
              
              <tr>
                <th scope="row"><?php echo  $no++ ?></th>
                <td><?= $row['stambuk']?></td>
                <td><?= $row['nama']?></td>
                <td><?= $row['jurusan']?></td>
                <td><?= $row['alamat']?></td>
                <td><?= $row['tgl_lahir']?></td>
                <td><a class="btn btn-warning" href="update.php?stambuk=<?= $row['stambuk']?>">Edit</a>
                <a  class="btn btn-danger" onclick="return confirm('Yakin ingin hapus ?')" href="delete.php?stambuk=<?= $row['stambuk']?>"> Hapus</a></td>
              </tr>
              <?php endwhile; ?>
             <?php }else{ ?>
              <tr>
                  <td colspan="6" class="text-center"> Data Tidak ada </td>
              </tr>
             <?php }?>
            </tbody>
          </table>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>