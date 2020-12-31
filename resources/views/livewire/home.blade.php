<div class="container">

    {{--  BUAT BERANDA  --}}
    <div class="banner">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
    
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="https://i01.appmifile.com/webfile/globalweb/liran/notime9c.png" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="https://i01.appmifile.com/webfile/globalweb/liran/notimeJ20C.png" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="https://i01.appmifile.com/webfile/globalimg/id/cms/648D49AE-A03E-AE5B-3878-D114CC87EB74.jpg" alt="Third slide">
                </div>
            </div>
    
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    {{--  PILIH KATEGORI  --}}
    <section class="pilih-kategori mt-4">
        <h3><strong>Pilih Kategori</strong></h3>
        <div class="row mt-4">
            <div class="col-md-3">
                <div class="card shadow" style="width: 15rem;">
                    <a href="/products/elektronika/2">
                        <img src="{{ url('assets/kategori/realme-c11.png') }}" class="card-img-top" alt="handphone">
                    </a>
                    <div class="card-body">
                        <p class="card-text text-center font-weight-bold">Handphone</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card shadow" style="width: 15rem;">
                    <a href="/products/elektronika/3">
                        <img src="{{ url('assets/kategori/zyrex.jpg') }}" class="card-img-top" alt="Laptop">
                    </a>
                    <div class="card-body">
                        <p class="card-text text-center font-weight-bold">Laptop</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card shadow" style="width: 15rem;">
                    <a href="/products/elektronika/4">
                        <img src="{{ url('assets/kategori/philips-24inch.jpg') }}" class="card-img-top" alt="Monitor">
                    </a>
                    <div class="card-body">
                        <p class="card-text text-center font-weight-bold">Monitor</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card shadow" style="width: 15rem;">
                    <a href="/products/elektronika/1">
                        <img src="{{ url('assets/kategori/oontz.jpg') }}" class="card-img-top" alt="Aksesoris Komputer">
                    </a>
                    <div class="card-body">
                        <p class="card-text text-center font-weight-bold">Aksesoris Komputer</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{--  BEST PRODUCTS  --}}
    <section class="products mt-5 mb-5">
        <h3>
            <strong>Produk Terlaris</strong>
            <a href="{{ route('products') }}" class="btn btn-dark float-right"><i class="fas fa-eye"> Lihat
                    Semua</i></a>
        </h3>
        <div class="row mt-4">
            @foreach ($products as $product)
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body text-center">
                        <img src="{{ url('assets/all_product') }}/{{ $product->gambar }}" class="img-fluid"
                            alt="all_product">
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <br>
                                <h5><strong>{{ $product->nama }}</strong></h5>
                                <h5>Rp. {{ number_format($product->harga) }}</h5>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <a href="{{ route('product-detail', $product->id) }}" class="btn btn-dark btn-block"><i
                                        class="fas fa-bullseye"> Detail</i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
</div>