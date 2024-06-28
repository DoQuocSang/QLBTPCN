@extends('layout')

{{-- css section --}}
@section('css')
    <link rel="stylesheet" href="{{ asset('public/frontend/css/product-detail.css') }}">
    <link rel="stylesheet" href="{{ asset('public/frontend/css/navigation-restyle.css') }}">
    <link rel="stylesheet" href="{{ asset('public/frontend/css/sidebar-restyle.css') }}">
@endsection

{{-- content setion --}}
@section('content')
    <div class="product-container">

        <div class="container">

            <!--
                  - SIDEBAR
                -->

            <div class="sidebar  has-scrollbar" data-mobile-menu>

                <div class="sidebar-row  has-scrollbar">

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

                                    <a class="menu-title-flex"
                                        href="{{ URL::to('/danh-muc-san-pham/' . $cate->category_id) }}">
                                        <i class="fa-solid fa-pills"></i>
                                        <p class="menu-title">{{ $cate->category_name }}</p>
                                    </a>

                                </button>
                            </li>

                        </ul>
                    @endforeach

                </div>

            </div>

            <div class="product-box">

                <!--
                    - PRODUCT FEATURED
                    -->

                <div class="product-featured">

                    <div class="showcase-wrapper has-scrollbar">

                        @foreach ($product as $key => $pro)
                            <div class="showcase-container">

                                <div class="showcase">

                                    <div class="showcase-banner">
                                        <img src="{{ asset('public/uploads/product/' . $pro->product_image) }}"
                                            alt="Lỗi hiển thị" class="showcase-img">
                                    </div>

                                    <div class="showcase-content">

                                        <div class="showcase-rating">
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star-outline"></ion-icon>
                                        </div>

                                        <a href="#">
                                            <h3 class="showcase-title">{{ $pro->product_name }}</h3>
                                        </a>

                                        <a href="{{ URL::to('/danh-muc-san-pham/' . $pro->category_id) }}">
                                            <h2 class="showcase-info">
                                                <span>Danh mục:</span>
                                                {{ $pro->category_name }}
                                            </h2>
                                        </a>

                                        <a href="{{ URL::to('/thuong-hieu-san-pham/' . $pro->brand_id) }}">
                                            <h2 class="showcase-info">
                                                <span>Thương hiệu:</span>
                                                {{ $pro->brand_name }}
                                            </h2>
                                        </a>

                                        <p class="showcase-desc">
                                            {{ $pro->product_content }}
                                        </p>

                                        <div class="price-box">
                                            <p class="price">{{ $pro->product_price }}</p>

                                            @if ($pro->product_note == 'Giảm giá')
                                                <del>999.000 VNĐ</del>
                                            @endif
                                        </div>

                                        <div class="product-quantity-wrapper">
                                            <span class="product-quantity-btn">
                                                <i class='bx bx-minus'></i>
                                            </span>
                                            <span class="product-quantity">1</span>
                                            <span class="product-quantity-btn">
                                                <i class='bx bx-plus'></i>
                                            </span>
                                        </div>

                                        <button class="add-cart-btn">Thêm vào giỏ hàng</button>

                                        <div class="showcase-status">
                                            <div class="wrapper">
                                                <p>
                                                    Đã bán: <b>20</b>
                                                </p>

                                                <p>
                                                    Còn lại: <b>40</b>
                                                </p>
                                            </div>

                                            <div class="showcase-status-bar"></div>
                                        </div>

                                    </div>

                                </div>

                            </div>
                        @endforeach


                    </div>

                </div>

            </div>

        </div>
    </div>

    <!--
                - ICON SECTION
                -->
    <section class="icons-container">

        <div class="icons">
            <i class="fas fa-shipping-fast"></i>
            <div class="content">
                <h3>Miễn phí giao hàng </h3>
                <p>Cho hóa đơn trên 200.000 VNĐ</p>
            </div>
        </div>

        <div class="icons">
            <i class="fa-solid fa-credit-card"></i>
            <div class="content">
                <h3>Thanh toán</h3>
                <p>Đa dạng phương thức thanh toán</p>
            </div>
        </div>

        <div class="icons">
            <i class="fas fa-redo-alt"></i>
            <div class="content">
                <h3>Đổi trả miễn phí</h3>
                <p>Dễ dàng đổi trả trong 10 ngày</p>
            </div>
        </div>

        <div class="icons">
            <i class="fas fa-headset"></i>
            <div class="content">
                <h3>Hỗ trợ 24/7</h3>
                <p>Gọi chúng tôi bất cứ lúc nào</p>
            </div>
        </div>

    </section>

    <!--
                - COMMENT
                -->
    <div class="comment-box">
        <div class="container">
            <div class="box-comment">
                <h2 class="box-comment-title">Bình luận</h2>
                <div class="showcase-rating">
                    <span>Đánh giá: </span>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                </div>
                <textarea name="content" placeholder="Nhập bình luận về sản phẩm..."></textarea>
                <div class="box-btn">
                    <div class="box-btn-left">
                        <a href="" class="picture-btn">
                            <i class="fa-solid fa-camera"></i>
                            Gửi hình
                        </a>
                        <a href="" class="comment-rule">
                            <i class="fa-solid fa-scroll"></i>
                            Qui định đăng bình luận
                        </a>
                    </div>

                    <div class="box-btn-right">
                        <button>Gửi</button>
                    </div>
                </div>
            </div>

            <div class="comment-filter">
                <div class="comment-fitler-top">
                    <h3 class="total-comment">
                        20 Bình Luận
                    </h3>

                    <div class="comment-search-box">
                        <input type="text" class="comment-search" placeholder="Tìm kiếm theo nội dung">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>
                </div>

                <div class="comment-fitler-bottom">
                    <p>Sắp xếp theo</p>
                    <input type="radio" name="comment-filter" value="Độ chính xác" checked="true">Độ chính xác
                    <input type="radio" name="comment-filter" value="Mới nhất">Mới nhất
                    <input type="radio" name="comment-filter" value="Cũ nhất">Cũ nhất
                </div>
            </div>

            <div class="list-comment">
                <div class="comment-row">
                    <div class="user-comment-row">
                        <div class="user">
                            <i class="fa-solid fa-circle-user"></i>
                            <strong>Quảng Văn Sương</strong>
                        </div>

                        <div class="showcase-rating">
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star-outline"></ion-icon>
                        </div>

                        <div class="user-comment">
                            <p>Thuốc tốt, mình dùng lâu rồi, hết hẳn đau đầu, tỉnh táo khỏe mạnh, tks shop!</p>
                        </div>

                        <div class="user-action">
                            <a href="" class="respond">
                                Trả lời
                            </a>

                            <p class="time">
                                2 giờ trước
                            </p>
                        </div>
                    </div>

                    <div class="admin-respond">
                        <div class="admin">
                            <img src="{{ asset('public/frontend/images/logo/faviconTPCN.png') }}" alt="Lỗi hiển thị">
                            <strong>Đỗ Quốc Sang</strong>
                            <small>Quản trị viên</small>
                        </div>

                        <div class="admin-comment">
                            <p>Chào bạn</p>
                            <p>Cảm ơn bạn đã gửi phản hồi về sản phẩm! 7Team rất sẵn lòng để nhận đóng góp ý kiến của bạn để
                                cải thiện shop chúng mình.</p>
                        </div>

                        <div class="admin-action">
                            <a href="" class="respond">
                                Trả lời
                            </a>

                            <a href="" class="thumbs-up">
                                <i class="fa-regular fa-thumbs-up"></i>
                                Hài lòng
                            </a>

                            <a href="" class="thumbs-down">
                                <i class="fa-regular fa-thumbs-down"></i>
                                Không hài lòng
                            </a>

                            <p class="time">
                                1 giờ trước
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="comment-row">
                <div class="user-comment-row">
                    <div class="user">
                        <i class="fa-solid fa-circle-user"></i>
                        <strong>Nguyễn Kiên Thành</strong>
                    </div>

                    <div class="showcase-rating">
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star-outline"></ion-icon>
                        <ion-icon name="star-outline"></ion-icon>
                        <ion-icon name="star-outline"></ion-icon>
                        <ion-icon name="star-outline"></ion-icon>
                    </div>

                    <div class="user-comment">
                        <p>Mình đặt hàng đã 5 ngày rồi nhưng sao vẫn chưa nhận được vậy shop ơi?</p>
                    </div>

                    <div class="user-action">
                        <a href="" class="respond">
                            Trả lời
                        </a>

                        <p class="time">
                            4 giờ trước
                        </p>
                    </div>
                </div>

                <div class="admin-respond">
                    <div class="admin">
                        <img src="{{ asset('public/frontend/images/logo/faviconTPCN.png') }}" alt="Lỗi hiển thị">
                        <strong>Trần Đình Minh Nhật</strong>
                        <small>Quản trị viên</small>
                    </div>

                    <div class="admin-comment">
                        <p>Chào bạn</p>
                        <p>Cảm ơn bạn đã gửi phản hồi về sản phẩm! Theo như những gì chúng mình vừa check lại thì bên vận
                            chuyển cho bạn đang gặp chút trục trặc,
                            có thể khoảng 2 - 3 ngày nữa hàng mới về được tới chỗ bạn nhé! Rất xin lỗi bạn vì sự bất tiện
                            này.</p>
                    </div>

                    <div class="admin-action">
                        <a href="" class="respond">
                            Trả lời
                        </a>

                        <a href="" class="thumbs-up">
                            <i class="fa-regular fa-thumbs-up"></i>
                            Hài lòng
                        </a>

                        <a href="" class="thumbs-down">
                            <i class="fa-regular fa-thumbs-down"></i>
                            Không hài lòng
                        </a>

                        <p class="time">
                            2 giờ trước
                        </p>
                    </div>
                </div>
            </div>

            <div class="comment-row">
                <div class="user-comment-row">
                    <div class="user">
                        <i class="fa-solid fa-circle-user"></i>
                        <strong>Phạm Thị Hoài Trang</strong>
                    </div>

                    <div class="showcase-rating">
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                    </div>

                    <div class="user-comment">
                        <p>Shop đóng gói cẩn thận, giao hàng nhanh. Sản phẩm dùng tốt, rất ưng ý. Cảm ơn shop</p>
                    </div>

                    <div class="user-action">
                        <a href="" class="respond">
                            Trả lời
                        </a>

                        <p class="time">
                            10 giờ trước
                        </p>
                    </div>
                </div>

                <div class="admin-respond">
                    <div class="admin">
                        <img src="{{ asset('public/frontend/images/logo/faviconTPCN.png') }}" alt="Lỗi hiển thị">
                        <strong>Đỗ Quốc Sang</strong>
                        <small>Quản trị viên</small>
                    </div>

                    <div class="admin-comment">
                        <p>Chào bạn</p>
                        <p>Cảm ơn bạn đã gửi phản hồi về sản phẩm! 7Team chúc bạn và gia đình thật nhiều sức khỏe và an
                            khang, hy vọng sớm nhận được sự ủng hộ tiếp theo từ quý khách! Ngoài ra 7Team cũng đang có
                            chương trình mua 5 tặng 2 và ưu dãi giảm giá 30% cho khách hàng thân thiết.
                            Nếu bạn muốn biết thông tin chi tiết, hãy liên hệ với hotline: 0985.443.737</p>
                    </div>

                    <div class="admin-action">
                        <a href="" class="respond">
                            Trả lời
                        </a>

                        <a href="" class="thumbs-up">
                            <i class="fa-regular fa-thumbs-up"></i>
                            Hài lòng
                        </a>

                        <a href="" class="thumbs-down">
                            <i class="fa-regular fa-thumbs-down"></i>
                            Không hài lòng
                        </a>

                        <p class="time">
                            5 giờ trước
                        </p>
                    </div>
                </div>
            </div>

            <div class="comment-row">
                <div class="user-comment-row">
                    <div class="user">
                        <i class="fa-solid fa-circle-user"></i>
                        <strong>Luân Văn Hoàng Anh</strong>
                    </div>

                    <div class="showcase-rating">
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                    </div>

                    <div class="user-comment">
                        <p>Mua nhiều lần rồi tin tưởng và chất lượng lắm nên mới quyết định quay lại ùng hộ shop í ạ</p>
                    </div>

                    <div class="user-action">
                        <a href="" class="respond">
                            Trả lời
                        </a>

                        <p class="time">
                            7 giờ trước
                        </p>
                    </div>
                </div>

                <div class="admin-respond">
                    <div class="admin">
                        <img src="{{ asset('public/frontend/images/logo/faviconTPCN.png') }}" alt="Lỗi hiển thị">
                        <strong>Nguyễn Thành Đạt</strong>
                        <small>Quản trị viên</small>
                    </div>

                    <div class="admin-comment">
                        <p>Chào bạn</p>
                        <p>Cảm ơn bạn đã gửi phản hồi về sản phẩm! 7Team rất vui khi đọc bình luận của bạn, chúng mình sẽ cố
                            gắng cải thiện shop ngày càng tốt hơn để không phụ lòng bạn.</p>
                    </div>

                    <div class="admin-action">
                        <a href="" class="respond">
                            Trả lời
                        </a>

                        <a href="" class="thumbs-up">
                            <i class="fa-regular fa-thumbs-up"></i>
                            Hài lòng
                        </a>

                        <a href="" class="thumbs-down">
                            <i class="fa-regular fa-thumbs-down"></i>
                            Không hài lòng
                        </a>

                        <p class="time">
                            3 giờ trước
                        </p>
                    </div>
                </div>
            </div>

            <div class="comment-row">
                <div class="user-comment-row">
                    <div class="user">
                        <i class="fa-solid fa-circle-user"></i>
                        <strong>Nguyễn Hữu Tài Linh</strong>
                    </div>

                    <div class="showcase-rating">
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star-outline"></ion-icon>
                        <ion-icon name="star-outline"></ion-icon>
                        <ion-icon name="star-outline"></ion-icon>
                    </div>

                    <div class="user-comment">
                        <p>Mình thấy shop bạn hiện tại còn khá ít hàng và 1 vài mặt hàng đã lâu rồi không thấy nhập về lại.
                        </p>
                    </div>

                    <div class="user-action">
                        <a href="" class="respond">
                            Trả lời
                        </a>

                        <p class="time">
                            8 giờ trước
                        </p>
                    </div>
                </div>

                <div class="admin-respond">
                    <div class="admin">
                        <img src="{{ asset('public/frontend/images/logo/faviconTPCN.png') }}" alt="Lỗi hiển thị">
                        <strong>Trần Đình Minh Nhật</strong>
                        <small>Quản trị viên</small>
                    </div>

                    <div class="admin-comment">
                        <p>Chào bạn</p>
                        <p>Cảm ơn bạn đã gửi phản hồi cho 7Team! Shop mình đang nhập hàng về lại ấy bạn, khoảng vài 5 - 6
                            ngày nữa bạn vào check lại và ủng hộ shop mình nha! Thân gửi đến bạn.</p>
                    </div>

                    <div class="admin-action">
                        <a href="" class="respond">
                            Trả lời
                        </a>

                        <a href="" class="thumbs-up">
                            <i class="fa-regular fa-thumbs-up"></i>
                            Hài lòng
                        </a>

                        <a href="" class="thumbs-down">
                            <i class="fa-regular fa-thumbs-down"></i>
                            Không hài lòng
                        </a>

                        <p class="time">
                            1 giờ trước
                        </p>
                    </div>
                </div>
            </div>

            <div class="box">
                <ul class="pagination">
                    <li><a href="#"><i class='bx bxs-chevron-left'></i></a></li>
                    <li><a href="#" class="active">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#"><i class='bx bxs-chevron-right'></i></a></li>
                </ul>
            </div>
        </div>  
    </div>
@endsection

{{-- script section --}}
@section('script')
    <script src="{{ asset('public/frontend/js/sticky-navbar.js') }}"></script>
@endsection
