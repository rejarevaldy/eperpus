@extends('layouts.main')

@section('content')

    <!-- Panel Start -->
    <div class="p-4 mb-4 border rounded shadow-sm bg-light">
        <div class="row">
            <div class="col-lg-12">
                <div class="p-2 rounded bg-light">
                    <h2 class="mb-3 ">Detail E-Buku  | {{ $ebook->judul }} - {{ $ebook->penulis }}</h2>
                    <div class="mb-2 row">
                        <div class="col-sm">
                            @if (auth()->user()->role === 'admin')
                                <a href="{{ route('ebook.edit', $ebook->id) }}" class="text-white text-decoration-none">
                                    <button class="px-4 py-2 btn btn-outline-primary fw-bold "><i class="fas fa-edit "></i>
                                        <div class="d-none d-sm-inline"> Edit</div>
                                    </button>
                                </a>
                                <!-- Button trigger modal -->
                                <button type="button" class="px-4 py-2 btn btn-outline-danger fw-bold"
                                    data-bs-toggle="modal" data-bs-target="#deleteModal_{{ $ebook->id }}">
                                    <i class="fas fa-trash"></i>
                                    <div class="d-none d-sm-inline"> Delete</div>
                                </button>
                            @endif
                            <a href="{{ asset('pdf') }}/{{ $ebook->file_pdf }}" class="text-white text-decoration-none" target="_blank">
                                <button class="px-4 py-2 btn btn-outline-primary fw-bold "><i class="fas fa-book-reader "></i>
                                    <div class="d-none d-sm-inline"> Read</div>
                                </button>
                            </a>
                            <button type="button" class="px-4 py-2 btn btn-outline-secondary fw-bold"><i
                                    class="fas fa-caret-square-left"></i>
                                <a class="text-secondary text-secondary-hover d-none d-sm-inline text-decoration-none"
                                    href="{{ url()->previous() }}"> Back</a>
                            </button>
                            <div class="modal fade" id="deleteModal_{{ $ebook->id }}" tabindex="-1" aria-labelledby="deleteModalLabel"
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
                                            Menghapus {{ $ebook->judul }}
                                        </div>
                                        <div class="modal-footer">
                                            <form action="{{ route('ebook.delete', $ebook->id) }}" method="POST">
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
            <form action="">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="mb-3 form-input">
                            <label for="" class="mb-1 fw-bold"> Image</label>
                            <div class="input-group">
                                <img src=" {{ asset('images/') }}/{{ $ebook->gambar_pdf }}" class="img-thumbnail"
                                    alt="{{ $ebook->gambar_pdf }}">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="mb-3 form-input">
                            <label for="" class="mb-1 fw-bold"> ID</label>
                            <div class="input-group">
                                <input placeholder="{{ $ebook->id }}" class="form-control" disabled>
                            </div>
                        </div>
                        <div class="mb-3 form-input">
                            <label for="" class="mb-1 fw-bold"> ISBN</label>
                            <div class="input-group">
                                <input placeholder="{{ $ebook->isbn }}" class="form-control" disabled>
                            </div>
                        </div>
                        <div class="mb-3 form-input">
                            <label for="" class="mb-1 fw-bold"> Judul</label>
                            <div class="input-group">
                                <input placeholder="{{ $ebook->judul }}" class="form-control" disabled>
                            </div>
                        </div>
                        <div class="mb-3 form-input">
                            <label for="" class="mb-1 fw-bold"> Penulis</label>
                            <div class="input-group">
                                <input placeholder="{{ $ebook->penulis }}" class="form-control" disabled>
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
