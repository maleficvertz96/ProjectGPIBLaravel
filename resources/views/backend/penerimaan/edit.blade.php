@extends('layouts.app')


@section('content')
<section class="content-header">
      <h1>
        Ubah Penerimaan
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">

          <div class="box-tools pull-right">
          </div>
        </div>
        <div class="box-body">
         <form action="{{route('penerimaan.update', $penerimaan->id)}}" method="POST" enctype="multipart/form-data">
         {{csrf_field()}}
         {{method_field('PUT')}}
              <div class="box-body">
                <div class="form-group">
                  <label>Tanggal</label>
                  <input type="date" value="{{$penerimaan->tanggal}}" class="form-control" name="tanggal">
                </div>
                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" value="{{$penerimaan->nama}}" class="form-control" name="nama">
                </div>
                </td>
                <div class="form-group">
                  <label>Jenis Penerimaan</label>
                  <select class="form-control" name="jenis">
                    <option value="Kolekte" <?php if ($penerimaan->jenis == "Kolekte") { echo "selected";}?>>Kolekte</option>
                    <option value="Persembahan Syukur Keluarga Rabu" <?php if ($penerimaan->jenis == "Persembahan Syukur Keluarga Rabu") { echo "selected";}?>>Persembahan Syukur Keluarga Rabu</option>
                    <option value="Persepuluhan" <?php if ($penerimaan->jenis == "Persepuluhan") { echo "selected";}?>>Persepuluhan</option>
                    <option value="SBU" <?php if ($penerimaan->jenis == "SBU") { echo "selected";}?>>SBU</option>
                    <option value="Arimatea" <?php if ($penerimaan->jenis == "Arimatea") { echo "selected";}?>>Arimatea</option>
                    <option value="Syukur Minggu" <?php if ($penerimaan->jenis == "Syukur Minggu") { echo "selected";}?>>Syukur Minggu</option>
                    <option value="Pengadaan & Pemeliharaan" <?php if ($penerimaan->jenis == "Pengadaan & Pemeliharaan") { echo "selected";}?>>Pengadaan & Pemeliharaan</option>
                    <option value="HUT Kelahiran" <?php if ($penerimaan->jenis == "HUT Kelahiran") { echo "selected";}?>>HUT Kelahiran</option>
                    <option value="Lain-Lain" <?php if ($penerimaan->jenis == "Lain-Lain") { echo "selected";}?>>Lain-Lain</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Jumlah</label>
                  <input type="text" value="{{$penerimaan->jumlah}}" class="form-control" name="jumlah">
                </div>
                <div class="form-group">
                  <label>Keterangan (Kosongkan jika tidak ada keterangan tambahan)</label>
                  <input type="text" value="{{$penerimaan->keterangan}}" class="form-control" name="keterangan">
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->

    </section>
@endsection