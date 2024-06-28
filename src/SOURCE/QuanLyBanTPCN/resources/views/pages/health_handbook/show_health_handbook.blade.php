@extends('layout')

{{-- css section --}}
@section('css')
    <link rel="stylesheet" href="{{ asset('public/frontend/css/show-blogs-grid.css') }}">
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
    - Home
    -->    
    <section class="home" id="home">

        <div class="image">
            <img src="{{ asset('public/frontend/images/page-image/health-handbook/home-img.svg') }}" alt="">
        </div>

        <div class="content">
            <img src="{{ asset('public/frontend/images/page-image/health-handbook/handbook.png') }}" alt="">
            <h3>Chào mừng bạn đến với Cẩm Nang Sức Khỏe</h3>
            <p>Tại đây, 7Team cam kết sẽ mang đến cho bạn những kiến thức và thông tin bổ ích về sức khỏe phù hợp với mọi
                lứa tuổi </p>

        </div>

    </section>

    <!--
    - Blogs
    -->
    <section class="blogs" id="blogs">

        <h1 class="heading"> CẨM NANG <span>SỨC KHỎE</span> </h1>

        <div class="box-container">

            <div class="box">
                <div class="image">
                    <img src="{{ asset('public/frontend/images/page-image/health-handbook/blog1.jpg') }}" alt="">
                </div>
                <div class="content">
                    <div class="icon">
                        <a href="#"> <i class="fas fa-calendar"></i> 5/5/2022 </a>
                        <a href="#"> <i class="fas fa-user"></i> by 7Team </a>
                    </div>
                    <h3>Núc nác: Dược liệu giúp trị gàu và nấm da đầu hiệu quả
                    </h3>
                    <p>Núc nác hay còn được gọi là Nam hoàng bá, là một vị thuốc mọc hoang ở...</p>
                    <a href="{{URL::to('/cam-nang-suc-khoe/bai-viet')}}" class="btn"> Xem thêm <span class="fas fa-chevron-right"></span> </a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="{{ asset('public/frontend/images/page-image/health-handbook/blog2.jpg') }}" alt="">
                </div>
                <div class="content">
                    <div class="icon">
                        <a href="#"> <i class="fas fa-calendar"></i> 5/5/2022 </a>
                        <a href="#"> <i class="fas fa-user"></i> by 7Team </a>
                    </div>
                    <h3>Bồ kết và những điều bạn chưa biết</h3>
                    <p>Mọi người thường biết đến bồ kết thông qua việc sử dụng để gội sạch đầu...</p>
                    <a href="{{URL::to('/cam-nang-suc-khoe/bai-viet')}}" class="btn"> Xem thêm <span class="fas fa-chevron-right"></span> </a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="{{ asset('public/frontend/images/page-image/health-handbook/blog3.jpg') }}" alt="">
                </div>
                <div class="content">
                    <div class="icon">
                        <a href="#"> <i class="fas fa-calendar"></i> 5/5/2022 </a>
                        <a href="#"> <i class="fas fa-user"></i> by 7Team </a>
                    </div>
                    <h3>Hoa Cúc Đức: vị thuốc chữa các rối loạn tiêu hóa</h3>
                    <p>Hoa cúc Đức hay còn được gọi là Dương cam cúc. Nhờ vào đặc tính chống oxy hóa và...</p>
                    <a href="{{URL::to('/cam-nang-suc-khoe/bai-viet')}}" class="btn"> Xem thêm <span class="fas fa-chevron-right"></span> </a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="{{ asset('public/frontend/images/page-image/health-handbook/blog4.jpg') }}" alt="">
                </div>
                <div class="content">
                    <div class="icon">
                        <a href="#"> <i class="fas fa-calendar"></i> 5/5/2022 </a>
                        <a href="#"> <i class="fas fa-user"></i> by 7Team </a>
                    </div>
                    <h3>Cỏ Mần Trầu: Công dụng, liều dùng và lưu ý khi sử dụng</h3>
                    <p>Có thể tìm thấy Cỏ mần trầu ở khắp mọi miền đất nước ta Việt. Cỏ mần trâu được biết đến nhiều với khả
                        năng kháng Glyphosate...</p>
                    <a href="{{URL::to('/cam-nang-suc-khoe/bai-viet')}}" class="btn"> Xem thêm <span class="fas fa-chevron-right"></span> </a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="{{ asset('public/frontend/images/page-image/health-handbook/blog5.jpg') }}" alt="">
                </div>
                <div class="content">
                    <div class="icon">
                        <a href="#"> <i class="fas fa-calendar"></i> 5/5/2022 </a>
                        <a href="#"> <i class="fas fa-user"></i> by 7Team </a>
                    </div>
                    <h3>Bá bệnh: Công dụng, liều dùng và một số bài thuốc trong dân gian</h3>
                    <p>Cây bá bệnh, hay còn gọi là bách bệnh. Sở dĩ có tên gọi như vậy là do loại cây này được sử dụng để
                        chữa rất nhiều bệnh lý khác...</p>
                    <a href="{{URL::to('/cam-nang-suc-khoe/bai-viet')}}" class="btn"> Xem thêm <span class="fas fa-chevron-right"></span> </a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="{{ asset('public/frontend/images/page-image/health-handbook/blog6.jpg') }}" alt="">
                </div>
                <div class="content">
                    <div class="icon">
                        <a href="#"> <i class="fas fa-calendar"></i> 5/5/2022 </a>
                        <a href="#"> <i class="fas fa-user"></i> by 7Team </a>
                    </div>
                    <h3> 6 cây thuốc nam trị tiểu đêm vô cùng hiệu quả</h3>
                    <p>Tiểu đêm là khái niệm để chỉ tình trạng người bệnh phải thức dậy để đi tiểu từ hai lần trở lên vào
                        ban đêm. Tiểu đêm là...</p>
                    <a href="{{URL::to('/cam-nang-suc-khoe/bai-viet')}}" class="btn"> Xem thêm <span class="fas fa-chevron-right"></span> </a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="{{ asset('public/frontend/images/page-image/health-handbook/blog7.jpg') }}" alt="">
                </div>
                <div class="content">
                    <div class="icon">
                        <a href="#"> <i class="fas fa-calendar"></i> 5/5/2022 </a>
                        <a href="#"> <i class="fas fa-user"></i> by 7Team </a>
                    </div>
                    <h3>Hướng dẫn bài thuốc chữa chứng tiểu đêm, các lưu ý khi sử dụng</h3>
                    <p>Tiểu đêm gây nên rối loạn giấc ngủ, làm người mắc phải luôn cảm thấy mệt mỏi, thiếu sức sống. Hiện
                        nay, không chỉ Tây y mà dân gian cũng có nhiều...</p>
                    <a href="{{URL::to('/cam-nang-suc-khoe/bai-viet')}}" class="btn"> Xem thêm <span class="fas fa-chevron-right"></span> </a>
                </div>
            </div>



            <div class="box">
                <div class="image">
                    <img src="{{ asset('public/frontend/images/page-image/health-handbook/blog8.jpeg') }}" alt="">
                </div>
                <div class="content">
                    <div class="icon">
                        <a href="#"> <i class="fas fa-calendar"></i> 5/5/2022 </a>
                        <a href="#"> <i class="fas fa-user"></i> by 7Team </a>
                    </div>
                    <h3>Vitamin A có tác dụng gì?</h3>
                    <p>Có thể bạn đã biết, Vitamin A có tác dụng giúp tăng cường thị lực. Ngoài ra, loại Vitamin...</p>
                    <a href="{{URL::to('/cam-nang-suc-khoe/bai-viet')}}" class="btn"> Xem thêm <span class="fas fa-chevron-right"></span> </a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="{{ asset('public/frontend/images/page-image/health-handbook/blog9.jpeg') }}" alt="">
                </div>
                <div class="content">
                    <div class="icon">
                        <a href="#"> <i class="fas fa-calendar"></i> 5/5/2022 </a>
                        <a href="#"> <i class="fas fa-user"></i> by 7Team </a>
                    </div>
                    <h3>Vitamin nhóm B (B1, B2, B3, B5, B6, B7, B9, B12) có tác dụng gì?</h3>
                    <p>Vitamin B giữ vai trò quan trọng cho sự tăng trưởng, phát triển và một loạt các chức năng khác của cơ
                        thể...</p>
                    <a href="{{URL::to('/cam-nang-suc-khoe/bai-viet')}}" class="btn"> Xem thêm <span class="fas fa-chevron-right"></span> </a>
                </div>
            </div>

        </div>

    </section>

    <!--
    - Pagination
    -->
    <section class="pagination">

        <ul>
            <li><a href="#" class="back">Trước</a></li>
            <li class="pageNumber active"><a href="#">1</a></li>
            <li class="pageNumber"><a href="#">2</a></li>
            <li class="pageNumber"><a href="#">3</a></li>
            <li class="pageNumber"><a href="#">4</a></li>
            <li class="pageNumber"><a href="#">5</a></li>
            <li class="pageNumber"><a href="#">6</a></li>
            <li><a href="#" class="next">Sau</a></li>

        </ul>


    </section>

    <!--
    - News-bottom
    -->
    <div class="news-bottom">
        <div class="top-news">
            <h2 class="top-news-title">
                TOP 4 TIN ĐỌC NHIỀU
            </h2>
            <div class="top-news-row">
                <!-- awsome font -->
                <div class="top-news-row-content">
                    <div class="number-box">
                        <a href="">1</a>
                    </div>

                    <a href="" class="news-title">
                        Ánh sáng xanh cản trở giấc ngủ nhưng tốt cho sức khỏe tinh thần?
                    </a>
                </div>

                <div class="top-news-row-content">
                    <div class="number-box">
                        <a href="">2</a>
                    </div>

                    <a href="" class="news-title">
                        3 loại thực phẩm bổ mắt nhất cho người hay ngồi máy tính
                    </a>
                </div>

                <div class="top-news-row-content">
                    <div class="number-box">
                        <a href="">3</a>
                    </div>

                    <a href="" class="news-title">
                        Sâm tươi Hàn Quốc có tác dụng gì ? cách chế biến và bảo quả ra sao ?
                    </a>
                </div>

                <div class="top-news-row-content">
                    <div class="number-box">
                        <a href="">4</a>
                    </div>

                    <a href="" class="news-title">
                        Đau dạ dày sau khi ăn, nguyên nhân do đâu và phòng ngừa thế nào?
                    </a>
                </div>

            </div>
        </div>

        <div class="bottom-news">
            <div class="vote">
                <div class="vote-content">
                    <h2 class="vote-title">
                        BÌNH CHỌN
                    </h2>

                    <div class="vote-option-list">
                        <label for="">
                            Theo bạn, giao diện website của 7Team như thế nào:
                        </label>
                        <div class="vote-option">
                            <input type="radio" name="vote">Đẹp
                            <i class="fa-solid fa-face-smile-beam"></i>
                        </div>

                        <div class="vote-option">
                            <input type="radio" name="vote">Rất đẹp
                            <i class="fa-solid fa-face-laugh-beam"></i>
                        </div>

                        <div class="vote-option">
                            <input type="radio" name="vote">Tuyệt vời
                            <i class="fa-solid fa-face-grin-hearts"></i></label>
                        </div>
                    </div>

                    <div class="vote-btn">
                        <button>Bình Chọn</button>

                        <button>Xem Kết Quả</button>
                    </div>
                </div>

                <img src="{{ asset('public/frontend/images/page-image/health-handbook/minion-vote.png') }}" alt="">
            </div>

            <div class="access">
                <h2 class="access-title">
                    THỐNG KÊ LƯỢT TRUY CẬP
                </h2>
                <div class="access-content">
                    <p>
                        <i class="fa-solid fa-trophy"></i>
                        Tổng Truy Cập: 1,000,0000
                    </p>

                    <p>
                        <i class="fa-solid fa-calendar-day"></i>
                        Trong Tháng: 500,000
                    </p>

                    <p>
                        <i class="fa-solid fa-calendar-days"></i>
                        Hôm Nay: 50,000
                    </p>

                    <p>
                        <i class="fa-solid fa-earth-americas"></i>
                        Đang Online: 5,000
                    </p>

                </div>
            </div>
        </div>
    </div>
@endsection

{{-- script section --}}
@section('script')
    <script src="{{ asset('public/frontend/js/sticky-navbar.js') }}"></script>
@endsection