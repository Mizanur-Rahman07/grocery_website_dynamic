@extends('frontEnd.master')
@section('title')
Grocery || Home
@endsection

@section('content')

<section id="Organic_Grocery" class="pb-5 paddingTop">
    <div class="container">
        <div class="row">
            <div class="col_md_3_change mb-3">
                @foreach ($pro_offer1 as $product)
                <div class=" background-res d-flex justify-content-start align-items-center organic_img_1" style="background-image: url({{ asset($product->image)}})">
                    <div class="ogranicText1 ms-3">
                        <p>{{ substr($product->brand,0,17)}}</p>
                        <h2>{{ substr($product->product_name,0,16)}}</h2>
                        <h6>{{($product->discount)}}</h6>
                        <div class="organic_btn">
                            <a href="" class="btn btn-outline-dark my-3 rounded-pill">Shop Now</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="col-md-5 res_col_5 mb-3">
                @foreach ($pro_offer2 as $product)
                <div class=" background-res d-flex justify-content-center align-items-center organic_img_1 " style="background-image: url({{ asset($product->image)}});">
                    <div class="ogranicText2 text-center">
                        <h3>{{ substr($product->brand,0,17)}}</h3>
                        <h2>{{ substr($product->product_name,0,16)}}</h2>
                        <h6>{{($product->discount)}}</h6>
                        <div class="organic_btn">
                            <a href="" class="btn btn-outline-dark my-3 rounded-pill">Shop Now</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="col_md_3_change mb-3">
                @foreach ($pro_offer3 as $product)
                <div class=" background-res d-flex justify-content-end align-items-center organic_img_3 mb-4" style="background-image: url({{ asset($product->image)}});">
                    <div class="ogranicText3 me-3">
                        <p>{{ substr($product->brand,0,17)}}</p>
                        <h3>{{ substr($product->product_name,0,16)}}</h3>
                        <p>{{($product->discount)}}</p>
                        <div class="organic_btn">
                            <a href="" class="btn btn-outline-dark my-3 rounded-pill">Shop Now</a>
                        </div>
                    </div>
                </div>
                @endforeach
                @foreach ($pro_offer4 as $product)
                <div class="col_md_3_res background-res d-flex justify-content-start align-items-center organic_img_3" style="background-image: url({{ asset($product->image)}});">
                    <div class="ogranicText4 ms-3">
                        <p>{{ substr($product->brand,0,17)}}</p>
                        <h3>{{ substr($product->product_name,0,16)}}</h3>
                        <p>{{($product->discount)}}</p>
                        <div class="organic_btn">
                            <a href="" class="btn btn-outline-dark my-3 rounded-pill">Shop Now</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<section id="cta" class="mb-5">
    <div class="container">
        <div class="col-md-12">
            <div class="row">
                @foreach ($pro_add as $product)
                <div class="col_8_change cta">
                    <div class="cta_group text-center">
                        <img src="{{ asset($product->image)}}" alt="" srcset="">
                        <h5 class="py-2">{{ substr($product->product_name,0,14)}}</h5>
                        <p class="cta_p text-muted pb-3">{{ substr($product->available_size,0,12)}}</p>
                        <div class="cta_btn">
                            <a href="#" class="btn btn-outline-dark">Go
                                Now ></a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<section id="Feature_product" class="mb-5">
    <div class="container">
        <h2 class="pt-4 pb-2"><span class="ftColor py-3">Featured</span> Product</h2>
        <div class="planLine_2 mb-4"></div>
        <div class="responsive">
            @foreach ($feature_products as $product)
            <div class="slick_slide">
                <div class="featured_col f_border text-center">
                    <div class="h_S_N_S h_S_N_S_sale">
                        <p>Sale</p>
                    </div>
                    <div class="featured_img">
                        <img src="{{ asset($product->image) }}" alt="" srcset="">
                    </div>
                    <div class="featured_cartIcon">
                        <a href="#"><i class="fa-regular fa-eye"></i></a>
                        <a href="#"><i class="fa-solid fa-arrow-right-arrow-left"></i></a>
                        <a href="#"><i class="fa-regular fa-heart"></i></a>
                    </div>
                    <div class="featured_content">
                        <p class="text-muted mt-4">By {{ substr($product->brand,0,17)}}</p>
                        <h2>{{ substr($product->product_name,0,16)}}</h2>
                        <h6 class="featured_icon text-warning">
                            <i class="fas fa-star "></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </h6>
                        <p class="text-muted">Unit : {{ $product->available_size}}</p>
                        <h4>
                            <span class="ftColor">৳ {{ $product->product_price}}</span>
                            <small><s class="text-secondary">৳ {{ $product->old_price}}</s></small>
                        </h4>
                        <div class="featured_btn">
                            <a href="" class="btn btn-outline-dark my-3 rounded-pill"> <i class="fas fa-shopping-cart"></i> Add To Cart</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section id="Organic_Food" class="py-5">
    <div class="container">
        <div class="row">
            @foreach ($pro_offer5 as $product)
            <div class="col-md-4">
                <div class=" background-res d-flex justify-content-start align-items-center organFood_img_1 " style="background-image: url({{ asset($product->image)}});">
                    <div class="ogranicFoodText2 ms-3">
                        <p>{{ substr($product->brand,0,24)}}</p>
                        <h3>{{ substr($product->product_name,0,35)}}</h3>
                        <h6>{{($product->discount)}}</h6>
                        <div class="organic_btn">
                            <a href="" class="btn btn-outline-dark my-3 rounded-pill">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section id="Exclusive_Product" class="py-5">
    <div class="container">
        <h2 class="py-4"><span class="ftColor">Exclusive</span> Product</h2>
        <ul class="nav nav-pills mb-3 " id="pills-tab" role="tablist">
            <li class="nav-item mb-1" role="presentation">
                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-fruits" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Fruits </button>
            </li>
            <li class="nav-item mb-1" role="presentation">
                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-bakery" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Bakery</button>
            </li>
            <li class="nav-item mb-1" role="presentation">
                <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-fetured" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Fetured</button>
            </li>
            <li class="nav-item mb-1" role="presentation">
                <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-recent" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Recent</button>
            </li>
            <li class="nav-item mb-1" role="presentation">
                <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-frozen" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Freozen</button>
            </li>
        </ul>
        <div class="planLine_2 mb-4"></div>

        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-fruits" role="tabpanel" aria-labelledby="pills-home-tab">
                <section id="Feature_product" class="mb-5">
                    <div class="container">
                        <div class="row">
                            <div class="col_5_change mb-3">
                                <div class="featured_col f_border text-center">
                                    <div class="h_S_N_S h_S_N_S_hot">
                                        <p>HOT</p>
                                    </div>
                                    <div class="featured_img">
                                        <img src="assets/img/home-1/f1.png" alt="" srcset="" />
                                    </div>
                                    <div class="featured_cartIcon">
                                        <a href="#"><i class="fa-regular fa-eye"></i></a>
                                        <a href="#"><i class="fa-solid fa-arrow-right-arrow-left"></i></a>
                                        <a href="#"><i class="fa-regular fa-heart"></i></a>
                                    </div>
                                    <div class="featured_content">
                                        <p class="text-muted mt-4">By.Organic Fruits Ltd</p>
                                        <h2>Organic Strawberry</h2>
                                        <h6 class="featured_icon text-warning">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </h6>
                                        <p class="text-muted">Unit : 500gm</p>
                                        <h4>
                                            <span class="ftColor">$300</span>
                                            <small><s class="text-secondary">$500</s></small>
                                        </h4>
                                        <div class="featured_btn">
                                            <a href="" class="btn btn-outline-dark my-3 rounded-pill">
                                                <i class="fas fa-shopping-cart"></i> Add To Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col_5_change mb-3">
                                <div class="featured_col f_border text-center">
                                    <div class="h_S_N_S h_S_N_S_none">
                                        <p></p>
                                    </div>
                                    <div class="featured_img">
                                        <img src="assets/img/home-1/f2.png" alt="" srcset="" />
                                    </div>
                                    <div class="featured_cartIcon">
                                        <a href="#"><i class="fa-regular fa-eye"></i></a>
                                        <a href="#"><i class="fa-solid fa-arrow-right-arrow-left"></i></a>
                                        <a href="#"><i class="fa-regular fa-heart"></i></a>
                                    </div>
                                    <div class="featured_content">
                                        <p class="text-muted mt-4">By.Organic Fruits Ltd</p>
                                        <h2>Organic Some Fruits</h2>
                                        <h6 class="featured_icon text-warning">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </h6>
                                        <p class="text-muted">Unit : 500gm</p>
                                        <h4>
                                            <span class="ftColor">$300</span>
                                            <small><s class="text-secondary">$500</s></small>
                                        </h4>
                                        <div class="featured_btn">
                                            <a href="" class="btn btn-outline-dark my-3 rounded-pill">
                                                <i class="fas fa-shopping-cart"></i> Add To Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col_5_change mb-3">
                                <div class="featured_col f_border text-center">
                                    <div class="h_S_N_S h_S_N_S_out">
                                        <p>Strock Out</p>
                                    </div>
                                    <div class="featured_img">
                                        <img src="assets/img/home-1/f3.png" alt="" srcset="" />
                                    </div>
                                    <div class="featured_cartIcon">
                                        <a href="#"><i class="fa-regular fa-eye"></i></a>
                                        <a href="#"><i class="fa-solid fa-arrow-right-arrow-left"></i></a>
                                        <a href="#"><i class="fa-regular fa-heart"></i></a>
                                    </div>
                                    <div class="featured_content">
                                        <p class="text-muted mt-4">By.Organic Fruits Ltd</p>
                                        <h2>Fresh Banana</h2>
                                        <h6 class="featured_icon text-warning">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </h6>
                                        <p class="text-muted">Unit : 500gm</p>
                                        <h4>
                                            <span class="ftColor">$300</span>
                                            <small><s class="text-secondary">$500</s></small>
                                        </h4>
                                        <div class="featured_btn">
                                            <a href="" class="btn btn-outline-dark my-3 rounded-pill">
                                                <i class="fas fa-shopping-cart"></i> Add To Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col_5_change mb-3">
                                <div class="featured_col f_border text-center">
                                    <div class="h_S_N_S h_S_N_S_sale">
                                        <p>Sale</p>
                                    </div>
                                    <div class="featured_img">
                                        <img src="assets/img/home-1/f4.png" alt="" srcset="" />
                                    </div>
                                    <div class="featured_cartIcon">
                                        <a href="#"><i class="fa-regular fa-eye"></i></a>
                                        <a href="#"><i class="fa-solid fa-arrow-right-arrow-left"></i></a>
                                        <a href="#"><i class="fa-regular fa-heart"></i></a>
                                    </div>
                                    <div class="featured_content">
                                        <p class="text-muted mt-4">By.Organic Fruits Ltd</p>
                                        <h2>Fresh Food Box</h2>
                                        <h6 class="featured_icon text-warning">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </h6>
                                        <p class="text-muted">Unit : 500gm</p>
                                        <h4>
                                            <span class="ftColor">$300</span>
                                            <small><s class="text-secondary">$500</s></small>
                                        </h4>
                                        <div class="featured_btn">
                                            <a href="" class="btn btn-outline-dark my-3 rounded-pill">
                                                <i class="fas fa-shopping-cart"></i> Add To Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col_5_change mb-3">
                                <div class="featured_col f_border text-center">
                                    <div class="h_S_N_S h_S_N_S_percent">
                                        <p>-30%</p>
                                    </div>
                                    <div class="featured_img">
                                        <img src="assets/img/home-1/food_box.png" alt="" srcset="" />
                                    </div>
                                    <div class="featured_cartIcon">
                                        <a href="#"><i class="fa-regular fa-eye"></i></a>
                                        <a href="#"><i class="fa-solid fa-arrow-right-arrow-left"></i></a>
                                        <a href="#"><i class="fa-regular fa-heart"></i></a>
                                    </div>
                                    <div class="featured_content">
                                        <p class="text-muted mt-4">By.Agora Agroo ltd</p>
                                        <h2>Agora Food Box</h2>
                                        <h6 class="featured_icon text-warning">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </h6>
                                        <p class="text-muted">Unit : 500gm</p>
                                        <h4>
                                            <span class="ftColor">$300</span>
                                            <small><s class="text-secondary">$500</s></small>
                                        </h4>
                                        <div class="featured_btn">
                                            <a href="" class="btn btn-outline-dark my-3 rounded-pill">
                                                <i class="fas fa-shopping-cart"></i> Add To Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="tab-pane fade" id="pills-bakery" role="tabpanel" aria-labelledby="pills-profile-tab">
                <div class="pills-frozen text-center">
                    <img src="assets/img/home-1/fb-react.png" alt="" srcset="">
                    <h1><strong>Bakery Product Not Found</strong></h1>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-fetured" role="tabpanel" aria-labelledby="pills-contact-tab">
                <div class="row">
                    <div class="col-md-9 res_col_9">
                        <div class="row">
                            <div class="col-md-3 res_col_3">
                                <div class="featured_col f_border text-center mb-4">
                                    <div class="h_S_N_S h_S_N_S_out">
                                        <p>Strock Out</p>
                                    </div>
                                    <div class="exclusive_img">
                                        <img src="assets/img/home-1/chips3.jpg" alt="" srcset="">
                                    </div>
                                    <div class="featured_cartIcon">
                                        <a href="#"><i class="fa-regular fa-eye"></i></a>
                                        <a href="#"><i class="fa-solid fa-arrow-right-arrow-left"></i></a>
                                        <a href="#"><i class="fa-regular fa-heart"></i></a>
                                    </div>
                                    <!-- <div class="planLine mt-2 mb-4"></div> -->
                                    <div class="featured_content">
                                        <p class="text-muted mt-3">By.Agora Agroo ltd</p>
                                        <h2>Agora Food Box</h2>
                                        <h6 class="featured_icon text-warning">
                                            <i class="fas fa-star "></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </h6>
                                        <p class="text-muted">Unit : 500gm</p>
                                        <h4>
                                            <span class="ftColor">$300</span>
                                            <small><s class="text-secondary">$500</s></small>
                                        </h4>
                                        <div class="featured_btn">
                                            <a href="" class="btn btn-outline-dark my-3 rounded-pill"> <i class="fas fa-shopping-cart"></i> Add To Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 res_col_3">
                                <div class="featured_col f_border text-center mb-4">
                                    <div class="h_S_N_S h_S_N_S_new">
                                        <p>New</p>
                                    </div>
                                    <div class="exclusive_img">
                                        <img src="assets/img/home-1/chips2.jpg" alt="" srcset="">
                                    </div>
                                    <div class="featured_cartIcon">
                                        <a href="#"><i class="fa-regular fa-eye"></i></a>
                                        <a href="#"><i class="fa-solid fa-arrow-right-arrow-left"></i></a>
                                        <a href="#"><i class="fa-regular fa-heart"></i></a>
                                    </div>
                                    <div class="featured_content">
                                        <p class="text-muted mt-3">By.Agora Agroo ltd</p>
                                        <h2>Agora Food Box</h2>
                                        <h6 class="featured_icon text-warning">
                                            <i class="fas fa-star "></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </h6>
                                        <p class="text-muted">Unit : 500gm</p>
                                        <h4>
                                            <span class="ftColor">$300</span>
                                            <small><s class="text-secondary">$500</s></small>
                                        </h4>
                                        <div class="featured_btn">
                                            <a href="" class="btn btn-outline-dark my-3 rounded-pill"> <i class="fas fa-shopping-cart"></i> Add To Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 res_col_3">
                                <div class="featured_col f_border text-center mb-4">
                                    <div class="h_S_N_S h_S_N_S_none">
                                        <p></p>
                                    </div>
                                    <div class="exclusive_img">
                                        <img src="assets/img/home-1/chips.jpg" alt="" srcset="">
                                    </div>
                                    <div class="featured_cartIcon">
                                        <a href="#"><i class="fa-regular fa-eye"></i></a>
                                        <a href="#"><i class="fa-solid fa-arrow-right-arrow-left"></i></a>
                                        <a href="#"><i class="fa-regular fa-heart"></i></a>
                                    </div>
                                    <div class="featured_content">
                                        <p class="text-muted mt-3">By.Agora Agroo ltd</p>
                                        <h2>Agora Food Box</h2>
                                        <h6 class="featured_icon text-warning">
                                            <i class="fas fa-star "></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </h6>
                                        <p class="text-muted">Unit : 500gm</p>
                                        <h4>
                                            <span class="ftColor">$300</span>
                                            <small><s class="text-secondary">$500</s></small>
                                        </h4>
                                        <div class="featured_btn">
                                            <a href="" class="btn btn-outline-dark my-3 rounded-pill"> <i class="fas fa-shopping-cart"></i> Add To Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 res_col_3">
                                <div class="featured_col f_border text-center mb-4">
                                    <div class="h_S_N_S h_S_N_S_sale">
                                        <p>Sale</p>
                                    </div>
                                    <div class="exclusive_img">
                                        <img src="assets/img/home-1/chips4.jpg" alt="" srcset="">
                                    </div>
                                    <div class="featured_cartIcon">
                                        <a href="#"><i class="fa-regular fa-eye"></i></a>
                                        <a href="#"><i class="fa-solid fa-arrow-right-arrow-left"></i></a>
                                        <a href="#"><i class="fa-regular fa-heart"></i></a>
                                    </div>
                                    <div class="featured_content">
                                        <p class="text-muted mt-3">By.Agora Agroo ltd</p>
                                        <h2>Agora Food Box</h2>
                                        <h6 class="featured_icon text-warning">
                                            <i class="fas fa-star "></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </h6>
                                        <p class="text-muted">Unit : 500gm</p>
                                        <h4>
                                            <span class="ftColor">$300</span>
                                            <small><s class="text-secondary">$500</s></small>
                                        </h4>
                                        <div class="featured_btn">
                                            <a href="" class="btn btn-outline-dark my-3 rounded-pill"> <i class="fas fa-shopping-cart"></i> Add To Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 res_col_3">
                                <div class="featured_col f_border text-center mb-4">
                                    <div class="h_S_N_S h_S_N_S_percent">
                                        <p>-10</p>
                                    </div>
                                    <div class="exclusive_img">
                                        <img src="assets/img/home-1/chips.jpg" alt="" srcset="">
                                    </div>
                                    <div class="featured_cartIcon">
                                        <a href="#"><i class="fa-regular fa-eye"></i></a>
                                        <a href="#"><i class="fa-solid fa-arrow-right-arrow-left"></i></a>
                                        <a href="#"><i class="fa-regular fa-heart"></i></a>
                                    </div>
                                    <div class="featured_content">
                                        <p class="text-muted mt-3">By.Agora Agroo ltd</p>
                                        <h2>Agora Food Box</h2>
                                        <h6 class="featured_icon text-warning">
                                            <i class="fas fa-star "></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </h6>
                                        <p class="text-muted">Unit : 500gm</p>
                                        <h4>
                                            <span class="ftColor">$300</span>
                                            <small><s class="text-secondary">$500</s></small>
                                        </h4>
                                        <div class="featured_btn">
                                            <a href="" class="btn btn-outline-dark my-3 rounded-pill"> <i class="fas fa-shopping-cart"></i> Add To Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 res_col_3">
                                <div class="featured_col f_border text-center mb-4">
                                    <div class="h_S_N_S h_S_N_S_none">
                                        <p></p>
                                    </div>
                                    <div class="exclusive_img">
                                        <img src="assets/img/home-1/chips2.jpg" alt="" srcset="">
                                    </div>
                                    <div class="featured_cartIcon">
                                        <a href="#"><i class="fa-regular fa-eye"></i></a>
                                        <a href="#"><i class="fa-solid fa-arrow-right-arrow-left"></i></a>
                                        <a href="#"><i class="fa-regular fa-heart"></i></a>
                                    </div>
                                    <div class="featured_content">
                                        <p class="text-muted mt-3">By.Agora Agroo ltd</p>
                                        <h2>Agora Food Box</h2>
                                        <h6 class="featured_icon text-warning">
                                            <i class="fas fa-star "></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </h6>
                                        <p class="text-muted">Unit : 500gm</p>
                                        <h4>
                                            <span class="ftColor">$300</span>
                                            <small><s class="text-secondary">$500</s></small>
                                        </h4>
                                        <div class="featured_btn">
                                            <a href="" class="btn btn-outline-dark my-3 rounded-pill"> <i class="fas fa-shopping-cart"></i> Add To Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 res_col_3">
                                <div class="featured_col f_border text-center mb-4">
                                    <div class="h_S_N_S h_S_N_S_sale">
                                        <p>Sale</p>
                                    </div>
                                    <div class="exclusive_img">
                                        <img src="assets/img/home-1/chips3.jpg" alt="" srcset="">
                                    </div>
                                    <div class="featured_cartIcon">
                                        <a href="#"><i class="fa-regular fa-eye"></i></a>
                                        <a href="#"><i class="fa-solid fa-arrow-right-arrow-left"></i></a>
                                        <a href="#"><i class="fa-regular fa-heart"></i></a>
                                    </div>
                                    <div class="featured_content">
                                        <p class="text-muted mt-3">By.Agora Agroo ltd</p>
                                        <h2>Agora Food Box</h2>
                                        <h6 class="featured_icon text-warning">
                                            <i class="fas fa-star "></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </h6>
                                        <p class="text-muted">Unit : 500gm</p>
                                        <h4>
                                            <span class="ftColor">$300</span>
                                            <small><s class="text-secondary">$500</s></small>
                                        </h4>
                                        <div class="featured_btn">
                                            <a href="" class="btn btn-outline-dark my-3 rounded-pill"> <i class="fas fa-shopping-cart"></i> Add To Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 res_col_3">
                                <div class="featured_col f_border text-center mb-4">
                                    <div class="h_S_N_S h_S_N_S_out">
                                        <p>Strock Out</p>
                                    </div>
                                    <div class="exclusive_img">
                                        <img src="assets/img/home-1/chips4.jpg" alt="" srcset="">
                                    </div>
                                    <div class="featured_cartIcon">
                                        <a href="#"><i class="fa-regular fa-eye"></i></a>
                                        <a href="#"><i class="fa-solid fa-arrow-right-arrow-left"></i></a>
                                        <a href="#"><i class="fa-regular fa-heart"></i></a>
                                    </div>
                                    <div class="featured_content">
                                        <p class="text-muted mt-3">By.Agora Agroo ltd</p>
                                        <h2>Agora Food Box</h2>
                                        <h6 class="featured_icon text-warning">
                                            <i class="fas fa-star "></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </h6>
                                        <p class="text-muted">Unit : 500gm</p>
                                        <h4>
                                            <span class="ftColor">$300</span>
                                            <small><s class="text-secondary">$500</s></small>
                                        </h4>
                                        <div class="featured_btn">
                                            <a href="" class="btn btn-outline-dark my-3 rounded-pill"> <i class="fas fa-shopping-cart"></i> Add To Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 res_col_3 res_d_none">
                        <div class=" background-res d-flex justify-content-center align-items-center organicHoney_img_1 mb-4" style="background-image: url('./assets/img/home-1/honey2.jpg');">
                            <div class="ogranicFoodText3 ms-3">
                                <p>NATURAL FOOD</p>
                                <h3>Processing Honey Nut</h3>
                                <p>SAVE UPTO 20% OFF THIS WEEK</p>
                                <div class="organic_btn">
                                    <a href="" class="btn btn-outline-dark my-3 rounded-pill">Shop Now</a>
                                </div>
                            </div>
                        </div>

                        <div class=" background-res d-flex justify-content-center align-items-center organicHoney_img_2 " style="background-image: url('./assets/img/home-1/frout_man.jpg');">
                            <div class="ogranicFoodText3 ms-3">
                                <p>NATURAL FOOD</p>
                                <h3>Processing Ready See Prawn</h3>
                                <p>SAVE UPTO 20% OFF THIS WEEK</p>
                                <div class="organic_btn">
                                    <a href="" class="btn btn-outline-dark my-3 rounded-pill">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-recent" role="tabpanel" aria-labelledby="pills-contact-tab">
                <div class="pills-frozen text-center">
                    <img src="assets/img/home-1/fb-react.png" alt="" srcset="">
                    <h1><strong>Recent Product Not Found</strong></h1>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-frozen" role="tabpanel" aria-labelledby="pills-contact-tab">
                <div class="pills-frozen text-center">
                    <img src="assets/img/home-1/fb-react.png" alt="" srcset="">
                    <h1><strong>Frozen Product Not Found</strong></h1>
                </div>
            </div>
        </div>


    </div>
