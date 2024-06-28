@extends('layout')

{{-- css section --}}
@section('css')
    <link rel="stylesheet" href="{{ asset('public/frontend/css/404error.css') }}">
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
    - 404 error
    -->
    <div class="error404">
        <div class="container">
            <img src="{{asset('public/frontend/images/error404.png')}}" alt="404 again :D">

            <div class="error-content">
                <h2>Oops!</h2>
                <h2 class="error-title">
                    <i class="fa-solid fa-triangle-exclamation"></i>
                    Trang này hiện đang bị lỗi. Vui lòng quay lại sau!
                </h2>
            </div>
        </div>  
    </div>

@endsection

{{-- script section --}}
@section('script')
    <script src="{{ asset('public/frontend/js/contact-page.js') }}"></script>
    <script src="{{ asset('public/frontend/js/sticky-navbar.js') }}"></script>
@endsection

