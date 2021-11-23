@extends('layouts.main')

@section('content')

    <!-- Panel Start -->
    @if (session('status'))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            <strong>Success!</strong> {{ session('status') }}
        </div>
    @endif
    
    <div class="p-4 mb-4 border rounded bg-light">
        <div class="row">
            <div class="col-lg-12 ">
                <div class="p-4 mb-4 bg-light">
                    <h2 class="mb-2">Tambahkan Buku</h2>
                </div>
                <!-- Panel End -->
                <!-- Form Start -->
                <div class="p-4 border rounded bg-light">
                    <div class="row">
                        <form action="{{ route('book.update', $book->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-lg-2">
                                    <div class="mb-3 form-input">
                                        <label for="" class="mb-1 fw-bold"> Image
                                        </label>
                                        <div class="input-group">
                                            <img src="{{ asset('images/') }}/{{ $book->gambar_buku }}" id="previewImg"
                                                class="img-thumbnail" alt="...">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-10">
                                    <div class="mb-3 form-input">
                                        <label for="" class="mb-1 fw-bold"> Judul</label>
                                        <div class="input-group">
                                            <input value="{{ $book->judul }}" placeholder="Judul" class="form-control"
                                                name="judul">
                                        </div>
                                    </div>
                                    <div class="mb-3 form-input">
                                        <label for="" class="mb-1 fw-bold"> ISBN</label>
                                        <div class="input-group">
                                            <input value="{{ $book->isbn }}" placeholder="ISBN" class="form-control"
                                                name="isbn">
                                        </div>
                                    </div>
                                    <div class="mb-3 form-input">
                                        <label for="" class="mb-1 fw-bold"> Penulis</label>
                                        <div class="input-group">
                                            <input value="{{ $book->penulis }}" placeholder="Penulis" class="form-control"
                                                name="penulis">
                                        </div>
                                    </div>
                                    <div class="mb-3 form-input">
                                        <label for="" class="mb-1 fw-bold"> Stok</label>
                                        <div class="input-group">
                                            <input type='number' value="{{ $book->stok }}" placeholder="Stok"
                                                class="form-control" name="stok">
                                        </div>
                                    </div>
                                    <div class="mb-3 input-group">
                                        <label for="" class="mb-1 fw-bold"> Image
                                        </label>
                                        <div class="input-group">
                                            <input value="{{ asset('images/') }}/{{ $book->gambar_buku }}" type="file"
                                                class="form-control" name="file" onchange="preview(this)">
                                        </div>
                                    </div>

                                    <button type="submit" class="px-4 py-2 mt-3 btn btn-primary fw-bold"><i
                                            class="fas fa-plus"></i>
                                        <div class="d-none d-sm-inline"> Edit</div>
                                    </button>
                                    <button type="reset" class="px-4 py-2 mt-3 btn btn-danger fw-bold" value="reset"><i
                                            class="fas fa-undo"></i>
                                        <div class="d-none d-sm-inline"> Reset</div>
                                    </button>
                                    <button type="button" class="px-4 py-2 mt-3 btn btn-secondary fw-bold"><i
                                            class="fas fa-caret-square-left"></i>
                                        <a class="text-white d-none d-sm-inline text-decoration-none" href="/buku/">
                                            Back</a>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- Form End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Content End -->

    <script>
        function preview(input) {
            var file = $("input[type=file]").get(0).files[0];
            if (file) {
                var reader = new FileReader();
                reader.onload = function() {
                    $('#previewImg').attr('src', reader.result)
                }
                reader.readAsDataURL(file);
            }
        }
    </script>

@endsection
