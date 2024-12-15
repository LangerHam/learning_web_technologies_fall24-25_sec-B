<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <form method="POST" action="login.php">
    <fieldset>
    <legend><h2>Login</h2></legend>
        <label>User Id:</label><br>
        <input type="text" name="userid" required><br>
        
        <label>Password:</label><br>
        <input type="password" name="password" required><br><br>

        <input type="submit" name="login" value="Login">
        <a href='registration.php'>Register</a>
    </fieldset>
    </form>
</body>
</html>

<?php
session_start();

if (isset($_POST['login'])) 
{
    $userid = $_POST['userid'];
    $password = $_POST['password'];
    $users = file('users.txt', FILE_IGNORE_NEW_LINES);

    foreach ($users as $user) {
        list($storedId, $storedPassword, $storedName, $userType) = explode('|', $user);

        if ($userid === $storedId && $password === $storedPassword)
        {
            $_SESSION['userid'] = $userid;
            $_SESSION['name']= $storedName;
            $_SESSION['user_type'] = trim($userType);

            if (trim($userType) === 'Admin') {
                header('Location: admin_home.php');
            } else {
                header('Location: user_home.php');
            }
            exit;
        }
    }
    echo "<p style='color: red;'>Invalid ID or Password.</p>";
}
?>
