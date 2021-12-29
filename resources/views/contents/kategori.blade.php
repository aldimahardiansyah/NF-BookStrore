@extends('main')
@section('content')
    <div class="mt-3 mb-5">
        <h2 class="text-center">Kategori <span class="fw-bold">{{ $kategori->nama }}</span></h2>
        <p class="text-center">Menampilkan total <span>{{ count($kategori->book) }}</span> hasil:</p>
    </div>
    <div class="container my-3">
        <div class="row row-cols-md-6 row-cols-sm-4 row-cols-2 g-4 rounded shadow-sm bg-white">
            @foreach ($kategori->book as $latest)
              <?php
                $diskon = $latest->harga-$latest->harga*$latest->diskon/100
              ?>
              <div class="col my-2">
                <div class="card shadow-sm bg-light">
                  <a href="/detail/{{ $latest->id }}">
                      <img src="/book/{{ $latest->thumbnail }}" height="237px" class="card-img-top" alt="{{ $latest->judul }}">
                  </a>
                  <div class="card-body p-2 d-flex flex-column justify-content-between">
                    <a href="/detail/{{ $latest->id }}" class="text-decoration-none text-dark">
                      <h6 class="card-title fw-bold" style="font-size: 14px">{{ $latest->judul }}</h6>
                    </a>
                    <div class="d-flex flex-column flex-lg-row justify-content-between">
                      @if ($diskon != $latest->harga)
                      <small class="card-text text-muted" style="font-size: 11px"><s>Rp. {{ number_format($latest->harga,0,',','.') }}</s></small>
                      @endif
                      <small class="card-text fw-bold" style="font-size: 12px">Rp. {{ number_format($diskon,0,',','.') }}</small>
                    </div>
                  </div>
                </div>
              </div>
            @endforeach
        </div>
    </div>
@endsection