<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login/Admin</title>
    
    <link rel="stylesheet" href="css/loginstyle.css">
    <link rel="stylesheet" href="css/style.css">

    
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
        <li><a href="notifiication.php">Notification</a></li>
        <li><a href="Donations.php">Donation</a></li>
      </ul>
    </nav>
    <div class="header-buttons">
    <a href="login.php">
      <button>Login</button>
    </a>
    <a href="SignUp.php">
      <button>Sign Up</button>
    </a>
    </div>
    <div class="search-bar">
      <input type="text" placeholder="Search...">
      <button type="submit">Search</button>
    </div>
  </header>

 
  
  <div class="wrapper">
    <div class="login-container">

        <div class="login-title">Login</div>

        <form method = "post" action = "insertlogin.php">
        <input type="text" class="input-field" placeholder="Library ID" name="LIBRARY_ID">
        <input type="password" class="input-field" placeholder="Password" name="Password">

        <div class="login-forget-container">
            <label class="checkbox-label">
            <input type="checkbox" class="checkbox-input"> Remember me</label>
            <a href="#" class="forget-password-link">Forget my password</a>
        </div>

        <button type="submit" class="login-button" name="submit">Login</button>
        <div class="terms-text">Still don't have an account?</div>
        <div class="signup-button">Sign up</div><br>
        <div class="term"><a href="terms and conditions.php" class="terms">Terms and conditions</a>
        </div>


        
        
    </div>
    
    
  </div>
    
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

    <script src="JS/loginscript.js"></script>

</body>




</html>