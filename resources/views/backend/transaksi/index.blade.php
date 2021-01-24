@extends('layouts.app')


@section('content')
<section class="content-header">
      <h1>
        Daftar Transaksi Masuk
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Tanggal</th>
                  <th>Nama</th>
                  <th>Nominal</th>
                  <th>Keterangan</th>
                  <th>Status Validasi</th>
                  <th>Pilihan</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($transaksis as $donasi)
                <tr>
                  <td>
                    <?php 
                    if ($donasi->created_at == null) {
                      $created_attemp = "0000-00-00";
                    }else{
                    $created_attemp = $donasi->created_at;
                    }
                    $pecah = explode('-', $created_attemp);
                    $created_at = $pecah[2].'/'.$pecah[1].'/'.$pecah[0];
                      ?>
                    {{$created_at}} <br>
                  </td>
                  <td>{{$donasi->nama}}</td>
                  <td>Rp. {{number_format($donasi->nominal, 0)}}</td>
                  <td><a href="{{route('transaksi.show',$donasi->id)}}">{{$donasi->keterangan}}</a></td>
                  <td>{{$donasi->status}}</td>
                  <td>
                    <a href="{{route('transaksi.edit',$donasi->id)}}" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
                    <form action="{{route('transaksi.destroy',$donasi->id)}}" method="POST" enctype="multipart/form-data">
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