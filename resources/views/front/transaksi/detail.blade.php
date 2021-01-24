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
      <p align="center">Anda harus melakukan transaksi sebesar Rp. {{number_format($request->nominal, 0)}} ke rekening berikut:</p>
      <p align="center">BRI : 350301002149508 A.N GPIB IMMANUEL MOJOKERTO</p>

      <!-- Default box -->
      <div class="box">
            <div class="box-body">
                <table>
                  <tr>
                    <td>Nama</td>
                    <td width="30" align="center"> : </td>
                    <td>{{ $request->nama }}</td>
                  </tr>
                  <tr>
                    <td>Alamat</td>
                    <td width="30" align="center"> : </td>
                    <td>{{ $request->alamat }}</td>
                  </tr>
                  <tr>
                    <td>Nominal</td>
                    <td width="30" align="center"> : </td>
                    <td>Rp. {{number_format($request->nominal , 0)}}</td>
                  </tr>
                  <tr>
                    <td>Keterangan</td>
                    <td width="30" align="center"> : </td>
                    <td>{{ $request->keterangan }}</td>
                  </tr>
                </table>
              </div>
              <!-- /.box-body -->
          </div>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->

    </section>