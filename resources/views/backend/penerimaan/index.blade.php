@extends('layouts.app')


@section('content')
<section class="content-header">
      <h1>
        Informasi Penerimaan GPIB IMMANUEL Mojokerto
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
            <div class="box-header">
              <a href="{{route('penerimaan.create')}}" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Baru</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Tanggal</th>
                  <th>Nama</th>
                  <th>Jenis Penerimaan</th>
                  <th>Jumlah</th>
                  <th>Keterangan</th>
                  <th>Pilihan</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($penerimaans as $income)
                <tr>
                  <td><?php 
                    if ($income->tanggal == null) {
                      $tanggaltemp = "0000-00-00";
                    }else{
                    $tanggaltemp = $income->tanggal;
                    }
                    $pecah = explode('-', $tanggaltemp);
                    $tanggal = $pecah[2].'/'.$pecah[1].'/'.$pecah[0];
                      ?>
                    {{$tanggal}} <br>
                  </td>
                  <td>{{$income->nama}}</td>
                  <td>{{$income->jenis}}</td>
                  <td>Rp. {{number_format($income->jumlah, 0)}}</td>
                  <td>{{$income->keterangan}}</td>
                  <td>
                    <a href="{{route('penerimaan.edit',$income->id)}}" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
                    <form action="{{route('penerimaan.destroy',$income->id)}}" method="POST" enctype="multipart/form-data">
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