@extends('layouts.app')


@section('content')
<section class="content-header">
      <h1>
        Ubah Kegiatan
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
         <form action="{{route('kegiatan.update', $kegiatan->id)}}" method="POST" enctype="multipart/form-data">
         {{csrf_field()}}
         {{method_field('PUT')}}
              <div class="box-body">
                <div class="form-group">
                  <label>Tanggal</label>
                  <input type="date" value="{{$kegiatan->tanggal}}" class="form-control" name="tanggal">
                </div>
                <div class="form-group">
                  <label>Judul</label>
                  <input type="text" value="{{$kegiatan->nama_kegiatan}}" class="form-control" name="nama_kegiatan">
                </div>
                <div class="form-group">
                  <label>Isi Kegiatan</label>
                  <textarea class="form-control" id="editor1" name="isi_kegiatan">{{$kegiatan->isi_kegiatan}}</textarea>
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