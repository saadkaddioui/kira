<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = isset($_POST['name']) ? $_POST['name'] : "";
    $email = isset($_POST['email']) ? $_POST['email'] : "";
    $subject = isset($_POST['subject']) ? $_POST['subject'] : "";
    $message = isset($_POST['message']) ? $_POST['message'] : "";

    // Validation (simple example)
    if (empty($name) || empty($email) || empty($subject) || empty($message)) {
        echo "Please fill all required fields.";
    } else {
        // Process your form data here (e.g., send an email, save to database)
        echo "Name: $name<br>";
        echo "Email: $email<br>";
        echo "Subject: $subject<br>";
        echo "Message: $message";
        // Implement email sending functionality or database storage here
    }
}
else {
    echo "Form not submitted";
}

?>

