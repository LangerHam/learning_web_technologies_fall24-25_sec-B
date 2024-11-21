<?php
    $error = "";
    $success = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $day = trim($_POST["day"]);
        $month = trim($_POST["month"]);
        $year = trim($_POST["year"]);

        // Validate day, month, year
        if (empty($day) || empty($month) || empty($year)) {
            $error = "Date of Birth fields cannot be empty.";
        } elseif (!is_numeric($day) || !is_numeric($month) || !is_numeric($year)) {
            $error = "Date of Birth must be valid numbers.";
        } elseif ($day < 1 || $day > 31) {
            $error = "Day must be between 1 and 31.";
        } elseif ($month < 1 || $month > 12) {
            $error = "Month must be between 1 and 12.";
        } elseif ($year < 1953 || $year > 2025) {
            $error = "Year must be between 1953 and PRESENT.";
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
        <a href="Lab4_3.html">Go back</a>
    </div>
</body>
</html>