@extends('layouts.app')


@section('content')
<section class="content-header">
      <h1>
      Ubah Informasi Jemaat yang Berulang Tahun
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
         <form action="{{route('hut.update', $hut->id)}}" method="POST" enctype="multipart/form-data">
         {{csrf_field()}}
         {{method_field('PUT')}}
              <div class="box-body">
              <div class="form-group">
                  <label>Nama</label>
                  <input type="text" value="{{$hut->nama}}" class="form-control" name="nama">
                </div>
                <div class="form-group">
                  <label>Tanggal</label>
                  <input type="date" value="{{$hut->tanggal}}" class="form-control" name="tanggal">
                </div>
                <div class="form-group">
                  <label>Sektor</label>
                  <select class="form-control" name="sektor">
                    <option value="1" <?php if ($hut->sektor == 1) { echo "selected";}?>>1</option>
                    <option value="2" <?php if ($hut->sektor == 2) { echo "selected";}?>>2</option>
                    <option value="3" <?php if ($hut->sektor == 3) { echo "selected";}?>>3</option>
                    <option value="4" <?php if ($hut->sektor == 4) { echo "selected";}?>>4</option>
                    <option value="5" <?php if ($hut->sektor == 5) { echo "selected";}?>>5</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Hari Ulang Tahun</label>
                  <select class="form-control" name="pelkat">
                    <option value="HUT Kelahiran" <?php if ($hut->hut == "HUT Kelahiran") { echo "selected";}?>>HUT Kelahiran</option>
                    <option value="HUT Perkawinan" <?php if ($hut->hut == "HUT Perkawinan") { echo "selected";}?>>HUT Perkawinan</option>
                  </select>
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