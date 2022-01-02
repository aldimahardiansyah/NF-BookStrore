@extends('main')
@section('content')
@if (session()->has('jsAlert'))
<script>
    alert("{{ session('jsAlert') }}");
</script>
@endif
<?php
    $total = 0;
?>
    <div class="my-4 d-flex flex-column align-items-center justify-content-center">
        <div class="bg-white shadow-sm rounded">
        <h6 class="text-dark m-3">Keranjang Belanja</h6>
        <hr/>
        <table>
            @if (count($keranjang)==0)
                <td colspan="4"><p class="text-center text-danger my-5">Keranjang kosong, silakan masukkan buku yang ingin Anda beli!</p></td>
            @else
                @foreach ($keranjang as $item)
                <?php
                    $total += $item->harga;
                ?>
                    <tr>
                        <td class="px-1 m-0">
                            <a href="/detail/{{ $item->book->id }}">
                                <img height="100px" width="77px" src="/book/{{ $item->book->thumbnail }}" alt="" class="rounded">
                            </a>
                        </td>
                        <td class="px-1" style="width: 11em">
                            <a href="/detail/{{ $item->book->id }}" class="text-decoration-none text-dark">
                                <small>{{ $item->book->judul }}</small>
                            </a>
                        </td>
                        <td class="text-center px-1">
                            <p class="text-muted"><small>Jumlah</small></p>
                            {{ $item->jumlah }}
                        </td>
                        <td class="text-center px-1 small">
                            <p class="text-muted"><small>Harga</small></p>
                            Rp. {{ number_format($item->harga,0,',','.') }}
                        </td>
                        <td class="text-center px-sm-5">
                            <a href="/keranjang/delete/{{ $item->id }}" class="text-danger" onclick="return confirm('Apakah Anda yakin?')"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="5"><hr></td>
                    </tr>
                @endforeach
            @endif
        </table>
        <div class="d-flex flex-column align-items-end row-12 p-2">
            <div class="col-6 d-flex justify-content-between border-bottom mb-1">
                <h6 class="small">T O T A L</h6>
                <h6 class="small">Rp. {{ number_format($total,0,',','.') }}</h6>
            </div>
            <div class="col-6 d-flex justify-content-end align-items-start my-2">
                <a href="#" class="btn btn-success">Checkout <i class="fa fa-arrow-right"></i></a>
            </div>
        </div>
        </div>
    </div>
@endsection