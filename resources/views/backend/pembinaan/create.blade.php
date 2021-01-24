@extends('layouts.app')


@section('content')
<section class="content-header">
      <h1>
        Jadwal Pembinaan Pelayan
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
         <form action="{{route('pembinaan.store')}}" method="POST" enctype="multipart/form-data">
         {{csrf_field()}}
              <div class="box-body">
                <div class="form-group">
                  <label>Tanggal</label>
                  <input type="date" class="form-control" name="tanggal">
                </div>
                <div class="form-group">
                  <label>Waktu</label>
                  <input type="time" class="form-control" name="pukul">
                </div>
                <div class="form-group">
                  <label>Kategorial Pelayan</label>
                  <select class="form-control" name="kategori">
                    <option value=""></option>
                    <option value="Pelayan IHM dan Kebaktian">Pelayan IHM dan Kebaktian</option>
                    <option value="Pelayan Firman Ibadah Minggu">Pelayan Firman Ibadah Minggu</option>
                    <option value="Pelkat PA">Pelkat PA</option>
                    <option value="Pelkat PT">Pelkat PT</option>
                    <option value="Pelkat GP, PKP, PKB, PKLU">Pelkat GP, PKP, PKB, PKLU</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Pembina</label>
                  <input type="text" class="form-control" name="pembina">
                </div>
                <div class="form-group">
                  <label>Pelayan</label>
                  <textarea id="editor1" name="pelayan" rows="10" cols="80"></textarea>
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