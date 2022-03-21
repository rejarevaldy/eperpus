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

    <style>
        .css-selector {
            background: linear-gradient(138deg, #3451c7, #cbd2f3);
            background-size: 400% 400%;
            -webkit-animation: AnimationName 30s ease infinite;
            -moz-animation: AnimationName 30s ease infinite;
            animation: AnimationName 30s ease infinite;
        }

        @-webkit-keyframes AnimationName {
            0% {
                background-position: 0% 2%
            }

            50% {
                background-position: 100% 99%
            }

            100% {
                background-position: 0% 2%
            }
        }

        @-moz-keyframes AnimationName {
            0% {
                background-position: 0% 2%
            }

            50% {
                background-position: 100% 99%
            }

            100% {
                background-position: 0% 2%
            }
        }

        @keyframes AnimationName {
            0% {
                background-position: 0% 2%
            }

            50% {
                background-position: 100% 99%
            }

            100% {
                background-position: 0% 2%
            }
        }

    </style>

    <title>e-Perpus | Register</title>
</head>

<body>


    <div class="container-fluid ps-md-0 ">
        <div class="row g-0">
            <!-- Login  -->
            <!-- Background Image -->
            <div class="col-md-8 col-lg-6">
                <div class="py-5 login d-flex align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="mx-auto col-md-6 col-lg-8">
                                <h3 class="mb-5 login-heading fs-2 fw-bold">Registrasi</h3>
                                <form action="{{ route('register.store') }}" method="POST">
                                    @csrf
                                    <div class="mb-3 form-floating">
                                        <input type="text" class="form-control bg-input" id="floatingInput"
                                            placeholder="Nama" name="nama">
                                        @error('nama')
                                            <div class="text-danger">
                                                * {{ $message }}
                                            </div>
                                        @enderror
                                        <label for="floatingInput">Nama</label>
                                    </div>
                                    <div class="mb-3 form-floating">
                                        <input type="text" class="form-control bg-input" id="floatingInput"
                                            placeholder="Nis" name="nis">
                                        @error('nis')
                                            <div class="text-danger">
                                                * {{ $message }}
                                            </div>
                                        @enderror
                                        <label for="floatingInput">Nis</label>
                                    </div>
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


                                    <div class="mb-3 form-floating input-group ">
                                        <select class="form-select bg-input" id="floatingSelect"
                                            aria-label="Floating label select example" name="jurusan">
                                            @foreach ($jurusan as $j)
                                                <option value="{{ $j }}">{{ $j }}</option>
                                            @endforeach
                                        </select>

                                        <select class="form-select bg-input" id="floatingSelect"
                                            aria-label="Floating label select example" name="kelas">
                                            @foreach ($kelas as $k)
                                                <option value="{{ $k }}">{{ $k }}</option>
                                            @endforeach
                                        </select>

                                    </div>

                                    <div class="mb-3 form-floating input-group ">
                                        <select class="form-select bg-input" id="floatingSelect"
                                            aria-label="Floating label select example" name="agama">
                                            @foreach ($agama as $a)
                                                <option value="{{ $a }}">{{ $a }}</option>
                                            @endforeach
                                        </select>

                                        <select class="form-select bg-input" id="floatingSelect"
                                            aria-label="Floating label select example" name="gender">
                                            @foreach ($gender as $g)
                                                <option value="{{ $g }}">{{ $g }}</option>
                                            @endforeach
                                        </select>

                                    </div>


                                    <div class="mb-4 d-grid">
                                        <button class="mb-2 btn btn-lg btn-primary btn-login text-uppercase fw-bold"
                                            type="submit">Register</button>
                                        <a href="{{ route('login') }}"
                                            class="text-center mt-3 text-decoration-none">Sign In</a>
                                    </div>

                                    <a href=""></a>

                                    <p class="text-center text-secondary">SMKN 2 Banjarmasin</p>
                                    <p class="text-center text-secondary"> © Reja Revaldy F, 2021
                                    </p>

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
            <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image css-selector" style=""></div>

        </div>
    </div>

    <!-- footer -->
    <footer class="text-center text-white text-lg-start border-top " style="background-color: #2F2E41;">
        <div class="container p-4">
            <div class="row">
                <div class="mb-4 col-lg-5 col-md-12 mb-md-0">
                    <h5 class="text-uppercase fw-bold">SMKN 2 BANJARMASIN</h5>
                    <p>
                        © Reja Revaldy F, 2021
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


    <script>
    </script>

</body>


</html>
