@extends('layouts.app')


@section('content')
<section class="content-header">
      <h1>
        HUT
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">

          <div class="box-tools pull-right">
          </div>
        </div>
        <div class="box-body">
          <h4>Jadwal Ibadah Pelkat</h4>
          <table>
            <tr>
              <td>Tanggal</td>
              <td width="30" align="center"> : </td>
              <td><?php 
                    if ($ibadahpelkat->tanggal == null) {
                      $tanggaltemp = "0000-00-00";
                    }else{
                    $tanggaltemp = $ibadahpelkat->tanggal;
                    }
                    $pecah = explode('-', $tanggaltemp);
                    $tanggal = $pecah[2].'/'.$pecah[1].'/'.$pecah[0];
                      ?>
                    {{$tanggal}}</td>
            </tr>
            <tr>
              <td>Pukul</td>
              <td width="30" align="center"> : </td>
              <td>{{$ibadahpelkat->waktu}}</td>
            </tr>
            <tr>
              <td>Pelkat</td>
              <td width="30" align="center"> : </td>
              <td>{{$ibadahpelkat->pelkat}}</td>
            </tr>
            <tr>
              <td>Tempat</td>
              <td width="30" align="center"> : </td>
              <td>{{$ibadahpelkat->tempat}}</td>
            </tr>
              <td>Alamat</td>
              <td width="30" align="center"> : </td>
              <td>{{$ibadahpelkat->alamat}}</td>
            </tr>
            <tr>
              <td>Pelayan Bertugas</td>
              <td width="30" align="center"> : </td>
              <td>{!! $ibadahpelkat->pelayan !!}</td>
            </tr>
          </table>
          <h4>Bacaan dan Lagu-Lagu Ibadah Pelkat</h4>
          <table>
            <tr>
              <td>Bacaan</td>
              <td width="30" align="center"> : </td>
              <td>{{$ibadahpelkat->bacaan}}</td>
            </tr>
            <tr>
              <td>Tema</td>
              <td width="30" align="center"> : </td>
              <td>{{$ibadahpelkat->tema}}</td>
            </tr>
            <tr>
              <td>Pembukaan</td>
              <td width="30" align="center"> : </td>
              <td>{{$ibadahpelkat->pembukaan}}</td>
            </tr>
            <tr>
              <td>Pembacaan Mazmur</td>
              <td width="30" align="center"> : </td>
              <td>{{$ibadahpelkat->pembacaan_mazmur}}</td>
            </tr>
            <tr>
              <td>Nyanyian Pujian</td>
              <td width="30" align="center"> : </td>
              <td>{{$ibadahpelkat->nyanyian_pujian}}</td>
            </tr>
            <tr>
              <td>Respon Firman</td>
              <td width="30" align="center"> : </td>
              <td>{{$ibadahpelkat->respon_firman}}</td>
            </tr>
            <tr>
              <td>Persembahan</td>
              <td width="30" align="center"> : </td>
              <td>{{$ibadahpelkat->persembahan}}</td>
            </tr>
            <tr>
              <td>Pengutusan</td>
              <td width="30" align="center"> : </td>
              <td>{{$ibadahpelkat->pengutusan}}</td>
            </tr>
          </table>
              <div class="box-footer">
                <a href="{{route('ibadahpelkat.edit',$ibadahpelkat->id)}}" class="btn btn-primary">Edit</a>
              </div>
          </div>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->

    </section>
@endsection