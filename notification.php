<!DOCTYPE html>
<html>
    <head>
        <title>page</title>
        <link rel="stylesheet" href="CSS/notification.css">
        <link rel="stylesheet" href="CSS/style.css">
    </head>
    <body>

      <!-- Header -->
      <header>
        <div class="logo">
          <img src="images/lu.jpg" alt="Your Website Logo">
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
          <button>Sign Up</button>
        </a>
        </div>
        <div class="search-bar">
          <input type="text" placeholder="Search...">
          <button type="submit">Search</button>
        </div>
      </header>
        <div class="container">
            <div class="wrapper">
                <div class="top-bar">
                    <div class="title">
                        <p class="title-text"> Notification</p>
                        <p class="num" id="num">3</p>
                    </div>
                    <a href="#" class="read" id="read">Mark all as read</a>
                </div>
                <div class="notifications">
                    <!-- single notification starts-->
                    <div class="single-box unseen">
                        <div class="avatar">
                            <img src="images/su.webp" alt="">
                        </div>
                        <div class="box-text">
                            <p class="notifi">
                                <a href="#" class="name">Mark Webber</a> reacted to your recent post<a href="#" class="post">my first day today!</a>
                                <span class="dot"></span>
                            </p>
                            <p class="time">1m ago</p>
                        </div>
                    </div>

                    <!-- single notification end-->
                    <!-- single notification starts-->
                    <div class="single-box unseen">
                        <div class="avatar">
                            <img src="images/hu.webp" alt="">
                        </div>
                        <div class="box-text">
                            <p class="notifi">
                                <a href="#" class="name">Angela Gray</a> followed you
                                <span class="dot"></span>
                            </p>
                            <p class="time">5m ago</p>
                        </div>
                    </div>

                    <!-- single notification end-->
                    <!-- single notification starts-->
                    <div class="single-box unseen">
                        <div class="avatar">
                            <img src="images/men.webp" alt="">
                        </div>
                        <div class="box-text">
                            <p class="notifi">
                                <a href="#" class="name">Jacob Thompson</a> has joined your group <a href="#" class="group"> library club</a>
                                <span class="dot"></span>
                            </p>
                            <p class="time">1 day ago</p>
                        </div>
                    </div>

                    <!-- single notification end-->
                    <!-- single notification starts-->
                    <div class="single-box with-mssg">
                        <div class="avatar">
                            <img src="images/man.webp" alt="">
                        </div>
                        <div class="box-text">
                            <p class="notifi">
                                <a href="#" class="name">Rizky Hasanuddin</a> sent you a private message
                            </p>
                            <p class="time">5 days ago</p>
                            <div class="message">
                                <p>Hello, thanks for setting up the library club. i've been a member for a few weeks now and i'm already having lots of fun and improving my knowledge.</p>
                            </div>
                        </div>
                    </div>

                    <!-- single notification end-->
                    <!-- single notification starts-->
                    <div class="single-box comment">
                        <div class="left">
                            <div class="avatar">
                                <img src="images/bu.webp" alt="">
                            </div>
                            <div class="box-text">
                                <p class="notifi">
                                    <a href="#" class="name">Kimbly Smith</a> commented on your picture
                                </p>
                                <p class="time">1 week ago</p>
                            </div>
                        </div>
                        <div class="img-box">
                            <img src="images/book.webp" alt="">
                        </div>
                    </div>

                    <!-- single notification end-->
                    <!-- single notification starts-->
                    <div class="single-box unseen">
                        <div class="avatar">
                            <img src="images/ku.webp" alt="">
                        </div>
                        <div class="box-text">
                            <p class="notifi">
                                <a href="#" class="name">Nathon Peterson</a> reacted to your recent post<a href="#" class="post"> donation books.</a>
                            </p>
                            <p class="time">2 week ago</p>
                        </div>
                    </div>

                    <!-- single notification end-->
                    <!-- single notification starts-->
                    <div class="single-box unseen">
                        <div class="avatar">
                            <img src="images/beautiful-woman.webp" alt="">
                        </div>
                        <div class="box-text">
                            <p class="notifi">
                                <a href="#" class="name">Anna Kim</a> left the group <a href="#" class="group"> library club</a>
                            </p>
                            <p class="time">2 week ago</p>
                        </div>
                    </div>

                    <!-- single notification end-->
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
                <img src="images/database.jpg" alt=""  style="float: left;">
            </div>
            <p>Database:</p>
            <p>NEWSLETTERS/SOCIAL</p>
          </div>
          <div class="footer-column">
            <div class="picture">
                <img src="images/time.jpg" alt=""  style="float: left;">
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

        <script src="JS/notification.js"></script>
    </body>
</html>