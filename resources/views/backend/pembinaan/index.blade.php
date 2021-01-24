@extends('layouts.app')


@section('content')
<section class="content-header">
      <h1>
        Jadwal Pembinaan Pelayan
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
            <div class="box-header">
              <a href="{{route('pembinaan.create')}}" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Baru</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Waktu</th>
                  <th>Kategorial Pelayan</th>
                  <th>Pembina</th>
                  <th>Pelayan</th>
                  <th>Pilihan</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($pembinaans as $petugas)
                <tr>
                  <td><?php 
                    if ($petugas->tanggal == null) {
                      $tanggaltemp = "0000-00-00";
                    }else{
                    $tanggaltemp = $petugas->tanggal;
                    }
                    $pecah = explode('-', $tanggaltemp);
                    $tanggal = $pecah[2].'/'.$pecah[1].'/'.$pecah[0];
                      ?>
                    {{$tanggal}} <br>
                    {{$petugas->pukul}}
                  </td>
                  <td>{{$petugas->kategori}}</td>
                  <td>{{$petugas->pembina}}</td>
                  <td>{!! $petugas->pelayan !!}</td>
                  <td>
                    <a href="{{route('pembinaan.edit',$petugas->id)}}" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
                    <form action="{{route('pembinaan.destroy',$petugas->id)}}" method="POST" enctype="multipart/form-data">
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