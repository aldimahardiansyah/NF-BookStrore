@extends('main')
@section('content')
<div class="p-3 d-flex align-items-center">
    <img height="60em" src="/img/STTNF.png" alt="logo sttnf">
    <h1 class="mx-3">NF<span class="text-primary">Books</span></h1>
</div>
<div class="container">
    <div class="row d-flex align-items-center">
        <div class="col">
                <h1><b>Daftar</b></h1>
                <form action="/store" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name"></label>
                        <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" id="name" placeholder="Masukan Nama">
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email"></label>
                        <input name="email" type="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" id="email" aria-describedby="emailHelp" placeholder="Masukan Email">
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1"></label>
                        <input name="password" type="password" class="form-control @error('password') is-invalid @enderror" id="exampleInputPassword1" placeholder="Password">
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Daftar</button>
                </form>

                <p class="mt-3">Daftar Melalui :</p>
                <div class="col d-flex justify-content-evenly">
                    <button type="submit" class="btn btn-primary"><i class="fab fa-facebook"></i> Masuk Melalui Facebook</button>
                    <button type="submit" class="btn btn-danger"><i class="fab fa-google"></i> Masuk Melalui Google</button>
                </div>
            </div>

            <div class="col">
                <img src="img/b1.png" class="gambar-login" alt="Reading Book" width="600" height="500">
            </div>
        </div>
    </div>
@endsection