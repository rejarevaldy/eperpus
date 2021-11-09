@extends('layouts.main')

@section('content')

    <!-- Breadcrum Start -->
    <nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: '/';">
        <ol class="breadcrumb">
            <li class="breadcrumb-item ">Home</li>
            <li class="breadcrumb-item ">Siswa</li>
            <li class="breadcrumb-item active" aria-current="page"> Tambahkan Siswa</li>
        </ol>
    </nav>
    <!-- Breadcrumb End -->
    <!-- Panel Start -->
    <div class="p-4 mb-4 border rounded bg-light">
        <div class="row">
            <div class="col-lg-12 ">
                <div class="p-4 mb-4 bg-light">
                    <h2 class="mb-2">Tambahkan Siswa</h2>
                </div>
                <!-- Panel End -->
                <!-- Form Start -->
                <div class="p-4 border rounded bg-light">
                    <div class="row">
                        <form action="">
                            <div class="row">
                                <div class="col-lg-2">
                                    <div class="mb-3 form-input">
                                        <label for="" class="mb-1 fw-bold"> Image
                                        </label>
                                        <div class="input-group">
                                            <img src="https://dummyimage.com/200x200/ababab/ffffff" class="img-thumbnail"
                                                alt="...">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-10">
                                    <div class="mb-3 form-input">
                                        <label for="" class="mb-1 fw-bold"> NIS</label>
                                        <div class="input-group">
                                            <input placeholder="NIS" class="form-control" disabled>
                                        </div>
                                    </div>
                                    <div class="mb-3 form-input">
                                        <label for="" class="mb-1 fw-bold"> Nama</label>
                                        <div class="input-group">
                                            <input placeholder="Nama" class="form-control">
                                        </div>
                                    </div>
                                    <div class="mb-3 form-input">
                                        <label for="" class="mb-1 fw-bold"> Kelas</label>
                                        <div class="input-group">
                                            <input placeholder="Kelas" class="form-control">
                                        </div>
                                    </div>
                                    <div class="mb-3 input-group">
                                        <label for="" class="mb-1 fw-bold"> Image
                                        </label>
                                        <div class="input-group">
                                            <input type="file" class="form-control" id="inputGroupFile02">
                                        </div>
                                    </div>
                                    <button type="button" class="px-4 py-2 mt-3 btn btn-primary fw-bold"><i
                                            class="fas fa-plus"></i>
                                        <div class="d-none d-sm-inline"> Tambahkan</div>
                                    </button>
                                    <button type="reset" class="px-4 py-2 mt-3 btn btn-danger fw-bold" value="reset"><i
                                            class="fas fa-undo"></i>
                                        <div class="d-none d-sm-inline"> Reset</div>
                                    </button>
                                    <button type="button" class="px-4 py-2 mt-3 btn btn-secondary fw-bold"><i
                                            class="fas fa-caret-square-left"></i>
                                        <div class="d-none d-sm-inline"> Back</div>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- Form End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Content End -->

@endsection
