<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Simulate processing (In reality, you may save this info to a database or send an email)
    echo "Thank you, $name! We have received your message:<br><br>";
    echo "Email: $email<br>";
    echo "Message: $message<br>";
}
?>
