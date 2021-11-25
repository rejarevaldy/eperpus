@extends('layouts.main')

@section('content')

    <!-- Panel Start -->
    @if (session('status'))
        <div class="alert alert-success alert-dismissible">
            <strong>Success!</strong> {{ session('status') }}
        </div>
    @endif
    <div class="p-4 mb-4 border rounded bg-light">
        <div class="row">
            <div class="col-lg-12 ">
                <div class="p-4 mb-4 bg-light">
                    <h2 class="mb-2">Edit Peminjaman</h2>
                </div>
                <!-- Panel End -->

                <!-- Form Start -->
                <div class="p-4 border rounded bg-light">
                    <div class="row">
                        <form action="{{ route('loan.update', $loan->id) }}" method="POST" class="col-lg-6">
                            @method('PUT')
                            @csrf
                            <div class="mb-3 input-group">
                                <label for="" class="mb-1 fw-bold"> Peminjam
                                </label>
                                <div class="input-group">
                                    <select class="form-select" id="inputGroupSelect01" name="user">
                                        <option value="{{ $loan->user->id }}">{{ $loan->user->nama }} |
                                            {{ $loan->user->kelas }}
                                            {{ $loan->user->jurusan }}</option>
                                    </select>
                                    <span class="bg-light input-group-text" id="basic-addon1"><i
                                            class="fas fa-user text-secondary"></i></span>
                                </div>
                            </div>
                            <div class="mb-3 input-group">
                                <label for="" class="mb-1 fw-bold"> Buku
                                </label>
                                <div class="input-group">
                                    <select class="form-select" id="inputGroupSelect01" name="book">
                                        <option value="{{ $loan->book->id }}">{{ $loan->book->judul }} |
                                            {{ $loan->book->penulis }}</option>
                                    </select>
                                    <span class="bg-light input-group-text" id="basic-addon1"><i
                                            class="fas fa-book text-secondary"></i></span>
                                </div>
                            </div>
                            <div class="mb-3 input-group">
                                <label for="" class="mb-1 fw-bold"> Buku
                                </label>
                                <div class="input-group">
                                    <select class="form-select" id="inputGroupSelect01" name="status">
                                        <option value="{{ $loan->status }}">{{ $loan->status }}</option>
                                        @foreach ($status as $s)
                                            <option value="{{ $s }}"> {{ $s }}</option>
                                        @endforeach
                                    </select>
                                    <span class="bg-light input-group-text" id="basic-addon1"> <i
                                            class='fa fa-info-circle text-secondary'></i> </span>
                                </div>
                            </div>
                            <div class="mb-3 form-input">
                                <label for="tanggal_pengembalian" class="mb-1 fw-bold">
                                    Tanggal
                                    Pengembalian</label>
                                <div class="input-group ">
                                    <input value="{{ $loan->tanggal_dikembalikan }}" name="tanggal_pengembalian"
                                        class="form-control" type="datetime-local" />
                                    <span class="bg-light input-group-text" id="basic-addon1"><i
                                            class="fas fa-calendar-plus text-secondary"></i></span>
                                </div>
                            </div>
                            <button name="submit" type="submit" class="px-4 py-2 mt-3 btn btn-outline-primary fw-bold"><i
                                    class="fas fa-save"></i>
                                <div class="d-none d-sm-inline"> Save</div>
                            </button>
                            <button type="button" class="px-4 py-2 mt-3 btn btn-outline-secondary fw-bold"><i
                                    class="fas fa-caret-square-left"></i>
                                <a class="text-secondary text-secondary-hover d-none d-sm-inline text-decoration-none"
                                    href="/peminjaman/">
                                    Back</a>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content End -->
@endsection
