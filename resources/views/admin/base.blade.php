<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="icon" href="https://xsystems.com.vn/img/X-systems.png" type="image/png">
    <link rel="stylesheet" href="{{asset('css/admin/base.css')}}?v={{ time() }}">
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
<!-- Google Web Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Jost:wght@500;600;700&display=swap"
    rel="stylesheet">
<!-- Icon Font Stylesheet -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

<!-- Libraries Stylesheet -->
<link href="{{asset('lib/animate/animate.min.css')}}?v={{ time() }}" rel="stylesheet">
<link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}?v={{ time() }}" rel="stylesheet">

<!-- Customized Bootstrap Stylesheet -->
<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

<!-- Template Stylesheet -->
<link href="{{asset('css/style.css')}}" rel="stylesheet">
    <title>@yield('title')</title>
</head>
<body>
    <nav class="nav-bar">
        <div class="logo-name">
            <div class="logo-image">
               <img src="https://xsystems.com.vn/img/X-systems.png" alt="">
            </div>

            <span class="logo_name">Xsystems</span>
        </div>

        <div class="menu-items">
            <ul class="nav-links">
                @if(Auth::user()->isAdmin())
                <li><a href="{{route('admin.tiktok.index')}}">
                    <i class="uil uil-estate"></i>
                    <span class="link-name">Titoks Management</span>
                </a></li>
                <li><a href="{{route('admin.dashboard')}}">
                    <i class="uil uil-estate"></i>
                    <span class="link-name">Dahsboard</span>
                </a></li>
                @endif
                <li><a href="{{route('admin.tiktok')}}">
                    <i class="uil uil-thumbs-up"></i>
                    <span class="link-name">Dịch vụ Titok</span>
                </a></li>
            </ul>
            
            <ul class="logout-mode">
                <li><a href="{{route('admin.logout')}}">
                    <i class="uil uil-signout"></i>
                    <span class="link-name">Logout</span>
                </a></li>

                <li class="mode">
                    <a href="#">
                        <i class="uil uil-moon"></i>
                    <span class="link-name">Dark Mode</span>
                </a>

                <div class="mode-toggle">
                  <span class="switch"></span>
                </div>
            </li>
            </ul>
        </div>
    </nav>

    <section class="dashboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>

            <div class="search-box">
                <i class="uil uil-search"></i>
                <input type="text" placeholder="Search here...">
            </div>
            
            <!--<img src="images/profile.jpg" alt="">-->
        </div>

        <div class="dash-content">
            @yield('contents')
        </div>
    </section>

    <script src="{{asset('js/admin/base.js')}}?v={{ time() }}"></script>
</body>
</html>