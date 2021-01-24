@extends('layouts.app')


@section('content')
<section class="content-header">
      <h1>
        Jadwal Ibadah Pelkat beserta Pelayan Bertugas
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
            <div class="box-header">
              <a href="{{route('ibadahpelkat.create')}}" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Baru</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Waktu</th>
                  <th>Pelkat</th>
                  <th>Tempat</th>
                  <th>Pelayan Bertugas</th>
                  <th>Pilihan</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($ibadahpelkat as $ipelkat)
                <tr>
                  <td><?php 
                    if ($ipelkat->tanggal == null) {
                      $tanggaltemp = "0000-00-00";
                    }else{
                    $tanggaltemp = $ipelkat->tanggal;
                    }
                    $pecah = explode('-', $tanggaltemp);
                    $tanggal = $pecah[2].'/'.$pecah[1].'/'.$pecah[0];
                      ?>
                    {{$tanggal}} <br>
                    {{$ipelkat->waktu}}
                  </td>
                  <td><a href="{{route('ibadahpelkat.show',$ipelkat->id)}}">{{$ipelkat->pelkat}}</a></td>
                  <td>{{$ipelkat->tempat}} <br>
                      {{$ipelkat->alamat}}</td>
                  <td>{!! $ipelkat->pelayan !!}</td>
                  <td>
                    <a href="{{route('ibadahpelkat.edit',$ipelkat->id)}}" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
                    <form action="{{route('ibadahpelkat.destroy',$ipelkat->id)}}" method="POST" enctype="multipart/form-data">
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