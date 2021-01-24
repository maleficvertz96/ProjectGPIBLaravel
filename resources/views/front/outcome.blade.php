<!DOCTYPE HTML>
<html>
	<head>
		<title>GPIB IMMANUEL MOJOKERTO</title>
	</head>
	<body class="is-preload">

		@extends('layouts.appfront')
		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="inner">
					<div class="content">
						<header>
							<h4 align="center">Laporan Keuangan GPIB IMMANUEL Mojokerto</h4>
							<h4 align="center">Pengeluaran</h4>
						</header>
						<div class="box-body table-responsive no-padding">
							<table class="table table-hover text-center">
								<thead>
								<tr>
									<th>Tanggal</th>
									<th width="300px">Nama</th>
									<th>Jenis Pengeluaran</th>
									<th>Jumlah</th>
									<th>Keterangan</th>
								</tr>
								</thead>
								<tbody>@foreach ($pengeluarans as $outcome)
								<tr>
									<td><?php 
										if ($outcome->tanggal == null) {
										  $tanggaltemp = "0000-00-00";
										}else{
										$tanggaltemp = $outcome->tanggal;
										}
										$pecah = explode('-', $tanggaltemp);
										$tanggal = $pecah[2].'/'.$pecah[1].'/'.$pecah[0];
										  ?>
										{{$tanggal}}
									</td>
									<td width="300px">{{$outcome->nama}}</td>
									<td>{{$outcome->jenis}}</td>
									<td>Rp. {{number_format($outcome->jumlah, 0)}}</td>
									<td>{{$outcome->keterangan}}</td>
								</tr>
								@endforeach
								</tbody>
							  </table>
							</div>
						  <br>
						  <br>
						
					</div>
				</div>
		</section>
	</body>
</html>