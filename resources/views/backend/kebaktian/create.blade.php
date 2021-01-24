@extends('layouts.app')


@section('content')
<section class="content-header">
      <h1>
        Jadwal Ibadah Rabu (Kebaktian)
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
         <form action="{{route('kebaktian.store')}}" method="POST" enctype="multipart/form-data">
         {{csrf_field()}}
              <div class="box-body">
                <div class="form-group">
                  <label>Tanggal</label>
                  <input type="date" class="form-control" name="tanggal">
                </div>
                <div class="form-group">
                  <label>Waktu</label>
                  <input type="time" class="form-control" name="waktu">
                </div>
                <div class="form-group">
                  <label>Sektor</label>
                  <select class="form-control" name="sektor">
                    <option value=""></option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Tempat</label>
                  <input type="text" class="form-control" name="tempat">
                </div>
                <div class="form-group">
                  <label>Alamat</label>
                  <input type="text" class="form-control" name="alamat">
                </div>
                <div class="form-group">
                  <label>PF</label>
                  <input type="text" class="form-control" name="pf">
                </div>
                <div class="form-group">
                  <label>PL</label>
                  <input type="text" class="form-control" name="pl">
                </div>
                <div class="form-group">
                  <label>Bacaan Alkitab</label>
                  <input type="text" class="form-control" name="bacaan">
                </div>
                <div class="form-group">
                  <label>Tema</label>
                  <input type="text" class="form-control" name="tema">
                </div>
                <div class="form-group">
                  <label>Pembukaan</label>
                  <input type="text" class="form-control" name="pembukaan">
                </div>
                <div class="form-group">
                  <label>Salam</label>
                  <input type="text" class="form-control" name="salam">
                </div>
                <div class="form-group">
                  <label>Respon Firman</label>
                  <input type="text" class="form-control" name="respon_firman">
                </div>
                <div class="form-group">
                  <label>Persembahan</label>
                  <input type="text" class="form-control" name="persembahan">
                </div>
                <div class="form-group">
                  <label>Pengutusan</label>
                  <input type="text" class="form-control" name="pengutusan">
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