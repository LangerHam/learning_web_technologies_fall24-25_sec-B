<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login with AJAX and JSON</title>

    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    height: 100vh;
    background-color: #f9f9f9;
}

.logo {
    margin-bottom: 20px;
}

.logo img {
    width: 150px; 
    height: auto;
}

.form-container {
    background: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    text-align: center;
}

h2 {
    margin-bottom: 20px;
    color: #333;
}

form {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
}

label {
    margin-bottom: 5px;
    font-weight: bold;
    color: #555;
}

input[type="text"], input[type="password"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 14px;
}

input[type="submit"] {
    width: 100%;
    padding: 10px;
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #45a049;
}

a {
    color: #007BFF;
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
}
    </style>

    <script>
        function validateAndLogin(event) {
            event.preventDefault();
            
            const username = document.getElementById('username').value.trim();
            const password = document.getElementById('password').value.trim();

            if (!username || !password) {
                alert("Username and password are required.");
                return false;
            }

            if (password.length < 4) {
                alert("Password must be at least 4 characters long.");
                return false;
            }

            const data = JSON.stringify({ username, password });

            const xhr = new XMLHttpRequest();
            xhr.open('POST', '../controller/login_val.php', true);
            xhr.setRequestHeader('Content-Type', 'application/json');
            xhr.onload = function () {
                if (xhr.status === 200) {
                    const response = JSON.parse(xhr.responseText);
                    if (response.status === "success") {
                        alert("Login successful!");
                        window.location.href = "Dashboard.php";
                    } else {
                        alert(response.message);
                    }
                } else {
                    alert("An error occurred while processing your request.");
                }
            };
            xhr.send(data);
        }
    </script>
</head>
<body>
    <div class="logo">
        <img src="logo1.png" alt="Logo">
    </div>
    <h2>Login</h2>
    <form name="loginForm" onsubmit="validateAndLogin(event)">
        <label>Username:</label>
        <input type="text" id="username" required><br><br>
        <label>Password:</label>
        <input type="password" id="password" required><br><br>
        <input type="submit" value="Login">
    </form>
    <br>
    <a href="Signup.php">Don't have an account? Signup here</a>
</body>
</html>