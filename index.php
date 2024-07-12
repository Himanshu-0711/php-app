<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Custom PHP Application</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>You have successfully deployed the application using CODE_PIPELINE</h2>
        
        <?php
        // Initialize variables
        $name = "";
        $email = "";
        $message = "";

        // Check if form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Collect form data
            $name = $_POST['name'];
            $email = $_POST['email'];
            $message = $_POST['message'];

            // Simple validation
            if (!empty($name) && !empty($email) && !empty($message)) {
                $message = "Hello, $name! Your message has been received.";
            } else {
                $message = "Please fill out all fields.";
            }
        }
        ?>

        <!-- Display form and message -->
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label for="name">Name:</label><br>
            <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($name); ?>" required><br><br>
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($email); ?>" required><br><br>
            <label for="message">Message:</label><br>
            <textarea id="message" name="message" rows="4" required><?php echo htmlspecialchars($message); ?></textarea><br><br>
            <input type="submit" value="Submit">
        </form>

        <p class="message"><?php echo $message; ?></p>
    </div>
</body>
</html>
