<?php
require_once "koneksi.php";
?>

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
    padding-top: 80px;
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
      </div>
    </div>
  </nav>
  <!-- ini adalah akhir navbar -->
  <!-- ini adalah awal halaman content -->
  <div class="container-fluid text-center">    
    <div class="row content">
      <div class="col-md-8 text-justify" align="center" style="padding-top: 70px">
        <h2 align="center">Register</h2>
        <form action="prosesInsertUser.php" method="post">
          <div class="form-group">
            <label for="namaUser"></label>
            <input type="text" class="form-control" placeholder="Masukkan Nama" name="namaUser" autocomplete="off" required>
          </div>
          <div class="form-group">
            <label for="emailUser">Email:</label>
            <input type="email" class="form-control" placeholder="Masukkan Email" name="emailUser" autocomplete="off" required>
          </div>
          <div class="form-group">
            <label for="passwordUser">Password</label>
            <input type="password" class="form-control" placeholder="Masukkan Password" name="passwordUser" autocomplete="off" required> 
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>

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

