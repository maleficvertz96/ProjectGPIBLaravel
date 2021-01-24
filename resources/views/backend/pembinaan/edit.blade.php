@extends('layouts.app')


@section('content')
<section class="content-header">
      <h1>
        Ubah Jadwal Pembinaan Pelayan
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
         <form action="{{route('pembinaan.update', $pembinaan->id)}}" method="POST" enctype="multipart/form-data">
         {{csrf_field()}}
         {{method_field('PUT')}}
              <div class="box-body">
                <div class="form-group">
                  <label>Tanggal</label>
                  <input type="date" value="{{$pembinaan->tanggal}}" class="form-control" name="tanggal">
                </div>
                <div class="form-group">
                  <label>Waktu</label>
                  <input type="time" value="{{$pembinaan->pukul}}" class="form-control" name="pukul">
                </div>
                <div class="form-group">
                  <label>Kategorial Pelayan</label>
                  <select class="form-control" name="kategori">
                    <option value=""></option>
                    <option value="Pelayan IHM dan Kebaktian" <?php if ($pembinaan->kategori == "Pelayan IHM dan Kebaktian") { echo "selected";}?>>Pelayan IHM dan Kebaktian</option>
                    <option value="Pelayan Firman Ibadah Minggu" <?php if ($pembinaan->kategori == "Pelayan Firman Ibadah Minggu") { echo "selected";}?>>Pelayan Firman Ibadah Minggu</option>
                    <option value="Pelkat PA" <?php if ($pembinaan->kategori == "Pelkat PA") { echo "selected";}?>>Pelkat PA</option>
                    <option value="Pelkat PT" <?php if ($pembinaan->kategori == "Pelkat PT") { echo "selected";}?>>Pelkat PT</option>
                    <option value="Pelkat GP, PKP. PKB, PKLU" <?php if ($pembinaan->kategori == "Pelkat GP, PKP. PKB, PKLU") { echo "selected";}?>>Pelkat GP, PKP. PKB, PKLU</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Pembina</label>
                  <input type="text" value="{{$pembinaan->pembina}}" class="form-control" name="pembina">
                </div>
                <div class="form-group">
                  <label>Pelayan</label>
                  <textarea class="form-control" id="editor1" name="isi_kegiatan">{{$pembinaan->pelayan}}</textarea>
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