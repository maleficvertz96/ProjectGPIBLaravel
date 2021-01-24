@extends('layouts.app')


@section('content')
<section class="content-header">
      <h1>
        Permintaan Pelayanan Khusus dari {{ $pelayananpribadi->nama }}
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
          <span>Nama : {{ $pelayananpribadi->nama }}</span><br>
          <span>No.Telpon : {{ $pelayananpribadi->telpon }}</span><br><br>
         <strong>{!!$pelayananpribadi->deskripsi!!}</strong> 
              <div class="box-footer">
                <a href="{{route('pelayananpribadi.edit',$pelayananpribadi->id)}}" class="btn btn-primary">Status Pelayanan Khusus</a>
              </div>
          </div>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->

    </section>
@endsection