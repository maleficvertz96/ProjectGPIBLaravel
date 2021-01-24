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
         <form action="{{route('datajemaat.store')}}" method="POST" enctype="multipart/form-data">
         {{csrf_field()}}
              <div class="box-body">
                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" class="form-control" name="name">
                </div>
                <div class="form-group">
                  <label>Email (Digunakan untuk Login Warta Jemaat)</label>
                  <input type="text" class="form-control" name="email">
                </div>
                <div class="form-group">
                  <label>Password (Digunakan untuk Login Warta Jemaat)</label>
                  <input type="password" class="form-control" name="password">
                </div>
                <div class="form-group">
                  <label>Alamat</label>
                  <input type="text" class="form-control" name="alamat">
                </div>
                <div class="form-group">
                  <label>No. Telpon</label>
                  <input type="number" class="form-control" name="phone">
                </div>
                <div class="form-group">
                  <label>Status Perkawinan</label>
                  <input type="text" class="form-control" name="status">
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
                  <label>Jenis Kelamin</label>
                  <select class="form-control" name="gender">
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Tempat Lahir</label>
                  <input type="text" class="form-control" name="tmptlahir">
                </div>
                <div class="form-group">
                  <label>Tanggal Lahir</label>
                  <input type="date" class="form-control" name="tgllahir">
                </div>
                <div class="form-group">
                  <label>Tanggal Baptis</label>
                  <input type="date" class="form-control" name="baptis">
                </div>
                <div class="form-group">
                  <label>Tanggal Pemberkatan Nikah</label>
                  <input type="date" class="form-control" name="nikah">
                </div>
                <div class="form-group">
                  <label>Pendidikan</label>
                  <input type="text" class="form-control" name="pendidikan">
                </div>
                <div class="form-group">
                  <label>Pekerjaan</label>
                  <input type="text" class="form-control" name="pekerjaan">
                </div>
                <div class="form-group">
                  <label>Role</label>
                  <select class="form-control" name="role">
                    <option value="user">User</option>
                    <option value="publisher">Publisher</option>
                    <option value="admin">Admin</option>
                  </select>
                </div>
                {{-- <div class="form-group">
                  <label>Unggah Foto Profil</label>
                  <input type="file" id="exampleInputFile" class="form-control" name="photo">
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