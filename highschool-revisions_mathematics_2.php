<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Mathematics Videos - RICC</title>
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
    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <!-- Include Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Include your custom JavaScript file (payment.js) -->
    <script src="payment.js"></script>
</head>

<body>

    <h1>Mathematics Video Previews</h1>

    <div class="video-list">
        <!-- Example Mathematics Videos -->
        <div class="video-item">
            <h5>Math Video 1</h5>
            <video id="mathVideo1" controls ontimeupdate="checkVideoTime('mathVideo1', 120)">
                <source src="highschool-revisions/mathematics/Trisection.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>

        <div class="video-item">
            <h5>Math Video 2</h5>
            <video id="mathVideo2" controls ontimeupdate="checkVideoTime('mathVideo2', 120)">
                <source src="highschool-revisions/mathematics/Presentation30082023.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>

        <!-- Add more videos as needed -->

    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/agency.min.js"></script>

</body>

</html>
