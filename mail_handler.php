<?php
                                    if (isset($_POST['submit'])) {
                                        // Collect data from HTML Form

                                        $name = $_POST['name'];
                                        $email = $_POST['email'];
                                        $subject = $_POST['subject'];
                                        $message = $_POST['message'];

                                        // Email Options

                                        $to = 'polash.sahel@gmail.com'; // Admin email
                                        $subject = "subject:" . $subject;
                                        $message = "name:" . $name . "\n" . "message" . $message . "\n" . "email:" . $email . "\n";
                                        $headers = "From: " . $email;

                                        // Mail Function

                                        if (mail($to, $subject, $message, $headers)) {

                                            echo "<div class=\"msg-success\">Your Message was sent successfully</div>";
                                        } else {
                                            echo "<div class=\"msg-failed\">Something went wrong, please try again later</div>";
                                        }
                                    }
                                    ?>