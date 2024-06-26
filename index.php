<?php
require 'db_config.php';

$sql = "SELECT id, judul, isi, kategori FROM artikelku";
$result = $conn->query($sql);

if (!$result) {
    die("Error: " . $conn->error);
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portfolio Roby</title>

    <!-- box icons -->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />

    <!-- custom css -->
    <link rel="stylesheet" href="css/style.css" />
  </head>

  <body>
    <!-- header design -->
    <header class="header">
      <a href="#" class="logo">Portfolio</a>

      <i class='bx bx-menu' id="menu-icon"></i>

      <nav class="navbar">
        <a href="#home" class="active">Home</a>
        <a href="#about">About</a>
        <a href="#services">Services</a>
        <a href="#portfolio">Portfolio</a>
        <a href="#contact">Contact</a>
      </nav>
    </header>  

    <!-- home section design -->
    <section class="home" id="home">
      <div class="home-content">
          <h3>Hello, It's Me</h3>
          <h1>Syifaturrobbani</h1>
          <h3>And I'm a <span class="multiple-text"></span></h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit perferendis, delectus ratione quia minima natus facere officiis?</p>
          <div class="social-media">
            <a href="#"><i class='bx bxl-facebook'></i></a>
            <a href="#"><i class='bx bxl-twitter'></i></a>
            <a href="#"><i class='bx bxl-instagram-alt'></i></a>
            <a href="#"><i class='bx bxl-linkedin'></i></a>
          </div>
          <a href="#" class="btn">Download CV</a>
      </div>
      <div class="home-img">
        <img src="images/roby.png" alt="">
      </div>
    </section>
    <!-- about section design -->
    <section class="about" id="about">
        <div class="about-img">
          <img src="images/roby.png" alt="">
        </div>

        <div class="about-content">
          <h2 class="heading">About <span>Me</span></h2>
          <h3>Frontend Developer!</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt ipsam excepturi corrupti sed non similique possimus enim laboriosam voluptates! Doloribus ex iure, maxime unde accusamus velit voluptatibus, quod at obcaecati provident, quia natus molestiae corporis laborum repellendus vitae quidem quis id possimus amet necessitatibus? Ullam, sit.</p>
          <a href="#" class="btn">Read More</a>
        </div>        
    </section>

    <!-- services section design -->
    <section class="services" id="services">
        <h2 class="heading">Our <span>Services</span></h2>

        <div class="services-container">
          <div class="services-box">
            <i class='bx bx-code-alt'></i>
            <h3>Web Development</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi illo fugiat obcaecati eligendi cumque sapiente molestias ea, laboriosam earum saepe!</p>
            <a href="#" class="btn">Read More</a>
          </div>

          <div class="services-box">
            <i class='bx bxs-paint'></i>
            <h3>Graphic Design</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi illo fugiat obcaecati eligendi cumque sapiente molestias ea, laboriosam earum saepe!</p>
            <a href="#" class="btn">Read More</a>
          </div>

          <div class="services-box">
            <i class='bx bx-bar-chart-alt' ></i>
            <h3>Digital Marketing</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi illo fugiat obcaecati eligendi cumque sapiente molestias ea, laboriosam earum saepe!</p>
            <a href="#" class="btn">Read More</a>
          </div>

        </div>
    </section>

    <!-- portfolio section design -->
    <section class="portfolio" id="portfolio">
        <h2 class="heading">Latest <span>Project</span></h2>

        <div class="portfolio-container">
            <div class="portfolio-box">
              <img src="images/portfolio1.jpg" alt="">
              <div class="portfolio-layer">
                  <h4>Web Design</h4>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, unde?</p>
                  <a href="#"><i class='bx bx-link-external'></i></a>
              </div>
            </div>  

                <div class="portfolio-box">
                  <img src="images/portfolio2.jpg" alt="">
                  <div class="portfolio-layer">
                      <h4>Web Design</h4>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, unde?</p>
                      <a href="#"><i class='bx bx-link-external'></i></a>
                  </div>
                </div>

                <div class="portfolio-box">
                  <img src="images/portfolio3.jpg" alt="">
                  <div class="portfolio-layer">
                      <h4>Web Design</h4>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, unde?</p>
                      <a href="#"><i class='bx bx-link-external'></i></a>
                  </div>
                </div>

                  <div class="portfolio-box">
                    <img src="images/portfolio4.jpg" alt="">
                    <div class="portfolio-layer">
                        <h4>Web Design</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, unde?</p>
                        <a href="#"><i class='bx bx-link-external'></i></a>
                    </div>
                  </div>

                    <div class="portfolio-box">
                      <img src="images/portfolio5.jpg" alt="">
                      <div class="portfolio-layer">
                          <h4>Web Design</h4>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, unde?</p>
                          <a href="#"><i class='bx bx-link-external'></i></a>
                      </div>
                    </div>

                      <div class="portfolio-box">
                        <img src="images/portfolio6.jpg" alt="">
                        <div class="portfolio-layer">
                            <h4>Web Design</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, unde?</p>
                            <a href="#"><i class='bx bx-link-external'></i></a>
                        </div>
                      </div>
        </div>
    </section>
        
    <!-- contact section design -->
    <section class="contact" id="contact">
      <h2 class="heading">Contact <span>Me!</span></h2>

      <form action="#">
        <div class="input-box">
          <input type="text" placeholder="Full Name">
          <input type="email" placeholder="Email Address">
        </div>

        <div class="input-box">
          <input type="number" placeholder="Mobile Number">
          <input type="text" placeholder="Email Subject">
        </div>
        <textarea name="" id="" cols="30" rows="10" placeholder="Your Message"></textarea>
        <input type="submit" value="Send Message" class="btn">
        
      </form>
    </setion>
  
    <!-- footer design -->
    <footer class="footer">
        <div class="footer-text">
            <p>Copyright &copy; 2024 by Roby | All Rights Reserved.</p>
        </div>

        <div class="footer-iconTop">
            <a href="#home"><i class='bx bx-up-arrow-alt' ></i></a>
        </div>
    </footer>

    <!-- scroll reveal -->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!-- typed js -->
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>

    <!-- custom js -->
    <script src="js/script.js"></script>
  </body>
</html>
