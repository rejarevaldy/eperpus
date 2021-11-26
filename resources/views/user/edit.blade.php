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
                    <h2>Edit user | {{ $user->nama }}</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="p-4 mb-4 border rounded shadow-sm bg-light">
        <form action="{{ route('user.update', $user->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-lg-2">
                    <div class="mb-3 form-input">
                        <label for="" class="mb-1 fw-bold"> Image
                        </label>
                        <div class="input-group">
                            <img src="{{ asset('images') }}/{{ $user->gambar_user }}" id="previewImg"
                                class="img-thumbnail" alt="...">
                        </div>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="mb-3 form-input">
                        <label for="" class="mb-1 fw-bold"> Username</label>
                        <div class="input-group">
                            <input value="{{ $user->username }}" placeholder="Username" class="form-control"
                                name="username" disabled>
                        </div>
                    </div>
                    <div class="mb-3 form-input">
                        <label for="" class="mb-1 fw-bold"> Nama</label>
                        <div class="input-group">
                            <input value="{{ $user->nama }}" placeholder="Nama" class="form-control" name="nama">
                        </div>
                    </div>

                    <div class="mb-3 form-input">
                        <label for="" class="mb-1 fw-bold"> NIS</label>
                        <div class="input-group">
                            <input value="{{ $user->nis }}" placeholder="NIS" class="form-control" name="nis">
                        </div>
                    </div>
                    f8f9fa

                    <div class="mb-3 input-group">
                        <label for="" class="mb-1 fw-bold"> Image
                        </label>
                        <div class="input-group">
                            <input type="file" class="form-control" name="file" onchange="preview(this)">
                        </div>
                    </div>
                    <button type="submit" class="px-4 py-2 mt-3 btn btn-outline-primary fw-bold"><i
                            class="fas fa-save"></i>
                        <div class="d-none d-sm-inline"> Save</div>
                    </button>
                    <button type="button" class="px-4 py-2 mt-3 btn btn-outline-secondary fw-bold"><i
                            class="fas fa-caret-square-left"></i>
                        <a class="text-secondary text-secondary-hover d-none d-sm-inline text-decoration-none"
                            href="{{ url()->previous() }}">
                            Back</a>
                    </button>
                </div>

                <div class="col-lg-5">

                    <div class="mb-3 input-group">
                        <label for="" class="mb-1 fw-bold"> Kelas
                        </label>
                        <div class="input-group">
                            <select class="form-select" id="inputGroupSelect01" name="kelas">
                                <option value="{{ $user->kelas }}">{{ $user->kelas }}</option>
                                @foreach ($kelas as $k)
                                    <option value="{{ $k }}">{{ $k }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="mb-3 input-group">
                        <label for="" class="mb-1 fw-bold"> Jurusan
                        </label>
                        <div class="input-group">
                            <select class="form-select" id="inputGroupSelect01" name="jurusan">
                                <option value="{{ $user->jurusan }}">{{ $user->jurusan }}</option>
                                @foreach ($jurusan as $j)
                                    <option value="{{ $j }}">{{ $j }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 input-group">
                        <label for="" class="mb-1 fw-bold"> Agama
                        </label>
                        <div class="input-group">
                            <select class="form-select" id="inputGroupSelect01" name="agama">
                                <option value="{{ $user->agama }}">{{ $user->agama }}</option>

                                @foreach ($agama as $a)
                                    <option value="{{ $a }}">{{ $a }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 input-group">
                        <label for="" class="mb-1 fw-bold"> Gender
                        </label>
                        <div class="input-group">
                            <select class="form-select" id="inputGroupSelect01" name="gender">
                                <option value="{{ $user->gender }}">{{ $user->gender }}</option>

                                @foreach ($gender as $g)
                                    <option value="{{ $g }}">{{ $g }}</option>
                                @endforeach
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
