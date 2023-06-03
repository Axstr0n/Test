<?php
    // Check if the request is a POST request
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Retrieve the POST data
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        myFunction(fname,lname);
    } else {
        // Return an error message for non-POST requests
        echo "Invalid request method";
    }
?>