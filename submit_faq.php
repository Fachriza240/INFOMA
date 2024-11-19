<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = htmlspecialchars($_POST['username']);
    $email = htmlspecialchars($_POST['email']);
    $question = htmlspecialchars($_POST['question']);

    echo "<h2>Thank you, $username!</h2>";
    echo "<p>We've received your question. We'll respond to you via email at $email as soon as possible.</p>";
    echo "<p>Your Question: $question</p>";
}
?>
