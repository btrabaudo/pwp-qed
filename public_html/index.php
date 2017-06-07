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

        <!-- jQuery Form, Additional Methods, Validate -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.1/jquery.form.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/additional-methods.min.js"></script>

        <!-- Your JavaScript Form Validator -->
        <script src="js/form-validate.js"></script>

        <!-- Google reCAPTCHA -->
        <script src='https://www.google.com/recaptcha/api.js'></script>


        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

        <title>QED Development</title>
    </head>

    <body class="sfooter">
        <div class="sfooter-content">

            <header>
                <nav>
                    <div class="container-fluid">
                        <div class="col-xs-4">
                            <a href="#">
                                <img class="img-responsive" src="../public_html/images/logo.jpeg" alt="logo">
                            </a>
                        </div>
                        <div class="col-xs-4 text-center">
                            <p class="navbar-text">Changing Lives Through Web Development</p>
                        </div>
                        <div class="col-xs-4 text-right">
                            <div class="btn-group btn-group-md" role="group">
                                <button type="button" class="btn btn-default"><i class="fa fa-github fa-2x" aria-hidden="true"></i></button>
                                <button type="button" class="btn btn-default"><i class="fa fa-linkedin-square fa-2x" aria-hidden="true"></i></button>
                            </div>
                        </div>
                    </div>
                </nav>
        </header>

            <div class="jumbotron">
                        <div class="workImage">
                        <div class="caption">
                            <h3>Work Profile</h3>
                            <p>Not your average developer and entrepreneur. With a non-traditional background, a B.A. in Philosophy and History of Advanced Science and Mathematics, and a prior career in the arts, creative problem solving, and out of the box thinking are at the heart of my work.</p>
                        </div>
                </div>
            </div>

            <div class="jumbotron">
              <div class="personalImage">
                <div class="caption">
                    <h3>Work Profile</h3>
                    <p>CEO of Hippo Development a company that creates mobile and web applications in order to optimize flow between clients and their desired good or service. Formally Billy was an Arts Manager and student of Philosophy and Advanced Mathematics.</p>
                </div>
              </div>
            </div>

            <div class="jumbotron">
                <div class="sjcImage"
                    <div class="caption">
                            <h3>Academic Life</h3>
                            <p>Billy's area of study is the philosophy of Shakespeare, Plato, and Nietzsche. He has given papers on Hamlet, King Lear, and others dealing primarily with Shakespeare's characters relationship to reason and knowledge. </p>
                </div>
            </div>
        </div>

    </body>

    <!-- Contact Section -->
    <main class="container">
        <div class="row">
            <div class="col-sm-6">

                <!-- BEGIN CONTACT FORM -->
                <form id="contact-form" method="POST" action="php/mailer.php">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-user"></i>
                            </div>
                            <input class="form-control" type="text" name="name" id="name" placeholder="Your Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <input class="form-control" type="email" name="email" id="email" placeholder="Your Email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-pencil"></i>
                            </div>
                            <input class="form-control" type="text" name="subject" id="subject" placeholder="Subject">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-comment"></i>
                            </div>
                            <textarea rows="5" name="message" id="message" class="form-control" placeholder="Your Message (2000 charaters max)"></textarea>
                        </div>
                    </div>

                    <!-- Google reCAPTCHA -->
                    <div class="g-recaptcha" data-sitekey="6Le50SMUAAAAADae41eYE0s-WkDyZNoWHdbs6-re"></div>

                    <button class="btn btn-default" type="reset">Reset</button>
                    <button class="btn btn-info" type="submit">Submit</button>
                </form>
                <!-- END CONTACT FORM-->

            </div><!-- /.col-sm-6 -->
        </div><!-- /.row -->

        <!-- EMPTY FORM OUTPUT AREA -->
        <div class="row">
            <div class="col-md-6">
                <div id="output-area"></div>
            </div>
        </div>

    </main>




</html>