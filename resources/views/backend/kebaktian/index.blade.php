@extends('layouts.app')


@section('content')
<section class="content-header">
      <h1>
        Jadwal Ibadah Rabu Kebaktian
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
            <div class="box-header">
              <a href="{{route('kebaktian.create')}}" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Baru</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Waktu</th>
                  <th>Sektor</th>
                  <th>Tempat</th>
                  <th>Pelayan Bertugas</th>
                  <th>Pilihan</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($kebaktians as $rabu)
                <tr>
                  <td>Rabu, <br>
                    <?php 
                    if ($rabu->tanggal == null) {
                      $tanggaltemp = "0000-00-00";
                    }else{
                    $tanggaltemp = $rabu->tanggal;
                    }
                    $pecah = explode('-', $tanggaltemp);
                    $tanggal = $pecah[2].'/'.$pecah[1].'/'.$pecah[0];
                      ?>
                    {{$tanggal}} <br>
                    {{$rabu->waktu}}</td>
                  <td>{{$rabu->sektor}}</a></td>
                  <td><a href="{{route('kebaktian.show', $rabu->id)}}">{{$rabu->tempat}} <br>
                      {{$rabu->alamat}}</a></td>
                  <td>{{$rabu->pf}} <br>
                      & <br>
                      {{$rabu->pl}}</td>
                  <td>
                    <a href="{{route('kebaktian.edit',$rabu->id)}}" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
                    <form action="{{route('kebaktian.destroy',$rabu->id)}}" method="POST" enctype="multipart/form-data">
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