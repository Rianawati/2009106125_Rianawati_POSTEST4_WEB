<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mendaftar akun</title>
    <link rel="stylesheet" href="login.css" />
    
</head>

<body>
<form action="" method="POST">

        <div class="login">
            <h4>Login</h4> 

           
            <input type="email" id="email" name="email" placeholder =" masukkan email email">
            <br>
            <input type="password" id="pwd" name="pwd"  placeholder =" masukkan password">
            <br>
            <!-- <input type="submit" name="sign-up"> -->
            <input type="submit"  id ="submit"name="commit" value="masuk" data-disable-with="Please wait...">
            <!-- <p>  belum punya akun?</p> -->
            <a href="signup.php">  Atau silahkan daftar disini</a>
          
        
        </div>
        
    </form>
    <?php
    if (isset($_POST['commit'])) {
        $email = $_POST['email'];
        $pwd = $_POST['pwd'];
    }
    ?>

</body>

</html>