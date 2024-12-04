@extends('dashboard.index')
@section('content')
    <div class="row small-spacing">
        <div class="col-xs-12">
            <div class="box-content">
                <h4 class="box-title">Default</h4>

                <a href="{{ route('form_bangunan') }}"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
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
                            <th>Nama</th>
                            {{-- <th>Deskripsi</th> --}}
                            <th>Jalan</th>
                            <th>Blok</th>
                            <th>Nomer</th>
                            <th>Panjang</th>
                            <th>Luas</th>
                            <th>Harga</th>
                            {{-- <th>Foto</th>
                            <th>Fasilitas</th> --}}
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Nama</th>
                            {{-- <th>Deskripsi</th> --}}
                            <th>Jalan</th>
                            <th>Blok</th>
                            <th>Nomer</th>
                            <th>Panjang</th>
                            <th>Luas</th>
                            <th>Harga</th>
                            {{-- <th>Foto</th>
                            <th>Fasilitas</th> --}}
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($perum as $row)
                            <tr>
                                <td>{{ $row->nama }}</td>
                                <td>{{ $row->jalan }}</td>
                                <td>{{ $row->blok }}</td>
                                <td>{{ $row->nomer }}</td>
                                <td>{{ $row->panjang }}</td>
                                <td>{{ $row->luas }}</td>
                                <td>{{ $row->harga }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.box-content -->
        </div>
    </div>

    <script>
        $(document).ready(function() {
            // Initialize DataTable
            var table = $('#example').DataTable();

            // Custom search bar functionality
            $('#searchBar').on('keyup', function() {
                table.search(this.value).draw();
            });
        });
    </script>
@endsection
