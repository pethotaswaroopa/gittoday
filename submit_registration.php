<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $event = $_POST['event'];
    $comments = $_POST['comments'];

    echo "<h2>Registration Successful!</h2>";
    echo "<p>Name: " . htmlspecialchars($name) . "</p>";
    echo "<p>Email: " . htmlspecialchars($email) . "</p>";
    echo "<p>Phone: " . htmlspecialchars($phone) . "</p>";
    echo "<p>Event: " . htmlspecialchars($event) . "</p>";
    echo "<p>Comments: " . htmlspecialchars($comments) . "</p>";
}
?>
