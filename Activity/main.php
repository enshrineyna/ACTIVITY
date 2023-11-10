<?php
$submitted = false;

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $submitted = true;
    // Collect data from the form
    $name = $_POST["name"];
    $accountNumber = $_POST["account_number"];
    $amount = $_POST["amount"];
    $email = $_POST["email"];

    // Do something with the collected data
    // For simplicity, let's just print the data for now
    echo "<div class='container'>";
    echo "<h1>Water Bill Payment</h1>"; // Displaying a title
    echo "<h2>Submitted Information:</h2>";
    echo "<p>Name: $name</p>";
    echo "<p>Account Number: $accountNumber</p>";
    echo "<p>Amount: $amount</p>";
    echo "<p>Email: $email</p>";
    echo "<button onclick='showSuccessMessage()'>Submit</button>"; // Displaying a submit button
    echo "</div>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PureStream Dynamics Bill Payment Form</title> <!-- Setting the title of the page -->
    <link rel="stylesheet" href="style.css">
    <script>
        function showSuccessMessage() {
            alert('Form submitted successfully!');
        }
    </script>
</head>
<body>

<?php if (!$submitted): ?>
    <div class="container">
        <h1>PureStream Dynamics Bill Payment</h1> <!-- Displaying a title for the form -->
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label for="name">Name:</label>
            <input type="text" name="name" required>

            <label for="account_number">Account Number:</label>
            <input type="text" name="account_number" required>

            <label for="amount">Amount to Pay:</label>
            <input type="text" name="amount" required>

            <label for="email">Email:</label>
            <input type="email" name="email" required>

            <button type="submit">Submit</button> <!-- Displaying a submit button -->
        </form>
    </div>
<?php endif; ?>

</body>
</html>
