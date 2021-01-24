@extends('layouts.app')


@section('content')
<section class="content-header">
      <h1>
        Agenda Kegiatan
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
            <div class="box-header">
              <a href="{{route('kegiatan.create')}}" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Baru</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Tanggal</th>
                  <th>Nama</th>
                  <th>Isi</th>
                  <th>Pilihan</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($kegiatans as $agenda)
                <tr>
                  <td><?php 
                    if ($agenda->tanggal == null) {
                      $tanggaltemp = "0000-00-00";
                    }else{
                    $tanggaltemp = $agenda->tanggal;
                    }
                    $pecah = explode('-', $tanggaltemp);
                    $tanggal = $pecah[2].'/'.$pecah[1].'/'.$pecah[0];
                      ?>
                    {{$tanggal}}
                  </td>
                  <td>{{$agenda->nama_kegiatan}}
                  <td><a href="{{route('kegiatan.show',$agenda->id)}}">Lihat Detail</a></td>
                  <td>
                    <a href="{{route('kegiatan.edit',$agenda->id)}}" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
                    <form action="{{route('kegiatan.destroy',$agenda->id)}}" method="POST" enctype="multipart/form-data">
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