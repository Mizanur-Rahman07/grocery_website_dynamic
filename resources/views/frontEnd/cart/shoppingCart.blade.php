@extends('frontEnd.master')
@section('title')
Grocery || Shopping Cart
@endsection

@section('content')

<section id="WishList" class="pb-5 paddingTop">
    <div class="container">
        <div class="row">
            <div class="col-md-8 res_cart_col_8">
                <div class="wishlist_head">
                    <div class="row">
                        <div class="col-md-6">
                            <h5 class="wishHead_product">Products</h5>
                        </div>
                        <div class="col-md-3">
                            <h5 class="wishHead_quantity">Quantity</h5>
                        </div>
                        <div class="col-md-3">
                            <h5 class="wishHead_action">Sub Total</h5>
                        </div>
                    </div>
                </div>
                <div class="wishlist_body">
                    <div class="wishlist_main_content">
                        <div class="row m-0">
                            <div class="col-md-6 res_col_6">
                                <div class="wishlist_content py-3 d-flex">
                                    <div class="row m-0">
                                        <div class="col-md-6 p-0">
                                            <img src="{{asset('frontEndAsset')}}/assets/img/wishlist/1.png" alt="" />
                                        </div>
                                        <div class="col-md-6 p-0">
                                            <span class="wishList_res">
                                                <h6 class="wishContent_review">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                </h6>
                                                <h5>Organic Cereal Chocolate</h5>
                                                <h6 class="wishCart_price">
                                                    <strong>$100</strong>
                                                    <small><s class="text-secondary"> $80</s></small>
                                                </h6>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 res_cart_col_3">
                                <h6 class="cartQuantity">
                                    <div class="qty">
                                        <div><a href="">+</a></div>
                                        <div class="t_b_margin">01</div>
                                        <div><a href="">-</a></div>
                                    </div>
                                </h6>
                            </div>
                            <div class="col-md-3 res_cart_col_3">
                                <h5 class="wishCartSubTotal">
                                    $ 40.0
                                    <a href=""><i class="fa-solid fa-trash-can trustIcon"></i></a>
                                </h5>
                            </div>
                            <div class="col-md-12 wishList_border_bottom"></div>









                            <div class="col-md-6 res_col_6">
                                <div class="wishlist_content py-3 d-flex">
                                    <div class="row m-0">
                                        <div class="col-md-6 p-0">
                                            <img src="{{asset('frontEndAsset')}}/assets/img/wishlist/1.png" alt="" />
                                        </div>
                                        <div class="col-md-6 p-0">
                                            <span class="wishList_res">
                                                <h6 class="wishContent_review">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                </h6>
                                                <h5>Organic Cereal Chocolate</h5>
                                                <h6 class="wishCart_price">
                                                    <strong>$100</strong>
                                                    <small><s class="text-secondary"> $80</s></small>
                                                </h6>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 res_cart_col_3">
                                <h6 class="cartQuantity">
                                    <div class="qty">
                                        <div><a href="">+</a></div>
                                        <div class="t_b_margin">01</div>
                                        <div><a href="">-</a></div>
                                    </div>
                                </h6>
                            </div>
                            <div class="col-md-3 res_cart_col_3">
                                <h5 class="wishCartSubTotal">
                                    $ 40.0
                                    <a href=""><i class="fa-solid fa-trash-can trustIcon"></i></a>
                                </h5>
                            </div>
                            <div class="col-md-12 wishList_border_bottom"></div>


                            <div class="col-md-6 res_col_6">
                                <div class="wishlist_content py-3 d-flex">
                                    <div class="row m-0">
                                        <div class="col-md-6 p-0">
                                            <img src="{{asset('frontEndAsset')}}/assets/img/wishlist/1.png" alt="" />
                                        </div>
                                        <div class="col-md-6 p-0">
                                            <span class="wishList_res">
                                                <h6 class="wishContent_review">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                </h6>
                                                <h5>Organic Cereal Chocolate</h5>
                                                <h6 class="wishCart_price">
                                                    <strong>$100</strong>
                                                    <small><s class="text-secondary"> $80</s></small>
                                                </h6>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 res_cart_col_3">
                                <h6 class="cartQuantity">
                                    <div class="qty">
                                        <div><a href="">+</a></div>
                                        <div class="t_b_margin">01</div>
                                        <div><a href="">-</a></div>
                                    </div>
                                </h6>
                            </div>
                            <div class="col-md-3 res_cart_col_3">
                                <h5 class="wishCartSubTotal">
                                    $ 40.0
                                    <a href=""><i class="fa-solid fa-trash-can trustIcon"></i></a>
                                </h5>
                            </div>
                            <div class="col-md-12 wishList_border_bottom"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 res_col_6">
                        <div class="searchCart">
                            <form class="d-flex blog_search_border">
                                <input class="me-1 cart_search_field" type="search" placeholder="Search"
                                    aria-label="Search" />
                                <button class="btn btn-success cart_search_btn" type="submit">
                                    <h5>ApplyNow</h5>
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6 res_col_6">
                        <h5 class="rec_center">
                            <a href="" class="btn btn-outline-success updateCart">Update Cart</a>
                        </h5>
                    </div>
                </div>
            </div>

            <div class="col-md-4 res_cart_col_4">
                <div class="shoppingCart_category">
                    <div class="">
                        <h4>Category</h4>

                        <h6>SubTotal <span class="float_right">$100.00</span></h6>
                        <h6>Shipping <span class="float_right">$60.0</span></h6>
                        <h6>Incl.Vat <span class="float_right">$90.0</span></h6>
                        <p></p>
                        <h5>Total Value <span class="float_right">= $250.0</span></h5>
                        <p></p>
                        <div class="row">
                            <div class="col_5 paymentCard">
                                <a href=""><img src="{{asset('frontEndAsset')}}/assets/img/payments/1.jpg" alt=""
                                        srcset="" /></a>
                            </div>
                            <div class="col_5 paymentCard">
                                <a href=""><img src="{{asset('frontEndAsset')}}/assets/img/payments/2.jpg" alt=""
                                        srcset="" /></a>
                            </div>
                            <div class="col_5 paymentCard">
                                <a href=""><img src="{{asset('frontEndAsset')}}/assets/img/payments/3.jpg" alt=""
                                        srcset="" /></a>
                            </div>
                            <div class="col_5 paymentCard">
                                <a href=""><img src="{{asset('frontEndAsset')}}/assets/img/payments/5.jpg" alt=""
                                        srcset="" /></a>
                            </div>
                            <div class="col_5 paymentCard">
                                <a href=""><img src="{{asset('frontEndAsset')}}/assets/img/payments/6.png" alt=""
                                        srcset="" /></a>
                            </div>
                        </div>

                        <div class="form-check mt-5">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked />
                            <label class="form-check-label" for="flexCheckChecked">
                                I agree with the terms & conditions
                            </label>
                        </div>
                    </div>
                    <div class="text-center">
                        <h5>
                            <a href="" class="btn btn-outline-success shoppingCartBtn">Proceed To CheckOut</a>
                        </h5>
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