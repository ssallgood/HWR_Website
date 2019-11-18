<?PHP
  //Form handler
  if($_POST && isset($_POST['contactus'], $_POST['online_name'], $_POST['phone_number'], $_POST['computer_status'], $_POST['comments'])) {
      $name = $_POST['online_name'];
      $phone = $_POST['phone_number'];
      $comp = $_POST['computer_status'];
      $comments = $_POST['comments'];
  //API Url
  $url = 'https://hwrescue.erpnext.com/api/resource/Online';
  //Form validation NEEDS UPDATE
    if(!$name) {
      $errorMsg = "Please enter your Name";
    } elseif(!$phone) {
      $errorMsg = "Please enter a valid Phone Number";
    } else {
      //Initiate cURL.
      $ch = curl_init($url);
      //The JSON data.
      $jsonData = array(
        'online_name' => $name,
        'phone_number' => $phone,
        'computer_status' => $comp,
        'comments' => $comments
        );
      //Encode the array into JSON.
      $jsonDataEncoded = json_encode($jsonData);
      //Tell cURL that we want to send a POST request.
      curl_setopt($ch, CURLOPT_POST, 1);
      //Attach our encoded JSON string to the POST fields.
      curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonDataEncoded);
      //Set the content type to application/json
      curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
      //Execute the request
      $result = curl_exec($ch);
      //Redirect
      header("Location: /thanks.php");
      exit;
      }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
    <title>Hardware Rescue</title>

  <!-- Font Awesome Icons -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>

  <!-- Plugin CSS -->
  <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

  <!-- Theme CSS - Includes Bootstrap -->
  <link href="css/creative.min.css" rel="stylesheet">

  <!-- Favicon -->

  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">
  <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">

  <!-- Show/Hide Scripts -->
  <script>
      function showhide(id) {
        var e = document.getElementById(id);
        e.style.display = (e.style.display == 'block') ? 'none' : 'block';
        }
      function switchVisible() {
            if (document.getElementById('shortabout')) {

                if (document.getElementById('shortabout').style.display == 'none') {
                    document.getElementById('shortabout').style.display = 'block';
                    document.getElementById('longabout').style.display = 'none';
                }
                else {
                    document.getElementById('shortabout').style.display = 'none';
                    document.getElementById('longabout').style.display = 'block';
                }
            }
        }
  </script>
</head>
<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-sm navbar-light fixed-top py-1" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">Hardware Rescue</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto my-2 my-lg-0">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#comparison">Compare</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#services">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Masthead -->
  <header class="masthead">
    <div class="container h-100">
      <div class="row h-100 align-items-center justify-content-center text-center">
        <div class="container-fluid p-0">
          <!-- <h1 class="text-uppercase text-white font-weight-bold">Hardware Rescue</h1> -->
          <img class="img-fluid" src="img/HWR6_white4.png">
          <!-- <h2 class="text-white font-weight-bold my-4 text-shadow">Computers Done Better</h2> -->
        </div>
        <div class="col-lg-8 align-self-baseline">
          <p class="text-white-90 font-weight-bold mb-5 text-shadow">We rescue used computer hardware and restore it to new using Free and Open Source Software, custom tailored for your needs, with continuing support to keep you connected!</p>
          <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Find Out More</a>
        </div>
      </div>
    </div>
  </header>

  <!-- About Section -->
<section class="page-section bg-primary" id="about">
<div class="container">
  <div class="row justify-content-center">
    <div class="collapse multi-collapse show" id="multiCollapseExample1">
      <div class="container text-center">
      	 <h2 class="text-white mt-0">Does your hardware need to be rescued?</h2>
          <hr class="divider light mb-4">
          <p class="text-white-90 mb-4">
        These days, nearly everyone has a computer or laptop lying around, not being used to it's full potential.  Maybe it's too slow, or has trouble launching your favorite applications.  Maybe you've been meaning to throw it out or upgrade.  Whatever the reason, we can bring it back to life for a fraction of the cost of buying a new one.  Click below to learn more!
      </p>
        <p align="center">
        	<button class="btn btn-light btn-xl" type="button" data-toggle="collapse" data-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2">What we do</button>
        </p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="collapse multi-collapse" id="multiCollapseExample2">
      <div class="container">
      	<h2 class="text-white mt-0" align="center">"I think I might need a new computer"</h2>
        <hr class="divider light my-4">
          <p class="text-white-90 mb-4">
            <img src="img/laptopslow.png" class="img-fluid float-left pr-3">
            Are you unhappy with your computer's performance? Thinking about getting a new one? We've all heard the story; it usually begins with "my computer used to be fast, but...". You've tried all the tips and tricks you could find to speed it up and make it run better but there's only so much you can do with "ancient" hardware. Now it's so slow and frustrating to use that it's hardly ever even turned on. The only option left is to buy a new computer with the latest Apple or Microsoft operating system and get rid of your old computer. Right?<br><br>

            It doesn't have to be that way! Before you spend a lot of money on a new computer, find out how Hardware Rescue can make your computer fast again. Your current computer hardware can still run like new! Commercial software comes bloated with unnecessary features that eat up your computer's limited resources and degrade performance. Apple and Microsoft don't seem to mind that bloated software updates often cause poor performance on older computers… After all, the slower your computer gets, the more likely you are to buy a new one, which will come pre-installed with a paid-for license of their latest Operating System (OS). <br><br>

            At Hardware Rescue we install the best free and open source software available on your computer - Linux. Linux is an OS (like Microsoft's Windows or Apple's MacOS) that has been around for decades. What we know of as Linux today was created in 1991 by a Finnish student, Linus Torvalds, as a personal project for a completely free and open source operating system that could be used by anyone. All of the source code for Linux is freely available, unlike Microsoft or Apple's proprietary code. This small project quickly gained the support of thousands of geeks the world over. They, and Linus, have continued to improve and streamline it ever since.<br><br>

            Linux's small footprint, rock solid reliability, and excellent virus protection have made it the backbone of countless enterprise server applications for years. However, thanks to its longstanding (and often deserved) reputation for being more complicated to install and use than Windows or MacOS, it hasn't ever really been a threat to Microsoft and Apple's dominance in the personal desktop computer market - until now.<br><br>

            <img src="img/laptoplogor.png" class="img-fluid float-right ml-3 mb-3">We do all the tricky stuff for you! Once configured and set up correctly, a desktop computer running Linux is incredibly simple to understand and easy to use. Efficiency is built into the system from the ground up - you will feel the difference. The computer boots faster, applications take less time to launch, everything is just smoother. Linux is an operating system perfectly suited for those who need a simple, reliable computer that well protected from viruses and malware for their home office and online needs.<br><br>

            We will help you remove your costly, poorly performing proprietary OS, and replace it with a sleek and efficient version of Linux. We will stand behind this software and help you as you delve into the world of free and open source software. We will be a click or a phone call away if you need any assistance. We want you to love Linux as much as we do, and we're confident that you will.
          </p>
          <div class="text-center">
          <a class="btn btn-light btn-xl js-scroll-trigger" href="#comparison">How does it compare to windows?</a>
        </div>
      </div>
    </div>
  </div>
