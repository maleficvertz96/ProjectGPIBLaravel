<!DOCTYPE HTML>
<html>
	<head>
		<title>GPIB IMMANUEL MOJOKERTO</title>
	</head>
	<body class="is-preload">

		@extends('layouts.appfront')

    <!-- Main content -->
    <section class="content">

      <h4 align="center">GPIB IMMANUEL MOJOKERTO</h4>
      <p align="center">Daftar Jemaat yang mendaftar Ibadah Offline</p>

      <!-- Default box -->
      <div class="box">
            <div class="box-body table-responsive no-padding">
                <table class="table table-hover text-center">
                  <thead>
                  <tr>
                    <th>Nama</th>
                    <th>Sektor</th>
                    <th>Alamat</th>
                    <th>Umur</th>
                    <th>Ibadah Minggu</th>
                  </tr>
                </thead>
                <tbody>@foreach ($absensi as $guest)
                  <tr>
                    <td>{{$guest->nama}}</td>
                    <td>{{$guest->sektor}}</td>
                    <td>{{$guest->alamat}}</td>
                    <td>{{number_format($guest->umur, 0)}} Thn</td>
                    <td>{{$guest->waktu}}</td>
                  </tr>
                  @endforeach
                </tbody>
                </table>
              </div>
              <!-- /.box-body -->
          </div>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->

    </section>