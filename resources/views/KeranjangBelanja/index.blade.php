@extends('templatebt5')
@section('judul_halaman', 'Keranjang Belanja')
@section('konten')
    <p>
        <br><a href="/keranjangbelanja/beli" class="btn btn-primary">Beli</a>
    </p>
    {{-- <p>Cari Barang :</p>
    <form action="/keranjangbelanja/cari" method="GET">
        <input type="text" name="cari" placeholder="Cari Barang .." class="form-control" value="{{ old('cari') }}">
        <input type="submit" value="CARI" class="btn btn-success">
    </form> --}}

    </br>
    <table class="table table-striped table-hover">
        <tr>
            <th>Kode Pembelian</th>
            <th>Kode Barang</th>
            <th>Jumlah Pembelian</th>
            <th>Harga per Item</th>
            <th>Total</th>
        </tr>
        @foreach ($keranjangbelanja as $k)
            <tr>
                <td>{{ $k->ID }}</td>
                <td>{{ $k->KodeBarang }}</td>
                <td>{{ $k->Jumlah }}</td>
                <td>{{ number_format($k->Harga, 0, ',', '.') }}</td>
                <td>{{ number_format($k->Jumlah * $k->Harga, 0, ',', '.') }}</td>
                <td>|
                    <a href="/keranjangbelanja/batal/{{ $k->ID }}" class="btn btn-danger"
                        onclick="return confirm('Yakin ingin membatalkan data ini?')">
                        Batal
                    </a>
                </td>
            </tr>
        @endforeach
    </table>
    {{-- {{ $keranjangbelanja->links() }} --}}
@endsection
