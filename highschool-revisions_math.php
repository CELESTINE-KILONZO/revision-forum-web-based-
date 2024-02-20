<!-- highschool-revisions_math.php -->

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
