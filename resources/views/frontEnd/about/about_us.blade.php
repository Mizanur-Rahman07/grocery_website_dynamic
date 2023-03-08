@extends('frontEnd.master')
@section('title')
Grocery || About
@endsection

@section('content')
<section id="Creating_Shop" class="pb-5 paddingTop">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="create_shop_content">
                    <div class="make_shop">
                        <h1>Make Delicious Best Creating Shop With Fresko!</h1>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Officia cupiditate velit culpa
                            ratione a? Ex vel obcaecati accusantium unde corrupti odio similique deleniti! Deleniti
                            perferendis excepturi odit provident? Molestiae, temporibus.</p>
                    </div>
                    <div class="about_delevary d-flex">
                        <i class="fa-solid fa-truck"></i>
                        <span>
                            <h5>First Item Delivery</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus dignissimos
                                distinctio accusamus fugit corrupti. Eaque accusantium quis ut pariatur beatae.</p>
                        </span>
                    </div>
                    <div class="about_delevary d-flex">
                        <i class="fa-solid fa-clock-rotate-left"></i>
                        <span>
                            <h5>Dedicated Support</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus dignissimos
                                distinctio accusamus fugit corrupti. Eaque accusantium quis ut pariatur beatae.</p>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="about_guaranted d-flex">
                    <div class="aboutGrant">
                        <div class="row">
                            <div class="col-md-6 res_col_6">
                                <div class="about_tometo">
                                    <img src="{{asset('frontEndAsset')}}/assets/img/about-us/1.jpg" alt="" srcset="">
                                </div>
                            </div>
                            <div class="col-md-6 res_col_6">
                                <div class="about_tometo">
                                    <img src="{{asset('frontEndAsset')}}/assets/img/about-us/2.jpg" alt="" srcset="">
                                </div>
                            </div>
                        </div>
                        <div class="gruntedImg">
                            <img src="{{asset('frontEndAsset')}}/assets/img/about-us/3.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="Easily_Buy" class="mt-5">
    <div class="container">
        <div class="easyBuy_heading">
            <h1>You Can Easily Buy Your Products Within Your budgets</h1>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="easyBuy_content text-center">
                    <div class="easyBuy_bg"> </div>
                    <div class="easyBuy_icon">
                        <!-- <i class="fa-solid fa-location-dot"></i> -->
                    </div>
                    <h3>Choose Product</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, numquam. Perspiciatis magnam,
                        numquam sit impedit inventore quas .</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="easyBuy_content text-center">
                    <div class="easyBuy_bg"> </div>
                    <div class="easyBuy_icon">
                        <!-- <i class="fa-solid fa-location-dot"></i> -->
                    </div>
                    <h3>Choose Product</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, numquam. Perspiciatis magnam,
                        numquam sit impedit inventore quas .</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="easyBuy_content text-center">
                    <div class="easyBuy_bg"> </div>
                    <div class="easyBuy_icon">
                        <!-- <i class="fa-solid fa-location-dot"></i> -->
                    </div>
                    <h3>Choose Product</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, numquam. Perspiciatis magnam,
                        numquam sit impedit inventore quas .</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="Supplying" class="py-5 mt-3">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="supplying_img ">
                    <img src="{{asset('frontEndAsset')}}/assets/img/about-us/4.PNG" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="supplying">
                    <h1>Supplying You With Freshness Grocery Product</h1>
                    <div class="supplying_btn py-3">
                        <a href="" class="btn btn-outline-success">
                            <h5>Why Choose Us</h5>
                        </a>
                        <a href="" class="btn btn-outline-success">
                            <h5>Mission & Vission</h5>
                        </a>
                        <a href="" class="btn btn-outline-success">
                            <h5>About Company</h5>
                        </a>
                    </div>
                    <div class="row">
                        <div class="col-md-6 aboutSupplying_p">
                            <div class="supplying_content py-3">
                                <div class="supplyingHeadIcon">
                                    <i class="fa-solid fa-shop-lock"></i>
                                    <h4>Qualityfull Product</h4>
                                </div>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id voluptas debitis
                                    tempore fuga
                                    libero eius?</p>
                            </div>
                        </div>
                        <div class="col-md-6 aboutSupplying_p">
                            <div class="supplying_content py-3">
                                <div class="supplyingHeadIcon">
                                    <i class="fa-solid fa-shop-lock"></i>
                                    <h4>Qualityfull Product</h4>
                                </div>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id voluptas debitis
                                    tempore fuga
                                    libero eius?</p>
                            </div>
                        </div>
                        <div class="col-md-6 aboutSupplying_p">
                            <div class="supplying_content py-3">
                                <div class="supplyingHeadIcon">
                                    <i class="fa-solid fa-shop-lock"></i>
                                    <h4>Qualityfull Product</h4>
                                </div>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id voluptas debitis
                                    tempore fuga
                                    libero eius?</p>
                            </div>
                        </div>
                        <div class="col-md-6 aboutSupplying_p">
                            <div class="supplying_content py-3">
                                <div class="supplyingHeadIcon">
                                    <i class="fa-solid fa-shop-lock"></i>
                                    <h4>Qualityfull Product</h4>
                                </div>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id voluptas debitis
                                    tempore fuga
                                    libero eius?</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="About_Customer" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <h1 class="text-center">Most Customer Positive Feedback About Our Products</h1>
            </div>
            <div class="col-md-3"></div>
        </div>

        <div class="about_slider ">
            <div id="carouselExampleIndicators" class="carousel slide pt-5" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-md-4 ">
                                <div class="testimonmial_slide text-center mb-3">
                                    <img src="{{asset('frontEndAsset')}}/assets/img/about-us/5.jpg" alt="">
                                    <h6>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </h6>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt ex cum
                                        ducimus pariatur laudantium commodi numquam. Provident ab delectus minima!
                                    </p>
                                    <h5>Mizanur Rahman</h5>
                                    <h6>CEO and Founder</h6>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="testimonmial_slide text-center  mb-3">
                                    <img src="{{asset('frontEndAsset')}}/assets/img/about-us/5.jpg" alt="">
                                    <h6>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </h6>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt ex cum
                                        ducimus pariatur laudantium commodi numquam. Provident ab delectus minima!
                                    </p>
                                    <h5>Kaziul Islam</h5>
                                    <h6>Associat Derector</h6>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="testimonmial_slide text-center  mb-3">
                                    <img src="{{asset('frontEndAsset')}}/assets/img/about-us/5.jpg" alt="">
                                    <h6>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </h6>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt ex cum
                                        ducimus pariatur laudantium commodi numquam. Provident ab delectus minima!
                                    </p>
                                    <h5>Hasanur Alom</h5>
                                    <h6>Assistant Director</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="testimonmial_slide text-center  mb-3">
                                    <img src="{{asset('frontEndAsset')}}/assets/img/about-us/5.jpg" alt="">
                                    <h6>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </h6>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt ex cum
                                        ducimus pariatur laudantium commodi numquam. Provident ab delectus minima!
                                    </p>
                                    <h5>Abu Tayou Shah</h5>
                                    <h6>Manager</h6>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="testimonmial_slide text-center  mb-3">
                                    <img src="{{asset('frontEndAsset')}}/assets/img/about-us/5.jpg" alt="">
                                    <h6>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </h6>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt ex cum
                                        ducimus pariatur laudantium commodi numquam. Provident ab delectus minima!
                                    </p>
                                    <h5>Shofiqul Islam</h5>
                                    <h6>Assistant Manager</h6>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="testimonmial_slide text-center  mb-3">
                                    <img src="{{asset('frontEndAsset')}}/assets/img/about-us/5.jpg" alt="">
                                    <h6>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </h6>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt ex cum
                                        ducimus pariatur laudantium commodi numquam. Provident ab delectus minima!
                                    </p>
                                    <h5>Ishrat Jahan Mridula</h5>
                                    <h6>Assistant Programmer</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
