<!-- payment_form.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Payment Form - RICC</title>
    <!-- Add your styles if needed -->
</head>

<body>
    <h1>Payment Form</h1>

    <form action="process_payment.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="phone">Phone Number:</label>
        <input type="tel" id="phone" name="phone" required>

        <label for="mpesaMessage">M-PESA Message:</label>
        <textarea id="mpesaMessage" name="mpesaMessage" required></textarea>

        <button type="submit">Submit Payment</button>
    </form>
</body>

</html>
