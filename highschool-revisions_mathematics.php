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

    <!-- Include your custom JavaScript files -->
    <script src="payment.js"></script>
    <script src="video_handler.js"></script>
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
            <button id="unlockButtonMath1" onclick="unlockVideo('mathVideo1')">Unlock Videos</button>
            <div id="paymentProcedureMath1" style="display: none;">
                <!-- M-PESA Payment Procedure -->
                <p>Unlock Video Payment Procedure:</p>
                <ol>
                    <li>Click "Unlock Videos" button.</li>
                    <li>Follow the M-PESA payment procedure below:</li>
                    <ol>
                        <li>Go to SIM Tool Kit app.</li>
                        <li>Select M-PESA.</li>
                        <li>Select Lipa Na M-PESA.</li>
                        <li>Select Pochi La Biashara.</li>
                        <li>Enter the merchant’s phone number: 0704600418.</li>
                        <li>Enter the amount: Ksh 50.</li>
                        <li>Enter M-PESA PIN.</li>
                    </ol>
                    <li>Copy the M-PESA message and paste it in the form below.</li>
                </ol>
                <!-- Payment Form (Initially hidden) -->
                <div id="paymentFormMath1" style="display: none;">
                    <!-- Include your payment form here -->
                    <?php include 'payment_form.php'; ?>
                </div>
            </div>
        </div>

        <div class="video-item">
            <h5>Math Video 2</h5>
            <video id="mathVideo2" controls ontimeupdate="checkVideoTime('mathVideo2', 120)">
                <source src="highschool-revisions/mathematics/Presentation30082023.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <button id="unlockButtonMath2" onclick="unlockVideo('mathVideo2')">Unlock Videos</button>
            <div id="paymentProcedureMath2" style="display: none;">
                <!-- M-PESA Payment Procedure -->
                <p>Unlock Video Payment Procedure:</p>
                <ol>
                    <li>Click "Unlock Videos" button.</li>
                    <li>Follow the M-PESA payment procedure below:</li>
                    <ol>
                        <li>Go to SIM Tool Kit app.</li>
                        <li>Select M-PESA.</li>
                        <li>Select Lipa Na M-PESA.</li>
                        <li>Select Pochi La Biashara.</li>
                        <li>Enter the merchant’s phone number: 0704600418.</li>
                        <li>Enter the amount: Ksh 50.</li>
                        <li>Enter M-PESA PIN.</li>
                    </ol>
                    <li>Copy the M-PESA message and paste it in the form below.</li>
                </ol>
                <!-- Payment Form (Initially hidden) -->
                <div id="paymentFormMath2" style="display: none;">
                    <!-- Include your payment form here -->
                    <?php include 'payment_form.php'; ?>
                </div>
            </div>
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
