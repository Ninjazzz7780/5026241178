@extends('templatebt5')

@section('judul_halaman', 'Kode Soal mypegawai')

@section('konten')

    <a href="/eas" class="btn btn-secondary mb-4">Kembali</a>

    @foreach ($mypegawai as $p)
        <div class="card">
            <div class="card-header">
                Biodata Pegawai
            </div>

            <div class="card-body">
                <form action="/eas/store" method="post">
                    {{ csrf_field() }}

                    <div class="row mb-3">
                        <label for="kodepegawai" class="col-sm-2 col-form-label">Kode Pegawai</label>
                        <div class="col-sm-10">
                            @foreach ($mypegawai as $p)
                                <input type="text" name="kodepegawai" class="form-control mb-2"
                                    value="{{ $p->kodepegawai }}">
                            @endforeach
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="namalengkap" class="col-sm-2 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-10">
                            <input type="text" name="namalengkap" id="namalengkap" class="form-control" maxlength="30"
                                required value="{{ $p->namalengkap }}">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="divisi" class="col-sm-2 col-form-label">Divisi</label>
                        <div class="col-sm-10">
                            <input type="number" name="divisi" id="divisi" class="form-control" required
                                value="{{ $p->divisi }}">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="departmen" class="col-sm-2 col-form-label">Departemen</label>
                        <div class="col-sm-10">
                            <input type="number" name="departmen" id="departmen" class="form-control" required
                                value="{{ $p->departmen }}">
                        </div>
                    </div>

                </form>
            </div>
        </div>
    @endforeach

@endsection
