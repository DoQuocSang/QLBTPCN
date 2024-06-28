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
            <img src="{{ asset('public/frontend/images/page-image/news/news.png') }}" alt="">
        </div>

        <div class="content">
            <img src="{{ asset('public/frontend/images/page-image/news/handbook-news.png') }}" alt="">
            <h3>Chào mừng bạn đến với Chuyên Mục Tin Tức</h3>
            <p>Tại đây, 7Team cam kết sẽ mang đến cho bạn những thông tin mới nhất được cập nhật từ các nguồn chính thống về
                sức khỏe và các loại thực phẩm chức năng</p>

        </div>

    </section>

    <!--
    - Blogs
    -->
    <section class="blogs" id="blogs">

        <h1 class="heading"> Chuyên Mục <span>Tin Tức</span> </h1>

        <div class="box-container">

            <div class="box">
                <div class="image">
                    <img src="{{ asset('public/frontend/images/page-image/news/hypoly-.webp') }}" alt="">
                </div>
                <div class="content">
                    <div class="icon">
                        <a href="#"> <i class="fas fa-calendar"></i> 5/5/2022 </a>
                        <a href="#"> <i class="fa-solid fa-pen-nib"></i> Viết Bởi Kim Cúc</a>
                    </div>
                    <h3>Hypoly: có tốt không, giá bao nhiêu và mua ở đâu?
                    </h3>
                    <p>Hypoly là một sản phẩm hỗ trợ điều trị tiểu đường đang rất được ưa chuộng hiện nay. Tuy nhiên hiện
                        nay đang có nhiều thông tin, quảng...</p>
                    <a href="{{URL::to('/tin-tuc/bai-viet')}}" class="btn"> Xem thêm <span class="fas fa-chevron-right"></span> </a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="{{ asset('public/frontend/images/page-image/news/phúc nhãn khang.jpg') }}" alt="Lỗi hiển thị">
                </div>
                <div class="content">
                    <div class="icon">
                        <a href="#"> <i class="fas fa-calendar"></i> 5/5/2022 </a>
                        <a href="#"> <i class="fas fa-user"></i> by 7Team </a>
                    </div>
                    <h3>Phúc Nhãn Khang Có Tốt Không, Giá Bao Nhiêu và Mua Ở Đâu?</h3>
                    <p>Phúc Nhãn Khang là viên uống bổ mắt hỗ trợ giúp tăng cường thị lực, cải thiện chứng mỏi mắt, khô mắt,
                        mắt mờ nhòe hiệu quả. Để hiểu...</p>
                    <a href="{{URL::to('/tin-tuc/bai-viet')}}" class="btn"> Xem thêm <span class="fas fa-chevron-right"></span> </a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="{{ asset('public/frontend/images/page-image/news/Bepharin.jpg') }}" alt="">
                </div>
                <div class="content">
                    <div class="icon">
                        <a href="#"> <i class="fas fa-calendar"></i> 5/5/2022 </a>
                        <a href="#"> <i class="fas fa-user"></i> by 7Team </a>
                    </div>
                    <h3>Bepharin Có Tốt Không, Giá Bao Nhiêu, Mua Ở Đâu?</h3>
                    <p>Viên uống Bepharin được chiết xuất từ thảo dược thiên nhiên, có công dụng hỗ trợ ổn định đường huyết
                        và nâng cao sức khỏe cho người...</p>
                    <a href="{{URL::to('/tin-tuc/bai-viet')}}" class="btn"> Xem thêm <span class="fas fa-chevron-right"></span> </a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="{{ asset('public/frontend/images/page-image/news/ameva.jpg') }}" alt="">
                </div>
                <div class="content">
                    <div class="icon">
                        <a href="#"> <i class="fas fa-calendar"></i> 5/5/2022 </a>
                        <a href="#"> <i class="fas fa-user"></i> by 7Team </a>
                    </div>
                    <h3>AmEva Có Tốt Không, Giá Bao Nhiêu, Mua Ở Đâu?</h3>
                    <p>AmEva là sản phẩm hữu ích đối với phái đẹp vì có thể hỗ trợ bổ sung và cân bằng nội tiết tố nữ rất
                        tốt từ các thành phần…...</p>
                    <a href="{{URL::to('/tin-tuc/bai-viet')}}" class="btn"> Xem thêm <span class="fas fa-chevron-right"></span> </a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="{{ asset('public/frontend/images/page-image/news/trilado_1.jpg') }}" alt="">
                </div>
                <div class="content">
                    <div class="icon">
                        <a href="#"> <i class="fas fa-calendar"></i> 5/5/2022 </a>
                        <a href="#"> <i class="fas fa-user"></i> by 7Team </a>
                    </div>
                    <h3>Trilado có tốt không, giá bao nhiêu, mua ở đâu?</h3>
                    <p>Viên uống Trilado là thực phẩm chức năng hỗ trợ tăng cường sức bền thành mạch nhờ đó giảm táo bón và
                        các biểu hiện của bệnh trĩ...</p>
                    <a href="{{URL::to('/tin-tuc/bai-viet')}}" class="btn"> Xem thêm <span class="fas fa-chevron-right"></span> </a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="{{ asset('public/frontend/images/page-image/news/Mộc-Vị-Khang.jpg') }}" alt="">
                </div>
                <div class="content">
                    <div class="icon">
                        <a href="#"> <i class="fas fa-calendar"></i> 5/5/2022 </a>
                        <a href="#"> <i class="fas fa-user"></i> by 7Team </a>
                    </div>
                    <h3>Mộc Vị Khang Có Tốt Không, Giá Bao Nhiêu, Mua Ở Đâu?</h3>
                    <p>Mộc Vị Khang có công hiệu rất tốt đối với người đang bị viêm loét dạ dày chủ yếu do vi khuẩn HP và
                        tăng tiết axit dạ dày gây...</p>
                    <a href="{{URL::to('/tin-tuc/bai-viet')}}" class="btn"> Xem thêm <span class="fas fa-chevron-right"></span> </a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="{{ asset('public/frontend/images/page-image/news/tra-xanh.jpg') }}" alt="">
                </div>
                <div class="content">
                    <div class="icon">
                        <a href="#"> <i class="fas fa-calendar"></i> 5/5/2022 </a>
                        <a href="#"> <i class="fas fa-user"></i> by 7Team </a>
                    </div>
                    <h3>Top 14 Công Dụng Của Bột Trà Xanh Giúp Làm Đẹp & Bảo Vệ Sức Khỏe</h3>
                    <p>Công dụng của bột trà xanh không chỉ dùng để làm bánh và thức uống mà còn có thể mang lại rất nhiều
                        lợi ích về sức khỏe cũng như...</p>
                    <a href="{{URL::to('/tin-tuc/bai-viet')}}" class="btn"> Xem thêm <span class="fas fa-chevron-right"></span> </a>
                </div>
            </div>



            <div class="box">
                <div class="image">
                    <img src="{{ asset('public/frontend/images/page-image/news/dạ-day-happy.jpg') }}" alt="">
                </div>
                <div class="content">
                    <div class="icon">
                        <a href="#"> <i class="fas fa-calendar"></i> 5/5/2022 </a>
                        <a href="#"> <i class="fas fa-user"></i> by 7Team </a>
                    </div>
                    <h3>Dạ Dày Happy – Viên Uống Hỗ Trợ Điều Trị Đau Dạ Dày & Tá Tràng</h3>
                    <p>Dạ Dày Happy – Giảm Các Triệu Chứng Đau Dạ Dày, Bảo Vệ Niêm Mạc Khỏe Mạnh Dạ Dày Happy ra đời như một
                        phương pháp tối ưu ch...</p>
                    <a href="{{URL::to('/tin-tuc/bai-viet')}}" class="btn"> Xem thêm <span class="fas fa-chevron-right"></span> </a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="{{ asset('public/frontend/images/page-image/news/nho-my-tho.jpg') }}" alt="">
                </div>
                <div class="content">
                    <div class="icon">
                        <a href="#"> <i class="fas fa-calendar"></i> 5/5/2022 </a>
                        <a href="#"> <i class="fas fa-user"></i> by 7Team </a>
                    </div>
                    <h3>Top 10 Công Dụng Của Nho Tốt Cho Sức Khỏe & Ngăn Ngừa Bệnh</h3>
                    <p>Công dụng của nho là giảm huyết áp, ngăn ngừa bệnh lý mãn tính, giảm cân, ung thư, tiểu đường… và rất
                        giàu chất dinh dưỡng có lợi tốt ...</p>
                    <a href="{{URL::to('/tin-tuc/bai-viet')}}" class="btn"> Xem thêm <span class="fas fa-chevron-right"></span> </a>
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
    - News bottom
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
                        Đoàn kiểm tra liên ngành về An toàn thực phẩm số 01 của Trung ương làm việc tại Đắk Lắk về công tác
                        triển khai Tháng hành động năm 2022
                    </a>
                    
                </div>

                <div class="top-news-row-content">
                    <div class="number-box">
                        <a href="">2</a>
                    </div>

                    <a href="" class="news-title">
                        CẢNH BÁO SẢN PHẨM thực phẩm bảo vệ sức khỏe Shioka đang quảng cáo vi phạm quy định của pháp luật về
                        quảng cáo
                    </a>

                </div>

                <div class="top-news-row-content">
                    <div class="number-box">
                        <a href="">3</a>
                    </div>

                    <a href="" class="news-title">
                        Cảnh báo thông tin quảng cáo thực phẩm bảo vệ sức khỏe Peauhonnête NMN + ARG Liquid 12000 trên một số
                        trang mạng xã hội và website
                    </a>
            
                </div>

                <div class="top-news-row-content">
                    <div class="number-box">
                        <a href="">4</a>
                    </div>
                    <a href="" class="news-title">
                        Hà Tĩnh: Xử phạt 03 cơ sở vi phạm các điều kiện vệ sinh an toàn thực phẩm
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

                <img src="{{ asset('public/frontend/images/page-image/news/minion-vote.png') }}" alt="">
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