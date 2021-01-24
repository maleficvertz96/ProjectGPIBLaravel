@extends('layouts.app')


@section('content')
<section class="content-header">
      <h1>
        Detail Transaksi Offline
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-body">
          <section class="invoice">
            <!-- title row -->
            <div class="row">
              <div class="col-xs-12">
                <h2 class="page-header">
                  GPIB IMMANUEL MOJOKERTO
                </h2>
              </div>
              <!-- /.col -->
            </div>
            <!-- info row -->
            <div class="row invoice-info">
              <div class="col-sm-4 invoice-col">
                From
                <address>
                  <strong>{{ $offlinetransaksi->nama }}</strong><br>
                  {{ $offlinetransaksi->alamat }}<br>
                </address>
              </div>
              <!-- /.col -->
              <div class="col-sm-4 invoice-col">
                To
                <address>
                  <strong>GPIB IMMANUEL MOJOKERTO</strong><br>
                  Jl. A. Yani no. 1<br>
                  Mojokerto, Jawa Timur<br>
                  Telpon: (0321) 322295<br>
                  Email: gpib_imannuel_mojokerto@yahoo.co.id
                </address>
              </div>
              <!-- /.col -->
              <div class="col-sm-4 invoice-col">
                <b>Invoice #{{ $offlinetransaksi->id }}</b><br>
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
      
            <!-- Table row -->
            <div class="row">
              <div class="col-xs-12 table-responsive">
                <table class="table table-striped text-center">
                  <thead>
                  <tr>
                    <th>Nominal Donasi</th>
                    <th>Keterangan</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>Rp.{{number_format($offlinetransaksi->nominal , 0) }}</td>
                    <td>{{ $offlinetransaksi->keterangan }}</td>
                  </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
      
            <!-- this row will not appear when printing -->
            <div class="row no-print">
              <div class="col-xs-12">
                {{-- <button type="button" class="btn btn-primary pull-right" style="margin-right: 5px;">
                  <i class="fa fa-download"></i> Generate PDF
                </button> --}}
              </div>
            </div>
          </section>
          </div>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->

    </section>
@endsection