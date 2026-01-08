<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Your Website</title>
  <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
  <?php
    require 'config.php';
   ?>

  <!-- Header -->
  <header>
    <div class="logo">
      <img src="images/lu.jpg" alt="">
    </div>
    <nav>
      <ul>
        <li><a href="home.php">Home</a></li>
        <li><a href="aboutus.php">About Us</a></li>
        <li><a href="books.php">Books</a></li>
        <li><a href="notification.php">Notification</a></li>
        <li><a href="Donations.php">Donation</a></li>
      </ul>
    </nav>
    <div class="header-buttons">
      <a href="login.php">
     <button>Login</button>
     </a>
     <a href="SignUp.php">
      <button>SignUp</button>
    </a>
    </div>
    <div class="search-bar">
      <input type="text" placeholder="Search...">
      <button type="submit">Search</button>
    </div>
  </header>

 
  

  <div class="container">
    <div class="column">
      <div class="row">
        <div class="sub-column two-thirds">
          <div class="slideshow">
            <div class="slides">
              <img src="images/lab.jpg" alt="Slide 1">
              <img src="images/lan.jpg" alt="Slide 2">
              <img src="images/lib.jpeg" alt="Slide 3">
            </div>
            <button class="prev" onclick="prevSlide()">&#10094;</button>
            <button class="next" onclick="nextSlide()">&#10095;</button>
            <div class="indicator"></div>
          </div>
        </div>
        <div class="sub-column one-third">
            <div class="content">
                <h2>Members Of Commitee</h2>
                <div class="item">
                  <img src="images/hu.webp" alt="Image 1">
                  <div class="item-content">
                    <p><i>Prof.Chandani Liyanage<br>(Former Chairperson of the committ Department of Sociology)</i></p>
                  </div>
                </div>
                <div class="item">
                  <img src="images/men.webp" alt="Image 2">
                  <div class="item-content">
                    <p><i>Prof.K.A.R.Siddhisena<br>(Chairmen of the LIS-ERC)</i></p>
                  </div>
                </div>
                <div class="item">
                  <img src="images/ku.webp" alt="Image 3">
                  <div class="item-content">
                    <p><i>Prof.C.A.Kumara<br>(Chairman of the lis-erc)</i></p>
                  </div>
                </div>
              </div>
        </div>
      </div>
    </div>
    <div class="column">
      <div class="row">
        <div class="sub-column one-third">
            <div class="buttons">
                <button>Academic Data Base</button>
                <button>Ebooks and Audiobooks</button>
                <button>Magazine</button>
                <button>Newspapers</button>
              </div>
        </div>

        <div class="sub-column one-third">
            <div class="middle-content">
                <h2>Student Support</h2>
                <ul>
                  <li><a href="#">Past Papers</a></li>
                  <li><a href="#">Research Support</a></li>
                  <li><a href="#">Institutional Repositary</a></li>
                  <li><a href="#">Tutorial</a></li>
                </ul>
              </div>
        </div>
        <div class="sub-column one-third">
            <div class="middle-content">
                <h2>Catalogue</h2>
                <ul>
                  <li>Businness</li>
                  <li>E-commerce</li>
                  <li>Blog</li>
                  <li>Event</li>
                  <li>Travel</li>
                </ul>
              </div>
        </div>
      </div>
    </div>
  </div>
<!-- Footer -->
<footer>
    <div class="footer-columns">
      <div class="footer-column">
        <div class="picture">
          <img src="images/ju.jpg" alt="" style="float: left;">
      </div>
        <p>Address:670/1/A <br> Peradeniya Rd,<br>Peradeniya 20000</p>
      </div>
      <div class="footer-column">
        <div class="picture">
          <img src="images/tee.jpg" alt=""  style="float: left;">
      </div>
        <p>Tel:0812387888</p>
        <p>Fax:0812387890</p>
      </div>
      <div class="footer-column">
        <div class="picture">
          <img src="images/link.jpg" alt=""  style="float: left;">
      </div>
        <p>External link:</p>
        <p><a href="https://reference.nlb.gov.sg/guides/digital-preservation/main/caring-digital/"style="color:antiquewhite; font-size:15px;">HARDWARE DIGITAL COLLECTIONS</a><br><br><a href="https://library.harvard.edu/services-tools/hollis-archival-discovery/" style="color:antiquewhite; font-size:15px;">HOLLIS FOR ARCHIVAL DISCOVERY</a></p>
      </div>
      <div class="footer-column">
        <div class="picture">
          <img src="images/database.jpg" alt=""  style="float:left;">
      </div>
        <p>Database:<br>NEWSLETTERS/SOCIAL</p>
      </div>
      <div class="footer-column">
        <div class="picture">
          <img src="images/time.jpg" alt="" style="float: left;">
      </div>
        <p>Open: 9.00 a.m</p>
        <p>Close: 4.00 p.m</p>
      </div>
      <div class="footer-column">
        <div class="photo">
          <a href="https://www.instagram.com/">
            <img src="images/insta.jpg">
          </a>
            <a href="https://www.facebook.com/">
            <img src="images/fb.jpg">
          </a>
          <a href="https://www.youtube.com/">
            <img src="images/youtube.jpg">
          </a>
          <a href="https://www.whatsapp.com/">
            <img src="images/whats.jpg">
          </a>
          <a href="https://www.gmail.com/">
            <img src="images/gmail.jpg">
          </a>
          <a href="https://www.snapchat.com/">
            <img src="images/snap.jpg">
          </a>
        </div>
      </div>
    </div>
  </footer>
  <script src="JS/style.js"></script>
</body>
</html>
