@extends('layout')

{{-- css section --}}
@section('css')
    <link rel="stylesheet" href="{{ asset('public/frontend/css/contact-page.css') }}">
    <link rel="stylesheet" href="{{ asset('public/frontend/css/navigation-restyle.css') }}">
    <link rel="stylesheet" href="{{ asset('public/frontend/css/sidebar-restyle.css') }}">
@endsection

{{-- Tawk.to --}}
@section('tawk')
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/627996a3b0d10b6f3e7161a4/1g2lf8sdm';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();

        // Custom styling of tawk
        Tawk_API.customStyle = {
            visibility: {
            //desktop
            desktop: {
                position: 'bl', // bottom-left
                xOffset: 15, // 15px away from right
                yOffset: 15 // 15px up from bottom
            },
            
            //mobile
            mobile: {
                position: 'bl', // bottom-left
                xOffset: 5, // 5px away from left
                yOffset: 5 // 5px up from bottom
            },
            }
        }
    </script>
@endsection

{{-- main content --}}
@section('content')
    <!--
    - Sidebar
    -->
    <div class="sidebar  has-scrollbar" data-mobile-menu>
        <div class="sidebar-row">

            <div class="sidebar-top">
                <h2 class="sidebar-title">
                    <i class="fa-solid fa-bars"></i>
                    Danh mục
                </h2>

                <button class="sidebar-close-btn" data-mobile-menu-close-btn>
                    <ion-icon name="close-outline"></ion-icon>
                </button>
            </div>

            @foreach ($category as $key => $cate)
                <ul class="sidebar-menu-row-list">

                    <li class="sidebar-menu-row">

                        <button class="sidebar-accordion-menu" data-accordion-btn>

                            <a class="menu-title-flex" href="{{ URL::to('/danh-muc-san-pham/' . $cate->category_id) }}">
                                <i class="fa-solid fa-pills"></i>
                                <p class="menu-title">{{ $cate->category_name }}</p>
                            </a>

                        </button>
                    </li>

                </ul>
            @endforeach
        </div>

    </div>

    <!--
    - Contact
    -->
    <div class="contact">
        <div class="contact-info">
            <div class="contact-info-top">
                <h2>
                    Liên lạc với 7Team
                </h2>

                <p>
                    Quý khách có nhu cầu liên lạc, trao đổi hoặc đóng góp ý kiến, vui lòng tham khảo các thông tin sau:
                </p>

                <p>
                    <span> Điện thoại: </span>
                    0985.443.737
                </p>

                <p>
                    <span> Email: </span>
                    cskt7team@gmail.com
                </p>

                <p>
                    <span> Đối tác có nhu cầu hợp tác quảng cáo hoặc kinh doanh:</span>
                    xxx xxxx xxx
                </p>
                <span>Socical:
                    <i class="fa-brands fa-facebook-square"></i>
                    <i class="fa-solid fa-envelope"></i>
                    <i class="fa-brands fa-youtube"></i>
                    <i class="fa-brands fa-instagram"></i>
                </span>
                </p>
            </div>

            <div class="contact-info-bottom">
                <p class="contact-info-bottom-title">
                    <i>Quý khách có nhu cầu liên lạc, trao đổi hoặc đóng góp ý kiến, vui lòng tham khảo các thông tin
                        sau:</i>
                </p>

                <p>
                    <span> Đối tác có nhu cầu hợp tác quảng cáo hoặc kinh doanh: </span>
                    hotro@7teamtpcn.com
                </p>

                <p>
                    <span> Địa chỉ nhận hàng đổi/trả/bảo hành: </span>
                    Trung tâm xử lý đơn hàng 7teamtpcn.com TP.Đà Lạt
                </p>

                <p>
                    <i>
                        (Tham khảo <a href="hướng dẫn đổi, trả, bảo hành"> <u>hướng dẫn đổi, trả, bảo hành</u></a> hoặc liên
                        hệ <strong>XXXX XXX XXX</strong> để được hướng dẫn trước khi gửi sản phẩm về 7teamtpcn.com).
                    </i>
                </p>
            </div>

            <img src="{{ asset('public/frontend/images/page-image/contact/minion-contact.png') }}" alt="">
        </div>

        <div class="feedback">
            <div class="feedback-title">
                <h2>Gửi tin nhắn cho 7Team</h2>
            </div>

            <div class="feedback-form">
                <img src="{{ asset('public/frontend/images/page-image/contact/minion-feedback.png') }}" alt="">

                <form action="">
                    <label class="label-form">
                        <span class="block-text">Họ Tên</span>
                        <span class="form-control-contact name"><input type="text" name="contact_name"
                                placeholder="Nguyễn Văn A" /></span>
                    </label>
                    <label class="label-form">
                        <span class="block-text">Số điện thoại</span>
                        <span class="form-control-contact phone"><input type="tel" name="contact_phone"
                                placeholder="0834105678" /></span>
                    </label>
                    <label class="label-form">
                        <span class="block-text">Email</span>
                        <span class="form-control-contact email"><input type="email" name="contact_email"
                                placeholder="nguyenvana@gmail.com" /></span>
                    </label>
                    <label class="label-form">
                        <span class="block-text">Lời nhắn</span>
                        <span class="form-control-contact message">
                            <textarea name="contact_message" placeholder="Tôi cần thông tin về sản phẩm..."></textarea>
                        </span>
                    </label>
                    <input class="feedback-btn" type="submit" value="Gửi tin nhắn" />
                </form>


            </div>
        </div>
    </div>

    <!--
    - Location
    -->
    <div class="location">
        <div class="location-container">
            <h2>
                Vị trí của shop
            </h2>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3903.2631443348614!2d108.4402914143731!3d11.956274191527562!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317112dbad51f175%3A0x32eef2677c920574!2zNDcgxJDGsOG7nW5nIFBow7kgxJDhu5VuZyBUaGnDqm4gVsawxqFuZywgUGjGsOG7nW5nIDgsIFRow6BuaCBwaOG7kSDEkMOgIEzhuqF0LCBMw6JtIMSQ4buTbmcsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1652100251143!5m2!1svi!2s"
                width="1100" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>

    <!--
    - Contact box
    -->
    <div class="contact-box">
        <i class="fa-solid fa-xmark contact-box-close-btn"></i>
        <img src="{{ asset('public/frontend/images/page-image/contact/contact-girl.png') }}" alt="Lỗi hiển thị">
        <button>
            <a href="">
                Bạn Cần Trợ Giúp?
            </a>
        </button>
    </div>

    <!--
    - Contact box slide
    -->
    <div class="contact-box-slide">
    </div>
@endsection

{{-- script section --}}
@section('script')
    <script src="{{ asset('public/frontend/js/contact-page.js') }}"></script>
    <script src="{{ asset('public/frontend/js/sticky-navbar.js') }}"></script>
@endsection

