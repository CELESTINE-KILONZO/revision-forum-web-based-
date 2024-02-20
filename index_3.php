<!-- index.php -->

<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    <meta name='description' content=''>
    <meta name='author' content=''>
    <title>Research and Innovations Consultant Center (RICC)</title>

    <!-- Bootstrap core CSS -->
    <link href='vendor/bootstrap/css/bootstrap.min.css' rel='stylesheet'>

    <!-- Custom fonts for this template -->
    <link href='vendor/font-awesome/css/font-awesome.min.css' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href='css/agency.min.css' rel='stylesheet'>
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

        /* Center contents in columns */
        .col-md-4 {
            text-align: center;
        }

        /* Add any other custom styles you need */
    </style>
    <!-- Include jQuery -->
    <script src='https://code.jquery.com/jquery-3.6.4.min.js'></script>

    <!-- Include Bootstrap JS -->
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js'></script>

    <!-- Include your custom JavaScript file (payment.js) -->
    <script src='payment.js'></script>

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
                <div class="col-md-8 text-center">
                    <h2 class="section-heading text-uppercase">Highschool Revisions</h2>
                    <p class="text-muted">Explore video lessons to revise and strengthen your knowledge in Highschool subjects.</p>
                </div>
            </div>

            <!-- Mathematics -->
            <div class="row">
                <div class="col-md-4">
                    <h4 class="text-center">Mathematics</h4>
                    <?php include 'highschool-revisions_mathematics.php'; ?>
                    <button id="mathUnlockButton" class="btn btn-primary">Unlock Video</button>
                    <?php include 'payment_form.php'; ?>
                </div>

                <!-- Physics -->
                <div class="col-md-4">
                    <h4 class="text-center">Physics</h4>
                    <?php include 'highschool-revisions_physics.php'; ?>
                    <button id="physicsUnlockButton" class="btn btn-primary">Unlock Video</button>
                    <?php include 'payment_form.php'; ?>
                </div>

                <!-- Chemistry -->
                <div class="col-md-4">
                    <h4 class="text-center">Chemistry</h4>
                    <?php include 'highschool-revisions_chemistry.php'; ?>
                    <button id="chemUnlockButton" class="btn btn-primary">Unlock Video</button>
                    <?php include 'payment_form.php'; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- About -->
    <?php include 'about.php'; ?>

    <!-- Services -->
    <?php include 'services.php'; ?>

    <!-- Team -->
    <?php include 'team.php'; ?>

    <!-- Contact -->
    <?php include 'contact.php'; ?>

    <!-- Footer -->
    <?php include 'footer.php'; ?>

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

</body>

</html>
