<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body>
    <form method="POST" action="registration.php">
    <fieldset >
    <legend><h2>Registration</h2></legend>
        <label>ID:</label><br>
        <input type="text" name="id" required><br>
        
        <label>Password:</label><br>
        <input type="password" name="password" required><br>

        <label>Confirm Password:</label><br>
        <input type="password" name="cpassword" required><br>

        <label>Name:</label><br>
        <input type="text" name="name" required><br><br>

        <label>User Type:</label><br>
        _________________________________<br>
        <input type="radio" name="type" value="User">User
        <input type="radio" name="type" value="Admin">Admin<br>
        _________________________________<br>
        

        <input type="submit" name="register" value="Sign Up">
        <a href='login.php'>Sign in</a>
    </fieldset>
    </form>
</body>
</html>

<?php
if (isset($_POST['register'])) 
{
    $id = $_POST['id'];
    $password = $_POST['password'];
    $confirm_password = $_POST['cpassword'];
    $name = $_POST['name'];
    $user_type = $_POST['type'];

    if ($password !== $confirm_password) 
    {
        echo "<p style='color: red;'>Passwords do not match. Please try again.</p>";
    } 
    else 
    {
        $userData = "$id|$password|$name|$user_type\n";
        $file = 'users.txt';

        if (!file_exists($file)) 
        {
            file_put_contents($file, '');
        }

        file_put_contents($file, $userData, FILE_APPEND);
        echo "<p style='color: green;'>Registration successful. Go back to <a href='login.php'>Sign in</a></p>";
    }
}
?>
