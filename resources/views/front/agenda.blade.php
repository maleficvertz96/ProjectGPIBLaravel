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
						@foreach ($kegiatans as $agenda)
						<header>
							<h4 align="center"><strong>Agenda Kegiatan Gereja</strong></h4>
							<h4 align="center"><strong>GPIB IMMANUEL MOJOKERTO</strong></h4>
							<h4 align="center"><?php 
								if ($agenda->tanggal == null) {
								  $tanggaltemp = "0000-00-00";
								}else{
								$tanggaltemp = $agenda->tanggal;
								}
								$pecah = explode('-', $tanggaltemp);
								$tanggal = $pecah[2].'/'.$pecah[1].'/'.$pecah[0];
								  ?>
								{{$tanggal}}</h4>
							<br>
						</header>
						<div class="box-body">
						{!! $agenda->isi_kegiatan !!}
						@endforeach
					</div>
				</div>
		</section>
	</body>
</html>