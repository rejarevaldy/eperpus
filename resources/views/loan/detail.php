@extends('layouts.main')

@section('content')

    <!-- Panel Start -->
    <div class="p-4 mb-4 border rounded bg-light">
        <div class="row">
            <div class="col-lg-12">
                <div class="p-4 mb-4 rounded bg-light">
                    <h2 class="mb-5 ">Detail Peminjaman</h2>
                    <div class="mb-2 row">
                        <div class="col-sm">
                            <a href="/peminjaman/edit" class="text-white text-decoration-none">
                                <button class="px-4 py-2 btn btn-outline-primary fw-bold "><i class="fas fa-edit "></i>
                                    <div class="d-none d-sm-inline"> Edit</div>
                                </button>
                            </a>

                            <!-- Button trigger modal -->
                            <button type="button" class="px-4 py-2 btn btn-outline-danger fw-bold" data-bs-toggle="modal"
                                data-bs-target="#deleteModal">
                                <i class="fas fa-trash"></i>
                                <div class="d-none d-sm-inline"> Delete</div>
                            </button>

                            <button type="button" class="px-4 py-2 btn btn-outline-secondary fw-bold">
                                <a href="../peminjaman" class="text-white text-decoration-none"><i
                                        class="fas fa-caret-square-left"></i>
                                    <div class="d-none d-sm-inline"> Back</div>
                                </a>
                            </button>

                            <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="deleteModalLabel">Konfirmasi</h5>
                                            <button type="button" class="btn-outline-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>

                                        </div>
                                        <div class="modal-body">
                                            <i class="fas fa-exclamation-circle text-warning"></i> Apakah Anda Yakin Akan
                                            Menghapus []
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="px-3 py-1 btn btn-outline-outline-secondary"
                                                data-bs-dismiss="modal">No</button>
                                            <button type="button" class="px-3 py-1 btn btn-outline-danger">Yes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Panel End -->


        <!-- Form Start -->
        <div class="p-4 border rounded bg-light">
            <div class="row">
                <form action="">
                    <div class="row">
                        <div class="col-lg-6">

                            <div class="mb-3 form-input">
                                <label for="" class="mb-1 fw-bold"> ID</label>
                                <div class="input-group">
                                    <input placeholder="ID" class="form-control" disabled>

                                    <span class="bg-light input-group-text" id="addon-wrapping"> <i
                                            class='fa fa-key text-secondary'></i>
                                    </span>
                                </div>
                            </div>

                            <div class="mb-3 form-input">
                                <label for="" class="mb-1 fw-bold"> Buku</label>
                                <div class="input-group">
                                    <input list="book" placeholder="Book" class="form-control" disabled>
                                    <datalist id="book">
                                        <option value="Web Designing">
                                        <option value="Web Development">
                                        <option value="IOS App Development">
                                        <option value="Wordpress Site">
                                        <option value="UI/UX Development">
                                    </datalist>
                                    <span class="bg-light input-group-text" id="addon-wrapping"> <i
                                            class='fa fa-book text-secondary'></i>
                                    </span>
                                </div>
                            </div>

                            <div class="mb-3 form-input">
                                <label for="" class="mb-1 fw-bold"> Peminjam</label>
                                <div class="input-group">
                                    <input list="peminjam" placeholder="Peminjam" class="form-control" disabled>
                                    <datalist id="peminjam">
                                        <option value="Web Designing">
                                        <option value="Web Development">
                                        <option value="IOS App Development">
                                        <option value="Wordpress Site">
                                        <option value="UI/UX Development">
                                    </datalist>
                                    <span class="bg-light input-group-text" id="addon-wrapping"> <i
                                            class='fa fa-user-graduate text-secondary'></i>
                                    </span>
                                </div>
                            </div>

                            <div class="mb-3 form-input">
                                <label for="" class="mb-1 fw-bold"> Status</label>
                                <div class="input-group">
                                    <input placeholder="Status" class="form-control" disabled>

                                    <span class="bg-light input-group-text" id="addon-wrapping"> <i
                                            class='fa fa-info-circle text-secondary'></i>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">

                            <div class="mb-3 form-input">
                                <label for="startDate" class="mb-1 fw-bold"> Tanggal Peminjaman</label>
                                <div class="input-group ">
                                    <input id="startDate" class="form-control" disabled type="date" />
                                    <span class="bg-light input-group-text" id="basic-addon1"><i
                                            class="fas fa-calendar-plus text-secondary"></i></span>
                                </div>
                            </div>

                            <div class="mb-3 form-input">
                                <label for="endDate" class="mb-1 fw-bold"> Tanggal Tenggat</label>
                                <div class="input-group ">
                                    <input id="endDate" class="form-control" disabled type="date" />
                                    <span class="bg-light input-group-text" id="basic-addon1"><i
                                            class="fas fa-calendar-minus text-secondary"></i></span>
                                </div>
                            </div>

                            <div class="mb-3 form-input">
                                <label for="returnDate" class="mb-1 fw-bold"> Tanggal Pengembalian</label>
                                <div class="input-group ">
                                    <input id="returnDate" class="form-control" disabled type="date" />
                                    <span class="bg-light input-group-text" id="basic-addon1"><i
                                            class="fas fa-calendar-check text-secondary"></i></span>
                                </div>
                            </div>

                        </div>
                    </div>
                </form>
            </div>
            <!-- Form End -->

        </div>
    </div>

    <!-- Content End -->
@endsection
