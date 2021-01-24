@extends('layouts.app')


@section('content')
<section class="content-header">
      <h1>
        Ubah Pengeluaran
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
         <form action="{{route('pengeluaran.update', $pengeluaran->id)}}" method="POST" enctype="multipart/form-data">
         {{csrf_field()}}
         {{method_field('PUT')}}
              <div class="box-body">
                <div class="form-group">
                  <label>Tanggal</label>
                  <input type="date" value="{{$pengeluaran->tanggal}}" class="form-control" name="tanggal">
                </div>
                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" value="{{$pengeluaran->nama}}" class="form-control" name="nama">
                </div>
                </td>
                <div class="form-group">
                  <label>Jenis Pengeluaran</label>
                  <select class="form-control" name="jenis">
                    <option value="Bidang Teologi" <?php if ($pengeluaran->jenis == "Bidang Teologi") { echo "selected";}?>>Bidang Teologi</option>
                    <option value="Bidang PPSDI & PPK" <?php if ($pengeluaran->jenis == "Bidang PPSDI & PPK") { echo "selected";}?>>Bidang PPSDI & PPK</option>
                    <option value="Bidang Germasa" <?php if ($pengeluaran->jenis == "Bidang Germasa") { echo "selected";}?>>Bidang Germasa</option>
                    <option value="Bidang Pelkes" <?php if ($pengeluaran->jenis == "Bidang Pelkes") { echo "selected";}?>>Bidang Pelkes</option>
                    <option value="Sekretariat" <?php if ($pengeluaran->jenis == "Sekretariat") { echo "selected";}?>>Sekretariat</option>
                    <option value="Pembangunan Ekonomi Gereja" <?php if ($pengeluaran->jenis == "Pembangunan Ekonomi Gereja") { echo "selected";}?>>Pembangunan Ekonomi Gereja</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Jumlah</label>
                  <input type="text" value="{{$pengeluaran->jumlah}}" class="form-control" name="jumlah">
                </div>
                <div class="form-group">
                  <label>Keterangan (Kosongkan jika tidak ada keterangan tambahan)</label>
                  <input type="text" value="{{$pengeluaran->keterangan}}" class="form-control" name="keterangan">
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