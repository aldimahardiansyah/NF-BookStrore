@extends('../main')
@section('content')
    <div class="flex-container row"> 
        <div class="col-md-6 m-3" style="padding:0">
            <div class="row-md" style="margin-top:30px"> <h2 style="font-size:22px;font-weight:bold;color:#54A0FF;">Tambah Produk</h2> </div>
            <div class="row-md-6 p-3 my-3 border rounded" style="background-color:white">
                <h6 class="title">Informasi Umum<h6>
                <form style="margin-top:20px">
                    <div class="form-group">
                        <label for="formGroupExampleInput" style="margin-left:10px;margin-bottom:5px">Nama</label>
                        <input type="text" class="form-control" id="formGroupExampleInput">
                    </div>
                    <div class="form-group" style="margin-top:15px">
                        <label for="formGroupExampleInput2" style="margin-left:10px;margin-bottom:5px">Deskripsi</label>
                        <textarea type="text" class="form-control" id="formGroupExampleInput2"></textarea>
                    </div>
                </form>
            </div>
            <div class="row-md-6 p-3 my-3 border rounded" style="background-color:white">
                <h6 class="title">Detail<h6>
                <form style="margin-top:20px">
                    <div class="flex-container form-row">
                        <div class="form-group col-md-6" style="margin-right:2px">
                            <label for="inputEmail4" style="margin-left:10px;margin-bottom:5px">Jumlah Halaman</label>
                            <input type="text" class="form-control" id="input">
                        </div>
                        <div class="form-group col-md-6" style="margin-left:3px">
                            <label for="inputPassword4" style="margin-left:10px;margin-bottom:5px">Penerbit</label>
                            <input type="text" class="form-control" id="input">
                        </div>
                    </div>
                    <div class="flex-container form-row">
                        <div class="form-group col-md-6" style="margin-right:2px;margin-top:15px">
                            <label for="inputEmail4" style="margin-left:10px;margin-bottom:5px">Tanggal Terbit</label>
                            <input type="date" class="form-control" id="input" style="color:#c4c4c4;font-size:16px">
                        </div>
                        <div class="form-group col-md-6" style="margin-left:3px;margin-top:15px">
                            <label for="inputPassword4" style="margin-left:10px;margin-bottom:5px">Berat</label>
                            <input type="text" class="form-control" id="input">
                        </div>
                    </div>
                    <div class="flex-container form-row" >
                        <div class="form-group col-md-6" style="margin-right:2px;margin-top:15px">
                            <label for="inputEmail4" style="margin-left:10px;margin-bottom:5px">ISBN</label>
                            <input type="text" class="form-control" id="input">
                        </div>
                        <div class="form-group col-md-6" style="margin-left:3px;margin-top:15px">
                            <label for="inputPassword4" style="margin-left:10px;margin-bottom:5px">Panjang</label>
                            <input type="text" class="form-control" id="input">
                        </div>
                    </div>
                    <div class="flex-container form-row">
                        <div class="form-group col-md-6" style="margin-right:2px;margin-top:15px">
                            <label for="inputEmail4" style="margin-left:10px;margin-bottom:5px">Bahasa</label>
                            <input type="text" class="form-control" id="input">
                        </div>
                        <div class="form-group col-md-6" style="margin-left:3px;margin-top:15px">
                            <label for="inputPassword4" style="margin-left:10px;margin-bottom:5px">Lebar</label>
                            <input type="text" class="form-control" id="input">
                        </div>
                    </div>
                </form>
            </div>
            <div class="row-md-6 p-3 my-3 border rounded" style="background-color:white">
                <h6 class="title">Upload Foto Produk<h6>
                <form action="" method="POST" enctype="multipart/form-data" style="margin-top:20px">
                    <div class="row">
                        <div class="form-group">
                            <div class="dropzone-wrapper">
                                <div class="dropzone-desc">
                                    <i class="glyphicon glyphicon-download-alt"></i>
                                    <i class="fa fa-arrow-circle-up"></i>
                                    <p style="font-weight:bold;color:black;font-size:13px;margin-top:10px">Drag and drop/choose foto</p>
                                </div>
                                <input type="file" name="img_logo" class="dropzone">
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-top:20px">
                        <div class="col-md-12 d-flex justify-content-center">
                            <button type="submit" class="btn pull-center" style="width:200px;font-weight:bold;background-color:#54A0FF;color:white">Upload</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-4 m-3" style="padding:0">
            <div class="row-md" style="margin-top:94px"></div>
            <div class="row-md-4 p-3 my-3 border rounded" style="background-color:white">
                <h6 class="title">Upload Foto Produk<h6>
                <div class="form-check" style="margin-top:20px">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Soft Cover
                        <p style="font-size:12px;margin-top:10px;margin-bottom:1px">Harga</p>
                        <div class="input-group input-group-sm mb-3" style="margin-top:0px">
                            <input type="text" class="form-control" aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <span class="input-group-text" id="basic-addon2" style="background-color:white;color:#c4c4c4">Rupiah</span>
                        </div>
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Hard Cover
                        <p style="font-size:12px;margin-top:10px;margin-bottom:1px">Harga</p>
                        <div class="input-group input-group-sm mb-3" style="margin-top:0px">
                            <input type="text" class="form-control" aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <span class="input-group-text" id="basic-addon2" style="background-color:white;color:#c4c4c4">Rupiah</span>
                        </div>
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Ebook
                        <p style="font-size:12px;margin-top:10px;margin-bottom:1px">Harga</p>
                        <div class="input-group input-group-sm mb-3" style="margin-top:0px">
                            <input type="text" class="form-control" aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <span class="input-group-text" id="basic-addon2" style="background-color:white;color:#c4c4c4">Rupiah</span>
                        </div>
                    </label>
                </div>
            </div>
            <div class="row-md-4 p-3 my-3 border rounded" style="background-color:white">
                <h6 class="title">Stok Buku<h6>
                <form style="margin-top:20px">
                    <div class="form-group">
                        <input type="text" class="form-control" id="formGroupExampleInput" style="margin-bottom:5px">
                    </div>
                </form>
            </div>
            <div class="row" style="margin-top:20px">
                <div class="col-md-12">
                    <button type="submit" class="btn pull-right" style="width:150px;font-weight:bold;background-color:#54A0FF;color:white">Publish</button>
                </div>
            </div>
        </div>
    </div>
    
@endsection