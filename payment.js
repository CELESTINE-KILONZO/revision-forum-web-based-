// payment.js

function checkVideoTime(videoId, maxTime) {
    var video = document.getElementById(videoId);
    if (video.currentTime > maxTime) {
        video.pause();
        // Add logic to display a message or redirect to payment form
        alert('Video preview limit reached. Please unlock videos to continue watching.');
    }
}

function unlockVideo(videoId) {
    var video = document.getElementById(videoId);
    var unlockButton = document.getElementById('unlock' + videoId.charAt(0).toUpperCase() + videoId.slice(1));

    // Disable the unlock button to prevent multiple clicks
    unlockButton.disabled = true;

    // Add logic to initiate payment process
    // You can redirect to the payment form or implement your payment flow here
    // Example: window.location.href = 'payment_form.php';
    alert('Redirecting to payment form...');
}
