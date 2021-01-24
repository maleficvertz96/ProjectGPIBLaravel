@extends('layouts.app')


@section('content')
<section class="content-header">
      <h1>
        Input Pengeluaran
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
         <form action="{{route('pengeluaran.store')}}" method="POST" enctype="multipart/form-data">
         {{csrf_field()}}
              <div class="box-body">
                <div class="form-group">
                  <label>Tanggal</label>
                  <input type="date" class="form-control" name="tanggal">
                </div>
                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" class="form-control" name="nama">
                </div>
                <div class="form-group">
                  <label>Jenis Pengeluaran</label>
                  <select class="form-control" name="jenis">
                    <option value=""></option>
                    <option value="Bidang Teologi">Bidang Teologi</option>
                    <option value="Bidang PPSDI & PPK">Bidang PPSDI & PPK</option>
                    <option value="Bidang Germasa">Bidang Germasa</option>
                    <option value="Bidang Pelkes">Bidang Pelkes</option>
                    <option value="Sekretariat">Sekretariat</option>
                    <option value="Pembangunan Ekonomi Gereja">Pembangunan Ekonomi Gereja</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Jumlah</label>
                  <input type="number" class="form-control" name="jumlah">
                </div>
                <div class="form-group">
                  <label>Keterangan (Kosongkan jika tidak ada keterangan tambahan)</label>
                  <input type="text" class="form-control" name="keterangan">
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