<!DOCTYPE html>
<html lang="en">
<head>
  <title style="">Register</title>
  <link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
</head>
<body>
  <center><h2>Registrasi</h2></center>
  <form action="submit.php" method="post">
    <table align="center" cellpadding="10">
      <tr>
        <td>Username : <input type="text" name="username" placeholder="Username" class="form-control"></td>
      </tr>
      <tr>
        <td>Password : <input type="Password" name="password" placeholder="Password" class="form-control"></td>
      </tr>
      <tr>
        <td>Re-type Password : <input type="text" name="nim" placeholder="NIM" class="form-control"></td>
      </tr>
      <tr>
        <td><input class="btn btn-primary" type="submit" value="Submit"></td>
      </tr>
    </table>
  </form>
</body>
</html>
