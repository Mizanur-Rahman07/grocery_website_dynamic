@extends('frontEnd.master')
@section('title')
Grocery || Contact
@endsection

@section('content')
<section id="Contact_Map" class="paddingTop">
    <div class="container">
        <div class="col-md-12">
            <div class="contact_map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387193.30598845525!2d-74.25986926528857!3d40.69714941018088!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1661866045220!5m2!1sen!2sbd"
                    width="100%" height="450" style="border:0; color:gray" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</section>
<section id="Contact_us" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="contact_img">
                    <!-- <img src="{{asset('frontEndAsset')}}/assets/img/Capture2.PNG" alt="" srcset=""> -->
                    <a href="{{asset('frontEndAsset')}}/assets/img/contact/Capture2.PNG" data-lightbox="mygallery"
                        data-title="Caption-6"> <img src="{{asset('frontEndAsset')}}/assets/img/contact/Capture2.PNG"
                            alt=""></a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="send_message">
                    <div class="left_comnt_box">
                        <h3>Have Any Query In Your Mind Feel Free Contact Us</h3>

                        <form class="comment_form">
                            <input type="text" placeholder="Enter Name" required>
                            <input type="email" placeholder="Enter Email" required>
                            <textarea rows="5" placeholder="Your Comment" required></textarea>
                            <button type="submit" class=" mt-3 btn btn-outline-primary btn_padding ">Send
                                Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="Brance_location" class="mb-5">
    <div class="container">
        <div class="heading text-center py-4">
            <h2>Our Brance Location</h2>
        </div>
        <div class="row mt-4">
            <div class="col-md-3 res_contact_col_3">
                <div class="brance">
                    <h4 class="mb-3">California</h4>
                    <p>Codexcube 1207 Mohammadpur Shyamoli, Dhaka</p>
                    <p>+880 1755-463304</p>
                    <p>mzrahman075@gmail.com</p>
                </div>
            </div>
            <div class="col-md-3 res_contact_col_3">
                <div class="brance">
                    <h4 class="mb-3">California</h4>
                    <p>Codexcube 1207 Mohammadpur Shyamoli, Dhaka</p>
                    <p>+880 1755-463304</p>
                    <p>mzrahman075@gmail.com</p>
                </div>
            </div>
            <div class="col-md-3 res_contact_col_3">
                <div class="brance">
                    <h4 class="mb-3">California</h4>
                    <p>Codexcube 1207 Mohammadpur Shyamoli, Dhaka</p>
                    <p>+880 1755-463304</p>
                    <p>mzrahman075@gmail.com</p>
                </div>
            </div>
            <div class="col-md-3 res_contact_col_3">
                <div class="brance">
                    <h4 class="mb-3">California</h4>
                    <p>Codexcube 1207 Mohammadpur Shyamoli, Dhaka</p>
                    <p>+880 1755-463304</p>
                    <p>mzrahman075@gmail.com</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection