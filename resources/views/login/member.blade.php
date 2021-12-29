@extends('main')
@section('content')
    <h1><b>Daftar</b></h1>
    <div class="container">
        <div class="row">
            <div class="col">
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1"></label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Nama">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1"></label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1"></label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
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
    </div>
    </div>
    <br>
@endsection