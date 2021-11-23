@extends('layouts.main')

@section('content')

    <div class="p-4 mb-4 border rounded shadow-sm bg-light">
        <div class="row">
            <div class="col-lg-12">
                <div class="p-2 rounded bg-light">
                    <h2 class="mb-3 ">Siswa</h2>
                    <div class="mb-2 row">
                        <div class="col-sm">
                            <a href="/siswa/tambahkan" class="text-white text-decoration-none">
                                <button class="px-4 py-2 btn btn-primary fw-bold "><i class="fas fa-plus"></i>
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


    <div class="mt-4 mb-4 row">
        <div class="col-lg-12 ">
            <div class="p-4 border rounded shadow-sm bg-light ">

                <!-- Tables Start-->
                <table id="datatable" class="table table-bordered " style="width:100%">
                    <thead>
                        <tr class="text-center fw-bold">
                            <th>Nama</th>
                            <th>Nis</th>
                            <th>Kelas</th>

                            <th class="sorting_none"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($siswas as $siswa)
                            <tr>
                                <td>{{ $siswa->nama }}</td>
                                <td>{{ $siswa->nis }}</td>
                                <td>{{ $siswa->kelas }} - {{ $siswa->jurusan }}</td>
                                <td>
                                    <a href="/siswa/detail/{{ $siswa->id }}"
                                        class="py-1 text-center text-decoration-none"><i class="fa fa-info-circle"></i>
                                        Detail </a>
                                </td>
                            </tr>
                        @endforeach

                    <tfoot>
                        <tr class="text-center fw-bold">
                            <th>Nama</th>
                            <th>Nis</th>
                            <th>Kelas</th>
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
