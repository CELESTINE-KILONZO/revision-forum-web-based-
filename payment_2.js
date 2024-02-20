// payment.js

function showPaymentForm(buttonId) {
    // Get the button element by ID
    var button = document.getElementById(buttonId);

    // Show the payment form
    document.getElementById('paymentForm').style.display = 'block';

    // Disable the clicked button
    button.disabled = true;

    // Add logic here to send payment details to your payment processing backend
    // This is where you would handle the actual payment and unlock functionality
    // For demonstration purposes, we'll simply log a message to the console
    console.log('Processing payment for ' + buttonId);
}
