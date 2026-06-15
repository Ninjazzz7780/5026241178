@extends('templatebt5')
@section('judul_halaman', 'Kode Soal mypegawai')
@section('konten')
    <p>
        <br><a href="/eas/tambah" class="btn btn-primary">+ Tambah Pegawai</a>
    </p>

    </br>
    <table class="table table-striped table-hover">
        <tr>
            <th>Kode Pegawai</th>
            <th>Nama Lengkap</th>
            <th>Divisi</th>
            <th>Departmen</th>
        </tr>
        @foreach ($mypegawai as $p)
            <tr>
                <td>{{ $p->kodepegawai }}</td>
                <td>{{ $p->namalengkap }}</td>
                <td>{{ $p->divisi }}</td>
                <td>{{ $p->departmen }}</td>
                <td>|
                    <a href="/eas/view/{{ $p->kodepegawai }}" class="btn btn-info">
                        View
                    </a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
