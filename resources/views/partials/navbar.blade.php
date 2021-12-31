<?php
  $kategoris = App\Models\Kategori::all();
?>
<nav class="navbar navbar-expand-lg navbar-light sticky-top shadow-sm" style="background-color: #fff">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">NF <span class="text-primary">Books</span></a>
        <div class="col-md-6 d-flex justify-content-md-end">
            <div class="nav-item shadow-sm dropdown">
                <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Pilih Kategori
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        @foreach ($kategoris as $kategori)
                        <li><a class="dropdown-item" href="/kategori/{{ $kategori->id }}">{{ $kategori->nama }}</a></li>
                        @endforeach
                      </ul>
            </div>
        </div>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse navbar-nav d-flex justify-content-end" id="navbarNavDropdown">
          <ul class="navbar-nav d-flex justify-content-md-evenly w-100">
              <li class="nav-item">
                <a class="nav-link active text-primary text-decoration-underline" href="/"><b>Home</b></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><i class="fa fa-shopping-cart text-blue"></i></a>
              </li>
              <li class="nav-item d-flex justify-content-end ml-5">
                @auth
                  <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Hai, {{ auth()->user()->name }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li>
                          <a class="dropdown-item" href="/logout"><i class="fa fa-sign-out"> </i> Logout</a>
                        </li>
                    </ul>
                  </div>
                @else
                  <a class="nav-link btn btn-primary bg-blue text-light" href="/login"><strong>Masuk</strong></a>                  
                @endauth
              </li>
          </ul>
      </div>
    </div>
  </nav>