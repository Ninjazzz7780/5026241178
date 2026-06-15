@extends('templatebt5')

@section('judul_halaman', 'Kode Soal mypegawai')

@section('konten')

    <br>

    <a href="/eas" class="btn btn-secondary mb-4">Kembali</a>

    <div class="card">
        <div class="card-header">
            Form Daftar Pegawai
        </div>

        <div class="card-body">
            <form action="/eas/store" method="post">
                {{ csrf_field() }}

                <div class="row mb-3">
                    <label for="kodepegawai" class="col-sm-2 col-form-label">Kode Pegawai</label>
                    <div class="col-sm-10">
                        <input type="text" name="kodepegawai" id="kodepegawai" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="namalengkap" class="col-sm-2 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-10">
                        <input type="text" name="namalengkap" id="namalengkap" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="divisi" class="col-sm-2 col-form-label">Divisi</label>
                    <div class="col-sm-10">
                        <input type="text" name="divisi" id="divisi" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="departmen" class="col-sm-2 col-form-label">Departmen</label>
                    <div class="col-sm-10">
                        <input type="text" name="departmen" id="departmen" class="form-control" required>
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



    <script>

        function validateForm() {
            let isValid = true;


            const kode = document.getElementById($p->kodepegawai);
            const nama = document.getElementById($p->namalengkap);
            const divisi = document.getElementById($p->divisi);
            const dept = document.getElementById($p->departmen);


            [kode, nama, divisi, dept].forEach(input => input.classList.remove('is-invalid'));
            [kodeFb, namaFb, divisiFb, deptFb].forEach(fb => fb.textContent = '');


            if (kode.value.trim() === "") {
                kode.classList.add('is-invalid');
                kodeFb.textContent = "Kode pegawai tidak boleh kosong.";
                isValid = false;
            } else if (isNaN(kode.value)) {
                kode.classList.add('is-invalid');
                kodeFb.textContent = "Kode pegawai harus berupa angka.";
                isValid = false;
            }


            if (nama.value.trim() === "") {
                nama.classList.add('is-invalid');
                namaFb.textContent = "Nama lengkap wajib diisi.";
                isValid = false;
            }


            if (divisi.value.trim() === "") {
                divisi.classList.add('is-invalid');
                divisiFb.textContent = "Divisi wajib diisi.";
                isValid = false;
            }


            if (dept.value.trim() === "") {
                dept.classList.add('is-invalid');
                deptFb.textContent = "Departmen wajib diisi.";
                isValid = false;
            }

            return isValid;
        }
    </script>

@endsection
