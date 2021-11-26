@extends('layouts.main')

@section('content')

    <div class="p-4 mb-4 border rounded shadow-sm bg-light ">

        <div class="row">
            <div class="col-lg-12">
                <div class="p-2 rounded bg-light">
                    <h2 class="mb-3 ">Audit</h2>
                    <div class="mb-2 row">
                        <div class="col-sm">
                            <a href="{{ route('audit.export') }}" class=" text-decoration-none">
                                <button class="px-4 py-2 btn btn-outline-success fw-bold "><i class="fas fa-file-excel"></i>
                                    <div class="d-none d-sm-inline">Export to Excel
                                </button>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="mt-4 row ">
        <div class="col-lg-12 ">
            <div class="p-4 border rounded shadow-sm bg-light">

                <!-- Tables Start-->
                <table id="datatable" class="table table-bordered " style="width:100%">
                    <thead>
                        <tr class="text-center fw-bold">
                            <th style="width: 1%">No</th>
                            <th style="width: 5%">Date</th>
                            <th style="width: 13%">User</th>
                            <th>URL</th>
                            <th>Event</th>
                            <th>IP</th>
                            <th>User Agent</th>
                        </tr>
                    </thead>
                    <tbody >
                        @foreach ($audits as $audit)
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td class="text-center">{{ $audit->created_at }}</td>
                                <td>{{ $audit->user->nama }}</td>
                                <td>{{ $audit->url }}</td>
                                <td>{{ $audit->event }}</td>
                                <td>{{ $audit->ip_address }}</td>
                                <td>{{ $audit->user_agent }}</td>
                            </tr>
                        @endforeach
                </table>
                <!-- Tables End -->

            </div>
        </div>
    </div>

@endsection
