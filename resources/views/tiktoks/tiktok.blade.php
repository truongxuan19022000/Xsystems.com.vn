@extends('admin.base')
@section('contents')
@section('title', 'titok')
            @if (session('message'))
            <div class="alert alert-primary d-flex align-items-center mt-3" role="alert">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                  <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                </svg>
                <div>
                    {{ session('message') }}
                </div>
              </div>
            @endif
            <div class="overview">
                <div class="container-xxl" id="about">
                    <div class="container px-lg-5">
                        <div class="row g-5 align-items-center">
                            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                                <h5 class="text-primary-gradient fw-medium">Xsystems</h5>
                                <h1 class="mb-4">Tăng view titok</h1>
                                <p class="mb-4">Xsystems cung cấp nền tảng tăng follow và view titok toàn diện. Giúp khách hàng của xsystems có thể xây dựng thương hiệu của mình trên các nền
                                tảng mạng xã hội hiện nay.</p>
                                <div class="row g-4 mb-4">
                                    <form action="{{route('admin.store.tiktok')}}" method="POST">
                                        @csrf
                                        <div class="mb-3 mt-3">
                                            <label for="link" class="form-label">Nhập link titok cần tăng:</label>
                                            <input type="link" class="form-control" id="link" placeholder="" name="url">
                                        </div>
                                        @error('url')
                                        <span class="error">{{$message}}</span>
                                        @enderror
                                        <div class="mb-3 mt-3">
                                            <label for="link" class="form-label">Chọn máy chủ:</label>
                                        </div>
                                        <div class="form-check form-switch mb-2">
                                            <input class="form-check-input" type="checkbox" name="network" id="view1" value="1">
                                            <label class="form-check-label" for="view1">View giá rẻ
                                            <span class="badge bg-primary">0.1 ₫</span>
                                            </label>
                                        </div>
                                        <div class="form-check form-switch mb-2">
                                            <input class="form-check-input" type="checkbox" name="network" id="view2" value="2">
                                            <label class="form-check-label" for="view2">View nhanh
                                            <span class="badge bg-primary">0.2 ₫</span>
                                            </label>
                                        </div>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" name="network" id="viewFree" checked disabled value="3">
                                            <label class="form-check-label" for="viewFree">View free (thành viên)
                                            <span class="badge bg-primary">0 ₫</span>
                                            </label>
                                        </div>
                                        @error('network')
                                        <span class="error">{{$message}}</span>
                                        @enderror
                                         <div class="mb-3 mt-3">
                                            <label for="number" class="form-label">Nhập số view cần tăng:</label>
                                            <input type="number" class="form-control" id="number" placeholder="" name="view">
                                        </div>
                                        @error('view')
                                        <span class="error">{{$message}}</span>
                                        @enderror
                                         <div class="mb-3 mt-3">
                                            <label for="number" class="form-label">Tổng tiền:</label>
                                            <input type="hidden" name="price" id="price">
                                            <input type="text" class="form-control" id="totalPrice" placeholder="" name="price_show" disabled>
                                        </div>
                                        @error('price')
                                        <span class="error">{{$message}}</span>
                                        @enderror
                                        <div class="mb-3 mt-3">
                                         <label for="number" class="form-label">Nhập ghi chú nếu cần:</label>
                                           <textarea class="form-control" placeholder="Nhập ghi chú nếu cần" name="description"> </textarea>
                                        </div>
                                        @error('description')
                                        <span class="error">{{$message}}</span>
                                        @enderror
                                <button type="submit" class="btn btn-primary-gradient py-sm-3 px-4 px-sm-5 rounded-pill mt-3">Bắt đầu chạy</button>

                                    </form> 

                                </div>
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
            
@endsection