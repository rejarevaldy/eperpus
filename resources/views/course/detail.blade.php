@extends('layouts.main')

@section('content')

    <!-- Panel Start -->
    <div class="p-4 mb-4 border rounded shadow-sm bg-light">
        <div class="row">
            <div class="col-lg-12">
                <div class="p-2 rounded bg-light">
                    <h2 class="mb-3 ">Detail Materi | {{ $course->judul }}</h2>
                    <div class="mb-2 row">
                        <div class="col-sm">
                            @if (auth()->user()->role === 'admin')
                                <button type="text" data-bs-toggle="modal" data-bs-target="#editModal_{{ $course->id }}"
                                    class="px-4 py-2 btn btn-outline-primary fw-bold "><i class="fas fa-edit "></i>
                                    Edit </button>
                                <button type="text" data-bs-toggle="modal" data-bs-target="#deleteModal_{{ $course->id }}"
                                    class="px-4 py-2 btn btn-outline-danger fw-bold "> <i class="fas fa-trash"></i>

                                    Delete </button>
                            @endif
                            <button type="button" class="px-4 py-2 btn btn-outline-secondary fw-bold"><i
                                    class="fas fa-caret-square-left"></i>
                                <a class="text-secondary text-secondary-hover d-none d-sm-inline text-decoration-none"
                                    href="{{ url()->previous() }}"> Back</a>
                            </button>
                            {{-- Modal Edit --}}
                            <!-- Modal -->
                            <div class="modal fade" id="editModal_{{ $course->id }}" tabindex="-1"
                                aria-labelledby="editModal" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="editModal">Modal title</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <form action="{{ route('course.update', $course->id) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <div class="modal-body">
                                                <div class="mb-3">
                                                    <label class="form-label">Judul</label>
                                                    <input type="text" class="form-control" name="judul"
                                                        placeholder="Judul" value="{{ $course->judul }}">
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Link Youtube</label>
                                                    <input type="text" class="form-control" name="link" placeholder="Link"
                                                        value="{{ $course->link }}">
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

                            {{-- Delete Modal --}}
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Panel End -->
    <!-- Form Start -->
    <div class="p-4 mb-4 border rounded shadow-sm bg-light">
        <div class="row">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="{{ $course->link }}" allowfullscreen height="600rem" width="1190rem"></iframe>
              </div>
        </div>
        <!-- Form End -->
    </div>
    </div>

@endsection
