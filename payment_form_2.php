<!-- payment_form.php -->

<form id="unlockVideoForm" method="post" action="process_payment.php">
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>
    <div class="form-group">
        <label for="phone">Phone Number:</label>
        <input type="tel" class="form-control" id="phone" name="phone" required>
    </div>
    <div class="form-group">
        <label for="mpesaMessage">M-PESA Message:</label>
        <textarea class="form-control" id="mpesaMessage" name="mpesaMessage" rows="4" required></textarea>
        <small class="form-text text-muted">Copy and paste the M-PESA message here.</small>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<!-- M-PESA Payment Procedure -->
<div class="mt-4">
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
        <li>Copy the M-PESA message and paste it in the form above.</li>
    </ol>
</div>
