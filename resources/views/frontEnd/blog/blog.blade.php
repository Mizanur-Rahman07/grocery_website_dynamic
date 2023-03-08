@extends('frontEnd.master')
@section('title')
Grocery || Blog
@endsection

@section('content')
<section id="Vegetable" class="paddingTop">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="vegetable">
                    <img src="{{asset('frontEndAsset')}}/assets/img/blog/1.PNG" alt="">
                    <p class="pt-4 pb-3">By : Mizan_02 September, 2022 (0)Comments </p>
                    <h2>How To Keep Potapoes From Sprouting</h2>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quaerat quasi praesentium omnis
                        debitis unde natus non, dicta molestias odio eius. Voluptate, earum. Aperiam fugiat ullam
                        reprehenderit dolorem obcaecati quos facere in, magni fuga iure delectus nisi aliquid
                        placeat quas, ut nesciunt, eligendi ratione dolor veniam ea maiores odit? Minus, quos. atus
                        non, dicta molestias odio eius. Voluptate, earum. Aperiam fugiat ullam
                        reprehenderit dolorem obcaecati quos facere in, magni fuga iure delectus nisi aliquid
                        placeat quas, ut nesciunt, eligendi ratione dolor veniam ea maiores odit? Minus, quos.</p>

                    <h5><a href="">Continue Reading +</a> </h5>
                </div>
                <div class="organic vegetable">
                    <img src="{{asset('frontEndAsset')}}/assets/img/blog/2.PNG" alt="">
                    <p class="pt-4 pb-3">By : Mizan_02 September, 2022 (0)Comments </p>
                    <h2>How To Make Meen Fish Resepi You Must Try</h2>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quaerat quasi praesentium omnis
                        debitis unde natus non, dicta molestias odio eius. Voluptate, earum. Aperiam fugiat ullam
                        reprehenderit dolorem obcaecati quos facere in, magni fuga iure delectus nisi aliquid
                        placeat quas, ut nesciunt, eligendi ratione dolor veniam ea maiores odit? Minus, quos. atus
                        non, dicta molestias odio eius. Voluptate, earum. Aperiam fugiat ullam
                        reprehenderit dolorem obcaecati quos facere in, magni fuga iure delectus nisi aliquid
                        placeat quas, ut nesciunt, eligendi ratione dolor veniam ea maiores odit? Minus, quos.</p>

                    <h5><a href="">Continue Reading +</a> </h5>
                </div>
                <div class="meet&fish vegetable">
                    <iframe width="100%" height="500px" src="https://www.youtube.com/embed/wazg6u3ESco"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                    <p class="pt-4 pb-3">By : Mizan_02 September, 2022 (0)Comments </p>
                    <h2>Mindy Kaling Of This Cuising Guess</h2>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quaerat quasi praesentium omnis
                        debitis unde natus non, dicta molestias odio eius. Voluptate, earum. Aperiam fugiat ullam
                        reprehenderit dolorem obcaecati quos facere in, magni fuga iure delectus nisi aliquid
                        placeat quas, ut nesciunt, eligendi ratione dolor veniam ea maiores odit? Minus, quos. atus
                        non, dicta molestias odio eius. Voluptate, earum. Aperiam fugiat ullam
                        reprehenderit dolorem obcaecati quos facere in, magni fuga iure delectus nisi aliquid
                        placeat quas, ut nesciunt, eligendi ratione dolor veniam ea maiores odit? Minus, quos.</p>

                    <h5><a href="">Continue Reading +</a> </h5>
                </div>
                <div class="beverage vegetable">
                    <img src="{{asset('frontEndAsset')}}/assets/img/blog/4.PNG" alt="">
                    <p class="pt-4 pb-3">By : Mizan_02 September, 2022 (0)Comments </p>
                    <h2>Italian Man Has Collection Of Soda Cans</h2>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quaerat quasi praesentium omnis
                        debitis unde natus non, dicta molestias odio eius. Voluptate, earum. Aperiam fugiat ullam
                        reprehenderit dolorem obcaecati quos facere in, magni fuga iure delectus nisi aliquid
                        placeat quas, ut nesciunt, eligendi ratione dolor veniam ea maiores odit? Minus, quos. atus
                        non, dicta molestias odio eius. Voluptate, earum. Aperiam fugiat ullam
                        reprehenderit dolorem obcaecati quos facere in, magni fuga iure delectus nisi aliquid
                        placeat quas, ut nesciunt, eligendi ratione dolor veniam ea maiores odit? Minus, quos.</p>

                    <h5><a href="">Continue Reading +</a> </h5>
                </div>
            </div>

            <div class="col-md-4 ">
                <div class="blog_col_padding">
                    <form class="d-flex blog_search_border mb-4">
                        <input class="me-2 blog_search_field" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success blog_search_btn" type="submit"><i
                                class="fa-solid fa-magnifying-glass"></i></button>
                    </form>
                    <div class="blog_category mt-4">
                        <div class="">
                            <h4>Category</h4>
                            <a href="">
                                <p>Bakery & Pastry (15)</p>
                            </a>
                            <a href="">
                                <p>Fresh Vegetable (15)</p>
                            </a>
                            <a href="">
                                <p>Frozen Food (15)</p>
                            </a>
                            <a href="">
                                <p>Meat & Fish (15)</p>
                            </a>
                            <a href="">
                                <p>Custard Powder (15)</p>
                            </a>
                            <a href="">
                                <p>Fruit Juices (15)</p>
                            </a>
                            <a href="">
                                <p>Organic Fruits (15)</p>
                            </a>
                            <a href="">
                                <p>Snacks Items (15)</p>
                            </a>
                        </div>
                    </div>

                    <div class="blog_popular_post mt-4">
                        <div class="">
                            <h4>Popular Post</h4>
                            <div class="blog_popular_content">
                                <a href="{{asset('frontEndAsset')}}/assets/img/blog/lemon-juice.jpg"
                                    data-lightbox="mygallery" data-title="Caption-4"> <img
                                        src="{{asset('frontEndAsset')}}/assets/img/blog/lemon-juice.jpg" alt=""></a>
                                <span>
                                    <p>04 September 2022</p>
                                    <h5>Nulla Laoreet sceleres habitant massea eget susciopit</h5>
                                </span>
                            </div>
                            <div class="blog_popular_content">
                                <a href="{{asset('frontEndAsset')}}/assets/img/blog/4.jpg" data-lightbox="mygallery"
                                    data-title="Caption-4">
                                    <img src="{{asset('frontEndAsset')}}/assets/img/blog/4.jpg" alt=""></a>
                                <span>
                                    <p>04 September 2022</p>
                                    <h5>Commodo auctor an iaculis commodo pulviner</h5>
                                </span>
                            </div>
                            <div class="blog_popular_content">
                                <a href="{{asset('frontEndAsset')}}/assets/img/blog/5.jpg" data-lightbox="mygallery"
                                    data-title="Caption-4">
                                    <img src="{{asset('frontEndAsset')}}/assets/img/blog/5.jpg" alt=""></a>
                                <span>
                                    <p>04 September 2022</p>
                                    <h5>Sociis Potineti commo nostra magnic inceptos diam</h5>
                                </span>
                            </div>
                            <div class="blog_popular_content">
                                <a href="{{asset('frontEndAsset')}}/assets/img/blog/7.jpg" data-lightbox="mygallery"
                                    data-title="Caption-4">
                                    <img src="{{asset('frontEndAsset')}}/assets/img/blog/7.jpg" alt=""></a>
                                <span>
                                    <p>04 September 2022</p>
                                    <h5>Open third kind of seasons divided thet life</h5>
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="tags_clouds mt-4">
                        <div class="">
                            <h4>Tags Clouds</h4>
                            <div class="tag_button mb-5">
                                <a href="" class="btn btn-outline-success tag_btn ">Salad</a>
                                <a href="" class="btn btn-outline-success tag_btn ">Vegetable</a>
                                <a href="" class="btn btn-outline-success tag_btn ">Fruites</a>
                                <a href="" class="btn btn-outline-success tag_btn ">Accessories</a>
                                <a href="" class="btn btn-outline-success tag_btn ">Career</a>
                                <a href="" class="btn btn-outline-success tag_btn ">Beverage</a>
                                <a href="" class="btn btn-outline-success tag_btn ">Potato</a>
                                <a href="" class="btn btn-outline-success tag_btn ">Electric</a>
                                <a href="" class="btn btn-outline-success tag_btn ">Color</a>
                                <a href="" class="btn btn-outline-success tag_btn ">Honeycomb</a>
                                <a href="" class="btn btn-outline-success tag_btn ">Snacks</a>
                            </div>
                        </div>
                    </div>

                    <div class="order_grocery mt-4">
                        <img src="{{asset('frontEndAsset')}}/assets/img/blog/08.jpg" alt="">
                        <div class="blog_grocary_content">
                            <p>$ 5.00 CASHBACK</p>
                            <h2>Easy To Order Grocery All Product</h2>
                        </div>
                        <div class="apple_logo_img">
                            <img src="{{asset('frontEndAsset')}}/assets/img/blog/apple_logo.jpg" alt="">
                        </div>
                        <div class="google_logo_img">
                            <img src="{{asset('frontEndAsset')}}/assets/img/blog/google_play.PNG" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection