@extends('layouts.app')


@section('content')
<section class="content-header">
      <h1>
        Membuat Data Jemaat Baru
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
         <form action="{{route('datajemaat.update',$datajemaat->id)}}" method="POST" enctype="multipart/form-data">
         {{csrf_field()}}
         {{method_field('PUT')}}
              <div class="box-body">
                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" value="{{$datajemaat->name}}" class="form-control" name="name">
                </div>
                <div class="form-group">
                  <label>E-mail (Digunakan untuk Login Warta Jemaat)</label>
                  <input type="text" value="{{$datajemaat->email}}" class="form-control" name="email">
                </div>
                <div class="form-group">
                  <label>Password (Kosongkan Bila Tidak Diganti)</label>
                  <input type="password" value="" class="form-control" name="password">
                </div>
                <div class="form-group">
                  <label>Alamat</label>
                  <input type="text" value="{{$datajemaat->alamat}}" class="form-control" name="alamat">
                </div>
                <div class="form-group">
                  <label>No. Telpon</label>
                  <input type="number" value="{{$datajemaat->phone}}" class="form-control" name="phone">
                </div>
                <div class="form-group">
                  <label>Status Perkawinan</label>
                  <input type="text"  value="{{$datajemaat->status}}" class="form-control" name="status">
                </div>
                <div class="form-group">
                  <label>Sektor</label>
                  <select class="form-control" name="sektor">
                    <option value="">Pilih Data</option>
                    <option value="1" <?php if ($datajemaat->sektor == 1) { echo "selected";}?>>1</option>
                    <option value="2" <?php if ($datajemaat->sektor == 2) { echo "selected";}?>>2</option>
                    <option value="3" <?php if ($datajemaat->sektor == 3) { echo "selected";}?>>3</option>
                    <option value="4" <?php if ($datajemaat->sektor == 4) { echo "selected";}?>>4</option>
                    <option value="5" <?php if ($datajemaat->sektor == 5) { echo "selected";}?>>5</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Jenis Kelamin</label>
                  <select class="form-control" name="gender">
                    <option value="Laki-Laki" <?php if ($datajemaat->gender == "Laki-Laki") { echo "selected";}?>>Laki-Laki</option>
                    <option value="Perempuan" <?php if ($datajemaat->gender == "Perempuan") { echo "selected";}?>>Perempuan</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Tempat Lahir</label>
                  <input type="text" value="{{$datajemaat->tmptlahir}}" class="form-control" name="tmptlahir">
                </div>
                <div class="form-group">
                  <label>Tanggal Lahir</label>
                  <input type="date" value="{{$datajemaat->tgllahir}}" class="form-control" name="tgllahir">
                </div>
                <div class="form-group">
                  <label>Tanggal Baptis</label>
                  <input type="date" value="{{$datajemaat->baptis}}" class="form-control" name="baptis">
                </div>
                <div class="form-group">
                  <label>Tanggal Pemberkatan Nikah</label>
                  <input type="date" value="{{$datajemaat->nikah}}" class="form-control" name="nikah">
                </div>
                <div class="form-group">
                  <label>Pendidikan</label>
                  <input type="text" value="{{$datajemaat->pendidikan}}" class="form-control" name="pendidikan">
                </div>
                <div class="form-group">
                  <label>Pekerjaan</label>
                  <input type="text" value="{{$datajemaat->pekerjaan}}" class="form-control" name="pekerjaan">
                </div>
                <div class="form-group">
                  <label>Role</label>
                  <select class="form-control" name="role">
                    <option value="user" <?php if ($datajemaat->role == "user") { echo "selected";}?>>User</option>
                    <option value="publisher" <?php if ($datajemaat->role == "publisher") { echo "selected";}?>>Publisher</option>
                    <option value="admin" <?php if ($datajemaat->role == "admin") { echo "selected";}?>>Admin</option>
                  </select>
                </div>
                {{-- <div class="form-group">
                  <label>Ubah Foto Profil (Abaikan jika tidak ingin mengubah foto)</label>
                  <input type="file" value="{{$datajemaat->photo}}" class="form-control" name="photo">
                </div> --}}
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