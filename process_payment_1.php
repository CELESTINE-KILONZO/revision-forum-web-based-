<!-- process_payment.php -->

<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Validate form data
    $name = $_POST["name"] ?? "";
    $phone = $_POST["phone"] ?? "";
    $mpesaMessage = $_POST["mpesa_message"] ?? "";

    if (empty($name) || empty($phone) || empty($mpesaMessage)) {
        echo "All fields are required.";
        exit;
    }

    // Validate the M-PESA message (you may need a more sophisticated validation based on the actual M-PESA message format)
    $isPaymentSuccessful = validateMpesaMessage($mpesaMessage);

    if ($isPaymentSuccessful) {
        // Payment successful, you can now allow video preview

        // For demonstration purposes, let's redirect back to the preview page
        header("Location: preview.php");
        exit;
    } else {
        echo "Payment failed. Please try again.";
    }
} else {
    // Invalid request method
    http_response_code(405);
    echo "Method Not Allowed";
}

// Function to validate M-PESA message (you may need to replace it with actual validation logic)
function validateMpesaMessage($message)
{
    // Your validation logic here

    // For demonstration purposes, assume the message contains the word "SUCCESS"
    return stripos($message, "SUCCESS") !== false;
}

?>
