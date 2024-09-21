<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
     <meta name="google-site-verification" content="google-site-verification=xPuq3ytKEfgnMhR06-y8xPCdJbrSYvBjcs8F6VtcXm4" />
    <title>@yield('title', 'Xsystems - Chuyên thiết kế website, logo, banner')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
<!-- Meta Description -->
<meta name="description"
    content="@yield('description')">

<!-- Meta Keywords -->
<meta name="keywords" content="@yield('keywords')">

<!-- Open Graph Meta Tags for Social Media -->
<meta property="og:title" content="XSystems - Thiết kế website giá rẻ">
<meta property="og:description" content="XSystems cung cấp các giải pháp công nghệ tiên tiến cho doanh nghiệp.">
<meta property="og:image" content="https://xsystems.com.vn/img/X-systems.png">
<meta property="og:url" content="https://xsystems.com.vn/">
<meta property="og:type" content="website">

<!-- Twitter Card Meta Tags -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="XSystems - Thiết kế website giá rẻ">
<meta name="twitter:description" content="XSystems cung cấp các giải pháp công nghệ tiên tiến cho doanh nghiệp.">
<meta name="twitter:image" content="https://xsystems.com.vn/img/X-systems.png">
<meta name="twitter:url" content="https://xsystems.com.vn/">

<!-- Canonical URL -->
<link rel="canonical" href="https://xsystems.com.vn">

<!-- Favicon -->
<link rel="icon" href="https://xsystems.com.vn/img/X-systems.png" type="image/png">

<!-- Structured Data (JSON-LD) -->
<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "XSystems",
        "url": "https://xsystems.com.vn/",
        "logo": "https://xsystems.com.vn/img/X-systems.png",
        "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "+84-678-5998",
            "contactType": "Thiết kế website, tăng follow titok, fb, instagram"
        }
    }
</script>
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
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="51">
<div class="container-xxl bg-white p-0">
    @yield('contents')
</div>
  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('lib/wow/wow.min.js')}}?v={{ time() }}"></script>
    <script src="{{asset('lib/easing/easing.min.js')}}?v={{ time() }}"></script>
    <script src="{{asset('lib/waypoints/waypoints.min.js')}}?v={{ time() }}"></script>
    <script src="{{asset('lib/counterup/counterup.min.js')}}?v={{ time() }}"></script>
    <script src="{{asset('lib/owlcarousel/owl.carousel.min.js')}}?v={{ time() }}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('js/main.js')}}?v={{ time() }}"></script>
</body>

</html>