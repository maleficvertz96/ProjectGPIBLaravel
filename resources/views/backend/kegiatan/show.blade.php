@extends('layouts.app')


@section('content')
<section class="content-header">
      <h1>
        Agenda Kegiatan {{$kegiatan->tanggal}}
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
          {!!$kegiatan->isi_kegiatan!!}
              <div class="box-footer">
                <a href="{{route('kegiatan.edit',$kegiatan->id)}}" class="btn btn-primary">Edit</a>
              </div>
          </div>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->

    </section>
@endsection