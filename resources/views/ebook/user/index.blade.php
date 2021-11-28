@extends('layouts.main')

@section('content')

    <div class="p-4 mb-4 border rounded shadow-sm bg-light">
        <div class="row">
            <div class="col-lg-12">
                <div class="p-2 rounded bg-light">
                    <div class="mb-2 row">

                        @foreach ($ebooks as $ebook)

                            <div class="col-lg-2 col-sm-2 mb-4">
                                <div class="mt-3 border card radius-0 me-auto ms-auto ">
                                    <div class="shadow-sm card">
                                        <img src="{{ asset('images') }}/{{ $ebook->gambar_pdf }}"
                                            class="card-img-top ms-auto me-auto" width="100%" height="230rem" />
                                        <div class="card-body d-flex justify-content-center">
                                            <a href="{{ route('ebook.detail', $ebook->id) }}"
                                                class="ps-4 pe-4 text-decoration-none fs-5">{{ $ebook->judul }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        @endforeach

                        <div class="mt-5">
                            <div class="row">
                                <div class="col"> {{ $ebooks->links('pagination::bootstrap-4') }}
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
