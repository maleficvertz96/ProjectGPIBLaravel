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
								<table>
									<form action="{{route('jadwalkebaktian.index')}}" method="POST">
										@csrf
										<input type="hidden" value="1" name="sektor">
										<button type="submit" class="btn btn-success btn-sm">
										Sektor 1
										</button>
									</form>
									<form action="{{route('jadwalkebaktian.index')}}" method="POST">
										@csrf
										<input type="hidden" value="2" name="sektor">
										<button type="submit" class="btn btn-warning btn-sm">
										Sektor 2
										</button>
									</form>
									<form action="{{route('jadwalkebaktian.index')}}" method="POST">
										@csrf
										<input type="hidden" value="3" name="sektor">
										<button type="submit" class="btn bg-navy btn-sm">
										Sektor 3
									</button>
									</form>
									<form action="{{route('jadwalkebaktian.index')}}" method="POST">
										@csrf
										<input type="hidden" value="4" name="sektor">
										<button type="submit" class="btn bg-purple btn-sm">
										Sektor 4
									</button>
									</form>
									<form action="{{route('jadwalkebaktian.index')}}" method="POST">
										@csrf
										<input type="hidden" value="5" name="sektor">
										<button type="submit" class="btn btn-info btn-sm">
											Sektor 5
									</button>
									</form>
								</table>	
							{{-- </div> --}}
						</header>
						@foreach ($kebaktians as $rumahtangga)
						<header>
							<h4 align="center">Jadwal Ibadah Kebaktian Sektor {{$rumahtangga->sektor}}</h4>
							<h4 align="center">GPIB IMMANUEL MOJOKERTO</h4>
							<h4 align="center"><?php 
								if ($rumahtangga->tanggal == null) {
								  $tanggaltemp = "0000-00-00";
								}else{
								$tanggaltemp = $rumahtangga->tanggal;
								}
								$pecah = explode('-', $tanggaltemp);
								$tanggal = $pecah[2].'/'.$pecah[1].'/'.$pecah[0];
								  ?>
								{{$tanggal}}</h4>
							<h4 align="center">{{$rumahtangga->waktu}}</h4>
							<br>
						</header>
						<div class="box-body table-responsive no-padding">
						<table class="table table-hover text-center">
							<tr>
								<th>Waktu</th>
								<th>Sektor Pelayanan</th>
								<th>Tempat</th>
								<th>Pelayan Bertugas</th>
							</tr>
							<tr>
								<td><?php 
									if ($rumahtangga->tanggal == null) {
									  $tanggaltemp = "0000-00-00";
									}else{
									$tanggaltemp = $rumahtangga->tanggal;
									}
									$pecah = explode('-', $tanggaltemp);
									$tanggal = $pecah[2].'/'.$pecah[1].'/'.$pecah[0];
									  ?>
									{{$tanggal}} <br>
									{{$rumahtangga->waktu}}
								</td>
								<td>Sektor {{$rumahtangga->sektor}}</td>
								<td><strong>{{$rumahtangga->tempat}}</strong><br>
									{{$rumahtangga->alamat}}</td>
								<td><strong>PF</strong> : {{$rumahtangga->pf}} <br>
									<strong>PL</strong> : {{$rumahtangga->pl}}</td>
							</tr>
						  </table>
						</div>
						  <br>
						  <br>
						<h4>Bacaan dan Lagu-Lagu Kebaktian Sektor {{$rumahtangga->sektor}}</h4>
						<table>
							<tr>
								<td>Bacaan Alkitab</td>
              					<td width="30" align="center"> : </td>
              					<td>{{$rumahtangga->bacaan}}</td>
							</tr>
							<tr>
								<td>Tema</td>
              					<td width="30" align="center"> : </td>
              					<td>{{$rumahtangga->tema}}</td>
							</tr>
							<tr>
								<td>Lagu Pembukaan</td>
              					<td width="30" align="center"> : </td>
              					<td>{{$rumahtangga->pembukaan}}</td>
							</tr>
							<tr>
								<td>Salam</td>
              					<td width="30" align="center"> : </td>
              					<td>{{$rumahtangga->salam}}</td>
							</tr>
							<tr>
								<td>Respon Firman</td>
              					<td width="30" align="center"> : </td>
              					<td>{{$rumahtangga->respon_firman}}</td>
							</tr>
							<tr>
								<td>Lagu Persembahan</td>
              					<td width="30" align="center"> : </td>
              					<td>{{$rumahtangga->persembahan}}</td>
							</tr>
							<tr>
								<td>Lagu Pengutusan</td>
              					<td width="30" align="center"> : </td>
              					<td>{{$rumahtangga->pengutusan}}</td>
							</tr>
						</table>
						@endforeach
					</div>
				</div>
		</section>
	</body>
</html>