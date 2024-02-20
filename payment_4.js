// payment.js

// Function to show payment form and unlock videos
function showPaymentForm(subject) {
    // Display the payment procedure for the selected subject
    var paymentProcedure = document.getElementById('paymentProcedure' + subject);
    if (paymentProcedure.style.display === 'none') {
        paymentProcedure.style.display = 'block';
    }

    // Hide other payment procedures
    var subjects = ['Math', 'Physics', 'Chemistry'];
    subjects.forEach(function (otherSubject) {
        if (otherSubject !== subject) {
            var otherPaymentProcedure = document.getElementById('paymentProcedure' + otherSubject);
            otherPaymentProcedure.style.display = 'none';
        }
    });

    // Display the payment form
    var paymentForm = document.getElementById('paymentForm');
    if (paymentForm.style.display === 'none') {
        paymentForm.style.display = 'block';
    }
}

// Function to handle payment submission (you can implement your logic here)
function submitPaymentForm() {
    // Add your payment processing logic here
    alert('Payment submitted successfully! Redirecting to video...');
    window.location.href = 'preview.php?video=' + currentSubject.toLowerCase();
}
