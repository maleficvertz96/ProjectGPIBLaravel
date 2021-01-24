@extends('layouts.app')


@section('content')
<section class="content-header">
      <h1>
        Buat Jadwal Ibadah Hari Minggu
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
         <form action="{{route('ibadahminggu.store')}}" method="POST" enctype="multipart/form-data">
         {{csrf_field()}}
              <div class="box-body">
                <div class="form-group">
                  <label>Ibadah Hari Minggu</label>
                  <input type="text" class="form-control" name="nama">
                </div>
                <div class="form-group">
                  <label>Tanggal</label>
                  <input type="date" class="form-control" name="tanggal">
                </div>
                <div class="form-group">
                  <label>Ibadah Minggu</label>
                  <select class="form-control" name="ibadah">
                    <option value="Pagi">Pagi</option>
                    <option value="Sore">Sore</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Pukul</label>
                  <input type="time" class="form-control" name="waktu">
                </div>
                <div class="form-group">
                  <label>Acara (Kosongkan jika tidak ada acara khusus)</label>
                  <input type="text" class="form-control" name="acara">
                </div>
                <div class="form-group">
                  <label>Pelayan Firman</label>
                  <input type="text" class="form-control" name="pf">
                </div>
                <div class="form-group">
                  <label>Jabatan</label>
                  <input type="text" class="form-control" name="jabatan">
                </div>
                <div class="form-group">
                  <label>Pelayan 1</label>
                  <select class="form-control" name="p1">
                    <option value=""></option>
                    <option value="Pnt. Sonny I. Anthonie">Pnt. Sonny I. Anthonie</option>
                    <option value="Pnt. Eka Pongrangga">Pnt. Eka Pongrangga</option>
                    <option value="Pnt. Maria Eni Pakpahan">Pnt. Maria Eni Pakpahan</option>
                    <option value="Dkn. Yan W. Tatipata">Dkn. Yan W. Tatipata</option>
                    <option value="Dkn. Tjatur Istijorini">Dkn. Tjatur Istijorini</option>
                    <option value="Pnt. Septianus B. Permadi">Pnt. Septianus B. Permadi</option>
                    <option value="Pnt. Gerardus M. C. Kumaat">Pnt. Gerardus M. C. Kumaat</option>
                    <option value="Dkn. Meisye Herlina Kaligis">Dkn. Meisye Herlina Kaligis</option>
                    <option value="Dkn. Rosmita Purba">Dkn. Rosmita Purba</option>
                    <option value="Pnt. Suprapto Darmosuwito">Pnt. Suprapto Darmosuwito</option>
                    <option value="Pnt. D. Robert Kresnajaya">Pnt. D. Robert Kresnajaya</option>
                    <option value="Dkn. Sarce Siwabessy">Dkn. Sarce Siwabessy</option>
                    <option value="Dkn. Marthina Palijama Alfons">Dkn. Marthina Palijama Alfons</option>
                    <option value="Pnt. L. M. Untajana">L. M. Untajana</option>
                    <option value="Pnt. Luisa Agustina Patty">Pnt. Luisa Agustina Patty</option>
                    <option value="Dkn. Arie Dian Ekawati">Dkn. Arie Dian Ekawati</option>
                    <option value="Dkn. Nofian E. Masinambow">Dkn. Nofian E. Masinambow</option>
                    <option value="Dkn. Ivone Ayugrahita Fora">Dkn. Ivone Ayugrahita Fora</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Pelayan 2</label>
                  <select class="form-control" name="p2">
                    <option value=""></option>
                    <option value="Pnt. Sonny I. Anthonie">Pnt. Sonny I. Anthonie</option>
                    <option value="Pnt. Eka Pongrangga">Pnt. Eka Pongrangga</option>
                    <option value="Pnt. Maria Eni Pakpahan">Pnt. Maria Eni Pakpahan</option>
                    <option value="Dkn. Yan W. Tatipata">Dkn. Yan W. Tatipata</option>
                    <option value="Dkn. Tjatur Istijorini">Dkn. Tjatur Istijorini</option>
                    <option value="Pnt. Septianus B. Permadi">Pnt. Septianus B. Permadi</option>
                    <option value="Pnt. Gerardus M. C. Kumaat">Pnt. Gerardus M. C. Kumaat</option>
                    <option value="Dkn. Meisye Herlina Kaligis">Dkn. Meisye Herlina Kaligis</option>
                    <option value="Dkn. Rosmita Purba">Dkn. Rosmita Purba</option>
                    <option value="Pnt. Suprapto Darmosuwito">Pnt. Suprapto Darmosuwito</option>
                    <option value="Pnt. D. Robert Kresnajaya">Pnt. D. Robert Kresnajaya</option>
                    <option value="Dkn. Sarce Siwabessy">Dkn. Sarce Siwabessy</option>
                    <option value="Dkn. Marthina Palijama Alfons">Dkn. Marthina Palijama Alfons</option>
                    <option value="Pnt. L. M. Untajana">L. M. Untajana</option>
                    <option value="Pnt. Luisa Agustina Patty">Pnt. Luisa Agustina Patty</option>
                    <option value="Dkn. Arie Dian Ekawati">Dkn. Arie Dian Ekawati</option>
                    <option value="Dkn. Nofian E. Masinambow">Dkn. Nofian E. Masinambow</option>
                    <option value="Dkn. Ivone Ayugrahita Fora">Dkn. Ivone Ayugrahita Fora</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Pelayan 3</label>
                  <select class="form-control" name="p3">
                    <option value=""></option>
                    <option value="Pnt. Sonny I. Anthonie">Pnt. Sonny I. Anthonie</option>
                    <option value="Pnt. Eka Pongrangga">Pnt. Eka Pongrangga</option>
                    <option value="Pnt. Maria Eni Pakpahan">Pnt. Maria Eni Pakpahan</option>
                    <option value="Dkn. Yan W. Tatipata">Dkn. Yan W. Tatipata</option>
                    <option value="Dkn. Tjatur Istijorini">Dkn. Tjatur Istijorini</option>
                    <option value="Pnt. Septianus B. Permadi">Pnt. Septianus B. Permadi</option>
                    <option value="Pnt. Gerardus M. C. Kumaat">Pnt. Gerardus M. C. Kumaat</option>
                    <option value="Dkn. Meisye Herlina Kaligis">Dkn. Meisye Herlina Kaligis</option>
                    <option value="Dkn. Rosmita Purba">Dkn. Rosmita Purba</option>
                    <option value="Pnt. Suprapto Darmosuwito">Pnt. Suprapto Darmosuwito</option>
                    <option value="Pnt. D. Robert Kresnajaya">Pnt. D. Robert Kresnajaya</option>
                    <option value="Dkn. Sarce Siwabessy">Dkn. Sarce Siwabessy</option>
                    <option value="Dkn. Marthina Palijama Alfons">Dkn. Marthina Palijama Alfons</option>
                    <option value="Pnt. L. M. Untajana">L. M. Untajana</option>
                    <option value="Pnt. Luisa Agustina Patty">Pnt. Luisa Agustina Patty</option>
                    <option value="Dkn. Arie Dian Ekawati">Dkn. Arie Dian Ekawati</option>
                    <option value="Dkn. Nofian E. Masinambow">Dkn. Nofian E. Masinambow</option>
                    <option value="Dkn. Ivone Ayugrahita Fora">Dkn. Ivone Ayugrahita Fora</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Pelayan 4</label>
                  <select class="form-control" name="p4">
                    <option value=""></option>
                    <option value="Pnt. Sonny I. Anthonie">Pnt. Sonny I. Anthonie</option>
                    <option value="Pnt. Eka Pongrangga">Pnt. Eka Pongrangga</option>
                    <option value="Pnt. Maria Eni Pakpahan">Pnt. Maria Eni Pakpahan</option>
                    <option value="Dkn. Yan W. Tatipata">Dkn. Yan W. Tatipata</option>
                    <option value="Dkn. Tjatur Istijorini">Dkn. Tjatur Istijorini</option>
                    <option value="Pnt. Septianus B. Permadi">Pnt. Septianus B. Permadi</option>
                    <option value="Pnt. Gerardus M. C. Kumaat">Pnt. Gerardus M. C. Kumaat</option>
                    <option value="Dkn. Meisye Herlina Kaligis">Dkn. Meisye Herlina Kaligis</option>
                    <option value="Dkn. Rosmita Purba">Dkn. Rosmita Purba</option>
                    <option value="Pnt. Suprapto Darmosuwito">Pnt. Suprapto Darmosuwito</option>
                    <option value="Pnt. D. Robert Kresnajaya">Pnt. D. Robert Kresnajaya</option>
                    <option value="Dkn. Sarce Siwabessy">Dkn. Sarce Siwabessy</option>
                    <option value="Dkn. Marthina Palijama Alfons">Dkn. Marthina Palijama Alfons</option>
                    <option value="Pnt. L. M. Untajana">L. M. Untajana</option>
                    <option value="Pnt. Luisa Agustina Patty">Pnt. Luisa Agustina Patty</option>
                    <option value="Dkn. Arie Dian Ekawati">Dkn. Arie Dian Ekawati</option>
                    <option value="Dkn. Nofian E. Masinambow">Dkn. Nofian E. Masinambow</option>
                    <option value="Dkn. Ivone Ayugrahita Fora">Dkn. Ivone Ayugrahita Fora</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Pelayan 5</label>
                  <select class="form-control" name="p5">
                    <option value=""></option>
                    <option value="Pnt. Sonny I. Anthonie">Pnt. Sonny I. Anthonie</option>
                    <option value="Pnt. Eka Pongrangga">Pnt. Eka Pongrangga</option>
                    <option value="Pnt. Maria Eni Pakpahan">Pnt. Maria Eni Pakpahan</option>
                    <option value="Dkn. Yan W. Tatipata">Dkn. Yan W. Tatipata</option>
                    <option value="Dkn. Tjatur Istijorini">Dkn. Tjatur Istijorini</option>
                    <option value="Pnt. Septianus B. Permadi">Pnt. Septianus B. Permadi</option>
                    <option value="Pnt. Gerardus M. C. Kumaat">Pnt. Gerardus M. C. Kumaat</option>
                    <option value="Dkn. Meisye Herlina Kaligis">Dkn. Meisye Herlina Kaligis</option>
                    <option value="Dkn. Rosmita Purba">Dkn. Rosmita Purba</option>
                    <option value="Pnt. Suprapto Darmosuwito">Pnt. Suprapto Darmosuwito</option>
                    <option value="Pnt. D. Robert Kresnajaya">Pnt. D. Robert Kresnajaya</option>
                    <option value="Dkn. Sarce Siwabessy">Dkn. Sarce Siwabessy</option>
                    <option value="Dkn. Marthina Palijama Alfons">Dkn. Marthina Palijama Alfons</option>
                    <option value="Pnt. L. M. Untajana">L. M. Untajana</option>
                    <option value="Pnt. Luisa Agustina Patty">Pnt. Luisa Agustina Patty</option>
                    <option value="Dkn. Arie Dian Ekawati">Dkn. Arie Dian Ekawati</option>
                    <option value="Dkn. Nofian E. Masinambow">Dkn. Nofian E. Masinambow</option>
                    <option value="Dkn. Ivone Ayugrahita Fora">Dkn. Ivone Ayugrahita Fora</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Pelayan 6</label>
                  <select class="form-control" name="p6">
                    <option value=""></option>
                    <option value="Pnt. Sonny I. Anthonie">Pnt. Sonny I. Anthonie</option>
                    <option value="Pnt. Eka Pongrangga">Pnt. Eka Pongrangga</option>
                    <option value="Pnt. Maria Eni Pakpahan">Pnt. Maria Eni Pakpahan</option>
                    <option value="Dkn. Yan W. Tatipata">Dkn. Yan W. Tatipata</option>
                    <option value="Dkn. Tjatur Istijorini">Dkn. Tjatur Istijorini</option>
                    <option value="Pnt. Septianus B. Permadi">Pnt. Septianus B. Permadi</option>
                    <option value="Pnt. Gerardus M. C. Kumaat">Pnt. Gerardus M. C. Kumaat</option>
                    <option value="Dkn. Meisye Herlina Kaligis">Dkn. Meisye Herlina Kaligis</option>
                    <option value="Dkn. Rosmita Purba">Dkn. Rosmita Purba</option>
                    <option value="Pnt. Suprapto Darmosuwito">Pnt. Suprapto Darmosuwito</option>
                    <option value="Pnt. D. Robert Kresnajaya">Pnt. D. Robert Kresnajaya</option>
                    <option value="Dkn. Sarce Siwabessy">Dkn. Sarce Siwabessy</option>
                    <option value="Dkn. Marthina Palijama Alfons">Dkn. Marthina Palijama Alfons</option>
                    <option value="Pnt. L. M. Untajana">L. M. Untajana</option>
                    <option value="Pnt. Luisa Agustina Patty">Pnt. Luisa Agustina Patty</option>
                    <option value="Dkn. Arie Dian Ekawati">Dkn. Arie Dian Ekawati</option>
                    <option value="Dkn. Nofian E. Masinambow">Dkn. Nofian E. Masinambow</option>
                    <option value="Dkn. Ivone Ayugrahita Fora">Dkn. Ivone Ayugrahita Fora</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Pelayan 7</label>
                  <select class="form-control" name="p7">
                    <option value=""></option>
                    <option value="Pnt. Sonny I. Anthonie">Pnt. Sonny I. Anthonie</option>
                    <option value="Pnt. Eka Pongrangga">Pnt. Eka Pongrangga</option>
                    <option value="Pnt. Maria Eni Pakpahan">Pnt. Maria Eni Pakpahan</option>
                    <option value="Dkn. Yan W. Tatipata">Dkn. Yan W. Tatipata</option>
                    <option value="Dkn. Tjatur Istijorini">Dkn. Tjatur Istijorini</option>
                    <option value="Pnt. Septianus B. Permadi">Pnt. Septianus B. Permadi</option>
                    <option value="Pnt. Gerardus M. C. Kumaat">Pnt. Gerardus M. C. Kumaat</option>
                    <option value="Dkn. Meisye Herlina Kaligis">Dkn. Meisye Herlina Kaligis</option>
                    <option value="Dkn. Rosmita Purba">Dkn. Rosmita Purba</option>
                    <option value="Pnt. Suprapto Darmosuwito">Pnt. Suprapto Darmosuwito</option>
                    <option value="Pnt. D. Robert Kresnajaya">Pnt. D. Robert Kresnajaya</option>
                    <option value="Dkn. Sarce Siwabessy">Dkn. Sarce Siwabessy</option>
                    <option value="Dkn. Marthina Palijama Alfons">Dkn. Marthina Palijama Alfons</option>
                    <option value="Pnt. L. M. Untajana">L. M. Untajana</option>
                    <option value="Pnt. Luisa Agustina Patty">Pnt. Luisa Agustina Patty</option>
                    <option value="Dkn. Arie Dian Ekawati">Dkn. Arie Dian Ekawati</option>
                    <option value="Dkn. Nofian E. Masinambow">Dkn. Nofian E. Masinambow</option>
                    <option value="Dkn. Ivone Ayugrahita Fora">Dkn. Ivone Ayugrahita Fora</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Pelayan 8</label>
                  <select class="form-control" name="p8">
                    <option value=""></option>
                    <option value="Pnt. Sonny I. Anthonie">Pnt. Sonny I. Anthonie</option>
                    <option value="Pnt. Eka Pongrangga">Pnt. Eka Pongrangga</option>
                    <option value="Pnt. Maria Eni Pakpahan">Pnt. Maria Eni Pakpahan</option>
                    <option value="Dkn. Yan W. Tatipata">Dkn. Yan W. Tatipata</option>
                    <option value="Dkn. Tjatur Istijorini">Dkn. Tjatur Istijorini</option>
                    <option value="Pnt. Septianus B. Permadi">Pnt. Septianus B. Permadi</option>
                    <option value="Pnt. Gerardus M. C. Kumaat">Pnt. Gerardus M. C. Kumaat</option>
                    <option value="Dkn. Meisye Herlina Kaligis">Dkn. Meisye Herlina Kaligis</option>
                    <option value="Dkn. Rosmita Purba">Dkn. Rosmita Purba</option>
                    <option value="Pnt. Suprapto Darmosuwito">Pnt. Suprapto Darmosuwito</option>
                    <option value="Pnt. D. Robert Kresnajaya">Pnt. D. Robert Kresnajaya</option>
                    <option value="Dkn. Sarce Siwabessy">Dkn. Sarce Siwabessy</option>
                    <option value="Dkn. Marthina Palijama Alfons">Dkn. Marthina Palijama Alfons</option>
                    <option value="Pnt. L. M. Untajana">L. M. Untajana</option>
                    <option value="Pnt. Luisa Agustina Patty">Pnt. Luisa Agustina Patty</option>
                    <option value="Dkn. Arie Dian Ekawati">Dkn. Arie Dian Ekawati</option>
                    <option value="Dkn. Nofian E. Masinambow">Dkn. Nofian E. Masinambow</option>
                    <option value="Dkn. Ivone Ayugrahita Fora">Dkn. Ivone Ayugrahita Fora</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Pengantar Kantong Kolekte 1</label>
                  <input type="text" class="form-control" name="kolekte1">
                </div>
                <div class="form-group">
                  <label>Pengantar Kantong Kolekte 2</label>
                  <input type="text" class="form-control" name="kolekte2">
                </div>
                <div class="form-group">
                  <label>Pengantar Kantong Kolekte 3</label>
                  <input type="text" class="form-control" name="kolekte3">
                </div>
                <div class="form-group">
                  <label>Pengantar Kantong Kolekte 4</label>
                  <input type="text" class="form-control" name="kolekte4">
                </div>
                <div class="form-group">
                  <label>Organist</label>
                  <input type="text" class="form-control" name="organist">
                </div>
                <div class="form-group">
                  <label>Kantoria 1</label>
                  <input type="text" class="form-control" name="kantoria1">
                </div>
                <div class="form-group">
                  <label>Kantoria 2</label>
                  <input type="text" class="form-control" name="kantoria2">
                </div>
                <div class="form-group">
                  <label>Operator Slide Show</label>
                  <input type="text" class="form-control" name="operator">
                </div>
                <div class="form-group">
                  <label>Paduan Suara / Vocal Group / Solo</label>
                  <input type="text" class="form-control" name="vocalgroup">
                </div>
                <div class="form-group">
                  <label>Operator Sound System</label>
                  <input type="text" class="form-control" name="soundman">
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