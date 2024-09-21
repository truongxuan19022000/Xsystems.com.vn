@extends('base')
@section('title','Xsystems - Tăng view titok')
@section('description','XSystems cung cấp dịch vụ tăng follow, view titok')
@section('keywords','XSystems, titok, tăng view, tăng follow, tăng follow titok, tăng view titok')
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
                <a href="https://xsystems.com.vn" class="navbar-brand p-0">
                    <h1 class="m-0">Xsystems</h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav mx-auto py-0">
                        <a href="#home" class="nav-item nav-link active">Trang chủ</a>
                        <a href="#about" class="nav-item nav-link">Giới thiệu</a>
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
                        </div>

                        <div class="col-lg-4 d-flex justify-content-center justify-content-lg-end wow fadeInUp"
                            data-wow-delay="0.3s" style="max-width=400px">
                         <img class="xsystem-develop-img"
                            src="{{asset('img/TikTok.gif')}}"></img>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->
        <div class="container-xxl py-5" id="about">
            <div class="container py-5 px-lg-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <h5 class="text-primary-gradient fw-medium">Xsystems</h5>
                        <h1 class="mb-4">Tăng view titok</h1>
                        <p class="mb-4">Xsystems cung cấp nền tảng tăng follow và view titok toàn diện. Giúp khách hàng của xsystems có thể xây dựng thương hiệu của mình trên các nền
                        tảng mạng xã hội hiện nay.</p>
                        <div class="row g-4 mb-4">
                            <form action="">
                                <div class="mb-3 mt-3">
                                    <label for="link" class="form-label">Nhập link titok cần tăng:</label>
                                    <input type="link" class="form-control" id="link" placeholder="" name="link">
                                </div>
                                <div class="mb-3 mt-3">
                                    <label for="link" class="form-label">Chọn máy chủ:</label>
                                </div>
                                <div class="form-check form-switch mb-2">
                                    <input class="form-check-input" type="checkbox" id="view1">
                                    <label class="form-check-label" for="view1">View giá rẻ
                                    <span class="badge bg-primary">0.1 ₫</span>
                                    </label>
                                </div>
                                <div class="form-check form-switch mb-2">
                                    <input class="form-check-input" type="checkbox" id="view2">
                                    <label class="form-check-label" for="view2">View nhanh
                                    <span class="badge bg-primary">0.2 ₫</span>
                                    </label>
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="viewFree" checked disabled>
                                    <label class="form-check-label" for="viewFree">View free (thành viên)
                                    <span class="badge bg-primary">0 ₫</span>
                                    </label>
                                </div>
                                 <div class="mb-3 mt-3">
                                    <label for="number" class="form-label">Nhập số view cần tăng:</label>
                                    <input type="number" class="form-control" id="number" placeholder="" name="number">
                                </div>
                                <div class="mb-3 mt-3">
                                 <label for="number" class="form-label">Nhập ghi chú nếu cần:</label>
                                   <textarea class="form-control" placeholder="Nhập ghi chú nếu cần" name="description"> </textarea>
                                </div>
                            </form> 
                        </div>
                        <a href="{{route('login')}}" class="btn btn-primary-gradient py-sm-3 px-4 px-sm-5 rounded-pill mt-3">Bắt đầu chạy</a>
                    </div>
                    <div class="col-lg-6 d-flex align-items-start">
                     <img class="xsystem-develop-img"
                                src="{{asset('img/titok.gif')}}"></img>
                       
                        <!-- <iframe width="500" height="400"
                            src="https://lottie.host/embed/1288ef47-6f36-46c3-bc7a-1da36f7b3292/vI7pKLRfxp.json"></iframe> -->
                        <!-- <img class="img-fluid wow fadeInUp" data-wow-delay="0.5s" src="img/Animation.gif"> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->
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