</div>

  </section>

  <!-- Comparison Section -->
  <section class="page-section" id="comparison">
    <div class="container text-center">
      <h2 class="text-center mt-0">Rescuing a computer is only the beginning...</h2>
      <hr class="divider my-4">
      <p class="mb-4">Understanding how to use it and knowing where to get help are just as important.  We've worked hard to de-clutter the desktop, removing unneccessary and complicated applications, and presenting everything in a way that is very easy to understand.  Compare the start menus of a typical rescued computer and stock Windows 10:</p>
        <br>
        <br>
            <div class="container-fluid p-0">
              <div class="row">
                <div class="col-sm-6">
                  <a  class="portfolio-box" href="img/portfolio/fullsize/mint_startmenu.jpg">
                    <img class="img-fluid" src="img/portfolio/thumbnails/mint_startmenu.jpg">
                  </a>
                  <br>
                  <small class="text-black-75">Rescued computer's simple start menu</small>
                </div>
                <div class="col-sm-6">
                  <a class="portfolio-box" href="img/portfolio/fullsize/windows10_startmenu.jpg">
                    <img class="img-fluid" src="img/portfolio/thumbnails/windows10_startmenu.jpg">
                  </a>
                  <br>
                    <small class="text-black-75">Windows 10's cluttered start menu</small>
                </div>
                <div class="col-m-6">
                  <br>
                  <br>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12">
                  <h2 class="text-center mt-0">Feature Comparison</h2>
                <table class="table table-hover">
                <thead class="table-borderless">
                  <tr>
                    <td colspan="3">At Hardware Rescue, we won't ever sell you software.  We will help you utilize the best free and open source software to get things done. See how a year of our services stack up against just one software license for Microsoft Windows 10 Pro:</td>
                  </tr>
                  <tr>
                    <th scope="col"></th>
                    <th scope="col">Hardware Rescue's<br>One Year Support Plan</th>
                    <th scope="col">Microsoft's<br>Windows 10 Pro</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row" style="text-align:left;">Price</th>
                    <td>$143.88</td>
                    <td>$199.99</td>
                  </tr>
                  <tr>
                    <th scope="row" style="text-align:left;">In-home and Remote Support Included?</th>
                    <td>Yes</td>
                    <td>No</td>
                  </tr>
                  <tr>
                    <th scope="row" style="text-align:left;">Free Computer Consultation</th>
                    <td>Yes- We will evaluate your computer needs and provide personalized recommendations</td>
                    <td>No</td>
                  </tr>
                <!--  <tr>
                    <th scope="row" style="text-align:left;">Installation Included?</th>
                    <td>Yes</td>
                    <td>No</td>
                -->
                  </tr>
                  <tr>
                    <th scope="row" style="text-align:left;">Future Software Costs?</th>
                    <td>None- We are not selling software; we are helping you use the best free software available.</td>
                    <td>Every new version of Windows requires a new software license, usually around $100.  Different versions of Windows cost more depending on included features</td>
                  </tr>
                  <tr>
                    <th scope="row" style="text-align:left;">Additional Software Costs</th>
                    <td>None. Save hundreds by never paying for updates again.</td>
                    <td>Office ($70+/year), Antivirus ($20+/year), Adobe Photoshop ($200+), Winzip, etc. The software costs never stop adding up!</td>
                  </tr>
                  <tr>
                    <th scope="row" style="text-align:left;">Enhanced Accessibility Options</th>
                    <td>Completely customizable: Larger fonts, simplified application menus, intuitive interface, and that's just the beginning</td>
                    <td>Minimal, difficult to use accessibility options</td>
                  </tr>

                </tbody>
              </table>
            </div>
            </div>
            </div>
            <br>
            <br>
          <p class="mb-4">We understand that problems will arise from time to time, and that's why every rescued computer or laptop includes one full year of tech support!  Don't waste time and money taking it in to a computer shop, just give us a call and we can remotely troubleshoot and help you get back to work as quickly as possible.</p>
          </p>
          <br>
      <a class="btn btn-primary btn-xl js-scroll-trigger" href="#contact">Tell me more</a>
    </div>
  </section>

    <!-- Call to Action Section -->
  <section class="page-section bg-dark" id="services">
    <div class="container">
      <h2 class="mb-4 text-center text-white">So how much will it cost?</h2>
      <hr class="divider light my-4">
        <p class="mb-4 text-left">
          <ul class="list-group list-group-flush">
            <li class="list-group-item list-group-item-action list-group-item-secondary"><i class="fa fa-gem" aria-hidden=”true”></i> &nbsp;All software and installation is 100% free, and we will provide on-call support for only $11.99/month!</li>
            <li class="list-group-item list-group-item-action list-group-item-secondary"><i class="fa fa-gem" aria-hidden=”true”></i> &nbsp;Do you already have a computer? We will rescue it for only $79, which includes six months of free support!</li>
            <li class="list-group-item list-group-item-action list-group-item-secondary"><i class="fa fa-gem" aria-hidden=”true”></i> &nbsp;Do you need a computer?  We have several different models of previously rescued computers to choose from, all for $99 or less,  including 3-6 months of free support!</li>
            <li class="list-group-item list-group-item-action list-group-item-secondary"><i class="fa fa-gem" aria-hidden=”true”></i> &nbsp;We also offer inexpensive (yet powerful) upgrades to both computer hard drives and RAM to truly get the most out of your old hardware. Schedule a free consultation and we can examine your computer and assess your needs to see what will work best for you!</li>
            <li class="list-group-item list-group-item-action list-group-item-secondary"><i class="fa fa-gem" aria-hidden=”true”></i> &nbsp;Would you like to donate a computer?  We are always on the hunt for old laptops and desktops that need to be rescued! Instead of letting it collect dust in a closet somewhere, we will breathe new life into it and find it a new home where it can be used and enjoyed for years to come. Depending on the computer, receive up to two free months of support for your donation!</li>
          </ul>
      <div class="row">
        <div class="col-lg-3 col-md-6 text-center">
          <div class="mt-5">
            <i class="fas fa-4x fa-gem text-primary mb-4"></i>
            <h3 class="h4 mb-2 text-white">Free Software</h3>
            <p class="text-white-50 mb-0">We use only the best, freely available software.</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center">
          <div class="mt-5">
            <i class="fas fa-4x fa-laptop-code text-primary mb-4"></i>
            <h3 class="h4 mb-2 text-white">Easy to Use</h3>
            <p class="text-white-50 mb-0">Using a computer can be intimidating, but we make it simple</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center">
          <div class="mt-5">
            <i class="fas fa-4x fa-globe text-primary mb-4"></i>
            <h3 class="h4 mb-2 text-white">Get Connected</h3>
            <p class="text-white-50 mb-0">We'll bring all your emails and contacts to the new system, or help you create a new one</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center">
          <div class="mt-5">
            <i class="fas fa-4x fa-heart text-primary mb-4"></i>
            <h3 class="h4 mb-2 text-white">Made with Love</h3>
            <p class="text-white-50 mb-0">We're not just trying to sell you a computer, we want you to get the most out of it that you can!</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Portfolio Section -->
  <section id="portfolio">
    <div class="container-fluid p-0">
      <div class="row no-gutters">
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="img/portfolio/fullsize/man1.jpg">
            <img class="img-fluid" src="img/portfolio/thumbnails/man1.jpg" alt="">
            <div class="portfolio-box-caption">
              <div class="project-category text-white-50">
                Computers can be intimidating!
              </div>
              <div class="project-name">
                Too many options, confusing error messages, and difficult to find to programs.
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="img/portfolio/fullsize/fosslaptop.jpg">
            <img class="img-fluid" src="img/portfolio/thumbnails/fosslaptop.jpg" alt="">
            <div class="portfolio-box-caption">
              <div class="project-category text-white-50">
                Free and Open Source Software
              </div>
              <div class="project-name">
                Using only the best open source software, we will save you hundreds in *hidden* computer costs.
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="img/portfolio/fullsize/man2.jpg">
            <img class="img-fluid" src="img/portfolio/thumbnails/man2.jpg" alt="">
            <div class="portfolio-box-caption">
              <div class="project-category text-white-50">
                We've got your back.
              </div>
              <div class="project-name">
                While our interface is customized to be as intuitive as possible, we're here to help if you ever need it!
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>

