@extends('dashboard.index')
@section('content')
    <div class="row small-spacing">
        <div class="col-xs-12">
            <div class="box-content">
                <h4 class="box-title">Bangunan</h4>



                <!-- Search bar -->
                <div class="table-responsive">
                    <input type="text" id="searchBar" class="form-control" placeholder="Cari..." oninput="filterTable(this.value)">
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
                            <th>Nama</th>
                            <th>Jalan</th>
                            <th>Blok</th>
                            <th>Nomer</th>
                            <th>Panjang</th>
                            <th>Luas</th>
                            <th>Harga</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($perum as $row)
                            <tr data-name="{{ strtolower($row->nama) }}" data-jalan="{{ strtolower($row->jalan) }}">
                                <td>{{ $no++ }}</td>
                                <td>{{ $row->nama }}</td>
                                <td>{{ $row->jalan }}</td>
                                <td>{{ $row->blok }}</td>
                                <td>{{ $row->nomer }}</td>
                                <td>{{ $row->panjang }}</td>
                                <td>{{ $row->luas }}</td>
                                <td>{{ $row->harga }}</td>
                                <td>{{ $row->status }}</td>
                                <td class="text-center align-middle">
                                    <a href="{{ route('denah_show', $row->id) }}" class="btn btn-primary btn-sm">Detail</a>
                                    <a href="{{ route('denah_edit', $row->id) }}" class="btn btn-primary btn-sm">Edit</a>
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
