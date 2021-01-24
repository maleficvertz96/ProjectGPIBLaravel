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
						<header class="text-center">
						</header>
						<header>
							<h4 align="center"><strong>GPIB IMMANUEL MOJOKERTO</strong></h4>
							<h4 align="center"><strong>Warga Jemaat Yang Berulang Tahun Minggu ini</strong></h4>
							<br>
							<p align="center">Majelis Jemaat dan seluruh Jemaat mengucapkan “Selamat Berbahagia” kepada Bapak/Ibu, Sdr(i) yang berulang tahun kelahiran dan perkawinan dari tgl. 23 Februari – 29 Februari  2020.  Bapak/Ibu, Sdr (i) yang berulang tahun pada minggu sepekan ini:</p>
							<br>
						</header>
						<div class="box-body">
							<table class="table table-hover">
								<thead>
								<tr>
									<th>Nama</th>
									<th>Sektor</th>
									<th>Tanggal</th>
									<th>HUT</th>
								</tr>
								</thead>
								<tbody>@foreach ($huts as $ultah)
								<tr>
									<td>{{$ultah->nama}}</td>
									<td>{{$ultah->sektor}}</td>
									<td><?php 
										if ($ultah->tanggal == null) {
										  $tanggaltemp = "0000-00-00";
										}else{
										$tanggaltemp = $ultah->tanggal;
										}
										$pecah = explode('-', $tanggaltemp);
										$tanggal = $pecah[2].'/'.$pecah[1].'/'.$pecah[0];
										  ?>
										{{$tanggal}}
									</td>
									<td>{{$ultah->hut}}</td>
								</tr>
								@endforeach
							</tbody>
							  </table>
					</div>
				</div>
		</section>
	</body>
</html>