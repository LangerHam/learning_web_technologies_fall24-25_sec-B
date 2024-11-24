<?php

session_start();

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $errors = [];
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $day = trim($_POST['day']);
    $month = trim($_POST['month']);
    $year = trim($_POST['year']);
    $password = trim($_POST['pass']);
    $confirmPassword = trim($_POST['Cpass']);
    $gender = isset($_POST['gender']) ? $_POST['gender'] : '';

    if(empty($name))
    {
        $errors[] = "Name is required.";
    }
    if(empty($email))
    {
        $errors[] = "Email is required.";
    }
    elseif(!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        $errors[] = "Invalid email format.";
    }
    if(empty($day) || empty($month) || empty($year))
    {
        $errors[] = "Date of birth is required.";
    }
    elseif(!checkdate((int)$month, (int)$day, (int)$year))
    {
        $errors[] = "Invalid date of birth.";
    }
    if(empty($gender))
    {
        $errors[] = "Gender is required.";
    }
    if(empty($password))
    {
        $errors[] = "Password is required.";
    }
    if(empty($confirmPassword))
    {
        $errors[] = "Write password again.";
    }
    if(empty($password !== $confirmPassword))
    {
        $errors[] = "Passwords do not match.";
    }

    if(count($errors) > 0)
    {
        $_SESSION['errors'] = $errors;
        header("Location: Registration.php");
        exit();
    }
    else
    {
        $_SESSION['success'] = "Registration successful!";
        header("Location: Login.html");
        exit();
    }
}

?>