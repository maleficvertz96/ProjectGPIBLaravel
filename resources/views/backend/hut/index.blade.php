@extends('layouts.app')


@section('content')
<section class="content-header">
      <h1>
        Warga Jemaat yang berulang tahun Kelahiran & Perkawinan
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
            <div class="box-header">
              <a href="{{route('hut.create')}}" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Baru</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nama</th>
                  <th>Tanggal</th>
                  <th>Sektor</th>
                  <th>Hari Ulang Tahun</th>
                  <th>Pilihan</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($hut as $ultah)
                <tr>
                  <td>{{$ultah->nama}}</td>
                  <td><?php 
                    if ($ultah->tanggal == null) {
                      $tanggaltemp = "0000-00-00";
                    }else{
                    $tanggaltemp = $ultah->tanggal;
                    }
                    $pecah = explode('-', $tanggaltemp);
                    $tanggal = $pecah[2].'/'.$pecah[1].'/'.$pecah[0];
                      ?>
                    {{$tanggal}}
                  </td>
                  <td>{{$ultah->sektor}}</td>
                  <td>{{$ultah->hut}}</td>
                  <td>
                    <a href="{{route('hut.edit',$ultah->id)}}" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
                    <form action="{{route('hut.destroy',$ultah->id)}}" method="POST" enctype="multipart/form-data">
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