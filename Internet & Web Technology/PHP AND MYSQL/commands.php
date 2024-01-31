<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDatabase";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL to create table
    $sql = "CREATE TABLE MyGuests (
    id INT(6) ,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    )";
    
    if ($conn->query($sql) === TRUE) {
        echo "Table created successfully";
    } else {
        echo "Error creating table: " . $conn->error;
    }
    
    // SQL to insert record
    $sql = "INSERT INTO MyGuests (firstname, lastname, email)
    VALUES ('John', 'Doe', 'john@example.com')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Record inserted successfully";
    } else {
        echo "Error inserting record: " . $conn->error;
    }    


    // Get table list
    $sql = "SELECT id, firstname, lastname, email FROM MyGuests";   
    $result = $conn->query($sql);


    // SQL to alter table
    $sql = "ALTER TABLE MyGuests ADD COLUMN birthdate DATE";

    if ($conn->query($sql) === TRUE) {
        echo "Table altered successfully";
    } else {
        echo "Error altering table: " . $conn->error;
    }

    // SQL to delete table
    $sql = "DROP TABLE MyGuests";

    if ($conn->query($sql) === TRUE) {
        echo "Table deleted successfully";
    } else {
        echo "Error deleting table: " . $conn->error;
    }

    // SQL to delete database
   
    $sql = "DROP DATABASE myDatabase";

    if ($conn->query($sql) === TRUE) {
        echo "Database deleted successfully";
    } else {
        echo "Error deleting database: " . $conn->error;
    }
    $conn->close();
    ?>