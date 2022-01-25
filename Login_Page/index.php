<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="stye.css">
</head>

<body>
    <?php 
    if(isset($_GET['pesan'])){
        if($_GET['pesan']=="gagal"){
            echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
        }
    }
    ?>
    <h2>Login Here</h2>
    <form action="cek_login.php" method="post">
        <div class="container-al46">
            <!-- Username -->
            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="username" required>

            <!-- password -->
            <label for="psw"><b>Password</b></label>
            <input type="password" name="password" placeholder="Password" requaired>

            <!-- ingat saya -->
            <input type="checkbox" checked="checked"><span>Remember Me</span>
            <input type="submit" class="tombol_login" value="LOGIN">
            <!-- Login button -->
           
            </div>
        </div>
    </form>
</body>

</html>