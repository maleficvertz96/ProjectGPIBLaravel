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
							{{-- <div class="btn-group"> --}}
								<table>
									<form action="{{route('ibadahhariminggu.index')}}" method="POST">
										@csrf
										<input type="hidden" value="Pagi" name="ibadah">
										<button type="submit" class="btn btn-success">
										Pagi
									</button>
								</form>
									<form action="{{route('ibadahhariminggu.index')}}" method="POST">
									@csrf
									<input type="hidden" value="Sore" name="ibadah">
									<button type="submit" class="btn btn-warning">
										Sore
									</button>
								</form>
							</table>
						</header>
						@foreach ($ibadahminggus as $ihm)
						<header>
							<h4 align="center">Jadwal Ibadah Hari Minggu</h4>
							<h4 align="center">{{$ihm->nama}}</h4>
							<h4 align="center"><?php 
								if ($ihm->tanggal == null) {
								  $tanggaltemp = "0000-00-00";
								}else{
								$tanggaltemp = $ihm->tanggal;
								}
								$pecah = explode('-', $tanggaltemp);
								$tanggal = $pecah[2].'/'.$pecah[1].'/'.$pecah[0];
								  ?>
								{{$tanggal}}</h4>
							<h4 align="center">{{$ihm->waktu}}</h4>
							<h4 align="center">{{$ihm->acara}}</h4>
							<br>
							<p>Ucapan Terimakasih Kepada yang melayani:</p>
						</header>
						<table class="table table-striped">
							<tr>
							  <td>Pelayan Firman</td>
							  <td>{{$ihm->pf}} <br>
								{{$ihm->jabatan}}</td>
							</tr>
							<tr>
							  <td>Pelayan 1</td>
							  <td>{{$ihm->p1}}</td>
							</tr>
							<tr>
							  <td>Pelayan 2</td>
							  <td>{{$ihm->p2}}</td>
							</tr>
							<tr>
							  <td>Pelayan 3</td>
							  <td>{{$ihm->p3}}</td>
							</tr>
							<tr>
							  <td>Pelayan 4</td>
							  <td>{{$ihm->p4}}</td>
							</tr>
							<tr>
							  <td>Pelayan 5</td>
							  <td>{{$ihm->p5}}</td>
							</tr>
							<tr>
							  <td>Pelayan 6</td>
							  <td>{{$ihm->p6}}</td>
							</tr>
							<tr>
							  <td>Pelayan 7</td>
							  <td>{{$ihm->p7}}</td>
							</tr>
							<tr>
							  <td>Pelayan 8</td>
							  <td>{{$ihm->p8}}</td>
							</tr>
							<tr>
							  <td>Pengantar Kolekte 1</td>
							  <td>{{$ihm->kolekte1}}</td>
							</tr>
							<tr>
							  <td>Pengantar Kolekte 2</td>
							  <td>{{$ihm->kolekte2}}</td>
							</tr>
							<tr>
							  <td>Pengantar Kolekte 3</td>
							  <td>{{$ihm->kolekte3}}</td>
							</tr>
							<tr>
							  <td>Pengantar Kolekte 4</td>
							  <td>{{$ihm->kolekte4}}</td>
							</tr>
							<tr>
							  <td>Organist</td>
							  <td>{{$ihm->organist}}</td>
							</tr>
							<tr>
							  <td>Kantoria 1</td>
							  <td>{{$ihm->kantoria1}}</td>
							</tr>
							<tr>
							  <td>Kantoria 2</td>
							  <td>{{$ihm->kolekte2}}</td>
							</tr>
							<tr>
							  <td>Operator Slide</td>
							  <td>{{$ihm->operator}}</td>
							</tr>
							<tr>
							  <td>Paduan Suara/Vocal Group/Solo</td>
							  <td>{{$ihm->vocalgroup}}</td>
							</tr>
							<tr>
							  <td>Operator Sound System</td>
							  <td>{{$ihm->soundman}}</td>
							</tr>
						  </table>
						  <br>
						  <br>
						@endforeach
					</div>
				</div>
		</section>
	</body>
</html>