<!--  FOSS Info
  <section class="page-section bg-dark text-white">
    <div class="container text-center">
      <h2 class="mb-4">Learn more about FOSS</h2>
      <hr class="divider light my-4">
          <p class="text-white-75 mb-4">Free and Open Source Software, or FOSS, is software that is both free (in in more ways than just monetarily) and open source (the source code behind the software is available to everyone).  This is in stark contrast to traditional proprietary software (Microsoft Windows, Office, etc.) where the code is hidden from the users and they have minimal control over how it works. Aside from being a more transparent and ethical development methodology, FOSS also results in dramatically decreased software costs, increased security and stability (especially in regard to malware), protecting privacy, and giving users more control over their own hardware. Click below to learn more!
          </p>
      <a class="btn btn-light btn-xl" href="foss.html">Learn about FOSS</a>
    </div>
  </section>
-->

  <!-- Contact Section -->
  <section class="page-section" id="contact">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h2 class="mt-0">Let's Get In Touch!</h2>
          <hr class="divider my-4">
          <p class="mb-4">Ready to get the most out of your computer for an unbeatable price? Give us a call or send us an email (or fill out and submit the form below), and we will schedule a free appraisal at your convenience!</p>
        </div>
      </div>


  <!-- Contact Form  -->
  <form id="contact-form" action="<?PHP echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post"  accept-charset="UTF-8">
    <?PHP
      if(isset($errorMsg) && $errorMsg) {
      echo "<p style=\"color: red;\">*",htmlspecialchars($errorMsg),"</p>\n\n";
      }
    ?>
  <div class="form-group row">
    <label for="online_name" class="col-sm-2 col-form-label">Your Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="online_name" value="<?PHP if(isset($_POST['online_name'])) echo htmlspecialchars($_POST['online_name']); ?>" placeholder="Name" required>
    </div>
  </div>
  <div class="form-group row">
    <label for="phone_number" class="col-sm-2 col-form-label">Phone Number</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="phone_number" value="<?PHP if(isset($_POST['phone_number'])) echo htmlspecialchars($_POST['phone_number']); ?>" placeholder="Phone" required>
    </div>
  </div>
  <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">Service</legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="computer_status" id="gridRadios1" value="has_comp">
          <label class="form-check-label" for="gridRadios1">
            Rescue my computer!
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="computer_status" id="gridRadios2" value="needs_comp">
          <label class="form-check-label" for="gridRadios2">
            I need a computer that's already been rescued!
          </label>
        </div>
      </div>
    </div>
  </fieldset>

  <div class="form-group row">
    <label for="comments" class="col-sm-2 col-form-label">Tell us how we can help!</label>
    <div class="col-sm-10">
      <textarea class="form-control" rows="3" name="comments" placeholder="What is wrong with your current computer? What do you need to do that you can't?"><?PHP if(isset($_POST['comments'])) echo htmlspecialchars($_POST['comments']); ?></textarea>
    </div>
  </div>
  <div class="row">
    <legend class="col-form-label col-sm-2 pt-0">Check to confirm</legend>
    <div class="col-sm-10">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" name="human_check" id="human_check" required>
        <label class="form-check-label mb-4" for="human_check">
          &nbsp;(This just helps keep SPAM to a minimum)
      </div>
   </div>
  </div>

  <div class="row justify-content-center">
    <button type="submit" name="contactus" class="btn btn-primary">Rescue My Computer!</button>
  </div>
</form>

<!-- <p id="contact-result">We look forward to hearing from you.</p> -->

<br>
<br>

<!-- Contact Info -->
      <div class="row">
        <div class="col-lg-4 ml-auto text-center">
          <i class="fas fa-phone fa-3x mb-3 text-muted"></i>
          <div>+1 (321) 420-4569</div>
        </div>
        <div class="col-lg-4 mr-auto text-center">
          <i class="fas fa-envelope fa-3x mb-3 text-muted"></i>
          <!-- Make sure to change the email address in anchor text AND the link below! -->
          <a class="d-block" href="mailto:info@hardwarerescue.com">info@hardwarerescue.com</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-light py-5">
    <div class="container">
      <div class="small text-center text-muted">Copyright &copy; 2019 - Hardware Rescue LLC</div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/creative.min.js"></script>

</body>
</html>
