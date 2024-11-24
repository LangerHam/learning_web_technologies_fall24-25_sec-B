<html>
    <head>
        <title>Registration Page</title>
    </head>
    <body>
        
        <form action="RegistrationCheck.php" method="post"> <br> 
            Name: 
                <input type="text" name="name" value="" placeholder="Type your name here" /> <br><br>
            Email:
                <input type="text" name="email" value="" placeholder="Type your email here" /> 
                <span id="emailInfo" title="Enter a valid email address. e.g., user@example.com" style="cursor:pointer;">&#9432</span>  <br><br>
            Date of Birth: 
                <input type="text" id="day" name="day" placeholder="dd" maxlength="2" size="2" />
                <input type="text" id="month" name="month" placeholder="mm" maxlength="2" size="2" />
                <input type="text" id="year" name="year" placeholder="yyyy" maxlength="4" size="4" /><br><br>
            Gender:
                <input type="radio" id="male" name="gender" value="Male">Male
                <input type="radio" id="female" name="gender" value="Female">Female
                <input type="radio" id="other" name="gender" value="Other">Other <br><br>
            Password:
                <input type="password" name="pass" value="" placeholder="Type your password here" /> <br><br>
            Confirm Password:
                <input type="password" name="Cpass" value="" placeholder="Type password again" /> <br><br>
                
                <input type="submit" name="submit" value="Submit" />
                <a href="Login.html">Go Back</a>`
        </form>
        <?php
            session_start();
            if(isset($_SESSION['errors']))
            {
                echo '<ul style = "color: red;">';
                foreach($_SESSION['errors'] as $error)
                {
                    echo "<li>$error</li>";
                }
                echo '</ul>';
                unset($_SESSION['errors']);
            }
            if(isset($_SESSION['success']))
            {
                echo '<p style = "color: green;">'.$_SESSION.'</p>';
                unset($_SESSION['success']);
            }
        ?>
    </body>
</html>