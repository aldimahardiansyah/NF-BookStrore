@extends('main')

@section('content')

  <!-- Awal Caraousel -->
  <div class="container">
      <div id="carouselExampleIndicators" class="carousel slide mt-5" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="faq/gambar/logo/logo1.png" class="d-block img-fluid" alt="Gambar 1">
          </div>
          <div class="carousel-item">
            <img src="faq/gambar/logo/logo1.png" class="d-block img-fluid" alt="Gambar 2">
          </div>
          <div class="carousel-item">
            <img src="faq/gambar/logo/logo1.png" class="d-block img-fluid" alt="Gambar 3">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
  </div>
  <!-- Akhir Caraousel -->

  <!-- Awal Produk -->
  <div class="container mt-5">
    

  <br>

    <div class="row">
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title text-center">Mencari buku </h5>
          <p class="card-text text-center">Mau tau cara mencari barang yang kamu inginkan? Buku yang kamu cari tidak ketemu?  Butuh rekomendasi buku? Cari tahu di sini</p>
          
        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title text-center">Belanja di NFBookstore.com</h5>
          <p class="card-text text-center">Bagaimana cara memesan buku di NFBookstore.com? Cari tau di sini</p>
          
        </div>
      </div>
    </div>
  </div>

  <br>

  <div class="row">
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title text-center">Pembayaran Buku</h5>
          <p class="card-text text-center">Bagaimana cara menyelesaikan pembayaran? Cari tau di sini</p>
          
        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title text-center">Pengiriman</h5>
          <p class="card-text text-center">Ingin tau informasi pengiriman? Bingung kenapa pesananmu tidak kunjung tiba? Cari tahu di sini</p>
          
        </div>
      </div>
    </div>
  </div>

  <br>

  <div class="row">
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title text-center">Syarat & Ketentuan </h5>
          <p class="card-text text-center">Syarat & ketentuan pemesanan dan pengguna di NFBookstore.com</p>
          
        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title text-center">Situs NFBookstore.com</h5>
          <p class="card-text text-center">Butuh penjelasan soal berbagai fitur di NFBookstore.com? Cari tahu di sini</p>
          
        </div>
      </div>
    </div>
  </div>

    </div>
  </div>
  <br>
  <!-- Akhir Produk -->
@endsection