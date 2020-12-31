<div class="container">
    <div class="row mt-4 mb-2">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-dark">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('keranjang') }}" class="text-dark">Keranjang</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Checkout</li>
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
            <a href="{{ route('keranjang') }}" class="btn btn-sm btn-dark"><i class="fas fa-arrow-alt-circle-left"></i>
                Kembali</a>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col">
            <h4>Informasi Pembayaran</h4>
            <hr>
            <p>Untuk pembayaran silahkan dapat transfer ke rekening di bawah ini sebesar : <strong>Rp.
                    {{ number_format($total_harga) }}</strong> </p>
            <div class="media">
                <img class="mr-3" src="{{ url('assets/bri.png')}}" alt="Bank BRI" width="70">
                <div class="media-body">
                    <h5 class="mt-0">Bank BRI</h5>
                    No. Rekening 1139-0100-8312-504 atas nama <strong>Adi Fitrianto</strong>
                </div>
            </div>
        </div>
        <div class="col">
            <h4>Informasi Pengiriman</h4>
            <hr>
            <form wire:submit.prevent="checkout">
                <div class="form-group">
                    <label for=""> No. HP</label>
                    <input id="no_hp" type="text" class="form-control @error('no_hp') is-invalid @enderror"
                        wire:model="no_hp" value="{{ old('no_hp') }}" autocomplete="name" autofocus>

                    @error('no_hp')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="">Alamat</label>
                    <textarea wire:model="alamat" class="form-control @error('alamat') is-invalid @enderror"></textarea>

                    @error('alamat')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <button type="submit" class="btn btn-success btn-block"><i class="fas fa-arrow-alt-circle-right"></i>
                    Checkout</button>
            </form>
        </div>
    </div>
</div>