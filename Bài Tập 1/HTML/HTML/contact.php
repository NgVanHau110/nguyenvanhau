<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        
        <title>TheBest</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/animations.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
        <!--[if lt IE 9]>
            <script src="js/vendor/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <?php
        include("header.php");
        ?>


    <section id="abovecontent" class="color_section">
        <div class="container"><div class="row">
            <div class="block col-sm-12">
                <ul class="breadcrumb">
                    <li><a href="./" class="pathway"><i class="rt-icon-home"></i></a></li>
                    <li><span>Contact</span></li>
                </ul>
            </div>
        </div></div>
    </section>


    <section id="middle" class="light_section">
        <div class="container">
            <div class="row">
                <div class="block col-sm-6 to_animate">
                    <h3>Contact <strong>Form</strong></h3>
                    <form class="contact-form" method="post" action="/">
                        <p class="contact-form-name">
                            <label for="name">Name <span class="required">*</span></label>
                            <input type="text" aria-required="true" size="30" value="" name="name" id="name" class="form-control" placeholder="Name">
                        </p>
                        <p class="contact-form-email">
                            <label for="email">Email <span class="required">*</span></label>
                            <input type="email" aria-required="true" size="30" value="" name="email" id="email" class="form-control" placeholder="Email">
                        </p>
                        <p class="contact-form-subject">
                            <label for="subject">Subject <span class="required">*</span></label>
                            <input type="text" aria-required="true" size="30" value="" name="subject" id="subject" class="form-control" placeholder="Subject">
                        </p>
                        <p class="contact-form-message">
                            <label for="message">Message</label>
                            <textarea aria-required="true" rows="8" cols="45" name="message" id="message" class="form-control" placeholder="Message"></textarea>
                        </p>
                        <p class="contact-form-submit vertical-margin-40">
                            <input type="submit" value="Send" id="contact_form_submit" name="contact_submit" class="theme_btn">
                        </p>
                    </form>
                </div>
                <div class="block col-sm-6 to_animate">
                    <h3>Contact <strong>Info</strong></h3>
                    <div class="widget_text">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus, quos, provident, quo culpa sapiente numquam eum voluptatem neque ipsum suscipit eaque reprehenderit consequatur illo aperiam hic aliquam maxime laboriosam eos?</p>
                        <p>
                            <i class="rt-icon-location"></i><strong>Adderss:</strong> 4321 Your Address, Country<br> 
                            <i class="rt-icon-megaphone"></i><strong>Phone:</strong> +12 345 678 9123<br>
                            <i class="rt-icon-mail2"></i><strong>Email: </strong><a href="mailto:info@thebest.com">info@thebest.com</a><br> 
                            <i class="rt-icon-world"></i><strong>Website: </strong><a href="./">www.thebest.com</a>
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="map" class="light_section"></section>

    <?php
include("bottom.php");
?>
