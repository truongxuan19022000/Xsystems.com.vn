@extends('base')
@section('title','Xsystems - Chuyên thiết kế website, logo, banner')
@section('description','XSystems cung cấp các giải pháp công nghệ tiên tiến cho doanh nghiệp, từ phát triển phần mềm, website, app quản lý đến hệ thống mạng và các dịch vụ quảng cáo media social.')
@section('keywords','XSystems')
@section('contents')
<!-- Spinner Start -->
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0" id="home">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="https://xsystems.com.vn/" class="navbar-brand p-0">
                    <h1 class="m-0">Xsystems</h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav mx-auto py-0">
                        <a href="#home" class="nav-item nav-link active">Trang chủ</a>
                        <a href="#about" class="nav-item nav-link">Về chúng tôi</a>
                        <a href="#feature" class="nav-item nav-link">Lợi ích</a>
                        <a href="#pricing" class="nav-item nav-link">Bảng giá</a>
                         <!--<a href="#review" class="nav-item nav-link">Review</a>-->
                        <a href="#contact" class="nav-item nav-link">Liên hệ</a>
                    </div>
                    <a href="#pricing" class="btn btn-primary-gradient rounded-pill py-2 px-4 ms-3 d-none d-lg-block">Dùng thử miễn phí</a>
                </div>
            </nav>

            <div class="container-xxl bg-primary hero-header">
                <div class="container px-lg-5">
                    <div class="row g-5">
                        <div class="col-lg-8 text-center text-lg-start">
                            <h1 class="text-white mb-4 animated slideInDown">Dịch vụ thiết kế website chuyên nghiệp</h1>
                            <p class="text-white mb-4 animated slideInDown">
                                Xsystems cung cấp giải pháp thiết kế website phù hợp với tất cả
                                doanh nghiệp, cửa hàng quy mô lớn, vừa & nhỏ
                            </p>
                            <p class="text-white mb-2 animated slideInDown">Tối ưu chi phí – Bứt phá thứ hạng</p>
                            <p class="text-white mb-2 animated slideInDown">
                                <i class="fa fa-check-circle" aria-hidden="true"></i>
                                <label>Giá chỉ từ <span class="fw-medium">2 triệu</span></label>
                            </p>
                            <p class="text-white mb-2 animated slideInDown">
                                <i class="fa fa-check-circle" aria-hidden="true"></i>
                                <label>Miễn phí logo, poster</label>
                            </p>
                            <p class="text-white mb-2 animated slideInDown">
                                <i class="fa fa-check-circle" aria-hidden="true"></i>
                                <label>Miễn phí tên miền .com</label>
                            </p>
                            <p class="text-white mb-2 animated slideInDown">
                                <i class="fa fa-check-circle" aria-hidden="true"></i>
                                <label>Miễn phí tăng follow, view cho social media</label>
                            </p>

                            <iframe class="xsystem-develop-img"
                                src="https://lottie.host/embed/1288ef47-6f36-46c3-bc7a-1da36f7b3292/vI7pKLRfxp.json"></iframe>
                        </div>

                        <div class="col-lg-4 d-flex justify-content-center justify-content-lg-end wow fadeInUp animation"
                            data-wow-delay="0.3s">
                            <div class="owl-carousel screenshot-carousel">
                                <img class="img-fluid" src="img/functions.png" alt="">
                                <img class="img-fluid" src="img/seo.png" alt="">
                                <img class="img-fluid" src="img/tocdo.png" alt="">
                                <img class="img-fluid" src="img/ui.png" alt="">
                                <img class="img-fluid" src="img/connect.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- About Start -->
        <div class="container-xxl py-5" id="about">
            <div class="container py-5 px-lg-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <h5 class="text-primary-gradient fw-medium">Xsystems</h5>
                        <h1 class="mb-4">#1 Tại sao khách hàng chọn Xsystems</h1>
                        <p class="mb-4">Xsystems cung cấp giải pháp thiết kế website trọn gói, chuyên nghiệp, luôn tuân
                            thủ quy tắc chuẩn SEO và tối ưu hóa trải nghiệm người dùng,
                            từ đó thúc đẩy nhận diện thương hiệu của cá nhân và doanh nghiệp trên internet.</p>
                        <div class="row g-4 mb-4">
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.5s">
                                <div class="d-flex">
                                    <i class="fa fa-share-square fa-2x text-primary-gradient flex-shrink-0 mt-1"></i>
                                    <div class="ms-3">
                                        <h2 class="mb-0">+ <span class="counter" data-toggle="counter-up">500</span>
                                        </h2>
                                        <p class="text-primary-gradient mb-0">Đơn vị chạy quẳng cáo</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.7s">
                                <div class="d-flex">
                                    <i class="fa fa-comments fa-2x text-secondary-gradient flex-shrink-0 mt-1"></i>
                                    <div class="ms-3">
                                        <h2 class="mb-0">+ <span class="counter" data-toggle="counter-up">200</span>
                                        </h2><i class="fa-brands fa-tiktok"></i>
                                        <p class="text-secondary-gradient mb-0">Phản hồi từ khách hàng</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.7s">
                                <div class="d-flex">
                                    <i class="fa fa-desktop fa-2x text-secondary-gradient flex-shrink-0 mt-1"></i>
                                    <div class="ms-3">
                                        <h2 class="mb-0">><span data-toggle="counter-up">100</span></h2>
                                        <p class="text-secondary-gradient mb-0">Giao diện đa dạng</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.7s">
                                <div class="d-flex">
                                    <i class="fa fa-thumbs-up fa-2x text-secondary-gradient flex-shrink-0 mt-1"></i>
                                    <div class="ms-3">
                                        <h2 class="mb-0"><span data-toggle="counter-up">100</span>%</h2>
                                        <p class="text-secondary-gradient mb-0">Khách hàng hài lòng</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="" class="btn btn-primary-gradient py-sm-3 px-4 px-sm-5 rounded-pill mt-3">Read More</a>
                    </div>
                    <div class="col-lg-6">
                        <iframe class="xsystem-develop-img"
                            src="https://lottie.host/embed/2ae2abf9-ae3b-4855-9de7-fa219c249c13/EAOm4EXDCH.json"></iframe>
                        <!-- <iframe width="500" height="400"
                            src="https://lottie.host/embed/1288ef47-6f36-46c3-bc7a-1da36f7b3292/vI7pKLRfxp.json"></iframe> -->
                        <!-- <img class="img-fluid wow fadeInUp" data-wow-delay="0.5s" src="img/Animation.gif"> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Features Start -->
        <div class="container-xxl py-5" id="feature">
            <div class="container py-5 px-lg-5">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="mb-5">Những lợi ích khi bạn hợp tác với Xsystems</h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="feature-item bg-light rounded p-4">
                            <div class="d-inline-flex align-items-center justify-content-center bg-primary-gradient rounded-circle mb-4"
                                style="width: 60px; height: 60px;">
                                <i class="fa fa-eye text-white fs-4"></i>
                            </div>
                            <h5 class="mb-3">Giao diện</h5>
                            <p class="m-0">Giao diện hiện đại, trẻ trung, đẹp mắt, dễ dàng sử dụng và thao tác trên các
                                thiết bị hiện nay.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="feature-item bg-light rounded p-4">
                            <div class="d-inline-flex align-items-center justify-content-center bg-secondary-gradient rounded-circle mb-4"
                                style="width: 60px; height: 60px;">
                                <i class="fa fa-dollar-sign text-white fs-4"></i>
                            </div>
                            <h5 class="mb-3">Chi phí</h5>
                            <p class="m-0">Tiết kiệm chi phí marketing, kinh doanh và quản lý, có thể kết nối với khách
                                hàng hiệu quả.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="feature-item bg-light rounded p-4">
                            <div class="d-inline-flex align-items-center justify-content-center bg-primary-gradient rounded-circle mb-4"
                                style="width: 60px; height: 60px;">
                                <i class="fa fa-edit text-white fs-4"></i>
                            </div>
                            <h5 class="mb-3">Maketing hiệu quả</h5>
                            <p class="m-0">Quảng bá thương hiệu, sản phẩm và dịch vụ của bạn đến với nhiều khách hàng
                                tiềm năng trên internet.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="feature-item bg-light rounded p-4">
                            <div class="d-inline-flex align-items-center justify-content-center bg-secondary-gradient rounded-circle mb-4"
                                style="width: 60px; height: 60px;">
                                <i class="fa fa-shield-alt text-white fs-4"></i>
                            </div>
                            <h5 class="mb-3">Quản trị dễ dàng</h5>
                            <p class="m-0">Tool hiện đại tích hợp trên website giúp việc các thống kê đơn hàng, kinh
                                doanh trở lên dễ dàng hơn.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="feature-item bg-light rounded p-4">
                            <div class="d-inline-flex align-items-center justify-content-center bg-primary-gradient rounded-circle mb-4"
                                style="width: 60px; height: 60px;">
                                <i class="fa fa-cloud text-white fs-4"></i>
                            </div>
                            <h5 class="mb-3">Xây dựng thương hiệu</h5>
                            <p class="m-0">Chúng tôi có thể xây dựng thương cá nhân của bạn qua các phương tiện truyền
                                thông phổ biến hiện nay.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="feature-item bg-light rounded p-4">
                            <div class="d-inline-flex align-items-center justify-content-center bg-secondary-gradient rounded-circle mb-4"
                                style="width: 60px; height: 60px;">
                                <i class="fa fa-chart-line text-white fs-4"></i>
                            </div>
                            <h5 class="mb-3">Tăng trưởng doanh thu</h5>
                            <p class="m-0">Bán hàng online 24/7 thuận tiện, thanh toán online dễ dàng và không cần chờ
                                chốt đơn.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Features End -->

        <!-- Features many service -->
        <div class="container-xxl py-5" id="feature">
            <div class="container py-5 px-lg-5">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="mb-5">Các dịch vụ phổ biến của chúng tôi</h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="feature-item text-center bg-service-1 rounded p-4" style="height: 300px;">
                            <img width="220" height="203" src="./img/about.png" class="attachment-full size-full" alt="xsystem-app.png" loading="lazy">

                            <h5 class="mt-3">Thiết kế app</h5>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="feature-item text-center bg-service-2 rounded p-4" style="height: 300px;">
                            <img width="220" height="203" src="./img/xsystem-design.png" class="attachment-full size-full" alt="xsystem-design.png" loading="lazy">

                            <h5 class="mt-3">Thiết kế logo, banner, visit card</h5>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="feature-item text-center bg-service-3 rounded p-4" style="height: 300px;">
                            <img width="220" height="203" src="./img/xsystem-web.png" class="attachment-full size-full" alt="xsystem-web.png" loading="lazy">

                            <h5 class="mt-3">Cho thuê vps, domain giá rẻ</h5>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="feature-item text-center bg-service-4 rounded p-4" style="height: 300px;">
                            <img width="220" height="203" src="./img/xsystem-web-develop.png" class="attachment-full size-full" alt="xsystem-web-develop.png" loading="lazy">

                            <h5 class="mt-3">Thiết kế website theo yêu cầu</h5>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="feature-item text-center bg-service-5 rounded p-4" style="height: 300px;">
                            <img width="220" height="203" src="./img/xsystem-social.png" class="attachment-full size-full" alt="xsystem-social.png" loading="lazy">

                            <h5 class="mt-3">Chạy ads, tăng follow, view, live cho TiTok</h5>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="feature-item text-center bg-service-6 rounded p-4" style="height: 300px;">
                            <img width="220" height="203" src="./img/xsystem-management.png" class="attachment-full size-full" alt="xsystem-management.png" loading="lazy">

                            <h5 class="mt-3">Phần mềm quản trị phức tạp</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Features End -->
        <!-- Screenshot Start -->
        <!--<div class="container-xxl py-5">
            <div class="container py-5 px-lg-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-8 wow fadeInUp" data-wow-delay="0.1s">
                        <h5 class="text-primary-gradient fw-medium">Screenshot</h5>
                        <h1 class="mb-4">User Friendly interface And Very Easy To Use Fitness App</h1>
                        <p class="mb-4">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore. Clita
                            erat ipsum et lorem et sit, sed stet no labore lorem sit clita duo justo eirmod magna dolore
                            erat amet</p>
                        <p><i class="fa fa-check text-primary-gradient me-3"></i>Diam dolor diam ipsum et tempor sit</p>
                        <p><i class="fa fa-check text-primary-gradient me-3"></i>Aliqu diam amet diam et eos labore</p>
                        <p class="mb-4"><i class="fa fa-check text-primary-gradient me-3"></i>Clita erat ipsum et lorem
                            et sit</p>
                        <a href="" class="btn btn-primary-gradient py-sm-3 px-4 px-sm-5 rounded-pill mt-3">Read More</a>
                    </div>
                    <div class="col-lg-4 d-flex justify-content-center justify-content-lg-end wow fadeInUp"
                        data-wow-delay="0.3s">
                        <div class="owl-carousel screenshot-carousel">
                            <img class="img-fluid" src="img/screenshot-1.png" alt="">
                            <img class="img-fluid" src="img/screenshot-2.png" alt="">
                            <img class="img-fluid" src="img/screenshot-3.png" alt="">
                            <img class="img-fluid" src="img/screenshot-4.png" alt="">
                            <img class="img-fluid" src="img/screenshot-5.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Screenshot End -->


        <!-- Process Start -->
        <!--<div class="container-xxl py-5">
            <div class="container py-5 px-lg-5">
                <div class="text-center pb-4 wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="text-primary-gradient fw-medium">How It Works</h5>
                    <h1 class="mb-5">3 Easy Steps</h1>
                </div>
                <div class="row gy-5 gx-4 justify-content-center">
                    <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="position-relative bg-light rounded pt-5 pb-4 px-4">
                            <div class="d-inline-flex align-items-center justify-content-center bg-primary-gradient rounded-circle position-absolute top-0 start-50 translate-middle shadow"
                                style="width: 100px; height: 100px;">
                                <i class="fa fa-cog fa-3x text-white"></i>
                            </div>
                            <h5 class="mt-4 mb-3">Install the App</h5>
                            <p class="mb-0">Tempor erat elitr rebum clita dolor diam ipsum sit diam amet diam eos erat
                                ipsum et lorem et sit sed stet</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="position-relative bg-light rounded pt-5 pb-4 px-4">
                            <div class="d-inline-flex align-items-center justify-content-center bg-secondary-gradient rounded-circle position-absolute top-0 start-50 translate-middle shadow"
                                style="width: 100px; height: 100px;">
                                <i class="fa fa-address-card fa-3x text-white"></i>
                            </div>
                            <h5 class="mt-4 mb-3">Setup Your Profile</h5>
                            <p class="mb-0">Tempor erat elitr rebum clita dolor diam ipsum sit diam amet diam eos erat
                                ipsum et lorem et sit sed stet</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="position-relative bg-light rounded pt-5 pb-4 px-4">
                            <div class="d-inline-flex align-items-center justify-content-center bg-primary-gradient rounded-circle position-absolute top-0 start-50 translate-middle shadow"
                                style="width: 100px; height: 100px;">
                                <i class="fa fa-check fa-3x text-white"></i>
                            </div>
                            <h5 class="mt-4 mb-3">Enjoy The Features</h5>
                            <p class="mb-0">Tempor erat elitr rebum clita dolor diam ipsum sit diam amet diam eos erat
                                ipsum et lorem et sit sed stet</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Process Start -->


        <!-- Download Start -->
        <!--<div class="container-xxl py-5">
            <div class="container py-5 px-lg-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <img class="img-fluid wow fadeInUp" data-wow-delay="0.1s" src="img/about.png">
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                        <h5 class="text-primary-gradient fw-medium">Download</h5>
                        <h1 class="mb-4">Download The Latest Version Of Our App</h1>
                        <p class="mb-4">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore. Clita
                            erat ipsum et lorem et sit, sed stet no labore lorem sit clita duo justo eirmod magna dolore
                            erat amet</p>
                        <div class="row g-4">
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.5s">
                                <a href="" class="d-flex bg-primary-gradient rounded py-3 px-4">
                                    <i class="fab fa-apple fa-3x text-white flex-shrink-0"></i>
                                    <div class="ms-3">
                                        <p class="text-white mb-0">Available On</p>
                                        <h5 class="text-white mb-0">App Store</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.7s">
                                <a href="" class="d-flex bg-secondary-gradient rounded py-3 px-4">
                                    <i class="fab fa-android fa-3x text-white flex-shrink-0"></i>
                                    <div class="ms-3">
                                        <p class="text-white mb-0">Available On</p>
                                        <h5 class="text-white mb-0">Play Store</h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Download End -->

