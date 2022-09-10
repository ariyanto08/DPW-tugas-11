@extends('admin.base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 px-5 mt-5">
                <div class="card bg-secondary">
                    <div class="card-header">
                        Detail Data Produk
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="card bg-dark">
                                    <div class="card-body">
                                        <img src="{{url('public', $product->foto)}}" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="card bg-dark">
                                    <div class="card-body">
                                        <h3>{{$product->nama}}</h3>
                                        <hr>
                                        <p>
                                         {{$product->harga}}
                                         Stok : {{$product->stok}} |
                                         Berat : {{$product->berat}} gr |
                                         Tanggal Produksi : {{$product->created_at->format("d M Y")}}
                                         <p>
                                             Seller : {{$product->seller->nama}}
                                         </p>
                                        </p>
                                        <p>
                                         {!!nl2br($product->deskripsi)!!}
                                        </p>
                                        <p>
                                         <img src="{{$product->foto}}" alt="">
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
