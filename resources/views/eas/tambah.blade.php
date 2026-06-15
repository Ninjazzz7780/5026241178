@extends('templatebt5')
@section('title', 'Kode Soal mypegawai')
@section('konten')

    <div class="card shadow-sm mx-auto">
        <div class="card-header bg-primary text-white py-3">
            <h5 class="mb-0 fw-bold">Formulir Tambah Pegawai</h5>
        </div>
        <div class="card-body p-4">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('eas.store') }}" method="POST" onsubmit="return validasiForm()">
                @csrf

                <div class="mb-3">
                    <label for="kodepegawai" class="form-label fw-semibold text-secondary">Kode Pegawai :</label>
                    <input type="text" name="kodepegawai" id="kodepegawai" maxlength="9"
                           class="form-control" placeholder="Masukkan Kode Pegawai" value="{{ old('kodepegawai') }}">
                </div>

                <div class="mb-3">
                    <label for="namalengkap" class="form-label fw-semibold text-secondary">Nama :</label>
                    <input type="text" name="namalengkap" id="namalengkap" maxlength="50"
                           class="form-control" placeholder="Masukkan nama lengkap" value="{{ old('namalengkap') }}">
                </div>

                <div class="mb-3">
                    <label for="divisi" class="form-label fw-semibold text-secondary">Divisi :</label>
                    <input type="text" name="divisi" id="divisi" maxlength="5"
                           class="form-control" placeholder="Masukkan divisi" value="{{ old('divisi') }}">
                </div>

                <div class="mb-3">
                    <label for="departemen" class="form-label fw-semibold text-secondary">Departemen :</label>
                    <input type="text" name="departemen" id="departemen" maxlength="50"
                           class="form-control" placeholder="Masukkan departemen" value="{{ old('departemen') }}">
                </div>
                <div class="d-flex gap-2 pt-2">
                    <button type="submit" class="btn btn-success px-4 fw-bold">Simpan</button>
                    <a href="{{ route('eas.index') }}" class="btn btn-secondary px-3">Kembali</a>
                </div>
            </form>
        </div>
    </div>

 <script>
        function validasiForm() {
            let kodepegawai = document.getElementById('kodepegawai').value.trim();
            let namalengkap = document.getElementById('namalengkap').value.trim();

            if (kodepegawai === '') {
                Swal.fire({ title: "Kesalahan Input Data!", text: "Kode Pegawai wajib diisi", icon: "error" });
                return false;
            }
            if (kodepegawai.length > 9) {
                Swal.fire({ title: "Kesalahan Input Data!", text: "Kode Pegawai maksimal 9 karakter", icon: "error" });
                return false;
            }
            if (kodepegawai.match(/^[a-zA-Z0-9]+$/) === null) {
                Swal.fire({ title: "Kesalahan Input Data!", text: "Kode Pegawai hanya boleh berisi huruf dan angka", icon: "error" });
                return false;
            }
            if (namalengkap === '') {
                Swal.fire({ title: "Kesalahan Input Data!", text: "Nama wajib diisi", icon: "error" });
                return false;
            }
            if (namalengkap.length > 50) {
                Swal.fire({ title: "Kesalahan Input Data!", text: "Nama maksimal 50 karakter", icon: "error" });
                return false;
            }
            if (namalengkap.match(/^[a-zA-Z\s]+$/) === null) {
                Swal.fire({ title: "Kesalahan Input Data!", text: "Nama hanya boleh berisi huruf dan spasi", icon: "error" });
                return false;
            }
        }
    </script>
@endsection
