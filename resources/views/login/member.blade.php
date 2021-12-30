@extends('main')
@section('content')
    <h1><b>Daftar</b></h1>
    <div class="container">
        <div class="row">
            <div class="col">
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
                    <br>
                    <button type="submit" class="btn btn-primary">Daftar</button>
                </form>
            </div>
            <div class="col">
                <img src="img/b1.png" alt="Reading Book" width="600" height="500">
            </div>
        </div>
    </div>
    <br>
    <p>Daftar Melalui :</p>
    <div class="col-sm-5"><button type="submit" class="btn btn-primary"><i class="fab fa-facebook"></i> Masuk Melalui Facebook</button>
        <br>
        <p>Atau</p>
        <div class="col-sm-7"><button type="submit" class="btn btn-danger"><i class="fab fa-google"></i> Masuk Melalui Google</button>
        </div>
    </div>
    <br>
@endsection