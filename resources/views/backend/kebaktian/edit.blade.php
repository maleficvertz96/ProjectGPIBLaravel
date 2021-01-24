@extends('layouts.app')


@section('content')
<section class="content-header">
      <h1>
        Ubah Jadwal Ibadah Rabu (Kebaktian)
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
         <form action="{{route('kebaktian.update', $kebaktian->id)}}" method="POST" enctype="multipart/form-data">
         {{csrf_field()}}
         {{method_field('PUT')}}
              <div class="box-body">
                <div class="form-group">
                  <label>Tanggal</label>
                  <input type="date" value="{{kebaktian->tanggal}}" class="form-control" name="tanggal">
                </div>
                <div class="form-group">
                  <label>Waktu</label>
                  <input type="time" value="{{kebaktian->waktu}}" class="form-control" name="waktu">
                </div>
                <div class="form-group">
                  <label>Sektor</label>
                  <select class="form-control" name="sektor">
                    <option value="1" <?php if ($kebaktian->sektor == 1) { echo "selected";}?>>1</option>
                    <option value="2" <?php if ($kebaktian->sektor == 2) { echo "selected";}?>>2</option>
                    <option value="3" <?php if ($kebaktian->sektor == 3) { echo "selected";}?>>3</option>
                    <option value="4" <?php if ($kebaktian->sektor == 4) { echo "selected";}?>>4</option>
                    <option value="5" <?php if ($kebaktian->sektor == 5) { echo "selected";}?>>5</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Tempat</label>
                  <input type="text" value="{{kebaktian->tempat}}" class="form-control" name="tempat">
                </div>
                <div class="form-group">
                  <label>Alamat</label>
                  <input type="text" value="{{kebaktian->alamat}}" class="form-control" name="alamat">
                </div>
                <div class="form-group">
                  <label>PF</label>
                  <input type="text" value="{{kebaktian->pf}}" class="form-control" name="pf">
                </div>
                <div class="form-group">
                  <label>PL</label>
                  <input type="text" value="{{kebaktian->pl}}" class="form-control" name="pl">
                </div>
                <div class="form-group">
                  <label>Bacaan</label>
                  <input type="text" value="{{kebaktian->bacaan}}" class="form-control" name="bacaan">
                </div>
                <div class="form-group">
                  <label>Tema</label>
                  <input type="text" value="{{kebaktian->tema}}" class="form-control" name="tema">
                </div>
                <div class="form-group">
                  <label>Pembukaan</label>
                  <input type="text" value="{{kebaktian->pembukaan}}" class="form-control" name="pembukaan">
                </div>
                <div class="form-group">
                  <label>Salam</label>
                  <input type="text" value="{{kebaktian->salam}}" class="form-control" name="salam">
                </div>
                <div class="form-group">
                  <label>Respon Firman</label>
                  <input type="text" value="{{kebaktian->respon_firman}}" class="form-control" name="respon_firman">
                </div>
                <div class="form-group">
                  <label>Persembahan</label>
                  <input type="text" value="{{kebaktian->persembahan}}" class="form-control" name="persembahan">
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