@extends('dashboard.index')
@section('content')
    <div class="row small-spacing">
        <div class="col-lg-12 col-xs-12">
            <div class="box-content card white">
                <h4 class="box-title">Tambah Promosi</h4>
                <!-- /.box-title -->
                <div class="card-content">
                    <form action="{{ route('promosi_marketing_store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="jenis_promosi">Jenis Promosi</label>
                            <input type="text" class="form-control" name="jenis_promosi" id="jenis_promosi"
                                placeholder="Masukkan jenis promosi">
                        </div>
                        <div class="form-group">
                            <label for="keterangan">Keterangan</label>
                            <textarea class="form-control" name="keterangan" id="keterangan" rows="3" placeholder="Masukkan keterangan"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="batas_waktu">Batas Waktu</label>
                            <input type="date" class="form-control" name="batas_waktu" id="batas_waktu">
                        </div>
                        <div class="form-group">
                            <label for="kode">Kode Promosi</label>
                            <input type="text" class="form-control" name="kode" id="kode"
                                placeholder="Masukkan kode promosi">
                        </div>
                        <div class="form-group">
                            <label for="potongan">Potongan</label>
                            <input type="number" class="form-control" name="potongan" id="potongan"
                                placeholder="Masukkan jumlah potongan">
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select class="form-control" name="status" id="status">
                                <option value="aktif">Aktif</option>
                                <option value="tidak_aktif">Tidak Aktif</option>
                            </select>
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
