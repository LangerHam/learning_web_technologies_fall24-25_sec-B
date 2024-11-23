<?php
    $error = "";
    $success = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['degree'])) {
            $selected_degrees = $_POST['degree'];
            if (count($selected_degrees) >= 2) {
                $success = "Form submitted successfully. You selected: " . implode(", ", $selected_degrees);
            } else {
                $error = "Please select at least two degrees.";
            }
        } else {
            $error = "Please select at least two degrees.";
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
        <a href="Lab4_5.html">Go back</a>
    </div>
</body>
</html>