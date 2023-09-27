<?php
$username = [];
$password = [];
?>

<html>
<head>
    <title>Form Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container login">
        <div class="item">
            <h2>Form Login</h2>
            <form method="POST" action="form_login.php">
                <label for="username">Username:</label>
                <input type="text" name="username" id="username" required><br><br>
        
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" required><br><br>
        
                <button name="login" class="button">Submit</button></th>
            </form>
        </div>
    </div>
</body>
</html>

<?php
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    function cekLogin($username, $password)  {
        if ($username === "admin" && $password === "mimin"){
            return true;
        } else {
            return false;
        }
    }
    
}  

if (cekLogin($username, $password)){
    header("Location: admin.php");
} else {
    echo "Login gagal. Silakan coba lagi.";
}


?>
