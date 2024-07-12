<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simple PHP Application</title>
</head>
<body>
    <h2>Simple PHP Application</h2>
    
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

        // Simple validation
        if (!empty($name) && !empty($email)) {
            $message = "Hello, $name! Your email address is: $email";
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
        <input type="submit" value="Submit">
    </form>

    <p><?php echo $message; ?></p>

</body>
</html>
