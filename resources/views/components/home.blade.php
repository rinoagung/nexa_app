@extends('main')
@section('home')
    <div class="container">
        <section id="home" class="py-5">
            <div class="row">
                <div class="col-6 p-0">
                    <img src="{{ asset('storage/images/jumbotron_1.jpg') }}" class="img-fluid d-block ms-auto rounded-start-4"
                        alt="...">
                </div>
                <div class="col-6 p-0">
                    <div class="w-100 h-100 p-5 d-flex justify-content-center align-items-center flex-column rounded-end-4"
                        style="background-color: #EEEDEB">
                        <h1>SPECIAL <span style="color: #C29A74">COFFEE</span></h1>
                        <p class="text-center my-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit aliquam
                            quas
                            eius
                            nulla sed quia non
                            dolores saepe tenetur quaerat.</p>
                        <button class="btn btn-outline-dark rounded-pill">ORDER NOW</button>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="p-5">
                <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi sunt enim quaerat
                    aliquam, deserunt nisi
                    voluptatem illo aspernatur reprehenderit maxime magni aliquid nemo eaque laudantium?</p>
            </div>
        </section>
        <section id="products" class="py-5">
            <div class="d-flex justify-content-end align-items-center">
                <p class="fs-2 me-auto">SHOP BEST COFFEE</p>
                <a href="javascript:;" class="text-dark me-4">VIEW ALL</a>
                <button class="c_1_end m-1 btn btn-secondary"><i class="bi bi-caret-left"></i></button>
                <button class="c_1_start m-1 btn btn-dark"><i class="bi bi-caret-right"></i></button>
            </div>
            <div class="carousel_1">
                <div class="p-2">
                    <img src="{{ asset('storage/images/coffee_1.png') }}" class="img-fluid" alt="...">
                    <p class="mt-2">COFFEE LATTE</p>
                    <p style="color: #C29A74">Rp10.000</p>
                </div>
                <div class="p-2">
                    <img src="{{ asset('storage/images/coffee_2.png') }}" class="img-fluid" alt="...">
                    <p class="mt-2">ARABICAN</p>
                    <p style="color: #C29A74">Rp10.000</p>
                </div>
                <div class="p-2">
                    <img src="{{ asset('storage/images/coffee_3.png') }}" class="img-fluid" alt="...">
                    <p class="mt-2">MOCCA</p>
                    <p style="color: #C29A74">Rp10.000</p>
                </div>
                <div class="p-2">
                    <img src="{{ asset('storage/images/coffee_4.png') }}" class="img-fluid" alt="...">
                    <p class="mt-2">AMERICANO</p>
                    <p style="color: #C29A74">Rp10.000</p>
                </div>
                <div class="p-2">
                    <img src="{{ asset('storage/images/coffee_5.png') }}" class="img-fluid" alt="...">
                    <p class="mt-2">HAZELNUT</p>
                    <p style="color: #C29A74">Rp10.000</p>
                </div>
            </div>
        </section>
        <section id="categories" class="py-5">
            <div class="row">
                <div class="col-1">
                    <button class="c_2_end m-1 rounded-circle btn btn-secondary"><i class="bi bi-caret-left"></i></button>
                </div>
                <div class="col-10 px-5">
                    <div class="carousel_2">
                        <div>
                            <p class="text-center fst-italic">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium rerum porro fugiat eum
                                praesentium excepturi voluptates animi dolore perferendis ex repellat a veniam deleniti
                                facere
                                hic eius, recusandae ducimus. Obcaecati.
                            </p>
                        </div>
                        <div>
                            <p class="text-center fst-italic">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus labore facilis tenetur,
                                nobis quos accusantium molestiae pariatur culpa aliquam quidem velit, cumque perspiciatis
                                ipsum,
                                omnis quia quae esse sit maxime?
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-1">
                    <button class="c_2_start m-1 rounded-circle btn btn-dark"><i class="bi bi-caret-right"></i></button>
                </div>
            </div>
        </section>
        <section id="catalogs" class="py-5">
            <div class="row">
                <div class="col-3 p-0">
                    <img src="{{ asset('storage/images/thumb_1.png') }}" class="img-fluid" alt="...">
                </div>
                <div class="col-3 text-center d-flex justify-content-center align-items-center flex-column">
                    <p>MORNING COFFEE</p>
                    <small class="my-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, omnis.</small>
                    <p class="fw-bold text-decoration-underline" role="button">SHOP CATEGORY</p>
                </div>
                <div class="col-3 p-0">
                    <img src="{{ asset('storage/images/thumb_2.png') }}" class="img-fluid" alt="...">
                </div>
                <div class="col-3 text-center d-flex justify-content-center align-items-center flex-column">
                    <p>COFFEE & PAPPER</p>
                    <small class="my-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, omnis.</small>
                    <p class="fw-bold text-decoration-underline" role="button">SHOP CATEGORY</p>
                </div>
                <div class="col-3 text-center d-flex justify-content-center align-items-center flex-column">
                    <p>GREEN COFFEE</p>
                    <small class="my-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, omnis.</small>
                    <p class="fw-bold text-decoration-underline" role="button">SHOP CATEGORY</p>
                </div>
                <div class="col-3 p-0">
                    <img src="{{ asset('storage/images/thumb_3.png') }}" class="img-fluid" alt="...">
                </div>
                <div class="col-3 text-center d-flex justify-content-center align-items-center flex-column">
                    <p>OCEAN COFFEE</p>
                    <small class="my-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, omnis.</small>
                    <p class="fw-bold text-decoration-underline" role="button">SHOP CATEGORY</p>
                </div>
                <div class="col-3 p-0">
                    <img src="{{ asset('storage/images/thumb_4.png') }}" class="img-fluid" alt="...">
                </div>
            </div>
        </section>
        <section class="py-5">
            <div class="row">
                <div class="col-6 pe-5">
                    <p class="fs-2">NEW ARRIVALS</p>
                    <div class="d-flex mt-2 align-items-center">
                        <img src="{{ asset('storage/images/product_1.png') }}" style="width: 70px"
                            class="img-fluid rounded-circle" alt="...">
                        <div>
                            <p class="ms-3 m-0 fw-bold">BREAD COFFEE</p>
                            <p class="ms-3 m-0">Lorem, ipsum dolor.</p>
                        </div>
                        <div class="ms-auto">
                            Rp8.000
                        </div>
                    </div>
                    <div class="d-flex mt-2 align-items-center">
                        <img src="{{ asset('storage/images/product_2.png') }}" style="width: 70px"
                            class="img-fluid rounded-circle" alt="...">
                        <div>
                            <p class="ms-3 m-0 fw-bold">GAME COFFEE</p>
                            <p class="ms-3 m-0">Lorem, ipsum dolor.</p>
                        </div>
                        <div class="ms-auto">
                            Rp13.000
                        </div>
                    </div>
                    <div class="d-flex mt-2 align-items-center">
                        <img src="{{ asset('storage/images/product_3.png') }}" style="width: 70px"
                            class="img-fluid rounded-circle" alt="...">
                        <div>
                            <p class="ms-3 m-0 fw-bold">MINI COFFEE</p>
                            <p class="ms-3 m-0">Lorem, ipsum dolor.</p>
                        </div>
                        <div class="ms-auto">
                            Rp11.000
                        </div>
                    </div>
                    <div class="d-flex mt-2 align-items-center">
                        <img src="{{ asset('storage/images/product_4.png') }}" style="width: 70px"
                            class="img-fluid rounded-circle" alt="...">
                        <div>
                            <p class="ms-3 m-0 fw-bold">PINEAPPLE COFFEE</p>
                            <p class="ms-3 m-0">Lorem, ipsum dolor.</p>
                        </div>
                        <div class="ms-auto">
                            Rp45.000
                        </div>
                    </div>
                    <div class="d-flex mt-2 align-items-center">
                        <img src="{{ asset('storage/images/product_5.png') }}" style="width: 70px"
                            class="img-fluid rounded-circle" alt="...">
                        <div>
                            <p class="ms-3 m-0 fw-bold">LAVENDER COFFEE</p>
                            <p class="ms-3 m-0">Lorem, ipsum dolor.</p>
                        </div>
                        <div class="ms-auto">
                            Rp34.000
                        </div>
                    </div>
                    <p class="fw-bold text-decoration-underline mt-4" role="button">VIEW ALL</p>
                </div>
                <div class="col-6 ps-5">
                    <p class="fs-2">BEST SELLING</p>
                    <div class="d-flex mt-2 align-items-center">
                        <img src="{{ asset('storage/images/product_6.png') }}" style="width: 70px"
                            class="img-fluid rounded-circle" alt="...">
                        <div>
                            <p class="ms-3 m-0 fw-bold">COFFEE BEANS</p>
                            <p class="ms-3 m-0">Lorem, ipsum dolor.</p>
                        </div>
                        <div class="ms-auto">
                            Rp17.000
                        </div>
                    </div>
                    <div class="d-flex mt-2 align-items-center">
                        <img src="{{ asset('storage/images/product_7.png') }}" style="width: 70px"
                            class="img-fluid rounded-circle" alt="...">
                        <div>
                            <p class="ms-3 m-0 fw-bold">CARAMEL COFFEE</p>
                            <p class="ms-3 m-0">Lorem, ipsum dolor.</p>
                        </div>
                        <div class="ms-auto">
                            Rp18.000
                        </div>
                    </div>
                    <div class="d-flex mt-2 align-items-center">
                        <img src="{{ asset('storage/images/product_8.png') }}" style="width: 70px"
                            class="img-fluid rounded-circle" alt="...">
                        <div>
                            <p class="ms-3 m-0 fw-bold">PANDAN LEAVES COFFEE</p>
                            <p class="ms-3 m-0">Lorem, ipsum dolor.</p>
                        </div>
                        <div class="ms-auto">
                            Rp6.000
                        </div>
                    </div>
                    <div class="d-flex mt-2 align-items-center">
                        <img src="{{ asset('storage/images/product_9.png') }}" style="width: 70px"
                            class="img-fluid rounded-circle" alt="...">
                        <div>
                            <p class="ms-3 m-0 fw-bold">LIME COFFEE</p>
                            <p class="ms-3 m-0">Lorem, ipsum dolor.</p>
                        </div>
                        <div class="ms-auto">
                            Rp14.000
                        </div>
                    </div>
                    <div class="d-flex mt-2 align-items-center">
                        <img src="{{ asset('storage/images/product_10.png') }}" style="width: 70px"
                            class="img-fluid rounded-circle" alt="...">
                        <div>
                            <p class="ms-3 m-0 fw-bold">COFFEE POWDER</p>
                            <p class="ms-3 m-0">Lorem, ipsum dolor.</p>
                        </div>
                        <div class="ms-auto">
                            Rp12.000
                        </div>
                    </div>
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
                <div class="p-2">
                    <img src="{{ asset('storage/images/coffee_1.png') }}" class="rounded-4 img-fluid" alt="...">
                    <p class="mt-2">IS COFFEE LATTE DELICIOUS?</p>
                    <small style="color: #C29A74">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis,
                        delectus?</small>
                </div>
                <div class="p-2">
                    <img src="{{ asset('storage/images/thumb_2.png') }}" class="rounded-4 img-fluid" alt="...">
                    <p class="mt-2">DRINK COFFEE IN THE MORNING</p>
                    <small style="color: #C29A74">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis,
                        delectus?</small>
                </div>
                <div class="p-2">
                    <img src="{{ asset('storage/images/product_8.png') }}" class="rounded-4 img-fluid" alt="...">
                    <p class="mt-2">BETTER COFFEE OR TEA?</p>
                    <small style="color: #C29A74">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis,
                        delectus?</small>
                </div>
                <div class="p-2">
                    <img src="{{ asset('storage/images/product_6.png') }}" class="rounded-4 img-fluid" alt="...">
                    <p class="mt-2">PREMIUM COFFEE BEANS</p>
                    <small style="color: #C29A74">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis,
                        delectus?</small>
                </div>
            </div>
        </section>
        <section class="py-5">
            <p class="fs-2 mb-3">FOLLOW OUR INSTAGRAM</p>
            <div class="row">
                <div class="col-2">
                    <img src="{{ asset('storage/images/ig_1.png') }}" class="img-fluid d-block m-auto rounded-4"
                        alt="...">
                </div>
                <div class="col-2">
                    <img src="{{ asset('storage/images/ig_2.png') }}" class="img-fluid d-block m-auto rounded-4"
                        alt="...">
                </div>
                <div class="col-2">
                    <img src="{{ asset('storage/images/ig_3.png') }}" class="img-fluid d-block m-auto rounded-4"
                        alt="...">
                </div>
                <div class="col-2">
                    <img src="{{ asset('storage/images/ig_4.png') }}" class="img-fluid d-block m-auto rounded-4"
                        alt="...">
                </div>
                <div class="col-2">
                    <img src="{{ asset('storage/images/ig_5.png') }}" class="img-fluid d-block m-auto rounded-4"
                        alt="...">
                </div>
                <div class="col-2">
                    <img src="{{ asset('storage/images/ig_6.png') }}" class="img-fluid d-block m-auto rounded-4"
                        alt="...">
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
