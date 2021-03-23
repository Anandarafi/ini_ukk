@extends('template_admin.template_admin')
@section('title', 'KeKeM [Kelah Keluh Masyarakat] - Pengaduan')
@section('container')
<div class="container">
  <section class="main-section">
    <div class="content">
      <h1 class="text-center">Detail Pengaduan</h1>
      <hr>
          @foreach($data as $datas)
          @endforeach
    </div>
    </div>
    <div class="profile-main" align="center">
        <img src="{{url('images/'.$datas->foto)}}" alt="Foto" width="100">
        <br>
        <h3 class="name">{{ $datas->nama }}</h3>
    </div>
        <table class="table table-striped">
            <tr>
                <th>Nomor Pengaduan</th>
                <td>{{ $datas->id_pengaduan }}</td>
            </tr>
            <tr>
                <th>Tanggal Pengaduan</th>
                <td>{{ $datas->tgl_pengaduan }}</td>
            </tr>
            <tr>
                <th>Nomor Pengadu</th>
                <td>{{ $datas->nik }}</td>
            </tr>
            <tr>
                <th>Status</th>
                <td>{{ $datas->status }}</td>
            </tr>
        </table>
        <tr>
                    <td><a href="/pengaduan" class="btn btn-success" onclick="return confirm('Apakah Anda Yakin Ingin Kembali?')">Kembali</a></td>
                    </tr>
  </section>
@endsection