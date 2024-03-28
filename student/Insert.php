<?php
// Assuming you have set up a database connection, replace 'your_db_host', 'your_db_user', 'your_db_password', and 'your_db_name' with your actual database credentials.
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'elearning';

try {
    // Establish database connection
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Get data from the form
    $studentID = $_POST['studentID'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $middleName = $_POST['middleName'];
    $plainPassword = $_POST['password']; // Password before hashing
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    
    // Hash the password using MD5
    $hashedPassword = md5($plainPassword);

    // Prepare the SQL statement to insert data into the database
    $stmt = $conn->prepare("INSERT INTO students (student_id, firstname, lastname, middlename, password, dob, gender, email) VALUES (:studentID, :firstName, :lastName, :middleName, :hashedPassword, :dob, :gender, :email)");

    // Bind parameters to the prepared statement
    $stmt->bindParam(':studentID', $studentID);
    $stmt->bindParam(':firstName', $firstName);
    $stmt->bindParam(':lastName', $lastName);
    $stmt->bindParam(':hashedPassword', $hashedPassword);
    $stmt->bindParam(':middleName', $middleName);
    $stmt->bindParam(':dob', $dob);
    $stmt->bindParam(':gender', $gender);
    $stmt->bindParam(':email', $email);
   

    // Execute the prepared statement
    $stmt->execute();

    // Close the database connection
    $conn = null;

    // Redirect back to the form page or display a success message
    // Example redirect:
    header("Location: success.php");
    exit();
} catch (PDOException $e) {
    // Handle database connection errors or other exceptions
    echo "Error: " . $e->getMessage();
}
?>
