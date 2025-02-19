@extends('dashboard.index')
@section('content')
    <div class="row small-spacing">
        <div class="col-xs-12">
            <div class="box-content">
                <h4 class="box-title">Angsuran</h4>

                <!-- Tombol Tambah -->
                <a href="{{ route('form_bangunan') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" title="Tambah Data"
                        class="bi bi-bookmark-plus" viewBox="0 0 16 16">
                        <path
                            d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z" />
                        <path
                            d="M8 4a.5.5 0 0 1 .5.5V6H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V7H6a.5.5 0 0 1 0-1h1.5V4.5A.5.5 0 0 1 8 4z" />
                    </svg>
                </a>

                <!-- Search bar -->
                <div class="table-responsive">
                    <input type="text" id="searchBar" class="form-control" placeholder="Cari..."
                        oninput="filterTable(this.value)">
                </div>

                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif

                <!-- Tabel Data -->
                <table id="example" class="table table-striped table-bordered display" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Pembayaran</th>
                            <th>Nama Pelanggan</th>
                            <th>Tenor Angsuran</th>
                            <th>Cicilan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($angsuran as $row)
                            <tr data-jalan="{{ strtolower($row->nama_pelanggan) }}">
                                <td>{{ $no++ }}</td>
                                <td>{{ $row->id_pembayaran ? $row->id_pembayaran : 'Belum dipilih' }}</td>
                                <td>{{ $row->nama_pelanggan }}</td>
                                <td>{{ $row->tenor_angsuran ? $row->tenor_angsuran : 'Belum dipilih'  }}</td>
                                <td>{{ $row->cicilan ? $row->cicilan : 'Belum dipilih'  }}</td>

                                <td class="text-center align-middle">
                                    <a href="{{ route('transaksi_admin_show', $row->id) }}"
                                        class="btn btn-primary btn-sm">Detail</a>
                                    <a href="{{ route('transaksi_admin_edit', $row->id) }}"
                                        class="btn btn-primary btn-sm">Edit</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.box-content -->
        </div>
    </div>

    <!-- Fungsi Filter -->
    <script>
        function filterTable(value) {
            const rows = document.querySelectorAll('#example tbody tr');
            value = value.toLowerCase();

            rows.forEach(row => {
                const name = row.getAttribute('data-name');
                const jalan = row.getAttribute('data-jalan');

                if (name.includes(value) || jalan.includes(value)) {
                    row.style.display = ''; // Tampilkan baris
                } else {
                    row.style.display = 'none'; // Sembunyikan baris
                }
            });
        }
    </script>
@endsection
