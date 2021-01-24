@extends('layouts.app')


@section('content')
<section class="content-header">
      <h1>
        Ubah Jadwal Ibadah Pelkat
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
         <form action="{{route('ibadahpelkat.update', $ibadahpelkat->id)}}" method="POST" enctype="multipart/form-data">
         {{csrf_field()}}
         {{method_field('PUT')}}
              <div class="box-body">
                <div class="form-group">
                  <label>Tanggal</label>
                  <input type="date" value="{{$ibadahpelkat->tanggal}}" class="form-control" name="tanggal">
                </div>
                <div class="form-group">
                  <label>Pukul</label>
                  <input type="time" value="{{$ibadahpelkat->waktu}}" class="form-control" name="waktu">
                </div>
                <div class="form-group">
                  <label>Pelkat</label>
                  <select class="form-control" name="pelkat">
                    <option value="PA" <?php if ($ibadahpelkat->pelkat == "PA") { echo "selected";}?>>PA</option>
                    <option value="PT" <?php if ($ibadahpelkat->pelkat == "PT") { echo "selected";}?>>PT</option>
                    <option value="GP" <?php if ($ibadahpelkat->pelkat == "GP") { echo "selected";}?>>GP</option>
                    <option value="PKP" <?php if ($ibadahpelkat->pelkat == "PKP") { echo "selected";}?>>PKP</option>
                    <option value="PKB" <?php if ($ibadahpelkat->pelkat == "PKB") { echo "selected";}?>>PKB</option>
                    <option value="PKLU" <?php if ($ibadahpelkat->pelkat == "PKLU") { echo "selected";}?>>PKLU</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Tempat</label>
                  <input type="text" value="{{$ibadahpelkat->tempat}}" class="form-control" name="tempat">
                </div>
                <div class="form-group">
                  <label>Alamat</label>
                  <input type="text" value="{{$ibadahpelkat->alamat}}" class="form-control" name="alamat">
                </div>
                <div class="form-group">
                  <label>Pelayan Bertugas</label>
                  <textarea class="form-control" id="editor1" name="pelayan">{{$ibadahpelkat->pelayan}}</textarea>
                </div>
                <div class="form-group">
                  <label>Bacaan Alkitab</label>
                  <input type="text" value="{{$ibadahpelkat->bacaan}}" class="form-control" name="bacaan">
                </div>
                <div class="form-group">
                  <label>Tema</label>
                  <input type="text" value="{{$ibadahpelkat->tema}}" class="form-control" name="tema">
                </div>
                <div class="form-group">
                  <label>Pembukaan</label>
                  <input type="text" value="{{$ibadahpelkat->pembukaan}}" class="form-control" name="pembukaan">
                </div>
                <div class="form-group">
                  <label>Pembacaan Mazmur</label>
                  <input type="text" value="{{$ibadahpelkat->pembacaan_mazmur}}" class="form-control" name="pembacaan_mazmur">
                </div>
                <div class="form-group">
                  <label>Nyanyian Pujian</label>
                  <input type="text" value="{{$ibadahpelkat->nyanyian_pujian}}" class="form-control" name="nyanyian_pujian">
                </div>
                <div class="form-group">
                  <label>Respon Firman</label>
                  <input type="text" value="{{$ibadahpelkat->respon_firman}}" class="form-control" name="respon_firman">
                </div>
                <div class="form-group">
                  <label>Persembahan</label>
                  <input type="text" value="{{$ibadahpelkat->persembahan}}" class="form-control" name="persembahan">
                </div>
                <div class="form-group">
                  <label>Pengutusan</label>
                  <input type="text" value="{{$ibadahpelkat->pengutusan}}" class="form-control" name="pengutusan">
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