<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infoma - FAQ</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <a href="index.php" class="back">Back to Home</a>
    </header>
    <main>
        <h2>Frequently Asked Questions (FAQ)</h2>
        <section class="faq-list">
            <h3>Send Us a Message</h3>
            <form action="submit_faq.php" method="POST">
                <label for="username">Username:</label>
                <input type="text" name="username" id="username" required>

                <label for="email">Email:</label>
                <input type="email" name="email" id="email" required>

                <label for="question">Question:</label>
                <textarea name="question" id="question" rows="4" required></textarea>

                <button type="submit">Send</button>
            </form>
        </section>
    </main>
</body>
</html>
