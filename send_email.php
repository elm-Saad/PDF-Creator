<?php
    //Define database connection constants
    define('DB_HOST','localhost');
    define('DB_USER','root');
    define('DB_PASSWORD','');
    define('DB_NAME','messages');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize user input
    $first_name = filter_input(INPUT_POST, 'first_name', FILTER_SANITIZE_STRING);
    $last_name = filter_input(INPUT_POST, 'last_name', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $message = htmlspecialchars($_POST['message'], ENT_QUOTES, 'UTF-8');

     # connect to the database
     $database=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD)
    or die('error connecting to mysql server');
    mysqli_select_db($database,DB_NAME)
    or die('unable to locate  messages databases');
     
    #constructe the query
    $query = "INSERT INTO contact_messages (first_name, last_name, email, message) VALUES ('$first_name', '$last_name', '$email', '$message')";

    $result=mysqli_query($database,$query)
    or die('error querying databases');
    #close databases
    mysqli_close($database);

    if ($result) {
        // Redirect to contact.php with success status
        header("Location: contact.php?status=success");
        exit();
    } else {
        // Redirect to contact.php with error status
        header("Location: contact.php?status=error");
        exit();
    }
}
?>
