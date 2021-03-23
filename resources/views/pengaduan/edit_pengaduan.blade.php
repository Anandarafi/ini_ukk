@extends('template_admin.template_admin')
@section('title', 'KeKeM [Kelah Keluh Masyarakat] - Pengaduan')
@section('container')

     <!-- UPDATE -->
     <head>
<link rel="stylesheet" type="text/css" href="css/pengaduan.css">
</head>
<br>
<div class="row">
<div class="col-lg-7 mx-auto">
            <div class="card mt-2 mx-auto p-4">
                <div class="card-body">
                    <div class="container">
                    @foreach($pengaduan as $datas)
                    <form role="form" method="post" action="{{route('editPengaduan',$datas->id_pengaduan)}}" enctype="multipart/form-data">
                        {{ csrf_field() }}

                            <div class="controls">
                            <div class="row">
                                <div class="col-md-12">
                                <div class="form-group"> 
                                <label for="status">Status</label> 
                                <select class="form-control" id="status" name="status">
                                    <option value="0" {{ $datas->status == "terkirim" ? 'selected' : ''}}>Terkirim</option>
                                    <option value="0" {{ $datas->status == "0" ? 'selected' : ''}}>Belum</option>
                                    <option value="proses" {{ $datas->status == "proses" ? 'selected' : ''}}>Proses</option>
                                    <option value="selesai" {{ $datas->status == "selesai" ? 'selected' : ''}}>Selesai</option>
                                </select>
                                        </div>
                                </div>
                            </div>
                                <div class="row">
                                <div class="col-md-6"><a href="/pengaduan" class="btn btn-warning btn-sm pt-2" onclick="return confirm('Apakah Anda Yakin Ingin Kembali?')">Kembali</a> </div>
                                    <div class="col-md-6"> <input type="submit" class="btn btn-success btn-send pt-2 btn-block " value="Update"> </div>
                                </div>
                            </div>
                        </form>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        </div>

    <script type="text/javascript">
    $(document).ready(function() {
        $('select').selectpicker();
    });
    </script>
@stop