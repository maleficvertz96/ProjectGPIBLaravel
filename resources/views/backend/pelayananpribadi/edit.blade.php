@extends('layouts.app')


@section('content')
<section class="content-header">
      <h1>
        Status Pelayanan Khusus
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
         <form action="{{route('pelayananpribadi.update', $pelayananpribadi->id)}}" method="POST" enctype="multipart/form-data">
         {{csrf_field()}}
         {{method_field('PUT')}}
              <div class="box-body">
                <div class="form-group">
                  <label>Apakah sudah dilayani?</label>
                  <select class="form-control" name="status">
                    <option value="Belum Dilayani" <?php if ($pelayananpribadi->status == "Belum Dilayani") { echo "selected";}?>>Belum Dilayani</option>
                    <option value="Sudah Dilayani" <?php if ($pelayananpribadi->status == "Sudah Dilayani") { echo "selected";}?>>Sudah Dilayani</option>
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