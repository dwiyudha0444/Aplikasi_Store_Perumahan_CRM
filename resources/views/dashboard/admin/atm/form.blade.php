@extends('dashboard.index')
@section('content')
    <div class="row small-spacing">
        <div class="col-lg-12 col-xs-12">
            <div class="box-content card white">
                <h4 class="box-title">Tambah Bank Tujuan</h4>
                <!-- /.box-title -->
                <div class="card-content">
                    <form action="{{ route('store_pembayaran_admin') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="keterangan">Keterangan</label>
                            <textarea class="form-control" name="keterangan" id="keterangan" rows="3" placeholder="Masukkan keterangan"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="bank_tujuan">Bank Tujuan</label>
                            <input type="text" class="form-control" name="bank_tujuan" id="bank_tujuan"
                                placeholder="Masukkan bank tujuan">
                        </div>
                        <div class="form-group">
                            <label for="nomer_atm">Nomor ATM</label>
                            <input type="text" class="form-control" name="nomer_atm" id="nomer_atm"
                                placeholder="Masukkan nomor ATM">
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm waves-effect waves-light">Submit</button>
                    </form>

                </div>
                <!-- /.card-content -->
            </div>
            <!-- /.box-content -->
        </div>
    </div>
@endsection
