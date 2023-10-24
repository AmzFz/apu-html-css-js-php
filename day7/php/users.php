<?php
require_once("config.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
</head>

<body>
    <?php

    print date("d/m/y h:i:s a");
    ?>
    <?php
    /*
    $username = "john_doe";
    $password = password_hash("secure_password", PASSWORD_DEFAULT); // Always hash passwords!
    $email = "john@example.com";
    $first_name = "John";
    $last_name = "Doe";
    
    $sql = "INSERT INTO users (username, password, email, first_name, last_name) VALUES ('$username', '$password', '$email', '$first_name', '$last_name')";
    
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }


   */

    $username = "john_doe 2";
    $password = password_hash("secure_password", PASSWORD_DEFAULT); // Always hash passwords!
    $email = "john2@example.com";
    $first_name = "John 2";
    $last_name = "Doe 2";

    $sql = "INSERTt INTO users (username, password, email, first_name, last_name) VALUES ('$username', '$password', '$email', '$first_name', '$last_name')";

    try {
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            // echo "Error: " . $sql . "<br>" . $conn->error;
            print "Something went wrong, please try again.";
        }
    } catch (PDOException $e) {

        print "Something went wrong, please try again.";

    }
    /*
    $sql = "SELECT userid, username, email, first_name, last_name FROM users";
    $result = $conn->query($sql);
    //var_dump($result);

    if ($result->num_rows > 0) {
        // Output data of each row
        while($row = $result->fetch_assoc()) {
            echo "ID: " . $row["userid"]. " - Name: " . $row["first_name"]. " " . $row["last_name"]. " - Email: " . $row["email"]. "<br>";
        }
    } else {
        echo "0 results";
    }
    */
    $conn->close();
    ?>



</body>

</html>