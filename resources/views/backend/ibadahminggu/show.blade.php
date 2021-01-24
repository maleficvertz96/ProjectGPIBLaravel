@extends('layouts.app')


@section('content')
<section class="content-header">
      <h1>
        Jadwal Ibadah Hari Minggu "{{$ibadahminggu->nama}}""
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
              <td>Ibadah Hari Minggu</td>
              <td width="30" align="center"> : </td>
              <td>{{$ibadahminggu->nama}}</td>
            </tr>
            <tr>
              <td>Tanggal</td>
              <td width="30" align="center"> : </td>
              <td><?php 
                    if ($ibadahminggu->tanggal == null) {
                      $tanggaltemp = "0000-00-00";
                    }else{
                    $tanggaltemp = $ibadahminggu->tanggal;
                    }
                    $pecah = explode('-', $tanggaltemp);
                    $tanggal = $pecah[2].'/'.$pecah[1].'/'.$pecah[0];
                      ?>
                    {{$tanggal}}</td>
            </tr>
            <tr>
              <td>Waktu Ibadah</td>
              <td width="30" align="center"> : </td>
              <td>{{$ibadahminggu->ibadah}}</td>
            </tr>
            <tr>
              <td>Pukul</td>
              <td width="30" align="center"> : </td>
              <td>{{$ibadahminggu->waktu}}</td>
            </tr>
            <tr>
              <td>Acara</td>
              <td width="30" align="center"> : </td>
              <td>{{$ibadahminggu->acara}}</td>
            </tr>
            <tr>
              <td>Pelayan Firman</td>
              <td width="30" align="center"> : </td>
              <td>{{$ibadahminggu->pf}}</td>
            </tr>
            <tr>
              <td>Jabatan</td>
              <td width="30" align="center"> : </td>
              <td>{{$ibadahminggu->jabatan}}</td>
            </tr>
            <tr>
              <td>Pelayan 1</td>
              <td width="30" align="center"> : </td>
              <td>{{$ibadahminggu->p1}}</td>
            </tr>
            <tr>
              <td>Pelayan 2</td>
              <td width="30" align="center"> : </td>
              <td>{{$ibadahminggu->p2}}</td>
            </tr>
            <tr>
              <td>Pelayan 3</td>
              <td width="30" align="center"> : </td>
              <td>{{$ibadahminggu->p3}}</td>
            </tr>
            <tr>
              <td>Pelayan 4</td>
              <td width="30" align="center"> : </td>
              <td>{{$ibadahminggu->p4}}</td>
            </tr>
            <tr>
              <td>Pelayan 5</td>
              <td width="30" align="center"> : </td>
              <td>{{$ibadahminggu->p5}}</td>
            </tr>
            <tr>
              <td>Pelayan 6</td>
              <td width="30" align="center"> : </td>
              <td>{{$ibadahminggu->p6}}</td>
            </tr>
            <tr>
              <td>Pelayan 7</td>
              <td width="30" align="center"> : </td>
              <td>{{$ibadahminggu->p7}}</td>
            </tr>
            <tr>
              <td>Pelayan 8</td>
              <td width="30" align="center"> : </td>
              <td>{{$ibadahminggu->p8}}</td>
            </tr>
            <tr>
              <td>Pengantar Kolekte 1</td>
              <td width="30" align="center"> : </td>
              <td>{{$ibadahminggu->kolekte1}}</td>
            </tr>
            <tr>
              <td>Pengantar Kolekte 2</td>
              <td width="30" align="center"> : </td>
              <td>{{$ibadahminggu->kolekte2}}</td>
            </tr>
            <tr>
              <td>Pengantar Kolekte 3</td>
              <td width="30" align="center"> : </td>
              <td>{{$ibadahminggu->kolekte3}}</td>
            </tr>
            <tr>
              <td>Pengantar Kolekte 4</td>
              <td width="30" align="center"> : </td>
              <td>{{$ibadahminggu->kolekte4}}</td>
            </tr>
            <tr>
              <td>Organist</td>
              <td width="30" align="center"> : </td>
              <td>{{$ibadahminggu->organist}}</td>
            </tr>
            <tr>
              <td>Kantoria 1</td>
              <td width="30" align="center"> : </td>
              <td>{{$ibadahminggu->kantoria1}}</td>
            </tr>
            <tr>
              <td>Kantoria 2</td>
              <td width="30" align="center"> : </td>
              <td>{{$ibadahminggu->kolekte2}}</td>
            </tr>
            <tr>
              <td>Operator Slide</td>
              <td width="30" align="center"> : </td>
              <td>{{$ibadahminggu->operator}}</td>
            </tr>
            <tr>
              <td>Paduan Suara/Vocal Group/Solo</td>
              <td width="30" align="center"> : </td>
              <td>{{$ibadahminggu->vocalgroup}}</td>
            </tr>
            <tr>
              <td>Operator Sound System</td>
              <td width="30" align="center"> : </td>
              <td>{{$ibadahminggu->soundman}}</td>
            </tr>
          </table>
              <div class="box-footer">
                <a href="{{route('ibadahminggu.edit',$ibadahminggu->id)}}" class="btn btn-primary">Edit</a>
              </div>
          </div>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->

    </section>
@endsection