</section>

<section id="Daily_Flash_sell" class="">
    <div class="container">
        <div class="dailyFlash">
            <h2 class="py-4"><span class="ftColor">Daily</span> Flash Sell</h2>
            <p class="text-muted expire">Expires Time</p>
            <div class="daily_bg_change rounded-pill text-center">
                <h3 class="text-white">D-40: H-32: M-34 : S 35</h3>
            </div>
        </div>
        <div class="planLine_2 mb-4"></div>
        <div class="responsive">
            @foreach ($daily_flash_sell as $product)
            <div class="slick_slide">
                <div class="flashSell_col f_border">
                    <div class="h_S_N_S h_S_N_S_hot">
                        <p>Hot</p>
                    </div>
                    <div class="flashSell_img text-center">
                        <img src="{{ asset($product->image) }}" alt="" srcset="">
                    </div>
                    <div class="featured_cartIcon">
                        <a href="#"><i class="fa-regular fa-eye"></i></a>
                        <a href="#"><i class="fa-solid fa-arrow-right-arrow-left"></i></a>
                        <a href="#"><i class="fa-regular fa-heart"></i></a>
                    </div>
                    <div class="flashSell_content px-4">
                        <p class="text-muted mt-4">By {{ substr($product->brand,0,17)}}</p>
                        <h2>{{ substr($product->product_name,0,16)}}</h2>
                        <h6 class="featured_icon text-warning">
                            <i class="fas fa-star "></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </h6>
                        <p class="text-muted">Unit : {{ $product->available_size}}</p>
                        <h4>
                            <span class="ftColor">৳ {{ $product->product_price}}</span>
                            <small><s class="text-secondary">৳ {{ $product->old_price}}</s></small>
                        </h4>
                        <div class="planLine_3 bg-warning mb-3"></div>
                        <p class="text-muted ">In Strock : 20/65</p>

                        <div class="featured_btn">
                            <a href="" class="btn btn-outline-dark my-3 rounded-pill"> <i class="fas fa-shopping-cart"></i> Add To Cart</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section id="Recently_landed" class="py-5">
    <div class="container">
        <h2 class="py-4"><span class="ftColor">Recently</span> Landed</h2>
        <div class="planLine_2 mb-4"></div>
        <div class="row">
            <div class="col-md-3 res_col_3_recent">
                <div class=" background-res d-flex justify-content-center align-items-center landed_img_1" style="background-image: url('{{asset('frontEndAsset')}}/assets/img/home-1/badakopi2.jpg');">
                    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="landed_content text-center text-white p-2">
                                    <img src="{{asset('frontEndAsset')}}/assets/img/home-1/smileMan.jpg" alt="" srcset="">
                                    <h3>Smile Man</h3>
                                    <p>Sr Designer</p>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, quis accusamus
                                        rerum
                                        quisquam et eum consequatur. Modi molestiae culpa non!</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="landed_content text-center text-white p-2">
                                    <img src="{{asset('frontEndAsset')}}/assets/img/home-1/smileMan.jpg" alt="" srcset="">
                                    <h3>Smile Man</h3>
                                    <p>Sr Designer</p>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, quis accusamus
                                        rerum
                                        quisquam et eum consequatur. Modi molestiae culpa non!</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="landed_content text-center text-white p-2">
                                    <img src="{{asset('frontEndAsset')}}/assets/img/home-1/smileMan.jpg" alt="" srcset="">
                                    <h3>Smile Man</h3>
                                    <p>Sr Designer</p>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, quis accusamus
                                        rerum
                                        quisquam et eum consequatur. Modi molestiae culpa non!</p>
                                </div>
                            </div>
                        </div>
                        <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Next</span>
                            </button> -->
                    </div>
                </div>
            </div>
            <div class="col-md-9 res_col_9">
                <div class="row">
                    @foreach ($recently_landed as $product)
                    <div class="col-md-3 res_col_3">
                        <div class="featured_col f_border text-center mb-4">
                            <div class="h_S_N_S h_S_N_S_hot">
                                <p>Hot</p>
                            </div>
                            <div class="exclusive_img">
                                <img src="{{ asset($product->image) }}" alt="" srcset="">
                            </div>
                            <div class="featured_cartIcon">
                                <a href="#"><i class="fa-regular fa-eye"></i></a>
                                <a href="#"><i class="fa-solid fa-arrow-right-arrow-left"></i></a>
                                <a href="#"><i class="fa-regular fa-heart"></i></a>
                            </div>
                            <div class="featured_content">
                                <p class="text-muted mt-3">By :{{ substr($product->brand,0,17)}}</p>
                                <h2>{{ substr($product->product_name,0,16)}}</h2>
                                <h6 class="featured_icon text-warning">
                                    <i class="fas fa-star "></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </h6>
                                <p class="text-muted">Unit : {{ $product->available_size}}</p>
                                <h4>
                                    <span class="ftColor">৳ {{ $product->product_price}}</span>
                                    <small><s class="text-secondary">৳ {{ $product->old_price}}</s></small>
                                </h4>
                                <div class="featured_btn">
                                    <a href="" class="btn btn-outline-dark my-3 rounded-pill"> <i class="fas fa-shopping-cart"></i> Add To Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</section>

