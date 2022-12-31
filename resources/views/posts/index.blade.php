@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <section>
                <div class="">
                    @guest
                    <div class="bg-dark text-secondary px-4 py-5 text-center" style="border-radius: 5px">
                        <div class="py-5">
                          <h1 class="display-5 fw-bold text-white">انت غير معروف لدينا</h1>
                          <div class="col-lg-6 mx-auto">
                            <p class="fs-5 mb-4">سجل الدخول لتتمكن من إضافة المحتوى</p>
                            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                              <button type="button" class="btn btn-outline-info btn-lg px-4 me-sm-3 fw-bold" onclick="window.location.href='{{ route('login') }}';">دخول</button>
                              <button type="button" class="btn btn-outline-light btn-lg px-4" onclick="window.location.href='{{ route('register') }}';">تسجيل</button>
                            </div>
                          </div>
                        </div>
                    </div>
                    @else
                    <div class="card" style="border-color: white">
                        <div class="card-body" style="width: 100%">
                            <div class="d-flex flex-start w-100">
                                <img class="rounded-circle shadow-1-strong me-3" style="margin: 7px" src="https://itcsvc.kku.edu.sa/KKU_MyKkuWS/UserImage?nickname={{ Auth::user()->username }}" alt="avatar" width="50" height="50">
                                <div class="w-100">
                                <h5>إضافة منشور</h5>
                                <form action="/posts" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-outline">
                                        <textarea class="form-control" id="content" placeholder="إضف منشور..." name="content" rows="4"></textarea>
                                    </div>
                                    <br>
                                    <div class="form-outline">
                                        <input class="form-control" type="file" name="image" id="image">
                                    </div>
                                    <div class="d-flex justify-content-between mt-3">
                                    <button type="submit" class="btn btn-outline-info">
                                        إضافة
                                    </button>
                                    </div>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endguest
                </div>    
            </section>
            </div>
            <hr>
            <section>


                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    @forelse ($posts as $post)
                    
                        <div class="col">
                        <div class="card shadow-sm">
                            @if($post->image)
                                <img style="height: 300px; object-fit: cover; object-position: bottom;" src="images/{{ $post->image }}"  class="img-fluid" height="50">
                            @endif
                            <div class="card-body">
                                <div class="media d-flex" style="display: inline">
                                    
                                    <h2><img style="border-radius: 50%" src="https://itcsvc.kku.edu.sa/KKU_MyKkuWS/UserImage?nickname={{ $post->user->username }}" class="mr-3" height="35"></h2>
                                    <div class="media-body" style="margin-right: 10px; weidth:10px">
                                        <a style="color: #212529; text-decoration: none;" href="/<?php echo '@'.$post->user->username ?>">
                                        <h6 class="mt-1 mb-0">{{ $post->user->name }}</h6></a>
                                        <span class="text-muted mt-0" style="font-size: 10px">{{ $post->user->username }}@</span>
                                    </div>
                                </div>
                            <p class="card-text text-truncate">{{ $post->content }}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary" onclick="window.location.href='/posts/{{ $post->id }}';">المزيد</button>
                                @auth
                                @if(Auth::user()->email == $post->user->email)
                                    <button type="button" class="btn btn-sm btn-outline-secondary" onclick="window.location.href='/posts/{{ $post->id }}/edit';">تعديل</button>
                                @endif
                                @endauth
                                </div>
                                <small class="text-muted">{{ $post->created_at->format('D, Y h:i A') }}</small>
                            </div>
                            </div>
                        </div>
                        </div>
                    @empty
                        
                    @endforelse
                </div>
            </section>

        </div>
    </div>
</div>
@endsection
