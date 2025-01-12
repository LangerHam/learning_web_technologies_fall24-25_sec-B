<html lang="en">
<head>
    <title>Admin Pansel</title>

</head>
<body>
    <h1>Admin Panel</h1>

    <h2>Register Employee</h2>
    <form action="register.php" method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="contact">Contact No:</label>
        <input type="text" id="contact" name="contact" required><br><br>

        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>

        <button type="submit">Register</button>
    </form>

    <h2>Search Employee</h2>
    <input type="text" id="search" placeholder="Search by Name">
    <div id="searchResults"></div>

    <h2>Employee Table</h2>
    <div id="employeeTable"></div>

    <script>
        $(document).ready(function() {
            $('#search').on('input', function() {
                let searchValue = $(this).val();
                $.ajax({
                    url: 'search.php',
                    method: 'POST',
                    data: { query: searchValue },
                    success: function(response) {
                        $('#searchResults').html(response);
                    }
                });
            });

            function loadTable() {
                $.ajax({
                    url: 'table.php',
                    success: function(data) {
                        $('#employeeTable').html(data);
                    }
                });
            }

            loadTable();
        });
    </script>
</body>
</html>