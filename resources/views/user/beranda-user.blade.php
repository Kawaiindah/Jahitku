@extends('user.index-user')

@section('container')
    <section class="bg-body-tertiary mx-md-4 mx-0 my-4 mb-5 overflow-hidden rounded" id="carousel-section">
        <div id="carouselExampleDark" class="carousel carousel-dark slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                    <img src="{{ asset('image/carousel/beranda1.jpg') }}" class="d-block w-100"
                        style="max-height: 355px" alt="{{ asset('image/carousel/carousel (1).png') }}">
                    <div class="carousel-caption d-none d-md-block">
                        {{-- <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p> --}}
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="{{ asset('image/carousel/beranda4.jpg') }}" class="d-block w-100"
                        style="max-height: 355px" alt="{{ asset('image/carousel/carousel (2).png') }}">
                    <div class="carousel-caption d-none d-md-block">
                        {{-- <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p> --}}
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <section data-aos="fade-up" class="feature-section reveal active my-4 mb-5" id="feature-promo-section ">
        <div class="container-features container">
            <!-- Judul Feature -->
            <div class="header my-5 mb-3 mt-5">
                <h2 class="section-title text-center">Kenapa Memilih Jahitku ?</h2>
            </div>
            <div class="row g-3">
                <div class="col-12 col-md-4">
                    <!-- Feature list 1 -->
                    <div class="row g-3">
                        <!-- Item list ke-1 -->
                        <div class="col-12">
                            <div class="features-card rounded border px-3 py-2">
                                <div class="row">
                                    <div class="icon col-4">
                                        <img src="{{ asset('image/why-choose-us/icon-featured (1).png') }}"
                                            alt="icon-featured (1).png" class="img-fluid">
                                    </div>
                                    <div class="content col">
                                        <h3 class="h3 title">Estimasi Waktu</h3>
                                        <p class="text">
                                           Memberikan waktu pengerjaan yang sesuai.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Item list ke-2 -->
                        <div class="col-12">
                            <div class="features-card rounded border px-3 py-2">
                                <div class="row">
                                    <div class="icon col-4">
                                        <img src="{{ asset('image/why-choose-us/icon-featured (4).png') }}"
                                            alt="icon-featured (1).png" class="img-fluid">
                                    </div>
                                    <div class="content col">
                                        <h3 class="h3 title">Biaya Sesuai Kantong</h3>
                                        <p class="text">
                                            Memberikan biaya yang sesuai budget anda.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <!-- Feature Banner image -->
                    <div class="features-banner text-center">
                        <img src="{{ asset('image/why-choose-us/whychooseus.png') }}" width="369" height="318"
                            loading="lazy" alt="Features Banner" class="banner-animation img-fluid">
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <!-- Feature list 2 -->
                    <div class="row g-3">
                        <!-- Item list ke-3 -->
                        <div class="col-12">
                            <div class="features-card rounded border px-3 py-2">
                                <div class="row">
                                    <div class="icon col-4">
                                        <img src="{{ asset('image/why-choose-us/icon-featured (2).png') }}"
                                            alt="icon-featured (1).png" class="img-fluid">
                                    </div>
                                    <div class="content col">
                                        <h3 class="h3 title">Berkualitas</h3>
                                        <p class="text">
                                            Memberikan hasil yang berkualitisa sesuai keinginan anda.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Item list ke-4 -->
                        <div class="col-12">
                            <div class="features-card rounded border px-3 py-2">
                                <div class="row">
                                    <div class="icon col-4">
                                        <img src="{{ asset('image/why-choose-us/icon-featured (3).png') }}"
                                            alt="icon-featured (1).png" class="img-fluid">
                                    </div>
                                    <div class="content col">
                                        <h3 class="h3 title">Pembayaran Yang Mudah</h3>
                                        <p class="text">
                                            Memberikan pembayaran yang mudah dilakukan.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="product-section reveal active my-4 mb-5" id="product-recom-section ">
        <!-- Judul dan Deskripsi Recom Section -->
        <div class="header my-5 mb-3 mt-5" data-aos="fade-up">
            <h2 class="section-title text-center">Rekomendasi <span class="title-span">Penjahit</span></h2>
            <p class="text-center">Cari Penjahit sesuai kebutuhan anda
                organisme.</p>
        </div>

        <!-- Product Recommendation List -->
        <div class="pro-container container">
            <div class="row g-3">
                @foreach ($products as $product)
                    <div class="col-6 col-lg-3" data-aos="zoom-in-down">
                        <a class="text-decoration-none" href="{{ route('detail', ['id' => $product->id]) }}">
                            <div class="pro-card rounded border p-3">
                                <!-- image product -->
                                <div class="pro-image rounded">
                                    @if ($product->detailGambarProduct->isNotEmpty())
                                        <img src="{{ asset('image/product/' . $product->detailGambarProduct[0]->gambar) }}"
                                            alt="{{ $product->nama_product }}" class="pro-animation img-fluid rounded"
                                            loading="lazy">
                                    @endif
                                </div>


                                <!-- product info -->
                                <div class="des-pro">
                                    <h5 class="judul-card my-2">{{ $product->nama_product }}</h5>
                                    <!-- Rating Produk -->
                                    <div class="rating-wrapper">
                                        @php
                                            $rating = floatval($product->rating);
                                        @endphp

                                        @for ($i = 1; $i <= 5; $i++)
                                            @if ($i <= $rating)
                                                <i class="fas fa-star text-warning"></i>
                                            @elseif ($i - 0.5 <= $rating)
                                                <i class="fas fa-star-half-alt text-warning"></i>
                                            @else
                                                <i class="fas fa-star"></i>
                                            @endif
                                        @endfor
                                    </div>
                                    <p class="harga-card m-0">{{ rupiah($product->harga) }}</p>
                                    <p class="lokasi-card m-0"><i class="fa-solid fa-location-dot"></i>
                                        {{ $product->toko->kota }}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
