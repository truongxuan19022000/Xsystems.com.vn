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
            <div class="filter filter__pc">
                <form action="{{ route('admin.tiktok.index') }}" method="GET">
                    <div class="row">
                        <div class="form-group col-3">
                            <label for="">Url</label>
                            <input type="text"
                                   class="form-control" name="search[url]" id="url" aria-describedby="helpId"
                                   value="{{ isset($search['url']) ? $search['url'] : '' }}"
                                   placeholder="">
                        </div>
                        <div class="form-group col-2">
                            <label for="">View</label>
                            <input type="text"
                                   class="form-control" name="search[view]" id="view" aria-describedby="helpId"
                                   value="{{ isset($search['view'])? $search['view'] : '' }}"
                                   placeholder="">
                        </div>
                        <div class="form-group col-2">
                            <label for="">Status</label>
                            <input type="text"
                                   class="form-control" name="search[status]" id="status" aria-describedby="helpId"
                                   value="{{ isset($search['status'])? $search['status'] : '' }}"
                                   placeholder="">
                        </div>
                        <div class="form-group col-2" style="align-content: end; margin-left: 27px">
                            <button id="searchButton" type="submit" class="form-control btn btn-edit-customer"
                                    style="text-align: center">
                                検索する
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="table-content">
                @if($tiktoks && count($tiktoks) > 0)
                    <table class="table table__pc-customer borderless">
                        <thead class="thead-inverse">
                        <tr>
                            <th>Stt</th>
                            <th>User Name</th>
                            <th>Url</th>
                            <th>Network</th>
                            <th>View</th>
                            <th>Price</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th>Created At</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($tiktoks as $value)
                            <tr class="customer-tab">
                                {{-- @dd($value) --}}
                                <td>{{$value->id}}</td>
                                <td>{{$value->user->name}}</td>
                                <td>{{$value->url}}</td>
                                <td data-label="Name Kanji">{{ $value->network }}</td>
                                <td data-label="Address">{{ $value->view }}</td>
                                <td data-label="Name Furigana">{{ $value->price }}</td>
                                <td data-label="Phone">{{ $value->description }}</td>
                                <td data-label="Category">{{ $value->status }}</td>
                                <td data-label="Category">{{ $value->created_at }}</td>
                                <td><a href=""
                                       class="btn btn-edit-value" role="button"
                                       aria-pressed="true">Edit</a></td> 
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    
                @endif
            </div>
            <div class="d-flex justify-content-center">
                {!! $tiktoks->links('pagination::bootstrap-5') !!}
            </div>
@endsection