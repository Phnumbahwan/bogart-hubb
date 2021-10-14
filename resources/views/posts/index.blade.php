@extends('layouts.app')

@section('content')
<div>
  @foreach($posts as $post)
    <div class="posts-index col-12 mx-auto mb-5" style="width: 650px;">
      <a href="/p/{{ $post->id }}"><img class="img-thumbnail w-100 h-100" src="/storage/{{ $post->image }}" style="cursor: pointer;"></a>
      <p class="mt-2 row">
        <span class="font-weight-bolder mr-1 row">
          <a class="text-dark" href="/profile/{{ $post->user->id }}">
          {{ $post->user->username }}
          </a>
          <!-- @can('view', $post->user->profile)
              <follow-button userid="{{ $post->user->id }}" follows="{{ $follows ?? '' }}" />
          @endcan -->
        </span>
        {{ $post->caption }}
      </p>
    </div>
    <hr class="container">
  @endforeach
</div>
@endsection
