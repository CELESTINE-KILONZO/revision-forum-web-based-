<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Video Previews - RICC</title>
    <style>
        /* Add your additional styles here */

        /* Custom Styles for Centering Content */
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            margin: 0;
        }
    </style>
</head>

<body>

    <h1>High School Revisions - Video Previews</h1>

    <div class="video-list">
        <!-- Example Video Previews -->
        <div class="video-item">
            <h5>Mathematics Video Preview</h5>
            <video id="mathVideo" controls>
                <source src="highschool-revisions/mathematics/preview.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <br>
            <button id="unlockMathVideo" onclick="unlockVideo('mathVideo', 'Mathematics')">Unlock Video</button>
        </div>

        <div class="video-item">
            <h5>Physics Video Preview</h5>
            <video id="physicsVideo" controls>
                <source src="highschool-revisions/physics/preview.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <br>
            <button id="unlockPhysicsVideo" onclick="unlockVideo('physicsVideo', 'Physics')">Unlock Video</button>
        </div>

        <div class="video-item">
            <h5>Chemistry Video Preview</h5>
            <video id="chemistryVideo" controls>
                <source src="highschool-revisions/chemistry/preview.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <br>
            <button id="unlockChemistryVideo" onclick="unlockVideo('chemistryVideo', 'Chemistry')">Unlock Video</button>
        </div>

        <!-- Add more video previews as needed -->

    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/agency.min.js"></script>

    <!-- Add JavaScript for handling payment and form submission -->
    <script>
        function unlockVideo(videoId, subject) {
            var video = document.getElementById(videoId);

            // Check if the video has been watched for at least 2 minutes
            if (video.currentTime >= 120) {
                // Simulate payment and form submission
                simulatePayment(subject);
            } else {
                alert("Watch the entire video before unlocking.");
            }
        }

        function simulatePayment(subject) {
            // Simulate payment processing (you can replace this with actual payment logic)
            var paymentConfirmation = confirm("Proceed to unlock " + subject + " video for Ksh 50?");
            
            if (paymentConfirmation) {
                // Simulate form submission
                var form = document.createElement('form');
                form.method = 'post';
                form.action = 'process_payment.php'; // Update this with the actual processing URL

                // Add form fields
                var nameInput = document.createElement('input');
                nameInput.type = 'hidden';
                nameInput.name = 'name';
                nameInput.value = prompt('Enter your name:');
                form.appendChild(nameInput);

                var phoneInput = document.createElement('input');
                phoneInput.type = 'hidden';
                phoneInput.name = 'phone';
                phoneInput.value = prompt('Enter your phone number:');
                form.appendChild(phoneInput);

                var mpesaMessageInput = document.createElement('input');
                mpesaMessageInput.type = 'hidden';
                mpesaMessageInput.name = 'mpesaMessage';
                mpesaMessageInput.value = prompt('Copy and paste your M-PESA message here:');
                form.appendChild(mpesaMessageInput);

                // Submit the form
                document.body.appendChild(form);
                form.submit();
            }
        }
    </script>

</body>

</html>
