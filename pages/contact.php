<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact me</title>

    <link rel="stylesheet" href="../css/stylesheet.css">
    <link href="https://fonts.googleapis.com/css2?family=Poiret+One&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <!--Navbar-->
    <nav class="navbar">
        <div class="logo">
            <img src="#" alt="Logo">
        </div>
        <ul class="nav-list">
            <li><a href="index.html">Home</a></li>
            <li><a href="about.html">About Me</a></li>
            <li><a href="gallery.html">Gallery</a></li>
            <li><a href="contact.html" id="current">Contact</a></li>
        </ul>
    </nav>
    <div class="space"></div>
    <div class="contact_banner">
      <h1>CONTACT</h1>
      <P>Photography by Angelia</P>
    </div>
    <div class="space"></div>
    <img src="../images/1920x800.png" class="background_img">
      <div class="container text-start">
        <div class="row">
            <div class="col mb-3">
            <p> 
              <div id="responseMessage">
                <?php
                if (isset($_GET['message'])) {
                    echo $_GET['message'];
                }
                ?>
              </div>
                </form></p>
            </div>
            <div class="col mb-5 col_contact">
                <form action="../php/send-email.php" method="post">
                <h2 style="margin-top: 10px;">Contact formulier</h2>
                <label for="name" style="margin-top: 10px;" require ="form-label" >Name</label>
                <input type="text" class="form-control" id="name" name="name" require placeholder="ex: John Deere">
                <label for="tel" style="margin-top: 10px;" class="form-label" require >Phone number</label>
                <input type="tel" class="form-control" name="tel" id="tel" require placeholder="0612345678">
                <label for="emailadres" style="margin-top: 10px;" class="form-label">Email address</label>
                <input type="email" class="form-control" id="emailadres" name="email" require placeholder="name@example.com">
                <label for="textmessage" style="margin-top: 10px;"  class="form-label">Your message</label>
                <textarea class="form-control" id="textmessage" name="bericht" require rows="5" style="margin-bottom: 10px;"></textarea>
                <input type="submit" class="submit_btn" id="submit">
          </div>
        </div>
      </div>

    <div class="space1"></div>
      <footer class="footer">
        <ul class="contact_gegevens">
          <h3>Contact</h3>
          <li>tel: +31 6 12 34 56 78</li>
          <li>E-mail: angelia.dubois@gmail.com</li>
          <li>...</li>
        </ul>
        <ul class="social_media">
          <h3>Social media</h3>
          <i class="fa-brands fa-instagram fa-xl" style="color: #ffffff;"></i>
          <i class="fa-brands fa-facebook fa-xl" style="color: #ffffff;"></i>
          <i class="fa-brands fa-pinterest fa-xl" style="color: #ffffff;"></i>
        </ul>
        <ul class="footer_nav">
          <h3>Navigation</h3>
          <li><a href="index.html">Home</a></li>
          <li><a href="about.html">About me</a></li>
          <li><a href="gallery.html">Gallery</a></li>
          <li><a href="contact.html" id="current">Contact</a></li>
        </ul>
      </footer>


    <!--Scripts-->
    <script src="https://kit.fontawesome.com/e039207eb6.js" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>