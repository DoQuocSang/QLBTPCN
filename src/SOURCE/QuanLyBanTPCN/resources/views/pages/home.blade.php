@extends('layout')

{{-- Banner section --}}
@section('banner')
    <!--
    - Banner
    -->
    <div class="banner">

        <div class="container">

            <div class="slider-container has-scrollbar">

                <div class="slider-item">

                    <img src="{{ asset('public/frontend/images/7team-wc-banner.png') }}" alt="Lỗi hiển thị"
                        class="banner-img">

                </div>

                <div class="slider-item">

                    <img src="{{ asset('public/frontend/images/7team-banner-1.png') }}" alt="Lỗi hiển thị"
                        class="banner-img">

                    <div class="banner-content">

                        <p class="banner-subtitle">Hỗ trợ sức khỏe</p>

                        <h2 class="banner-title">Viên Uống Khổ Qua Rừng Mudaru (Bộ 4 hộp)</h2>

                        <p class="banner-text">
                            Giá ưu đãi <b>1.340.000</b> VNĐ
                        </p>

                        <a href="#" class="banner-btn">Mua ngay</a>

                    </div>

                </div>

                <div class="slider-item">

                    <img src="{{ asset('public/frontend/images/7team-banner-2.png') }}" alt="Lỗi hiển thị"
                        class="banner-img">

                    <div class="banner-content">

                        <p class="banner-subtitle">Nấm linh chi</p>

                        <h2 class="banner-title">Cao Linh Chi Hộp Gỗ Đen Hàn Quốc</h2>

                        <p class="banner-text">
                            Giá ưu đãi <b>685.000</b> VNĐ
                        </p>

                        <a href="#" class="banner-btn">Mua ngay</a>

                    </div>

                </div>

                <div class="slider-item">

                    <img src="{{ asset('public/frontend/images/7team-banner-3.png') }}" alt="Lỗi hiển thị"
                        class="banner-img">

                    <div class="banner-content">

                        <p class="banner-subtitle">Não - Thần kinh</p>

                        <h2 class="banner-title">Viên Sủi An Thần Hỗ Trợ Cải Thiện Chứng Mất Ngủ</h2>

                        <p class="banner-text">
                            Giá ưu đãi <b>750.000</b> VNĐ
                        </p>

                        <a href="#" class="banner-btn">Mua ngay</a>

                    </div>

                </div>

                <div class="slider-item">

                    <img src="{{ asset('public/frontend/images/7team-banner-4.png') }}" alt="Lỗi hiển thị"
                        class="banner-img">

                </div>
            </div>

        </div>

    </div>
@endsection

{{-- icon section --}}
@section('icon')
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
@endsection

{{-- modal section --}}
@section('modal')

<div class="modal" data-modal>

    <div class="modal-close-overlay" data-modal-overlay></div>

    <div class="modal-content">

      <button class="modal-close-btn" data-modal-close>
        <ion-icon name="close-outline"></ion-icon>
      </button>

      <div class="newsletter-img">
        <img src="{{asset('public/frontend/images/newsletter7team.png')}}" alt="Lỗi hiển thị" width="400" height="400">
      </div>

      <div class="newsletter">

        <form action="#">

          <div class="newsletter-header">

            <h3 class="newsletter-title">Đăng ký thành viên</h3>

            <p class="newsletter-desc">
              Đăng kí tài khoản tại <b>7Team</b> để nhận ngay những thông báo mới nhất!
            </p>

          </div>

          <input type="email" name="email" class="email-field" placeholder="Nhập Email tại đây" required>

          <button type="submit" class="btn-newsletter">Đăng kí</button>

        </form>

      </div>

    </div>

  </div>

@endsection

