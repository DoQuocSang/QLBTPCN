@extends('layout')

{{-- css section --}}
@section('css')
    <link rel="stylesheet" href="{{ asset('public/frontend/css/about-page.css') }}">
    <link rel="stylesheet" href="{{ asset('public/frontend/css/navigation-restyle.css') }}">
    <link rel="stylesheet" href="{{ asset('public/frontend/css/sidebar-restyle.css') }}">
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
        - About
        -->
    <section class="about">
        <div class="container">
            <div class="about-content">
                <h1 class="about-title"> GIỚI THIỆU SHOP THỰC PHẨM CHỨC NĂNG 7Team</h1>
                <div class="about-content">
                    <p>Chào mừng quý khách hàng đến website Shop Thực Phẩm Chức Năng 7Team – SHOP THỰC PHẨM CHỨC NĂNG 7Team
                        Chuyên cung cấp các loại thực phẩm chức năng và mỹ phẩm cũng như các sản phẩm chăm sóc sức khỏe làm
                        đẹp cho cơ thể. Các sản phẩm đăng bán được hợp tác với các nhà phân phối, công ty uy tín có nguồn gốc
                        xuất sứ rõ ràng, đảm bảo chất lượng, giá cả rõ ràng.</p>
                    
                    <p>
                        Tiêu chí của Shop Thực Phẩm Chức Năng 7Team là “KHÔNG
                        HÀNG GIẢ” nên quý khách hàng hoàn toàn yên tâm khi đặt mua tại Shop.
                    </p>

                    <p> 
                        Thực phẩm chức năng có tác dụng hỗ trợ (phục hồi, duy trì hoặc tăng cường) chức năng của các bộ phận
                        trong cơ thể, có hoặc không tác dụng dinh dưỡng, tạo cho cơ thể tình trạng thoải mái, tăng sức đề
                        kháng
                        và giảm bớt nguy cơ bệnh tật. Thực phẩm chức năng có tác dụng hỗ trợ chức năng các bộ phận trong cơ
                        thể.
                    </p>
                </div>

            </div>

            <img class="about-img" src="{{ asset('public/frontend/images/page-image/about/7team-about.jpg') }}"
                alt="lỗi hiển thị">
        </div>
    </section>

    <!--
        - Services
        -->
    <section class="services">

        <div class="container">

            <div class="sv-left">
                <div class="sv-row">
                    <i class="fa-solid fa-eye"></i>
                    <div class="sv-row-content">
                        <h2>Tầm nhìn</h2>
                        <p>Đến năm 2027, Siêu Thị Sống Khỏe sẽ trở thành doanh nghiệp dẫn đầu về phân phối sản phẩm thực
                            phẩm chức năng chăm sóc sức khoẻ CHÍNH HÃNG cho người Việt Nam.</p>
                    </div>
                </div>

                <div class="sv-row">
                    <i class="fa-solid fa-volcano"></i>
                    <div class="sv-row-content">
                        <h2>Sứ mệnh</h2>
                        <p>Cung cấp sản phẩm chất lượng nhằm bảo vệ và nâng cao sức khoẻ và con người Việt Nam</p>
                    </div>

                </div>

                <div class="sv-row">
                    <i class="fa-solid fa-gem"></i>
                    <div class="sv-row-content">
                        <h2>Giá trị cốt lõi</h2>
                        <p>Công ty hoạt động với tiêu chí 4 T: Tín – Tâm – Trí – Thân</p>
                        <ul>
                            <li>
                                • Tín: Thực hiện những gì đã công bố, cam kết giữ đúng lời hứa với khách hàng, nhân viên,
                                đối tác, xã hội.
                            </li>

                            <li>
                                • Tâm: Tận tâm vì khách hàng, đối tác, nhân viên, xã hội.
                            </li>

                            <li>
                                • Trí: Sáng tạo, dám thử cái mới, không ngừng học hỏi.
                            </li>

                            <li>
                                • Thân: Xây dựng mối quan hệ chiến lược bền vững với khách hàng, đối tác, nhân viên, xã hội.
                            </li>
                        </ul>
                    </div>
                </div>

            </div>

            <div class="sv-right">
                <p class="sv-right-row">
                <h2>Triết lý kinh doanh</h2>
                <p>
                    Công ty TNHH Siêu Thị Sống Khỏe hoạt động với triết lý kinh doanh TRUNG THỰC – TẬN TÂM – CHÂN THÀNH.
                </p>
                </p>

                <div class="sv-right-row">
                    <i class="fa-solid fa-circle-1"></i>
                    <div class="sv-right-title">
                        <h1>1</h1>
                        <h2>Trung thực</h2>
                    </div>

                    <p>
                        Trong từng sản phẩm: Giữa muôn vàn thật giả lẫn lộn của thời đại ngày nay, 7teamTPCN.com là nơi giúp
                        khách hàng có được sự an tâm khi sử dụng các sản phẩm thuốc thảo dược. Chúng tôi cam kết chỉ cung
                        cấp các sản phẩm có nguồn gốc rõ ràng, chính hãng và uy tín nhất trên thị trường.
                    </p>
                </div>

                <div class="sv-right-row">
                    <i class="fa-solid fa-circle-1"></i>
                    <div class="sv-right-title">
                        <h1>2</h1>
                        <h2>Tận tâm</h2>
                    </div>

                    <p>
                        Trong từng cuộc điện thoại hỗ trợ tư vấn cho khách hàng: Chúng tôi luôn sẵn sàng giải đáp những thắc
                        mắc về bệnh cũng như hướng dẫn điều chỉnh thói quen sinh hoạt tốt hơn cho khách hàng.
                    </p>
                </div>

                <div class="sv-right-row">
                    <i class="fa-solid fa-circle-1"></i>
                    <div class="sv-right-title">
                        <h1>3</h1>
                        <h2>Chân Thành</h2>
                    </div>

                    <p>
                        Trong từng cuộc trò chuyện: Lắng nghe những trăn trở của khách hàng để đưa ra những lời khuyên chính
                        xác khi dùng sản phẩm, là một người bạn đồng hành cùng bệnh nhân.
                    </p>
                </div>

            </div>

        </div>

    </section>

    <!--
        - Policy
        -->
    <section class="policy">
        <div class="container">

            <div class="plc-left">
                <div class="plc-row">
                    <div class="plc-row-content">
                        <h2>Chính sách chất lượng</h2>
                        <p>Với mục tiêu mang những sản phẩm chăm sóc sức khỏe tốt đến khách hàng, Siêu Thị Sống Khoẻ luôn nỗ
                            lực không ngừng nhằm nâng cao chất lượng nguồn hàng và dịch vụ. Khi mua hàng qua mạng tại
                            7teamTPCN.com khách hàng sẽ được hưởng các tiện ích như sau:</p>
                    </div>
                </div>

                <div class="plc-row">
                    <i class="fa-solid fa-headphones-simple"></i>
                    <div class="plc-row-content">

                        <p>
                            <span>Dịch vụ chăm sóc khách hàng : </span>
                            tận tình trước-trong-sau khi mua hàng, xuyên suốt 7 ngày/tuần, từ 8:00 đến 21:00
                        </p>
                    </div>

                </div>

                <div class="plc-row">
                    <i class="fa-solid fa-gifts"></i>
                    <div class="plc-row-content">

                        <p>
                            <span>Giá Tốt – Quà Nhiều :</span>
                            hơn 90% sản phẩm được giảm giá từ 7% trở lên hoặc có quà tặng kèm.
                        </p>

                    </div>
                </div>

                <div class="plc-row">
                    <i class="fa-solid fa-truck-fast"></i>
                    <div class="plc-row-content">

                        <p>
                            <span>Giao hàng miễn phí : </span>
                            (đối với đơn hàng từ 777.000đ trở lên)
                        </p>

                    </div>
                </div>

                <div class="plc-row">
                    <i class="fa-solid fa-user-plus"></i>
                    <div class="plc-row-content">
                        <p>
                            <span>Đăng ký thành viên : </span>
                            trở thành khách hàng thân thiết, giới thiệu bạn bè người thân để có cơ hội mua sản phẩm với giá
                            hời.
                        </p>

                    </div>
                </div>
                <div class="plc-row">
                    <i class="fa-solid fa-people-carry-box"></i>
                    <div class="plc-row-content">
                        <p>
                            <span>Uy tín trong giao dịch : </span>
                            Chất lượng trong sản phẩm – Tận tình trong hỗ trợ tư vấn là phương châm của chúng tôi.
                        </p>

                    </div>
                </div>
            </div>


            <div class="plc-right">
                <div class="plc-row">
                    <div class="plc-row-content">
                        <h2>Thông tin liên hệ</h2>
                        <p>Quý khách có nhu cầu liên lạc, trao đổi hoặc đóng góp ý kiến, vui lòng tham khảo các thông tin
                            sau:</p>
                    </div>
                </div>

                <div class="plc-row">
                    <i class="fa-solid fa-phone"></i>
                    <div class="plc-row-content">
                        <p>
                            <span>Liên lạc qua điện thoại : </span>
                            XXXX XXX XXX hoặc XXXX XXX XXX
                        </p>
                    </div>

                </div>

                <div class="plc-row">
                    <i class="fa-solid fa-envelope"></i>
                    <div class="plc-row-content">
                        <p>
                            <span>Liên lạc qua email : </span>
                            XXX@gmail.com
                        </p>
                    </div>

                </div>

                <div class="plc-row">
                    <i class="fa-brands fa-facebook-square"></i>
                    <div class="plc-row-content">
                        <p>
                            <span>Fanpage : </span>
                            XXX.facebook.com
                        </p>

                    </div>
                </div>

                <div class="plc-row">
                    <i class="fa-solid fa-location-dot"></i>
                    <div class="plc-row-content">
                        <p>
                            <span>Địa chỉ nhận hàng đổi/trả/bảo hành : </span>
                            XXX (Tham khảo hướng dẫn đổi, trả, bảo hành hoặc liên hệ 0888 533 350 để được hướng dẫn trước
                            khi gửi sản phẩm về Siêu Thị Sống Khỏe)
                        </p>

                    </div>
                </div>
            </div>

    </section>
@endsection

{{-- script section --}}
@section('script')
    <script src="{{ asset('public/frontend/js/sticky-navbar.js') }}"></script>
@endsection


{{-- shift alt F --}}
