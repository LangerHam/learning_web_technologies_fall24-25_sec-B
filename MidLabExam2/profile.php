<?php
session_start();

?>

<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
</head>
<body>
    <h2>Your Profile</h2>
    <p>ID: <?php echo $_SESSION['userid']; ?></p>
    <p>Name: <?php echo $_SESSION['name']; ?></p>
    <p>User Type: <?php echo $_SESSION['user_type']; ?></p>
    <a href="<?php echo $_SESSION['user_type'] === 'Admin' ? 'admin_home.php' : 'user_home.php'; ?>">Back to Home</a>
</body>
</html>
