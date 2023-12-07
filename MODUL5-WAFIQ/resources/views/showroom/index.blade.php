@extends('layouts.layout')

@section('content')
  <section id="list">
    <div class="container">
      <h1>My Showroom</h1>
      @if (count($showroom) > 0)
        <div class="table-responsive">
          <table class="table-striped table">
            <thead>
              <tr>
                <th>Nama</th>
                <th>Brand</th>
                <th>Warna</th>
                <th>Tipe</th>
                <th>Harga</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($showroom as $mobil)
                <tr>
                  <td>{{ $mobil->nama_mobil }}</td>
                  <td>{{ $mobil->brand_mobil }}</td>
                  <td>{{ $mobil->warna_mobil }}</td>
                  <td>{{ $mobil->tipe_mobil }}</td>
                  <td>{{ $mobil->harga_mobil }}</td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      @else
        <p>Tidak ada mobil di showroom ini.</p>
      @endif
    </div>
  </section>
@endsection