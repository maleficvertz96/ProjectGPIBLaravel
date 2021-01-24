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
      <p align="center">Silakan lengkapi form ini untuk melakukan Transaksi</p>

      <!-- Default box -->
      <div class="box">
        <div class="box-body">
         <form action="{{route('transaksi.store')}}" method="POST" enctype="multipart/form-data">
         {{csrf_field()}}
              <div class="box-body">
                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" class="form-control" name="nama">
                </div>
                <div class="form-group">
                  <label>Alamat</label>
                  <input type="text" class="form-control" name="alamat">
                </div>
                <div class="form-group">
                  <label>Nominal</label>
                  <input type="number" class="form-control" name="nominal">
                </div>
                <div class="form-group">
                  <label>Keterangan</label>
                  <textarea class="form-control" name="keterangan" row="3"></textarea>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->

    </section>