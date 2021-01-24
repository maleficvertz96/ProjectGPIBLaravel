@extends('layouts.app')


@section('content')
<section class="content-header">
      <h1>
        Ubah Jadwal Ibadah Hari Minggu
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
         <form action="{{route('ibadahminggu.update', $ibadahminggu->id)}}" method="POST" enctype="multipart/form-data">
         {{csrf_field()}}
         {{method_field('PUT')}}
              <div class="box-body">
                <div class="form-group">
                  <label>Ibadah Hari Minggu</label>
                  <input type="text" value="{{$ibadahminggu->nama}}" class="form-control" name="nama">
                </div>
                <div class="form-group">
                  <label>Tanggal</label>
                  <input type="date" value="{{$ibadahminggu->tanggal}}" class="form-control" name="tanggal">
                </div>
                <div class="form-group">
                  <label>Ibadah Minggu</label>
                  <select class="form-control" name="ibadah">
                    <option value="">Pilih Waktu</option>
                    <option value="Pagi" <?php if ($ibadahminggu->ibadah == "Pagi") { echo "selected";}?>>Pagi</option>
                    <option value="Sore" <?php if ($ibadahminggu->ibadah == "Sore") { echo "selected";}?>>Sore</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Pukul</label>
                  <input type="time" value="{{$ibadahminggu->waktu}}" class="form-control" name="waktu">
                </div>
                <div class="form-group">
                  <label>Acara (Kosongkan jika tidak ada acara khusus)</label>
                  <input type="text" value="{{$ibadahminggu->acara}}"class="form-control" name="acara">
                </div>
                <div class="form-group">
                  <label>Pelayan Firman</label>
                  <input type="text" value="{{$ibadahminggu->pf}}" class="form-control" name="pf">
                </div>
                <div class="form-group">
                  <label>Jabatan</label>
                  <input type="text" value="{{$ibadahminggu->jabatan}}" class="form-control" name="jabatan">
                </div>
                <div class="form-group">
                  <label>Pelayan 1</label>
                  <select class="form-control" name="p1">
                    <option value="">Pilih Majelis Bertugas</option>
                    <option value="Pnt. Sonny I. Anthonie" <?php if ($ibadahminggu->p1 == "Pnt. Sonny I. Anthonie") { echo "selected";}?>>Pnt. Sonny I. Anthonie</option>
                    <option value="Pnt. Eka Pongrangga" <?php if ($ibadahminggu->p1 == "Pnt. Eka Pongrangga") { echo "selected";}?>>Pnt. Eka Pongrangga</option>
                    <option value="Pnt. Maria Eni Pakpahan" <?php if ($ibadahminggu->p1 == "Pnt. Maria Eni Pakpahan") { echo "selected";}?>>Pnt. Maria Eni Pakpahan</option>
                    <option value="Dkn. Yan W. Tatipata" <?php if ($ibadahminggu->p1 == "Dkn. Yan W. Tatipata") { echo "selected";}?>>Dkn. Yan W. Tatipata</option>
                    <option value="Dkn. Tjatur Istijorini" <?php if ($ibadahminggu->p1 == "Dkn. Tjatur Istijorini") { echo "selected";}?>>Dkn. Tjatur Istijorini</option>
                    <option value="Pnt. Septianus B. Permadi" <?php if ($ibadahminggu->p1 == "Pnt. Septianus B. Permadi") { echo "selected";}?>>Pnt. Septianus B. Permadi</option>
                    <option value="Pnt. Gerardus M. C. Kumaat" <?php if ($ibadahminggu->p1 == "Pnt. Gerardus M. C. Kumaat") { echo "selected";}?>>Pnt. Gerardus M. C. Kumaat</option>
                    <option value="Dkn. Meisye Herlina Kaligis" <?php if ($ibadahminggu->p1 == "Dkn. Meisye Herlina Kaligis") { echo "selected";}?>>Dkn. Meisye Herlina Kaligis</option>
                    <option value="Dkn. Rosmita Purba" <?php if ($ibadahminggu->p1 == "Dkn. Rosmita Purba") { echo "selected";}?>>Dkn. Rosmita Purba</option>
                    <option value="Pnt. Suprapto Darmosuwito" <?php if ($ibadahminggu->p1 == "Pnt. Suprapto Darmosuwito") { echo "selected";}?>>Pnt. Suprapto Darmosuwito</option>
                    <option value="Pnt. D. Robert Kresnajaya" <?php if ($ibadahminggu->p1 == "Pnt. D. Robert Kresnajaya") { echo "selected";}?>>Pnt. D. Robert Kresnajaya</option>
                    <option value="Dkn. Sarce Siwabessy" <?php if ($ibadahminggu->p1 == "Dkn. Sarce Siwabessy") { echo "selected";}?>>Dkn. Sarce Siwabessy</option>
                    <option value="Dkn. Marthina Palijama Alfons" <?php if ($ibadahminggu->p1 == "Dkn. Marthina Palijama Alfons") { echo "selected";}?>>Dkn. Marthina Palijama Alfons</option>
                    <option value="Pnt. L. M. Untajana" <?php if ($ibadahminggu->p1 == "Pnt. L. M. Untajana") { echo "selected";}?>>L. M. Untajana</option>
                    <option value="Pnt. Luisa Agustina Patty" <?php if ($ibadahminggu->p1 == "Pnt. Luisa Agustina Patty") { echo "selected";}?>>Pnt. Luisa Agustina Patty</option>
                    <option value="Dkn. Arie Dian Ekawati" <?php if ($ibadahminggu->p1 == "Dkn. Arie Dian Ekawati") { echo "selected";}?>>Dkn. Arie Dian Ekawati</option>
                    <option value="Dkn. Nofian E. Masinambow" <?php if ($ibadahminggu->p1 == "Dkn. Nofian E. Masinambow") { echo "selected";}?>>Dkn. Nofian E. Masinambow</option>
                    <option value="Dkn. Ivone Ayugrahita Fora" <?php if ($ibadahminggu->p1 == "Dkn. Ivone Ayugrahita Fora") { echo "selected";}?>>Dkn. Ivone Ayugrahita Fora</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Pelayan 2</label>
                  <select class="form-control" name="p2">
                    <option value="">Pilih Majelis Bertugas</option>
                    <option value="Pnt. Sonny I. Anthonie" <?php if ($ibadahminggu->p2 == "Pnt. Sonny I. Anthonie") { echo "selected";}?>>Pnt. Sonny I. Anthonie</option>
                    <option value="Pnt. Eka Pongrangga" <?php if ($ibadahminggu->p2 == "Pnt. Eka Pongrangga") { echo "selected";}?>>Pnt. Eka Pongrangga</option>
                    <option value="Pnt. Maria Eni Pakpahan" <?php if ($ibadahminggu->p2 == "Pnt. Maria Eni Pakpahan") { echo "selected";}?>>Pnt. Maria Eni Pakpahan</option>
                    <option value="Dkn. Yan W. Tatipata" <?php if ($ibadahminggu->p2 == "Dkn. Yan W. Tatipata") { echo "selected";}?>>Dkn. Yan W. Tatipata</option>
                    <option value="Dkn. Tjatur Istijorini" <?php if ($ibadahminggu->p2 == "Dkn. Tjatur Istijorini") { echo "selected";}?>>Dkn. Tjatur Istijorini</option>
                    <option value="Pnt. Septianus B. Permadi" <?php if ($ibadahminggu->p2 == "Pnt. Septianus B. Permadi") { echo "selected";}?>>Pnt. Septianus B. Permadi</option>
                    <option value="Pnt. Gerardus M. C. Kumaat" <?php if ($ibadahminggu->p2 == "Pnt. Gerardus M. C. Kumaat") { echo "selected";}?>>Pnt. Gerardus M. C. Kumaat</option>
                    <option value="Dkn. Meisye Herlina Kaligis" <?php if ($ibadahminggu->p2 == "Dkn. Meisye Herlina Kaligis") { echo "selected";}?>>Dkn. Meisye Herlina Kaligis</option>
                    <option value="Dkn. Rosmita Purba" <?php if ($ibadahminggu->p2 == "Dkn. Rosmita Purba") { echo "selected";}?>>Dkn. Rosmita Purba</option>
                    <option value="Pnt. Suprapto Darmosuwito" <?php if ($ibadahminggu->p2 == "Pnt. Suprapto Darmosuwito") { echo "selected";}?>>Pnt. Suprapto Darmosuwito</option>
                    <option value="Pnt. D. Robert Kresnajaya" <?php if ($ibadahminggu->p2 == "Pnt. D. Robert Kresnajaya") { echo "selected";}?>>Pnt. D. Robert Kresnajaya</option>
                    <option value="Dkn. Sarce Siwabessy" <?php if ($ibadahminggu->p2 == "Dkn. Sarce Siwabessy") { echo "selected";}?>>Dkn. Sarce Siwabessy</option>
                    <option value="Dkn. Marthina Palijama Alfons" <?php if ($ibadahminggu->p2 == "Dkn. Marthina Palijama Alfons") { echo "selected";}?>>Dkn. Marthina Palijama Alfons</option>
                    <option value="Pnt. L. M. Untajana" <?php if ($ibadahminggu->p2 == "Pnt. L. M. Untajana") { echo "selected";}?>>L. M. Untajana</option>
                    <option value="Pnt. Luisa Agustina Patty" <?php if ($ibadahminggu->p2 == "Pnt. Luisa Agustina Patty") { echo "selected";}?>>Pnt. Luisa Agustina Patty</option>
                    <option value="Dkn. Arie Dian Ekawati" <?php if ($ibadahminggu->p2 == "Dkn. Arie Dian Ekawati") { echo "selected";}?>>Dkn. Arie Dian Ekawati</option>
                    <option value="Dkn. Nofian E. Masinambow" <?php if ($ibadahminggu->p2 == "Dkn. Nofian E. Masinambow") { echo "selected";}?>>Dkn. Nofian E. Masinambow</option>
                    <option value="Dkn. Ivone Ayugrahita Fora" <?php if ($ibadahminggu->p2 == "Dkn. Ivone Ayugrahita Fora") { echo "selected";}?>>Dkn. Ivone Ayugrahita Fora</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Pelayan 3</label>
                  <select class="form-control" name="p3">
                   <option value="">Pilih Majelis Bertugas</option>
                    <option value="Pnt. Sonny I. Anthonie" <?php if ($ibadahminggu->p3 == "Pnt. Sonny I. Anthonie") { echo "selected";}?>>Pnt. Sonny I. Anthonie</option>
                    <option value="Pnt. Eka Pongrangga" <?php if ($ibadahminggu->p3 == "Pnt. Eka Pongrangga") { echo "selected";}?>>Pnt. Eka Pongrangga</option>
                    <option value="Pnt. Maria Eni Pakpahan" <?php if ($ibadahminggu->p3 == "Pnt. Maria Eni Pakpahan") { echo "selected";}?>>Pnt. Maria Eni Pakpahan</option>
                    <option value="Dkn. Yan W. Tatipata" <?php if ($ibadahminggu->p3 == "Dkn. Yan W. Tatipata") { echo "selected";}?>>Dkn. Yan W. Tatipata</option>
                    <option value="Dkn. Tjatur Istijorini" <?php if ($ibadahminggu->p3 == "Dkn. Tjatur Istijorini") { echo "selected";}?>>Dkn. Tjatur Istijorini</option>
                    <option value="Pnt. Septianus B. Permadi" <?php if ($ibadahminggu->p3 == "Pnt. Septianus B. Permadi") { echo "selected";}?>>Pnt. Septianus B. Permadi</option>
                    <option value="Pnt. Gerardus M. C. Kumaat" <?php if ($ibadahminggu->p3 == "Pnt. Gerardus M. C. Kumaat") { echo "selected";}?>>Pnt. Gerardus M. C. Kumaat</option>
                    <option value="Dkn. Meisye Herlina Kaligis" <?php if ($ibadahminggu->p3 == "Dkn. Meisye Herlina Kaligis") { echo "selected";}?>>Dkn. Meisye Herlina Kaligis</option>
                    <option value="Dkn. Rosmita Purba" <?php if ($ibadahminggu->p3 == "Dkn. Rosmita Purba") { echo "selected";}?>>Dkn. Rosmita Purba</option>
                    <option value="Pnt. Suprapto Darmosuwito" <?php if ($ibadahminggu->p3 == "Pnt. Suprapto Darmosuwito") { echo "selected";}?>>Pnt. Suprapto Darmosuwito</option>
                    <option value="Pnt. D. Robert Kresnajaya" <?php if ($ibadahminggu->p3 == "Pnt. D. Robert Kresnajaya") { echo "selected";}?>>Pnt. D. Robert Kresnajaya</option>
                    <option value="Dkn. Sarce Siwabessy" <?php if ($ibadahminggu->p3 == "Dkn. Sarce Siwabessy") { echo "selected";}?>>Dkn. Sarce Siwabessy</option>
                    <option value="Dkn. Marthina Palijama Alfons" <?php if ($ibadahminggu->p3 == "Dkn. Marthina Palijama Alfons") { echo "selected";}?>>Dkn. Marthina Palijama Alfons</option>
                    <option value="Pnt. L. M. Untajana" <?php if ($ibadahminggu->p3 == "Pnt. L. M. Untajana") { echo "selected";}?>>L. M. Untajana</option>
                    <option value="Pnt. Luisa Agustina Patty" <?php if ($ibadahminggu->p3 == "Pnt. Luisa Agustina Patty") { echo "selected";}?>>Pnt. Luisa Agustina Patty</option>
                    <option value="Dkn. Arie Dian Ekawati" <?php if ($ibadahminggu->p3 == "Dkn. Arie Dian Ekawati") { echo "selected";}?>>Dkn. Arie Dian Ekawati</option>
                    <option value="Dkn. Nofian E. Masinambow" <?php if ($ibadahminggu->p3 == "Dkn. Nofian E. Masinambow") { echo "selected";}?>>Dkn. Nofian E. Masinambow</option>
                    <option value="Dkn. Ivone Ayugrahita Fora" <?php if ($ibadahminggu->p3 == "Dkn. Ivone Ayugrahita Fora") { echo "selected";}?>>Dkn. Ivone Ayugrahita Fora</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Pelayan 4</label>
                  <select class="form-control" name="p4">
                    <option value="">Pilih Majelis Bertugas</option>
                    <option value="Pnt. Sonny I. Anthonie" <?php if ($ibadahminggu->p4 == "Pnt. Sonny I. Anthonie") { echo "selected";}?>>Pnt. Sonny I. Anthonie</option>
                    <option value="Pnt. Eka Pongrangga" <?php if ($ibadahminggu->p4 == "Pnt. Eka Pongrangga") { echo "selected";}?>>Pnt. Eka Pongrangga</option>
                    <option value="Pnt. Maria Eni Pakpahan" <?php if ($ibadahminggu->p4 == "Pnt. Maria Eni Pakpahan") { echo "selected";}?>>Pnt. Maria Eni Pakpahan</option>
                    <option value="Dkn. Yan W. Tatipata" <?php if ($ibadahminggu->p4 == "Dkn. Yan W. Tatipata") { echo "selected";}?>>Dkn. Yan W. Tatipata</option>
                    <option value="Dkn. Tjatur Istijorini" <?php if ($ibadahminggu->p4 == "Dkn. Tjatur Istijorini") { echo "selected";}?>>Dkn. Tjatur Istijorini</option>
                    <option value="Pnt. Septianus B. Permadi" <?php if ($ibadahminggu->p4 == "Pnt. Septianus B. Permadi") { echo "selected";}?>>Pnt. Septianus B. Permadi</option>
                    <option value="Pnt. Gerardus M. C. Kumaat" <?php if ($ibadahminggu->p4 == "Pnt. Gerardus M. C. Kumaat") { echo "selected";}?>>Pnt. Gerardus M. C. Kumaat</option>
                    <option value="Dkn. Meisye Herlina Kaligis" <?php if ($ibadahminggu->p4 == "Dkn. Meisye Herlina Kaligis") { echo "selected";}?>>Dkn. Meisye Herlina Kaligis</option>
                    <option value="Dkn. Rosmita Purba" <?php if ($ibadahminggu->p4 == "Dkn. Rosmita Purba") { echo "selected";}?>>Dkn. Rosmita Purba</option>
                    <option value="Pnt. Suprapto Darmosuwito" <?php if ($ibadahminggu->p4 == "Pnt. Suprapto Darmosuwito") { echo "selected";}?>>Pnt. Suprapto Darmosuwito</option>
                    <option value="Pnt. D. Robert Kresnajaya" <?php if ($ibadahminggu->p4 == "Pnt. D. Robert Kresnajaya") { echo "selected";}?>>Pnt. D. Robert Kresnajaya</option>
                    <option value="Dkn. Sarce Siwabessy" <?php if ($ibadahminggu->p4 == "Dkn. Sarce Siwabessy") { echo "selected";}?>>Dkn. Sarce Siwabessy</option>
                    <option value="Dkn. Marthina Palijama Alfons" <?php if ($ibadahminggu->p4 == "Dkn. Marthina Palijama Alfons") { echo "selected";}?>>Dkn. Marthina Palijama Alfons</option>
                    <option value="Pnt. L. M. Untajana" <?php if ($ibadahminggu->p4 == "Pnt. L. M. Untajana") { echo "selected";}?>>L. M. Untajana</option>
                    <option value="Pnt. Luisa Agustina Patty" <?php if ($ibadahminggu->p4 == "Pnt. Luisa Agustina Patty") { echo "selected";}?>>Pnt. Luisa Agustina Patty</option>
                    <option value="Dkn. Arie Dian Ekawati" <?php if ($ibadahminggu->p4 == "Dkn. Arie Dian Ekawati") { echo "selected";}?>>Dkn. Arie Dian Ekawati</option>
                    <option value="Dkn. Nofian E. Masinambow" <?php if ($ibadahminggu->p4 == "Dkn. Nofian E. Masinambow") { echo "selected";}?>>Dkn. Nofian E. Masinambow</option>
                    <option value="Dkn. Ivone Ayugrahita Fora" <?php if ($ibadahminggu->p4 == "Dkn. Ivone Ayugrahita Fora") { echo "selected";}?>>Dkn. Ivone Ayugrahita Fora</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Pelayan 5</label>
                  <select class="form-control" name="p5">
                    <option value="">Pilih Majelis Bertugas</option>
                    <option value="Pnt. Sonny I. Anthonie" <?php if ($ibadahminggu->p5 == "Pnt. Sonny I. Anthonie") { echo "selected";}?>>Pnt. Sonny I. Anthonie</option>
                    <option value="Pnt. Eka Pongrangga" <?php if ($ibadahminggu->p5 == "Pnt. Eka Pongrangga") { echo "selected";}?>>Pnt. Eka Pongrangga</option>
                    <option value="Pnt. Maria Eni Pakpahan" <?php if ($ibadahminggu->p5 == "Pnt. Maria Eni Pakpahan") { echo "selected";}?>>Pnt. Maria Eni Pakpahan</option>
                    <option value="Dkn. Yan W. Tatipata" <?php if ($ibadahminggu->p5 == "Dkn. Yan W. Tatipata") { echo "selected";}?>>Dkn. Yan W. Tatipata</option>
                    <option value="Dkn. Tjatur Istijorini" <?php if ($ibadahminggu->p5 == "Dkn. Tjatur Istijorini") { echo "selected";}?>>Dkn. Tjatur Istijorini</option>
                    <option value="Pnt. Septianus B. Permadi" <?php if ($ibadahminggu->p5 == "Pnt. Septianus B. Permadi") { echo "selected";}?>>Pnt. Septianus B. Permadi</option>
                    <option value="Pnt. Gerardus M. C. Kumaat" <?php if ($ibadahminggu->p5 == "Pnt. Gerardus M. C. Kumaat") { echo "selected";}?>>Pnt. Gerardus M. C. Kumaat</option>
                    <option value="Dkn. Meisye Herlina Kaligis" <?php if ($ibadahminggu->p5 == "Dkn. Meisye Herlina Kaligis") { echo "selected";}?>>Dkn. Meisye Herlina Kaligis</option>
                    <option value="Dkn. Rosmita Purba" <?php if ($ibadahminggu->p5 == "Dkn. Rosmita Purba") { echo "selected";}?>>Dkn. Rosmita Purba</option>
                    <option value="Pnt. Suprapto Darmosuwito" <?php if ($ibadahminggu->p5 == "Pnt. Suprapto Darmosuwito") { echo "selected";}?>>Pnt. Suprapto Darmosuwito</option>
                    <option value="Pnt. D. Robert Kresnajaya" <?php if ($ibadahminggu->p5 == "Pnt. D. Robert Kresnajaya") { echo "selected";}?>>Pnt. D. Robert Kresnajaya</option>
                    <option value="Dkn. Sarce Siwabessy" <?php if ($ibadahminggu->p5 == "Dkn. Sarce Siwabessy") { echo "selected";}?>>Dkn. Sarce Siwabessy</option>
                    <option value="Dkn. Marthina Palijama Alfons" <?php if ($ibadahminggu->p5 == "Dkn. Marthina Palijama Alfons") { echo "selected";}?>>Dkn. Marthina Palijama Alfons</option>
                    <option value="Pnt. L. M. Untajana" <?php if ($ibadahminggu->p5 == "Pnt. L. M. Untajana") { echo "selected";}?>>L. M. Untajana</option>
                    <option value="Pnt. Luisa Agustina Patty" <?php if ($ibadahminggu->p5 == "Pnt. Luisa Agustina Patty") { echo "selected";}?>>Pnt. Luisa Agustina Patty</option>
                    <option value="Dkn. Arie Dian Ekawati" <?php if ($ibadahminggu->p5 == "Dkn. Arie Dian Ekawati") { echo "selected";}?>>Dkn. Arie Dian Ekawati</option>
                    <option value="Dkn. Nofian E. Masinambow" <?php if ($ibadahminggu->p5 == "Dkn. Nofian E. Masinambow") { echo "selected";}?>>Dkn. Nofian E. Masinambow</option>
                    <option value="Dkn. Ivone Ayugrahita Fora" <?php if ($ibadahminggu->p5 == "Dkn. Ivone Ayugrahita Fora") { echo "selected";}?>>Dkn. Ivone Ayugrahita Fora</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Pelayan 6</label>
                  <select class="form-control" name="p6">
                    <option value="">Pilih Majelis Bertugas</option>
                    <option value="Pnt. Sonny I. Anthonie" <?php if ($ibadahminggu->p6 == "Pnt. Sonny I. Anthonie") { echo "selected";}?>>Pnt. Sonny I. Anthonie</option>
                    <option value="Pnt. Eka Pongrangga" <?php if ($ibadahminggu->p6 == "Pnt. Eka Pongrangga") { echo "selected";}?>>Pnt. Eka Pongrangga</option>
                    <option value="Pnt. Maria Eni Pakpahan" <?php if ($ibadahminggu->p6 == "Pnt. Maria Eni Pakpahan") { echo "selected";}?>>Pnt. Maria Eni Pakpahan</option>
                    <option value="Dkn. Yan W. Tatipata" <?php if ($ibadahminggu->p6 == "Dkn. Yan W. Tatipata") { echo "selected";}?>>Dkn. Yan W. Tatipata</option>
                    <option value="Dkn. Tjatur Istijorini" <?php if ($ibadahminggu->p6 == "Dkn. Tjatur Istijorini") { echo "selected";}?>>Dkn. Tjatur Istijorini</option>
                    <option value="Pnt. Septianus B. Permadi" <?php if ($ibadahminggu->p6 == "Pnt. Septianus B. Permadi") { echo "selected";}?>>Pnt. Septianus B. Permadi</option>
                    <option value="Pnt. Gerardus M. C. Kumaat" <?php if ($ibadahminggu->p6 == "Pnt. Gerardus M. C. Kumaat") { echo "selected";}?>>Pnt. Gerardus M. C. Kumaat</option>
                    <option value="Dkn. Meisye Herlina Kaligis" <?php if ($ibadahminggu->p6 == "Dkn. Meisye Herlina Kaligis") { echo "selected";}?>>Dkn. Meisye Herlina Kaligis</option>
                    <option value="Dkn. Rosmita Purba" <?php if ($ibadahminggu->p6 == "Dkn. Rosmita Purba") { echo "selected";}?>>Dkn. Rosmita Purba</option>
                    <option value="Pnt. Suprapto Darmosuwito" <?php if ($ibadahminggu->p6 == "Pnt. Suprapto Darmosuwito") { echo "selected";}?>>Pnt. Suprapto Darmosuwito</option>
                    <option value="Pnt. D. Robert Kresnajaya" <?php if ($ibadahminggu->p6 == "Pnt. D. Robert Kresnajaya") { echo "selected";}?>>Pnt. D. Robert Kresnajaya</option>
                    <option value="Dkn. Sarce Siwabessy" <?php if ($ibadahminggu->p6 == "Dkn. Sarce Siwabessy") { echo "selected";}?>>Dkn. Sarce Siwabessy</option>
                    <option value="Dkn. Marthina Palijama Alfons" <?php if ($ibadahminggu->p6 == "Dkn. Marthina Palijama Alfons") { echo "selected";}?>>Dkn. Marthina Palijama Alfons</option>
                    <option value="Pnt. L. M. Untajana" <?php if ($ibadahminggu->p6 == "Pnt. L. M. Untajana") { echo "selected";}?>>L. M. Untajana</option>
                    <option value="Pnt. Luisa Agustina Patty" <?php if ($ibadahminggu->p6 == "Pnt. Luisa Agustina Patty") { echo "selected";}?>>Pnt. Luisa Agustina Patty</option>
                    <option value="Dkn. Arie Dian Ekawati" <?php if ($ibadahminggu->p6 == "Dkn. Arie Dian Ekawati") { echo "selected";}?>>Dkn. Arie Dian Ekawati</option>
                    <option value="Dkn. Nofian E. Masinambow" <?php if ($ibadahminggu->p6 == "Dkn. Nofian E. Masinambow") { echo "selected";}?>>Dkn. Nofian E. Masinambow</option>
                    <option value="Dkn. Ivone Ayugrahita Fora" <?php if ($ibadahminggu->p6 == "Dkn. Ivone Ayugrahita Fora") { echo "selected";}?>>Dkn. Ivone Ayugrahita Fora</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Pelayan 7</label>
                  <select class="form-control" name="p7">
                   <option value="">Pilih Majelis Bertugas</option>
                    <option value="Pnt. Sonny I. Anthonie" <?php if ($ibadahminggu->p7 == "Pnt. Sonny I. Anthonie") { echo "selected";}?>>Pnt. Sonny I. Anthonie</option>
                    <option value="Pnt. Eka Pongrangga" <?php if ($ibadahminggu->p7 == "Pnt. Eka Pongrangga") { echo "selected";}?>>Pnt. Eka Pongrangga</option>
                    <option value="Pnt. Maria Eni Pakpahan" <?php if ($ibadahminggu->p7 == "Pnt. Maria Eni Pakpahan") { echo "selected";}?>>Pnt. Maria Eni Pakpahan</option>
                    <option value="Dkn. Yan W. Tatipata" <?php if ($ibadahminggu->p7 == "Dkn. Yan W. Tatipata") { echo "selected";}?>>Dkn. Yan W. Tatipata</option>
                    <option value="Dkn. Tjatur Istijorini" <?php if ($ibadahminggu->p7 == "Dkn. Tjatur Istijorini") { echo "selected";}?>>Dkn. Tjatur Istijorini</option>
                    <option value="Pnt. Septianus B. Permadi" <?php if ($ibadahminggu->p7 == "Pnt. Septianus B. Permadi") { echo "selected";}?>>Pnt. Septianus B. Permadi</option>
                    <option value="Pnt. Gerardus M. C. Kumaat" <?php if ($ibadahminggu->p7 == "Pnt. Gerardus M. C. Kumaat") { echo "selected";}?>>Pnt. Gerardus M. C. Kumaat</option>
                    <option value="Dkn. Meisye Herlina Kaligis" <?php if ($ibadahminggu->p7 == "Dkn. Meisye Herlina Kaligis") { echo "selected";}?>>Dkn. Meisye Herlina Kaligis</option>
                    <option value="Dkn. Rosmita Purba" <?php if ($ibadahminggu->p7 == "Dkn. Rosmita Purba") { echo "selected";}?>>Dkn. Rosmita Purba</option>
                    <option value="Pnt. Suprapto Darmosuwito" <?php if ($ibadahminggu->p7 == "Pnt. Suprapto Darmosuwito") { echo "selected";}?>>Pnt. Suprapto Darmosuwito</option>
                    <option value="Pnt. D. Robert Kresnajaya" <?php if ($ibadahminggu->p7 == "Pnt. D. Robert Kresnajaya") { echo "selected";}?>>Pnt. D. Robert Kresnajaya</option>
                    <option value="Dkn. Sarce Siwabessy" <?php if ($ibadahminggu->p7 == "Dkn. Sarce Siwabessy") { echo "selected";}?>>Dkn. Sarce Siwabessy</option>
                    <option value="Dkn. Marthina Palijama Alfons" <?php if ($ibadahminggu->p7 == "Dkn. Marthina Palijama Alfons") { echo "selected";}?>>Dkn. Marthina Palijama Alfons</option>
                    <option value="Pnt. L. M. Untajana" <?php if ($ibadahminggu->p7 == "Pnt. L. M. Untajana") { echo "selected";}?>>L. M. Untajana</option>
                    <option value="Pnt. Luisa Agustina Patty" <?php if ($ibadahminggu->p7 == "Pnt. Luisa Agustina Patty") { echo "selected";}?>>Pnt. Luisa Agustina Patty</option>
                    <option value="Dkn. Arie Dian Ekawati" <?php if ($ibadahminggu->p7 == "Dkn. Arie Dian Ekawati") { echo "selected";}?>>Dkn. Arie Dian Ekawati</option>
                    <option value="Dkn. Nofian E. Masinambow" <?php if ($ibadahminggu->p7 == "Dkn. Nofian E. Masinambow") { echo "selected";}?>>Dkn. Nofian E. Masinambow</option>
                    <option value="Dkn. Ivone Ayugrahita Fora" <?php if ($ibadahminggu->p7 == "Dkn. Ivone Ayugrahita Fora") { echo "selected";}?>>Dkn. Ivone Ayugrahita Fora</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Pelayan 8</label>
                  <select class="form-control" name="p8">
                    <option value="">Pilih Majelis Bertugas</option>
                    <option value="Pnt. Sonny I. Anthonie" <?php if ($ibadahminggu->p8 == "Pnt. Sonny I. Anthonie") { echo "selected";}?>>Pnt. Sonny I. Anthonie</option>
                    <option value="Pnt. Eka Pongrangga" <?php if ($ibadahminggu->p8 == "Pnt. Eka Pongrangga") { echo "selected";}?>>Pnt. Eka Pongrangga</option>
                    <option value="Pnt. Maria Eni Pakpahan" <?php if ($ibadahminggu->p8 == "Pnt. Maria Eni Pakpahan") { echo "selected";}?>>Pnt. Maria Eni Pakpahan</option>
                    <option value="Dkn. Yan W. Tatipata" <?php if ($ibadahminggu->p8 == "Dkn. Yan W. Tatipata") { echo "selected";}?>>Dkn. Yan W. Tatipata</option>
                    <option value="Dkn. Tjatur Istijorini" <?php if ($ibadahminggu->p8 == "Dkn. Tjatur Istijorini") { echo "selected";}?>>Dkn. Tjatur Istijorini</option>
                    <option value="Pnt. Septianus B. Permadi" <?php if ($ibadahminggu->p8 == "Pnt. Septianus B. Permadi") { echo "selected";}?>>Pnt. Septianus B. Permadi</option>
                    <option value="Pnt. Gerardus M. C. Kumaat" <?php if ($ibadahminggu->p8 == "Pnt. Gerardus M. C. Kumaat") { echo "selected";}?>>Pnt. Gerardus M. C. Kumaat</option>
                    <option value="Dkn. Meisye Herlina Kaligis" <?php if ($ibadahminggu->p8 == "Dkn. Meisye Herlina Kaligis") { echo "selected";}?>>Dkn. Meisye Herlina Kaligis</option>
                    <option value="Dkn. Rosmita Purba" <?php if ($ibadahminggu->p8 == "Dkn. Rosmita Purba") { echo "selected";}?>>Dkn. Rosmita Purba</option>
                    <option value="Pnt. Suprapto Darmosuwito" <?php if ($ibadahminggu->p8 == "Pnt. Suprapto Darmosuwito") { echo "selected";}?>>Pnt. Suprapto Darmosuwito</option>
                    <option value="Pnt. D. Robert Kresnajaya" <?php if ($ibadahminggu->p8 == "Pnt. D. Robert Kresnajaya") { echo "selected";}?>>Pnt. D. Robert Kresnajaya</option>
                    <option value="Dkn. Sarce Siwabessy" <?php if ($ibadahminggu->p8 == "Dkn. Sarce Siwabessy") { echo "selected";}?>>Dkn. Sarce Siwabessy</option>
                    <option value="Dkn. Marthina Palijama Alfons" <?php if ($ibadahminggu->p8 == "Dkn. Marthina Palijama Alfons") { echo "selected";}?>>Dkn. Marthina Palijama Alfons</option>
                    <option value="Pnt. L. M. Untajana" <?php if ($ibadahminggu->p8 == "Pnt. L. M. Untajana") { echo "selected";}?>>L. M. Untajana</option>
                    <option value="Pnt. Luisa Agustina Patty" <?php if ($ibadahminggu->p8 == "Pnt. Luisa Agustina Patty") { echo "selected";}?>>Pnt. Luisa Agustina Patty</option>
                    <option value="Dkn. Arie Dian Ekawati" <?php if ($ibadahminggu->p8 == "Dkn. Arie Dian Ekawati") { echo "selected";}?>>Dkn. Arie Dian Ekawati</option>
                    <option value="Dkn. Nofian E. Masinambow" <?php if ($ibadahminggu->p8 == "Dkn. Nofian E. Masinambow") { echo "selected";}?>>Dkn. Nofian E. Masinambow</option>
                    <option value="Dkn. Ivone Ayugrahita Fora" <?php if ($ibadahminggu->p8 == "Dkn. Ivone Ayugrahita Fora") { echo "selected";}?>>Dkn. Ivone Ayugrahita Fora</option>
                </select>
                </div>
                <div class="form-group">
                  <label>Pengantar Kantong Kolekte 1</label>
                  <input type="text" value="{{$ibadahminggu->kolekte1}}" class="form-control" name="kolekte1">
                </div>
                <div class="form-group">
                  <label>Pengantar Kantong Kolekte 2</label>
                  <input type="text" value="{{$ibadahminggu->kolekte2}}" class="form-control" name="kolekte2">
                </div>
                <div class="form-group">
                  <label>Pengantar Kantong Kolekte 3</label>
                  <input type="text" value="{{$ibadahminggu->kolekte3}}" class="form-control" name="kolekte3">
                </div>
                <div class="form-group">
                  <label>Pengantar Kantong Kolekte 4</label>
                  <input type="text" value="{{$ibadahminggu->kolekte4}}" class="form-control" name="kolekte4">
                </div>
                <div class="form-group">
                  <label>Organist</label>
                  <input type="text" value="{{$ibadahminggu->organist}}" class="form-control" name="organist">
                </div>
                <div class="form-group">
                  <label>Kantoria 1</label>
                  <input type="text" value="{{$ibadahminggu->kantoria1}}" class="form-control" name="kantoria1">
                </div>
                <div class="form-group">
                  <label>Kantoria 2</label>
                  <input type="text" value="{{$ibadahminggu->kantoria2}}" class="form-control" name="kantoria2">
                </div>
                <div class="form-group">
                  <label>Operator Slide Show</label>
                  <input type="text" value="{{$ibadahminggu->operator}}" class="form-control" name="operator">
                </div>
                <div class="form-group">
                  <label>Paduan Suara / Vocal Group / Solo</label>
                  <input type="text" value="{{$ibadahminggu->vocalgroup}}" class="form-control" name="vocalgroup">
                </div>
                <div class="form-group">
                  <label>Operator Sound System</label>
                  <input type="text" value="{{$ibadahminggu->soundman}}" class="form-control" name="soundman">
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