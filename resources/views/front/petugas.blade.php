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
							<h4 align="center"><strong>Jadwal Pembinaan Pelayan</strong></h4>

						</header>
						<div class="box-body table-responsive no-padding">
							<table class="table table-hover text-center">
								<thead>
								<tr>
									<th>Waktu</th>
									<th>Kategorial Pelayanan</th>
									<th>Pembina</th>
									<th>Pelayan</th>
								</tr>
								</thead>
								<tbody>@foreach ($pembinaans as $petugas)
								<tr>
									<td><?php 
										if ($petugas->tanggal == null) {
										  $tanggaltemp = "0000-00-00";
										}else{
										$tanggaltemp = $petugas->tanggal;
										}
										$pecah = explode('-', $tanggaltemp);
										$tanggal = $pecah[2].'/'.$pecah[1].'/'.$pecah[0];
										  ?>
										{{$tanggal}} <br>
										{{$petugas->pukul}}
									</td>
									<td>{{$petugas->kategori}}</td>
									<td>{{ $petugas->pembina }}</td>
									<td>{!!$petugas->pelayan!!}</td>
								</tr>
								@endforeach
							</tbody>
							  </table>
					</div>
				</div>
		</section>
	</body>
</html>