@extends('layouts.app')


@section('content')
<section class="content-header">
      <h1>
        Status Validasi
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
         <form action="{{route('transaksi.update', $transaksi->id)}}" method="POST" enctype="multipart/form-data">
         {{csrf_field()}}
         {{method_field('PUT')}}
              <div class="box-body">
                <div class="form-group">
                  <label>Status Validasi</label>
                  <select class="form-control" name="status">
                    <option value="Valid" <?php if ($transaksi->status == "Valid") { echo "selected";}?>>Valid</option>
                    <option value="Belum Valid" <?php if ($transaksi->status == "Belum Valid") { echo "selected";}?>>Belum Valid</option>
                  </select>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Ubah</button>
              </div>
            </form>
          </div>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->

    </section>
@endsection