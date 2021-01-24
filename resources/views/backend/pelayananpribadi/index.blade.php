@extends('layouts.app')


@section('content')
<section class="content-header">
      <h1>
        Daftar Pelayanan Khusus dari Jemaat
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
            <!-- /.box-header -->
            <div class="box">
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nama</th>
                  <th>No. Telpon</th>
                  <th>Detail Pelayanan</th>
                  <th>Status</th>
                  <th>Pilihan</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($pelayananpribadis as $service)
                <tr>
                  <td>{{$service->nama}}</td>
                  <td>{{$service->telpon}}</td>
                  <td><a href="{{ route('pelayananpribadi.show',$service->id) }}">Lihat Detail</a></td>
                  <td>{{$service->status}}</td>
                  <td>
                    <form action="{{route('pelayananpribadi.destroy',$service->id)}}" method="POST" enctype="multipart/form-data">
                       {{csrf_field()}}
                       {{method_field('DELETE')}}
                    <button type="submit" onclick="return confirm('Apakah anda ingin menghapus data ini?');" class="btn btn-danger"><i class ="fa fa-trash"></i></button>
                    </form>
                  </td>
                </tr>
                @endforeach
                
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
      <!-- /.box -->

    </section>
    
@endsection