@extends('main')
@section('content')

    <div class="container my-3">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-8">
                        <div class="card">
                            <div class="card-body">
                                <table class="table table-striped table-hover">
                                    <h4>Artikel Liputan</h4>
                                    <hr>
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Judul</th>
                                            <th scope="col">Tanggal</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td><a href="/blog/content" class="text-decoration-none">Buku bukumu</a></td>
                                            <td>12 Desember 2020</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td><a href="/blog/content" class="text-decoration-none">Saat hujan bersamanya</a></td>
                                            <td>13 Desember 2020</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td><a href="/blog/content" class="text-decoration-none">Semua tentang dia</a></td>
                                            <td>11 Agustus 2019</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination justify-content-center">
                                        <li class="page-item disabled">
                                            <a class="page-link">Previous</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">Next</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="input-group">
                                    <div class="form-outline">
                                      <input id="search-input" type="search" id="form1" class="form-control" />
                                      <label class="form-label" for="form1">Search</label>
                                    </div>
                                    <button id="search-button" type="button" class="btn btn-primary">
                                      <i class="fas fa-search"></i>
                                    </button>
                                  </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
    
    @endsection