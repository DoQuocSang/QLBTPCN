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
    - Health handbook article
    -->
    <div class="health-handbook container">
        <article class="main-article">
            <h2 class="article-title">
                Vitamin A có tác dụng gì?
            </h2>

            <p class="article-info">
                Đăng ngày 05/05/2022 bởi Shop Thực Phẩm Chức Năng 7Team
            </p>

            <div class="article-content">
                <p>
                    Có thể bạn đã biết, Vitamin A có tác dụng giúp tăng cường thị lực. Ngoài ra, loại Vitamin này còn mang
                    nhiều lợi ích tốt cho sức khỏe khác. Vì thế, các chuyên gia dinh dưỡng thường khuyên chúng ta cần bổ
                    sung đầy đủ Vitamin A cho cơ thể. Tuy nhiên, nếu bổ sung thừa hoặc thiếu cũng có thể gây ra hậu quả đáng
                    tiếc nên cần đặc biệt lưu ý.
                </p>
                <img src="{{ asset('public/frontend/images/page-image/health-handbook/blog8.jpeg') }}" alt="">
                <h2>Vitamin A là gì?</h2>
                <p>
                    Vitamin A là tên của một nhóm các hợp chất hòa tan trong chất béo bao gồm retinol, retinal và retinyl
                    ester. Vitamin A thường được tìm thấy dưới 2 dạng, bao gồm:

                    – Vitamin A thành hình (retinol và retinyl ester) thường có trong thịt, gan, cá, các sản phẩm từ sữa…

                    – Tiền chất vitamin A (carotenoid) có nhiều trong các loại thực phẩm từ thực vật như trái cây, rau củ,
                    dầu… Loại tiền chất vitamin A phổ biến nhất trong thực phẩm và sản phẩm bổ sung là beta-carotene.

                    Để sử dụng được 2 dạng vitamin A này, cơ thể phải chuyển đổi chúng thành retinal và acid retinoic – các
                    dạng hoạt động của vitamin.

                    Vì vitamin A tan trong chất béo nên nó sẽ được tích trữ trong mô của cơ thể để sử dụng sau. Hầu hết các
                    vitamin A trong cơ thể được dự trữ trong gan dưới dạng este retinyl. Các este này sau đó được phân hủy
                    thành all-trans-retinol, liên kết với protein liên kết với retinol (RBP) và đi vào máu để thực hiện các
                    chức năng của mình.
                </p>
                <h2>
                    Vitamin A có tác dụng gì?
                </h2>
                <p>
                    Vitamin A là dưỡng chất có vai trò quan trọng đối với quá trình tăng trưởng và phát triển của cơ thể. Cụ
                    thể, loại vitamin này đem lại những tác dụng sau:
                </p>
                <h3>
                    Tăng cường sức khỏe đôi mắt
                </h3>
                <p>
                    Duy trì, bảo vệ và tăng cường khả năng nhìn của mắt là chức năng nổi bật nhất của Vitamin A. Nhờ có
                    vitamin A mà mắt có khả năng nhìn thấy trong điều kiện ánh sáng yếu.
                </p>
                <img src="{{ asset('public/frontend/images/page-image/health-handbook/eye.jpg') }}" alt="">
                <p>
                    Thiếu hụt vitamin A chính là nguyên nhân dẫn đến thị lực kém vào ban đêm, gây ra tình trạng “quáng gà”
                    lúc trời nhá nhem tối. Bên cạnh đó, vitamin A còn bảo vệ giác mạc, tránh hiện tượng khô mắt và các bệnh
                    lý về mắt khác.

                    Ngoài ra, bổ sung đầy đủ vitamin A cũng như tiền chất beta–carotene sẽ giúp ngăn ngừa tình trạng thoái
                    hóa điểm vàng và đục thủy tinh thể. Các nghiên cứu cho thấy nồng độ beta-carotene, alpha-carotene và
                    beta-cryptoxanthin trong máu cao hơn có thể làm giảm nguy cơ thoái hóa điểm vàng tới 25%.
                </p>
                <h3>Tăng cường hệ thống miễn dịch</h3>
                <p>Tế bào bạch cầu lympho T, bảo vệ cơ thể khỏi các tác nhân lạ và tham gia vào hệ thống miễn dịch.

                    Ngoài ra, vitamin A còn giữ vai trò bảo vệ các biểu mô dưới da, niêm mạc khí quản, phổi, ruột non… giúp
                    ngăn chặn sự xâm nhập của vi khuẩn và tăng cường sức đề kháng. Vì thế, khi thiếu Vitamin A cơ thể dễ bị
                    vi khuẩn tấn công khiến thể trạng yếu, dễ mắc bệnh, đồng thời thời gian phục hồi bệnh cũng sẽ lâu hơn.
                </p>
                <h3>Hỗ trợ sức khỏe xương khớp</h3>
                <p>Không chỉ có Canxi và Vitamin D mà Vitamin A cũng đóng vai trò quan trọng trong việc duy trì xương chắc
                    khỏe. Theo các chuyên gia về xương khớp, nồng độ retinol trong cơ thể và mật độ khoáng xương tại xương
                    đùi có mối quan hệ mật thiết với nhau. Cụ thể, người ta nhận thấy nồng độ retinol ở những người cao tuổi
                    bị loãng xương thường thấp hơn so với mức bình thường.

                    Một phân tích tổng hợp khác của các nhà nghiên cứu cho thấy những người có tổng lượng vitamin A trong
                    chế độ ăn cao có thể giảm tới 6% nguy cơ gãy xương.</p>
                <h3>Phòng ngừa ung thư</h3>
                <p>
                    Đến nay đã có rất nhiều nghiên cứu đã được thực hiện nhằm chứng minh Vitamin A hiệu quả phòng ngừa ung
                    thư. Một nghiên cứu được công bố trên JAMA Dermatology cho rằng việc tăng cường vitamin A trong chế độ
                    ăn uống hàng ngày có thể làm giảm nguy cơ phát triển ung thư biểu mô tế bào vảy – một dạng ung thư da
                    khá phổ biến.

                    Bên cạnh đó, nhiều nghiên cứu khác cũng đưa ra kết luận vitamin A có thể góp phần ngăn ngừa các căn bệnh
                    ung thư nguy hiểm như ung thư vú, ung thư buồng trứng, ung thư bàng quang, ung thư tuyến tiền liệt và
                    ung thư phổi.
                </p>
                <h3>Hỗ trợ điều trị mụn trứng cá và các căn bệnh về da</h3>
                <p>Loại vitamin này có khả năng thu hẹp lỗ chân lông, giảm sự tích tụ của vi khuẩn và bụi bẩn giúp ngăn ngừa
                    và hỗ trợ điều trị mụn trứng cá. Đồng thời, tác dụng kháng khuẩn, chống viêm của vitamin A sẽ giúp loại
                    bỏ dần các vết mụn và ngăn ngừa chúng hình thành trong tương lai. Dưỡng chất này còn được sử dụng để
                    nâng cao hiệu quả điều trị các căn bệnh như vảy nến, eczema…

                    Không những thế, Vitamin A còn hỗ trợ làn da tươi trẻ, săn chắc. Theo nghiên cứu, vitamin A có khả năng
                    kích thích quá trình tái tạo của tế bào, thúc đẩy chu trình sản sinh, tổng hợp collagen, giúp chống lại
                    lão hoá và duy trì độ đàn hồi của làn da. Ngoài ra, nó cũng giúp bảo vệ da khỏi sự ảnh hưởng của gốc tự
                    do và ánh nắng mặt trời. Nhờ đó mà hắc sắc tố melanin được kiểm soát, làn da luôn giữ được vẻ trắng
                    sáng, tránh được các đốm sạm đen và thâm nám.</p>
                <h3>Quan trọng cho khả năng sinh sản và sự phát triển của thai nhi</h3>
                <p>Vitamin A có liên quan đến sự phát triển của tinh trùng và trứng. Thiếu hụt vitamin A ngăn cản sự phát
                    triển của các tế bào tinh trùng dẫn đến vô sinh ở nam và giảm chất lượng trứng ở phụ nữ. Do đó, bổ sung
                    vitamin A là điều cần thiết đối với những ai đang muốn thụ thai.

                    Bên cạnh đó, loại vitamin này cũng rất cần thiết cho sự phát triển khỏe mạnh của thai phụ và em bé.
                    Vitamin A giúp hạn chế tình trạng nhiễm độc thai nghén và ngăn ngừa tình trạng rối loạn phát triển. Đặc
                    biệt, ở những bà mẹ nhiễm HIV, thiếu hụt vitamin A có thể làm tăng khả năng lây truyền HIV từ mẹ sang
                    con.

                    Vitamin A tham gia vào sự phát triển cấu trúc của các cơ quan ở thai nhi như hệ thần kinh, tim, thận,
                    mắt, phổi, tuyến tụy…tuy nhiên việc thiếu hay dư thừa vitamin A trong thời kì mang thai có thể dẫn đến
                    các dị tật bẩm sinh ở thai nhi.</p>
                <h2>Hậu quả của thiếu vitamin A</h2>
                <img src="{{ asset('public/frontend/images/page-image/health-handbook/eye1.jpg') }}" alt="">
                <p>Khi cơ thể thiếu Vitamin A có thể sẽ gặp phải nhiều hậu quả nghiêm trọng như:

                    – Gây bệnh khô mắt trong đó có vệt Bitot, khô giác mạc, nhuyễn giác mạc dẫn đến sẹo giác mạc gây mù vĩnh
                    viễn.

                    – Làm thoái hóa, sừng hóa các tế bào biểu mô giảm chức năng bảo vệ cơ thể.

                    – Làm giảm khả năng đề kháng với bệnh tật nên tăng tỷ lệ tử vong ở trẻ em.

                    – Làm trẻ chậm lớn, nếu thiếu vitamin A sớm có thể còn ảnh hưởng tới phát triển trí tuệ của trẻ khi đến
                    tuổi đi học.</p>
                <h2>Hậu quả của thừa vitamin A</h2>
                <p>Vitamin A chỉ phát huy tốt công dụng của nó khi được bổ sung đúng và đủ, nếu thiếu hay thừa đều có thể để
                    lại hậu quả đáng tiếc.

                    Khi bổ sung vitamin A với lượng lớn hoặc kéo dài sẽ dẫn đến thừa vitamin A và có thể gây ra các hậu quả
                    nghiêm trọng như:

                    – Gây ngộ độc làm tăng áp lực nội sọ dẫn đến buồn nôn, nôn, đau đầu.

                    – Ở trẻ nhỏ có biểu hiện thóp phồng.

                    – Ảnh hưởng đến sự phát triển của xương làm trẻ chậm lớn, rối loạn thần kinh và nhiều hậu quả khác như:
                    ngứa da vẩy nến, xung huyết ở da và các niêm mạc, tóc khô, xơ xác, dễ gãy, viêm niêm mạc miệng, môi khô,
                    nứt nẻ hai bên mép, gan to, bong da ở gan bàn tay, gan bàn chân.

                    – Phụ nữ trước khi mang thai và có thai 3 tháng đầu nếu bổ sung thừa vitamin A có thể gây quái thai như:
                    hở hàm ếch, dị dạng tim mạch, cơ, xương, hệ thần kinh trung ương…</p>
                <h2>Những trường hợp nào cần được bổ sung Vitamin A</h2>
                <img src="{{ asset('public/frontend/images/page-image/health-handbook/donhiet.jpg') }}" alt="">
                <p>Thiếu vitamin A: thiếu vitamin A có thể xảy ra trên những người suy dinh dưỡng, đái tháo đường, bị bệnh u
                    xơ nang,…

                    Trẻ thiếu vitamin A mắc bệnh sởi: uống viên bổ sung vitamin A dường như hạ thấp nguy cơ tử vong hoặc
                    nguy cơ xảy ra biến chứng của bệnh sởi.

                    Bạch sản niêm vùng miệng: các nghiên cứu đã chỉ ra uống bổ sung vitamin A có thể giúp điều trị bạch sản
                    niêm vùng miệng.

                    Giảm tiêu chảy sau sinh đẻ: bổ sung vitamin A trong khi mang thai và sau khi sinh nở ở thai phụ kém dinh
                    dưỡng giúp hạn chế xảy ra tình trạng tiêu chảy sau sinh đẻ.

                    Giảm tử vong trong thai sản: thai phụ kém dinh dưỡng nếu uống bổ sung vitamin A trước và trong thai kỳ
                    giúp giảm 40% tỷ lệ tử vong.

                    Phòng tránh quáng gà trong thai sản: thai phụ kém dinh dưỡng nếu uống bổ sung vitamin A sẽ giúp giảm 37%
                    tỉ lệ mắc bệnh, và càng hiệu quả hơn nếu uống bổ sung vitamin A cùng với nguyên tố vi lượng kẽm.

                    Bệnh lý mắt ảnh hưởng tới võng mạc: uống bổ sung vitamin A có thể làm chậm tiến triển của các bệnh về
                    mắt có gây tổn hại tới võng mạc.

                    Ung thư cổ tử cung: các nghiên cứu chỉ ra rằng bổ sung liều cao vitamin A có khả năng làm giảm nguy cơ
                    mắc ung thư cổ tử cung. Tuy nhiên lợi ích này chỉ đạt được khi bổ sung cả hai dạng của vitamin A là
                    retinol và carotene, nếu chỉ sử dụng đơn độc retinol thì sẽ không có tác dụng.</p>
                <h2>Nhu cầu Vitamin A mỗi ngày của từng đối tượng</h2>
                <p>Nhu cầu về vitamin A của mỗi người sẽ phụ thuộc vào độ tuổi, cân nặng và sức khỏe tổng thể của người đó.
                    Dựa vào bảng sau để biết thêm thông tin chi tiết.</p>
                <img src="{{ asset('public/frontend/images/page-image/health-handbook/thongke.jpg') }}" alt="">
                <h2>Thời gian bổ sung Vitamin A tốt nhất</h2>
                <p>Có thể bổ sung vitamin A vào bất kỳ thời điểm nào trong ngày đều được; nhưng nếu sử dụng vitamin A dạng
                    viên, thì thời điểm sử dụng tốt nhất vẫn là sau bữa ăn để cơ thể hấp thụ chúng một cách tốt nhất.</p>
                <h2>Cách phòng chống thiếu Vitamin A</h2>
                <img src="{{ asset('public/frontend/images/page-image/health-handbook/traicay.jpg') }}" alt="">
                <p>Thừa Vitamin A có thể hiếm gặp nhưng thiếu Vitamin A thì rất phổ biến, để phòng thiếu Vitamin này một
                    cách tốt nhất, trước hết bạn cần đến thăm khám bác sĩ để xác định nhu cầu Vitamin A của cơ thể. Để bổ
                    sung, bạn có thể tham khảo một số cách sau:

                    Đối với trẻ nhỏ để phòng thiếu Vitamin A cần nuôi con bằng sữa mẹ, cho trẻ bú mẹ hoàn toàn đến 6 tháng
                    tuổi và tiếp tục cho bú tới 24 tháng giúp đảm bảo nhu cầu vitamin A.

                    Duy trì chế độ ăn đa dạng thực phẩm, sử dụng thực phẩm giàu vitamin A. Các loại thực phẩm giàu Vitamin A
                    bao gồm: Trứng, cá, thịt, gan, sữa, rau muống, xà lách, rau ngót, rau diếp, rau dền, hành lá, hẹ lá, rau
                    thơm, các loại củ quả như gấc, cà rốt, quả chín như đu đủ, xoài… Ngoài ra, cũng cần chú ý cung cấp nguồn
                    thực phẩm giàu đạm, chất béo cho bữa ăn hàng ngày để giúp cân bằng dinh dưỡng.

                    Sử dụng thực phẩm chức năng bổ sung Vitamin A cũng là cách bổ sung Vitamin A đầy đủ, an toàn và hiệu
                    quả. Loại thực phẩm này đã được nghiên cứu kỹ lưỡng về thành phần, hàm lượng từ nhà sản xuất vì thế bạn
                    có thể an tâm sử dụng.

                    Trên đây là toàn bộ bài viết về Vitamin A, tác dụng của Vitamin A đối với cơ thể cũng như những ảnh
                    hưởng khi thiếu hoặc thừa chúng. Hy vọng qua bài viết này bạn đã nhận thấy được tầm quan trọng của loại
                    Vitamin này, từ đó có kế hoạch bổ sung hoặc hạn chế thích hợp giúp chăm sóc sức khỏe một cách toàn diện.
                </p>
            </div>
        </article>

        <div class="health-handbook-sidebar">
            <div class="article-sidebar">
                <h2>
                    Bài viết liên quan
                </h2>

                <div class="article-row">
                    <img src="{{ asset('public/frontend/images/page-image/health-handbook/blog9.jpeg') }}" alt="">
                    <div class="article-row-content">
                        <a href="">
                            Vitamin Nhóm B (B1, B2, B3, B5, B6, B7, B9, B12) Có Tác Dụng Gì?
                        </a>
                    </div>
                </div>

                <div class="article-row">
                    <img src="{{ asset('public/frontend/images/page-image/health-handbook/blog5.jpg') }}" alt="Lỗi hiển thị">
                    <div class="article-row-content">
                        <a href="">
                            Bá Bệnh: Công Dụng, Liều Dùng Và Một Số Bài Thuốc Trong Dân Gian
                        </a>
                    </div>
                </div>

                <div class="article-row">
                    <img src="{{ asset('public/frontend/images/page-image/health-handbook/blog6.jpg') }}" alt="Lỗi hiển thị">
                    <div class="article-row-content">
                        <a href="">
                            6 Cây Thuốc Nam Trị Tiểu Đêm Vô Cùng Hiệu Quả
                        </a>
                    </div>
                </div>
            </div>

            <div class="article-sidebar">
                <h2>
                    Bài viết mới
                </h2>

                <div class="article-row">
                    <img src="{{ asset('public/frontend/images/page-image/health-handbook/vtmE.jpeg') }}" alt="">
                    <div class="article-row-content">
                        <a href="">
                            Vitamin E có tác dụng gì?
                        </a>
                    </div>
                </div>

                <div class="article-row">
                    <img src="{{ asset('public/frontend/images/page-image/health-handbook/mun.jpeg') }}" alt="">
                    <div class="article-row-content">
                        <a href="">
                            Lựa chọn sữa rửa mặt cho da dầu, da mụn và da khô tốt nhất hiện nay
                        </a>
                    </div>
                </div>

                <div class="article-row">
                    <img src="{{ asset('public/frontend/images/page-image/health-handbook/thuoc1.png') }}" alt="">
                    <div class="article-row-content">
                        <a href="">
                            Giải đáp thắc mắc: Sử dụng thực phẩm chức năng có tốt không
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
