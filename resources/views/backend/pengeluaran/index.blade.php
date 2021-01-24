@extends('layouts.app')


@section('content')
<section class="content-header">
      <h1>
        Informasi Pengeluaran GPIB IMMANUEL Mojokerto
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
            <div class="box-header">
              <a href="{{route('pengeluaran.create')}}" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Baru</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Tanggal</th>
                  <th>Nama</th>
                  <th>Jenis Pengeluaran</th>
                  <th>Jumlah</th>
                  <th>Keterangan</th>
                  <th>Pilihan</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($pengeluarans as $outcome)
                <tr>
                  <td><?php 
                    if ($outcome->tanggal == null) {
                      $tanggaltemp = "0000-00-00";
                    }else{
                    $tanggaltemp = $outcome->tanggal;
                    }
                    $pecah = explode('-', $tanggaltemp);
                    $tanggal = $pecah[2].'/'.$pecah[1].'/'.$pecah[0];
                      ?>
                    {{$tanggal}} <br>
                  </td>
                  <td>{{$outcome->nama}}</td>
                  <td>{{$outcome->jenis}}</td>
                  <td>Rp. {{number_format($outcome->jumlah, 0)}}</td>
                  <td>{{$outcome->keterangan}}</td>
                  <td>
                    <a href="{{route('pengeluaran.edit',$outcome->id)}}" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
                    <form action="{{route('pengeluaran.destroy',$outcome->id)}}" method="POST" enctype="multipart/form-data">
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