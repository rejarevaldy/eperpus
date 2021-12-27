<div class="d-flex" id="wrapper">
    <!-- Sidebar Start-->
    <div class="bg-white border-end" id="sidebar-wrapper">
        <div class="sidebar-heading fw-bold fs-4 border-bottom" style="padding-bottom: 14px"> <img
                src="{{ asset('images/logosmk.png') }}" alt="" class="img img-responsive" width="35" height="35">
            E-Perpus</div>
        <div class="list-group list-group-flush">
            @if (auth()->user()->role === 'admin')
                <a class="p-3 border-0 list-group-item list-group-item-action list-group-item-light  {{ $title === 'Dashboard' ? 'active text-primary' : '' }}"
                    href="/dashboard/"><i class='fa fa-tachometer-alt'></i> Dashboard</a>
                <a class="p-3 border-0 list-group-item list-group-item-action list-group-item-light  {{ $title === 'Audit' ? 'active text-primary' : '' }}"
                    href="/audit/"><i class='fa fa-history'></i> Log Audit</a>
                <a class="p-3 border-0 list-group-item list-group-item-action list-group-item-light {{ $title === 'Siswa' ? 'active text-primary' : '' }}"
                    href="/siswa/"><i class='fa fa-user-graduate'></i> Siswa</a>
                <a class="p-3 border-0 list-group-item list-group-item-action list-group-item-light {{ $title === 'Peminjaman' ? 'active text-primary' : '' }}"
                    href="/peminjaman/"><i class='fa fa-address-book'></i> Peminjaman</a>
                <a class="p-3 border-0 list-group-item list-group-item-action list-group-item-light {{ $title === 'E-Buku' ? 'active text-primary' : '' }}"
                    href="/ebuku/"> <i class='fa fa-atlas '></i> E-Buku</a>
            @endif

            <a class="p-3 border-0 list-group-item list-group-item-action list-group-item-light {{ $title === 'Buku' ? 'active text-primary' : '' }}"
                href="/buku/"> <i class='fa fa-book '></i> Buku</a>


            @if (auth()->user()->role === 'siswa')
                <a class="p-3 border-0 list-group-item list-group-item-action list-group-item-light {{ $title === 'E-Buku user' ? 'active text-primary' : '' }}"
                    href="/ebuku/user"> <i class='fa fa-atlas '></i> E-Buku</a>
                <a class="p-3 border-0 list-group-item list-group-item-action list-group-item-light {{ $title === 'Peminjaman' ? 'active text-primary' : '' }}"
                    href="{{ route('loan.user', auth()->user()->nama) }}"><i class='fa fa-user-graduate'></i>
                    Peminjaman
                    {{ auth()->user()->nama }}</a>
            @endif

        </div>
    </div>
    <!-- Sicebar End -->

    <!-- Page content wrapper-->
    <div id="page-content-wrapper">
        <!-- Nav Start -->
        </nav>


        <header class="py-3 mb-3 bg-light border-bottom">

            <div class="container-fluid align-items-center" style="grid-template-columns: 1fr 2fr;">

                <div class="d-flex align-items-center justify-content-between">

                    <button class="btn" id="sidebarToggle"><i class="fas fa-bars"></i></button>
                    <div class="flex-shrink-0 px-1 dropdown">

                        <a href="#" class="d-block link-dark text-decoration-none " id="dropdownUser2"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            {{ auth()->user()->nama }}
                            <i class='fa fa-angle-down'></i>
                            <img src="{{ asset('images/') }}/{{ auth()->user()->gambar_user }}" alt="Username"
                                width="30" height="30" class="border rounded-circle">
                        </a>

                        <ul class="mt-4 shadow dropdown-menu me-0" aria-labelledby="dropdownUser2">
                            <li><a class="dropdown-item" href="{{ route('user', auth()->user()->nama) }}"><i
                                        class="fas fa-user-cog"></i>
                                    Detail Profile</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            <li><a class="dropdown-item text-danger" href="{{ route('logout') }}"><i
                                        class="fas fa-sign-out-alt"></i> Sign
                                    out</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <!-- Nav end -->
