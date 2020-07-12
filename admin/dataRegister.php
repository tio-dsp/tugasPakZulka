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
          <li><a href="">Data Register</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- ini adalah akhir navbar -->
  <!-- ini adalah awal halaman content -->
  <div class="container-fluid" style="padding-top: 40px;">    
    <div class="row content">
      <h2 align="center">Data Register</h2>
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $sql = "SELECT*FROM tb_user";
          $result = $conn->query($sql);

          if($result->num_rows > 0){
              //Akan dijalankan jika recordnya ada
            while ($row = $result->fetch_assoc()) { ?>
            <tr>
             <td><?=$row['id_user']?></td>
             <td><?=$row['nama_user']?></td>
             <td><?=$row['email_user']?></td>
             <td>
              <a onclick="return confirm('Anda yakin menghapus record ini?')" class="btn btn-danger" href="prosesDeleteRegister.php?id=<?=$row['id_user']?>">Delete</a>
            </td>
          </tr>
          <?php
        }
      }else {
           //akan dijalankan jika recordnya kosong
       echo "<tr><td colspan='3'>Record masih kosong</td></tr>";
     }

     ?>
   </tbody>
 </table>
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

