<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- My Custom CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css">

        <!-- HTML5 shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- jQuery v3.0 -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js" type="text/javascript"></script>

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

        <title>QED Development</title>
    </head>

    <body class="sfooter">
        <div class="sfooter-content">

            <header>

            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">

                        <a class="navbar-left" href="#">
                            <img src="../public_html/images/logo.jpeg" alt="logo"/>
                        </a>

                        <p class="navbar-text">Changing Lives Through Web Development</p>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="bbtn-group btn-group-md" role="group" aria-label="...">
                            <button type="button" class="btn btn-default"><i class="fa fa-github fa-2x" aria-hidden="true"></i></button>
                            <button type="button" class="btn btn-default"><i class="fa fa-linkedin-square fa-2x" aria-hidden="true"></i></button>
                        </div>

                    </div><!-- /.container-fluid -->
            </nav>
        </header>

            <div class="row">
                <div class="col-xs-24 col-md-12">
                    <a href="#" class="thumbnail">
                        <img src="../public_html/images/euclid1.gif" alt="Euclid Prop 1.47">
                        <div class="caption">
                            <h3>Work Profile</h3>
                            <p>Vegan aesthetic occupy leggings art party cardigan. Put a bird on it tumblr blog etsy. Pickled umami ramps unicorn, +1 paleo cloud bread direct trade taiyaki woke pour-over sriracha health goth leggings. Chicharrones occupy aesthetic irony waistcoat, thundercats twee drinking vinegar viral narwhal venmo lo-fi four dollar toast truffaut.</p>
                        </div>
                    </a>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-24 col-md-12">
                    <a href="#" class="thumbnail">
                        <img src="../public_html/images/euclid1.gif" alt="Euclid Prop 1.47">
                        <div class="caption">
                            <h3>Personal Life</h3>

                        </div>
                    </a>
                    <p>Vegan aesthetic occupy leggings art party cardigan. Put a bird on it tumblr blog etsy. Pickled umami ramps unicorn, +1 paleo cloud bread direct trade taiyaki woke pour-over sriracha health goth leggings. Chicharrones occupy aesthetic irony waistcoat, thundercats twee drinking vinegar viral narwhal venmo lo-fi four dollar toast truffaut.</p>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-24 col-md-12">
                    <a href="#" class="thumbnail">
                        <img src="../public_html/images/euclid1.gif" alt="Euclid Prop 1.47">
                        <div class="caption">
                            <h3>Academic Life</h3>
                            <p>Vegan aesthetic occupy leggings art party cardigan. Put a bird on it tumblr blog etsy. Pickled umami ramps unicorn, +1 paleo cloud bread direct trade taiyaki woke pour-over sriracha health goth leggings. Chicharrones occupy aesthetic irony waistcoat, thundercats twee drinking vinegar viral narwhal venmo lo-fi four dollar toast truffaut.</p>
                        </div>
                    </a>
                </div>
            </div>

    </div>
    </body>

    <!-- Contact Section -->
    <section>
        <div class="container">
            <div class="row">
                <h3>Contact</h3>
                <!--Begin Contact Form-->
                <form id="contact-form" action="php/mailer.php" method="post">
                    <div class="form-group">
                        <label for="name">Name <span class="text-danger">*</span></label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-user" aria-hidden="true"></i>
                            </div>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email">Email <span class="text-danger">*</span></label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </div>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                            </div>
                            <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="message">Message <span class="text-danger">*</span></label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-comment" aria-hidden="true"></i>
                            </div>
                            <textarea class="form-control" rows="5" id="message" name="message" placeholder="Message (2000 characters max)"></textarea>
                        </div>
                    </div>
            </div>

            <!-- reCAPTCHA -->
            <div class="g-recaptcha" data-sitekey="--YOUR RECAPTCHA SITE KEY--"></div>

            <button class="btn btn-success" type="submit"><i class="fa fa-paper-plane"></i> Send</button>
            <button class="btn btn-warning" type="reset"><i class="fa fa-ban"></i> Reset</button>
            </form>

            <!--empty area for form error/success output-->
            <div class="row">
                <div class="col-xs-12">
                    <div id="output-area"></div>
                </div>
            </div>
        </div><!--/.row-->
        </div><!--/.container-->
    </section>





</html>