<section id="About_Shipping_System" class="mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-3 res_col_3_768 mb-3">
                <div class="about_freeShipping">
                    <div class="about_freeShipping_content d-flex">
                        <i class="fa-solid fa-headset"></i>
                        <span>
                            <h5>Free Shipping</h5>
                            <p>When You Order Over %150</p>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 res_col_3_768 mb-3">
                <div class="about_freeShipping">
                    <div class="about_freeShipping_content d-flex">
                        <i class="fa-solid fa-headset"></i>
                        <span>
                            <h5>Free Shipping</h5>
                            <p>When You Order Over %150</p>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 res_col_3_768 mb-3">
                <div class="about_freeShipping">
                    <div class="about_freeShipping_content d-flex">
                        <i class="fa-solid fa-headset"></i>
                        <span>
                            <h5>Free Shipping</h5>
                            <p>When You Order Over %150</p>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 res_col_3_768 mb-3">
                <div class="about_freeShipping">
                    <div class="about_freeShipping_content d-flex">
                        <i class="fa-solid fa-headset"></i>
                        <span>
                            <h5>Free Shipping</h5>
                            <p>When You Order Over %150</p>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="Recent_Article" class="py-5">
    <div class="container">
        <h2 class="py-4"><span class="ftColor">Recent</span> Article</h2>
        <div class="planLine_2 mb-4"></div>
        <div class="row mt-4">
            <div class="col-md-3 res_col_3 mb-3">
                <div class="homeArticle">
                    <img src="{{asset('frontEndAsset')}}/assets/img/home-1/1.jpg" alt="">
                    <p>By : David Nov 07 2022</p>
                    <h4>Sociis Velit laculis Eros Curabitur Nascuter An Ultrices</h4>
                    <p><span id="recentArticelMore" style="display: none;">erisque enim ligula venenatis dolor.
                            Maecenas nisl est, ultrices nec congue eget,auctor vitae massa. Fusce luctus vestibulum
                            augue ut aliquet. Nunc sagittis dictum nisi,
                            sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare
                            turpis.
                            Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum.
                            Sed dapibus pulvinar nibh tempor porta.</span></p>
                    <h5 onclick="myFunction('recentArticelMore','myBtn')" id="myBtn">Read More...</h5>
                </div>
            </div>
            <div class="col-md-3 res_col_3 mb-3">
                <div class="homeArticle">
                    <img src="{{asset('frontEndAsset')}}/assets/img/home-1/1.jpg" alt="">
                    <p>By : David Nov 07 2022</p>
                    <h4>Sociis Velit laculis Eros Curabitur Nascuter An Ultrices</h4>
                    <p><span id="recentArticelMore2" style="display: none;">erisque enim ligula venenatis dolor.
                            Maecenas nisl est, ultrices nec congue eget,auctor vitae massa. Fusce luctus vestibulum
                            augue ut aliquet. Nunc sagittis dictum nisi,
                            sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare
                            turpis.
                            Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum.
                            Sed dapibus pulvinar nibh tempor porta.</span></p>
                    <h5 onclick="myFunction('recentArticelMore2','myBtn2')" id="myBtn2">Read More...</h5>
                </div>
            </div>
            <div class="col-md-3 res_col_3 mb-3">
                <div class="homeArticle">
                    <img src="{{asset('frontEndAsset')}}/assets/img/home-1/1.jpg" alt="">
                    <p>By : David Nov 07 2022</p>
                    <h4>Sociis Velit laculis Eros Curabitur Nascuter An Ultrices</h4>
                    <p><span id="recentArticelMore3" style="display: none;">erisque enim ligula venenatis dolor.
                            Maecenas nisl est, ultrices nec congue eget,auctor vitae massa. Fusce luctus vestibulum
                            augue ut aliquet. Nunc sagittis dictum nisi,
                            sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare
                            turpis.
                            Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum.
                            Sed dapibus pulvinar nibh tempor porta.</span></p>
                    <h5 onclick="myFunction('recentArticelMore3','myBtn3')" id="myBtn3">Read More...</h5>
                </div>
            </div>
            <div class="col-md-3 res_col_3 mb-3">
                <div class="homeArticle">
                    <img src="{{asset('frontEndAsset')}}/assets/img/home-1/1.jpg" alt="">
                    <p>By : David Nov 07 2022</p>
                    <h4>Sociis Velit laculis Eros Curabitur Nascuter An Ultrices</h4>
                    <p><span id="recentArticelMore4" style="display: none;">erisque enim ligula venenatis dolor.
                            Maecenas nisl est, ultrices nec congue eget,auctor vitae massa. Fusce luctus vestibulum
                            augue ut aliquet. Nunc sagittis dictum nisi,
                            sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare
                            turpis.
                            Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum.
                            Sed dapibus pulvinar nibh tempor porta.</span></p>
                    <h5 onclick="myFunction('recentArticelMore4','myBtn4')" id="myBtn4">Read More...</h5>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection