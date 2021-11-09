<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel=" stylesheet">

    <!-- Javascript -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>

    <!-- Datatables -->
    <link rel="stylesheet" href="{{ asset('css/datatable.min.css') }}">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#datatable').DataTable({
                "scrollX": true,
                "responsive": true
            });
        });
    </script>

    <title>e-Perpus</title>

</head>

<body class="bg-gray">

    <div class="d-flex" id="wrapper">
        <!-- Sidebar Start-->
        <div class="bg-light border-end" id="sidebar-wrapper">
            <div class="bg-light sidebar-heading fw-bold fs-4 border-bottom"> <img
                    src="{{ asset('images/logosmk.png') }}" alt="" class="img img-responsive" width="30" height="30">
                e-Perpus</div>
            <div class="list-group list-group-flush">
                <a class="p-3 border-0 list-group-item list-group-item-action list-group-item-light " href="#!"><i
                        class='fa fa-history'></i> Log Audit</a>
                <a class="p-3 border-0 list-group-item list-group-item-action list-group-item-light " href="#!"> <i
                        class='fa fa-book '></i> Buku</a>
                <a class="p-3 border-0 list-group-item list-group-item-action list-group-item-light " href="#!"><i
                        class='fa fa-address-book'></i> Peminjaman</a>
                <a class="p-3 border-0 list-group-item list-group-item-action list-group-item-light " href="#!"><i
                        class='fa fa-user-graduate'></i> Siswa</a>
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
                                Username
                                <i class='fa fa-angle-down'></i>
                                <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse3.mm.bing.net%2Fth%3Fid%3DOIP.3iumuUC5lngNt-nt7xylQQHaHa%26pid%3DApi&f=1"
                                    alt="Username" width="30" height="30" class="border rounded-circle">
                            </a>
                            <ul class="mt-4 shadow dropdown-menu me-0" aria-labelledby="dropdownUser2">
                                <li><a class="dropdown-item" href="edituser.php">
                                        <i class="fas fa-user-cog"></i> Edit Profile</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item text-danger" href="#"><i class="fas fa-sign-out-alt"></i>
                                        Sign out</a></li>
                                <li>
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input" id="darkSwitch">
                                        <label class="custom-control-label" for="darkSwitch">Dark Mode</label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </header>
            <!-- Nav end -->

            <!-- Content Start-->
            <div class="container-fluid">
                @yield('content')
            </div>
            <!-- Content End -->

        </div>
    </div>
</body>

</html>
