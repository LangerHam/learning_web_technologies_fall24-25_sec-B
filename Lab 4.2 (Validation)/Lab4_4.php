<?php
    $error = "";
    $success = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["gender"])) {
            $error = "Please select a gender.";
        } else {
            $success = "Form submitted successfully!";
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
        <a href="Lab4_4.html">Go back</a>
    </div>
</body>
</html>