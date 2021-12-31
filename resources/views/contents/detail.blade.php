@section('content')
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400&display=swap" rel="stylesheet">
  <style>
    * {
      font-family: 'Poppins', sans-serif;
    }

    body {
      background: #f5f5f5;
    }

    .bg-blue {
      background-color: #54A0FF;

    }

    .text-blue {
      color: #54A0FF;
    }

    .bg-white {
      background-color: #fff;
    }
  </style>

  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <title>NF Book | {{ $title }}</title>
  <link rel="stylesheet" type="text/css" href="/assets/style.css">
</head>

<body>
  <?php
    $diskon = $book->harga-$book->harga*$book->diskon/100
  ?>
  @if (session()->has('jsAlert'))
    <script>
        alert("{{ session('jsAlert') }}");
    </script>
  @endif

  @include('partials.navbar')
  <div class="container-fluid pt-3">
    <div class="row">
      <div class="col-9 d-flex flex-wrap">
        <div class="card border-0">
          <div class="card p-3">
            <img src="/book/{{$book->thumbnail}}" height="453px" width="285px" alt="">
          </div>
          <div class="card-body">
            <img src="/book/{{$book->thumbnail}}" class="rounded" width="95px" alt="">
          </div>
        </div>
        <div class="col">
          <div class="card border-light p-3">
            <div class="card-body">
              <h6>{{$book->judul}}</h6>
              <h5 class="card-title">{{$book->judul}}</h5>
              <hr>
              <p class="card-text">{{$book->deskripsi}}</p>
              <h5>Format Buku</h5>
              <button type="button" class="btn btn-outline-dark">Hard Cover</button>
              <button type="button" class="btn btn-outline-dark">Soft Cover</button>
              <br><br>
              <h5>Beli</h5>
              <div>
                <h5 style="float: left;">Jumlah Barang</h5>
                <div class="d-grid gap-2 d-md-block" style="float: right;">
                  <button id="kurang" class="btn btn-outline-dark" type="button">-</button>
                  <button id="jumlah" class="btn btn-outline-dark" disabled>1</button>
                  <button id="tambah" class="btn btn-outline-dark" type="button">+</button>
                </div>
              </div>
              <br><br>
              <hr>
              <h5 style="float: left;">Subtotal Harga</h5>
              <h5 id="harga" style="float: right; color:#1C80FE">Rp.{{$diskon}},-</h5>
              <br><br><br>
              <div class="d-grid gap-2 d-md-flex justify-content-center">

                <form action="/keranjang/tambah" method="post">
                  @csrf
                  <input id="input_jumlah" type="number" name="jumlah" hidden>
                  <input type="number" id="input_harga" name="harga" hidden>
                  <input type="number" name="book_id" value="{{ $book->id }}" hidden>
                  <input class="btn btn-outline-secondary me-md-2" type="submit" value="Tambah ke Keranjang">
                </form>

                <button class="btn btn-primary" type="button">Beli Sekarang</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12">
          <div class="card-group p-5">
            <div class="card border-0 p-2">
              <div class="card-body">
                <p class="h5">Detail</p>
                <p>Jumlah Halaman</p>
                <p>{{$book->jml_halaman}}</p>
                <p>Tanggal Terbit</p>
                <p>{{$book->tgl_terbit}}</p>
                <p>ISBN</p>
                <p>{{$book->ISBN}}</p>
                <p>Bahasa</p>
                <p>{{$book->bahasa->nama}}</p>
              </div>
            </div>
            <div class="card border-0 p-2">
              <div class="card-body">
                <br>
                <p>Penerbit</p>
                <p>{{$book->penerbit->nama}}</p>
                <p>Berat</p>
                <p>{{$book->berat}} Kg</p>
                <p>Panjang</p>
                <p>{{$book->panjang}} cm</p>
                <p>Lebar</p>
                <p>{{$book->lebar}} cm</p>
              </div>
            </div>
            <div class="card border-0 p-2">
              <div class="card-body">
                <br>
                <p>Jumlah Stok</p>
                <p>{{$book->stok}} Buku</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-3">
        <div class="card border-0 p-2">
          <div class=" card-body">
            <h5 class="card-title">Produk Serupa</h5>
            <br>
            @foreach ($books as $books)
            <?php
                  $diskons = $books->harga-$books->harga*$books->diskon/100
            ?>
            <div class="card border-0 p-1" style="max-width: 540px;">
              <div class="row g-0">
                <div class="col-md-5 mt-3">
                  <a href="/detail/{{$books->id}}">
                    <img src="/book/{{$books->thumbnail }}" width="130px" height="199px" class=" img-fluid rounded-start" alt="...">
                  </a>
                </div>
                <div class="col-md-7">
                  <div class="card-body">
                    <h6 class="card-title">{{$books->judul}}</h6>
                    <p class="card-text">Rp. {{ number_format($diskons,0,',','.') }}</p>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>

    @include('partials.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>
      let rupiah = (numb) =>{
        numb = parseInt(numb);
        const format = numb.toString().split('').reverse().join('');
        const convert = format.match(/\d{1,3}/g);
        const rupiah = 'Rp. ' + convert.join('.').split('').reverse().join('')

        return rupiah;
      }
      let count = 1;
      let total_harga = parseInt({{ $diskon }});
      let jumlah = document.getElementById('jumlah');
      jumlah.innerHTML = count;
      let input_jumlah = document.getElementById('input_jumlah');
      input_jumlah.value = count;
      let tambah = document.getElementById('tambah');
      let kurang = document.getElementById('kurang');
      let harga = document.getElementById('harga');
      harga.innerHTML=rupiah(total_harga) + ',-';
      let input_harga = document.getElementById('input_harga');
      input_harga.value = total_harga;

      tambah.addEventListener('click', ()=>{
        if(count < {{ $book->stok }}){
          count += 1;
        }
        jumlah.innerHTML = count;
        input_jumlah.value= count;

        harga.innerHTML=rupiah(total_harga * count) + ',-';
        input_harga.value = total_harga * count;
      });

        kurang.addEventListener('click', ()=>{
        if(count > 1){
          count -= 1;
        }
        jumlah.innerHTML = count;
        input_jumlah.value= count;

        harga.innerHTML=rupiah(total_harga * count) + ',-';
        input_harga.value = total_harga * count;
        });
    </script>
</body>

</html>