{{-- content setion --}}
@section('content')
    <!--
          - BRAND
        -->

    <div class="brand">

        <div class="container">

            <div class="brand-container-title">
                <div class="line"></div>
                <div class="brand-title">
                    <h2>
                        <i class="fa-solid fa-tags"></i>
                        Thương hiệu
                    </h2>
                </div>
                <div class="line"></div>

            </div>

            <div class="brand-item-container has-scrollbar">

                @foreach ($brand as $key => $br)
                    <div class="brand-item">

                        <div class="brand-img-box">
                            <img src="{{ asset('public/frontend/images/brand-img.png') }}" alt="Lỗi hiển thị" width="30">
                        </div>

                        <div class="brand-content-box">

                            <div class="brand-content-flex">
                                <h3 class="brand-item-title">{{ $br->brand_name }}</h3>

                                <p class="brand-item-amount">(12)</p>
                            </div>

                            <a href="{{ URL::to('/thuong-hieu-san-pham/' . $br->brand_id) }}" class="brand-btn">Xem tất
                                cả</a>

                        </div>

                    </div>
                @endforeach

                {{-- <div class="brand-item">

            <div class="brand-img-box">
              <img src="{{asset('public/frontend/images/brand-img.png')}}" alt="dress & frock" width="30">
            </div>

            <div class="brand-content-box">

              <div class="brand-content-flex">
                <h3 class="brand-item-title">Dress & frock</h3>

                <p class="brand-item-amount">(53)</p>
              </div>

              <a href="#" class="brand-btn">Xem tất cả</a>

            </div>

          </div> --}}



            </div>

        </div>

    </div>


    <!--
          - PRODUCT
        -->

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

                <div class="product-showcase">

                    <h3 class="showcase-heading">Sản phẩm bán chạy</h3>

                    <div class="showcase-wrapper">

                        <div class="showcase-container">

                            @foreach ($product as $key => $pro)
                                @if ($pro->product_note == 'Bán chạy')
                                    <div class="showcase">

                                        <a href="{{URL::to('/chi-tiet-san-pham/'.$pro->product_id)}}" class="showcase-img-box">
                                            <img src="{{ asset('public/uploads/product/' . $pro->product_image) }}"
                                                alt="Lỗi hiển thị" class="showcase-img" width="75" height="75">
                                        </a>

                                        <div class="showcase-content">

                                            <a href="{{URL::to('/chi-tiet-san-pham/'.$pro->product_id)}}">
                                                <h4 class="showcase-title">{{ $pro->product_name }}</h4>
                                            </a>
                                            <div class="showcase-rating">
                                                <ion-icon name="star"></ion-icon>
                                                <ion-icon name="star"></ion-icon>
                                                <ion-icon name="star"></ion-icon>
                                                <ion-icon name="star"></ion-icon>
                                                <ion-icon name="star"></ion-icon>
                                            </div>

                                            <div class="price-box">
                                                <del>999.000 VNĐ</del>
                                                <p class="price">{{ $pro->product_price }}</p>
                                            </div>

                                        </div>

                                    </div>
                                @endif
                            @endforeach

                        </div>

                    </div>

                </div>

            </div>



            <div class="product-box">

                <!--
                - PRODUCT MINIMAL
              -->

                <div class="product-minimal">

                    <div class="product-showcase">

                        <h2 class="title">Sản phẩm mới</h2>

                        <div class="showcase-wrapper has-scrollbar">

                            <div class="showcase-container">

                                @foreach ($product as $key => $pro)
                                    @if ($pro->product_note == 'Mới')
                                        <div class="showcase">

                                            <a href="{{URL::to('/chi-tiet-san-pham/'.$pro->product_id)}}" class="showcase-img-box">
                                                <img src="{{ asset('public/uploads/product/' . $pro->product_image) }}"
                                                    alt="Lỗi hiển thị" class="showcase-img" width="70">
                                            </a>

                                            <div class="showcase-content">

                                                <a href="{{URL::to('/chi-tiet-san-pham/'.$pro->product_id)}}">
                                                    <h4 class="showcase-title">{{ $pro->product_name }}</h4>
                                                </a>

                                                <a href="{{ URL::to('/danh-muc-san-pham/' . $cate->category_id) }}" class="showcase-category">{{ $pro->category_name }}</a>

                                                <div class="price-box">
                                                    <p class="price">{{ $pro->product_price }}</p>
                                                    {{-- <del>$15.00</del> --}}
                                                </div>

                                            </div>

                                        </div>
                                    @endif
                                @endforeach


                            </div>

                        </div>

                    </div>

                    <div class="product-showcase">

                        <h2 class="title">Xu hướng</h2>

                        <div class="showcase-wrapper  has-scrollbar">


                            <div class="showcase-container">

                                @foreach ($product as $key => $pro)
                                    @if ($pro->product_note == 'Xu hướng')
                                        <div class="showcase">

                                            <a href="{{URL::to('/chi-tiet-san-pham/'.$pro->product_id)}}" class="showcase-img-box">
                                                <img src="{{ asset('public/uploads/product/' . $pro->product_image) }}"
                                                    alt="Lỗi hiển thị" class="showcase-img" width="70">
                                            </a>

                                            <div class="showcase-content">

                                                <a href="{{URL::to('/chi-tiet-san-pham/'.$pro->product_id)}}">
                                                    <h4 class="showcase-title">{{ $pro->product_name }}</h4>
                                                </a>

                                                <a href="{{ URL::to('/danh-muc-san-pham/' . $cate->category_id) }}" class="showcase-category">{{ $pro->category_name }}</a>

                                                <div class="price-box">
                                                    <p class="price">{{ $pro->product_price }}</p>
                                                    {{-- <del>$15.00</del> --}}
                                                </div>

                                            </div>

                                        </div>
                                    @endif
                                @endforeach


                            </div>

                        </div>

                    </div>

                    <div class="product-showcase">

                        <h2 class="title">Được đánh giá cao</h2>

                        <div class="showcase-wrapper  has-scrollbar">

                            <div class="showcase-container">

                                @foreach ($product as $key => $pro)
                                    @if ($pro->product_note == 'Được đánh giá cao')
                                        <div class="showcase">

                                            <a href="{{URL::to('/chi-tiet-san-pham/'.$pro->product_id)}}" class="showcase-img-box">
                                                <img src="{{ asset('public/uploads/product/' . $pro->product_image) }}"
                                                    alt="Lỗi hiển thị" class="showcase-img" width="70">
                                            </a>

                                            <div class="showcase-content">

                                                <a href="{{URL::to('/chi-tiet-san-pham/'.$pro->product_id)}}">
                                                    <h4 class="showcase-title">{{ $pro->product_name }}</h4>
                                                </a>

                                                <a href="{{ URL::to('/danh-muc-san-pham/' . $cate->category_id) }}" class="showcase-category">{{ $pro->category_name }}</a>

                                                <div class="price-box">
                                                    <p class="price">{{ $pro->product_price }}</p>
                                                    {{-- <del>$15.00</del> --}}
                                                </div>

                                            </div>

                                        </div>
                                    @endif
                                @endforeach


                            </div>

                        </div>

                    </div>

                </div>



                <!--
                - PRODUCT FEATURED
              -->

                <div class="product-featured">

                    <h2 class="title">Ưu đãi hôm nay</h2>

                    <div class="showcase-wrapper has-scrollbar">

                        @foreach ($product as $key => $pro)
                            @if ($pro->product_note == 'Ưu đãi hôm nay')
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

                                            <p class="showcase-desc">
                                                {{ $pro->product_content }}
                                            </p>

                                            <div class="price-box">
                                                <p class="price">{{ $pro->product_price }}</p>

                                                <del>999.000 VNĐ</del>
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

                                            <div class="countdown-box">

                                                <p class="countdown-desc">
                                                    Hãy nhanh tay! Ưu đãi sẽ kết thúc trong:
                                                </p>

                                                <div class="countdown">

                                                    <div class="countdown-content">

                                                        <p class="display-number">10</p>

                                                        <p class="display-text">Ngày</p>

                                                    </div>

                                                    <div class="countdown-content">
                                                        <p class="display-number">17</p>
                                                        <p class="display-text">Giờ</p>
                                                    </div>

                                                    <div class="countdown-content">
                                                        <p class="display-number">53</p>
                                                        <p class="display-text">Phút</p>
                                                    </div>

                                                    <div class="countdown-content">
                                                        <p class="display-number">00</p>
                                                        <p class="display-text">Giây</p>
                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>
                            @endif
                        @endforeach

                    </div>

                </div>



                <!--
                - PRODUCT GRID
              -->

                <div class="product-main">

                    <h2 class="title">Sản phẩm</h2>

                    <div class="product-grid">

                        @foreach ($product as $key => $pro)
                            <div class="showcase">

                                <div class="showcase-banner">
                                    <img src="{{ asset('public/uploads/product/' . $pro->product_image) }}"
                                        alt="Lỗi hiển thị" class="product-img default" width="300">
                                    <img src="{{ asset('public/frontend/images/cart.gif') }}" alt="Lỗi hiển thị"
                                        class="product-img hover" width="300">

                                    @if ($pro->product_note == 'Giảm giá')
                                        <p class="showcase-badge angle black">sale</p>
                                    @endif

                                    @if ($pro->product_note == 'Mới')
                                        <p class="showcase-badge angle pink">new</p>
                                    @endif

                                    <div class="showcase-actions">
                                        <button class="btn-action">
                                            <ion-icon name="heart-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="eye-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="repeat-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="bag-add-outline"></ion-icon>
                                        </button>
                                    </div>
                                </div>

                                <div class="showcase-content">
                                    <a href="{{URL::to('/chi-tiet-san-pham/'.$pro->product_id)}}" class="showcase-category">{{ $pro->product_name }}</a>

                                    <h3>
                                        <a href="{{ URL::to('/danh-muc-san-pham/' . $cate->category_id) }}" class="showcase-title">{{ $pro->category_name }}</a>
                                    </h3>

                                    <div class="showcase-rating">
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star-outline"></ion-icon>
                                    </div>

                                    <div class="price-box">
                                        <p class="price">{{ $pro->product_price }}</p>

                                        @if ($pro->product_note == 'Giảm giá')
                                            <del>999.000 VNĐ</del>
                                        @endif
                                    </div>

                                </div>

                            </div>
                        @endforeach


                    </div>

                    <div class="show-more">
                        <div class="arrow left">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>

                        <button class="show-more-btn">
                            Xem thêm
                        </button>

                        <div class="arrow right">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
