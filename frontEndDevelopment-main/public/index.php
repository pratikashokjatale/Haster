<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="my portfolio website to showcase the work I have done so far, the services I provide and all my professionals life.">
  <title>welcome to Haster</title>
  <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" href="css/style.css" />
  <link rel="icon" href="images/t9.png" type="image/x-icon" />
</head>

<body>
  <header class="header">
    <img src="images/t3.png" alt="thapa technical logo" class="logo" />
    <nav class="navbar">
      <ul class="navbar-lists">
        <li><a class="navbar-link home-link" href="#">Home</a></li>
        <li><a class="navbar-link about-link" href="#">About</a></li>
        <li><a class="navbar-link portfolio-link" href="#portfolio-section">latest work</a></li>
        <li><a class="navbar-link service-link" href="#services">Services</a></li>
        
        <li>
          <a class="navbar-link" href="#contact" target="_blank">Contact</a>
        </li>
      </ul>
    </nav>

    <div class="mobile-navbar-btn">
      <ion-icon class="mobile-nav-icon" name="menu-outline" class="mobile-nav-icon"></ion-icon>

      <ion-icon class="mobile-nav-icon" name="close-outline" class="mobile-nav-icon"></ion-icon>
    </div>
  </header>

  <!-- ======================================== 
          Our Main Hero Section Start  
    ========================================  -->
  <main>
    <section class="section-hero section">
      <div class="container grid grid-two-col">
        <div class="section-hero-data">
          <p class="hero-top-data">this is </p>
          <h1 class="hero-heading">FREELANCER AGENCY</h1>
          <p class="hero-para" align="justify">
            India's most trusted design & content agency.
            We, The Haster Freelance Agency provide to client best services such as
            Video editing, content creation, logo designing, graphic designing, poster designing, business cards, web development, Branding, Ads Etc.
          </p>
          <div>
            <a href="https://docs.google.com/forms/d/e/1FAIpQLScit-r-293qNRKo9dCfHYDaIBys6LG5e_5WHzNV4Tcxddyqww/viewform?usp=sf_link" target="_blank" class="btn hireme-btn">Hire Me</a>
          </div>
        </div>

        <div class="section-hero-image">
          <img src="images/T4.gif" alt="hero image" class="hero-img" />
        </div>
      </div>
    </section>
  </main>

  <!-- ======================================== 
           Bio Data Section Start  
    ========================================  -->

  <!-- ======================================== 
        Portfolio works Section Start  
    ========================================  -->
  <section class="section-portfolio section " id="portfolio-section">
    <div class="container">
      <h2 class="common-heading">Latest works</h2>
      <p>
        Video editing, content creation, logo designing, graphic designing,
        web development, app development.
      </p>
    </div>

    <div class="p-btns">
      <button class="btn p-btn " data-btn-num="1">Websites</button>
      <button class="btn p-btn " data-btn-num="2">app design </button>
      <button class="btn p-btn " data-btn-num="3"> logo Design</button>
      <button class="btn p-btn " data-btn-num="1">Video editing</button>
      <button class="btn p-btn " data-btn-num="2">content creation</button>



    </div>

    <div class="container grid grid-three-col portfolio-images">
      <div class="img-ovelay p-btn--1">
        <img src="images/folio/1.jpg" loading="lazy" alt="portfolio images " />
        <div class="overlay">
          <a href="#" target="_blank" class="common-heading">Project 1</a>
        </div>
      </div>

      <div class="img-ovelay p-btn--3">
        <img src="images/folio/4.jpg" loading="lazy" alt="portfolio images " />
        <div class="overlay">
          <a href="#" target="_blank" class="common-heading">Project 2</a>
        </div>
      </div>

      <div class="img-ovelay p-btn--1">
        <img src="images/folio/3.jpg" loading="lazy" alt="portfolio images " />
        <div class="overlay">
          <a href="" target="_blank" class="common-heading">Project 3</a>
        </div>
      </div>
      <div class="img-ovelay p-btn--1 p-btn--2">
        <img src="images/folio/4.jpg" loading="lazy" alt="portfolio images " />
        <div class="overlay">
          <a href="" target="_blank" class="common-heading">Project 4</a>
        </div>
      </div>
      <div class="img-ovelay p-btn--2">
        <img src="images/folio/5.jpg" loading="lazy" alt="portfolio images " />
        <div class="overlay">
          <a href="" target="_blank" class="common-heading">Project 5</a>
        </div>
      </div>
      <div class="img-ovelay p-btn--1">
        <img src="images/folio/1.jpg" loading="lazy" alt="portfolio images " />
        <div class="overlay">
          <a href="" target="_blank" class="common-heading">Project 6</a>
        </div>
      </div>
    </div>
  </section>

  <!-- ======================================== 
          work completed counter section Start  
    ========================================  -->

    <section class="section-work-data section ">
    <div class="container grid grid-four-col">
      <div>
        <h2 data-number="2000" class="counter-numbers">200</h2>
        <p>project completed</p>
      </div>
      <div>
        <h2 data-number="6000" class="counter-numbers">100+</h2>
        <p>Happy clients</p>
      </div>
      <div>
        <h2 data-number="5000" class="counter-numbers">1000+</h2>
        <p>cups of coffee</p>
      </div>
      <div>
        <h2 data-number="3000" class="counter-numbers">50+</h2>
        <p>real professionals</p>
      </div>
    </div>
  </section>

  <!-- ======================================== 
          Our Service Section Start  
    ========================================  -->
  <section class="section-services section " id="services">
    <div class="container">
      <h2 class="common-heading">Service Offers</h2>
      <p>
        Video editing, content creation, logo designing, graphic designing,
        poster designing, business cards, web development, Branding, Ads.
      </p>
    </div>

    <div class="container grid grid-three-col">
      <div class="service-box">
        <image src="images/we.png" width="90">
          <h3>web development</h3>
          <p>
            “It is not because things are difficult that we do not dare; it is
            because we do not dare that they are difficult.”
          </p>
      </div>

      <div class="service-box">

        <image src="images/montage.png" width="90">
          <h3>Video editing</h3>
          <p>
            “It is not because things are difficult that we do not dare; it is
            because we do not dare that they are difficult.”
          </p>
      </div>

      <div class="service-box">

        <image src="images/ads.png" width="90">
          <h3>Commercial Ads</h3>
          <p>
            “It is not because things are difficult that we do not dare; it is
            because we do not dare that they are difficult.”
          </p>
      </div>

      <div class="service-box">

        <image src="images/rgb.png" width="90">
          <h3>graphic design</h3>
          <p>
            “It is not because things are difficult that we do not dare; it is
            because we do not dare that they are difficult.”
          </p>
      </div>
      <div class="service-box">
        <image src="images/t6.png" width="90">
          <h3>apps development</h3>
          <p>
            “It is not because things are difficult that we do not dare; it is
            because we do not dare that they are difficult.”
          </p>
      </div>
      <div class="service-box">
        <image src="images/t5.png" width="90">
          <h3>logo designing</h3>
          <p>
            “It is not because things are difficult that we do not dare; it is
            because we do not dare that they are difficult.”
          </p>
      </div>
      <div class="service-box">
        <image src="images/credit.png" width="90">
          <h3>busines cards</h3>
          <p>
            “It is not because things are difficult that we do not dare; it is
            because we do not dare that they are difficult.”
          </p>
      </div>
      <div class="service-box">
        <image src="images/branding.png" width="90">
          <h3>Branding</h3>
          <p>
            “It is not because things are difficult that we do not dare; it is
            because we do not dare that they are difficult.”
          </p>
      </div>
      <div class="service-box">
        <image src="images/writer.png" width="90">
          <h3>Content creation</h3>
            <p>
              “It is not because things are difficult that we do not dare; it is
              because we do not dare that they are difficult.”
            </p>
      </div>
    </div>
  </section>

  <!-- ======================================== 
          Our Resume Section Start  
    ========================================  -->
    <section class="section-resume section " >
      <div class="container grid grid-two-col">
        <!-- resume left side  -->
        
      
        <!-- resume right side  -->
        <div class="resume-data">
          <h2 class="common-heading">internship</h2>
          

          <div class="resume-data-subsection">
            <div class="resume-data-left">
              <h3>web development</h3>
              <div class="grid grid-two-col">
                <p>
                  <ion-icon name="business-outline"></ion-icon> Technical.
                </p>
                <p>
                  <ion-icon name="location-outline"></ion-icon> wor from home
                </p>
              </div>
            </div>

            <div class="resume-data-right">
              <p class="resume-data-button">parttime</p>
              <p>
                <ion-icon name="calendar-outline"></ion-icon>  <span>April 2024 - Present </span
                > 
              </p>
            </div>
          </div>

          <!-- 2nd work experience  -->
          <div class="resume-data-subsection">
            <div class="resume-data-left">
              <h3>android developments</h3>
              <div class="grid grid-two-col">
                <p>
                  <ion-icon name="business-outline"></ion-icon> tech.
                </p>
                <p>
                  <ion-icon name="location-outline"></ion-icon> india
                </p>
              </div>
            </div>

            <div class="resume-data-right">
              <p class="resume-data-button">fulltime</p>
              <p>
                <ion-icon name="calendar-outline"></ion-icon> November 2023 -
                Present
              </p>
            </div>
          </div>

          <!-- 3rd work experience  -->
          <div class="resume-data-subsection">
            <div class="resume-data-left">
              <h3>machine learning</h3>
              <div class="grid grid-two-col">
                <p>
                  <ion-icon name="business-outline"></ion-icon>  Inc.
                </p>
                <p>
                  <ion-icon name="location-outline"></ion-icon> mumbia
                </p>
              </div>
            </div>

            <div class="resume-data-right">
              <p class="resume-data-button">fulltime</p>
              <p>
                <ion-icon name="calendar-outline"></ion-icon>November 2023 -
                Present
              </p>
            </div>
          </div>

          <!-- 4th work experience  -->
          <div class="resume-data-subsection">
            <div class="resume-data-left">
              <h3>data science</h3>
              <div class="grid grid-two-col">
                <p>
                  <ion-icon name="business-outline"></ion-icon>  Inc.
                </p>
                <p>
                  <ion-icon name="location-outline"></ion-icon> pune
                </p>
              </div>
            </div>

            <div class="resume-data-right">
              <p class="resume-data-button">fulltime</p>
              <p>
                <ion-icon name="calendar-outline"></ion-icon>November 2023 -
                Present
              </p>
            </div>
          </div>
       
          <!-- Education section  -->
         
            <!-- end  -->
          </div>
          <div class="resume-data-bottom-subsection"> 
             
         
             <!-- 1st college  -->
             <div class="resume-data-subsection margin-small ">
               <div class="resume-data-left">
                 <h3>graphic Design</h3>
                 <div class="grid grid-two-col">
                   <p>
                     <ion-icon name="business-outline"></ion-icon> , Inc.
                   </p>
                   <p>
                     <ion-icon name="location-outline"></ion-icon> wor from home
                   </p>
                 </div>
               </div>
 
               <div class="resume-data-right">
                 <p class="resume-data-button"> Masters</p>
                 <p>
                   <ion-icon name="calendar-outline"></ion-icon>  <span>May 2024 - 2015 </span
                   > 
                 </p>
               </div>
             </div>
 
              <!-- 2nd college  -->
             <div class="resume-data-subsection ">
               <div class="resume-data-left">
                 <h3>cyber security</h3>
                 <div class="grid grid-two-col">
                   <p>
                     <ion-icon name="business-outline"></ion-icon> Inc.
                   </p>
                   <p>
                     <ion-icon name="location-outline"></ion-icon> Pune, MH
                   </p>
                 </div>
               </div>
 
               <div class="resume-data-right">
                 <p class="resume-data-button"> master </p>
                 <p>
                   <ion-icon name="calendar-outline"></ion-icon>  <span>May 2024 - 2025 </span
                   > 
                 </p>
               </div>
             </div>
             <a href="https://docs.google.com/forms/d/e/1FAIpQLScit-r-293qNRKo9dCfHYDaIBys6LG5e_5WHzNV4Tcxddyqww/viewform?usp=sf_link" class="btn" > register for internship </a>
        </div>
        
      </div>
      
    </section>




  <!-- ======================================== 
          Our Testimonial Section Start  
    ========================================  -->

  <section class="section section-testimonial ">
    <div class="container">
      <h2 class="common-heading">Happy Client works</h2>
    </div>
    <!-- Slider main container -->
    <!-- Swiper -->
    <div class="swiper mySwiper container">
      <div class="swiper-wrapper">
        <div class="swiper-slide">

          <div class="swiper-client-msg">
            <p>Calvin: You know sometimes when I'm talking, my words can't keep up with my thoughts... I wonder why we think faster than we speak. Hobbes: Probably so we can think twice.</p>
          </div>
          <div class="swiper-client-data grid grid-two-col ">
            <figure>
              <img loading="lazy" src="images/clients/a.jpg" alt="">
            </figure>
            <div class="client-data-details">
              <p>piyush</p>
              <p>Entrepruner</p>
            </div>
          </div>
        </div>
        <!-- slide end  -->
        <div class="swiper-slide">

          <div class="swiper-client-msg">
            <p>Calvin: You know sometimes when I'm talking, my words can't keep up with my thoughts... I wonder why we think faster than we speak. Hobbes: Probably so we can think twice.</p>
          </div>
          <div class="swiper-client-data grid grid-two-col ">
            <figure>
              <img loading="lazy" src="images/clients/b.jpg" alt="">
            </figure>
            <div class="client-data-details">
              <p>rohit</p>
              <p>Entrepruner</p>
            </div>
          </div>
        </div>
        <!-- slide end  -->
        <div class="swiper-slide">

          <div class="swiper-client-msg">
            <p>Calvin: You know sometimes when I'm talking, my words can't keep up with my thoughts... I wonder why we think faster than we speak. Hobbes: Probably so we can think twice.</p>
          </div>
          <div class="swiper-client-data grid grid-two-col ">
            <figure>
              <img loading="lazy" src="images/clients/c.jpg" alt="">
            </figure>
            <div class="client-data-details">
              <p>atharav</p>
              <p>logo design </p>
            </div>
          </div>
        </div>
        <!-- slide end  -->
        <div class="swiper-slide">

          <div class="swiper-client-msg">
            <p>Calvin: You know sometimes when I'm talking, my words can't keep up with my thoughts... I wonder why we think faster than we speak. Hobbes: Probably so we can think twice.</p>
          </div>
          <div class="swiper-client-data grid grid-two-col ">
            <figure>
              <img loading="lazy" src="images/clients/d.jpg" alt="">
            </figure>
            <div class="client-data-details">
              <p>vinit </p>
              <p>business card</p> 
            </div>
          </div>
        </div>
        <!-- slide end  -->
        <div class="swiper-slide">

          <div class="swiper-client-msg">
            <p>Calvin: You know sometimes when I'm talking, my words can't keep up with my thoughts... I wonder why we think faster than we speak. Hobbes: Probably so we can think twice.</p>
          </div>
          <div class="swiper-client-data grid grid-two-col ">
            <figure>
              <img src="images/clients/e.jpg" alt="">
            </figure>
            <div class="client-data-details">
              <p>sahil </p>
              <p>Entrepruner</p>
            </div>
          </div>
        </div>
        <!-- slide end  -->
        <div class="swiper-slide">

          <div class="swiper-client-msg">
            <p>Calvin: You know sometimes when I'm talking, my words can't keep up with my thoughts... I wonder why we think faster than we speak. Hobbes: Probably so we can think twice.</p>
          </div>
          <div class="swiper-client-data grid grid-two-col ">
            <figure>
              <img src="images/clients/f.jpg" alt="">
            </figure>
            <div class="client-data-details">
              <p>sanju mishra</p>
              <p>website</p>
            </div>
          </div>
        </div>
        <!-- slide end  -->
        <div class="swiper-slide">

          <div class="swiper-client-msg">
            <p>Calvin: You know sometimes when I'm talking, my words can't keep up with my thoughts... I wonder why we think faster than we speak. Hobbes: Probably so we can think twice.</p>
          </div>
          <div class="swiper-client-data grid grid-two-col ">
            <figure>
              <img src="images/clients/g.jpg" alt="">
            </figure>
            <div class="client-data-details">
              <p>Vinod galani</p>
              <p>Entrepruner</p>
            </div>
          </div>
        </div>
        <!-- slide end  -->
        <div class="swiper-slide">

          <div class="swiper-client-msg">
            <p>Calvin: You know sometimes when I'm talking, my words can't keep up with my thoughts... I wonder why we think faster than we speak. Hobbes: Probably so we can think twice.</p>
          </div>
          <div class="swiper-client-data grid grid-two-col ">
            <figure>
              <img src="images/clients/h.jpg" alt="">
            </figure>
            <div class="client-data-details">
              <p>abhi nayra</p>
              <p>Entrepruner</p>
            </div>
          </div>
        </div>
        <!-- slide end  -->

      </div>
      <div class="swiper-pagination"></div>
    </div>
    </div>
  </section>

  <!-- ======================================== 
         freelancing Section   
    ========================================  -->

  <section class="section section-freelancer ">
    <div class="overlay"></div>
    <div class="container">
      <h2>I am <span> available </span> for freelancing</h2>
    
      <a href="https://linktr.ee/hasteragency" class="btn"> Here </a>
    </div>
  </section>

  <!-- ======================================== 
          Our  Cotnact Us Section   
    ========================================  -->
  <?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['username'];
    $email = $_POST['email'];
    $desc = $_POST['subject'];
    $message = $_POST['message'];

    // connect to database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "freelanc";
    // creat a connection object
    $conn = mysqli_connect($servername, $username, $password, $database);
    // creat database



    //die connection is not susccefull
    if (!$conn) {
      die("Could not connect to database" . mysqli_connect_error());
    } else {

      $sql = "INSERT INTO `info` (`name`, `email`, `subject`, `message`) VALUES ('$name', '$email', '$desc', '$message');";

      $result = mysqli_query($conn, $sql);
      if ($result) {
       
      } else {
        echo " not insert successfully" . mysqli_error($conn);
      }
    }
  }


  ?>



  <section class="section section-contact " id="contact">
    <div class="container">
      <h2 class="common-heading">contact us</h2>
    </div>

    <div class="section-contact-main contact-container">
      <form action="index.php" method="POST">
        <div class=" grid grid-two-col">
          <input type="text" name="username" id="" required placeholder="Name">
          <input type="email" name="email" required placeholder="Email" autocomplete="false">
        </div>
        <div>
          <input type="text" name="subject" placeholder="Subject">
        </div>
        <div>
          <textarea name="message" id="" placeholder="Message"></textarea>
        </div>

        <div>
          <input type="submit" value="send message" class="btn">
        </div>
      </form>
    </div>
  </section>

  <!-- ======================================== 
          Our footer Section   
    ========================================  -->

  <footer class="section section-footer ">
    <div class="container grid grid-four-col">
      <div class="f-about">
        <h3>About</h3>
        <p align="left">We, The Haster Freelance Agency provide to client best services such as
          Video editing, logo designing, graphic designing, poster designing, business cards, web development, Branding.</p>
      </div>

      <div class="f-links">
        <h3>Links</h3>
        <ul>
          <li><span><ion-icon name="arrow-forward-outline"></ion-icon></span><a href="#">home</a></li>
          <li><span><ion-icon name="arrow-forward-outline"></ion-icon></span><a href="#">about</a></li>
          <li><span><ion-icon name="arrow-forward-outline"></ion-icon></span><a href="#">services</a></li>
          <li><span><ion-icon name="arrow-forward-outline"></ion-icon></span><a href="#">portfolio</a></li>

          <li><span><ion-icon name="arrow-forward-outline"></ion-icon></span><a href="#">contact</a></li>
        </ul>
      </div>

      <div class="f-services">
        <h3>Services</h3>
        <ul>
          <li><span><ion-icon name="arrow-forward-outline"></ion-icon></span><a href="#">web design</a></li>
          <li><span><ion-icon name="arrow-forward-outline"></ion-icon></span><a href="#">web development</a></li>
          <li><span><ion-icon name="arrow-forward-outline"></ion-icon></span><a href="#">Mern Project</a></li>

          <li><span><ion-icon name="arrow-forward-outline"></ion-icon></span><a href="#">Internship</a></li>
          <li><span><ion-icon name="arrow-forward-outline"></ion-icon></span><a href="#">Video editing</a></li>
        </ul>
      </div>

      <div class="f-address">
        <h3>Have a Questions?</h3>
        <address>
          <div>
            <p> <span><ion-icon name="location-outline"></ion-icon></span> Nagpur, India </p>
          </div>

          <div>
            <p> <span><ion-icon name="call-outline"></ion-icon></span> +91 9325572418</p>
          </div>

          <div class="email">
            <p> <span><ion-icon name="mail-outline"></ion-icon></span> hasterfagency@gmail.com </p>
          </div>
        </address>
      </div>
    </div>

    <div class="container">
      <div class="f-social-icons">
        <a href="#" target="_blank">
          <ion-icon class="icons" name="logo-instagram"></ion-icon>
        </a>

        <a href="#" target="_blank">
          <ion-icon class="icons" name="logo-discord"></ion-icon>
        </a>

        <a href="#" target="_blank">
          <ion-icon class="icons" name="logo-youtube"></ion-icon>
        </a>
      </div>

      <div class="f-credits">
        <p>Copyright ©2023 All rights reserved | This template is made by Haster freelancer Agency</p>
      </div>
    </div>

  </footer>



  <!-- ======================================== 
          Our JavaScript Section   
    ========================================  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
  <script src="index.js"></script>
</body>

</html>