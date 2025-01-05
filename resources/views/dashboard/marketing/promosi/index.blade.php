@extends('dashboard.index')
@section('content')
    <a href="{{ route('promosi_marketing_form') }}"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
            fill="currentColor" title="Tambah Data" class="bi bi-bookmark-plus" viewBox="0 0 16 16">
            <path
                d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z" />
            <path
                d="M8 4a.5.5 0 0 1 .5.5V6H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V7H6a.5.5 0 0 1 0-1h1.5V4.5A.5.5 0 0 1 8 4z" />
        </svg></a>
    <!-- Search bar -->
    <div class="table-responsive">
        <input type="text" id="searchBar" class="form-control" placeholder="Cari...">
    </div>

    <table id="example" class="table table-striped table-bordered display" style="width:100%">
        <thead>
            <tr>
                <th>Jenis Promosi</th>
                <th>Keterangan</th>
                <th>Batas Waktu</th>
                <th>Kode</th>
                <th>Potongan</th>
                <th>Status</th>
                <th>Digunakan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Jenis Promosi</th>
                <th>Keterangan</th>
                <th>Batas Waktu</th>
                <th>Kode</th>
                <th>Potongan</th>
                <th>Status</th>
                <th>Digunakan</th>
                <th>Aksi</th>
            </tr>
        </tfoot>
        <tbody>
            @foreach ($promosi as $row)
                <tr>
                    <td>{{ $row->jenis_promosi }}</td>
                    <td>{{ $row->keterangan }}</td>
                    <td>{{ $row->batas_waktu }}</td>
                    <td>{{ $row->kode }}</td>
                    <td>{{ $row->potongan }}</td>
                    <td>{{ $row->status }}</td>
                    <td>{{ $row->digunakan }}</td>
                    <td>
                        <form action="{{ route('promosi.destroy', $row->id) }}" method="POST"
                            onsubmit="return confirm('Apakah Anda yakin ingin menghapus promosi ini?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
