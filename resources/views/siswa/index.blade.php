@extends('layouts.main')

@section('content')

    <div class="p-4 mb-4 border rounded bg-light ">

        <div class="row">
            <div class="col-lg-12">
                <div class="p-4 rounded bg-light">
                    <h2 class="mb-5 ">Siswa</h2>
                    <div class="mb-2 row">
                        <div class="col-sm">
                            <a href="/siswa/new" class="text-white text-decoration-none">
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
    </div>


    <div class="mt-4 row ">
        <div class="col-lg-12 ">
            <div class="p-4 border rounded bg-light">

                <!-- Tables Start-->
                <table id="datatable" class="table table-bordered " style="width:100%">
                    <thead>
                        <tr class="fw-bold">
                            <th>Nama</th>
                            <th>Nis</th>
                            <th>Kelas</th>
                            <th>Jabatan</th>

                            <th class="sorting_none"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            @foreach ($siswas as $siswa)
                                <td>{{ $siswa->nama }}</td>
                                <td>{{ $siswa->nis }}</td>
                                <td>{{ $siswa->kelas }}</td>
                                <td>{{ $siswa->role }}</td>
                                <td>
                                    <a href="/siswa/detail"
                                        class="py-1 text-center text-decoration-none btn btn-outline-primary"><i
                                            class="fa fa-info-circle"></i> Detail </a>
                                </td>
                            @endforeach

                        </tr>
                    <tfoot>
                        <tr class="fw-bold">
                            <th>Nama</th>
                            <th>Nis</th>
                            <th>Kelas</th>
                            <th>Jabatan</th>
                            <th class="sorting_none"></th>
                        </tr>
                    </tfoot>
                </table>
                <!-- Tables End -->

            </div>
        </div>
    </div>
    </div>

@endsection