@endsection

{{-- Blog section --}}
@section('blog')
    <div class="blog">

        <div class="container">
            <div class="blog-container-title">
                <h2>Tin tức</h2>

                <div class="blog-show-more">
                    <a href="">Xem thêm</a>
                </div>
            </div>

            <div class="blog-container has-scrollbar">

                <div class="blog-card">

                    <a href="#">
                        <img src="{{ asset('public/frontend/images/7team-news-1.png') }}" alt="Lỗi hiển thị" width="300"
                            class="blog-banner">
                    </a>

                    <div class="blog-content">

                        <a href="#" class="blog-category">Từ thiện</a>

                        <a href="#">
                            <h3 class="blog-title">7Team Khởi động chương trình: “7Team – Hành Trình Yêu Thương” sẻ
                                chia hơi ấm đến trẻ em mồ côi</h3>
                        </a>

                        <p class="blog-meta">
                            By <cite>7Team</cite> - <time datetime="2022-05-15">15/05/2022</time>
                        </p>

                    </div>

                </div>

                <div class="blog-card">

                    <a href="#">
                        <img src="{{ asset('public/frontend/images/7team-news-2.png') }}" alt="Lỗi hiển thị" width="300"
                            class="blog-banner">
                    </a>

                    <div class="blog-content">

                        <a href="#" class="blog-category">Bạn có biết?</a>

                        <a href="#">
                            <h3 class="blog-title">Công dụng của táo đỏ khô</h3>
                        </a>

                        <p class="blog-meta">
                            By <cite>Quốc Sang</cite> - <time datetime="2022-05-15">10/04/2022</time>
                        </p>

                    </div>

                </div>

                <div class="blog-card">

                    <a href="#">
                        <img src="{{ asset('public/frontend/images/7team-news-3.png') }}" alt="Lỗi hiển thị" width="300"
                            class="blog-banner">
                    </a>

                    <div class="blog-content">

                        <a href="#" class="blog-category">Mẹo vặt</a>

                        <a href="#">
                            <h3 class="blog-title">Tác dụng chữa bách bệnh của nước muối pha loãng</h3>
                        </a>

                        <p class="blog-meta">
                            By <cite>Minh Nhật</cite> - <time datetime="2022-05-15">01/05/2022</time>
                        </p>

                    </div>

                </div>

                <div class="blog-card">

                    <a href="#">
                        <img src="{{ asset('public/frontend/images/7team-news-4.png') }}" alt="Lỗi hiển thị" width="300"
                            class="blog-banner">
                    </a>

                    <div class="blog-content">

                        <a href="#" class="blog-category">Sức khỏe</a>

                        <a href="#">
                            <h3 class="blog-title">Multivitamin là gì? Công dụng của Multivitamin</h3>
                        </a>

                        <p class="blog-meta">
                            By <cite>Thành Đạt</cite> - <time datetime="2022-05-15">21/03/2022</time>
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>
@endsection

{{-- script section --}}
@section('script')
    <script src="{{ asset('public/frontend/js/modal.js') }}"></script>
@endsection

