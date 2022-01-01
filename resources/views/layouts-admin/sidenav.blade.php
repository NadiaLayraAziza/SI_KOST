<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
            @if(Auth::user()->role == 'admin')
            <li>
                <a class="@yield('beranda')"  href="/admin/home"><i class="fa fa-dashboard"></i> Beranda</a>
            </li>
            <li>
                <a class="@yield('superadmin')"  href="/admin"><i class="fa fa-desktop"></i> Super Admin</a>
            </li>
            <li>
                <a class="@yield('penyediakost')"  href="/penyedia"><i class="fa fa-bar-chart-o"></i> Penyedia Kost</a>
            </li>
            <li>
                <a class="@yield('menu_penyewa')" href={{ route('penyewa.index') }}><i class="fa fa-qrcode"></i> Penyewa Kost</a>
            </li>

            {{-- <li>
                <a class="@yield('transaksi')"  href={{ route('transaksi.index') }}><i class="fa fa-table"></i> Transaksi</a>
            </li> --}}
            <li>
                <a class="@yield('report')" href="/report/admin"><i class="fa fa-edit"></i> Report </a>
            </li>
            @endif
            {{-- admin --}}
            @if(Auth::user()->role == 'Penyedia')
            <li>
                <a class="@yield('home_penyedia')" href=/home/penyedia><i class="fa fa-dashboard"></i> Home</a>
            </li>
            <li>
                <a class="@yield('kamar')" href={{ route('kamar.index') }}><i class="fa fa-qrcode"></i> Kelola Kamar</a>
            </li>
            <li>
                <a class="@yield('penyewa')" href={{ route('penyewa.index') }}><i class="fa fa-table"></i> Penyewa Kost</a>
            </li>
            <li>
                <a class="@yield('menu_report_penyedia')" href={{ route('Report.index') }}><i class="fa fa-qrcode"></i> Report</a>
            </li>
            @endif
        </ul>
    </div>
</nav>
