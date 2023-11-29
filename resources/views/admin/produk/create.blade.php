@extends('admin.layout.appadmin')
@section('content')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

@if($errors->any())
<div class="alert alert-danger">
  <ul>
    @foreach($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
  </ul>
</div>
@endif
<form method="POST" action="{{url('admin/produk/store')}}" enctype="multipart/form-data">
    @csrf
    <!-- kode start -->
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">Kode</label> 
    <div class="col-8">
      <input id="text" name="kode" type="text" class="form-control @error('kode') is-invalid @enderror">
      @error('kode')
      <div class="invalid-feedback">
        {{$message}}
      </div>
      @enderror
    </div>
  </div>

  <!-- nama start -->
  <div class="form-group row">
    <label for="text1" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <input id="text1" name="nama" type="text" class="form-control @error('nama') is-invalid @enderror">
      @error('nama')
      <div class="invalid-feedback">
        {{$message}}
      </div>
      @enderror
    </div>
  </div>
  
  <!-- harga beli strat -->
  <div class="form-group row">
    <label for="text2" class="col-4 col-form-label">Harga Beli</label> 
    <div class="col-8">
      <input id="text2" name="harga_beli" type="text" class="form-control @error('harga_beli') is-invalid @enderror">
      @error('harga_beli')
      <div class="invalid-feedback">
        {{$message}}
      </div>
      @enderror
    </div>
  </div>

  <!-- harga jual start -->
  <div class="form-group row">
    <label for="text3" class="col-4 col-form-label">Harga Jual</label> 
    <div class="col-8">
      <input id="text3" name="harga_jual" type="text" class="form-control @error('harga_jual') is-invalid @enderror">
      @error('harga_jual')
      <div class="invalid-feedback">
        {{$message}}
      </div>
      @enderror
    </div>
  </div>

  <!-- stok start -->
  <div class="form-group row">
    <label for="text4" class="col-4 col-form-label">Stok</label> 
    <div class="col-8">
      <input id="text4" name="stok" type="text" class="form-control @error('stok') is-invalid @enderror">
      @error('stok')
      <div class="invalid-feedback">
        {{$message}}
      </div>
      @enderror
    </div>
  </div>

  <!-- minstok start -->
  <div class="form-group row">
    <label for="text4" class="col-4 col-form-label">Minimal Stok</label> 
    <div class="col-8">
      <input id="text4" name="min_stok" type="text" class="form-control @error('min_stok') is-invalid @enderror">
      @error('min_stok')
      <div class="invalid-feedback">
        {{$message}}
      </div>
      @enderror
    </div>
  </div>

  <!-- foto start -->
  <div class="form-group row">
    <label for="text4" class="col-4 col-form-label">Foto</label> 
    <div class="col-8">
      <input id="text4" name="foto" type="file" class="form-control @error('foto') is-invalid @enderror">
      @error('jenis_produk_id')
      <div class="invalid-feedback">
        {{$message}}
      </div>
      @enderror
    </div>
  </div>

  <!-- deskripsi start -->
  <div class="form-group row">
    <label for="textarea" class="col-4 col-form-label">Deskripsi</label> 
    <div class="col-8">
      <textarea id="textarea" name="deskripsi" cols="40" rows="5" class="form-control"></textarea>
    </div>
  </div>

  <!-- jenis produk start -->
  <div class="form-group row">
    <label for="select" class="col-4 col-form-label">Jenis Produk</label> 
    <div class="col-8">
      <select id="select" name="jenis_produk_id" class="custom-select @error('idarmada') is-invalid @enderror">
        @foreach ($jenis_produk as $p)
        <option value="{{$p->id}}">{{$p->nama}}</option>
        @endforeach
      </select>
      @error('jenis_produk_id')
      <div class="invalid-feedback">
        {{$message}}
      </div>
      @enderror
    </div>
  </div> 

  <!-- tombol sumbit start -->
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
@endsection