<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @if ($title=='Stok')
        <!-- External CSS -->
        <link rel="stylesheet" href="/css/style.css">
    @endif

    @if ($title=='FAQ')
        <link rel="stylesheet" href="/faq/css/style.css">
        <link rel="stylesheet" href="/faq/css/produk.css">
    @endif
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400&display=swap" rel="stylesheet">
    <style>
        *{
            font-family: 'Poppins', sans-serif;
        }
        body{
            background: #f5f5f5;
        }
        .bg-blue{
            background-color:#54A0FF;

        }
        .text-blue{
            color:#54A0FF;
        }
        .bg-white{
            background-color: #fff;
        }
        @media screen and (max-width: 766px){
            .gambar-home{
                background-color: red;
                width: 0;
            }
            .gambar-login{
                height: 0;
                width: 0;
            }
        }
    </style>

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <title>NF Book | {{ $title }}</title>
  </head>
  <body>
    @if ($title!='Login'&&$title!='Daftar Member'&&$title!='Stok')
        @include('partials.navbar')
    @endif
    <div class="container-fluid">
        @if ($title=='Stok')
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-md-2">
                        <div>@include('partials.sidebar')</div>
                    </div>
                    <div class="col-md-10">
                        <div>@yield('content')</div>
                    </div>
                </div>
            </div>
        @else
            @yield('content')
        @endif
    </div>

    @if ($title!='Login'&&$title!='Daftar Member'&&$title!='Stok')
        @include('partials.footer')
    @endif

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>