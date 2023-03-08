@extends('frontEnd.master')
@section('title')
Grocery || Compare
@endsection

@section('content')

<section id="Compare" class="paddingTop">
    <div class="container">
        <table class="table table-bordered table-hover text-center align-items-center">
            <tr>
                <td class="tdWidth1">
                    <h5>Product</h5>
                </td>
                <td class="tdWidth2">
                    <div class="compaire_content">
                        <div class="compaire_img">
                            <img src="{{asset('frontEndAsset')}}/assets/img/compaire/1.png" alt="">
                            <a href=""><i class="fa-solid fa-trash-can compereTrustIcon"></i></a>
                        </div>
                        <span>
                            <h6 class="compaire_review">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </h6>
                            <h5 class="py-2">Ready Plus Cookie Dary Food </h5>
                            <h6 class="compaire_price pb-2"><strong>$100</strong> <small><s class="text-secondary">
                                        $120</s></small></h6>
                            <h5><a href="" class="btn btn-outline-success compaireCartBtn"><i
                                        class="fa-solid fa-cart-shopping me-2"></i> Add to Cart</a></h5>
                        </span>
                    </div>
                </td>
                <td class="tdWidth2">
                    <div class="compaire_content">
                        <div class="compaire_img">
                            <img src="{{asset('frontEndAsset')}}/assets/img/compaire/2.png" alt="">
                            <a href=""><i class="fa-solid fa-trash-can compereTrustIcon"></i></a>
                        </div>
                        <span>
                            <h6 class="compaire_review">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </h6>
                            <h5 class="py-2">Bombay Potato Spacy Chips</h5>
                            <h6 class="compaire_price pb-2"><strong>$10</strong> <small><s class="text-secondary">
                                        $15</s></small></h6>
                            <h5><a href="" class="btn btn-outline-success compaireCartBtn"><i
                                        class="fa-solid fa-cart-shopping me-2"></i> Add to Cart</a></h5>
                        </span>
                    </div>
                </td>
                <td class="tdWidth2">
                    <div class="compaire_content">
                        <div class="compaire_img">
                            <img src="{{asset('frontEndAsset')}}/assets/img/compaire/2.png" alt="">
                            <a href=""><i class="fa-solid fa-trash-can compereTrustIcon"></i></a>
                        </div>
                        <span>
                            <h6 class="compaire_review">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </h6>
                            <h5 class="py-2">Bombay Potato Spacy Chips</h5>
                            <h6 class="compaire_price pb-2"><strong>$10</strong> <small><s class="text-secondary">
                                        $15</s></small></h6>
                            <h5><a href="" class="btn btn-outline-success compaireCartBtn"><i
                                        class="fa-solid fa-cart-shopping me-2"></i> Add to Cart</a></h5>
                        </span>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <h5 class="compareTdhead">Description</h5>
                </td>
                <td class="compareTdText">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem,
                    perspiciatis.</td>
                <td class="compareTdText">Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia,
                    commodi.</td>
                <td class="compareTdText">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Inventore, ex.
                </td>
            </tr>
            <tr>
                <td>
                    <h5 class="compareTdhead">Weight</h5>
                </td>
                <td class="compareTdText">500gm</td>
                <td class="compareTdText">300gm</td>
                <td class="compareTdText">500gm</td>
            </tr>
            <tr>
                <td>
                    <h5 class="compareTdhead">Availability</h5>
                </td>
                <td class="compareTdText_inSt">Instrock</td>
                <td class="compareTdText_inSt">Instrock</td>
                <td class="compareTdText_outSt">Strock Out</td>
            </tr>
            <tr>
                <td>
                    <h5 class="compareTdhead">SKU</h5>
                </td>
                <td class="compareTdText">dghj458cvx</td>
                <td class="compareTdText">dghj458cvx</td>
                <td class="compareTdText">dghj458cvx</td>
            </tr>
            <tr>
                <td>
                    <h5 class="compareTdhead">Dimension</h5>
                </td>
                <td class="compareTdText">N/A</td>
                <td class="compareTdText">N/A</td>
                <td class="compareTdText">N/A</td>
            </tr>
        </table>


    </div>

    <!-- --------- for Mobile & Tablet Device------------- -->
    <div class="mobile_device">
        <div class="container">
            <div class="row">
                <div class="col-md-4 res_col_4">
                    <div class="compaire_content text-center">
                        <div class="compaire_img">
                            <img src="{{asset('frontEndAsset')}}/assets/img/compaire/1.png" alt="">
                            <a href=""><i class="fa-solid fa-trash-can compereTrustIcon"></i></a>
                        </div>
                        <span>
                            <h6 class="compaire_review">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </h6>
                            <h5 class="py-2">Ready Plus Cookie Dary Food </h5>
                            <h6 class="compaire_price pb-2"><strong>$100</strong> <small><s class="text-secondary">
                                        $120</s></small></h6>
                            <h5><a href="" class="btn btn-outline-success compaireCartBtn"><i
                                        class="fa-solid fa-cart-shopping me-2"></i> Details</a></h5>
                        </span>
                    </div>
                </div>
                <div class="col-md-4 res_col_4">
                    <div class="compaire_content text-center">
                        <div class="compaire_img">
                            <img src="{{asset('frontEndAsset')}}/assets/img/compaire/2.png" alt="">
                            <a href=""><i class="fa-solid fa-trash-can compereTrustIcon"></i></a>
                        </div>
                        <span>
                            <h6 class="compaire_review">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </h6>
                            <h5 class="py-2">Bombay Potato Spacy Chips</h5>
                            <h6 class="compaire_price pb-2"><strong>$10</strong> <small><s class="text-secondary">
                                        $15</s></small></h6>
                            <h5><a href="" class="btn btn-outline-success compaireCartBtn"><i
                                        class="fa-solid fa-cart-shopping me-2"></i> Details</a></h5>
                        </span>
                    </div>
                </div>
                <div class="col-md-4 res_col_4">
                    <div class="compaire_content text-center">
                        <div class="compaire_img">
                            <img src="{{asset('frontEndAsset')}}/assets/img/compaire/2.png" alt="">
                            <a href=""><i class="fa-solid fa-trash-can compereTrustIcon"></i></a>
                        </div>
                        <span>
                            <h6 class="compaire_review">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </h6>
                            <h5 class="py-2">Bombay Potato Spacy Chips</h5>
                            <h6 class="compaire_price pb-2"><strong>$10</strong> <small><s class="text-secondary">
                                        $15</s></small></h6>
                            <h5><a href="" class="btn btn-outline-success compaireCartBtn"><i
                                        class="fa-solid fa-cart-shopping me-2"></i> Details</a></h5>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- --------- for Mobile Device End------------- -->

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