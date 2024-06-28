<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Thực phẩm chức năng | 7Team</title>

  <!--
    - favicon
  -->
  <link rel="shortcut icon" href="{{asset('public/frontend/images/logo/faviconTPCN.png')}}" type="image/x-icon">

  <!--
    - custom css link
  -->
  <link rel="stylesheet" href="{{asset('public/frontend/css/main.css')}}">
  @yield('css')
  
  <!--
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@600&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@500&display=swap" rel="stylesheet">
  
  <!--
    - awsome font
  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  {{-- icon css --}}
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

  <!--
    - Tawk.to script
  -->
  @yield('tawk')

</head>

<body>

  <div class="overlay" data-overlay></div>

  <!--
    - MODAL
  -->
  @yield('modal')

  <div class="warning-box" data-warning>

    <div class="warning-close-overlay" data-warning-overlay></div>

    <div class="warning-content">

      <button class="warning-close-btn" data-warning-close>
        <ion-icon name="close-outline"></ion-icon>
      </button>

      <div class="warning-img">
        <img src="{{asset('public/frontend/images/cat-warning.png')}}" alt="Lỗi hiển thị">
      </div>

      <div class="warning">
        <h3>
          <i class="fa-solid fa-triangle-exclamation"></i>
          Thông báo
        </h3>
        <p>Vui lòng đăng nhập để sử dụng chức năng này!</p>
      </div>
    </div>

  </div>

  <!--
    - SCROLL TO TOP BUTTON
  -->
  <a class="scroll-top-btn">
    <i class="fa-solid fa-angle-up"></i>
  </a>


  <!--
    - HEADER
  -->

  <header>

    <div class="header-top">

      <div class="container">

        <div class="header-left-side">
          <ul class="header-social-container">

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-facebook"></ion-icon>
              </a>
            </li>
  
            <li>
              <a href="#" class="social-link">
                <ion-icon name="mail-outline"></ion-icon>
              </a>
            </li>
  
            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-instagram"></ion-icon>
              </a>
            </li>
  
            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-youtube"></ion-icon>
              </a>
            </li>
  
          </ul>
  
          <div class="theme-btn">
            <input type="checkbox" class="checkbox" id="chk" />
              <label class="label" for="chk">
                <i class="fas fa-moon"></i>
                <i class="fas fa-sun"></i>
                <div class="ball"></div>
              </label>
          </div>
        </div>

        <!-- <div class="header-alert-news">
          <p>
            <b>Free Shipping</b>
            Đối với khách hàng tại Đà Lạt
          </p>
        </div> -->

        <div class="header-top-actions">

          <select name="currency">

            <option value="vnd">VNĐ</option>
            <option value="usd">USD</option>

          </select>

          <select name="language">

            <option value="vn">Tiếng Việt</option>
            <option value="en-US">English</option>

          </select>

          <ul class="account-actions">
            <li>
              <a href="#" data-login-link>
                <i class="fa-solid fa-unlock-keyhole"></i>
                Đăng nhập
              </a>
            </li>

            <li>
              <a href="#" data-signup-link>
                <i class="fa-solid fa-user-plus"></i>
                Tạo tài khoản
              </a>
            </li>
          </ul>
        </div>

      </div>

    </div>

    <div class="header-main">

      <div class="container">

        <a href="{{URL::to('/trang-chu')}}" class="header-logo">
          <img src="{{asset('public/frontend/images/logo/logoTPCN.png')}}" alt="7Team logo" width="140" height="auto">
        </a>

        <div class="header-search-container">

          <input type="search" name="search" class="search-field" placeholder="Nhập tên sản phẩm...">

          <button class="search-btn">
            <ion-icon name="search-outline"></ion-icon>
          </button>

        </div>

        <div class="header-user-actions">

          <button class="action-btn" data-user>
            <i class="fa-solid fa-user-large"></i>
          </button>

          <button class="action-btn" data-bell>
            <i class="fa-solid fa-bell"></i>
            <span class="count">0</span>
          </button>
          
          <button class="action-btn" data-cart>
            <i class="fa-solid fa-cart-shopping"></i>
            <span class="count">0</span>
          </button>

        </div>

      </div>

    </div>

    <div class="cart-sidebar has-scrollbar">

      <ion-icon class="close-btn" name="close-outline" data-cart-close-btn></ion-icon>

      <h2 class="cart-title">Chi tiết giỏ hàng</h2>

      <div class="cart-container">
        <article class="cart-card">
          <div class="card-box">
            <img src="{{asset('public/uploads/product/product-20_71.png')}}" alt="Lỗi hiển thị">
          </div>

          <div class="cart-details">
            <h3 class="cart-details-title">
              Viên uống khổ qua rừng MUDARU
            </h3>

            <span class="cart-price">
              350.000VNĐ
            </span>

            <div class="cart-amount">
              <div class="cart-amount-content">
                <span class="cart-amount-box">
                  <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                </span>

                <div class="cart-amount-number">
                  1
                </div>

                <span class="cart-amount-box">
                  <ion-icon name="add-outline" class="add-icon"></ion-icon>
                </span>
              </div>

              <ion-icon class="trash-btn" name="trash"></ion-icon>
            </div>
          </div>
        </article>

        <article class="cart-card">
          <div class="card-box">
            <img src="{{asset('public/uploads/product/product-19_49.png')}}" alt="Lỗi hiển thị">
          </div>

          <div class="cart-details">
            <h3 class="cart-details-title">
              Sâm Alipas Platinum
            </h3>

            <span class="cart-price">
              200.000VNĐ
            </span>

            <div class="cart-amount">
              <div class="cart-amount-content">
                <span class="cart-amount-box">
                  <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                </span>

                <div class="cart-amount-number">
                  2
                </div>

                <span class="cart-amount-box">
                  <ion-icon name="add-outline" class="add-icon"></ion-icon>
                </span>
              </div>

              <ion-icon class="trash-btn" name="trash"></ion-icon>
            </div>
          </div>
        </article>

        <article class="cart-card">
          <div class="card-box">
            <img src="{{asset('public/uploads/product/product-23_93.png')}}" alt="Lỗi hiển thị">
          </div>

          <div class="cart-details">
            <h3 class="cart-details-title">
              Lương Sâm Nguyên Củ KGC
            </h3>

            <span class="cart-price">
              850.000VNĐ
            </span>

            <div class="cart-amount">
              <div class="cart-amount-content">
                <span class="cart-amount-box">
                  <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                </span>

                <div class="cart-amount-number">
                  1
                </div>

                <span class="cart-amount-box">
                  <ion-icon name="add-outline" class="add-icon"></ion-icon>
                </span>
              </div>

              <ion-icon class="trash-btn" name="trash"></ion-icon>
            </div>
          </div>
        </article>
      </div>

      <div class="cart-prices">
        <span class="cart-prices-item">3 sản phẩm</span>
        <span class="cart-prices-total"> 2.000.000VNĐ</span>
      </div>

      <Button class="signup-btn">Thanh toán</Button>
    </div>

    <div class="login">
      <ion-icon class="close-btn" name="close-outline" data-login-close-btn></ion-icon>

      <h2 class="login-title">
        <i class="fa-solid fa-unlock-keyhole"></i>
        Đăng nhập
      </h2>

      <form action="" class="login-form">
        <div class="login-content">
          <label for="" class="login-label">
            Email
          </label>
          <input type="email login" class="login-input" placeholder="Nhập email">
        </div>

        <div class="login-content">
          <label for="" class="login-label">
            Mật khẩu
          </label>
          <input type="password login" class="login-input" placeholder="Nhập mật khẩu">
        </div>

        <div class="login-btn">
          <a href="">Đăng nhập</a>
        </div>

        <div class="password-reset">
          <a href="">Quên mật khẩu?</a>
        </div>

        <div class="other-methods">
          <div class="other-methods-title">
            <div class="line"></div>
              <p>
                Hoặc
              </p>
            <div class="line"></div>
          </div>
          
          <div class="other-method-content">
            <div class="social-btn">
              <i class="fa-brands fa-facebook"></i>
              <p>Facebook</p>
            </div>

            <div class="social-btn">
              <i class="fa-brands fa-google"></i>
              <p>Google</p>
            </div>

            <div class="social-btn">
              <i class="fa-brands fa-apple"></i>
              <p>Apple</p>
            </div>
          </div>
        </div>

        <div class="signup">
          <p>
            Chưa có tài khoản? <a href="">Đăng ký ngay</a>
          </p>
        </div>
      </form>
    </div>

    <div class="signup-sidebar has-scrollbar">
      <ion-icon class="close-btn" name="close-outline" data-signup-close-btn></ion-icon>

      <h2 class="signup-title">
        <i class="fa-solid fa-user-plus"></i>
        Đăng ký
      </h2>

      <form action="" class="signup-form">
        <div class="signup-content">
          <label for="" class="signup-label">
            Tên người dùng
          </label>
			    <input type="text" placeholder="Nhập tên" class="username signup" />
			    <i class="fa-solid fa-circle-check validation-icon"></i>
			    <i class="fa-solid fa-circle-xmark validation-icon"></i>
			    <small>Error message</small>
        </div>

        <div class="signup-content radio">
          <label for="" class="signup-label">
            Giới tính
          </label>
			    <input type="radio" name="gender" value="male"> Nam 
          <input type="radio" name="gender" value="female"> Nữ 
          <input type="radio" name="gender" value="female"> Khác 
        </div>

        <div class="signup-content">
          <label for="" class="signup-label">
            Email
          </label>
          <input type="email" class="email signup" placeholder="Nhập email">
          <i class="fa-solid fa-circle-check validation-icon"></i>
			    <i class="fa-solid fa-circle-xmark validation-icon"></i>
          <small>Error message</small>
        </div>

        <div class="signup-content">
          <label for="" class="signup-label">
            Mật khẩu
          </label>
          <input type="password" class="password signup" placeholder="Nhập mật khẩu">
          <i class="fa-solid fa-circle-check validation-icon"></i>
			    <i class="fa-solid fa-circle-xmark validation-icon"></i>
          <small>Error message</small>
        </div>

        <div class="signup-content">
          <label for="username" class="signup-label">Nhập lại mật khẩu</label>
			    <input type="password" placeholder="Nhập lại mật khẩu" class="password-check signup"/>
			    <i class="fa-solid fa-circle-check validation-icon"></i>
			    <i class="fa-solid fa-circle-xmark validation-icon"></i>
			    <small>Error message</small>
        </div>

        <div class="signup-content">
          <label for="" class="signup-label">
            Số điện thoại
          </label>
			    <input type="text" placeholder="Nhập số điện thoại" class="phone-number signup" />
			    <i class="fa-solid fa-circle-check validation-icon"></i>
			    <i class="fa-solid fa-circle-xmark validation-icon"></i>
			    <small>Error message</small>
        </div>

        <div class="signup-content">
          <label for="" class="signup-label">
            Địa chỉ
          </label>
			    <input type="text" placeholder="Nhập địa chỉ" class="address signup"/>
			    <i class="fa-solid fa-circle-check validation-icon"></i>
			    <i class="fa-solid fa-circle-xmark validation-icon"></i>
          <small>Error message</small>
        </div>

        <div class="signup-content license">
          <input type="checkbox" class="license-check signup"/>
          <label for="" class="signup-label">
            Nhận thông báo về các tin tức và sự kiện mới nhất của 7Team (Có thể hủy bất kì lúc nào).
          </label>
        </div>

        <Button class="signup-btn">Đăng kí</Button>
      
        <div class="signup-content agreement">
          <p>
            Bằng việc đăng kí, bạn đồng ý với 7Team về <a href=""> Điều khoản dịch vụ </a> và <a href=""> Chính sách bảo mật</a>
          </p>
        </div>
      </form>
    </div>

    <nav class="desktop-navigation-menu">

      <div class="container">

        <ul class="desktop-menu-category-list">

          <li class="menu-category">
            <a href="{{URL::to('/trang-chu')}}" class="menu-title">
              <i class="fa-solid fa-house"></i>
              Trang chủ
            </a>
          </li>

          <li class="menu-category">
            <a href="{{URL::to('/gioi-thieu')}}" class="menu-title">Giới thiệu</a>
          </li>

          <li class="menu-category">
            <a href="#" class="menu-title">Danh mục</a>

            <div class="dropdown-panel">

              @foreach($category as $key => $cate)
              <ul class="dropdown-panel-list">

                <li class="menu-title">
                    <a href="{{URL::to('/danh-muc-san-pham/'.$cate->category_id)}}">
                      <i class="fa-solid fa-pills"></i>
                      {{ $cate->category_name }}
                    </a>
                </li>

                {{-- @foreach($product as $key => $pro)
                @if($pro->category_id == $cate->category_id)
                <li class="panel-list-item">
                  <a href="#">
                    {{ $pro->product_name }}
                  </a>
                </li>
                @endif
                @endforeach --}}

              </ul>
              @endforeach

            </div>
          </li>

          <li class="menu-category">
            <a href="#" class="menu-title">Thương hiệu</a>

            <div class="dropdown-panel">

              @foreach($brand as $key => $br)
              <ul class="dropdown-panel-list">

                <li class="menu-title">
                    <a href="{{URL::to('/thuong-hieu-san-pham/'.$br->brand_id)}}">
                      <i class="fa-solid fa-tags"></i>
                      {{ $br->brand_name }}
                    </a>
                </li>
              </ul>
              @endforeach

            </div>
          </li>

          <li class="menu-category">
            <a href="{{URL::to('/cam-nang-suc-khoe')}}" class="menu-title">Cẩm nang sức khỏe</a>
          </li>

          <li class="menu-category">
            <a href="{{URL::to('/tin-tuc')}}" class="menu-title">Tin tức</a>
          </li>

          <li class="menu-category">
            <a href="{{URL::to('/error404')}}" class="menu-title">Trợ giúp</a>

            <ul class="dropdown-list">

              <li class="dropdown-item">
                <a href="#">
                  <i class="fa-solid fa-circle-question"></i>
                  Tư vấn mua hàng
                </a>
              </li>

              <li class="dropdown-item">
                <a href="#">
                  <i class="fa-solid fa-circle-question"></i>
                  Hướng dẫn đặt hàng
                </a>
              </li>

              <li class="dropdown-item">
                <a href="#">
                  <i class="fa-solid fa-clock-rotate-left"></i>
                  Chính sách đổi trả
                </a>
              </li>

              <li class="dropdown-item">
                <a href="#">
                  <i class="fa-solid fa-truck-fast"></i>
                  Vận chuyển & giao nhận
                </a>
              </li>

              <li class="dropdown-item">
                <a href="#">
                  <i class="fa-regular fa-handshake"></i>
                  Cam kết bảo mật thông tin
                </a>
              </li>
              
              <li class="dropdown-item">
                <a href="#">
                  <i class="fa-solid fa-scale-balanced"></i>
                  Cơ chế giải quyết tranh chấp
                </a>
              </li>

              <li class="dropdown-item">
                <a href="#">
                  <i class="fa-solid fa-scroll"></i>
                  Quy chế hoạt động
                </a>
              </li>

            </ul>
          </li>

          <li class="menu-category">
            <a href="{{URL::to('/lien-he')}}" class="menu-title">Liên hệ</a>

            <ul class="dropdown-list">

              <li class="dropdown-item">
                <a href="#">
                  <i class="fa-solid fa-comment-dots"></i>
                  Phản hồi
                </a>
              </li>

              <li class="dropdown-item">
                <a href="#">
                  <i class="fa-solid fa-user-pen"></i>
                  Đăng ký cộng tác viên
                </a>
              </li>
  
              <li class="dropdown-item">
                <a href="#">
                  <i class="fa-solid fa-map-location-dot"></i>
                  Bản đồ vị trí shop
                </a>
              </li>
              
            </ul>
            
          </li>

        </ul>

      </div>

    </nav>

    <div class="mobile-bottom-navigation">

      <button class="action-btn" data-mobile-menu-open-btn>
        <ion-icon name="menu-outline"></ion-icon>
      </button>

      <button class="action-btn" data-mb-bell>
        <ion-icon name="notifications-outline"></ion-icon>

        <span class="count">0</span>
      </button>

      <button class="action-btn">
        <a href="{{URL::to('/trang-chu')}}">
          <ion-icon name="home-outline"></ion-icon>
        </a>
      </button>

      <button class="action-btn" data-mb-cart>
        <ion-icon name="cart-outline"></ion-icon>

        <span class="count">0</span>
      </button>

      <button class="action-btn" data-mobile-menu-open-btn>
        <ion-icon name="grid-outline"></ion-icon>
      </button>

    </div>

    <nav class="mobile-navigation-menu  has-scrollbar" data-mobile-menu>

      <div class="menu-top">
        <h2 class="menu-title">Menu</h2>

        <button class="menu-close-btn" data-mobile-menu-close-btn>
          <ion-icon name="close-outline"></ion-icon>
        </button>
      </div>

      <ul class="mobile-menu-category-list">

        <li class="menu-category">
          <a href="{{URL::to('/trang-chu')}}" class="menu-title">Trang chủ</a>
        </li>

        <li class="menu-category">
          <a href="#" class="menu-title" data-mb-sign-link>Đăng kí</a>
        </li>

        <li class="menu-category">
          <a href="#" class="menu-title" data-mb-login-link>Đăng nhập</a>
        </li>

        <li class="menu-category">
          <a href="{{URL::to('/gioi-thieu')}}" class="menu-title">Giới thiệu</a>
        </li>

        <li class="menu-category">
          <a href="{{URL::to('/tin-tuc')}}" class="menu-title">Tin tức</a>
        </li>

        <li class="menu-category">
          <a href="{{URL::to('/cam-nang-suc-khoe')}}" class="menu-title">Cẩm nang sức khỏe</a>
        </li>
        
        <li class="menu-category">

          <button class="accordion-menu" data-accordion-btn>
            <p class="menu-title">Trợ giúp</p>

            <div>
              <ion-icon name="add-outline" class="add-icon"></ion-icon>
              <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
            </div>
          </button>

          <ul class="submenu-category-list" data-accordion>

            <li class="submenu-category">
              <a href="{{URL::to('/error404')}}" class="submenu-title">Tư vấn mua hàng</a>
            </li>

            <li class="submenu-category">
              <a href="{{URL::to('/error404')}}" class="submenu-title">Hướng dẫn đặt hàng</a>
            </li>

            <li class="submenu-category">
              <a href="{{URL::to('/error404')}}" class="submenu-title">Chính sách đổi trả</a>
            </li>

            <li class="submenu-category">
              <a href="{{URL::to('/error404')}}" class="submenu-title">Vận chuyển và giao nhận</a>
            </li>

            <li class="submenu-category">
              <a href="{{URL::to('/error404')}}" class="submenu-title">Cam kết bảo mật thông tin</a>
            </li>

            <li class="submenu-category">
              <a href="{{URL::to('/error404')}}" class="submenu-title">Cơ chế giải quyết tranh chấp</a>
            </li>

            <li class="submenu-category">
              <a href="{{URL::to('/error404')}}" class="submenu-title">Qui chế hoạt động</a>
            </li>

          </ul>

        </li>

        <li class="menu-category">

          <button class="accordion-menu" data-accordion-btn>
            <p class="menu-title">Liên hệ</p>

            <div>
              <ion-icon name="add-outline" class="add-icon"></ion-icon>
              <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
            </div>
          </button>

          <ul class="submenu-category-list" data-accordion>

            <li class="submenu-category">
              <a href="{{URL::to('/error404')}}" class="submenu-title">Phản hồi</a>
            </li>

            <li class="submenu-category">
              <a href="{{URL::to('/error404')}}" class="submenu-title">Đăng ký cộng tác viên</a>
            </li>

            <li class="submenu-category">
              <a href="{{URL::to('/error404')}}" class="submenu-title">Bản đồ vị trí shop</a>
            </li>

          </ul>

        </li>

      </ul>

      <div class="menu-bottom">

        <ul class="menu-category-list">

          <li class="menu-category">

            <button class="accordion-menu" data-accordion-btn>
              <p class="menu-title">Ngôn ngữ</p>

              <ion-icon name="caret-back-outline" class="caret-back"></ion-icon>
            </button>

            <ul class="submenu-category-list" data-accordion>

              <li class="submenu-category">
                <a href="#" class="submenu-title">Tiếng Việt</a>
              </li>

              <li class="submenu-category">
                <a href="#" class="submenu-title">English</a>
              </li>

            </ul>

          </li>

          <li class="menu-category">
            <button class="accordion-menu" data-accordion-btn>
              <p class="menu-title">Tiền tệ</p>
              <ion-icon name="caret-back-outline" class="caret-back"></ion-icon>
            </button>

            <ul class="submenu-category-list" data-accordion>
              <li class="submenu-category">
                <a href="#" class="submenu-title">VNĐ</a>
              </li>

              <li class="submenu-category">
                <a href="#" class="submenu-title">USD</a>
              </li>
            </ul>
          </li>

        </ul>

        <ul class="menu-social-container">

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="mail-outline"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-youtube"></ion-icon>
            </a>
          </li>


        </ul>

      </div>

    </nav>





  <!--
    - MAIN
  -->

  <main>
    <!--
      - BANNER
    -->
    @yield('banner')

    <!-- 
      - Icon section
     -->
     @yield('icon')

     <!-- 
      - Main content
     -->
    @yield('content')

    <!--
      - BLOG
    -->
    @yield('blog')

  </main>

  <!--
    - FOOTER
  -->

  <footer>

    <div class="footer-top">
      <div class="container">
        <div class="footer-logo">
          <img src="{{asset('public/frontend/images/logo/footer-logo.png')}}" alt="Lỗi hiển thị">
          <img src="{{asset('public/frontend/images/dmca-logo.png')}}" alt="Lỗi hiển thị">
          <img src="{{asset('public/frontend/images/bo-cong-thuong.png')}}" alt="Lỗi hiển thị">
        </div>
  
        <div class="footer-social-icon">
          <div class="button">
            <div class="icon">
               <i class="fab fa-facebook-f"></i>
            </div>
            <span>
               <a href="">Facebook</a> 
            </span>
         </div>
         <div class="button">
            <div class="icon">
              <i class="fa-solid fa-envelope"></i>
            </div>
            <span>
              <a href="">Gmail</a>
            </span>
         </div>
         <div class="button">
            <div class="icon">
               <i class="fab fa-instagram"></i>
            </div>
            <span>
              <a href="">Instagram</a>
            </span>
         </div>
         <div class="button">
            <div class="icon">
               <i class="fab fa-youtube"></i>
            </div>
            <span>
              <a href="">YouTube</a>
            </span>
         </div>
        </div>
      </div>
    </div>

    <div class="footer-nav">

      <div class="container">

        <ul class="footer-nav-list">

          <li class="footer-nav-item">
            <h2 class="nav-title">Danh mục nổi bật</h2>
          </li>

          @foreach($category as $key => $cate)
          @if($cate->category_note == "Nổi bật")
          <li class="footer-nav-item">
            <a href="{{URL::to('/danh-muc-san-pham/'.$cate->category_id)}}" class="footer-nav-link">
              {{ $cate->category_name }}
            </a>
          </li>
          @endif
          @endforeach


        </ul>

        <ul class="footer-nav-list">
        
          <li class="footer-nav-item">
            <h2 class="nav-title">Sản phẩm</h2>
          </li>
        
          <li class="footer-nav-item">
            <a href="{{URL::to('/error404')}}" class="footer-nav-link">Xu hướng</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="{{URL::to('/error404')}}" class="footer-nav-link">Sản phẩm mới</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="{{URL::to('/error404')}}" class="footer-nav-link">Được đánh giá cao</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="{{URL::to('/error404')}}" class="footer-nav-link">Ưu đãi</a>
          </li>
        
        </ul>

        <ul class="footer-nav-list">
        
          <li class="footer-nav-item">
            <h2 class="nav-title">Về 7Team</h2>
          </li>
        
          <li class="footer-nav-item">
            <a href="{{URL::to('/gioi-thieu')}}" class="footer-nav-link">Giới thiệu</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="{{URL::to('/error404')}}" class="footer-nav-link">Tuyển dụng</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="{{URL::to('/error404')}}" class="footer-nav-link">Điều khoản dịch vụ</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="{{URL::to('/error404')}}" class="footer-nav-link">Chính sách bảo mật</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="{{URL::to('/error404')}}" class="footer-nav-link">Hoạt động & Sự kiện</a>
          </li>
        
        </ul>

        <ul class="footer-nav-list">
        
          <li class="footer-nav-item">
            <h2 class="nav-title">Hỗ trợ khách hàng</h2>
          </li>
        
          <li class="footer-nav-item">
            <a href="{{URL::to('/error404')}}" class="footer-nav-link">Tư vấn mua hàng</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="{{URL::to('/error404')}}" class="footer-nav-link">Hướng dẫn đặt hàng</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="{{URL::to('/error404')}}" class="footer-nav-link">Chính sách đổi trả</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="{{URL::to('/error404')}}" class="footer-nav-link">Vận chuyển & giao nhận</a>
          </li>
          
          <li class="footer-nav-item">
            <a href="{{URL::to('/error404')}}" class="footer-nav-link">Cam kết bảo mật thông tin</a>
          </li>

          <li class="footer-nav-item">
            <a href="{{URL::to('/error404')}}" class="footer-nav-link">Cơ chế giải quyết tranh chấp</a>
          </li>

          <li class="footer-nav-item">
            <a href="{{URL::to('/error404')}}" class="footer-nav-link">Quy chế hoạt động</a>
          </li>

          <li class="footer-nav-item">
            <a href="{{URL::to('/error404')}}" class="footer-nav-link">Bản đồ vị trí shop</a>
          </li>
        
        </ul>

        <ul class="footer-nav-list">

          <li class="footer-nav-item">
            <h2 class="nav-title">Liên hệ</h2>
          </li>

          <li class="footer-nav-item flex">
            <div class="icon-box">
              <ion-icon name="location-outline"></ion-icon>
            </div>

            <address class="content">
              Tầng 1, tòa nhà 24T3 7Team Complex, 47 Phù Đổng Thiên Vương, Phường 8, Thành phố Đà Lạt, Lâm Đồng
            </address>
          </li>

          <li class="footer-nav-item flex">
            <div class="icon-box">
              <ion-icon name="call-outline"></ion-icon>
            </div>

            <a href="#" class="footer-nav-link">
              Hotline 0985.443.737
            </a>
          </li>

          <li class="footer-nav-item flex">
            <div class="icon-box">
              <ion-icon name="mail-outline"></ion-icon>
            </div>

            <a href="mailto:cskh7team@gmail.com" class="footer-nav-link">cskh7team@gmail.com</a>
          </li>

        </ul>

      </div>

    </div>

    <div class="footer-bottom">

      <div class="container">

        <img src="{{asset('public/frontend/images/payment.png')}}" alt="Lỗi hiển thị" class="payment-img">

        <p class="copyright">
          Copyright &copy; <a href="#">7Team</a> all rights reserved.
        </p>

      </div>

    </div>

  </footer>

  <!-- 
    -Loader 
  -->

  <div class="loader-container">
    <img src="{{asset('public/frontend/images/cat-loader.gif')}}" alt="Lỗi hiển thị">
    <div class="loader-content">
      <h2>Đang tải trang</h2>
      <h3>Vui lòng chờ...</h3>
    </div>
  </div>

  <!--
    - jquery
  -->
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->

  <!--
    - custom js link
  -->
  <script src="{{asset('public/frontend/js/main.js')}}"></script>
  @yield('script')

  <!--
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

  
</body>

</html>