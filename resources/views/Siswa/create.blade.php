@extends('templatebt5')
@section('judul_halaman', 'Data Siswa')
@section('konten')
    <a href="/siswa" class="btn btn-secondary mb-4">Kembali</a>

    <div class="card">
        <div class="card-header">
            Form Tambah Data Siswa
        </div>

        <div class="card-body">
            <form action="{{ route('siswa.store') }}" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="POST">

                <div class="row mb-3">
                    <label for="NRP" class="col-sm-2 col-form-label">NRP</label>
                    <div class="col-sm-10">
                        <input type="text" name="NRP" id="NRP" class="form-control" required
                            value="{{ old('NRP') }}">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="Nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" name="Nama" id="Nama" class="form-control" required
                            value="{{ old('Nama') }}">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="Kelas" class="col-sm-2 col-form-label">Kelas</label>
                    <div class="col-sm-10">
                        <input type="text" name="Kelas" id="Kelas" class="form-control" required
                            value="{{ old('Kelas') }}">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="TanggalLahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                    <div class="col-sm-10">
                        <input type="date" name="TanggalLahir" id="TanggalLahir" class="form-control" required
                            value="{{ old('TanggalLahir') }}">
                    </div>
                </div>

                <div class="row">
                    <div class="offset-sm-2 col-sm-10">
                        <input type="submit" value="Simpan Data" class="btn btn-primary">
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection
