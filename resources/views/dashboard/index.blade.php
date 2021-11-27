@extends('layouts.main')

@section('content')

    <div class="p-4 mb-4 border rounded shadow-sm bg-light">
        <div class="row">
            <div class="col-lg-12">
                <div class="pt-2 rounded bg-light">
                    <div class="row">
                        <div class="mb-3 col-lg-3">
                            <div class="border card border-primary">
                                <div class="align-middle card-body bg-primary d-flex justify-content-between text-light">
                                    <h1 class="card-text"><i class=" fa fa-user-graduate" style="font-size: 3.8rem;"></i>
                                    </h1>
                                    <h1 class=" card-text" style="font-size: 3.4rem">{{ $user }} </h1>
                                </div>
                                <div class="card-header d-flex justify-content-between">
                                    <a href="{{ route('siswa') }}" class="text-decoration-none text-secondary">Siswa
                                        Details</a>
                                    <a href="{{ route('siswa') }}"><i
                                            class="fa fa-arrow-circle-right text-secondary"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 col-lg-3">
                            <div class="border card border-primary">
                                <div class="align-middle card-body bg-primary d-flex justify-content-between text-light">
                                    <h1 class="card-text"><i class=" fa fa-book" style="font-size: 3.8rem;"></i>
                                    </h1>
                                    <h1 class=" card-text" style="font-size: 3.4rem">{{ $book }} </h1>
                                </div>
                                <div class="card-header d-flex justify-content-between">
                                    <a href="{{ route('book') }}" class="text-decoration-none text-secondary">Buku
                                        Details</a>
                                    <a href="{{ route('book') }}"><i
                                            class="fa fa-arrow-circle-right text-secondary"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 col-lg-3">
                            <div class="border card border-danger">
                                <div class="align-middle card-body bg-danger d-flex justify-content-between text-light">
                                    <h1 class="card-text"><i class=" fa fa-caret-square-right"
                                            style="font-size: 3.8rem;"></i></h1>
                                    <h1 class=" card-text" style="font-size: 3.4rem">{{ $dipinjam }} </h1>
                                </div>
                                <div class="card-header d-flex justify-content-between">
                                    <a href="{{ route('loan') }}" class="text-decoration-none text-secondary">Dipinjam
                                        Details</a>
                                    <a href="{{ route('loan') }}"><i
                                            class="fa fa-arrow-circle-right text-secondary"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 col-lg-3">
                            <div class="border card border-success">
                                <div class="align-middle card-body bg-success d-flex justify-content-between text-light">
                                    <h1 class="card-text"><i class=" fa fa-caret-square-left"
                                            style="font-size: 3.8rem;"></i></h1>
                                    <h1 class=" card-text" style="font-size: 3.4rem">{{ $dikembalikan }} </h1>
                                </div>
                                <div class="card-header d-flex justify-content-between">
                                    <a href="{{ route('loan') }}"
                                        class="text-decoration-none text-secondary">Dikembalikan Details</a>
                                    <a href="{{ route('loan') }}"><i
                                            class="fa fa-arrow-circle-right text-secondary"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="p-4 mb-4 border rounded shadow-sm bg-light">
        <div class="row">
            <div class="col-lg-12">
                <div class="p-2 rounded bg-light">
                    <!-- Tables Start-->
                    <div class="d-flex justify-content-between">
                        <p>Peminjaman Terbaru</p>

                        <div class="div">
                            <a href="{{ route('loan') }}" class="text-decoration-none ">View More</a>
                            <a href="{{ route('loan') }}"><i class="fa fa-chevron-right" style="font-size: 0.7rem"></i></a>
                        </div>

                    </div>
                    <table class="table table-bordered " style="width:100%">
                        <thead class="" style="background-color: rgb(237, 236, 236)">
                            <tr class="text-center fw-bold">
                                <th style="width: 1%">No</th>
                                <th>Buku</th>
                                <th>Peminjam</th>
                                <th style="width: 7%">Dipinjam</th>
                                <th style="width: 7%">Tenggat</th>
                                <th style="width: 7%">Pengembalian</th>
                                <th style="width: 10%">Status</th>
                                <th class="sorting_none" style="width: 18%"></th>
                        </thead>
                        <tbody class="bg-light">
                            @foreach ($loans as $loan)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td><a class="text-decoration-none"
                                            href="{{ route('book.detail', $loan->book->id) }}">{{ $loan->book->judul }}
                                            |
                                            {{ $loan->book->penulis }}</a></td>
                                    <td><a class="text-decoration-none"
                                            href="{{ route('siswa.detail', $loan->user->id) }}">{{ $loan->user->nama }}
                                            |
                                            {{ $loan->user->kelas }} {{ $loan->user->jurusan }}</a></td>
                                    <td class="text-center">{{ $loan->created_at }}</td>
                                    <td class="text-center">{{ $loan->tanggal_tenggat }}</td>
                                    <td class="text-center">{{ $loan->tanggal_dikembalikan }}</td>
                                    <td
                                        class="{{ $loan->status === 'Dipinjam' ? 'text-secondary' : '' }} {{ $loan->status === 'Dikembalikan' ? 'text-success' : '' }}{{ $loan->status === 'Terlambat' ? 'text-danger' : '' }}">
                                        {{ $loan->status }}</td>
                                    <td class="text-center">

                                        <a href="{{ route('loan.detail', $loan->id) }}"
                                            class="py-1 text-center text-decoration-none ms-2 me-2">
                                            View </a>
                            @endforeach
                        </tbody>
                        <tfoot style="background-color: rgb(237, 236, 236)">
                            <th colspan="8" class=" text-primary">

                            </th>
                        </tfoot>
                    </table>
                    <!-- Tables End -->

                </div>
            </div>
        </div>
    </div>

@endsection
