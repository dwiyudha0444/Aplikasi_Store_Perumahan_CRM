@extends('dashboard.index')
@section('content')
    <div class="row small-spacing">
        <div class="col-lg-12 col-xs-12">
            <div class="box-content card white">
                <h4 class="box-title">Edit Bank Tujuan</h4>
                <!-- /.box-title -->
                <div class="card-content">
                    <form action="{{ route('update_pembayaran_admin', $atm->id) }}" method="POST">
                        @csrf
                        @method('PUT') <!-- Untuk mengubah method menjadi PUT -->
                        
                        <div class="form-group">
                            <label for="keterangan">Keterangan</label>
                            <textarea class="form-control" name="keterangan" id="keterangan" rows="3" placeholder="Masukkan keterangan">{{ old('keterangan', $atm->keterangan) }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="bank_tujuan">Bank Tujuan</label>
                            <input type="text" class="form-control" name="bank_tujuan" id="bank_tujuan"
                                placeholder="Masukkan bank tujuan" value="{{ old('bank_tujuan', $atm->bank_tujuan) }}">
                        </div>
                        <div class="form-group">
                            <label for="nomer_atm">Nomor ATM</label>
                            <input type="text" class="form-control" name="nomer_atm" id="nomer_atm"
                                placeholder="Masukkan nomor ATM" value="{{ old('nomer_atm', $atm->nomer_atm) }}">
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm waves-effect waves-light">Update</button>
                    </form>
                </div>
                <!-- /.card-content -->
            </div>
            <!-- /.box-content -->
        </div>
    </div>
@endsection
