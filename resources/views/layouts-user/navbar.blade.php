<nav class="amado-nav">
    <ul>
        <li class="@yield('home')"><a href="/">Home</a></li>
    {{-- @php
    $a = Auth::user()->id;
    $b = Penyewa::all()->where('id_user',$a);
    @endphp --}}

        <li class="@yield('booking')"><a href="/historybooking">Booking</a></li>
        {{-- <li class="@yield('payment')"><a href="/payment/user">Payment</a></li> --}}
        <li class="@yield('report')"><a href="{{ route('ReportUser.index') }}">Report</a></li>
        <li class="@yield('profile')"><a href="/profile/user">Profile</a></li>
    </ul>
</nav>
