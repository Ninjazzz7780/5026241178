@extends('templatebt5')

@section('judul_halaman', 'Data Blueray')

@section('konten')

    <a href="/blueray" class="btn btn-secondary mb-4">Kembali</a>

    @foreach ($blueray as $b)
        <div class="card">
            <div class="card-header">
                Form Edit Data Blueray
            </div>

            <div class="card-body">
                <form action="/blueray/update" method="post">
                    {{ csrf_field() }}

                    <input type="hidden" name="id" value="{{ $b->kodeblueray }}">

                    <div class="row mb-3">
                        <label for="merk" class="col-sm-2 col-form-label">Merk Blueray</label>
                        <div class="col-sm-10">
                            <input type="text" name="merk" id="merk" class="form-control" maxlength="30" required
                                value="{{ $b->merkblueray }}">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="stock" class="col-sm-2 col-form-label">Stock Blueray</label>
                        <div class="col-sm-10">
                            <input type="number" name="stock" id="stock" class="form-control" required
                                value="{{ $b->stockblueray }}">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="tersedia" class="col-sm-2 col-form-label">Tersedia</label>
                        <div class="col-sm-10">
                            <select name="tersedia" id="tersedia" class="form-control" required>
                                <option value="Y" {{ $b->tersedia == 'Y' ? 'selected' : '' }}>Ya</option>
                                <option value="T" {{ $b->tersedia == 'T' ? 'selected' : '' }}>Tidak</option>
                            </select>
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
    @endforeach

@endsection
