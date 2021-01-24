@extends('layouts.app')


@section('content')
<section class="content-header">
      <h1>
        Data Jemaat {{$datajemaat->name}}
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
          <table>
            <tr>
              <td>Nama</td>
              <td width="30" align="center"> : </td>
              <td>{{$datajemaat->name}}</td>
            </tr>
            <tr>
              <td>Email</td>
              <td width="30" align="center"> : </td>
              <td>{{$datajemaat->email}}</td>
            </tr>
            <tr>
              <td>Alamat</td>
              <td width="30" align="center"> : </td>
              <td>{{$datajemaat->alamat}}</td>
            </tr>
            <tr>
              <td>No. Telpon</td>
              <td width="30" align="center"> : </td>
              <td>{{$datajemaat->phone}}</td>
            </tr>
            <tr>
              <td>Status Perkawinan</td>
              <td width="30" align="center"> : </td>
              <td>{{$datajemaat->status}}</td>
            </tr>
            <tr>
              <td>Sektor</td>
              <td width="30" align="center"> : </td>
              <td>{{$datajemaat->sektor}}</td>
            </tr>
            <tr>
              <td>Jenis Kelamin</td>
              <td width="30" align="center"> : </td>
              <td>{{$datajemaat->gender}}</td>
            </tr>
            <tr>
              <td>Tempat Lahir</td>
              <td width="30" align="center"> : </td>
              <td>{{$datajemaat->tmptlahir}}</td>
            </tr>
            <tr>
              <td>Tgl. Lahir</td>
              <td width="30" align="center"> : </td>
              <td><?php 
                    if ($datajemaat->tgllahir == null) {
                      $tanggaltemp = "0000-00-00";
                    }else{
                    $tanggaltemp = $datajemaat->tgllahir;
                    }
                    $pecah = explode('-', $tanggaltemp);
                    $tgllahir = $pecah[2].'/'.$pecah[1].'/'.$pecah[0];
                      ?>
                    {{$tgllahir}}</td>
            </tr>
            <tr>
              <td>Tgl. Baptis</td>
              <td width="30" align="center"> : </td>
              <td><?php 
                    if ($datajemaat->baptis == null) {
                      $tanggaltemp = "0000-00-00";
                    }else{
                    $tanggaltemp = $datajemaat->baptis;
                    }
                    $pecah = explode('-', $tanggaltemp);
                    $baptis = $pecah[2].'/'.$pecah[1].'/'.$pecah[0];
                      ?>
                    {{$baptis}}</td>
            </tr>
            <tr>
              <td>Tgl. Pemberkatan Nikah</td>
              <td width="30" align="center"> : </td>
              <td><?php 
                    if ($datajemaat->nikah == null) {
                      $tanggaltemp = "0000-00-00";
                    }else{
                    $tanggaltemp = $datajemaat->nikah;
                    }
                    $pecah = explode('-', $tanggaltemp);
                    $nikah = $pecah[2].'/'.$pecah[1].'/'.$pecah[0];
                      ?>
                    {{$nikah}}</td>
            </tr>
            <tr>
              <td>Pendidikan</td>
              <td width="30" align="center"> : </td>
              <td>{{$datajemaat->pendidikan}}</td>
            </tr>
            <tr>
              <td>Pekerjaan</td>
              <td width="30" align="center"> : </td>
              <td>{{$datajemaat->pekerjaan}}</td>
            </tr>
          </table>
              <div class="box-footer">
                <a href="{{route('datajemaat.edit',$datajemaat->id)}}" class="btn btn-primary">Edit</a>
              </div>
          </div>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->

    </section>
@endsection