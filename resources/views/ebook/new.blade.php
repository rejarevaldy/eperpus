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
                <div class="p-2 mb-4 bg-light">
                    <h2 class="mb-2">Tambahkan E-Buku</h2>
                </div>
                <!-- Panel End -->
                <!-- Form Start -->
                <div class="p-4 border rounded bg-light">
                    <div class="row">
                        <form action="{{ route('ebook.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-2">
                                    <div class="mb-3 form-input">
                                        <label for="" class="mb-1 fw-bold"> Image
                                        </label>
                                        <div class="input-group">
                                            <img src="" id="previewImg" class="img-thumbnail" alt="...">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-10">
                                    <div class="mb-3 form-input">
                                        <label for="" class="mb-1 fw-bold"><span class="text-danger">*</span> Judul</label>
                                        <div class="input-group">
                                            <input value="" placeholder="Judul" class="form-control" name="judul" required>
                                        </div>
                                    </div>
                                    <div class="mb-3 form-input">
                                        <label for="" class="mb-1 fw-bold"><span class="text-danger">*</span> ISBN</label>
                                        <div class="input-group">
                                            <input value="" placeholder="ISBN" class="form-control" name="isbn" required>
                                        </div>
                                    </div>
                                    <div class="mb-3 form-input">
                                        <label for="" class="mb-1 fw-bold"><span class="text-danger">*</span> Penulis</label>
                                        <div class="input-group">
                                            <input value="" placeholder="Penulis" class="form-control" name="penulis" required>
                                        </div>
                                    </div>

                                    <div class="mb-3 input-group">
                                        <label for="" class="mb-1 fw-bold"><span class="text-danger">*</span> File PDF
                                        </label>
                                        <div class="input-group">
                                            <input type="file" class="form-control" name="filepdf"  accept = "application/pdf" required>
                                        </div>
                                    </div>

                                    <div class="mb-3 input-group">
                                        <label for="" class="mb-1 fw-bold"> Image
                                        </label>
                                        <div class="input-group">
                                            <input type="file" class="form-control" name="file" onchange="preview(this)" accept="image/png, image/jpeg, image/jpg">
                                        </div>
                                    </div>

                                    <button type="submit" class="px-4 py-2 mt-3 btn btn-outline-primary fw-bold"><i
                                            class="fas fa-plus"></i>
                                        <div class="d-none d-sm-inline"> Tambahkan</div>
                                    </button>
                                    <button type="reset" class="px-4 py-2 mt-3 btn btn-outline-danger fw-bold" value="reset"><i
                                            class="fas fa-undo"></i>
                                        <div class="d-none d-sm-inline"> Reset</div>
                                    </button>
                                    <button type="button" class="px-4 py-2 mt-3 btn btn-outline-secondary fw-bold"><i
                                            class="fas fa-caret-square-left"></i>
                                        <a class="text-secondary text-secondary-hover d-none d-sm-inline text-decoration-none" href="{{ route('ebook') }}">
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
