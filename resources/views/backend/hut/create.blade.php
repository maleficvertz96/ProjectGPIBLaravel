@extends('layouts.app')


@section('content')
<section class="content-header">
      <h1>
        Tambah Informasi Jemaat yang Berulang Tahun
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
         <form action="{{route('hut.store')}}" method="POST" enctype="multipart/form-data">
         {{csrf_field()}}
              <div class="box-body">
              <div class="form-group">
                  <label>Nama</label>
                  <input type="text" class="form-control" name="nama">
                </div>
                <div class="form-group">
                  <label>Tanggal</label>
                  <input type="date" class="form-control" name="tanggal">
                </div>
                <div class="form-group">
                  <label>Sektor</label>
                  <select class="form-control" name="sektor">
                    <option value=""></option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Hari Ulang Tahun</label>
                  <select class="form-control" name="hut">
                    <option value="HUT Kelahiran">HUT Kelahiran</option>
                    <option value="HUT Perkawinan">HUT Perkawinan</option>
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