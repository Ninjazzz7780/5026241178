@extends('templatebt5')

@section('judul_halaman', 'Data Blueray')

@section('konten')
    <p>
        <br>
        <a href="/blueray/tambah" class="btn btn-primary">Tambah Data Blueray Baru</a>
    </p>

    <p>Cari Data Blueray :</p>

    <form action="/blueray/cari" method="GET">
        <input type="text" name="cari" placeholder="Cari Merk Blueray .." class="form-control" value="{{ request('cari') }}">
        <br>
        <input type="submit" value="CARI" class="btn btn-success">
    </form>

    <br>

    <table class="table table-striped table-hover">
        <tr>
            <th>Kode Blueray</th>
            <th>Merk Blueray</th>
            <th>Stock Blueray</th>
            <th>Tersedia</th>
            <th>Opsi</th>
        </tr>

        @foreach ($blueray as $b)
            <tr>
                <td>{{ $b->kodeblueray }}</td>
                <td>{{ $b->merkblueray }}</td>
                <td>{{ $b->stockblueray }}</td>
                <td>
                    @if ($b->tersedia == 'Y')
                        Ya
                    @else
                        Tidak
                    @endif
                </td>
                <td>
                    <a href="/blueray/edit/{{ $b->kodeblueray }}" class="btn btn-warning">Edit</a>
                    |
                    <a href="/blueray/hapus/{{ $b->kodeblueray }}" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>

    {{ $blueray->links() }}
@endsection
