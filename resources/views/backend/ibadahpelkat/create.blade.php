@extends('layouts.app')


@section('content')
<section class="content-header">
      <h1>
        Buat Jadwal Ibadah Pelkat
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
         <form action="{{route('ibadahpelkat.store')}}" method="POST" enctype="multipart/form-data">
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
                  <label>Pelkat</label>
                  <select class="form-control" name="pelkat">
                    <option value="PA">PA</option>
                    <option value="PT">PT</option>
                    <option value="GP">GP</option>
                    <option value="PKP">PKP</option>
                    <option value="PKB">PKB</option>
                    <option value="PKLU">PKLU</option>
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
                  <label>Pelayan Bertugas</label>
                  <textarea id="editor1" class="form-control" name="pelayan" rows="4"></textarea>
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
                  <label>Pembacaan Mazmur</label>
                  <input type="text" class="form-control" name="pembacaan_mazmur">
                </div>
                <div class="form-group">
                  <label>Nyanyian Pujian</label>
                  <input type="text" class="form-control" name="nyanyian_pujian">
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