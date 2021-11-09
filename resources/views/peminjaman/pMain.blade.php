@extends('layouts.main')

@section('content')

    <!-- Breadcrum Start -->
    <nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: '/';">
        <ol class="breadcrumb">
            <li class="breadcrumb-item "><a href="#" class="fw-bold text-dark text-decoration-none">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Peminjaman</li>
        </ol>
    </nav>
    <!-- Breadcrumb End -->

    <div class="p-4 mb-4 border rounded bg-light">

        <div class="row">
            <div class="col-lg-12">
                <div class="p-4 rounded bg-light">
                    <h2 class="mb-5 ">Peminjaman</h2>
                    <div class="mb-2 row">
                        <div class="col-sm">
                            <a href="/peminjaman/new" class="text-white text-decoration-none">
                                <button class="px-4 py-2 btn btn-primary fw-bold "><i class="fas fa-plus "></i>
                                    <div class="d-none d-sm-inline"> New
                                </button>
                            </a>
                            <button class="px-4 py-2 btn btn-success fw-bold "><i class="fas fa-file-excel"></i>
                                <div class="d-none d-sm-inline"> Export to Excel</div>
                            </button>
                            <button class="px-4 py-2 btn btn-danger fw-bold "><i class="fas fa-file-pdf"></i>
                                <div class="d-none d-sm-inline"> Export to PDF</div>
                            </button>
                            <a href="" class="text-white text-decoration-none">
                                <button class="px-4 py-2 btn btn-secondary fw-bold "><i class="fas fa-history"></i>
                                    <div class="d-none d-sm-inline">Log Audit
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="mt-4 row ">
            <div class="col-lg-12 ">
                <div class="p-4 border rounded bg-light">

                    <!-- Tables Start-->
                    <table id="datatable" class="table table-bordered " style="width:100%">
                        <thead>
                            <tr class="fw-bold">
                                <th>Buku</th>
                                <th>Peminjam</th>
                                <th>Tanggal Dipinjam</th>
                                <th>Tanggal Tenggat</th>
                                <th>Tangal Pengembalian</th>
                                <th>Status</th>
                                <th class="sorting_none"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Refactoring - Martin Fowler</td>
                                <td>Nama - Kelas</td>
                                <td>2021-11-26</td>
                                <td>2021-11-26</td>
                                <td>2021-11-26</td>
                                <td>
                                    <p class="text-success fw-bold">Dipinjam</p>
                                </td>
                                <td>
                                    <a href="/peminjaman/detail"
                                        class="py-1 text-center text-decoration-none btn btn-outline-primary"><i
                                            class="fa fa-info-circle"></i> Detail </a>
                                </td>
                            </tr>
                            <tr>
                                <td>No Longer Human - Osamu Dazai</td>
                                <td>Nama - Kelas</td>
                                <td>2021-11-26</td>
                                <td>2021-11-26</td>
                                <td>2021-11-26</td>
                                <td>
                                    <p class="text-success fw-bold">Dipinjam</p>
                                </td>
                                <td>
                                    <a href="/peminjaman/detail"
                                        class="py-1 text-center text-decoration-none btn btn-outline-primary"><i
                                            class="fa fa-info-circle"></i> Detail </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Filosofi Teras - Henry Minampiring</td>
                                <td>Nama - Kelas</td>
                                <td>2021-11-26</td>
                                <td>2021-11-26</td>
                                <td>2021-11-26</td>
                                <td>
                                    <p class="fw-bold text-secondary">Dikembalikan</p>
                                </td>
                                <td>
                                    <a href="/peminjaman/detail"
                                        class="py-1 text-center text-decoration-none btn btn-outline-primary"><i
                                            class="fa fa-info-circle"></i> Detail </a>
                                </td>
                            </tr>

                        <tfoot>
                            <tr class="fw-bold">
                                <th>Buku</th>
                                <th>Peminjam</th>
                                <th>Tanggal Dipinjam</th>
                                <th>Tanggal Tenggat</th>
                                <th>Tangal Pengembalian</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                        </tfoot>
                    </table>
                    <!-- Tables End -->

                </div>
            </div>
        </div>

    @endsection
