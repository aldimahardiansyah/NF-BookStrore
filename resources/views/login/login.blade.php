@extends('main')
@section('content')
    @if (session()->has('jsAlert'))
        <script>
            alert("{{ session('jsAlert') }}");
        </script>
    @endif

    <div class="p-3 d-flex align-items-center">
        <img height="60em" src="/img/STTNF.png" alt="logo sttnf">
        <h1 class="mx-3">NF<span class="text-primary">Books</span></h1>
    </div>
    <div class="container">
        <div class="row">
            <div class="col d-flex flex-column justify-content-center">
                <h1><b>Masuk</b></h1>
                <form action="/dologin" method="POST" class="col-9">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1"></label>
                        <input name="email" type="email" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Email" required>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1"></label>
                        <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-sign-in"></i>  Masuk</button>
                </form>
                <p class="mt-3">Belum memiliki Akun? <a href="/daftar">Daftar</a></p>
                <div class="d-flex col-9 justify-content-evenly mt-4">
                    <button type="submit" class="btn btn-primary">Masuk Melalui FB <i class="fab fa-facebook"></i></button>
                    <button type="submit" class="btn btn-danger">Masuk Melalui Google <i class="fab fa-google"></i></button>
                </div>
            </div>
            <div class="col">
                <img src="img/b2.png" alt="Book Store" width="500" height="500">
            </div>
        </div>
    </div>
    </div>
    </div>
    <br>
@endsection