@extends('layouts.main')

@section('content')
    <div class="p-4 mb-4 border rounded shadow-sm bg-light">
        <div class="row">
            <div class="col-lg-12">
                <div class="p-2 rounded bg-light">
                    <h2 class="mb-3 ">Materi</h2>
                    <div class="mb-2 row">
                        <div class="col-sm">
                            @if (auth()->user()->role === 'admin')
                                <button class="px-4 py-2 btn btn-outline-primary fw-bold" type="button"
                                    class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambah"><i
                                        class="fas fa-plus "></i>
                                    <div class="d-none d-sm-inline"> New
                                </button>
                            @endif
                            @if (auth()->user()->role === 'admin')
                                <a href="{{ route('audit') }}" class="text-white text-decoration-none">
                                    <button class="px-4 py-2 btn btn-outline-secondary fw-bold "><i
                                            class="fas fa-history"></i>
                                        <div class="d-none d-sm-inline">Log Audit
                                    </button>
                            @endif
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
                            <th style="width: 50%">Judul</th>
                            <th>Link</th>
                            <th class="sorting_none" style="width: 18%"></th>
                        </tr>
                    </thead>
                    <tbody class="bg-light">
                        @foreach ($courses as $course)
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td>{{ $course->judul }}</td>
                                <td><a href="{{ $course->link }}" target="_blank">{{ $course->link }}</a></td>
                                <td class="text-center">
                                    <a href="{{ route('course.detail', $course->id) }}" class="py-1 text-center text-decoration-none ms-2 me-2">
                                        View </a>
                                    @if (auth()->user()->role === 'admin')
                                        <button type="text" data-bs-toggle="modal"
                                            data-bs-target="#editModal_{{ $course->id }}"
                                            class="py-1 text-center border-0 bg-light text-primary text-decoration-none ms-2 me-2">
                                            Edit </button>
                                        <button type="text" data-bs-toggle="modal"
                                            data-bs-target="#deleteModal_{{ $course->id }}"
                                            class="py-1 text-center border-0 bg-light text-danger text-decoration-none ms-2 me-2">
                                            Delete </button>
                                    @endif
                                </td>
                            </tr>
                            {{-- Modal Edit --}}
                            <!-- Modal -->
                            <div class="modal fade" id="editModal_{{ $course->id }}" tabindex="-1" aria-labelledby="editModal"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="editModal">Modal title</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <form action="{{ route('course.update',  $course->id) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <div class="modal-body">
                                                <div class="mb-3">
                                                    <label class="form-label">Judul</label>
                                                    <input type="text" class="form-control" name="judul"  placeholder="Judul" value="{{ $course->judul }}">
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Link Youtube</label>
                                                    <input type="text" class="form-control" name="link"  placeholder="Link" value="{{ $course->link }}">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Edit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            {{-- Modal Delete --}}
                            {{-- Modal Start --}}
                            <div class="modal fade" id="deleteModal_{{ $course->id }}" tabindex="-1"
                                aria-labelledby="deleteModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="deleteModalLabel">Konfirmasi</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <i class="fas fa-exclamation-circle text-warning"></i> Apakah Anda Yakin Akan
                                            Menghapus {{ $course->judul }}
                                        </div>
                                        <div class="modal-footer">
                                            <form action="{{ route('course.delete', $course->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
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

    {{-- Modal Tambah --}}
    <!-- Modal -->
    <div class="modal fade" id="tambah" tabindex="-1" aria-labelledby="tambahLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="tambahLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('course.store') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Judul</label>
                            <input type="text" class="form-control" name="judul" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Link Youtube</label>
                            <input type="text" class="form-control" name="link" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
