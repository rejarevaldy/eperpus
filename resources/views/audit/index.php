@extends('layouts.main')

@section('content')

    <div class="p-4 mb-4 border rounded bg-light ">

        <div class="row">
            <div class="col-lg-12">
                <div class="p-4 rounded bg-light">
                    <h2 class="mb-5 ">Audit</h2>
                    <div class="mb-2 row">
                        <div class="col-sm">
                            <button class="px-4 py-2 btn btn-outline-success fw-bold "><i class="fas fa-file-excel"></i>
                                <div class="d-none d-sm-inline"> Export to Excel</div>
                            </button>
                            <button class="px-4 py-2 btn btn-outline-danger fw-bold "><i class="fas fa-file-pdf"></i>
                                <div class="d-none d-sm-inline"> Export to PDF</div>
                            </button>
                        </div>
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
                            <th>Audit</th>
                            <th>Peminjam</th>
                            <th>Tanggal Dipinjam</th>
                            <th>Tanggal Tenggat</th>
                            <th>Tangal Pengembalian</th>
                            <th>Status</th>
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
                        </tr>

                    <tfoot>
                        <tr class="fw-bold">
                            <th>Audit</th>
                            <th>Peminjam</th>
                            <th>Tanggal Dipinjam</th>
                            <th>Tanggal Tenggat</th>
                            <th>Tangal Pengembalian</th>
                            <th>Status</th>
                        </tr>
                    </tfoot>
                </table>
                <!-- Tables End -->

            </div>
        </div>
    </div>
    </div>

@endsection
