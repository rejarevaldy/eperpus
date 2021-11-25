@extends('layouts.main')

@section('content')


    <div class="p-4 mb-4 border rounded shadow-sm bg-light ">
        <div class="row">
            <div class="col-lg-12">
                <div class="p-2 rounded bg-light">
                    <h2 class="mb-3 ">Peminjaman</h2>
                    <div class="mb-2 row">
                        <div class="col-sm">
                            <a href="/peminjaman/tambahkan" class="text-white text-decoration-none">
                                <button class="px-4 py-2 btn btn-outline-primary fw-bold "><i class="fas fa-plus "></i>
                                    <div class="d-none d-sm-inline"> New
                                </button>
                            </a>
                            <a href="/peminjaman/export/excel" class=" text-decoration-none">
                                <button class="px-4 py-2 btn btn-outline-success fw-bold "><i class="fas fa-file-excel"></i>
                                    <div class="d-none d-sm-inline">Export to Excel
                                </button>
                            </a>

                            <a href="/audit/" class="text-white text-decoration-none">
                                <button class="px-4 py-2 btn btn-outline-secondary fw-bold "><i class="fas fa-history"></i>
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
            <div class="p-4 border rounded shadow-sm bg-light">

                <!-- Tables Start-->
                <table id="datatable" class="table table-bordered " style="width:100%">
                    <thead>
                        <tr class="text-center fw-bold">
                            <th style="width: 1%">No</th>
                            <th>Buku</th>
                            <th>Peminjam</th>
                            <th style="width: 7%">Dipinjam</th>
                            <th style="width: 7%">Tenggat</th>
                            <th style="width: 7%">Pengembalian</th>
                            <th style="width: 10%">Status</th>
                            <th class="sorting_none" style="width: 18%"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($loans as $loan)
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td>{{ $loan->book->judul }} | {{ $loan->book->penulis }}</td>
                                <td>{{ $loan->user->nama }} | {{ $loan->user->kelas }} {{ $loan->user->jurusan }}</td>
                                <td class="text-center">{{ $loan->created_at }}</td>
                                <td class="text-center">{{ $loan->tanggal_tenggat }}</td>
                                <td class="text-center">{{ $loan->tanggal_dikembalikan }}</td>
                                <td
                                    class="{{ $loan->status === 'Dipinjam' ? 'text-secondary' : '' }} {{ $loan->status === 'Dikembalikan' ? 'text-success' : '' }}{{ $loan->status === 'Terlambat' ? 'text-danger' : '' }}">
                                    {{ $loan->status }}</td>
                                <td class="text-center">
                                    <a href="/peminjaman/detail/{{ $loan->id }}"
                                        class="py-1 text-center text-decoration-none ms-2 me-2">
                                        View </a>
                                    <a href="/peminjaman/edit/{{ $loan->id }}"
                                        class="py-1 text-center text-decoration-none ms-2 me-2">
                                        Edit </a>
                                    <button type="text" data-bs-toggle="modal" data-bs-target="#deleteModal"
                                        class="py-1 text-center bg-white border-0 text-danger text-decoration-none ms-2 me-2">
                                        Delete </button>
                                </td>
                            </tr>
                            {{-- Modal Start --}}
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
                                            <i class="fas fa-exclamation-circle text-warning"></i> Apakah Anda Yakin
                                            Akan
                                            Menghapus {{ $loan->id }}
                                        </div>
                                        <div class="modal-footer">
                                            <form action="{{ route('loan.delete', $loan->id) }}" method="POST">
                                                @csrf
                                                @method('delete')
                                                <button type="button" class="px-3 py-1 btn btn-outline-outline-secondary"
                                                    data-bs-dismiss="modal">No</button>
                                                <button type="submit" class="px-3 py-1 btn btn-outline-danger">Yes</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- Modal End --}}
                        @endforeach
                </table>
                <!-- Tables End -->

            </div>
        </div>
    </div>

@endsection
