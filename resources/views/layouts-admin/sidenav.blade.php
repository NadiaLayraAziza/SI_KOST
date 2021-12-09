<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">

            <li>
                <a  href="index.html"><i class="fa fa-dashboard"></i> Beranda</a>
            </li>
            <li>
                <a  href="ui-elements.html"><i class="fa fa-desktop"></i> Super Admin</a>
            </li>
            <li>
                <a  href="chart.html"><i class="fa fa-bar-chart-o"></i> Penyedia Kost</a>
            </li>
            <li>
                <a class="active-menu @yield('menu_penyewa')" href={{ route('penyewa.index') }}><i class="fa fa-qrcode"></i> Penyewa Kost</a>
            </li>

            <li>
                <a  href="table.html"><i class="fa fa-table"></i> Transaksi</a>
            </li>
            <li>
                <a href="form.html"><i class="fa fa-edit"></i> Report </a>
            </li>
            {{-- admin --}}
            <li>
                <a class="active-menu @yield('menu_kamar')" href={{ route('kamar.index') }}><i class="fa fa-qrcode"></i> Home</a>
            </li>
            <li>
                <a  href="table.html"><i class="fa fa-table"></i> Penyewa Kost</a>
            </li>
            <li>
                <a class="active-menu" href="form.html"><i class="fa fa-edit"></i> Report </a>
            </li>

        </ul>

    </div>

</nav>
