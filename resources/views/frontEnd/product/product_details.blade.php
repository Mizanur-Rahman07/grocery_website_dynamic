@extends('frontEnd.master')
@section('title')
Grocery || Product Details
@endsection

@section('content')
<section id="Product_Details" class="paddingTop">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="detailsImage">
                    <div class="row">
                        <div class="col-md-2">
                            <div class="detailsSubImg mb-3">
                                <img src="{{asset('frontEndAsset')}}/assets/img/product_details/1.png" alt="img"
                                    class="subimg" />
                            </div>
                            <div class="detailsSubImg mb-3">
                                <img src="{{asset('frontEndAsset')}}/assets/img/product_details/2.png" alt="img"
                                    class="subimg" />
                            </div>
                            <div class="detailsSubImg mb-3">
                                <img src="{{asset('frontEndAsset')}}/assets/img/product_details/3.png" alt="img"
                                    class="subimg" />
                            </div>
                        </div>
                        <div class="col-md-10 pd_res_col_10">
                            <div class="detailsMainImg">
                                <img id="mainImage" src="{{asset('frontEndAsset')}}/assets/img/product_details/1.png"
                                    alt="image" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="productDetails_content">
                    <!-- --- for mobile and tablet device---- -->
                    <div class="d-flex justity-content productDetails_smallDevice py-">
                        <div class="detailsSubImg2 me-2">
                            <img src="{{asset('frontEndAsset')}}/assets/img/product_details/1.png" alt="img"
                                class="subimg" />
                        </div>
                        <div class="detailsSubImg2 me-2">
                            <img src="{{asset('frontEndAsset')}}/assets/img/product_details/2.png" alt="img"
                                class="subimg" />
                        </div>
                        <div class="detailsSubImg2 me-2">
                            <img src="{{asset('frontEndAsset')}}/assets/img/product_details/3.png" alt="img"
                                class="subimg" />
                        </div>
                    </div>
                    <!-- --- for mobile and tablet device---- -->

                    <span class="productDetails_review justity-content">
                        <h6 class="details_review">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </h6>
                        <p class="text-muted">( 10+ Review)</p>
                    </span>
                    <h4 class="py-2">Masala Potato Chips</h4>
                    <h6 class="compaire_price pb-2">
                        $<strong>08.50</strong>
                        <small><s class="text-secondary"> $12.50</s></small>
                    </h6>
                    <p class="productDetails_text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi
                        est eos totam vitae, obcaecati sed eius. Tempora id assumenda
                        repellendus?
                    </p>
                    <!-- ------------------ -->
                    <div class="product_color d-flex justity-content productDetails_largeDevice">
                        <h5>Color :</h5>
                        <p class="text-muted">Blue</p>
                    </div>
                    <div class="d-flex justity-content productDetails_largeDevice">
                        <div class="detailsSubImg2 me-2">
                            <img src="{{asset('frontEndAsset')}}/assets/img/product_details/1.png" alt="img"
                                class="subimg" />
                        </div>
                        <div class="detailsSubImg2 me-2">
                            <img src="{{asset('frontEndAsset')}}/assets/img/product_details/2.png" alt="img"
                                class="subimg" />
                        </div>
                        <div class="detailsSubImg2 me-2">
                            <img src="{{asset('frontEndAsset')}}/assets/img/product_details/3.png" alt="img"
                                class="subimg" />
                        </div>
                    </div>

                    <!-- ---Click Function -->
                    <script src="{{asset('frontEndAsset')}}/assets/js/jquery-3.6.0.min.js"></script>
                    <script>
                    $(".subimg").click(function() {
                        var imgVar = $(this).attr("src");
                        $("#mainImage").attr("src", imgVar);
                    });
                    </script>
                    <!-- ---Click Function -->
                    <p class="productDetails_text2">
                        <span class="productDetailsWatch">30</span> People are watching
                        this time
                    </p>
                    <div class="productDetails_availableSize">
                        <h5>Available Size :</h5>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>20 mg</option>
                            <option value="1">10 mg</option>
                            <option value="2">20 mg</option>
                            <option value="3">30 mg</option>
                        </select>
                    </div>
                    <div class="productDetails_quantityTitle">
                        <h5>Quantity :</h5>
                    </div>
                    <div class="productDetails_quantity">
                        <div class="proQuantity">
                            <div class="proQty d-flex">
                                <div><a href="" class="proQtyP">+</a></div>
                                <div class="proQtyNo">01</div>
                                <div><a href="" class="proQtyN">-</a></div>
                            </div>
                        </div>
                        <h5>
                            <a href="" class="btn btn-outline-success productDetailsCart">Add to Cart</a>
                        </h5>
                        <div class="proQtyUpDown">
                            <a href=""><i class="fa-solid fa-arrow-right-arrow-left"></i></a>
                        </div>
                        <div class="proQtyUpDown">
                            <a href=""><i class="fa-solid fa-share-nodes"></i></a>
                        </div>
                    </div>
                    <div class="productDetails_SBTC">
                        <h6><strong>SKU : </strong> skmizan345</h6>
                        <h6><strong>Brand : </strong> Olympic</h6>
                        <h6><strong>Tags : </strong> Chips, Snacks Dessert</h6>
                        <h6><strong>Category : </strong> Snacks</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="ProductDetails_DisAddReview" class="py-5">
    <div class="container">
        <ul class="nav nav-tabs res_paddingLeft" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button"
                    role="tab" aria-controls="home" aria-selected="true">
                    Description
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button"
                    role="tab" aria-controls="profile" aria-selected="false">
                    Additional Info
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button"
                    role="tab" aria-controls="contact" aria-selected="false">
                    Review (03)
                </button>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="row">
                    <div class="col-md-9">
                        <div class="productDetails_discription">
                            <h5>Description</h5>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Velit maxime veritatis voluptas est rerum obcaecati
                                perspiciatis nesciunt soluta libero magni perferendis unde
                                nihil esse, veniam quisquam vero atque corporis tempore ex
                                ut ullam numquam! Sed placeat velit maiores fugit quibusdam
                                optio praesentium architecto magni, deleniti totam harum
                                similique perferendis unde.
                            </p>
                        </div>
                        <div class="productDetails_feature">
                            <h5>Product Feature</h5>
                            <p>
                                <i class="fa-solid fa-check"></i> Lorem ipsum dolor sit amet
                                consectetur adipisicing elit.
                            </p>
                            <p>
                                <i class="fa-solid fa-check"></i> Lorem ipsum dolor sit amet
                                consectetur adipisicing elit consectetur adipisicing elit.
                            </p>
                            <p>
                                <i class="fa-solid fa-check"></i> Lorem ipsum dolor sit amet
                                consectetur adipisicing elit consectetur adipi .
                            </p>
                            <p>
                                <i class="fa-solid fa-check"></i> Lorem ipsum dolor sit amet
                                consectetur adipisicing elit consectetur adipisicing elit.
                                zjhsk hazksj jhzk
                            </p>
                        </div>
                        <div class="productDetails_shopping">
                            <h5>Shopping And Delevary</h5>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Velit maxime veritatis voluptas est rerum obcaecati
                                perspiciatis nesciunt soluta libero magni perferendis unde
                                nihil esse, veniam quisquam vero atque corporis tempore ex
                                ut ullam numquam! Sed placeat velit maiores fugit quibusdam
                                optio praesentium architecto magni, deleniti totam harum
                                similique perferendis unde.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3 productDetails_disAddReview_ofr">
                        <div class="background-res d-flex justify-content-start align-items-center productDetails_disAddReview_img"
                            style="
                    background-image: url('{{asset('frontEndAsset')}}/assets/img/home-1/bazarBag.png');
                  ">
                            <div class="productDetails_disAddReview_ofr_text ms-3">
                                <p>NATURAL FOOD</p>
                                <h2>Summer Deal</h2>
                                <h6>SAVE UPTO</h6>
                                <h5>$ 30% OFF</h5>
                                <div class="organic_btn">
                                    <a href="" class="btn btn-outline-dark my-3 rounded-pill">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                Hello 2
            </div>
            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                <div class="submit-review mt-5">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="contact_img">
                                <a href="{{asset('frontEndAsset')}}/assets/img/FAQ/1.PNG" data-lightbox="mygallery"
                                    data-title="Caption-6">
                                    <img src="{{asset('frontEndAsset')}}/assets/img/FAQ/1.PNG" alt="" /></a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="send_message">
                                <div class="left_comnt_box">
                                    <h3>Reviews</h3>

                                    <form class="comment_form">
                                        <input type="text" placeholder="Enter Name" required />
                                        <input type="email" placeholder="Enter Email" required />
                                        <h5 class="mt-3">Your rating</h5>
                                        <h6 class="wishContent_review">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </h6>
                                        <textarea rows="5" placeholder="Your Comment" required></textarea>
                                        <button type="submit" class="mt-3 btn btn-outline-primary btn_padding">
                                            Submit
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="col-md-12">
              <div class="disAddReview">  
                <div class="d-flex disAddReview_menu">
                  <p>Description</p>
                  <p>Additional Info</p>
                  <p>Review (03)</p>
                </div>
              </div>
            </div> -->
    </div>
