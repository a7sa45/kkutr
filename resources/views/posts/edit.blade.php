@extends('layouts.app')

@section('content')
<style>
    html,


body {
  background-color: #f5f5f5;
}

.form-signin {
  max-width: 330px;
  padding: 15px;
}

.form-signin .form-floating:focus-within {
  z-index: 2;
}
</style>

<main class="form-signin w-100 m-auto">
    <form method="POST" action="/posts/{{ $post->id }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
      <img class="mb-4" src="images/{{ $post->image }}" alt="" width="72" height="57">
      <h1 class="h3 mb-3 fw-normal">تعديل المنشور</h1>
  
      <div class="form-floating mb-1">
        <textarea class="form-control" id="content" placeholder="" name="content" rows="4">{{ $post->content }}</textarea>
        <label for="floatingInput">محتوى المنشور</label>
      </div>
      <div class="form-floating mb-3">
        <input class="form-control" type="file" name="image" id="image">
      </div>
      <button class="w-100 btn btn-lg btn-primary" style="background-color: rgb(8, 82, 105)" type="submit">تعديل</button>
      
    </form>
  </main>
@endsection