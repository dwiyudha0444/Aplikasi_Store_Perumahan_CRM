@extends('dashboard.index')
@section('content')
    <div class="row small-spacing">
        <div class="col-xs-12">
            <div class="box-content">
                <h4 class="box-title">Default</h4>

                <!-- /.dropdown js__dropdown -->
                <table id="example" class="table table-striped table-bordered display" style="width:100%">
                    <thead>
                        <tr>
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
                                <td>{{ $row->position }}</td>
                                <td>{{ $row->office }}</td>
                                <td>{{ $row->age }}</td>
                                <td>{{ $row->start_date }}</td>
                                <td>{{ $row->salary }}</td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
            <!-- /.box-content -->
        </div>

    </div>
@endsection
