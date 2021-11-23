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

    <title>e-Perpus | Login</title>
</head>

<body>


    <div class="container-fluid ps-md-0 ">
        <div class="row g-0">
            <!-- Login  -->
            <div class="col-md-8 col-lg-6">
                <div class="py-5 login d-flex align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="mx-auto col-md-6 col-lg-8">
                                <h3 class="mb-4 login-heading fs-2 fw-bold">ePerpustakaan</h3>
                                <form action="{{ route('login') }}" method="POST">
                                    @csrf
                                    <div class="mb-3 form-floating">
                                        <input type="text" class="form-control bg-input" id="floatingInput"
                                            placeholder="Username" name="username">
                                        @error('username')
                                            <div class="text-danger">
                                                * {{ $message }}
                                            </div>
                                        @enderror
                                        <label for="floatingInput">Username</label>
                                    </div>
                                    <div class="mb-3 form-floating">

                                        <input type="password" class="form-control bg-input" id="floatingPassword"
                                            placeholder="Password" name="password">
                                        @error('password')
                                            <div class="text-danger">
                                                * {{ $message }}
                                            </div>
                                        @enderror
                                        <label for="floatingPassword">Password</label>
                                    </div>

                                    <div class="mb-3 form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="remember"
                                            name="remember">
                                        <label class="form-check-label" for="remember">
                                            Remember me
                                        </label>
                                    </div>

                                    <div class="mb-5 d-grid">
                                        <button class="mb-2 btn btn-lg btn-primary btn-login text-uppercase fw-bold"
                                            type="submit">Login</button>
                                    </div>

                                    <p class="text-center text-secondary">SMKN 2 Banjarmasin</p>

                                    @if (session('status'))
                                        <div class="p-4 mb-6 text-center text-white bg-red-500 rounded-lg">
                                            {{ session('status') }}
                                        </div>
                                    @endif

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Background Image -->
            <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"><img class="img-fluid"
                    src="{{ asset('images/library.png') }}" alt="" srcset=""></div>
        </div>
    </div>

    <!-- footer -->
    <footer class="text-center text-white text-lg-start border-top " style="background-color: #2F2E41;">
        <div class="container p-4">
            <div class="row">
                <div class="mb-4 col-lg-5 col-md-12 mb-md-0">
                    <h5 class="text-uppercase fw-bold">SMKN 2 BANJARMASIN</h5>
                    <p>
                        2021
                    </p>
                </div>

                <div class="mb-4 col-lg-5 col-md-6 mb-md-0">
                    <h5 class="mb-4 text-uppercase fw-bold">Alamat Sekolah</h5>

                    <ul class="list-unstyled">
                        <li>
                            Jl. Brigjend H. Hasan Basri No. 6 Kayutangi Banjarmasin 70123

                        </li>
                        <li>
                            Telp./Fax. : 0511-3304677
                        </li>
                        <li>
                            E-Mail: surel@smkn2-bjm.sch.id
                        </li>

                    </ul>
                </div>

                <div class="mb-4 col-lg-2 col-md-6 mb-md-0">
                    <h5 class="mb-4 text-uppercase fw-bold">Link Terkait</h5>

                    <ul class="list-unstyled ">
                        <li>
                            <a href="https://smkn2-bjm.sch.id/" class="text-white text-decoration-none">SMKN 2
                                Banjarmasin</a>
                        </li>
                        <li>
                            <a href="http://91d70abe80df.sn.mynetname.net:81/"
                                class="text-white text-decoration-none">E-Learning</a>
                        </li>
                        <li>
                            <a href="https://www.eprakerin.smkn2-bjm.sch.id/"
                                class="text-white text-decoration-none">E-Prakerin</a>
                        </li>
                        <li>
                            <a href="esapras" class="text-white text-decoration-none">E-Sarpras</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>
