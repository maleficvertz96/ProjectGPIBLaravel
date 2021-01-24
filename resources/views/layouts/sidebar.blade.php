<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      @guest
      @else
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{url('adminlte/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Admin</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li>
          <a href="{{route('datajemaat.index')}}">
            <i class="fa fa-users"></i> <span>Data Jemaat</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-calendar"></i> <span>Jadwal Ibadah</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('ibadahminggu.index')}}"><i class="fa fa-circle-o"></i> Ibadah Hari Minggu</a></li>
            <li><a href="{{route('ibadahpelkat.index')}}"><i class="fa fa-circle-o"></i> Ibadah Pelkat</a></li>
            <li><a href="{{route('kebaktian.index')}}"><i class="fa fa-circle-o"></i> Kebaktian Rabu</a></li>
          </ul>
        </li>
        <li>
          <a href="{{route('kegiatan.index')}}">
            <i class="fa fa-bullhorn"></i> <span>Agenda Kegiatan</span>
          </a>
        </li>
        <li>
          <a href="{{route('hut.index')}}">
            <i class="fa fa-birthday-cake"></i> <span>HUT</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-money"></i> <span>Laporan Keuangan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('penerimaan.index')}}"><i class="fa fa-circle-o"></i> Penerimaan</a></li>
            <li><a href="{{route('pengeluaran.index')}}"><i class="fa fa-circle-o"></i> Pengeluaran</a></li>
          </ul>
        </li>
        <li>
          <a href="{{ route('pembinaan.index') }}">
            <i class="fa  fa-briefcase"></i> <span> Pembinaan Pelayan</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa  fa-credit-card"></i> <span> Daftar Transaksi Masuk</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('transaksi.index') }}"><i class="fa fa-circle-o"></i> Online</a></li>
            <li><a href="{{ route('offlinetransaksi.index') }}"><i class="fa fa-circle-o"></i> Offline</a></li>
          </ul>
        </li>
        <li>
          <a href="{{ route('pelayananpribadi.index') }}">
            <i class="fa  fa-thumbs-up"></i> <span> Pelayanan Khusus</span>
          </a>
        </li>
        <li>
          <a href="{{ route('absensi.index') }}">
            <i class="fa  fa-list-ul"></i> <span> Absensi Ibadah Offline</span>
          </a>
        </li>
      </ul>
      @endguest
    </section>
    <!-- /.sidebar -->
  </aside>
