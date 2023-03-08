@extends('frontEnd.master')
@section('title')
Grocery || Shopping Cart
@endsection

@section('content')
<section id="WishList" class="pb-5 paddingTop">
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8 wishList_col_8_res">
                <div class="wishlist_head">
                    <div class="row">
                        <div class="col-md-6 ">
                            <h5 class="wishHead_product">Product</h5>
                        </div>
                        <div class="col-md-3">
                            <h5 class="wishHead_strock">Strock Status</h5>
                        </div>
                        <div class="col-md-3">
                            <h5 class="wishHead_action">Action</h5>
                        </div>
                    </div>
                </div>
                <div class="wishlist_body">
                    <div class="wishlist_main_content">
                        <div class="row m-0">
                            <div class="col-md-6">
                                <div class="wishlist_content py-4 d-flex">
                                    <div class="row m-0">
                                        <div class="col-md-6 p-0">
                                            <a href=""><i class="fa-solid fa-trash-can trustIcon"></i></a>
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
                            <div class="col-md-3">
                                <h6 class="wishStrock">Instrock</h6>
                            </div>
                            <div class="col-md-3">
                                <h5>
                                    <a href="" class="btn btn-outline-success wishCart">Add to Cart</a>
                                </h5>
                            </div>
                            <div class="col-md-12 wishList_border_bottom"></div>
                            <div class="col-md-6">
                                <div class="wishlist_content py-4 d-flex">
                                    <div class="row m-0">
                                        <div class="col-md-6 p-0">
                                            <a href=""><i class="fa-solid fa-trash-can trustIcon"></i></a>
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
                            <div class="col-md-3">
                                <h6 class="wishStrock">Instrock</h6>
                            </div>
                            <div class="col-md-3">
                                <h5>
                                    <a href="" class="btn btn-outline-success wishCart">Add to Cart</a>
                                </h5>
                            </div>
                            <div class="col-md-12 wishList_border_bottom"></div>
                            <div class="col-md-6">
                                <div class="wishlist_content py-4 d-flex">
                                    <div class="row m-0">
                                        <div class="col-md-6 p-0">
                                            <a href=""><i class="fa-solid fa-trash-can trustIcon"></i></a>
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
                            <div class="col-md-3">
                                <h6 class="wishStrock">Instrock</h6>
                            </div>
                            <div class="col-md-3">
                                <h5>
                                    <a href="" class="btn btn-outline-success wishCart">Add to Cart</a>
                                </h5>
                            </div>
                            <div class="col-md-12 wishList_border_bottom"></div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-2"></div>
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