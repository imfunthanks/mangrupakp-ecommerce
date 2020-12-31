<div class="container">
    <div class="row mt-4 mb-2">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-dark">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">History</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session ('message') }}
            </div>
            @endif
        </div>
    </div>

    <div class="row mt-4">
        <div class="col">
            <div class="table-responsive">
                <table class="table text-center">
                    <thead>
                        <tr>
                            <td>No.</td>
                            <td>Tanggal Pesan</td>
                            <td>Kode Pemesanan</td>
                            <td>Pesanan</td>
                            <td>Status</td>
                            <td><strong>Total Harga</strong></td>
                            <td></td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1?>
                        @forelse ($pesanans as $pesanan)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $pesanan->created_at }} WIB </td>
                            <td>{{ $pesanan->kode_pemesanan }}</td>
                            <td>
                                <?php $pesanan_details = \App\PesananDetail::where('pesanan_id', $pesanan->id)->get(); ?>
                                @foreach ($pesanan_details as $pesanan_detail)
                                <img src="{{ url('assets/all_product') }}/{{ $pesanan_detail->product->gambar }}"
                                    class="img-fluid" width="100" alt="all_product">
                                {{ $pesanan_detail->product->nama }}
                                <br>
                                @endforeach
                            </td>
                            <td>
                                @if($pesanan->status == 1)
                                Belum Dibayar
                                @else
                                Lunas
                                @endif
                            </td>
                            <td><strong>Rp. {{ number_format($pesanan->total_harga+$pesanan->kode_unik )}}</strong></td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" align="center">Data Kosong</td>
                        </tr>
                        @endforelse

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-body">
                    <p>Untuk pembayaran silahkan dapat transfer ke rekening di bawah ini:
                        <div class="media">
                            <img class="mr-3" src="{{ url('assets/bri.png')}}" alt="Bank BRI" width="70">
                            <div class="media-body">
                                <h5 class="mt-0">Bank BRI</h5>
                                No. Rekening 1139-0100-8312-504 atas nama <strong>Adi Fitrianto</strong>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>