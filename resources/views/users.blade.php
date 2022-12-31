@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="container marketing">

                <!-- Three columns of text below the carousel -->
                <div class="row align-items-center text-center">
                    @forelse ($users as $user)
                    <div class="col-lg-4">
                        <img class="rounded-circle mt-5" width="140px" src="https://itcsvc.kku.edu.sa/KKU_MyKkuWS/UserImage?nickname={{ $user->username }}">
                        <h2 class="fw-normal">{{ $user->name }}</h2>
                        <p>{{ $user->username }}@</p>
                        <p><a class="btn btn-secondary" href="/<?php echo '@'.$user->username ?>">الملف الشخصي »</a></p>
                    </div><!-- /.col-lg-4 -->
                    @empty
                        
                    @endforelse
                </div><!-- /.row -->
            
              </div>
        </div>
    </div>
</div>
@endsection