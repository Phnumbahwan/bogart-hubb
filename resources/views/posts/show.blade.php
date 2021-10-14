@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
      <div class="col-md-8" style="max-height: 700px;">
        <img class="h-100 w-100" src="/storage/{{ $post->image }}">
      </div>
      <div class="col-md-4">
        <div class="d-flex align-items-center" style="width: 50px;height:50px;">
          <img class="w-100 h-100 rounded-circle" src="{{ $post->user->profile->default() }}" alt="Profile photo">
          <h6 class="text- mb-0 pl-2 font-weight-bolder"><a class="text-dark" href="/profile/{{ $post->user->id }}">{{ $post->user->username }}</a></h6>
          <ul class="p-2 my-2 mx-3">
            <li>
              <a href="#">Follow</a>
            </li>
          </ul>
        </div>
        <hr>
        <p class="mt-2"><span class="font-weight-bolder mr-1"><a class="text-dark" href="/profile/{{ $post->user->id }}">{{ $post->user->username }}</a></span>{{ $post->caption }}</p>
      </div>
    </div>
</div>
@endsection
