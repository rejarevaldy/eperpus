@extends('layouts.main')

@section('content')

    <!-- Panel Start -->
    <div class="p-4 mb-4 border rounded shadow-sm bg-light">
        <div class="row">
            <div class="col-lg-12">
                <div class="p-2 rounded bg-light">
                    <h2 class="mb-3 ">Detail Peminjaman</h2>
                    <div class="mb-2 row">
                        <div class="col-sm">
                            @if (auth()->user()->role === 'admin')

                                <a href="{{ route('loan.edit', $loan->id) }}" class="text-white text-decoration-none">
                                    <button class="px-4 py-2 btn btn-outline-primary fw-bold "><i class="fas fa-edit "></i>
                                        <div class="d-none d-sm-inline"> Edit</div>
                                    </button>
                                </a>
                                <!-- Button trigger modal -->
                                <button type="button" class="px-4 py-2 btn btn-outline-danger fw-bold"
                                    data-bs-toggle="modal" data-bs-target="#deleteModal_{{ $loan->id }}">
                                    <i class="fas fa-trash"></i>
                                    <div class="d-none d-sm-inline"> Delete</div>
                                </button>
                            @endif
                            <button type="button" class="px-4 py-2 btn btn-outline-secondary fw-bold"><i
                                    class="fas fa-caret-square-left"></i>
                                <a class="text-secondary text-secondary-hover d-none d-sm-inline text-decoration-none"
                                    href="{{ url()->previous() }}"> Back</a>
                            </button>
                            <div class="modal fade" id="deleteModal_{{ $loan->id }}" tabindex="-1" aria-labelledby="deleteModalLabel"
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Panel End -->


    <!-- Form Start -->
    <div class="p-4 border rounded shadow-sm bg-light">
        <div class="row">
            <form action="">
                <div class="row">
                    <div class="col-lg-6">

                        <div class="mb-3 form-input">
                            <label for="" class="mb-1 fw-bold"> ID</label>
                            <div class="input-group">
                                <input value="{{ $loan->id }}" placeholder="ID" class="form-control" disabled>

                                <span class="bg-light input-group-text" id="addon-wrapping"> <i
                                        class='fa fa-key text-secondary'></i>
                                </span>
                            </div>
                        </div>

                        <div class="mb-3 input-group">
                            <label for="" class="mb-1 fw-bold"> Buku
                            </label>
                            <div class="input-group">
                                <select class="form-select" id="inputGroupSelect01" name="book" disabled>
                                    <option value="{{ $loan->book->id }}">{{ $loan->book->judul }} |
                                        {{ $loan->book->penulis }}</option>
                                </select>
                                <span class="bg-light input-group-text" id="basic-addon1"><i
                                        class="fas fa-book text-secondary"></i></span>
                            </div>
                        </div>

                        <div class="mb-3 input-group">
                            <label for="" class="mb-1 fw-bold"> Peminjam
                            </label>
                            <div class="input-group">
                                <select class="form-select" id="inputGroupSelect01" name="user" disabled>
                                    <option value="{{ $loan->user->id }}">{{ $loan->user->judul }} |
                                        {{ $loan->user->penulis }}</option>
                                </select>
                                <span class="bg-light input-group-text" id="basic-addon1"><i
                                        class="fas fa-user-graduate text-secondary"></i></span>
                            </div>
                        </div>


                        <div class="mb-3 form-input">
                            <label for="" class="mb-1 fw-bold"> Status</label>
                            <div class="input-group">
                                <input value="{{ $loan->status }}" placeholder="Status" class="form-control" disabled>

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
                                <input value="{{ $loan->created_at }}" id="startDate" class="form-control" disabled />
                                <span class="bg-light input-group-text" id="basic-addon1"><i
                                        class="fas fa-calendar-plus text-secondary"></i></span>
                            </div>
                        </div>

                        <div class="mb-3 form-input">
                            <label for="endDate" class="mb-1 fw-bold"> Tanggal Tenggat</label>
                            <div class="input-group ">
                                <input value="{{ $loan->tanggal_tenggat }}" id="endDate" class="form-control"
                                    disabled />
                                <span class="bg-light input-group-text" id="basic-addon1"><i
                                        class="fas fa-calendar-minus text-secondary"></i></span>
                            </div>
                        </div>

                        <div class="mb-3 form-input">
                            <label for="returnDate" class="mb-1 fw-bold"> Tanggal Pengembalian</label>
                            <div class="input-group ">
                                <input value="{{ $loan->tanggal_pengembalian }}" id="returnDate" class="form-control"
                                    disabled />
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

    <!-- Content End -->
@endsection
