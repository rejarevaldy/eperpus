@extends('layouts.main')

@section('content')

    <!-- Panel Start -->
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
                        <form action="" method="POST" class="col-lg-6">
                            <div class="mb-3 form-input">
                                <label for="" class="mb-1 fw-bold"><span class="text-danger">*</span> Buku</label>
                                <div class="input-group">
                                    <input name="book" list="book" placeholder="Book" class="form-control">
                                    <datalist id="book">
                                        <option value="Web Designing">
                                        <option value="Web Development">
                                        <option value="IOS App Development">
                                        <option value="Wordpress Site">
                                        <option value="UI/UX Development">
                                    </datalist>
                                    <span class="bg-light input-group-text" id="addon-wrapping"> <i
                                            class='fa fa-book text-secondary'></i>
                                    </span>
                                </div>
                            </div>
                            <div class="mb-3 form-input">
                                <label for="" class="mb-1 fw-bold"><span class="text-danger">*</span> Peminjam</label>
                                <div class="input-group">
                                    <input name="user" list="peminjam" placeholder="Peminjam" class="form-control">
                                    <datalist id="peminjam">
                                        <option value="Web Designing">
                                        <option value="Web Development">
                                        <option value="IOS App Development">
                                        <option value="Wordpress Site">
                                        <option value="UI/UX Development">
                                    </datalist>
                                    <span class="bg-light input-group-text" id="addon-wrapping"> <i
                                            class='fa fa-user-graduate text-secondary'></i>
                                    </span>
                                </div>
                            </div>
                            <div class="mb-3 form-input">
                                <label for="startDate" class="mb-1 fw-bold"><span class="text-danger">*</span> Tanggal
                                    Peminjaman</label>
                                <div class="input-group ">
                                    <input name="startDate" class="form-control" type="date" />
                                    <span class="bg-light input-group-text" id="basic-addon1"><i
                                            class="fas fa-calendar-plus text-secondary"></i></span>
                                </div>
                            </div>
                            <div class="mb-3 form-input">
                                <label for="endDate" class="mb-1 fw-bold"><span class="text-danger">*</span> Tanggal
                                    Tenggat</label>
                                <div class="input-group ">
                                    <input name="endDate" class="form-control" type="date" />
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
                            <button type="button" class="px-4 py-2 mt-3 btn btn-outline-secondary fw-bold">
                                <a href="../peminjaman" class="text-white text-decoration-none"><i
                                        class="fas fa-caret-square-left"></i>
                                    <div class="d-none d-sm-inline"> Back</div>
                                </a>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content End -->

@endsection
