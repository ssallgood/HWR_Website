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
    } elseif(!$comments) {
      $errorMsg = "Please tell us how we can help!";
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
  header("Location: /about.html");
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
  <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="index.php#page-top">Hardware Rescue</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto my-2 my-lg-0">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#services">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a>
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
        <div class="col-lg-10 align-self-end">
          <h1 class="text-uppercase text-white font-weight-bold">Thanks!</h1>
          <hr class="divider my-4">
        </div>
        <div class="col-lg-8 align-self-baseline">
          <p class="text-white-75 font-weight-light mb-5">Thanks for taking the time to reach out, we will be in touch as soon as possible!</p>
          <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Keep reading</a>
        </div>
      </div>
    </div>
  </header>

  <!-- About Section -->
  <section class="page-section bg-primary" id="about">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center" id="shortabout">
          <h2 class="text-white mt-0">Does your hardware need to be rescued?</h2>
          <hr class="divider light my-4">
          <p class="text-white-75 mb-4">
          	These days, nearly everyone has an old computer or laptop lying around, collecting dust.  Maybe it's too slow, or has trouble launching your favorite applications.  Maybe you've been meaning to throw it out or upgrade.  Whatever the reason, we can bring it back to life for a fraction of the cost of buying a new one.  Click below to learn more!
            </p>
             <form>
              <input class="btn btn-light btn-xl js-scroll-trigger" type="button" value="What we do" onclick="switchVisible();"/>
              </form>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center" id="longabout">
          <h2 class="text-white mt-0">"My computer used to be fast, but I think it's time for a new one..."</h2>
          <hr class="divider light my-4">
          <p class="text-white-75 mb-4">
            We know the drill: your computer used to work great when it was new, but that was years ago, and now it's so slow and difficult to use that most days you don't even bother. You've tried all the tips and tricks you could find to speed it up and free up some storage space, but theres only so much you can do with "ancient" hardware; the only thing left to do is buy a new, faster computer and give your old, slow computer to your nerdy nephew who likes playing Fortnite... right?  <br><br>

            Fortunately, that isn't the only option.  Your old computer hardware is likely fully capable of doing everything you need it to do, it's just that the updated software it uses is asking too much from it.  Every year new features are added to Microsoft Windows, MacOS and other commercial software to take advantage of newer and faster hardware.  While these features might provide some catchy eyecandy or even sound helpful, on the whole there is much more "bloat" added than useful features.  These bloated, mostly unneccessary and irrelevant software updates will eat into your computer's limited resources, degrading the performance of your previously speedy computer.  While this may seem like poor planning or execution by Microsoft, it's pretty easy to figure out why this will never change: the slower your computer gets, the more likely you are to buy a new one, which will come pre-installed with a new copy of Windows. Kaching. <br><br>

            So, now we know *why* your computer is slower than it was a few years ago, but what can we do about it?  As we already discovered, there is only so much you can do to improve the performance of old hardware that runs this bloated, resource hungry and expensive software... the only real option is to ditch the software altogether.  This is where Linux comes in.  Linux is an operating system (like Microsoft Windows or MacOS) that has been around in one form or another since the beginning.  What we know of as Linux today was created in 1991 by a Finnish student, Linus Torvalds, as a personal project a completely free and open source (all of the source code was freely available to anyone, unlike Microsoft's source code which is proprietary) alternative operating system that could be used by anyone.  This small project quickly gained the support of thousands of geeks the world over, who have been continuing to improve and streamline it ever since. <br><br>

            footprint and rock solid stability is trusted on nearly all servers and back-end systems in the world, but thanks to its longstanding (and often deserved) reputation for being more complicated to use and understand than Windows or MacOS, it hasn't ever really been a threat to Microsoft's dominance of the personal desktop computer market.  Until recently, at least. <br><br>

            Configuring a linux computer can be a little more difficult (or more appropriately, just different) than configuring a Windows PC.  But, once configured and outfitted with the proper software, a desktop computer running on Linux is a beautiful thing.  Efficiency is built into the system from the ground up, you can feel the difference. The computer boots faster, applications launch faster, everything is just *better*.  Most all of your software will work on Linux, either with an official Linux version or a community created alternative that does the same thing.  One of the only things that can be difficult (or even impossible) to use on Linux are some video games.  This too is changing rapidly however, as more and more developers release Linux versions of their software, and the community finds ways to emulate the rest.<br><br>

            tldr (too long, didn't read) - we will help you remove your costly, poorly performing Windows operating system, and replace it with a sleek and efficient version of Linux.  We will stand behind this software and help you along the way as you delve into the world of free and open source software.  We will make sure your files are backed up, and will be a click/phonecall away from helping you restore them should the need ever arise.  We want you to love Linux as much as we do, and we're confident that you will.  </p>
          <a class="btn btn-light btn-xl js-scroll-trigger" href="#services">Get Started!</a>
        </div>
      </div>

    </div>

  </section>

  <!-- Services Section -->
  <section class="page-section" id="services">
    <div class="container">
      <h2 class="text-center mt-0">At Your Service</h2>
      <hr class="divider my-4">
      <div class="row">
        <div class="col-lg-3 col-md-6 text-center">
          <div class="mt-5">
            <i class="fas fa-4x fa-gem text-primary mb-4"></i>
            <h3 class="h4 mb-2">Free Software</h3>
            <p class="text-muted mb-0">We use only the best, freely available software.</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center">
          <div class="mt-5">
            <i class="fas fa-4x fa-laptop-code text-primary mb-4"></i>
            <h3 class="h4 mb-2">Easy to Use</h3>
            <p class="text-muted mb-0">Using a computer can be intimidating, but we make it simple</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center">
          <div class="mt-5">
            <i class="fas fa-4x fa-globe text-primary mb-4"></i>
            <h3 class="h4 mb-2">Get Connected</h3>
            <p class="text-muted mb-0">We'll bring all your emails and contacts to the new system, or help you create a new one</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center">
          <div class="mt-5">
            <i class="fas fa-4x fa-heart text-primary mb-4"></i>
            <h3 class="h4 mb-2">Made with Love</h3>
            <p class="text-muted mb-0">We're not just trying to sell you a computer, we want you to get the most out of it that you can!</p>
          </div>
        </div>
      </div>
    </div>
  </section>

    <!-- Call to Action Section -->
  <section class="page-section bg-dark text-white">
    <div class="container text-center">
      <h2 class="mb-4">Rescuing a computer is only the beginning...</h2>
      <hr class="divider light my-4">
          <p class="mb-4">Understanding how to use it and knowing where to turn when it doesn't work like it should are just as important.  We've worked hard to de-clutter the desktop, removing unneccessary and complicated applications, and presenting everything in a way that is very easy to understand.  Compare the start menus of a typical rescued computer and stock Windows 10:
            <br>
            <br>
               <div class="container-fluid p-0">
                <div class="row">
                  <div class="col-sm-6">
                    <a  class="portfolio-box" href="img/portfolio/fullsize/mint_startmenu.jpg">
                      <img class="img-fluid" src="img/portfolio/thumbnails/mint_startmenu.jpg">
                    </a>
                    <br>
                    <small class="text-white-75">Rescued computer's simple start menu</small>
                  </div>
                  <div class="col-sm-6">
                    <a class="portfolio-box" href="img/portfolio/fullsize/windows10_startmenu.jpg">
                      <img class="img-fluid" src="img/portfolio/thumbnails/windows10_startmenu.jpg">
                    </a>
                    <br>
                    <small class="text-white-75">Windows 10's cluttered start menu</small>
                  </div>
                </div>
              </div>


            <br>
            <br>

          Still, we understand that problems will arise from time to time, and that's why every rescued computer or laptop includes one full year of tech support!  Don't waste time and money taking it in to a computer shop, just give us a call and we can remotely troubleshoot and help you get back to work as quickly as possible.
          </p>
          <br>
      <a class="btn btn-light btn-xl" href="foss.html">Tell me more</a>
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
                Category
              </div>
              <div class="project-name">
                Project Name
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="img/portfolio/fullsize/fosslaptop.jpg">
            <img class="img-fluid" src="img/portfolio/thumbnails/fosslaptop.jpg" alt="">
            <div class="portfolio-box-caption">
              <div class="project-category text-white-50">
                Category
              </div>
              <div class="project-name">
                Project Name
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="img/portfolio/fullsize/man2.jpg">
            <img class="img-fluid" src="img/portfolio/thumbnails/man2.jpg" alt="">
            <div class="portfolio-box-caption">
              <div class="project-category text-white-50">
                Category
              </div>
              <div class="project-name">
                Project Name
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



<!-- Contact Info -->
  <section class="page-section bg-white" id="contact">
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
