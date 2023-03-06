<?php 
include 'koneksi.php';
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top shadow">
  <div class="container">
    <a class="navbar-brand" href="index.php" style="font-family: 'Bad Script', cursive; font-size: 18px; font-weight: 800;">
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
        <!-- end modal login -->