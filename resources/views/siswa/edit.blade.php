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
                    <h2 class="mb-2">Edit Siswa</h2>
                </div>
                <form action="{{ route('siswa.update', $siswa->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-lg-2">
                            <div class="mb-3 form-input">
                                <label for="" class="mb-1 fw-bold"> Image
                                </label>
                                <div class="input-group">
                                    <img src="{{ asset('images') }}/{{ $siswa->gambar_user }}" id="previewImg"
                                        class="img-thumbnail" alt="...">
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-5">
                            <div class="mb-3 form-input">
                                <label for="" class="mb-1 fw-bold"> Nama</label>
                                <div class="input-group">
                                    <input value="{{ $siswa->nama }}" placeholder="Nama" class="form-control"
                                        name="nama">
                                </div>
                            </div>
                            <div class="mb-3 form-input">
                                <label for="" class="mb-1 fw-bold"> Username</label>
                                <div class="input-group">
                                    <input value="{{ $siswa->username }}" placeholder="Username" class="form-control"
                                        name="username">
                                </div>
                            </div>
                            <div class="mb-3 form-input">
                                <label for="" class="mb-1 fw-bold"> NIS</label>
                                <div class="input-group">
                                    <input value="{{ $siswa->nis }}" placeholder="NIS" class="form-control" name="nis">
                                </div>
                            </div>

                            <div class="mb-3 input-group">
                                <label for="" class="mb-1 fw-bold"> Image
                                </label>
                                <div class="input-group">
                                    <input type="file" class="form-control" name="file" onchange="preview(this)">
                                </div>
                            </div>
                            <button type="submit" class="px-4 py-2 mt-3 btn btn-primary fw-bold"><i
                                    class="fas fa-save"></i>
                                <div class="d-none d-sm-inline"> Save</div>
                            </button>
                            <button type="reset" class="px-4 py-2 mt-3 btn btn-danger fw-bold" value="reset"><i
                                    class="fas fa-undo"></i>
                                <div class="d-none d-sm-inline"> Reset</div>
                            </button>
                            <button type="button" class="px-4 py-2 mt-3 btn btn-secondary fw-bold"><i
                                    class="fas fa-caret-square-left"></i>
                                <a class="text-white d-none d-sm-inline text-decoration-none" href="/siswa/">
                                    Back</a>
                            </button>
                        </div>

                        <div class="col-lg-5">

                            <div class="mb-3 input-group">
                                <label for="" class="mb-1 fw-bold"> Kelas
                                </label>
                                <div class="input-group">
                                    <select class="form-select" id="inputGroupSelect01" name="kelas">
                                        <option value="{{ $siswa->kelas }}">{{ $siswa->kelas }}</option>
                                    </select>
                                </div>
                            </div>

                            <div class="mb-3 input-group">
                                <label for="" class="mb-1 fw-bold"> Jurusan
                                </label>
                                <div class="input-group">
                                    <select class="form-select" id="inputGroupSelect01" name="jurusan">
                                        <option value="{{ $siswa->jurusan }}">{{ $siswa->jurusan }}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 input-group">
                                <label for="" class="mb-1 fw-bold"> Agama
                                </label>
                                <div class="input-group">
                                    <select class="form-select" id="inputGroupSelect01" name="agama">
                                        <option value="{{ $siswa->agama }}">{{ $siswa->agama }}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 input-group">
                                <label for="" class="mb-1 fw-bold"> Gender
                                </label>
                                <div class="input-group">
                                    <select class="form-select" id="inputGroupSelect01" name="gender">
                                        <option value="{{ $siswa->gender }}">{{ $siswa->gender }}</option>
                                    </select>
                                </div>
                            </div>

                        </div>
                    </div>
            </div>
            </form>

            <!-- Form End -->


            <!-- Content End -->

        @endsection
