<?php 
if(isset($_POST['submit'])){
    $to = "fraoltesfaye.ft@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $full_name = $_POST['fullName'];
    $phone = $_POST['phone'];
    $subject = "Contact From Personal Website";
    $message = $full_name . " wrote the following:" . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers);
    echo "Mail Sent. Thank you " . $full_name. ", I will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>FraolTesfaye Portfolio Website</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" 
        integrity="sha256-46qynGAkLSFpVbEBog43gvNhfrOj+BmwXdxFgVK/Kvc=" crossorigin="anonymous" />  

        <!-- font type can be changed here -->
        <link href="https://fonts.googleapis.com/css?family=Source+Code+Pro:400,900|Source+Sans
        +Pro:300,900&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <header>
            <div class="logo">
                <img src="alx-logo.jpg.png" alt="">
            </div>
            <button class="nav-toggle" aria-label="toggle navigation">
                <span class="hamburger"></span>
            </button>
            <nav class="nav">
                <ul class="nav__list">
                    <li class="nav__item"><a href="#home" class="nav__link">Home</a></li>
                    <li class="nav__item"><a href="#services" class="nav__link">My Services</a></li>
                    <li class="nav__item"><a href="#about" class="nav__link">About me</a></li>
                    <li class="nav__item"><a href="#work" class="nav__link">My Work</a></li>
                </ul>
            </nav>
        </header>

        <!-- Introduction -->
        <section class="intro" id="home">
            <h1 class="section__title section__title--intro">
                Hi, I am <strong>Fraol Tesfaye</strong>
            </h1>
            <p class="section__subtitle section__subtitle--intro">front-end & back-end dev</p>
            <img src="fraol.jpg" alt="a picture of fraol smiling at mountain entoto" class="intro__img">
        </section>
        <!-- My services -->
        <section class="my-services" id="services">
            <h2 class="section__title section__title--services">What I do</h2>
            <div class="services">
                <div class="service">
                    <h3>Design + Development</h3>
                    <p> Asspiring to be one  
                        
                    </p>
                </div> <!-- / service -->

                <div class="service">
                    <h3>back-end</h3>
                    <p>  work on progress.</p>
                </div> <!-- / service -->

                <div class="service">
                    <h3>WordPress</h3>
                    <p>  expected to adapt easily. </p>
                </div> <!-- / service -->
            </div> <!-- / services -->

            <a href="#work" class="btn">My Work</a>
        </section>

        <!-- About me -->
        <section class="about-me" id="about">
           <h2 class="section__title section__title--about">Who I am</h2>
           <p class="section__subtitle section__subtitle--about">Designer & Devloper based out of Addis Abeba</p>

           <div class="about-me__body">
               <p>I am a graduate of Mining Engineering i found my passion to be  coding. i am studying programing at holberton school
                   with the sponsership of ALX-Africa. currently as a student of programing am open to anykind of work
               </p>
               <p>i have good knowldge and portfolio on C, HTML5, Css 
               </p>
           </div>

           <img src="fraol-03.jpg" alt="fraol siting on a sofa" class="about-me__img">
        </section>

        <!-- My Work -->
        <section class="my-work" id="work">
            <h2 class="section__title section__title--work">My work</h2>
            <p class="section__subtitle section__subtitle--work">A selection of my range of work</p>
            <div class="portfolio">
                <!-- Portfolio item 01 -->
                <a href="#" class="portfolio__item">
                    <img src="lapop.jpg" alt="" class="portfolio__img">


                </a>

                <!-- Portfolio item 02 -->
                <a href="#" class="portfolio__item">
                    <img src="simple_shell.png" alt="" class="portfolio__img">
                </a>

                <!-- Portfolio item 03 -->
                <a href="#" class="portfolio__item">
                    <img src="printf.png" alt="" class="portfolio__img">
                </a>

                <!-- Portfolio item 04 -->
                <a href="#" class="portfolio__item">
                    <img src="Monty_interpreter.png" alt="" class="portfolio__img">
                </a>

                <!-- Portfolio item 05 -->
                <a href="#" class="portfolio__item">
                    <img src="clolap.jpg" alt="" class="portfolio__img">
                </a>
                  <!-- Portfolio item 05 -->
                  <a href="#" class="portfolio__item">
                    <img src="codewa.jpg" alt="" class="portfolio__img">
                </a>
                  <!-- Portfolio item 05 -->
                  <a href="#" class="portfolio__item">
                </a>
            </div>
        </section>
        <!--Fotter-->
        <div class="contact-section">

            <h1>Let's connect</h1>
            <div class="border"></div>
            <form class="contact-form" action="" method="POST">
              <input type="text" name="fullName" id="fullName" class="contact-form-text" placeholder="Your name">
              <input type="email" name="email" id="email" class="contact-form-text" placeholder="Your email">
              <input type="text" name="phone" id="phone" class="contact-form-text" placeholder="Your phone">
              <textarea class="contact-form-text" name="message" id="message" placeholder="Your message"></textarea>
              <input type="submit" name="submit" id="submit" class="contact-form-btn" value="Send">
            </form>
          </div>
          
        <footer class="footer">
            <a href="email:fraoltesfaye.ft@gmail.com" class="footer__link">fraoltesfaye.ft@gmail.com</a>
        <ul class="social-list">
            <li class="social-list__item">
                <a class="social-link__link"
                href=" https://twitter.com/fraol_"> <i class="fab fa-twitter"></i></a></li>
            <li class="social-list__item"><a class="social-link__link"
                href=" https://github.com/Fraol123"> <i class="fab fa-github"></i></a></li>
            <li class="social-list__item"><a class="social-link__link"
                href="https://www.linkedin.com/in/fraol-tesfaye-mts/"><i class="fab fa-linkedin"></i></a></li>
        </ul>
        </footer>
        <script src="index.js"></script>

    </body>
</html>
