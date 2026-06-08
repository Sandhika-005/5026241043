@extends('template')
@section('title', 'Keranjang Belanja')
@section('konten')

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="fw-bold m-0 text-dark">Daftar Rekapitulasi Belanja</h3>
    </div>

    <div class="mb-3">
        <a href="{{ route('belanja.beli') }}" class="btn btn-primary fw-bold">+ Beli</a>
    </div>


    <table class="table table-bordered table-striped align-middle">
        <thead class="thead-dark">
            <tr>
                <th>Kode Pembelian</th>
                <th>Kode Barang</th>
                <th>Jumlah Pembelian</th>
                <th>Harga per item</th>
                <th>Total</th>
                <th class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse($keranjang as $item)
                <tr>
                    <td>{{ $item->ID }}</td>
                    <td>{{ $item->KodeBarang }}</td>
                    <td>{{ $item->Jumlah }}</td>
                    <td>Rp {{ number_format($item->Harga, 0, ',', '.') }}</td>
                    <td class="fw-bold text-success">Rp {{ number_format($item->Jumlah * $item->Harga, 0, ',', '.') }}</td>
                    <td class="text-center">
                        <a href="{{ route('belanja.batal', $item->ID) }}" class="btn btn-danger btn-sm px-3"
                            onclick="return confirm('Apakah Anda yakin ingin membatalkan transaksi pembelian ini?')">Batal</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center text-muted py-3">Belum ada riwayat rekaman keranjang belanja.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <div class="mt-3">
        {{ $keranjang->links() }}
    </div>

@endsection
