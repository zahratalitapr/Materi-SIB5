<form action="" method="post">
    <label for="">Username</label> <br>
    <input type="text" name="username"> <br>
    <label for="">Password</label><br>
    <input type="text" name="password"><br>
    <input type="submit" value="Login" name="login" id="">

</form>

<?php
$username = $_POST ['username'];
$password = $_POST ['password'];

// tampil output
$login = $_POST ['login'];
if(isset($login)){
    echo 'hallo'.$username.'<br> dan password anda : '.$password;
}