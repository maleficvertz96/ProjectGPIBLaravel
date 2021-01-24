@extends('layouts.app')


@section('content')
<section class="content-header">
      <h1>
        Transaksi Lain
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">

          <div class="box-tools pull-right">
          </div>
        </div>
        <div class="box-body">
         <form action="{{route('offlinetransaksi.store')}}" method="POST" enctype="multipart/form-data">
         {{csrf_field()}}
              <div class="box-body">
                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" class="form-control" name="nama">
                </div>
                <div class="form-group">
                  <label>Alamat</label>
                  <input type="text" class="form-control" name="alamat">
                </div>
                <div class="form-group">
                  <label>Nominal</label>
                  <input type="number" class="form-control" name="nominal">
                </div>
                <div class="form-group">
                  <label>Keterangan</label>
                  <input type="text" class="form-control" name="keterangan">
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->

    </section>
    
@endsection