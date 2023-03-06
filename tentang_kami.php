<?php 
include 'koneksi.php';
include 'menu.php';
 ?>
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
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&family=Roboto&display=swap" rel="stylesheet">
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
      .overlay {
        position: absolute;
        transition: all .3s ease;
        opacity: 0;
        background-color: rgba(0,0,0,0.5);
      }
      .text {
        color: white;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
        font-size: 14px;
        text-align: center;
        line-height: 6px;
        font-family: 'Bad Script', cursive;
      }
      .card:hover .overlay{
        opacity: 1;
      }
      .overlayPopup {
        width: 100%;
        height: 0;
        bottom: 0;
        left: 0;
      }
      .card:hover .overlayPopup{
        height: 100%;
      }
    </style>
  </head>
  <body>

<!-- berita -->      
<div class="container animated fadeInDown">
  <div class="row" style="font-family: 'Bangers', cursive; text-align: center; padding-top: 80px; animation-delay: 1s;">
    <h1>TENTANG KAMI</h1>
  </div>
</div>
<div class="container animated fadeInLeft">
  <div class="row"  style="text-align: center; justify-content: center;">
    <div class="col-md-8 mb-3 mt-3">
      <p>Tode Kisar adalah sebuah kelurahan di wilayah Kecamatan Kota Lama, Kota Kupang, Provinsi Nusa Tenggara Timur, Indonesia. Kelurahan Tode Kisar terdiri atas 7 rukun tetangga dan 3 rukun warga. Kelurahan Tode Kisar merupakan pemekaran dari Kelurahan Oeba.</p>
      <p>Kelurahan Tode Kisar memiliki Luas wilayah 10,1 ha.</p>
    </div>
  </div>
</div>
<!-- end berita --> 

<div class="container-fluid pt-5 animated fadeInUp" style="animation-delay: 0.5s;">
  <div class="row pt-3" style="background-color: #5F6061;">
    <b>
      <p style="font-size: 20px; color: #FFF; text-align: center;font-family: 'Bad Script', cursive;">LOKASI</p>
    </b>
    <hr style="color: #FFF;">
  </div>
  <div class="row" style=" justify-content: center; background-color: #5F6061;">
    <div class="col-md-2 mt-3 mb-3" style=" color: #FFF; font-size: 11px;">
      <?php 
        // query ambil data
        $ambil = $koneksi->query("SELECT * FROM instansi");
        $pecah = $ambil-> fetch_assoc();
       ?>
       <b>
         <p><?php echo($pecah['nama_instansi']); ?></p>
         <p><?php echo($pecah['nama_pemerintahan']); ?></p>
         <p><?php echo($pecah['nama_kecamatan']); ?></p>
         <p><?php echo($pecah['alamat']); ?></p>
       </b>
    </div>
    <div class="col-md-4 mt-3 mb-3" style="text-align: center;">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3927.2769504915605!2d123.5826448142098!3d-10.158128637218464!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2c569ced75b7c38d%3A0x47b792021c266093!2sKantor%20Lurah%20Tode%20Kisar%20Kec.%20Kota%20Lama!5e0!3m2!1sid!2sid!4v1633548999838!5m2!1sid!2sid" width="460" height="145" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
  </div>
  <div class="row" style=" text-align: center; background-color: #5F6061; color: #FFF; font-size: 14px;">
    <hr>
    <p>© Copyright 2020 Kelurahan Tode Kisar</p>
  </div>
</div>
<!-- end copyright --> 


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
