<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>daftar</title>
    <link rel="stylesheet" href="signup.css" />
    
</head>

<body>
<form action="" method="POST">
        <div class="mendaftar">
            <h3>Buat Akun</h3> 
            <input placeholder="Nama Depan"  type="text" id="depan" name="depan" >
            
           
            <input type="text" id="belakang" name="belakang"  placeholder ="  nama belakang">
            <br>
            <input type="email" id="daftaremail" name="daftaremail" placeholder ="  email">
            
           
            <input type="password" id="daftarpassword" name="password"  placeholder ="  password">
          
            <input  id ="tombol"  type="submit" name="submit" value="masuk" data-disable-with="Please wait...">
        </div>
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $daftaremail = $_POST['daftaremail'];
        $depan = $_POST['depan'];
        $belakang = $_POST['belakang'];
        $password = $_POST['password'];
    }
    ?>

</body>

</html>