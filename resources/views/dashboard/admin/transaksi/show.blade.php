@extends('dashboard.index')
@section('content')
    <style>
        .detail-container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            background-color: #f9f9f9;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .detail-container h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        .detail-item {
            display: flex;
            justify-content: space-between;
            padding: 10px 0;
            border-bottom: 1px solid #eee;
        }

        .detail-item:last-child {
            border-bottom: none;
        }

        .detail-label {
            font-weight: bold;
            color: #555;
        }

        .detail-value {
            color: #777;
        }

        .back-button {
            display: inline-block;
            margin-top: 15px;
            padding: 5px 8px;
            /* Ukuran padding horizontal diperkecil */
            font-size: 12px;
            color: #fff;
            background-color: #007bff;
            border: none;
            border-radius: 3px;
            text-align: center;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .back-button:hover {
            background-color: #0056b3;
        }
    </style>
    <div class="row small-spacing">
        <div class="col-xs-12">
            <div class="box-content">
                <h4 class="box-title">Transaksi</h4>
                <div class="detail-container">
                    <h2>Detail Informasi</h2>
                    <div class="detail-item">
                        <span class="detail-label">Nama:</span>
                        <span class="detail-value">{{ $transaksi->user->name }}</span>
                    </div>
                    <div class="detail-item">
                        <span class="detail-label">Promosi:</span>
                        <span class="detail-value">{{ $transaksi->promosi }}</span>
                    </div>
                    <div class="detail-item">
                        <span class="detail-label">Harga:</span>
                        <span class="detail-value">{{ $transaksi->harga }}</span>
                    </div>
                    <div class="detail-item">
                        <span class="detail-label">Tanggal Bayar:</span>
                        <span class="detail-value">{{ $transaksi->metode_pembayaran }}</span>
                    </div>
                    <div class="detail-item">
                        <span class="detail-label">Blok:</span>
                        <span class="detail-value">{{ $transaksi->blok }}</span>
                    </div>
                    <div class="detail-item">
                        <span class="detail-label">Status:</span>
                        <span class="detail-value">{{ $transaksi->status }}</span>
                    </div>
                    <div class="detail-item">
                        <span class="detail-label">Foto:</span>
                        <span class="detail-value">
                            <a href="{{ route('transaksi.show_image', ['id' => $transaksi->id]) }}" target="_blank">
                                <img src="{{ asset('transaksi/assets/bukti_bayar/' . $transaksi->bukti_bayar) }}"
                                    alt="Foto" style="max-width: 100px; border-radius: 4px; cursor: pointer;">
                            </a>
                        </span>
                    </div>


                </div>

                <!-- Tombol Back -->
                <a href="{{ url()->previous() }}" class="back-button">Back</a>
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
