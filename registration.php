<?php
// Include the database connection file
include 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
    $birth_date = mysqli_real_escape_string($conn, $_POST['birth_date']);
    $gender= mysqli_real_escape_string($conn, $_POST['gender']);
    $grade= mysqli_real_escape_string($conn, $_POST['grade']);
    $school_name= mysqli_real_escape_string($conn, $_POST['school_name']);

    // SQL query to insert data
    $sql = "INSERT INTO students (first_name, last_name, gender,grade, 
    birth_date,school_name) VALUES ('$first_name', '$last_name', '$gender',
     '$grade','$school_name','$birth_date')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
