<?php
require_once "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
  <!-- ini awal carousel -->
  <div id="demo" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>
    </ul>  
    <!-- The slideshow -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="assets/images/rsz_macaron.jpg" width="1100" height="500" style="width:100%; height:400px">
      </div>
      <div class="carousel-item">
        <img src="assets/images/rsz_ta5fph.jpg" width="1100" height="500" style="width:100%; height:400px">
      </div>
      <div class="carousel-item">
        <img src="assets/images/rsz_pa4pb8.jpg" width="1100" height="500" style="width:100%; height:400px">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div>
  <!-- ini akhir carausel -->

  <div class= "countainer-fluid">
    <div class="row">
      <div class= "col-12 bg-primary text-light">
        <!-- <img src="assets/images/macaron.jpg" alt=""> -->
        <!-- <source srcset="assets/images/rsz_macaron.jpg" type="image/svg+xml"> -->
         <!--  <img src="assets/images/rsz_macaron.jpg" class="img-fluid img-thumbnail" alt="..." style="width:100%; height:400px" > -->
       </div>

       <!-- awal navbar -->
       <nav class="navbar col-12 navbar-expand-lg navbar-light sticky-top" style="background-color: #ff66b3;">
        <a class="navbar-brand" href="LatihanBootstrap4.html">Navigation</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="">Home</a>
            </li> 
          </ul>
          <form class="form-inline my-2 my-lg-0 ">
            <input class="form-control mr-sm-2" type="text" placeholder="search" > 
            <button class="btn btn-success my-2 my-sm-0" type="button" >search</button>
          </form>
        </div>  
      </nav>

      <div class="container" >
        <h2 align="center">FORM INSERT USER</h2>
        <form action="prosesInsertUser.php" method="post">

          <div class="form-group">
            <label for="namaUser"></label>
            <input type="text" class="form-control" placeholder="Masukkan Nama" name="namaUser" autocomplete="off" required>
          </div>
          <div class="form-group">
            <label for="emailUser"></label>
            <input type="email" class="form-control" placeholder="Masukkan Email" name="emailUser" autocomplete="off" required>
          </div>
          <div class="form-group">
            <label for="passwordUser"></label>
            <input type="password" class="form-control" placeholder="Masukkan Password" name="passwordUser" autocomplete="off" required>
            
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <br>
        <!-- Tabel Data -->

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
                  <a onclick="return confirm('Anda yakin menghapus record ini?')" class="btn btn-danger" href="prosesDeleteUser.php?id=<?=$row['id_user']?>">Delete</a>
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

   </div>
   <div class="col-12 col-md-4 col-lg-2" style="background-color: #ffb3d9;" align="justify"><img src="assets/images/business-icon.jpg" height="200" alt="" style="float: left;">
    <p>
      Halo, sahabat dessert yuk kunjungi store terbaru kami di jl.Mutiara-Kota Bekasi adipisicing elit. Esse veritatis sequi quia saepe dolore officiis in earum, et, facere voluptates a quo alias incidunt animi ea enim nesciunt. Mollitia velit quibusdam eum qui, vero voluptates molestiae ea delectus fuga provident, aliquid iste consectetur, adipisci sunt harum. Reprehenderit, earum veritatis. Consequatur pariatur, dolor obcaecati architecto velit commodi? Voluptatibus aperiam pariatur eligendi hic maxime repellat temporibus culpa fuga magnam soluta id cum quasi praesentium accusamus voluptas aspernatur in, neque ad minus doloribus numquam quam ab non mollitia a. Eaque, asperiores similique, eius vel pariatur possimus fuga natus et quia soluta cum dignissimos repellat quod officiis quibusdam sequi laborum dolores repellendus aspernatur nam consequuntur quidem sed sit. Debitis explicabo deleniti, molestias voluptate expedita quaerat et quod vel, quia sit odio deserunt magnam ex necessitatibus nam pariatur dolores blanditiis fuga voluptatem autem dicta officia repellat dolorum sapiente! Dolor deleniti dolores impedit voluptatibus consequuntur quibusdam reiciendis nostrum, nulla saepe. Ea magnam at porro amet enim vel, impedit nemo repellat sequi non! Temporibus quae magni cum eum aspernatur, blanditiis recusandae nisi beatae doloribus, ipsam asperiores magnam quas quasi dolor, dolores deserunt a libero perferendis odit harum ex! Excepturi officiis eos, fugiat nihil perspiciatis repudiandae mollitia aperiam dolor! Suscipit quaerat doloribus officia maxime voluptatibus, inventore eius, maiores fugiat? Earum optio soluta porro eum consequatur asperiores, incidunt libero ducimus tenetur, provident molestias quaerat pariatur doloremque quas reprehenderit in, quae officiis amet quibusdam odio id dignissimos. Ipsam voluptatibus laborum culpa expedita, minima esse veritatis voluptate possimus inventore soluta, ut repellat, quia voluptates labore explicabo consequatur architecto error fugiat eius! Doloribus unde mollitia obcaecati voluptatem ipsum magni, officia, qui facilis voluptas, atque inventore quod ab impedit sapiente saepe perspiciatis nulla quos reprehenderit! Quas voluptates necessitatibus nisi magnam, expedita voluptatibus. Expedita quas, ab odio sequi, ipsam molestiae porro perspiciatis architecto, nobis provident, quo repudiandae numquam incidunt labore saepe explicabo nisi voluptatum nam. Architecto quas, aliquid ullam consectetur modi fuga commodi ducimus iusto officiis provident, sint distinctio, tenetur, neque magni alias. Libero, laboriosam eos atque voluptas eaque iusto quam facilis. Voluptatem dignissimos suscipit culpa ratione, necessitatibus corporis asperiores eaque nostrum cupiditate mollitia vero at velit ad sunt nemo rerum cum nesciunt, amet pariatur, quos reprehenderit. Eligendi, ex non nemo. Adipisci placeat a minus perferendis harum officiis recusandae eos aspernatur voluptatibus veniam magnam deserunt ut earum error expedita laborum voluptas necessitatibus facilis labore nulla distinctio maiores eius, officia reprehenderit debitis! Adipisci dolore eius cupiditate totam similique, quod labore nisi quam reprehenderit autem sit aut atque fugit maiores quia error nam voluptatum voluptates quibusdam provident laborum aliquid illo dolores at explicabo. Dolores maiores maxime quo dignissimos blanditiis officia mollitia quidem quos eius. Qui, quibusdam deserunt officia in, officiis assumenda! Excepturi maiores nisi eligendi repellat accusamus, officiis quos facere qui tenetur, adipisci voluptatem necessitatibus quisquam illo eveniet? Voluptas repellendus est hic nulla obcaecati, in fugit tempora sit deleniti vitae, inventore, nemo eius, odio voluptatem voluptates accusantium! Praesentium laudantium harum nulla, molestias eveniet, eligendi ad quis ducimus, explicabo odio est accusantium sunt incidunt cum, voluptatibus dicta nobis odit sint hic minima soluta nihil quae amet porro perferendis? Sequi officiis provident in, expedita debitis aperiam laudantium, dolorem rem iste totam harum nam minus quidem laboriosam quae cupiditate adipisci voluptate, dolor voluptatum recusandae ex. Impedit temporibus sapiente, necessitatibus ipsum iste! Molestias a eligendi odio veniam quam iste impedit sit, quas ipsum similique veritatis cupiditate, repellendus inventore iusto vel accusantium quo voluptatem error quis provident voluptatum animi culpa natus? Porro voluptate veniam sed, molestias quo amet, quam aliquid non dignissimos maiores ullam natus nobis maxime unde alias totam quas ipsam. Iure delectus rerum a amet nemo illo incidunt pariatur. Ab blanditiis soluta doloribus, tempore at. Libero nostrum dolore autem eveniet architecto sit. Minus corporis ad esse et debitis nesciunt pariatur. Eligendi necessitatibus magnam quis qui distinctio voluptates, quibusdam delectus cupiditate molestiae possimus beatae. Omnis architecto est impedit reprehenderit cumque, numquam doloribus sed totam vitae ea? Optio eligendi architecto obcaecati ipsam, quisquam earum labore quo voluptas ea quae aspernatur, provident vero blanditiis ex totam aliquid a repudiandae veritatis explicabo tempore quis quas. Eum, iusto quos, debitis saepe magni laboriosam? Ullam quaerat adipisci labore eius, dolores hic cumque quos quia libero voluptatibus optio temporibus tempora voluptatum excepturi iure laboriosam fugiat, possimus sed velit blanditiis sequi minus maiores illo dolore odio! Nam id illo repellat minus beatae maxime doloremque accusamus quia molestias, adipisci porro quasi consequuntur totam dolorem quaerat saepe commodi. Doloremque maiores, incidunt deleniti explicabo eligendi ab inventore minima rem ratione saepe ea tempore amet excepturi. Omnis, fugit. Quam, explicabo, maiores! Ipsa, cum sequi, doloremque quod sed harum ab, placeat vel quidem tempore, ad modi quaerat expedita. Consectetur blanditiis, optio rerum accusantium a corporis qui minima repellendus odio cumque, quidem quasi, doloremque distinctio natus eos ipsa. Fuga maiores illo dolor neque nostrum, omnis autem reprehenderit ducimus voluptatum, porro ratione provident officiis asperiores, quam ipsa quod aperiam aspernatur suscipit veniam modi! Eaque aliquid qui aliquam quis, iusto praesentium error labore, doloremque officia vel nemo!
    </p>
  </div>
  <div class="col-12 text-light" align="center" style="background-color: #99e6ff;">&copy Setio 2020</div>
</div>
</div>
<script src="assets/js/jquery-3.5.1.slim.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>