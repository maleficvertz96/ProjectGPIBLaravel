@extends('layouts.app')


@section('content')
<section class="content-header">
      <h1>
        Jadwal Ibadah Hari Minggu beserta Pelayan Bertugas
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
            <div class="box-header">
              <a href="{{route('ibadahminggu.create')}}" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Baru</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Ibadah Minggu</th>
                  <th>Waktu</th>
                  <th>Pagi / Sore</th>
                  <th>Acara</th>
                  <th>Pelayan Firman</th>
                  <th>Pilihan</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($ibadahminggus as $ihm)
                <tr>
                  <td><a href="{{route('ibadahminggu.show', $ihm->id)}}">{{$ihm->nama}}</a></td>
                  <td><?php 
                    if ($ihm->tanggal == null) {
                      $tanggaltemp = "0000-00-00";
                    }else{
                    $tanggaltemp = $ihm->tanggal;
                    }
                    $pecah = explode('-', $tanggaltemp);
                    $tanggal = $pecah[2].'/'.$pecah[1].'/'.$pecah[0];
                      ?>
                    {{$tanggal}} <br>
                    {{$ihm->waktu}}
                  </td>
                  <td>{{$ihm->ibadah}}</td>
                  <td>{{$ihm->acara}}</td>
                  <td>{{$ihm->pf}} <br>
                      {{$ihm->jabatan}}</td>
                  <td>
                    <a href="{{route('ibadahminggu.edit',$ihm->id)}}" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
                    <form action="{{route('ibadahminggu.destroy',$ihm->id)}}" method="POST" enctype="multipart/form-data">
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