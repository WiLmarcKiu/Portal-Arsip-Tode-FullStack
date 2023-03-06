<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lilita+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lilita+One&family=Montserrat+Subrayada&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lilita+One&family=MonteCarlo&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Henny+Penny&family=Playfair+Display&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bad+Script&family=Henny+Penny&family=Playfair+Display&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bad+Script&family=Bangers&family=Henny+Penny&family=Playfair+Display&display=swap" rel="stylesheet">
    <!--- link animasi tulisan --->
    <link rel="stylesheet" href="animate.css-master/animate.css" />

    <title>Si Antik</title>
    <style>
      #navbarNavDropdown ul li a:hover{
        color: #00FFFF;
      }
      .navbar {
        font-family: 'Bangers', cursive;
        font-size: 15px;
      }
      .modal {
        font-family: 'Bangers', cursive;
      }
    </style>
  </head>
  <body>
<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#" style="font-family: 'Bad Script', cursive; font-size: 18px; font-weight: 800;">
      Si Antik
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="tentang_kami.php">TENTANG KAMI</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="kegiatan.php">KEGIATAN</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="berita.php">BERITA</a>
        </li>
        <!-- <li class="nav-item dropdown">
          <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            BERITA
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li> -->&nbsp;&nbsp;
        <button type="button" class="btn btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal" style="border-radius: 12px; height: 28px; margin-top: 5px; background-color: #00FFFF;">&nbsp;&nbsp;Login&nbsp;&nbsp;</button>

      </ul>
    </div>
  </div>
</nav>
<!-- end nav -->


  <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="d-block w-100" style="background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(gambar/slideA.jpg); background-size: cover; height: 665px; color:#FFF; font-family: 'Staatliches', cursive; font-weight:bold; text-align: center;" alt="...">

        <h1 class="display-5 animated bounceInLeft"
      style="padding-top:230px; animation-delay:1s; text-shadow:1px 1px 1px rgba(0,0,0,0.9);">
      SELAMAT <span style="color:#00FFFF;">DATANG</span></h1>
      <p class="lead animated bounceInRight" style="animation-delay:2s; text-shadow:1px 1px 1px rgba(0,0,0,0.7);">Di Portal SIANTIK ( Sistem Informasi Administrasi Kelurahan Tode Kisar ).</p>
      <a href="#"><button type="button" id="watch" class="btn animated zoomIn" style="animation-delay:3s; text-shadow:1px 1px 1px rgba(0,0,0,0.7); border-radius:45px; border-color: #00FFFF; border-width: 2px; color: #00FFFF">      WATCH VIDEO    </button></a>

      </div>
    </div>
    <div class="carousel-item">
      <div class="d-block w-100" style="background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(gambar/slideB.jpg); background-size: cover; height: 665px; color:#FFF; font-family: 'Staatliches', cursive; font-weight:bold; text-align: center;" alt="...">

        <h1 class="display-5 animated bounceInLeft"
      style="padding-top:230px; animation-delay:1s; text-shadow:1px 1px 1px rgba(0,0,0,0.9);">
      SELAMAT <span style="color:#00FFFF;">DATANG</span></h1>
      <p class="lead animated bounceInRight" style="animation-delay:2s; text-shadow:1px 1px 1px rgba(0,0,0,0.7);">Di Portal SIANTIK ( Sistem Informasi Administrasi Kelurahan Tode Kisar ).</p>
      <a href="#"><button type="button" id="watch" class="btn animated zoomIn" style="animation-delay:3s; text-shadow:1px 1px 1px rgba(0,0,0,0.7); border-radius:45px; border-color: #00FFFF; border-width: 2px; color: #00FFFF">      WATCH VIDEO    </button></a>

      </div>
    </div>
    <div class="carousel-item">
      <div class="d-block w-100" style="background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(gambar/slideC.jpg); background-size: cover; height: 665px; color:#FFF; font-family: 'Staatliches', cursive; font-weight:bold; text-align: center;" alt="...">

        <h1 class="display-5 animated bounceInLeft"
      style="padding-top:230px; animation-delay:1s; text-shadow:1px 1px 1px rgba(0,0,0,0.9);">
      SELAMAT <span style="color:#00FFFF;">DATANG</span></h1>
      <p class="lead animated bounceInRight" style="animation-delay:2s; text-shadow:1px 1px 1px rgba(0,0,0,0.7);">Di Portal SIANTIK ( Sistem Informasi Administrasi Kelurahan Tode Kisar ).</p>
      <a href="#"><button type="button" id="watch" class="btn animated zoomIn" style="animation-delay:3s; text-shadow:1px 1px 1px rgba(0,0,0,0.7); border-radius:45px; border-color: #00FFFF; border-width: 2px; color: #00FFFF">      WATCH VIDEO    </button></a>

      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- end carousel -->

        <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div class="d-grid gap-2 col mx-auto">
                    <a href="home.php" class="btn btn-outline-primary">Si Antik</a>
                    <a href="http://keltodekiser.lp3mstikomuyelindo.ac.id/" class="btn btn-outline-primary">Si Ipu</a>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-sm btn-outline-danger" data-bs-dismiss="modal">Tutup</button>
                </div>
              </div>
            </div>
          </div>



<script>
      var nav = document.querySelector('nav');

      window.addEventListener('scroll', function () {
        if (window.pageYOffset > 20) {
          nav.classList.add('bg-dark', 'shadow');
        } else {
          nav.classList.remove('bg-dark', 'shadow');
        }
      });
    </script>

    <!-- GetButton.io widget -->
      <script type="text/javascript">
        (function () {
          var options = {
            whatsapp: "+6281339194370", // WhatsApp number
            call: "+6281339194370", // Call phone number
            call_to_action: "Hubungi Kami", // Call to action
            button_color: "#00FFFF", // Color of button
            position: "right", // Position may be 'right' or 'left'
            order: "call,whatsapp", // Order of buttons
          };
          var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
          var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
          s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
          var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
        })();
      </script>
      <!-- /GetButton.io widget -->


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    
    
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->

  </body>
</html>
