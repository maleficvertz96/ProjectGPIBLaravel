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
									<form action="{{route('jadwalpelkat.index')}}" method="POST">
										@csrf
										<input type="hidden" value="PA" name="pelkat">
										<button type="submit" class="btn btn-success btn-sm">
										Pelkat PA
									</button>
									</form>
									<form action="{{route('jadwalpelkat.index')}}" method="POST">
										@csrf
										<input type="hidden" value="PT" name="pelkat">
										<button type="submit" class="btn btn-warning btn-sm">
											Pelkat PT
										</button>
									</form>
									<form action="{{route('jadwalpelkat.index')}}" method="POST">
										@csrf
										<input type="hidden" value="GP" name="pelkat">
										<button type="submit" class="btn bg-navy btn-sm">
											Pelkat GP
									</button>
									</form>
									<form action="{{route('jadwalpelkat.index')}}" method="POST">
										@csrf
										<input type="hidden" value="PKP" name="pelkat">
										<button type="submit" class="btn bg-purple btn-sm">
											Pelkat PKP
									</button>
									</form>
									<form action="{{route('jadwalpelkat.index')}}" method="POST">
										@csrf
										<input type="hidden" value="PKB" name="pelkat">
										<button type="submit" class="btn btn-info btn-sm">
											Pelkat PKB
									</button>
									</form>
									<form action="{{route('jadwalpelkat.index')}}" method="POST">
										@csrf
										<input type="hidden" value="PKLU" name="pelkat">
										<button type="submit" class="btn btn-default btn-sm">
											Pelkat PKLU
									</button>
									</form>
								</table>	
							{{-- </div> --}}
						</header>
						@foreach ($ibadahpelkats as $ipelkat)
						<header>
							<h4 align="center">Jadwal Ibadah Pelkat {{$ipelkat->pelkat}}</h4>
							<h4 align="center"><?php 
								if ($ipelkat->tanggal == null) {
								  $tanggaltemp = "0000-00-00";
								}else{
								$tanggaltemp = $ipelkat->tanggal;
								}
								$pecah = explode('-', $tanggaltemp);
								$tanggal = $pecah[2].'/'.$pecah[1].'/'.$pecah[0];
								  ?>
								{{$tanggal}}</h4>
							<h4 align="center">{{$ipelkat->waktu}}</h4>
							<br>
						</header>
						<div class="box-body table-responsive no-padding">
						<table class="table table-hover text-center">
							<tr>
								<th>Waktu</th>
								<th>Kategorial <br>
									Pelayan</th>
								<th>Tempat</th>
								<th>Pelayan</th>
							</tr>
							<tr>
								<td><?php 
									if ($ipelkat->tanggal == null) {
									  $tanggaltemp = "0000-00-00";
									}else{
									$tanggaltemp = $ipelkat->tanggal;
									}
									$pecah = explode('-', $tanggaltemp);
									$tanggal = $pecah[2].'/'.$pecah[1].'/'.$pecah[0];
									  ?>
									{{$tanggal}} <br>
									{{$ipelkat->waktu}}
								</td>
								<td>Pelkat {{$ipelkat->pelkat}}</td>
								<td><strong>{{$ipelkat->tempat}}</strong><br>
									{{$ipelkat->alamat}}</td>
								<td>{!! $ipelkat->pelayan !!}</td>
							</tr>
						  </table>
						</div>
						  <br>
						  <br>
						<h4>Bacaan dan Lagu-Lagu Pelkat {{$ipelkat->pelkat}}</h4>
						<table>
							<tr>
								<td>Bacaan Alkitab</td>
              					<td width="30" align="center"> : </td>
              					<td>{{$ipelkat->bacaan}}</td>
							</tr>
							<tr>
								<td>Tema</td>
              					<td width="30" align="center"> : </td>
              					<td>{{$ipelkat->tema}}</td>
							</tr>
							<tr>
								<td>Lagu Pembukaan</td>
              					<td width="30" align="center"> : </td>
              					<td>{{$ipelkat->pembukaan}}</td>
							</tr>
							<tr>
								<td>Pembacaan Mazmur</td>
              					<td width="30" align="center"> : </td>
              					<td>{{$ipelkat->pembacaan_mazmur}}</td>
							</tr>
							<tr>
								<td>Nyanyian Pujian</td>
              					<td width="30" align="center"> : </td>
              					<td>{{$ipelkat->nyanyian_pujian}}</td>
							</tr>
							<tr>
								<td>Respon Firman</td>
              					<td width="30" align="center"> : </td>
              					<td>{{$ipelkat->respon_firman}}</td>
							</tr>
							<tr>
								<td>Lagu Persembahan</td>
              					<td width="30" align="center"> : </td>
              					<td>{{$ipelkat->persembahan}}</td>
							</tr>
							<tr>
								<td>Lagu Pengutusan</td>
              					<td width="30" align="center"> : </td>
              					<td>{{$ipelkat->pengutusan}}</td>
							</tr>
						</table>
						@endforeach
					</div>
				</div>
		</section>
	</body>
</html>