@extends('main')
@section('home')
    <div class="container">
        <section id="home" class="py-5">
            <div class="row">
                <div class="col-6 p-0">
                    <img src="{{ asset('images/jumbotron_1.jpg') }}" class="img-fluid d-block ms-auto rounded-start-4"
                        alt="...">
                </div>
                <div class="col-6 p-0">
                    <div class="w-100 h-100 p-5 d-flex justify-content-center align-items-center flex-column rounded-end-4"
                        style="background-color: #EEEDEB">
                        <h1>SPECIAL <span style="color: #C29A74">COFFEE</span></h1>
                        <p class="text-center my-3">Dibuat dengan bahan kopi premium dan berkualitas serta diracik secara
                            profesional di setiap tetesnya.</p>
                        <button class="btn btn-outline-dark rounded-pill">ORDER NOW</button>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="p-5">
                <p class="text-center">Menyediakan pengalaman ngopi terbaik dengan cita rasa autentik, suasana nyaman, serta
                    layanan berkualitas, menciptakan tempat berkumpul yang inspiratif bagi pecinta kopi dan komunitas
                    kreatif.</p>
            </div>
        </section>
        <section id="products" class="py-5">
            <div class="d-flex justify-content-end align-items-center">
                <p class="fs-2 me-auto">SHOP BEST COFFEE</p>
                <a href="javascript:;" class="text-dark me-4">VIEW ALL</a>
                <button class="c_1_start m-1 btn btn-secondary"><i class="bi bi-caret-left"></i></button>
                <button class="c_1_end m-1 btn btn-dark"><i class="bi bi-caret-right"></i></button>
            </div>
            <div class="carousel_1">
                @foreach ($products as $p)
                    <div class="p-2">
                        <img src="{{ asset('images/' . $p->gambar) }}" class="img-fluid" alt="...">
                        <p class="mt-2">{{ $p->nama_produk }}</p>
                        <p style="color: #C29A74">Rp{{ number_format($p->harga, 0, ',', '.') }}</p>
                    </div>
                @endforeach
            </div>
        </section>
        <section id="categories" class="py-5">
            <div class="row">
                <div class="col-1">
                    <button class="c_2_start m-1 rounded-circle btn btn-secondary"><i class="bi bi-caret-left"></i></button>
                </div>
                <div class="col-10 px-5">
                    <div class="carousel_2">
                        <div>
                            <p class="text-center fst-italic">
                                Secangkir kopi bukan sekadar minuman, tetapi cerita yang tersaji dalam aroma, rasa, dan
                                momen yang menghubungkan hati, pikiran, serta persahabatan tanpa batas.
                            </p>
                        </div>
                        <div>
                            <p class="text-center fst-italic">
                                Kopi mengajarkan kesabaran, dari biji yang dipetik hingga tetes terakhir dalam cangkir,
                                mengingatkan bahwa proses adalah bagian penting dari perjalanan hidup.
                            </p>
                        </div>
                        <div>
                            <p class="text-center fst-italic">
                                Setiap tegukan kopi membawa kehangatan, bukan hanya untuk tubuh tetapi juga jiwa, menjadikan
                                pagi lebih berarti dan percakapan lebih bermakna bagi semua.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-1">
                    <button class="c_2_end m-1 rounded-circle btn btn-dark"><i class="bi bi-caret-right"></i></button>
                </div>
            </div>
        </section>
        <section id="catalogs" class="py-5">
            <div class="row">
                @foreach ($categories->take(2) as $k)
                    <div class="col-3 p-0">
                        <img src="{{ asset('images/' . $k->gambar) }}" class="img-fluid" alt="...">
                    </div>
                    <div class="col-3 text-center d-flex justify-content-center align-items-center flex-column">
                        <p>{{ $k->nama_kategori }}</p>
                        <small class="my-2">{{ $k->deskripsi }}</small>
                        <p class="fw-bold text-decoration-underline" role="button">SHOP CATEGORY</p>
                    </div>
                @endforeach
                @foreach ($categories->skip(2) as $k)
                    <div class="col-3 text-center d-flex justify-content-center align-items-center flex-column">
                        <p>{{ $k->nama_kategori }}</p>
                        <small class="my-2">{{ $k->deskripsi }}</small>
                        <p class="fw-bold text-decoration-underline" role="button">SHOP CATEGORY</p>
                    </div>
                    <div class="col-3 p-0">
                        <img src="{{ asset('images/' . $k->gambar) }}" class="img-fluid" alt="...">
                    </div>
                @endforeach
            </div>
        </section>
        <section class="py-5">
            <div class="row">
                <div class="col-6 pe-5">
                    <p class="fs-2">NEW ARRIVALS</p>
                    @foreach ($new_products as $np)
                        <div class="d-flex mt-2 align-items-center">
                            <img src="{{ asset('images/' . $np->gambar) }}" style="width: 70px"
                                class="img-fluid rounded-circle" alt="...">
                            <div>
                                <p class="ms-3 m-0 fw-bold">{{ $np->nama_produk }}</p>
                                <p class="ms-3 m-0">{{ $np->deskripsi }}</p>
                            </div>
                            <div class="ms-auto">
                                Rp{{ number_format($np->harga, 0, ',', '.') }}
                            </div>
                        </div>
                    @endforeach
                    <p class="fw-bold text-decoration-underline mt-4" role="button">VIEW ALL</p>
                </div>
                <div class="col-6 ps-5">
                    <p class="fs-2">BEST SELLING</p>
                    @foreach ($best_products as $bp)
                        <div class="d-flex mt-2 align-items-center">
                            <img src="{{ asset('images/' . $bp->gambar) }}" style="width: 70px"
                                class="img-fluid rounded-circle" alt="...">
                            <div>
                                <p class="ms-3 m-0 fw-bold">{{ $bp->nama_produk }}</p>
                                <p class="ms-3 m-0">{{ $bp->deskripsi }}</p>
                            </div>
                            <div class="ms-auto">
                                Rp{{ number_format($bp->harga, 0, ',', '.') }}
                            </div>
                        </div>
                    @endforeach
                    <p class="fw-bold text-decoration-underline mt-4" role="button">VIEW ALL</p>
                </div>
            </div>
        </section>
        <section id="social_media" class="py-5">
            <div class="d-flex flex-column">
                <p class="fs-1 text-center">SUBSCRIBE US</p>
                <p class="text-center my-3">Follow our social media to get more info.</p>
                <button class="btn btn-outline-dark px-4 rounded-pill m-auto">SUBSCRIBE</button>
                <div class="m-auto text-secondary mt-4" style="letter-spacing: 10px;">
                    <i class="bi bi-facebook" role="button"></i>
                    <i class="bi bi-instagram" role="button"></i>
                    <i class="bi bi-twitter-x" role="button"></i>
                    <i class="bi bi-linkedin" role="button"></i>
                    <i class="bi bi-youtube" role="button"></i>
                </div>
            </div>
        </section>
        <section class="py-5">
            <hr class="border-secondary border-1 opacity-50">
            <div class="d-flex">
                <div class="text-center p-3">
                    <i class="bi bi-clock-history fs-2"></i>
                    <p>QUICK DELIVERY</p>
                    <small>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odit, in!</small>
                </div>
                <div class="text-center p-3">
                    <i class="bi bi-gem fs-2"></i>
                    <p>PREMIUM</p>
                    <small>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odit, in!</small>
                </div>
                <div class="text-center p-3">
                    <i class="bi bi-cup-hot fs-2"></i>
                    <p>FRESH</p>
                    <small>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odit, in!</small>
                </div>
                <div class="text-center p-3">
                    <i class="bi bi-telephone fs-2"></i>
                    <p>24H SUPPORT</p>
                    <small>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odit, in!</small>
                </div>
            </div>
            <hr class="border-secondary border-4 opacity-50">
        </section>
        <section id="blogs" class="py-5">
            <p class="fs-2 mb-3">READ OUR BLOGS</p>
            <div class="carousel_3">
                @foreach ($blogs as $b)
                    <div class="p-2">
                        <img src="{{ asset('images/' . $b->gambar) }}" class="rounded-4 img-fluid" alt="...">
                        <p class="mt-2">{{ $b->judul_blog }}</p>
                        <small style="color: #C29A74">{{ $b->excerpt }}</small>
                    </div>
                @endforeach
            </div>
        </section>
        <section class="py-5">
            <p class="fs-2 mb-3">FOLLOW OUR INSTAGRAM</p>
            <div class="row">
                <div class="col-2">
                    <img src="{{ asset('images/ig_1.png') }}" class="img-fluid d-block m-auto rounded-4" alt="...">
                </div>
                <div class="col-2">
                    <img src="{{ asset('images/ig_2.png') }}" class="img-fluid d-block m-auto rounded-4" alt="...">
                </div>
                <div class="col-2">
                    <img src="{{ asset('images/ig_3.png') }}" class="img-fluid d-block m-auto rounded-4" alt="...">
                </div>
                <div class="col-2">
                    <img src="{{ asset('images/ig_4.png') }}" class="img-fluid d-block m-auto rounded-4" alt="...">
                </div>
                <div class="col-2">
                    <img src="{{ asset('images/ig_5.png') }}" class="img-fluid d-block m-auto rounded-4" alt="...">
                </div>
                <div class="col-2">
                    <img src="{{ asset('images/ig_6.png') }}" class="img-fluid d-block m-auto rounded-4" alt="...">
                </div>
            </div>
        </section>
        <footer class="py-5">
            <div class="row">
                <div class="col-3 d-flex flex-column lh-lg">
                    <a href="#home" class="text-decoration-none text-dark">HOME</a>
                    <a href="#products" class="text-decoration-none text-dark">PRODUCTS</a>
                    <a href="#categories" class="text-decoration-none text-dark">CATEGORIES</a>
                </div>
                <div class="col-3 d-flex flex-column lh-lg">
                    <a href="#catalogs" class="text-decoration-none text-dark">CATALOGS</a>
                    <a href="#social_media" class="text-decoration-none text-dark">SOCIAL MEDIA</a>
                    <a href="#blogs" class="text-decoration-none text-dark">BLOGS</a>
                </div>
                <div class="col-3 d-flex flex-column lh-lg">
                    <a href="javscript:;" class="text-decoration-none text-dark">TERMS & CONDITIONS</a>
                    <a href="javscript:;" class="text-decoration-none text-dark">SERVICES</a>
                    <a href="javscript:;" class="text-decoration-none text-dark">PRIVACY POLICY</a>
                </div>
                <div class="col-3 d-flex flex-column lh-lg">
                    <a href="javscript:;" class="text-decoration-none text-dark">ADDRESS LOCATION</a>
                    <a href="javscript:;" class="text-decoration-none text-dark">BUSSINESS</a>
                    <a href="javscript:;" class="text-decoration-none text-dark">+021 7412 123</a>
                </div>
            </div>
            <hr class="border-secondary my-5 border-2 opacity-75">
            <p class="text-center">Copyright &copy; Rino Agung Priyo U.</p>

        </footer>
    </div>
@endsection
