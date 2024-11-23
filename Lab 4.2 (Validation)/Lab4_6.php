<?php
    $error = "";
    $success = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['blood_group']) && !empty($_POST['blood_group'])) {
            $blood_group = $_POST['blood_group'];
            $success = "Form submitted successfully. You selected blood group: " . $blood_group;
        } else {
            $error = "Please select a blood group.";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Validation Results</title>
    <style>
        .error {
            color: red;
            font-size: 0.9em;
        }
        .success {
            color: green;
            font-size: 0.9em;
        }
    </style>
</head>
<body>
    <div>
        <h2>Validation Results</h2>
        <?php if (!empty($error)): ?>
            <p class="error"><?php echo $error; ?></p>
        <?php elseif (!empty($success)): ?>
            <p class="success"><?php echo $success; ?></p>
        <?php endif; ?>
        <a href="Lab4_6.html">Go back</a>
    </div>
</body>
</html>