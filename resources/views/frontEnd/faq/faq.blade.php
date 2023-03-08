@extends('frontEnd.master')
@section('title')
Grocery || FAQ
@endsection

@section('content')
<section id="Contact_us" class="paddingTop">
    <div class="container">
        <div class="container2">
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
                            <h3>Have Any Query In Your Mind Feel Free Contact Us</h3>

                            <form class="comment_form">
                                <input type="text" placeholder="Enter Name" required />
                                <input type="email" placeholder="Enter Email" required />
                                <textarea rows="5" placeholder="Your Comment" required></textarea>
                                <button type="submit" class="mt-3 btn btn-outline-primary btn_padding">
                                    Send Message
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="Popular_Question" class="py-5">
    <div class="container">
        <div class="container2">
            <h2 class="text-center">Popular Question For You</h2>
            <div class="faqShopping mt-4">
                <h4 class="py-4">Shopping Info</h4>
                <button class="faqShopping_accordion"> Q: Where Is Standard Shopping Available ?</button>
                <div class="faqShopping_panel">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>

                <button class="faqShopping_accordion">Q: Can I Change My Shopping Address ?</button>
                <div class="faqShopping_panel">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>

                <button class="faqShopping_accordion">Q: When Is Your Shopping Cart Off Time?</button>
                <div class="faqShopping_panel">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>

                <button class="faqShopping_accordion">Q: When Is Your Shopping Cart Off Time?</button>
                <div class="faqShopping_panel">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>


            </div>
            <div class="faqShopping mt-4">
                <h4 class="py-4">Order & Delevary</h4>
                <button class="faqShopping_accordion">Q: When Will My Credit Cart Big Change ?</button>
                <div class="faqShopping_panel">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>

                <button class="faqShopping_accordion"> Q: When Can I Do If I Have An Issu With My Order ?</button>
                <div class="faqShopping_panel">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>

                <button class="faqShopping_accordion">Q: What Payment Method Do You Accept?</button>
                <div class="faqShopping_panel">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
            </div>
            <div class="faqShopping mt-4">
                <h4 class="py-4">Payment</h4>
                <button class="faqShopping_accordion">Q: When Will My Credit Cart Big Change ?</button>
                <div class="faqShopping_panel">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>

                <button class="faqShopping_accordion"> Q: When Can I Do If I Have An Issu With My Order ?</button>
                <div class="faqShopping_panel">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>

                <button class="faqShopping_accordion">Q: What Payment Method Do You Accept?</button>
                <div class="faqShopping_panel">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
            </div>
        </div>
        <!-- ------------ for according js code-------------- -->
        <script>
        var acc = document.getElementsByClassName("faqShopping_accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function() {
                this.classList.toggle("faqShopping_active");
                var faqShopping_panel = this.nextElementSibling;
                if (faqShopping_panel.style.maxHeight) {
                    faqShopping_panel.style.maxHeight = null;
                } else {
                    faqShopping_panel.style.maxHeight = faqShopping_panel.scrollHeight + "px";
                }
            });
        }
        </script>
        <!-- -------------- for according js code-------------- -->

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