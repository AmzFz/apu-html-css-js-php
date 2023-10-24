<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <?php
include("style.php");
?>
</head>
<body>
<?php 

include("header.php");

?>

    <div class="registration-container">
        <h2>Register</h2>
        <form action="submit.php" method="post">
            <div class="input-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required pattern="\w+" title="Username should only contain letters, numbers, and underscores.">
            </div>
            <div class="input-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="input-group">
                <label for="first_name">First Name:</label>
                <input type="text" id="first_name" name="first_name" required pattern="[a-zA-Z\s]+" title="First name should only contain letters.">
            </div>
            <div class="input-group">
                <label for="last_name">Last Name:</label>
                <input type="text" id="last_name" name="last_name" required pattern="[a-zA-Z\s]+" title="Last name should only contain letters.">
            </div>
            <div class="input-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required minlength="8" title="Password should be at least 8 characters long.">
            </div>
            <div class="input-group">
                <label for="retype_password">Retype Password:</label>
                <input type="password" id="retype_password" name="retype_password" required oninput="checkPasswordMatch();" title="Please retype the password.">
            </div>
            <button type="submit">Register</button>
        </form>
    </div>

    <script>
        function checkPasswordMatch() {
    const password = document.getElementById('password');
    const retypePassword = document.getElementById('retype_password');

    if (password.value !== retypePassword.value) {
        retypePassword.setCustomValidity('Passwords do not match.');
    } else {
        retypePassword.setCustomValidity('');
    }
}

    </script>
    
</body>
</html>