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
        <div class="alert alert-success alert-dismissible fade show fixed-top mr-3 mt-3 float-right"
             role="alert" style="width: auto; max-width: 300px;">
            {{ session('message') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
      <div class="center">
         <div class="container">
            <div class="text">
               Xsystems Register Account
            </div>
            <form action="{{route('register')}}" method="Post">
               @csrf
               <div class="data @error('email') error @enderror">
                  <label>Email</label>
                  <input type="text" name="email"
                    placeholder="@error('email') {{$message}} @enderror"
                  required>
               </div>
               <div class="data @error('name') error @enderror">
                  <label>Tên nick name</label>
                  <input type="text" name="name"
                    placeholder="@error('name') {{$message}} @enderror"
                  required>
               </div>
               <div class="data @error('password') error @enderror">
                  <label>Mật khẩu</label>
                  <input type="password" name="password"
                  placeholder="@error('password') {{$message}} @enderror"
                  required>
               </div>
               <div class="btn">
                  <div class="inner"></div>
                  <button type="submit">Đăng Ký</button>
               </div>
               <div class="signup-link">
                  Quay về đăng nhập? <a href="{{route('login')}}">Login</a>
               </div>
            </form>
         </div>
      </div>
   </body>
</html>