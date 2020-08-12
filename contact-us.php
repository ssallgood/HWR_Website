<!--
=========================================================
Material Kit PRO - v2.2.0
=========================================================

Product Page: https://www.creative-tim.com/product/material-kit-pro
Copyright 2019 Creative Tim (https://www.creative-tim.com)

Coded by Creative Tim

=========================================================

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Contact Hardware Rescue
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="../assets/css/material-kit.css?v=2.2.0" rel="stylesheet" />
  <link href="./assets/css/custom.css" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
  <link href="../assets/demo/vertical-nav.css" rel="stylesheet" />
  <script src="./assets/js/hwr/hwr.js" type="text/javascript"></script>

  <script type="text/javascript">
    var captchaLoad = function() {
      recapWidgetId = grecaptcha.render('contactrecaptcha',
        {
        'sitekey' : '6LeDkdYUAAAAAAdki4z2MjgqeZ7613JMNH4DFRLO',
        'callback' : tokenSubmit,
        });
      };
  </script>
</head>

<body class="contact-page sidebar-collapse">
  <nav class="navbar fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
    <?php include('nav_default.php') ?>
  </nav>
<div id="contactUsMap" class="big-map"></div>
<div class="main main-raised">
  <div class="container">
    <div class="contact-content">
      <h2 class="title text-center">Let's get in touch</h2>
      <h5 class="text-muted text-center">Ready to get the most out of your computer for an unbeatable price? Give us a call or send us an email (or fill out and submit the form below), and we will schedule a free appraisal at your convenience!</h5><br>
      <div class="row">
        <div class="col-md-6 offset-1">
          <form id="contact-form" method="post" action="formaction.php" accept-charset="UTF-8">
            <div class="form-group">
              <label for="online_name" class="bmd-label-floating text-muted">Your name</label>
              <input type="text" class="form-control" name="online_name">
            </div>
            <div class="form-group">
              <label for="email_address" class="bmd-label-floating text-muted">Email address</label>
              <input type="email" class="form-control" name="email_address">
              <span class="bmd-help">We'll never share your email with anyone else.</span>
            </div>
            <div class="form-group">
              <label for="phone_number" class="bmd-label-floating text-muted">Phone</label>
              <input type="text" class="form-control" name="phone_number">
            </div>
            <div class="form-group label-floating">
              <label class="form-control-label bmd-label-floating text-muted" for="comments"> What's on your mind?</label>
              <textarea class="form-control" rows="6" name="comments"></textarea>
            </div>
            <div class="submit text-center">
              <input id="contactrecaptcha" type="submit" name="contactus" class="btn btn-primary btn-raised btn-round" value="Send">
            </div>
          </form>
          <script src="https://www.google.com/recaptcha/api.js?onload=captchaLoad&render=explicit" async defer></script>
        </div>
        <div class="col-md-4 ml-auto">
          <div class="info info-horizontal">
            <div class="icon icon-primary">
              <i class="material-icons">pin_drop</i>
            </div>
            <div class="description">
              <h4 class="info-title">Currently Serving</h4>
              <h5 class="text-muted">Fort Myers, Florida
              </h5>
            </div>
          </div>
          <div class="info info-horizontal">
            <div class="icon icon-primary">
              <i class="material-icons">phone</i>
            </div>
            <div class="description">
              <h4 class="info-title">Give Us a Call</h4>
              <h5 class="text-muted">(321) 420-4569<br>
                Mon - Fri, 8:00-5:00
              </h5>
            </div>
          </div>
          <div class="info info-horizontal">
            <div class="icon icon-primary">
              <i class="material-icons">chat</i>
            </div>
            <div class="description">
              <h4 class="info-title">Email Us</h4>
              <h5 class="text-muted">User the form on the left,<br>
                or just send an email to:<br>
                <a href="mailto:info@hardwarerescue.com">info@hardwarerescue.com</a>
              </h5>
            </div>
          </div>
        </div>
      </div>
    </div>

    <hr>
    <div class="section">
      <h2 class="title mt-0 text-center">Don't hesitate, our Florida based team is standing by.</h2>
      <h4 class="text-muted text-center">There's no matter too big or small. We want to hear from you!</h4><br>
        </div>
      </div>
    </div>
<?php include('footer.php') ?>
    <!--   Core JS Files   -->
    <script src="../assets/js/core/jquery.min.js" type="text/javascript"></script>
    <script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
    <script src="../assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
    <script src="../assets/js/plugins/moment.min.js"></script>
    <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
    <script src="../assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="../assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD0FVXhs3nWU7QeRGtDNWurU93tx6KX_-c"></script>
    <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
    <script src="../assets/js/plugins/bootstrap-tagsinput.js"></script>
    <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
    <script src="../assets/js/plugins/bootstrap-selectpicker.js" type="text/javascript"></script>
    <!--	Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
    <!-- <script src="../assets/js/plugins/jasny-bootstrap.min.js" type="text/javascript"></script> -->
    <!--	Plugin for Small Gallery in Product Page -->
    <!-- <script src="../assets/js/plugins/jquery.flexisel.js" type="text/javascript"></script> -->
    <!-- Plugins for presentation and navigation  -->
    <script src="../assets/demo/modernizr.js" type="text/javascript"></script>
    <!-- <script src="../assets/demo/vertical-nav.js" type="text/javascript"></script> -->
    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Js With initialisations For Google Map Header -->
    <script src="../assets/js/map-header.js" type="text/javascript"></script>
    <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
    <script src="../assets/js/material-kit.js?v=2.2.0" type="text/javascript"></script>
    <script>
      $().ready(function() {
        materialKitMap.initContactUsMap();
      });
    </script>
  </body>

  </html>
