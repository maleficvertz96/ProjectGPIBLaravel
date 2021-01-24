@extends('layouts.app')


@section('content')
<section class="content-header">
      <h1>
        Absensi Data Jemaat yang mendaftar Ibadah Offline Hari Minggu
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
                  <th>Sektor</th>
                  <th>Alamat</th>
                  <th>Umur</th>
                  <th>Ibadah Hari Minggu</th>
                  <th>Keterangan</th>
                  <th>Pilihan</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($absensis as $guest)
                <tr>
                  <td>{{$guest->nama}}</td>
                  <td>{{$guest->sektor}}
                  </td>
                  <td>{{$guest->alamat}}</td>
                  <td>{{$guest->umur}}</td>
                  <td>{{$guest->waktu}}</td>
                  <td>{{$guest->keterangan}}</td>
                  <td>
                    <a href="{{route('absensi.edit',$guest->id)}}" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
                    <form action="{{route('absensi.destroy',$guest->id)}}" method="POST" enctype="multipart/form-data">
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