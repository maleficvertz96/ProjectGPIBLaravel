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
      <p align="center">Absensi Pendaftaran Ibadah Offline GPIB IMMANUEL Mojokerto</p>

      <!-- Default box -->
      <div class="box">
        <div class="box-body">
         <form action="{{route('absensi.store')}}" method="POST" enctype="multipart/form-data">
         {{csrf_field()}}
              <div class="box-body">
                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" class="form-control" name="nama">
                </div>
                <div class="form-group">
                  <label>Sektor</label>
                  <select class="form-control" name="sektor">
                    <option value=""></option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Alamat</label>
                  <input type="text" class="form-control" name="alamat">
                </div>
                <div class="form-group">
                  <label>Umur</label>
                  <input type="number" class="form-control" name="umur">
                </div>
                <div class="form-group">
                  <label>Pilih Ibadah Minggu</label>
                  <select class="form-control" name="waktu">
                    <option value="Pagi">Pagi</option>
                    <option value="Sore">Sore</option>
                  </select>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-success">Daftar</button>
              </div>
            </form>
            <br>
            <h4>Syarat & Ketentuan :</h4>
            <br>
            <ul>
              <li>
                <span>Jemaat dengan rentang usia 17 - 49 tahun.</span>
              </li>
              <li>
                <span>Balita & Anak-Anak tidak boleh ikut beribadah.</span>
              </li>
              <li>
                <span>Lansia atau usia diatas 50 tahun tidak boleh ikut beribadah.</span>
              </li>
              <li>
                <span>Sebelum masuk ke ruang ibadah, akan dicek suhu terlebih dahulu. Jika suhu diatas 37,5 maka jemaat tidak diperbolehkan masuk ke ruang ibadah.</span>
              </li>
              <li>
                <span>Patuhi Protokol Kesehatan dengan duduk di tempat yang tidak ditandai silang.</span>
              </li>
              <li>
                <span>Wajib memakai Masker, bawa Hand Sanitizer sendiri jika perlu.</span>
              </li>
              <li>
                <span>Wajib Cuci Tangan sebelum memasuki Ruang Ibadah.</span>
              </li>
            </ul>

          </div>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->

    </section>