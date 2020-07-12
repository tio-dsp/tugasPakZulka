<!DOCTYPE html>
<html lang="en">
<head>
  <title>Ferrari Fans Club | &copy Setio</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  /* Remove the navbar's default margin-bottom and rounded borders */ 
  .navbar {
    margin-bottom: 0;
    border-radius: 0;
  }
  /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
  .row.content {height: 750px}

  /* Set gray background color and 100% height */
  .sidenav {
    padding-top: 70px;
    background-color: #f1f1f1;
    height: 100%;
  }

  /* Set black background color, white text and some padding */
  /*footer {
    background-color: #555;
    color: white;
    padding: 15px;
    }*/

    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
    #more {
      display: none;
    }
    .footer {
     position: fixed;
     left: 0;
     bottom: 0;
     width: 100%;
     background-color: black;
     color: white;
     text-align: center;
   }
 </style>
</head>
<body>

  <!-- ini awal navbar -->
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <img src="assets/images/Ferrari.png" width="46px" height="46px" alt=""><!-- ini adalah logo -->
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li class="active"><a href="index.php">Home</a></li>
          <li class="active"><a href="event.php">Event</a></li>
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Blog<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="ferrariLife.php">Ferrari Life</a></li>
              <li><a href="legends.php">Legends</a></li>
            </ul>
          </li>
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Club<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="joinFamily.php">Join Ferrari Family</a></li>
              <li><a href="testimonial.php">Testimonial</a></li>
              <li><a href="sponsor.php">Sponsor</a></li>
              <li><a href="clubLifes.php">Club Lifes</a></li>
            </ul>
          </li>
          <li><a href="contactUs.php">Contact Us</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="register.php"><span class="glyphicon glyphicon-log-in"></span> Register</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- ini adalah akhir navbar -->

  <!-- ini adalah awal halaman content -->
  <div class="container-fluid text-center">    
    <div class="row content">
      <div class="col-sm-8 text-justify" style="padding-top: 40px"> 
        <h1 align="center">Komunitas Ferrari Buka Bersama Anak Yatim</h1>
        <img src="assets/images/bukber.jpg" alt="" width="840px" height="450px"><br><br>
        <p><b>Jakarta</b> - Pecinta mobil sport yang tergabung dalam Ferrari Owners Club Indonesia (FOCI) menggelar acara buka puasa bersama sekaligus memberikan santunan kepada 1.000 anak yatim piatu di Gelanggang Remaja Jakarta Utara, Minggu (11/6/2017).
          Selain menyantuni 1.000 anak yatim piatu, FOCI juga sekaligus memberikan bantuan atau donasi kepada lima yayasan yatim piatu di Jakarta.<span id="dots">...</span>
          <span id="more">
            Ketua Dewan Pembina FOCI, Ahmad Sahroni, menjelaskan, acara yang digelar merupakan bagian dari acara sosial yang kerap diadakan komunitas pencinta mobil Ferrari sebagai bentuk kepedulian pada masyarakat.
            "Ini adalah silahturahmi rutin. Kali ini kami mengadakan buka bersama dengan member sekaligus memberikan santunan pada 1.000 anak yatim," kata Ahmad Sahroni.
            Menurutnya, momentum bulan puasa merupakan saat yang tepat untuk saling berbagi kepada sesama.
            Diharapkan kedepannya acara serupa bisa terus diselenggarakan oleh komunitas yang mengedepankan kebersamaan itu.
            "Ini bagian dari tanggungjawab FOCI kepada anak yatim piatu. Kita berbagi bagi seluruh umat yang ada," kata Ahmad Sahroni.
          </span>
        </p>
        <button onclick="myFunction()" id="myBtn">Read more>>></button><br><br>
      </div>
      <!-- ini adalah akhir halaman content -->

      <!-- ini adalah awal halaman banner samping kanan -->
      <div class="col-sm-4 sidenav">
        <div class="well">
          <b><h5>NEW Ferrari GT3 458 </h5></b>
          <iframe width="380" height="315" align="center" src="https://www.youtube.com/embed/gJ7SljP_vuA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="well">
          <b><h5>Novitec Ferrari 488 GTB N-LARGO</h5></b>
          <iframe width="380" height="315" src="https://www.youtube.com/embed/Foie-kncVyM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="well">
          <b><h5>Satin White Ferrari LAFERRARI on the road in London!</h5></b>
          <iframe width="380" height="315" src="https://www.youtube.com/embed/NTUrs721ndo?start=23" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>
    </div>
    <!-- ini adalah akhir halaman banner -->

    <!-- ini adalah footer -->
    <div class="footer">
      <p>Ferrari Fans Club | &copy Setio</p>
    </div>
  </div>

  <script>
    function myFunction() {
      var dots = document.getElementById("dots");
      var moreText = document.getElementById("more");
      var btnText = document.getElementById("myBtn");

      if (dots.style.display === "none") {
        dots.style.display = "inline";
        btnText.innerHTML = "Read more"; 
        moreText.style.display = "none";
      } else {
        dots.style.display = "none";
        btnText.innerHTML = "Read less"; 
        moreText.style.display = "inline";
      }
    }
  </script>
</body>
</html>
