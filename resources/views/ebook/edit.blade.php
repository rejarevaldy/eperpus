@extends('layouts.main')

@section('content')

    <!-- Panel Start -->
    @if (session('status'))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            <strong>Success!</strong> {{ session('status') }}
        </div>
    @endif

    <div class="p-4 mb-4 border rounded shadow-sm bg-light">
        <div class="row">
            <div class="col-lg-12">
                <div class="p-2 rounded bg-light">
                    <h2>Edit Buku | {{ $ebook->judul }} - {{ $ebook->penulis }}</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- Panel End -->

    <!-- Form Start -->
    <div class="p-4 mb-4 border rounded shadow-sm bg-light">
        <div class="row">
            <form action="{{ route('ebook.update', $ebook->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-lg-10">
                        <div class="mb-3 form-input">
                            <label for="" class="mb-1 fw-bold"> Judul</label>
                            <div class="input-group">
                                <input value="{{ $ebook->judul }}" placeholder="Judul" class="form-control" name="judul">
                            </div>
                        </div>
                        <div class="mb-3 form-input">
                            <label for="" class="mb-1 fw-bold"> ISBN</label>
                            <div class="input-group">
                                <input value="{{ $ebook->isbn }}" placeholder="ISBN" class="form-control" name="isbn">
                            </div>
                        </div>
                        <div class="mb-3 form-input">
                            <label for="" class="mb-1 fw-bold"> Penulis</label>
                            <div class="input-group">
                                <input value="{{ $ebook->penulis }}" placeholder="Penulis" class="form-control"
                                    name="penulis">
                            </div>
                        </div>
                        <div class="mb-3 input-group">
                            <label for="" class="mb-1 fw-bold"> File
                            </label>
                            <div class="input-group">
                                <input value="{{ $ebook->gambar_buku }}" type="file" class="form-control" name="file"
                                    onchange="preview(this)">
                            </div>
                        </div>

                        <button type="submit" class="px-4 py-2 mt-3 btn btn-outline-primary fw-bold"><i
                                class="fas fa-save"></i>
                            <div class="d-none d-sm-inline"> Save</div>
                        </button>
                        <button type="button" class="px-4 py-2 mt-3 btn btn-outline-secondary fw-bold"><i
                                class="fas fa-caret-square-left"></i>
                            <a class="text-secondary text-secondary-hover d-none d-sm-inline text-decoration-none"
                                href="{{ route('ebook') }}">
                                Back</a>
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <!-- Form End -->
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
