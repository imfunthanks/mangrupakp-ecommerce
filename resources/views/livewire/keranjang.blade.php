<div class="container">
    <div class="cart-header">
        <div class="row my-2 text-center">
            <div class="col">
                <h3 class="font-weight-bold">Your Cart</h3>
                <p>Pastikan barang anda terbayar lunas</p>
            </div>
        </div>
    </div>

    <div class="row mt-4 mb-2">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-dark">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Keranjang</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            @if(session()->has('message'))
            <div class="alert alert-info">
                {{ session ('message') }}
            </div>
            @endif
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="table-responsive">
                <table class="table text-center">
                    <thead>
                        <tr>
                            <td>No.</td>
                            <td>Gambar</td>
                            <td>Keterangan</td>
                            <td>Jumlah</td>
                            <td>Harga</td>
                            <td><strong>Total Harga</strong></td>
                            <td></td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1?>
                        @forelse ($pesanan_details as $pesanan_detail)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>
                                <img src="{{ url('assets/all_product') }}/{{ $pesanan_detail->product->gambar }}"
                                    class="img-fluid" width="200" alt="all_product">
                            </td>
                            <td>
                                {{ $pesanan_detail->product->nama }}
                            </td>
                            <td>{{ $pesanan_detail->jumlah_pesanan }}</td>
                            <td>Rp. {{ number_format( $pesanan_detail->product->harga) }}</td>
                            <td><strong>Rp. {{ number_format( $pesanan_detail->total_harga) }}</strong></td>
                            <td>
                                <i wire:click="destroy({{ $pesanan_detail->id }})" class="fas fa-trash text-danger"></i>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" align="center">Data Kosong</td>
                        </tr>
                        @endforelse

                        @if(!empty($pesanan))
                        <tr>
                            <td colspan="5" align="right"><strong>Total Harga : </strong></td>
                            <td><strong>Rp. {{ number_format( $pesanan->total_harga) }}</strong></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td colspan="5" align="right"><strong>Kode Unik : </strong></td>
                            <td><strong>Rp. {{ number_format( $pesanan->kode_unik) }}</strong></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td colspan="5" align="right"><strong>Total Yang Harus Dibayarkan : </strong></td>
                            <td><strong>Rp. {{ number_format( $pesanan->total_harga+$pesanan->kode_unik) }}</strong>
                            <td></td>
                            </td>
                        </tr>
                        <td colspan="5"></td>
                        <td colspan="2">
                            <a href="{{ route('checkout') }}" class="btn btn-success btn-block">
                                <i class="fas fa-arrow-circle-right"></i> Checkout
                            </a>
                        </td>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>