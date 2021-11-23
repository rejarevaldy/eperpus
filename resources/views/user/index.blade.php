 @extends('layouts.main')

 @section('content')

     <div class="p-4 mb-4 border rounded shadow-sm bg-light">
         <div class="row">
             <div class="col-lg-12">
                 <div class="p-2 rounded bg-light">
                     <h2 class="mb-3 ">Detail {{ $siswa->nama }}</h2>
                     <!-- Panel End -->
                 </div>
                 <div class="mb-2 row">
                     <div class="col-sm">
                         <button type="button" class="px-4 py-2 btn btn-outline-secondary fw-bold"><i
                                 class="fas fa-caret-square-left"></i>
                             <a class="text-secondary text-secondary-hover d-none d-sm-inline text-decoration-none" href="{{ url()->previous() }}">
                                 Back</a>
                         </button>
                     </div>
                 </div>
             </div>
         </div>
     </div>


     <!-- Form Start -->
     <div class="p-4 bg-white border rounded">
         <div class="row">
             <form action="">
                 <div class="row">

                     <div class="col-lg-2">

                         <div class="mb-3 form-input">
                             <label for="" class="mb-1 fw-bold"> Image
                             </label>
                             <div class="input-group">
                                 <img src="{{ asset('images/') }}/{{ $siswa->gambar_user }}" class="img-thumbnail"
                                     alt="...">
                             </div>
                         </div>

                     </div>
                     <div class="col-lg-5">
                         <div class="mb-3 form-input">
                             <label for="" class="mb-1 fw-bold"> Nama</label>
                             <div class="input-group">
                                 <input value="{{ $siswa->nama }}" placeholder="Nama" class="form-control" name="nama"
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
     </div>
     </div>
     <!-- Content End -->
 @endsection
