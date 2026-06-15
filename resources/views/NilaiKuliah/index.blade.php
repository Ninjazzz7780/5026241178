@extends('templatebt5')
@section('judul_halaman', 'Nilai Kuliah Mahasiswa DSI')
@section('konten')
    <p>
        <br><a href="/nilaikuliah/tambah" class="btn btn-primary">Tambah Nilai</a>
    </p>

    <table class="table table-striped table-hover">
        <tr>
            <th>ID</th>
            <th>NRP</th>
            <th>Nilai Angka</th>
            <th>SKS</th>
            <th>Nilai Huruf</th>
            <th>Bobot</th>
        </tr>

        @foreach ($nilaikuliah as $d)
            <tr>
                <td>{{ $d->id }}</td>
                <td>{{ $d->NRP }}</td>
                <td>{{ $d->NilaiAngka }}</td>
                <td>{{ $d->SKS }}</td>

                <td>
                    @if ($d->NilaiAngka <= 40)
                        D
                    @elseif ($d->NilaiAngka <= 60)
                        C
                    @elseif ($d->NilaiAngka <= 80)
                        B
                    @else
                        A
                    @endif
                </td>

                <td>{{ $d->NilaiAngka * $d->SKS }}</td>
            </tr>
        @endforeach
    </table>
@endsection
