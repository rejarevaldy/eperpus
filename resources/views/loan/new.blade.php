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
                    <h2 class="mb-2">Tambahkan Peminjaman</h2>
                </div>
                <!-- Panel End -->
                <!-- Form Start -->
                <div class="p-4 border rounded bg-light">
                    <div class="row">
                        <form action="{{ route('loan.store') }}" method="POST" class="col-lg-6">
                            @csrf
                            <div class="mb-3 input-group">
                                <label for="" class="mb-1 fw-bold"><span class="text-danger">*</span> Peminjam
                                </label>
                                <div class="input-group">
                                    <select class="form-select" id="inputGroupSelect01" name="user" required>
                                        @foreach ($users as $user)
                                            <option value="{{ $user->id }}">{{ $user->nama }} | {{ $user->kelas }}
                                                {{ $user->jurusan }}</option>
                                        @endforeach
                                    </select>
                                    <span class="bg-light input-group-text" id="basic-addon1"><i
                                            class="fas fa-user text-secondary"></i></span>
                                </div>
                            </div>
                            <div class="mb-3 input-group">
                                <label for="" class="mb-1 fw-bold"><span class="text-danger">*</span> Buku
                                </label>
                                <div class="input-group">
                                    <select class="form-select" id="inputGroupSelect01" name="book" required>
                                        @foreach ($books as $book)
                                            <option value="{{ $book->id }}">{{ $book->judul }} |
                                                {{ $book->penulis }}</option>
                                        @endforeach
                                    </select>
                                    <span class="bg-light input-group-text" id="basic-addon1"><i
                                            class="fas fa-book text-secondary"></i></span>
                                </div>
                            </div>
                            <div class="mb-3 form-input">
                                <label for="tanggal_tenggat" class="mb-1 fw-bold"><span class="text-danger">*</span>
                                    Tanggal
                                    Tenggat</label>
                                <div class="input-group ">
                                    <input name="tanggal_tenggat" class="form-control" type="date" required/>
                                    <span class="bg-light input-group-text" id="basic-addon1"><i
                                            class="fas fa-calendar-minus text-secondary"></i></span>
                                </div>
                            </div>
                            <button name="submit" type="submit" class="px-4 py-2 mt-3 btn btn-outline-primary fw-bold"><i
                                    class="fas fa-plus"></i>
                                <div class="d-none d-sm-inline"> Tambahkan</div>
                            </button>
                            <button type="reset" class="px-4 py-2 mt-3 btn btn-outline-danger fw-bold" value="reset"><i
                                    class="fas fa-undo"></i>
                                <div class="d-none d-sm-inline"> Reset</div>
                            </button>
                            <button type="button" class="px-4 py-2 mt-3 btn btn-outline-secondary fw-bold"><i
                                    class="fas fa-caret-square-left"></i>
                                <a class="text-secondary text-secondary-hover d-none d-sm-inline text-decoration-none"
                                    href="{{ route('loan') }}">
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
