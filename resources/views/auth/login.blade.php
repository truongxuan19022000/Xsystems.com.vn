<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Xsystems | Login</title>
      <link rel="icon" href="https://xsystems.com.vn/img/X-systems.png" type="image/png">
      <link rel="stylesheet" href="{{asset('css/auth.css')}}?v={{ time() }}">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
   </head>
   <body>
      @if (session('message'))
      <div class="wrapper-success">
         <div class="card">
           <div class="icon"><i class="fas fa-check-circle"></i></div>
           <div class="subject">
             <h3>Success</h3>
             <p>{{ session('message') }}</p>
           </div>
           <div class="icon-times"><i class="fas fa-times"></i></div>
         </div>
       </div>
    @endif
      <div class="center">
         <div class="container">
            <div class="text">
               Xsystems Login
            </div>
            <form action="{{route('login')}}" method="Post">
               @csrf
               <div class="data">
                  <label>Email</label>
                  <input type="text" name="email" required>
               </div>
               @error('email')
               <span class="error">{{$message}}</span>
               @enderror
               <div class="data">
                  <label>Mật khẩu</label>
                  <input type="password" name="password" required>
                  @error('password')
               <span class="error">{{$message}}</span>
               @enderror
               </div>
               <div class="forgot-pass">
                  <a href="#">Quên mật khẩu?</a>
               </div>
               <div class="btn">
                  <div class="inner"></div>
                  <button type="submit">Đăng nhập</button>
               </div>
               <div class="signup-link">
                  Nếu chưa có tài khoản? <a href="{{route('show.register')}}">Đăng ký</a>
               </div>
            </form>
         </div>
      </div>
   </body>
   <script type="text/javascript">
   document.addEventListener('DOMContentLoaded', function() {
        // Ẩn thông báo sau 4 giây
        setTimeout(function() {
            var messageElement = document.getElementById('wrapper-success');
            if (messageElement) {
                messageElement.style.display = 'none';
            }
        }, 4000);
    });

    function hideMessage() {
        var messageElement = document.getElementById('wrapper-success');
        if (messageElement) {
            messageElement.style.display = 'none';
        }
    }
   </script>
</html>