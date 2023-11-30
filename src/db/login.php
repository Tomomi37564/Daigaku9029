<?php
require_once 'conexao.php';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve user input
    $gamertag = $_POST['gamertag'];
    $password = $_POST['password'];

    // Query to check if the user exists
    $sql = "SELECT * FROM user WHERE gamertag = '$gamertag' AND password = '$password'";
    
    // Perform the query
    $result = $conexao->query($sql);

    // Check if the query was successful
    if ($result) {
        // Check if a user was found
        if ($result->num_rows > 0) {
            // User authenticated, redirect or perform other actions as needed
            echo "<h1>Login Successful!</h1>";
            
        } else {
            // User not found or invalid credentials
            echo "<h1 id='resp'>Invalid Gamertag or Password</h1>";
        }
    } else {
        // Error in the query
        echo "Error: " . $sql . " " . $conexao->error;
    }

    // Close the database connection
    $conexao->close();
}
?>
