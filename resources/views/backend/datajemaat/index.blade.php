@extends('layouts.app')


@section('content')
<section class="content-header">
      <h1>
        Data Jemaat GPIB IMMANUEL Mojokerto
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
            <div class="box-header">
              <a href="{{route('datajemaat.create')}}" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Baru</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nama</th>
                  <th>Alamat</th>
                  <th>Sektor</th>
                  <th>Jenis Kelamin</th>
                  <th>Tgl Baptis</th>
                  <th>Pilihan</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($datajemaats as $data)
                <tr>
                  <td><a href="{{route('datajemaat.show',$data->id)}}">{{$data->name}}</a></td>
                  <td>{{$data->alamat}}
                  </td>
                  <td>{{$data->sektor}}</td>
                  <td>{{$data->gender}}</td>
                  <td><?php 
                    if ($data->baptis == null) {
                      $tanggaltemp = "0000-00-00";
                    }else{
                    $tanggaltemp = $data->baptis;
                    }
                    $pecah = explode('-', $tanggaltemp);
                    $baptis = $pecah[2].'/'.$pecah[1].'/'.$pecah[0];
                      ?>
                    {{$baptis}}</td>
                  <td>
                    <a href="{{route('datajemaat.edit',$data->id)}}" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
                    <form action="{{route('datajemaat.destroy',$data->id)}}" method="POST" enctype="multipart/form-data">
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