@extends('dashboard.index')
@section('content')
    <div class="row small-spacing">
        <div class="col-lg-12 col-xs-12">
            <div class="box-content card white">
                <h4 class="box-title">Form Edit Bangunan</h4>
                <!-- /.box-title -->
                <div class="card-content">
                    <form action="{{ route('denah_update', $bangunan->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <!-- Nama -->
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama"
                                placeholder="Enter your nama" value="{{ old('nama', $bangunan->nama ?? '') }}">
                        </div>

                        <!-- Deskripsi -->
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                            <textarea class="form-control" id="deskripsi" name="deskripsi" placeholder="Enter description">{{ old('deskripsi', $bangunan->deskripsi ?? '') }}</textarea>
                        </div>

                        <!-- Jalan -->
                        <div class="form-group">
                            <label for="jalan">Jalan</label>
                            <input type="text" class="form-control" id="jalan" name="jalan"
                                placeholder="Enter jalan" value="{{ old('jalan', $bangunan->jalan ?? '') }}">
                        </div>

                        <!-- Blok -->
                        <div class="form-group">
                            <label for="blok">Blok</label>
                            <input type="text" class="form-control" id="blok" name="blok"
                                placeholder="Enter blok" value="{{ old('blok', $bangunan->blok ?? '') }}">
                        </div>

                        <!-- Nomor -->
                        <div class="form-group">
                            <label for="nomer">Nomer</label>
                            <input type="text" class="form-control" id="nomer" name="nomer"
                                placeholder="Enter nomer" value="{{ old('nomer', $bangunan->nomer ?? '') }}">
                        </div>

                        <!-- Panjang -->
                        <div class="form-group">
                            <label for="panjang">Panjang</label>
                            <input type="text" class="form-control" id="panjang" name="panjang"
                                placeholder="Enter panjang" value="{{ old('panjang', $bangunan->panjang ?? '') }}">
                        </div>

                        <!-- Luas -->
                        <div class="form-group">
                            <label for="luas">Luas</label>
                            <input type="text" class="form-control" id="luas" name="luas"
                                placeholder="Enter luas" value="{{ old('luas', $bangunan->luas ?? '') }}">
                        </div>

                        <!-- Harga -->
                        <div class="form-group">
                            <label for="harga">Harga</label>
                            <input type="text" class="form-control" id="harga" name="harga"
                                placeholder="Enter harga" value="{{ old('harga', $bangunan->harga ?? '') }}">
                        </div>

                        <!-- Status -->
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select id="status" name="status" class="form-control">
                                <option value="available"
                                    {{ old('status', $bangunan->status ?? '') == 'available' ? 'selected' : '' }}>Available
                                </option>
                                <option value="sold"
                                    {{ old('status', $bangunan->status ?? '') == 'sold' ? 'selected' : '' }}>Sold</option>
                                <option value="reserved"
                                    {{ old('status', $bangunan->status ?? '') == 'reserved' ? 'selected' : '' }}>Reserved
                                </option>
                            </select>
                        </div>

                        <!-- File Input -->
                        <div class="form-group">
                            <label for="foto">File input</label>
                            <input type="file" id="foto" name="foto" class="form-control">
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
