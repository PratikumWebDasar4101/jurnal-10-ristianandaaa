<!DOCTYPE html>
<html lang="en">
<head>
  <title>Data Baru</title>
  <link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
</head>
<body>
  <center><h2>New Data</h2></center>
  <form action="inputdata.php" method="post">
    <table cellpadding="10" align="center">
      <tr>
        <td><input type="text" name="nama" placeholder="Nama Depan" class="form-control"></td>
      </tr>
      <tr>
        <td><input type="text" name="nama" placeholder="Nama Belakang" class="form-control"></td>
      </tr>
      <tr>
        <td><input type="text" name="kelas" placeholder="Kelas" class="form-control"></td>
      </tr>
      <tr>
        <td>Hobi</td>
        <td>
          <input type="checkbox" name="hobi[]" value="Menulis">Menulis
          <input type="checkbox" name="hobi[]" value="Membaca">Membaca
          <input type="checkbox" name="hobi[]" value="Nonton">Nonton
          <input type="checkbox" name="hobi[]" value="Bercengkrama">Bercengkrama
        </td>
      </tr>
      <tr>
        <td>Genre</td>
        <td>
          <input type="checkbox" name="genre[]" value="Horor">Horor
          <input type="checkbox" name="genre[]" value="Anime">Anime
          <input type="checkbox" name="genre[]" value="Action">Action
          <input type="checkbox" name="genre[]" value="Drama">Drama
        </td>
      </tr>
      <tr>
        <td>Wisata</td>
        <td>
          <input type="checkbox" name="wisata[]" value="Bali">Bali
          <input type="checkbox" name="wisata[]" value="Tanjung selor">Tanjung selor
          <input type="checkbox" name="wisata[]" value="Jakarta">Jakarta
          <input type="checkbox" name="wisata[]" value="Lombok">Lombok
        </td>
      </tr>
      <tr>
        <td><input type="date" name="tanggal" placeholder="Tanggal" class="form-control"></td>
      </tr>
      <tr>
        <td><input type="submit" name="submit" value="Register" class="btn btn-primary"></td>
      </tr>
    </table>
  </form>
</body>
</html>
