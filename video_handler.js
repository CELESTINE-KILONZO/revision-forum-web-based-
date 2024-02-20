// video_handler.js

document.addEventListener('DOMContentLoaded', function () {
    var videos = document.querySelectorAll('video');
    videos.forEach(function (video) {
        video.addEventListener('play', function () {
            setTimeout(function () {
                video.pause();
                alert('Preview time expired. Please unlock the video to continue watching.');
                showPaymentForm(video.id); // Assuming each video has a unique ID
            }, 120000); // 2 minutes
        });
    });
});

function showPaymentForm(videoId) {
    // Add logic to show the payment form for the specified video
    var paymentButtonId = 'paymentButton' + videoId.charAt(0).toUpperCase() + videoId.slice(1);
    var paymentProcedureId = 'paymentProcedure' + videoId.charAt(0).toUpperCase() + videoId.slice(1);

    // Hide the "Unlock Videos" button
    document.getElementById(paymentButtonId).style.display = 'none';

    // Display the payment procedure
    document.getElementById(paymentProcedureId).style.display = 'block';
}
