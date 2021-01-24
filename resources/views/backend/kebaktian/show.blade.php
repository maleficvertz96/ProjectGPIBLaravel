@extends('layouts.app')


@section('content')
<section class="content-header">
      <h1>
        Jadwal Ibadah Kebaktian Rabu "{{$kebaktian->tanggal}}"
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
          <h4>Jadwal Ibadah Rabu (Kebaktian)</h4>
          <table>
            <tr>
              <td>Tanggal</td>
              <td width="30" align="center"> : </td>
              <td><?php 
                    if ($kebaktian->tanggal == null) {
                      $tanggaltemp = "0000-00-00";
                    }else{
                    $tanggaltemp = $kebaktian->tanggal;
                    }
                    $pecah = explode('-', $tanggaltemp);
                    $tanggal = $pecah[2].'/'.$pecah[1].'/'.$pecah[0];
                      ?>
                    {{$tanggal}}</td>
            </tr>
            <tr>
              <td>Pukul</td>
              <td width="30" align="center"> : </td>
              <td>{{$kebaktian->waktu}}</td>
            </tr>
            <tr>
              <td>Sektor</td>
              <td width="30" align="center"> : </td>
              <td>{{$kebaktian->sektor}}</td>
            </tr>
            <tr>
              <td>Tempat</td>
              <td width="30" align="center"> : </td>
              <td>{{$kebaktian->tempat}}</td>
            </tr>
            <tr>
              <td>Alamat</td>
              <td width="30" align="center"> : </td>
              <td>{{$kebaktian->alamat}}</td>
            </tr>
            <tr>
              <td>Pelayan Firman</td>
              <td width="30" align="center"> : </td>
              <td>{{$kebaktian->pf}}</td>
            </tr>
            <tr>
              <td>Pelayan Liturgi</td>
              <td width="30" align="center"> : </td>
              <td>{{$kebaktian->pf}}</td>
            </tr>
          </table>
          <h4>Bacaan dan Lagu-Lagu Kebaktian</h4>
          <table>
            <tr>
              <td>Bacaan</td>
              <td width="30" align="center"> : </td>
              <td>{{$kebaktian->bacaan}}</td>
            </tr>
            <tr>
              <td>Tema</td>
              <td width="30" align="center"> : </td>
              <td>{{$kebaktian->tema}}</td>
            </tr>
            <tr>
              <td>Pembukaan</td>
              <td width="30" align="center"> : </td>
              <td>{{$kebaktian->pembukaan}}</td>
            </tr>
            <tr>
              <td>Salam</td>
              <td width="30" align="center"> : </td>
              <td>{{$kebaktian->salam}}</td>
            </tr>
            <tr>
              <td>Respon Firman</td>
              <td width="30" align="center"> : </td>
              <td>{{$kebaktian->respon_firman}}</td>
            </tr>
            <tr>
              <td>Persembahan</td>
              <td width="30" align="center"> : </td>
              <td>{{$kebaktian->persembahan}}</td>
            </tr>
            <tr>
              <td>Pengutusan</td>
              <td width="30" align="center"> : </td>
              <td>{{$kebaktian->pengutusan}}</td>
            </tr>
          </table>
              <div class="box-footer">
                <a href="{{route('kebaktian.edit',$kebaktian->id)}}" class="btn btn-primary">Edit</a>
              </div>
          </div>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->

    </section>
@endsection