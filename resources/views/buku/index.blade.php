@extends('template')
@section('title', 'Data Buku')
@section('konten')
    <a href="/buku/tambah" class="btn btn-primary mb-3">+ Tambah Buku Baru</a>

    <div class="card mb-3">
        <div class="card-body">
            <form action="/buku/cari" method="GET" class="form-inline">
                <label class="mr-2">Cari Data Buku :</label>
                <input class="form-control col-md-9 mr-2" type="text" name="cari" placeholder="Masukkan merk buku .." value="{{ old('cari') }}">
                <br />
                <input class="btn btn-success" type="submit" value="CARI">
            </form>
        </div>
    </div>

    <table class="table table-striped table-hover table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>Kode Buku</th>
                <th>Merk Buku</th>
                <th>Stock Buku</th>
                <th class="text-center" style="width: 15%;">Tersedia</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($buku as $b)
            <tr>
                <td>{{ $b->kodebuku }}</td>
                <td>{{ $b->merkbuku }}</td>
                <td>{{ $b->stockbuku }}</td>
                <td class="text-center">
                    <div class="form-check form-switch d-inline-block position-relative p-0" style="width: 75px; height: 30px;">
                        @if($b->tersedia == 'Y')
                            <input class="form-check-input m-0" type="checkbox" checked disabled
                                   style="width: 100%; height: 100%; background-color: #28a745; border-color: #28a745; opacity: 1; cursor: default; border-radius: 30px;">
                            <span class="position-absolute text-white font-weight-bold small"
                                  style="left: 12px; top: 50%; transform: translateY(-50%); pointer-events: none; font-size: 11px;">Ada</span>
                        @else
                            <input class="form-check-input m-0" type="checkbox" disabled
                                   style="width: 100%; height: 100%; background-color: #dc3545; border-color: #dc3545; opacity: 1; cursor: default; border-radius: 30px; background-position: left center;">
                            <span class="position-absolute text-white font-weight-bold small"
                                  style="right: 10px; top: 50%; transform: translateY(-50%); pointer-events: none; font-size: 11px;">Kosong</span>
                        @endif
                    </div>
                </td>
                <td>
                    <a href="/buku/edit/{{ $b->kodebuku }}" class="btn btn-warning btn-sm">Edit</a>
                    <a href="/buku/hapus/{{ $b->kodebuku }}" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus buku ini?')">Hapus</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="d-flex justify-content-center">
        {{ $buku->links() }}
    </div>
@endsection
