@extends('dashboard.index')
@section('content')
    <div class="row small-spacing">
        <div class="col-xs-12">
            <div class="box-content">
                <h4 class="box-title">Default</h4>

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
