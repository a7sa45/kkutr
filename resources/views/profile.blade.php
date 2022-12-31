@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                
                <div class="bg-dark text-secondary text-center" style="border-radius: 5px">
                    <div class="py-5">
                        <img class="rounded-circle mt-5" width="150px" src="https://itcsvc.kku.edu.sa/KKU_MyKkuWS/UserImage?nickname={{ $username->username }}">
                      <h1 class="display-5 fw-bold text-white">{{ $username->name }}</h1>
                      <div class="col-lg-6 mx-auto">
                        <p class="fs-5 mb-4">{{ $username->username }}@</p>
                      </div>
                    </div>
                </div>
            </div>
            <br>
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
                                    <a style="color: #212529; text-decoration: none;" href="/@ {{ $post->user->username }}">
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
                <div class="d-flex flex-column align-items-center text-center  pb-5">
                    <h3 class="font-weight-bold pt-2 pb-0">لا توجد منشورات بعد</h3>
                    <span> </span>
                </div>
                @endforelse
            </div>
        </div>
    </div>
</div>
@endsection