@extends('admin.base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 px-5 mt-5">
                <div class="card bg-secondary">
                    <div class="card-header">
                        Edit Data Produk
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="card bg-dark">
                                    <div class="card-body">
                                        <img src="{{ url('public', $product->foto) }}" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="card bg-secondary">
                                    <div class="card-body">
                                        <form action="{{ url('master-data/product', $product->id) }}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <div class="form-group">
                                                <label for="" class="control-label">Nama</label>
                                                <input type="text" class="form-control" name="nama"
                                                    value="{{ $product->nama }}">
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="" class="control-label">Foto</label>
                                                        <input type="file" class="form-control bg-dark" name="foto"
                                                            accept=".png" value="{{ url('public',$product->foto) }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="" class="control-label">Harga</label>
                                                        <input type="text" class="form-control" name="harga"
                                                            value="{{ $product->harga }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="" class="control-label">Stok</label>
                                                        <input type="text" class="form-control" name="stok"
                                                            value="{{ $product->stok }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="" class="control-label">Berat</label>
                                                        <input type="text" class="form-control" name="berat"
                                                            value="{{ $product->berat }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="" class="control-label">Deskripsi</label>
                                                <textarea name="deskripsi" class="form-control">{{ $product->deskripsi }}</textarea>
                                            </div>
                                            <button class="btn btn-sm btn-primary float-end mt-3"><i
                                                    class="fa fa-save"></i>Simpan</button>
                                        </form>
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
