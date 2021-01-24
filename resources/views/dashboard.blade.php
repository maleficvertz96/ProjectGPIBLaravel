@extends('layouts.app')


@section('content')
<section class="content-header">
      <h1>
        GPIB IMMANUEL MOJOKERTO
        <small>Jl. A. Yani no. 1 - Mojokerto, Jawa Timur</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h4>Selamat Datang di halaman dashboard GPIB IMMANUEL Mojokerto!</h4>
        </div>
        <div class="box-body">
          Silakan Login terlebih dahulu untuk melanjutkan
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
        <a href="{{route('login')}}" class="btn btn-primary">Login</a>
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
@endsection