</section>

<section id="About_video">
    <div class="aboutVideo ">
        <iframe width="80%" height="500px" src="https://www.youtube.com/embed/wazg6u3ESco" title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>
        <div class="aboutVideo_content text-warning">
            <h3>We Are Committed To Making Your Shopping Expirence The World Best</h3>
        </div>
    </div>
</section>

<section id="Team_leader" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4 res_col_2"></div>
            <div class="col-md-4 res_col_4">
                <h2 class="text-center">Our Professional and Dedicated Expert Team Leader</h>
            </div>
            <div class="col-md-4 res_col_2"></div>
        </div>
        <div class="row">
            <div class="col-md-3 res_col_3_3">
                <div class="about_teamLeader text-center mt-5">
                    <div class="teamLeader_img position-relative">
                        <img src="{{asset('frontEndAsset')}}/assets/img/about-us/6.jpg" alt="">
                    </div>
                    <div class="teamLeader_icon">
                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#"><i class="fa-brands fa-google-plus-g"></i></a>
                        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                    </div>
                    <h5>Daisy W. Pyton</h5>
                    <p>CO founder</p>
                </div>
            </div>
            <div class="col-md-3 res_col_3_3">
                <div class="about_teamLeader text-center mt-5">
                    <div class="teamLeader_img position-relative">
                        <img src="{{asset('frontEndAsset')}}/assets/img/about-us/8.jpg" alt="">
                    </div>
                    <div class="teamLeader_icon">
                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#"><i class="fa-brands fa-google-plus-g"></i></a>
                        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                    </div>
                    <h5>Daisy W. Pyton</h5>
                    <p>CO founder</p>
                </div>
            </div>
            <div class="col-md-3 res_col_3_3">
                <div class="about_teamLeader text-center mt-5">
                    <div class="teamLeader_img position-relative">
                        <img src="{{asset('frontEndAsset')}}/assets/img/about-us/7.jpg" alt="">
                    </div>
                    <div class="teamLeader_icon">
                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#"><i class="fa-brands fa-google-plus-g"></i></a>
                        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                    </div>
                    <h5>Daisy W. Pyton</h5>
                    <p>CO founder</p>
                </div>
            </div>
            <div class="col-md-3 res_col_3_3">
                <div class="about_teamLeader text-center mt-5">
                    <div class="teamLeader_img position-relative">
                        <img src="{{asset('frontEndAsset')}}/assets/img/about-us/9.jpg" alt="">
                    </div>
                    <div class="teamLeader_icon">
                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#"><i class="fa-brands fa-google-plus-g"></i></a>
                        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                    </div>
                    <h5>Daisy W. Pyton</h5>
                    <p>CO founder</p>
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