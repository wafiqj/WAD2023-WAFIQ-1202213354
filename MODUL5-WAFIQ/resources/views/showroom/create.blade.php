@extends('layouts.layout')

@section('content')
  <section id='form'>
    <div class="container">
      <h1 class="tambahh1">Tambah Mobil</h1>
      <p class="tambahp">Tambah Mobil Baru Anda Ke List Show Room</p>
      <form action="{{ route('showroom.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="nama">Nama Mobil</label>
        <input id="nama" name="name" type="text" required placeholder="Masukkan Nama Mobil">
        <label for="merk">Brand</label>
        <input id="brand" name="brand" type="text" required placeholder="Masukkan Merk Mobil">
        <label for="merk">Warna</label>
        <input id="warna" name="warna" type="text" required placeholder="Masukkan Warna Mobil">
        <label for="merk">Tipe</label>
        <input id="tipe" name="tipe" type="text" required placeholder="Masukkan Tipe Mobil">
        <label for="merk">Harga</label>
        <input id="harga" name="harga" type="number" required placeholder="Masukkan Harga Mobil">
        <button class="btn btn-primary" type="submit" style="margin-top: 40px;">Selesai</button>
      </form>
    </div>
  </section>
@endsection