</section>

<section id="Feature_product" class="mb-5">
    <div class="container">
        <h2 class="py-4"><span class="ftColor py-3">Related</span> Product</h2>
        <div class="planLine_2 mb-4"></div>
        <div class="row">
            <div class="col_5_change mb-3">
                <div class="featured_col border text-center">
                    <div class="featured_img">
                        <img src="{{asset('frontEndAsset')}}/assets/img/home-1/food_box.png" alt="" srcset="" />
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

            <div class="col_5_change mb-3">
                <div class="featured_col border text-center">
                    <div class="featured_img">
                        <img src="{{asset('frontEndAsset')}}/assets/img/home-1/food_box.png" alt="" srcset="" />
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

            <div class="col_5_change mb-3">
                <div class="featured_col border text-center">
                    <div class="featured_img">
                        <img src="{{asset('frontEndAsset')}}/assets/img/home-1/food_box.png" alt="" srcset="" />
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

            <div class="col_5_change mb-3">
                <div class="featured_col border text-center">
                    <div class="featured_img">
                        <img src="{{asset('frontEndAsset')}}/assets/img/home-1/food_box.png" alt="" srcset="" />
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

            <div class="col_5_change mb-3">
                <div class="featured_col border text-center">
                    <div class="featured_img">
                        <img src="{{asset('frontEndAsset')}}/assets/img/home-1/food_box.png" alt="" srcset="" />
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

<section id="Feature_product" class="mb-5">
    <div class="container">
        <h2 class="py-4"><span class="ftColor py-3">Recent</span> Viewed</h2>
        <div class="planLine_2 mb-4"></div>
        <div class="row">
            <div class="col_5_change mb-3">
                <div class="featured_col border text-center">
                    <div class="featured_img">
                        <img src="{{asset('frontEndAsset')}}/assets/img/home-1/food_box.png" alt="" srcset="" />
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

            <div class="col_5_change mb-3">
                <div class="featured_col border text-center">
                    <div class="featured_img">
                        <img src="{{asset('frontEndAsset')}}/assets/img/home-1/food_box.png" alt="" srcset="" />
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
            <div class="col_5_change mb-3">
                <div class="featured_col border text-center">
                    <div class="featured_img">
                        <img src="{{asset('frontEndAsset')}}/assets/img/home-1/food_box.png" alt="" srcset="" />
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

<!-- -------------------------------------------- -->

<section id="About_Shipping_System" class="py-5">
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
@endsection