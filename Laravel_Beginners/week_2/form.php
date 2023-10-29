<!DOCTYPE html>
<html>
<head>
    <title>Form Submission</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <h1>Form Submission</h1>

    <?php
    // Define variables and set to empty values
    $name = $email = "";
    $nameErr = $emailErr = "";
    $confirmationMessage = "";

    // Form submission handling
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Validate name
        if (empty($_POST["name"])) {
            $nameErr = "Name is required";
        } else {
            $name = sanitizeInput($_POST["name"]);
            if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
                $nameErr = "Only letters and white spaces allowed";
            }
        }

        // Validate email
        if (empty($_POST["email"])) {
            $emailErr = "Email is required";
        } else {
            $email = sanitizeInput($_POST["email"]);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format";
            }
        }

        // If there are no errors, display confirmation message
        if (empty($nameErr) && empty($emailErr)) {
            $confirmationMessage = "Thank you for submitting the form, $name! Your email address is $email.";
        }
    }

    // Function to sanitize input data
    function sanitizeInput($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>

    <div class="form-container">
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            <span class="error"><?php echo $nameErr; ?></span>
            <br><br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <span class="error"><?php echo $emailErr; ?></span>
            <br><br>
            <input type="submit" value="Submit">
        </form>
    </div>

    <div class="confirmation-message">
        <?php echo $confirmationMessage; ?>
    </div>
</body>
</html>