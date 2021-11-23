@extends('layouts.main')

@section('content')


    <!-- Panel Start -->
    <div class="p-4 mb-4 border rounded bg-light">
        <div class="row">
            <div class="col-lg-12">
                <div class="p-4 mb-4 rounded bg-light">
                    <h2 class="mb-5 ">Detail Siswa</h2>
                    <div class="mb-2 row">
                        <div class="col-sm">
                            <a href="/siswa/edit" class="text-white text-decoration-none">
                                <button class="px-4 py-2 btn btn-primary fw-bold "><i class="fas fa-edit "></i>
                                    <div class="d-none d-sm-inline"> Edit</div>
                                </button>
                            </a>
                            <!-- Button trigger modal -->
                            <button type="button" class="px-4 py-2 btn btn-danger fw-bold" data-bs-toggle="modal"
                                data-bs-target="#deleteModal">
                                <i class="fas fa-trash"></i>
                                <div class="d-none d-sm-inline"> Delete</div>
                            </button>
                            <button type="button" class="px-4 py-2 btn btn-secondary fw-bold "><i
                                    class="fas fa-caret-square-left"></i>
                                <div class="d-none d-sm-inline"> Back</div>
                            </button>
                            <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="deleteModalLabel">Konfirmasi</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <i class="fas fa-exclamation-circle text-warning"></i> Apakah Anda Yakin Akan
                                            Menghapus []
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="px-3 py-1 btn btn-outline-secondary"
                                                data-bs-dismiss="modal">No</button>
                                            <button type="button" class="px-3 py-1 btn btn-danger">Yes</button>
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
                        <div class="col-lg-2">
                            <div class="mb-3 form-input">
                                <label for="" class="mb-1 fw-bold"> Image</label>
                                <div class="input-group">
                                    <img src="https://dummyimage.com/200x200/ababab/ffffff" class="img-thumbnail"
                                        alt="...">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-10">
                            <div class="mb-3 form-input">
                                <label for="" class="mb-1 fw-bold"> ISBN</label>
                                <div class="input-group">
                                    <input placeholder="ISBN" class="form-control" disabled>
                                </div>
                            </div>
                            <div class="mb-3 form-input">
                                <label for="" class="mb-1 fw-bold"> Judul</label>
                                <div class="input-group">
                                    <input placeholder="Judul" class="form-control" disabled>
                                </div>
                            </div>
                            <div class="mb-3 form-input">
                                <label for="" class="mb-1 fw-bold"> Penulis</label>
                                <div class="input-group">
                                    <input placeholder="Penulis" class="form-control" disabled>
                                </div>
                            </div>

                            <div class="mb-3 form-input">
                                <label for="" class="mb-1 fw-bold"> Stok</label>
                                <div class="input-group">
                                    <input placeholder="Stok" class="form-control" disabled>
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
                    </div>
                </form>
            </div>
            <!-- Form End -->
        </div>
    </div>

@endsection