<div class="container-xxl py-5" id="category">
            <div class="container py-5 px-lg-5">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h1>Mẫu giao diện website theo ngành hàng</h1>
                </div>
                <div class="category-xsystems">
                <div class="row">
                    <div class="col-lg-2 col-md-4 col-6">
                        <a>
                            <i class="icon fashion" style="background: url('{{ asset('img/categories/spa.jpg') }}') no-repeat center center;"></i>
                            <span>Ảnh viện - Spa</span>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <a>
                            <i class="icon fashion" style="background: url('{{ asset('img/categories/dichvu.jpg') }}') no-repeat center center;"></i>
                            <span>Dịch vụ</span>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <a>
                            <i class="icon fashion" style="background: url('{{ asset('img/categories/oto.jpg') }}') no-repeat center center;"></i>
                            <span>Ô tô xe máy</span>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <a>
                            <i class="icon fashion" style="background: url('{{ asset('img/categories/tintuc.png') }}') no-repeat center center;"></i>
                            <span>Tin tức-Blog</span>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <a>
                            <i class="icon fashion" style="background: url('{{ asset('img/categories/kientruc.jpg') }}') no-repeat center center;"></i>
                            <span>Kiến trúc-Nội thất- Xây dựng</span>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <a>
                            <i class="icon fashion" style="background: url('{{ asset('img/categories/congty.jpg') }}') no-repeat center center;"></i>
                            <span>Giới thiệu công ty</span>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <a>
                            <i class="icon fashion" style="background: url('{{ asset('img/categories/ksdl.png') }}') no-repeat center center;"></i>
                            <span>Nhà hàng-khách sạn-du lịch</span>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <a href="thoi-trang-my-pham-fashion-pc13.html">
                            <i class="icon fashion" style="background: url('{{ asset('img/categories/thoitrang.jpg') }}') no-repeat center center;"></i>
                            <span>Thời trang-mỹ phẩm-fashion</span>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <a>
                            <i class="icon fashion" style="background: url('{{ asset('img/categories/truonghoc.jpg') }}') no-repeat center center;"></i>
                            <span>Trường học - Trung tâm</span>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <a>
                            <i class="icon fashion" style="background: url('{{ asset('img/categories/bds.jpg') }}') no-repeat center center;"></i>
                            <span>Bất động sản</span>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <a>
                            <i class="icon fashion" style="background: url('{{ asset('img/categories/wordpress.png') }}') no-repeat center center;"></i>
                            <span>Wordpress</span>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <a>
                            <i class="icon fashion" style="background: url('{{ asset('img/categories/congnghe.png') }}') no-repeat center center;"></i>
                            <span>Công nghệ kỹ thuật số</span>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <a>
                            <i class="icon fashion" style="background: url('{{ asset('img/categories/thucpham.jpg') }}') no-repeat center center;"></i>
                            <span>Thực phẩm</span>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <a>
                            <i class="icon fashion" style="background: url('{{ asset('img/categories/giadung.jpg') }}') no-repeat center center;"></i>
                            <span>Gia dụng</span>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <a>
                            <i class="icon fashion" style="background: url('{{ asset('img/categories/sach.jpg') }}') no-repeat center center;"></i>
                            <span>Sách - Thiết bị giáo dục</span>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <a>
                            <i class="icon fashion" style="background: url('{{ asset('img/categories/trangsuc.jpg') }}') no-repeat center center;"></i>
                            <span>Thủ công - Mỹ nghệ - Quà tặng</span>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <a>
                            <i class="icon fashion" style="background: url('{{ asset('img/categories/landing.jpg') }}') no-repeat center center;"></i>
                            <span>Landing page</span>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <a>
                            <i class="icon fashion" style="background: url('{{ asset('img/categories/game.jpg') }}') no-repeat center center;"></i>
                            <span>Video - Game</span>
                        </a>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <!-- Pricing Start -->
        <div class="container-xxl py-5" id="pricing">
            <div class="container py-5 px-lg-6">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="text-primary-gradient fw-medium">Bảng giá</h5>
                    <h1 class="mb-5">Bản giá dịch vụ chúng tôi</h1>
                </div>
                <div class="tab-class text-center pricing wow fadeInUp" data-wow-delay="0.1s">
                    <ul
                        class="nav nav-pills d-inline-flex justify-content-center bg-primary-gradient rounded-pill mb-5">
                        <li class="nav-item">
                            <button class="nav-link active" data-bs-toggle="pill" href="#tab-1">Monthly</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link" data-bs-toggle="pill" href="#tab-2">Yearly</button>
                        </li>
                    </ul>
                    <div class="tab-content text-start">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="row g-4">
                                <div class="col-lg-4">
                                    <div class="bg-light rounded">
                                        <div class="border-bottom p-4 mb-4">
                                            <h4 class="text-primary-gradient mb-1">Free</h4>
                                            <span>Gói website trải nghiệm</span>
                                        </div>
                                        <div class="p-4 pt-0">
                                            <h1 class="mb-3">
                                                <small class="align-top"
                                                    style="font-size: 22px; line-height: 45px;"></small>0 VNĐ<small
                                                    class="align-bottom" style="font-size: 16px; line-height: 40px;">/
                                                    Month</small>
                                            </h1>
                                            <div class="d-flex justify-content-between mb-3"><span>Trải nghiệm website</span><i
                                                    class="fa fa-check text-primary-gradient pt-1"></i></div>
                                            <div class="d-flex justify-content-between mb-3"><span>Tặng 1 lần tuỳ biến màu sắc giao diện theo logo</span><i
                                                    class="fa fa-check text-primary-gradient pt-1"></i></div>
                                            <div class="d-flex justify-content-between mb-3"><span>Hỗ trợ nhập 30 đơn vị bài viết / sản phẩm</span><i class="fa fa-check text-primary-gradient pt-1"></i>
                                            </div>
                                            <div class="d-flex justify-content-between mb-2"><span>Giao diện tùy biến trên PC, Tablet, Mobile</span><i class="fa fa-check text-primary-gradient pt-1"></i>
                                            </div>
                                            <a href="#contact" class="btn btn-primary-gradient rounded-pill py-2 px-4 mt-4">Đăng ký</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="bg-light rounded border">
                                        <div class="border-bottom p-4 mb-4">
                                            <h4 class="text-primary-gradient mb-1">Pro</h4>
                                            <span>Phù hợp với doanh nghiệp mới, cửa hàng, nhà hàng, đơn vị nhỏ lẻ</span>
                                        </div>
                                        <div class="p-4 pt-0">
                                            <h1 class="mb-3">
                                                <small class="align-top"
                                                    style="font-size: 22px; line-height: 45px;"></small>299.000 VNĐ<small
                                                    class="align-bottom" style="font-size: 16px; line-height: 40px;">/
                                                    Month</small>
                                            </h1>
                                            <div class="d-flex justify-content-between mb-3"><span>Chọn mẫu giao diện có sẵn, tùy chỉnh Trang chủ và màu sắc giao diện theo logo</span><i
                                                    class="fa fa-check text-primary-gradient pt-1"></i></div>
                                            <div class="d-flex justify-content-between mb-3"><span>Thời gian bàn giao: 7-14 ngày</span><i
                                                    class="fa fa-check text-primary-gradient pt-1"></i></div>
                                            <div class="d-flex justify-content-between mb-3"><span>Miễn phí tên miền .com, .vn</span><i class="fa fa-check text-primary-gradient pt-1"></i>
                                            </div>
                                            <div class="d-flex justify-content-between mb-3"><span>Bảo hành website trọn đời</span><i class="fa fa-check text-primary-gradient pt-1"></i>
                                            </div>
                                            <div class="d-flex justify-content-between mb-2"><span>Tối ưu hỗ trợ SEO Google. Giao diện tương thích trên di động</span><i class="fa fa-check text-primary-gradient pt-1"></i>
                                            </div>
                                             <div class="d-flex justify-content-between mb-2"><span>Tặng gói bảo mật SSL trị giá 500.000 VNĐ</span><i class="fa fa-check text-primary-gradient pt-1"></i>
                                            </div>
                                             <div class="d-flex justify-content-between mb-2"><span>Tặng: 1 banner + logo cơ bản</span><i class="fa fa-check text-primary-gradient pt-1"></i>
                                            </div>
                                             <div class="d-flex justify-content-between mb-2"><span>Miễn phí tăng follow, view Titok, Fb ... cho đơn vị, doanh nghiệp</span><i class="fa fa-check text-primary-gradient pt-1"></i>
                                            </div>
                                            <a href="#contact"
                                                class="btn btn-secondary-gradient rounded-pill py-2 px-4 mt-4">
                                                Đăng ký</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="bg-light rounded">
                                        <div class="border-bottom p-4 mb-4">
                                            <h4 class="text-primary-gradient mb-1">Premium</h4>
                                            <span>Dành cho tổ chức doanh nghiệp vừa và nhỏ. Các tính năng chất lượng và thuận tiện để quản lý </span>
                                
                                        </div>
                                        <div class="p-4 pt-0">
                                            <h1 class="mb-3">
                                                <small class="align-top"
                                                    style="font-size: 22px; line-height: 45px;"></small>499.000<small
                                                    class="align-bottom" style="font-size: 16px; line-height: 40px;">/
                                                    Month</small>
                                            </h1>
                                            <div class="d-flex justify-content-between mb-3"><span>Chọn mẫu giao diện có sẵn, tùy chỉnh Trang chủ và màu sắc giao diện theo logo</span><i
                                                    class="fa fa-check text-primary-gradient pt-1"></i></div>
                                            <div class="d-flex justify-content-between mb-3"><span>Thời gian bàn giao: 7-14 ngày</span><i
                                                    class="fa fa-check text-primary-gradient pt-1"></i></div>
                                            <div class="d-flex justify-content-between mb-3"><span>Thống kê, báo cáo, gửi mail hằng ngày</span><i class="fa fa-check text-primary-gradient pt-1"></i>
                                            </div>
                                            <div class="d-flex justify-content-between mb-3"><span>Thống kê, báo cáo, gửi mail hằng ngày</span><i class="fa fa-check text-primary-gradient pt-1"></i>
                                            </div>
                                            <div class="d-flex justify-content-between mb-3"><span>Kết nối đơn vị, các dịch vụ thanh toán tích hợp dễ dàng</span><i class="fa fa-check text-primary-gradient pt-1"></i>
                                            </div>
                                            <div class="d-flex justify-content-between mb-2"><span>Tối ưu hỗ trợ SEO Google. Giao diện tương thích trên di động</span><i class="fa fa-check text-primary-gradient pt-1"></i>
                                            </div>
                                             <div class="d-flex justify-content-between mb-2"><span>Tặng gói bảo mật SSL trị giá 500.000 VNĐ</span><i class="fa fa-check text-primary-gradient pt-1"></i>
                                            </div>
                                             <div class="d-flex justify-content-between mb-2"><span>Tặng: 2 banner + logo cơ bản</span><i class="fa fa-check text-primary-gradient pt-1"></i>
                                            </div>
                                             <div class="d-flex justify-content-between mb-2"><span>Miễn phí tăng follow, view Titok, Fb ... cho đơn vị, doanh nghiệp</span><i class="fa fa-check text-primary-gradient pt-1"></i>
                                            </div>
                                            <a href="#about" class="btn btn-primary-gradient rounded-pill py-2 px-4 mt-4">
                                                Đăng ký</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-2" class="tab-pane fade p-0">
                            <div class="row g-4">
                                <div class="col-lg-4">
                                    <div class="bg-light rounded">
                                        <div class="border-bottom p-4 mb-4">
                                            <h4 class="text-primary-gradient mb-1">STANDARD</h4>
                                            <span>Gói website bao gồm giao diện bắt mắt, các tính năng cơ bản</span>
                                        </div>
                                        <div class="p-4 pt-0">
                                            <h1 class="mb-3">
                                                <small class="align-top"
                                                    style="font-size: 22px; line-height: 45px;"></small>Dưới 4 triệu<small
                                                    class="align-bottom" style="font-size: 16px; line-height: 40px;">/
                                                    Year</small>
                                            </h1>
                                           <div class="d-flex justify-content-between mb-3"><span>Chọn mẫu giao diện có sẵn, tùy chỉnh Trang chủ và màu sắc giao diện theo logo</span><i
                                                    class="fa fa-check text-primary-gradient pt-1"></i></div>
                                            <div class="d-flex justify-content-between mb-3"><span>Thời gian bàn giao: 7-14 ngày</span><i
                                                    class="fa fa-check text-primary-gradient pt-1"></i></div>
                                            <div class="d-flex justify-content-between mb-3"><span>Bảo hành website trọn đời</span><i class="fa fa-check text-primary-gradient pt-1"></i>
                                            </div>
                                            <div class="d-flex justify-content-between mb-2"><span>Tối ưu hỗ trợ SEO Google. Giao diện tương thích trên di động</span><i class="fa fa-check text-primary-gradient pt-1"></i>
                                            </div>
                                             <div class="d-flex justify-content-between mb-2"><span>Tặng gói bảo mật SSL trị giá 500.000 VNĐ</span><i class="fa fa-check text-primary-gradient pt-1"></i>
                                            </div>
                                             <div class="d-flex justify-content-between mb-2"><span>Tặng: 1 banner + logo cơ bản</span><i class="fa fa-check text-primary-gradient pt-1"></i>
                                            </div>
                                             <div class="d-flex justify-content-between mb-2"><span>Miễn phí tăng follow, view Titok, Fb ... cho đơn vị, doanh nghiệp</span><i class="fa fa-check text-primary-gradient pt-1"></i>
                                            </div>
                                            <a href="#contact"
                                                class="btn btn-secondary-gradient rounded-pill py-2 px-4 mt-4">
                                                Đăng ký</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="bg-light rounded border">
                                        <div class="border-bottom p-4 mb-4">
                                            <h4 class="text-primary-gradient mb-1">Enterprise</h4>
                                            <span>Dành cho tổ chức doanh nghiệp vừa và nhỏ. Các tính năng chất lượng và thuận tiện để quản lý </span>
                                        </div>
                                        <div class="p-4 pt-0">
                                            <h1 class="mb-3">
                                                <small class="align-top"
                                                    style="font-size: 22px; line-height: 45px;"></small>Dưới 8 triệu<small
                                                    class="align-bottom" style="font-size: 16px; line-height: 40px;">/
                                                    Year</small>
                                            </h1>
                                            <div class="d-flex justify-content-between mb-3"><span>Chọn mẫu giao diện có sẵn, tùy chỉnh Trang chủ và màu sắc giao diện theo logo</span><i
                                                    class="fa fa-check text-primary-gradient pt-1"></i></div>
                                            <div class="d-flex justify-content-between mb-3"><span>Thời gian bàn giao: 7-14 ngày</span><i
                                                    class="fa fa-check text-primary-gradient pt-1"></i></div>
                                            <div class="d-flex justify-content-between mb-3"><span>Bảo hành website trọn đời</span><i class="fa fa-check text-primary-gradient pt-1"></i>
                                            </div>
                                            <div class="d-flex justify-content-between mb-3"><span>Bảo hành website trọn đời</span><i class="fa fa-check text-primary-gradient pt-1"></i>
                                            </div>
                                            <div class="d-flex justify-content-between mb-2"><span>Tối ưu hỗ trợ SEO Google. Giao diện tương thích trên di động</span><i class="fa fa-check text-primary-gradient pt-1"></i>
                                            </div>
                                             <div class="d-flex justify-content-between mb-2"><span>Tặng gói bảo mật SSL trị giá 500.000 VNĐ</span><i class="fa fa-check text-primary-gradient pt-1"></i>
                                            </div>
                                             <div class="d-flex justify-content-between mb-2"><span>Tặng: 1 banner + logo cơ bản</span><i class="fa fa-check text-primary-gradient pt-1"></i>
                                            </div>
                                             <div class="d-flex justify-content-between mb-2"><span>Miễn phí tăng follow, view Titok, Fb ... cho đơn vị, doanh nghiệp</span><i class="fa fa-check text-primary-gradient pt-1"></i>
                                            </div>
                                            <a href="#contact"
                                                class="btn btn-secondary-gradient rounded-pill py-2 px-4 mt-4">
                                                Đăng ký</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="bg-light rounded">
                                        <div class="border-bottom p-4 mb-4">
                                            <h4 class="text-primary-gradient mb-1">PROFESSIONAL</h4>
                                            <span>Thiết kế một bộ giao diện độc quyền & Tính năng theo yêu cầu . Tích hợp hệ thống thanh toán, giao hàng toàn quốc</span>
                                
                                        </div>
                                        <div class="p-4 pt-0">
                                            <h1 class="mb-3">
                                                <small class="align-top"
                                                    style="font-size: 22px; line-height: 45px;"></small>Liên hệ<small
                                                    class="align-bottom" style="font-size: 16px; line-height: 40px;"></small>
                                            </h1>
                                           <div class="d-flex justify-content-between mb-3"><span>Chọn mẫu giao diện có sẵn, tùy chỉnh Trang chủ và màu sắc giao diện theo logo</span><i
                                                    class="fa fa-check text-primary-gradient pt-1"></i></div>
                                            <div class="d-flex justify-content-between mb-3"><span>Thời gian bàn giao: 7-14 ngày</span><i
                                                    class="fa fa-check text-primary-gradient pt-1"></i></div>
                                            <div class="d-flex justify-content-between mb-3"><span>Thống kê, báo cáo, gửi mail hằng ngày</span><i class="fa fa-check text-primary-gradient pt-1"></i>
                                            </div>
                                            <div class="d-flex justify-content-between mb-3"><span>Tối ưu chuẩn SEO. Giao diện tương thích Mobile, Tablet</span><i class="fa fa-check text-primary-gradient pt-1"></i>
                                            </div>
                                            <div class="d-flex justify-content-between mb-3"><span>Kết nối đơn vị, các dịch vụ thanh toán tích hợp dễ dàng</span><i class="fa fa-check text-primary-gradient pt-1"></i>
                                            </div>
                                            <div class="d-flex justify-content-between mb-2"><span>Tặng kèm 1 năm tên miền .COM trị giá 330.000 VNĐ (đã bao gồm VAT 10%)</span><i class="fa fa-check text-primary-gradient pt-1"></i>
                                            </div>
                                            <div class="d-flex justify-content-between mb-2"><span>Tặng Hosting 5GB/1 năm trị giá 2.772.000 VNĐ (đã bao gồm VAT 10%)</span><i class="fa fa-check text-primary-gradient pt-1"></i>
                                            </div>
                                             <div class="d-flex justify-content-between mb-2"><span>Tặng gói bảo mật SSL trị giá 500.000 VNĐ</span><i class="fa fa-check text-primary-gradient pt-1"></i>
                                            </div>
                                             <div class="d-flex justify-content-between mb-2"><span>Tặng: 2 banner + logo cơ bản</span><i class="fa fa-check text-primary-gradient pt-1"></i>
                                            </div>
                                             <div class="d-flex justify-content-between mb-2"><span>Miễn phí tăng follow, view Titok, Fb ... cho đơn vị, doanh nghiệp</span><i class="fa fa-check text-primary-gradient pt-1"></i>
                                            </div>
                                            <a href="#about" class="btn btn-primary-gradient rounded-pill py-2 px-4 mt-4">
                                                Đăng ký</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Pricing End -->


        <!-- Testimonial Start -->
        <!--<div class="container-xxl py-5" id="review">
            <div class="container py-5 px-lg-5">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="text-primary-gradient fw-medium">Testimonial</h5>
                    <h1 class="mb-5">What Say Our Clients!</h1>
                </div>
                <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                    <div class="testimonial-item rounded p-4">
                        <div class="d-flex align-items-center mb-4">
                            <img class="img-fluid bg-white rounded flex-shrink-0 p-1" src="img/testimonial-1.jpg"
                                style="width: 85px; height: 85px;">
                            <div class="ms-4">
                                <h5 class="mb-1">Client Name</h5>
                                <p class="mb-1">Profession</p>
                                <div>
                                    <small class="fa fa-star text-warning"></small>
                                    <small class="fa fa-star text-warning"></small>
                                    <small class="fa fa-star text-warning"></small>
                                    <small class="fa fa-star text-warning"></small>
                                    <small class="fa fa-star text-warning"></small>
                                </div>
                            </div>
                        </div>
                        <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et
                            eos. Clita erat ipsum et lorem et sit.</p>
                    </div>
                    <div class="testimonial-item rounded p-4">
                        <div class="d-flex align-items-center mb-4">
                            <img class="img-fluid bg-white rounded flex-shrink-0 p-1" src="img/testimonial-2.jpg"
                                style="width: 85px; height: 85px;">
                            <div class="ms-4">
                                <h5 class="mb-1">Client Name</h5>
                                <p class="mb-1">Profession</p>
                                <div>
                                    <small class="fa fa-star text-warning"></small>
                                    <small class="fa fa-star text-warning"></small>
                                    <small class="fa fa-star text-warning"></small>
                                    <small class="fa fa-star text-warning"></small>
                                    <small class="fa fa-star text-warning"></small>
                                </div>
                            </div>
                        </div>
                        <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et
                            eos. Clita erat ipsum et lorem et sit.</p>
                    </div>
                    <div class="testimonial-item rounded p-4">
                        <div class="d-flex align-items-center mb-4">
                            <img class="img-fluid bg-white rounded flex-shrink-0 p-1" src="img/testimonial-3.jpg"
                                style="width: 85px; height: 85px;">
                            <div class="ms-4">
                                <h5 class="mb-1">Client Name</h5>
                                <p class="mb-1">Profession</p>
                                <div>
                                    <small class="fa fa-star text-warning"></small>
                                    <small class="fa fa-star text-warning"></small>
                                    <small class="fa fa-star text-warning"></small>
                                    <small class="fa fa-star text-warning"></small>
                                    <small class="fa fa-star text-warning"></small>
                                </div>
                            </div>
                        </div>
                        <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et
                            eos. Clita erat ipsum et lorem et sit.</p>
                    </div>
                    <div class="testimonial-item rounded p-4">
                        <div class="d-flex align-items-center mb-4">
                            <img class="img-fluid bg-white rounded flex-shrink-0 p-1" src="img/testimonial-4.jpg"
                                style="width: 85px; height: 85px;">
                            <div class="ms-4">
                                <h5 class="mb-1">Client Name</h5>
                                <p class="mb-1">Profession</p>
                                <div>
                                    <small class="fa fa-star text-warning"></small>
                                    <small class="fa fa-star text-warning"></small>
                                    <small class="fa fa-star text-warning"></small>
                                    <small class="fa fa-star text-warning"></small>
                                    <small class="fa fa-star text-warning"></small>
                                </div>
                            </div>
                        </div>
                        <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et
                            eos. Clita erat ipsum et lorem et sit.</p>
                    </div>
                </div>
            </div>
        </div>-->
        <!-- Testimonial End -->


        <!-- Contact Start -->
        <div class="container-xxl py-5" id="contact">
            <div class="container py-5 px-lg-5">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="text-primary-gradient fw-medium">Liên hệ chúng tôi</h5>
                
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <div class="wow fadeInUp" data-wow-delay="0.3s">
                            <p class="text-center mb-4">Hãy để lại thông tin liên hệ của bạn ngay hôm nay, và chúng tôi sẽ liên hệ với bạn trong thời gian sớm nhất để tư vấn miễn phí và đưa ra giải pháp phù hợp nhất.</p>
                            <form>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="name" placeholder="Vui lòng nhập tên của bạn">
                                            <label for="name">Họ và tên</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="email" class="form-control" id="email"
                                                placeholder="vui lòng nhập địa chỉ email">
                                            <label for="email">Email</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="subject" placeholder="Lĩnh vực bạn muốn thiết kế">
                                            <label for="subject">Lĩnh vực</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="Hãy để lại lời nhắn nhé"
                                                id="message" style="height: 150px"></textarea>
                                            <label for="message">Lời nhắn</label>
                                        </div>
                                    </div>
                                    <div class="col-12 text-center">
                                        <button class="btn btn-primary-gradient rounded-pill py-3 px-5"
                                            type="submit">Gửi</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->

        <div class="hero_social">
            <a href="https://www.facebook.com/Truongxuan19/">
               <i class="fab fa-facebook-f"></i>
            </a>
            <a href="">
             <i class="fab fa-twitter"></i>
            </a>
            <a href="tel:0836785998">
              <i class="fab fa fa-phone-alt"></i>
            </a>
            <a href="https://www.instagram.com/_xuannt/">
              <i class="fab fa-instagram"></i>
            </a>
        </div>
        <!-- Footer Start -->
        <div class="container-fluid bg-primary text-light footer wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5 px-lg-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-3">
                        <h4 class="text-white mb-4">Địa chỉ</h4>
                        <p><i class="fa fa-map-marker-alt me-3"></i>số 30 Trần Quý Kiên, Cầu Giấy, Hà Nội</p>
                        <p><i class="fa fa-phone-alt me-3"></i>083.678.5998</p>
                        <p><i class="fa fa-envelope me-3"></i>xsystems-support@gmail.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-outline-light btn-social" href="tel:0836785998"><i class="fab fa fa-phone-alt"></i></a>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-3">
                        <h4 class="text-white mb-4">Truy cập nhanh</h4>
                        <a href="#home" class="btn btn-link">Trang chủ</a>
                        <a href="#about" class="btn btn-link">Về chúng tôi</a>
                        <a href="#feature" class="btn btn-link">Lợi ích</a>
                        <a href="#pricing" class="btn btn-link">Bảng giá</a>
                        <a href="#review" class="btn btn-link">Review</a>
                        <a href="#contact" class="btn btn-link">Liên hệ</a>
                    </div>
                     <div class="col-md-6 col-lg-3">
                        <h4 class="text-white mb-4">Dịch vụ social</h4>
                        <a class="btn btn-link">Tăng view titok</a>
                        <a class="btn btn-link">Tăng follow instagram</a>
                        <a class="btn btn-link">Tăng mắt live</a>
                        <a class="btn btn-link">Mua gmail giá rẻ</a>
                        <a class="btn btn-link">Bản hành trọn gói</a>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h4 class="text-white mb-4">Gửi mail</h4>
                        <p>Liên hệ với chúng tôi</p>
                        <div class="position-relative w-100 mt-3">
                            <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="text"
                                placeholder="Your Email" style="height: 48px;">
                            <button type="button" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i
                                    class="fa fa-paper-plane text-primary-gradient fs-4"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container px-lg-5">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy;Bản quyền thuộc về <a class="border-bottom" href="#">Xsystems</a>

                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Thiết kế bởi <a class="border-bottom">Nguyễn Trường Xuân</a>
                            </br>
                          </a>
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a >Sản phẩm</a>
                                <a >Chất lượng</a>
                                <a >Uy tín</a>
                                <a >Trung thực</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-lg-square back-to-top pt-2"><i class="bi bi-arrow-up text-white"></i></a>
@endSection