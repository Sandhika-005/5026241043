@extends('template')
@section('title', 'Data Pegawai')
@section('konten')
    <a href="/pegawai/tambah" class="btn btn-primary"> + Tambah Pegawai Baru</a>
    <br />
    <br />
	<form action="/pegawai/cari" method="GET" class="form-control">
        <div class="form-group">
		<label>Cari Data Pegawai :</label><input type="text" name="cari" placeholder="Cari Pegawai .." class="form-control">
		<br />
        <input type="submit" value="CARI" class="btn btn-light" class="form-control">
        </div>
	</form>
    <br />

    <table class="table table-striped table-hover">
        <tr>
            <th style="text-align: center;">Nama</th>
            <th style="text-align: center;">Jabatan</th>
            <th style="text-align: center;">Umur</th>
            <th style="text-align: center;">Alamat</th>
            <th style="text-align: center;">Opsi</th>
        </tr>
        @foreach ($pegawai as $p)
            <tr>
                <td>{{ $p->pegawai_nama }}</td>
                <td style="text-align: center;">{{ $p->pegawai_jabatan }}</td>
                <td style="text-align: center;">{{ $p->pegawai_umur }}</td>
                <td>{{ $p->pegawai_alamat }}</td>
                <td style="text-align: center;">
                    <a href="/pegawai/edit/{{ $p->pegawai_id }}" class="btn btn-warning">Edit</a>
                    &ensp;
                    <a href="/pegawai/hapus/{{ $p->pegawai_id }}" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
    {{ $pegawai->links() }} <!-- untuk menampilkan pagination -->
@endsection
