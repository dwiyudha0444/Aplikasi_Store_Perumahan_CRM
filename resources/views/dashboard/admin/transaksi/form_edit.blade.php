@extends('dashboard.index')
@section('content')
    <div class="row small-spacing">
        <div class="col-lg-12 col-xs-12">
            <div class="box-content card white">
                <h4 class="box-title">Form Edit</h4>
                <!-- /.box-title -->
                <div class="card-content">
                    <form action="{{ route('transaksi_admin_update', $transaksi->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <!-- Nama -->
                        <div class="form-group">
                            <label for="id_user">Nama Pelanggan</label>
                            <input type="text" class="form-control" id="id_user" placeholder="Enter your nama" readonly
                                value="{{ old('id_user', $transaksi->user->name ?? '') }}">
                        </div>

                        <!-- Nama -->
                        <div class="form-group">
                            <label for="id_bangunan">Nama Bangunan</label>
                            <input type="text" class="form-control" id="id_bangunan" placeholder="Enter your nama" readonly
                                value="{{ old('id_bangunan', $transaksi->bangunan->nama ?? '') }}">
                        </div>

                        <!-- Blok -->
                        <div class="form-group">
                            <label for="blok">Blok</label>
                            <input type="text" class="form-control" id="blok"  readonly
                                placeholder="Masukkan blok" value="{{ old('blok', $transaksi->blok ?? '') }}">
                        </div>

                        <!-- Promosi -->
                        <div class="form-group">
                            <label for="promosi">Promosi</label>
                            <input type="text" class="form-control" id="promosi"  readonly
                                placeholder="Masukkan promosi" value="{{ old('promosi', $transaksi->promosi ?? '') }}">
                        </div>

                        <!-- Harga -->
                        <div class="form-group">
                            <label for="harga">Harga</label>
                            <input type="number" class="form-control" id="harga" readonly
                                placeholder="Masukkan harga" value="{{ old('harga', $transaksi->harga ?? '') }}">
                        </div>

                        <!-- Tanggal Bayar -->
                        <div class="form-group">
                            <label for="tanggal_bayar">Tanggal Bayar</label>
                            <input type="date" class="form-control" id="tanggal_bayar"  readonly
                                value="{{ old('tanggal_bayar', $transaksi->tanggal_bayar ?? '') }}">
                        </div>

                        <!-- Bukti Bayar -->
                        <div class="form-group">
                            <label for="bukti_bayar">Bukti Bayar</label>
                            <input type="file" class="form-control-file" id="bukti_bayar" >
                            @if ($transaksi->bukti_bayar)
                                <small>File saat ini: <a
                                        href="{{ asset('transaksi/assets/bukti_bayar/' . $transaksi->bukti_bayar) }}"
                                        target="_blank">Lihat Bukti</a></small>
                            @endif
                        </div>

                        <!-- Status -->
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select class="form-control" id="status" name="status">
                                <option value="terverifikasi" {{ old('status', $transaksi->status) == 'terverifikasi' ? 'selected' : '' }}>
                                    Terverifikasi</option>
                                <option value="dibatalkan"
                                    {{ old('status', $transaksi->status) == 'dibatalkan' ? 'selected' : '' }}>Dibatalkan
                                </option>
                            </select>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-primary btn-sm waves-effect waves-light">Submit</button>
                    </form>



                </div>
                <!-- /.card-content -->
            </div>
            <!-- /.box-content -->
        </div>

    </div>
@endsection
