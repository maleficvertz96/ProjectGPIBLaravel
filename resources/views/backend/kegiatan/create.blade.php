@extends('layouts.app')


@section('content')
<section class="content-header">
      <h1>
        Agenda Kegiatan Gereja
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
         <form action="{{route('kegiatan.store')}}" method="POST" enctype="multipart/form-data">
         {{csrf_field()}}
              <div class="box-body">
                <div class="form-group">
                  <label>Tanggal</label>
                  <input type="date" class="form-control" name="tanggal">
                </div>
                <div class="form-group">
                  <label>Judul</label>
                  <input type="text" class="form-control" name="nama_kegiatan">
                </div>
                <div class="form-group">
                  <label>Isi Kegiatan</label>
                  <textarea id="editor1" name="isi_kegiatan" rows="10" cols="80"></textarea>
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