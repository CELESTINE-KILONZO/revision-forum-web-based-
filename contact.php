<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading text-uppercase">Contact Us</h2>
                <h3 class="section-subheading text-muted">Our team will respond within 24 hrs.</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <form id="contactFor" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"
                    name="sentMessage">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control" id="name" type="text" name="name"
                                    placeholder="Your Name *" required="required">
                                <p class="help-block text-danger" required></p>
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="email" type="email" name="email"
                                    placeholder="Your Email *" required data-validation-required-message="Please enter your email address."
                                    required>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="phone" type="tel" name="telephone"
                                    placeholder="Your Phone *" required data-validation-required-message="Please enter your phone number."
                                    maxlength="13" minlength="10" required>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <textarea class="form-control" id="message" name="message"
                                    placeholder="Your Message *" required data-validation-required-message="Please enter a message."
                                    required></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-lg-12 text-center">
                            <div id="success"></div>
                            <button id="sendMessageButton" name="submit"
                                class="btn btn-primary btn-xl text-uppercase" type="submit">Send Message</button>
                        </div>
                    </div>
                </form>

                <!-- PHP code for form validation and mail handling -->
                <?php
                    // php code to validate form
                    if(isset($_POST['submit'])){
                        if (!empty($_POST['name']) && !empty($_POST['telephone']) && !empty($_POST['email']) && !empty($_POST['message'])) {
                            // define a function to sanitize data
                            function test_input($data) {
                                $data = trim($data);
                                $data = stripslashes($data);
                                $data = htmlspecialchars($data);
                                return $data;
                            }

                            // define variables to assign sanitized data
                            $name = test_input($_POST["name"]);
                            $email = test_input($_POST["email"]);
                            $telephone = test_input($_POST["telephone"]);
                            $message = test_input($_POST["message"]);

                            /*$name=$_POST['name'];
                            $telephone=$_POST['telephone'];
                            $email=$_POST['email'];
                            $message=$_POST['message'];
                            */
                            $query="insert into messages(names,phone,email,message,date) values('$name','$telephone','$email','$message',now())";
                            $result=mysql_query($query) or die('unable to open result'.mysql_error());

                            if ($result) {
                                echo "
                                    <script type='text/javascript'>
                                        alert('Message sent successfully');
                                    </script>
                                ";
                            } else {
                                echo "
                                    <script type='text/javascript'>
                                        alert('Network error Please try again');
                                    </script>
                                ";
                            }
                        }
                    }
                ?>

                <!-- PHP mail function -->
                <?php
                    // Check for empty fields
                    if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['phone']) || empty($_POST['message']) || !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)) {
                        echo "No arguments Provided!";
                        return false;
                    }

                    $name = strip_tags(htmlspecialchars($_POST['name']));
                    $email_address = strip_tags(htmlspecialchars($_POST['email']));
                    $phone = strip_tags(htmlspecialchars($_POST['phone']));
                    $message = strip_tags(htmlspecialchars($_POST['message']));

                    // Create the email and send the message
                    $to = 'aricccom@a-ricc.com'; // Add your email address in between the '' - This is where the form will send a message to.
                    $email_subject = "Website Contact Form:  $name";
                    $email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";
                    $headers = "From: noreply@yourdomain.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
                    $headers .= "Reply-To: $email_address";   
                    mail($to, $email_subject, $email_body, $headers);
                    return true;         
                ?>
            </div>
        </div>
    </div>
</section>
