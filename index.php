<!-- index.php -->

<!DOCTYPE html>
<html lang='en'>

<head>
    <!-- ... (head content) ... -->
</head>

<body id='page-top'>

    <!-- Navigation -->
    <?php include 'navigation.php'; ?>

    <!-- Header -->
    <?php include 'header.php'; ?>

    <!-- Highschool Revisions Section -->
    <section id="highschool-revisions">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <!-- ... (content) ... -->
            </div>

            <!-- Mathematics Videos -->
            <div class="row">
                <div class="col-md-12">
                    <h4 class="text-center">Mathematics</h4>
                    <?php include 'highschool-revisions_math.php'; ?>
                </div>
            </div>

            <!-- Physics Videos -->
            <div class="row">
                <div class="col-md-12">
                    <h4 class="text-center">Physics</h4>
                    <?php include 'highschool-revisions_physics.php'; ?>
                </div>
            </div>

            <!-- Chemistry Videos -->
            <div class="row">
                <div class="col-md-12">
                    <h4 class="text-center">Chemistry</h4>
                    <?php include 'highschool-revisions_chemistry.php'; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap core JavaScript -->
    <script src='vendor/jquery/jquery.min.js'></script>
    <script src='vendor/bootstrap/js/bootstrap.bundle.min.js'></script>

    <!-- Plugin JavaScript -->
    <script src='vendor/jquery-easing/jquery.easing.min.js'></script>

    <!-- Contact form JavaScript -->
    <script src='js/jqBootstrapValidation.js'></script>
    <script src='js/contact_me.js'></script>

    <!-- Custom scripts for this template -->
    <script src='js/agency.min.js'></script>

    <!-- Include your custom JavaScript file (payment.js) -->
    <script src='payment.js'></script>
</body>

</html>
