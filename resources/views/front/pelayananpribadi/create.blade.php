<!DOCTYPE HTML>
<html>
	<head>
		<title>GPIB IMMANUEL MOJOKERTO</title>
	</head>
	<body class="is-preload">

		@extends('layouts.appfront')

    <!-- Main content -->
    <section class="content">

      <h4 align="center">SELAMAT DATANG DI FITUR PELAYANAN KHUSUS!</h4>
      <p align="center">Silakan lengkapi form berikut apabila ingin meminta pelayanan khusus.</p>

      <!-- Default box -->
      <div class="box">
        <div class="box-body">
         <form action="{{route('pelayananpribadi.store')}}" method="POST" enctype="multipart/form-data">
         {{csrf_field()}}
              <div class="box-body">
                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" class="form-control" name="nama">
                </div>
                <div class="form-group">
                  <label>Topik Pelayanan Khusus (Isi dengan deskripsi pelayanan yang anda minta)</label>
                  <textarea class="form-control" name="deskripsi" row="6"></textarea>
                </div>
                <div class="form-group">
                  <label>Masukkan Nomor Telepon yang dapat dihubungi</label>
                  <input type="text" class="form-control" name="telpon">
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-success">Kirim</button>
              </div>
            </form>
            <br>
            {{-- <h4>Syarat & Ketentuan :</h4>
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
            </ul> --}}

          </div>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->

    </section>