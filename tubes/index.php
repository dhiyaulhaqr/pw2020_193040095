<?php
// menghubungkan dengan file php lainnya
require 'php/functions.php';
// melakukan query
if (isset($_GET['cari'])) {
  $keyword = $_GET['keyword'];
  $pakaian = query("SELECT * FROM pakaian WHERE
                Foto LIKE '%$keyword%' OR
                Nama LIKE '%$keyword%' OR
                Ukuran LIKE '%$keyword%' OR
                Warna LIKE '%$keyword%' OR
                Stok LIKE '%$keyword%' OR
                Harga LIKE '%$keyword%' ");
} else {
  $pakaian = query("SELECT * FROM pakaian");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />

  <!-- my css -->
  <link rel="stylesheet" href="css/style.css">

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>d'Outfit</title>
  

</head>

<body bgcolor="lavender" id="home" class="scrollspy">
  <!--navbar -->
  <div class="navbar-fixed">
    <nav class="indigo accent-1">
      <div class="container">
        <div class="nav-wrapper">
          <a href="#home" class="brand-logo">d'Outfit</a>
          <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons"></i></a>
          <ul class="right hide-on-med-and-down">
            <li><a href="https://www.google.com/maps/place/Kec.+Purwadadi,+Kabupaten+Subang,+Jawa+Barat/@-6.4408117,107.6143908,12z/data=!3m1!4b1!4m5!3m4!1s0x2e693ff1a7d60d21:0x6b2da51d11b2b4e7!8m2!3d-6.4435345!4d107.680727">Location</a></li>
            <li><a href="https://www.instagram.com/muhunbusanapwd/">Contact Us</a></li>
            <li><a href="#Buy Now">Buy Now</a></li>
            <li><a href="php/login.php">Log In</a> </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>

  <!-- sidenav -->
  <ul class="sidenav" id="mobile-nav">
    <li><div class="user-view">
      <div class="background">
        <img src="img/potp4.jpg">
      </div>
      <a href="#user"><img class="circle" src="img/9.jpg"></a>
      < a href="#name"><span class="white-text name">d'Outift</span></a>
      </div></li>

      <li><a href="https://www.google.com/maps/place/Kec.+Purwadadi,+Kabupaten+Subang,+Jawa+Barat/@-6.4408117,107.6143908,12z/data=!3m1!4b1!4m5!3m4!1s0x2e693ff1a7d60d21:0x6b2da51d11b2b4e7!8m2!3d-6.4435345!4d107.680727">Location</a></li>
      <li><a href="https://www.instagram.com/muhunbusanapwd/">Contact Us</a></li>
      <li><a href="php/login.php">Sign In</a></li>
   
  </ul>
  <div class="slider">
    <ul class="slides">
      <li>
        <img src="assets/img/slide.jpg"> 
        <div class="caption center-align">
          <h3>Welcome</h3>
          <h6>and</h6>
          <h5 class="light grey-text text-lighten-3">Happy Shopping!</h5>
        </div>
      </li>
      <li>
        <img src="assets/img/outfits.jpg"> 
        <div class="caption right-align">
          <h3>Fashion</h3>
          <h5 class="light grey-text text-lighten-3">Trusted!!</h5>
        </div>
      </li>
      <li>
        <img src="assets/img/outfit.jpg"> 
        <div class="caption left-align">
          <h3>Welcome</h3>
          <h6>and</h6>
          <h5 class="light grey-text text-lighten-3">Enjoy The Shopping</h5>
        </div>
      </li>
    </ul>
  </div>


  <!-- form -->
  
  <div class="container">
    <h5 class="light center grey-text text-darken-3">Butiq</h5>
  <form class="col s2" action="" method="get">
    <div class="row">
      <div class="input-field col  s2">
        <input type="text" name="keyword" autocomplete="off">
        <a class="waves-effect indigo accent-1 btn-small" type="submit" name="cari">Search
          <i class="material-icons right">search</i>
      </a>
      </div>
    </div>
  </form>
  </div>  
  <div class="row">
    <?php if (empty($pakaian)) : ?>
      <h1>Data tidak ditemukan</h1>
    <?php else : ?>
      <?php foreach ($pakaian as $p) : ?>
      <div class="col s12 m2">
        <div class="card">
        <div class="card-image">
          <img src="assets/img/<?= $p["Foto"] ?>" style="width: 200px;height:300px;" class="responsive-img materialboxed">
          <p class="foto">   
            </div>
          </p>
        <div class="card-action">
          <a href="php/detail.php?id=<?= $p['id'] ?>">
            <?= $p["Nama"] ?>
          </a>
        </div>
      </div>
    </div>
    <?php endforeach; ?>
  <?php endif; ?>
  </div> 

  <!-- Buy Now -->
    <section id="Buy Now" class="Buy Now scrollspy">
      <div class="parallax-container scrollspy">
        <div class="parallax"><img src="assets/img/slide.jpg"></div>
          <h3 class="light grey-text text-darken-2 center">Buy Now</h3>

          <div class="container">
          <div class="row">
      <form>
        <div class="col  m6 s9">
        <div class="card-panel">
          <h5>Payment Details Form</h5>
          <div class="input-field">
            <input type="text" name="name" id="name"
            required class="validate">
            <label for="name">Name</label>
          </div>

        <div class="input-field">
          <input type="text" name="email" id="email"
          required class="validate">
          <label for="email">Email</label>
        </div>
        <div class="input-field">
          <input type="text" name="phone" id="phone"
          required class="validate">
          <label for="phone">Phone</label>
        </div>
        <div class="input-field">
          <input type="text" name="adress" id="adress"
          required class="validate">
          <label for="adress">Adress</label>
        </div>
        <label for="payment">Payment Method</label>
          <select class="browser-default">
            <div class="input-field col s6">
            </div>
              <option value="" disabled selected>Payment Method</option>
              <option value="1">Debit</option>
              <option value="2">Credit Card</option>
            </select>
          </div>
          </div>
      </form>
      
      <form>
        <div class="col m6 s9">
        <div class="card-panel">
          <h5>Ordered Product</h5>
          <div class="input-field">
            <input type="text" name="nama produk" id="nama produk"
            required class="validate">
            <label for="nama produk">Nama Product</label>
          </div>
        <div class="input-field"> 
                    <label for="ukuran"></label>
                    <select class="browser-default" name="Ukuran" id="ukuran" required class="active">
                    <option value="" disabled selected>------Pilih Ukuran-----</option>
                    <option value="All Size">All Size</option>
                    <option value="L">L</option>
                    <option value="M">M</option>
                    <option value="S">S</option>
                    <option value="XL">XL</option>
                    </select>
          </div>
          <div class="input-field"> 
                    <label for="warna"></label>
                    <select class="browser-default" name="Warna" id="warna" required class="active">
                    <option value="" disabled selected>------Pilih Warna-----</option>
                    <option value="All Size">All Size</option>
                    <option value="Army">Army</option>
                    <option value="Dusty Pink">Dusty Pink</option>
                    <option value="Light Blue">Light Blue</option>
                    <option value="Grey">Grey</option>
                    <option value="Black">Black</option>
                    <option value="Maroon">Maroon</option>
                    <option value="White">White</option>
                    <option value="Choco">Choco</option>
                    <option value="Yellow">Yellow</option>
                    <option value="Cream">Cream</option>
                    <option value="Coklat Susu">Coklat-Susu</option>
                    <option value="Brown">Brown</option>
                    </select>
                </div>
                <div class="input-field">
                    <input type="text" name="item" id="item"
                    required class="validate" autocomplete="off"> 
                    <label for="item" class="active">Item</label>
                </div>
              </div>
            </div>
            <div style="text-align: center">
            <button type="submit" class="btn indigo accent-1">Buy</button>
            </div>
          </div>
        </form>
      </div>
          </div>
          </div>
      </div>
  </section>
  
     
  <!-- footer -->
    <footer class="indigo accent-1 white-text center">
      <p> ©Dhiyaulhaqr - copyright2020</p>
    </footer>


    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
      <script>
            const sideNav = document.querySelectorAll('.sidenav');
            M.Sidenav.init(sideNav);

            const slider = document.querySelectorAll('.slider');
            M.Slider.init(slider, {
                indicators:false,
                height:250,
                transition:600,
                interval: 3000
            });

            const parallax = document.querySelectorAll('.parallax');
            M.Parallax.init(parallax);

            const materialbox = document.querySelectorAll('.materialboxed');
            M.materialbox.init(materialbox);

            const scrollspy = document.querySelectorAll('.scrollspy');
            M.ScrollSpy.init(scroll, {
                scrollOffset:60
                });
                document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems, options);
  });
        </script>


</body>

</html>