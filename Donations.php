<!DOCTYPE html>
<html lang="en">
<head>
 
    <title>from</title>
    <link rel="stylesheet" href="CSS/stylesheetdon.css">
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
<?php
   require 'config.php';
   ?>
<header>
          <div class="logo">
            <img src="images/lu.jpg" alt="">
          </div>
          <nav>
            <ul>
              <li><a href="home.php">Home</a></li>
              <li><a href="about.php">About Us</a></li>
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
            <button>Sign Up</button>
          </a>
          </div>
          <div class="search-bar">
            <input type="text" placeholder="Search...">
            <button type="submit">Search</button>
          </div>
        </header>
<div class="container">
  <div class="form-container">
    <h2>Cash Donation</h2>
    <form action="insertdon.php" method="post">

      <p>Fill this details:</p>

      <input type="text" name="fullname" placeholder="Full Name" required><br>
      <input type="text" name="libraryID" placeholder="Library ID" required><br>
      <input type="text" name="cashamount" placeholder="Cash Amount" required>

      <p>Select Your payment method:</p>

      <div class="radio-group">
        <label for="bankDeposit">
          <input type="radio" id="bankDeposit" name="paymentMethod" value="bankDeposit">
          Bank Deposit
        </label>

        <label for="onlinePayment">
          <input type="radio" id="onlinePayment" name="paymentMethod" value="onlinePayment">
          Online Payment
        </label>
      </div>
      <br>
      <button type="submit">Confirm</button>

    </form>
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
</body>
</html>