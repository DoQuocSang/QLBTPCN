@extends('layout')

{{-- css section --}}
@section('css')
    <link rel="stylesheet" href="{{ asset('public/frontend/css/article.css') }}">
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
    - News
    -->
    <div class="news container">
        <article class="main-article">
            <h2 class="article-title">
                <img src="{{ asset('public/frontend/images/page-image/news/top-10-cong-dung-cua-nho.jpg') }}" alt="">
                Top 10 Công Dụng Của Nho Tốt Cho Sức Khỏe & Ngăn Ngừa Bệnh
            </h2>
            <p class="article-info">Đăng ngày 10/05/2022 - Nguồn Siêu Thị Sống Khỏe</p>
            <div class="article-content">
                <p>
                    Có thể bạn chưa biết, công dụng của quả Nho là giảm huyết áp, ngăn ngừa bệnh lý mãn tính, giảm cân, ung
                    thư, tiểu đường… và rất giàu chất dinh dưỡng có lợi tốt cho sức khỏe con người.
                </p>
                <h3>#1 Công dụng của Nho</h3>
                <p>
                    Nho là loại quả chứa nhiều chất dinh dưỡng, chất xơ, kali… Nho cung cấp rất nhiều lợi ích sức khỏe do
                    hàm lượng chất dinh dưỡng và chất chống oxy hóa cao. Vậy chúng ta cùng tìm hiểu xem nho có công dụng gì
                    nhé.
                </p>
                <h3>
                    #2 Nho chứa lượng chất chống oxy hóa cao giúp ngăn ngừa bệnh lý mãn tính
                </h3>
                <p>
                    Các chất chống oxy hóa tập trung nhiều nhất trong vỏ và hạt Nho. Các chống oxy hóa trong nho tồn tại
                    ngày cả sau khi lên men, đó là lí do rượu vang đỏ cũng chứa nhiều hợp chất này. Nho tươi làm tăng số
                    lượng các hợp chất chống viêm trong máu, do đó có thể ngăn ngừa các bệnh mãn tính như: ung thư, tiểu
                    đường, viêm khớp và các bệnh tự miễn.
                </p>
                <img src="{{ asset('public/frontend/images/page-image/news/nho-giup-ngan-ngua-benh-ly-man-tinh.jpg') }}" alt="">
                <em> Nho tươi làm tăng số lượng các hợp chất chống viêm trong máu, do đó có thể ngăn ngừa các bệnh mãn
                    tính</em>
                <h3>
                    #3 Các hợp chất thực vật trong Nho có thể bảo vệ trước một số loại ung thư
                </h3>
                <p>
                    Resveratrol là một trong những hợp chất được tìm thấy trong nho và được chứng minh là bảo vệ chống ung
                    thư bằng cách giảm viêm, hoạt động như một chất chống oxy hóa ngăn chặn sự phát triển và lây lan của các
                    tế bào ung thư trong cơ thể. Một nghiên cứu cho thấy rằng ăn khoảng 450 g nho mỗi ngày trong hai tuần có
                    thể làm giảm nguy cơ ung thư đại tràng.
                </p>

                <h3>#4 Nho giúp giảm huyết áp</h3>
                <p>Trong 151gam nho có chứa khoảng 288mg Kali, chiếm 6% (RDI). Chất khoáng này cần thiết cho việc duy trì
                    huyết áp ở mức khỏe mạnh. Không nạp đủ Kali có thể dẫn đến tăng nguy cơ mắc bệnh huyết áp, bệnh lý tim
                    mạch và đột quỵ.</p>

                <h3>#5 Ăn nho giúp giảm cholesterol trong máu</h3>
                <p>Các hợp chất có trong nho có thể phòng chống tăng mỡ máu bằng cách giảm hấp thu cholesterol. Một nghiên
                    cứu cho thấy người có mỡ trong máu cao ăn khoảng 500gam nho đỏ mỗi ngày trong 8 tuần cho thấy
                    cholesterol toàn phần và cholesterol xấu giảm đáng kể.</p>
                <img src="{{ asset('public/frontend/images/page-image/news/an-nho-giup-giam-cholesterol-trong-mau.jpg') }}" alt="">
                <em>Các hợp chất có trong nho có thể phòng chống tăng mỡ máu bằng cách giảm hấp thu cholesterol</em>
                <h3>#6 Nho giúp giảm đường máu và chống lại bệnh tiểu đường</h3>
                <p>
                    Đây là một trong những lựa chọn tốt nhất cho người bệnh tiểu đường vì 151gam Nho chỉ chứa khoảng 23gam
                    đường. Hơn thế nữa, resveratrol đã được chứng minh có khả năng tăng độ nhạy insulin, giúp cải thiện khả
                    năng tiêu thụ glucose của cơ thể và từ đó giảm mức đường trong máu.
                </p>
                <h3>#7 Nho chứa nhiều hợp chất tốt cho mắt</h3>
                <p>Các hóa chất nguồn gốc thực vật có trong nho có thể bảo vệ chúng ta trước một số bệnh về mắt thông
                    thường. Resveratrol được phát hiện có khả năng bảo vệ các tế bào võng mạc mắt trước tia cực tím. Điều
                    này giúp giảm nguy cơ bệnh thoái hóa điểm vàng liên quan đến tuổi tác (AMD), tăng nhãn áp, đục thủy tinh
                    thể và bệnh mắt do tiểu đường.</p>

                <p>Ngoài ra, nho có chứa chất chống oxy hóa lutein và zeaxanthin, các hợp chất này giúp bảo vệ mắt khỏi bị
                    hư hại từ ánh sáng xanh.</p>
                <h3>#8 Nho giúp cải thiện trí nhớ, tăng khả năng tập trung và tâm trạng</h3>
                <p>Ăn Nho bổ trợ sức khỏe não bộ và tăng cường trí nhớ. Các nghiên cứu cũng cho thấy resveratrol cải thiện
                    khả năng học hỏi, trí nhớ và tâm trạng khi uống trong 4 tuần. Thêm vào đó, não cũng thể hiện dấu hiệu
                    tăng trưởng não và tăng máu nuôi đến não. Resveratrol cũng có thể hỗ trợ bảo vệ trước bệnh Alzheimer.
                </p>
                <img src="{{ asset('public/frontend/images/page-image/news/an-nho-giup-tang-cuong-tri-nho.jpg') }}" alt="">
                <em>Ăn Nho bổ trợ sức khỏe não bộ và tăng cường trí nhớ</em>

                <h3>#9 Nho có thể trống lại một số loại nhiễm trùng, vi rút và nấm</h3>
                <p>Trong quả nho có lượng vitamin C dồi dào, giúp bảo vệ chống lại vi rút cúm, ngăn chặn vi rút herpes, thủy
                    đậu. Ngoài ra, khi nho được chế biến và thêm vào các loại thực phẩm khác nhau còn có tác dụng ngăn chặn
                    sự phát triển của vi khuẩn có hại, chẳng hạn như vi khuẩn E. Coli.</p>

                <p>– Ăn nho giúp làm chậm quá trình lão hóa và tăng tuổi thọ
                <p>

                <p>– Hợp chất resveratrol có trong nho có tác dụng kích thích một họ protein được gọi là sirtuins, có liên
                    quan đến tuổi thọ. Một trong những gen mà resveratrol kích hoạt là gen SirT1, gen này có liên quan dến
                    việc kéo dài tuổi thọ. Ngoài ra resveratrol cũng ảnh hưởng đến một số gen khác liên quan đến lão hóa và
                    tuổi thọ.</p>

                <h3>#10 Nho chống viêm gan</h3>
                <p>Nho có chứa các hoạt chất tự nhiên, glucose, cellulose và nhiều loại vitamin khác, nó rất hiệu quả trong
                    việc bảo vệ gan, giảm cổ trướng và phù chi dưới. Ngoài ra, các thành phần trong nho cũng có thể cải
                    thiện albumin huyết tương và làm giảm transaminase rất có lợi cho người có gan không tốt, kể cả là viêm
                    gan. Axit trái cây trong nho cũng có thể giúp tiêu hóa, tăng sự thèm ăn, và ngăn ngừa gan nhiễm mỡ sau
                    viêm gan</p>
                <img src="{{ asset('public/frontend/images/page-image/news/an-nho-ho-tro-chong-viem-gan.jpg') }}" alt="">
                <em>Axit trái cây trong nho cũng có thể giúp tiêu hóa, tăng sự thèm ăn, và ngăn ngừa gan nhiễm mỡ sau viêm
                    gan</em>


                <h2>Tổng hợp loại Nho phổ biến hiện nay và công dụng của chúng</h2>
                <p>Thông thường, nho được chia thành nhiều loại với nhiều màu sắc và công dụng khác nhau. Nho có màu sắc nào
                    thì tương ứng với những lợi ích đó.</p>
                <h3>Nho đỏ: làm mềm mạch máu</h3>
                <p>Nho đỏ chứa enzyme đảo ngược, có thể làm mềm mạch máu và bệnh nhân tim mạch nên ăn nhiều hơn. Ngoài ra,
                    enzyme này cũng có thể bảo vệ tim bằng cách làm chậm sự tích tụ cholesterol trên thành động mạch. Chất
                    này là phổ biến nhất trong da nho đỏ, và tốt nhất là ăn cả vỏ.</p>
                <h3>Nho trắng: Nuôi dưỡng phổi</h3>
                <p>Nho trắng, còn được gọi là nho pha lê, có tác dụng làm đầy phổi và giữ ẩm cho làn da. Nó phù hợp cho
                    những người bị ho, bệnh đường hô hấp, và là thực phẩm tốt cho những người có màu da kém</p>
                <h3>Nho tím: Ngăn ngừa lão hóa</h3>
                <p>Nho tím giàu anthocyanin và flavonoid. Hai chất này có tác dụng chống oxy hóa, giúp phòng ngừa và loại bỏ
                    các gốc tự do trong cơ thể. Thường xuyên ăn nho tím có tác dụng nhất định đến việc trì hoãn lão hóa và
                    giảm sự xuất hiện các nếp nhăn.</p>
                <h3>Nho đen: Giảm mệt mỏi</h3>
                <p>Hàm lượng khoáng chất như kali, magiê và canxi trong nho đen cao hơn so với các loại nho màu khác. Nó có
                    thể bổ sung các khoáng chất cần thiết cho cơ thể con người và giúp chống lại sự mệt mỏi.</p>
                <img src="{{ asset('public/frontend/images/page-image/news/nho-den-giam-met-moi.jpg') }}" alt="">
                <em>Hàm lượng khoáng chất như kali, magiê và canxi trong nho đen cao hơn so với các loại nho màu khác</em>
                <h2>Vậy ăn Nho nhiều có tốt không?</h2>
                <h3>Khả năng bị tăng cân</h3>
                <p>Nho chứa hàm lượng calo khá ít (ba mươi quả nho chứa khoảng 105 calo) nhưng nếu như dùng nho nhiều trong
                    khi ngồi 1 chỗ thì lượng calo sẽ tăng gấp đôi dẫn theo tăng cân.</p>
                <h3>Gây bệnh đường ruột, loét dạ dày</h3>
                <p>Nho có hàm lượng vitamin C khá cao 18%. Chính vì thế, nếu các bạn ăn nho khi đói vitamin C sẽ không tốt
                    cho dạ dày có thể gây ra loét dạ dày. Còn nếu bạn đang bị loét dạ dàng càng không nên ăn nho vì sẽ làm
                    bệnh tình nặng hơn.</p>

                p>Sử dụng nhiều nho làm tăng lượng chất xơ làm cơ thể không tiêu hóa toàn bộ được, kéo theo ứ động lại gây
                táo bón, có khi bị tiêu chảy vì cơ thể cố thải bớt chất xơ ra ngoài.</p>
                <h3>Gây ra ngộ độc</h3>
                <p>Việc ngộ độc nho không phải do từ quả nho mà xuất phát từ các chất bảo quản thực phẩm, nấm mốc và vi
                    khuẩn ở trên vỏ nho. Hơn nữa, nho mọc thành chùm nên khi không rửa sạch từng quả nho càng dẫn đến các
                    nguy cơ ngộ độc thực phẩm.</p>

                <p>Thật bất ngờ đúng không nào? Nho quả là người bạn mạng lại nhiều lợi ích cho sức khỏe cho mọi gia đình,
                    vì vậy bạn hãy nhớ dùng đủ để không bị phản tác dụng nhế!.</p>
            </div>
        </article>

        <div class="news-sidebar">
            <div class="article-sidebar">
                <h2>
                    Tin nổi bật
                </h2>

                <div class="article-row">
                    <img src="{{ asset('public/frontend/images/page-image/news/nguy-hiem-doi-voi-suc-khoe-tu-viec-gap-thuc-an-cho-nhau.jpg') }}" alt="">
                    <div class="article-row-content">
                        <a href="">
                            Nguy Hiểm Đối Với Sức Khỏe Từ Việc Gắp Thức Ăn Cho Người Khác 
                        </a>
                    </div>
                </div>

                <div class="article-row">
                    <img src="{{ asset('public/frontend/images/page-image/news/phan-hoi-khach-hang-su-dung-tam-an-lac-tien-1.jpg') }}" alt="">
                    <div class="article-row-content">
                        <a href="">
                            Phản Hồi Khách Hàng Sau Khi Sử Dụng Tâm An Lạc
                        </a>
                    </div>
                </div>

                <div class="article-row">
                    <img src="{{ asset('public/frontend/images/page-image/news/top-14-cong-dung-cua-bot-tra-xanh.jpg') }}" alt="">
                    <div class="article-row-content">
                        <a href="">
                            Top 14 Công Dụng Của Bột Trà Xanh Giúp Làm Đẹp Tự Nhiên & Bảo Vệ Sức Khỏe Cho Phái Đẹp
                        </a>
                    </div>
                </div>
            </div>

            <div class="article-sidebar">
                <h2>
                    Tin mới cập nhật
                </h2>

                <div class="article-row">
                    <img src="{{ asset('public/frontend/images/page-image/news/dot-quy-nguy-hiem-den-muc-nao.jpg') }}" alt="">
                    <div class="article-row-content">
                        <a href="">
                            ĐỘT QUỴ! Hãy Trang Bị Kiến Thức Cho Chính Mình Và Người Thân
                        </a>
                    </div>
                </div>

                <div class="article-row">
                    <img src="{{ asset('public/frontend/images/page-image/news/bi-quyet-luoc-ngo-thom-ngon-tot-cho-suc-khoe-7.jpg') }}" alt="">
                    <div class="article-row-content">
                        <a href="">
                            Bí quyết luộc ngô giữ nguyên chất dinh dưỡng và tốt cho sức khỏe
                        </a>
                    </div>
                </div>

                <div class="article-row">
                    <img src="{{ asset('public/frontend/images/page-image/news/giac-ngu-sau-co-the-loai-bo-doc-to-tu-nao.jpg') }}" alt="">
                    <div class="article-row-content">
                        <a href="">
                            Giấc ngủ sâu có thể loại bỏ độc tố từ não
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

{{-- script section --}}
@section('script')
    <script src="{{ asset('public/frontend/js/sticky-navbar.js') }}"></script>
@endsection