<!DOCTYPE html> 
<html>
     <head> 
        <title>
            Login Sederhana
        </title> 
     </head> 
<body> 
    <h2>
        Login
    </h2> 
    <form method="POST"> 
        Username: <input type="text" name="username"><br><br> 
        Password: <input type="password" name="password"><br><br> 
        <button type="submit">Login</button> 
    </form> 
    
    <?php 
    if (isset($_POST['username'])) { 
        $username = $_POST['username']; 
        $password = $_POST['password']; 
        
        if ($username == "" || $password == "") { 
            echo "<script>alert('Username dan Password wajib diisi!');</script>"; 
        } else { 
            if ($username == "admin" && $password == "123") { 
                echo "<h3>Login Berhasil! Selamat datang, admin</h3>"; 
            } else { 
                echo "<script>alert('Login gagal!');</script>"; 
            } 
        } 
    } 
    ?> 
</body> 
</html>