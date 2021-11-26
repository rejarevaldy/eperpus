@extends('layouts.main')

@section('content')


    <!-- Panel Start -->
    <div class="p-4 mb-4 border rounded shadow-sm bg-light">
        <div class="row">
            <div class="col-lg-12">
                <div class="p-2 rounded bg-light">
                    <h2 class="mb-3 ">Detail Siswa</h2>
                    <div class="mb-2 row">
                        <div class="col-sm">
                            <a href="/siswa/edit/{{ $siswa->id }}" class="text-white text-decoration-none">
                                <button class="px-4 py-2 btn btn-outline-primary fw-bold "><i class="fas fa-edit "></i>
                                    <div class="d-none d-sm-inline"> Edit</div>
                                </button>
                            </a>
                            <!-- Button trigger modal -->
                            <button type="button" class="px-4 py-2 btn btn-outline-danger fw-bold" data-bs-toggle="modal"
                                data-bs-target="#deleteModal">
                                <i class="fas fa-trash"></i>
                                <div class="d-none d-sm-inline"> Delete</div>
                            </button>
                            <button type="button" class="px-4 py-2 btn btn-outline-secondary fw-bold"><i
                                    class="fas fa-caret-square-left"></i>
                                <a class="text-secondary text-secondary-hover d-none d-sm-inline text-decoration-none"
                                    href="{{ route('siswa') }}">
                                    Back</a>
                            </button>
                            {{-- Modal Start --}}
                            <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel"
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
                                            Menghapus {{ $siswa->nama }}
                                        </div>
                                        <div class="modal-footer">
                                            <form action="{{ route('siswa.delete', $siswa->id) }}" method="POST">
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
            <form action="{{ route('siswa.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
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
                            <label for="" class="mb-1 fw-bold"> ID</label>
                            <div class="input-group">
                                <input value="{{ $siswa->id }}" placeholder="id" class="form-control" name="id"
                                    disabled>
                            </div>
                        </div>
                        <div class="mb-3 form-input">
                            <label for="" class="mb-1 fw-bold"> Username</label>
                            <div class="input-group">
                                <input value="{{ $siswa->username }}" placeholder="Username" class="form-control"
                                    name="username" disabled>
                            </div>
                        </div>
                        <div class="mb-3 form-input">
                            <label for="" class="mb-1 fw-bold"> Nama</label>
                            <div class="input-group">
                                <input value="{{ $siswa->nama }}" placeholder="Nama" class="form-control" name="nama"
                                    disabled>
                            </div>
                        </div>
                        <div class="mb-3 form-input">
                            <label for="" class="mb-1 fw-bold"> NIS</label>
                            <div class="input-group">
                                <input value="{{ $siswa->nis }}" placeholder="NIS" class="form-control" name="nis"
                                    disabled>
                            </div>
                        </div>


                    </div>

                    <div class="col-lg-5">
                        <div class="mb-3 input-group">
                            <label for="" class="mb-1 fw-bold"> Kelas
                            </label>
                            <div class="input-group">
                                <select class="form-select" id="inputGroupSelect01" name="kelas" disabled>
                                    <option value="{{ $siswa->kelas }}">{{ $siswa->kelas }}</option>
                                </select>
                            </div>
                        </div>

                        <div class="mb-3 input-group">
                            <label for="" class="mb-1 fw-bold"> Jurusan
                            </label>
                            <div class="input-group">
                                <select class="form-select" id="inputGroupSelect01" name="jurusan" disabled>
                                    <option value="{{ $siswa->jurusan }}">{{ $siswa->jurusan }}</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3 input-group">
                            <label for="" class="mb-1 fw-bold"> Agama
                            </label>
                            <div class="input-group">
                                <select class="form-select" id="inputGroupSelect01" name="agama" disabled>
                                    <option value="{{ $siswa->agama }}">{{ $siswa->agama }}</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3 input-group">
                            <label for="" class="mb-1 fw-bold"> Gender
                            </label>
                            <div class="input-group">
                                <select class="form-select" id="inputGroupSelect01" name="gender" disabled>
                                    <option value="{{ $siswa->gender }}">{{ $siswa->gender }}</option>
                                </select>
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
