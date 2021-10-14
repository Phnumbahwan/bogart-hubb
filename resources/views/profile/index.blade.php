@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4 col-sm-12 text-center mx-auto" style="width: 400px;min-height: 200px;">
            <img class="p-5 rounded-circle w-100 h-100" src="{{ $user->profile->default() }}" alt="Profile photo">
        </div>
        <div class="col-md-8 col-sm-12 my-auto">
            <div class="profile-name mb-2 d-flex">
                <div class="d-flex">
                    <h4>{{ $user->name }}</h4>
                    @can('view', $user->profile)
                        <follow-button userid="{{ $user->id }}" follows="{{ $follows }}" />
                    @endcan
                </div>
                @can('update', $user->profile)
                    <a href="{{ url('/p/create/') }}" class="ml-auto">Add New Post</a>
                @endcan
            </div>
            @can('update', $user->profile)
                <a class="edit-profile mb-2" href="/profile/{{ $user->id }}/edit">
                    Edit Profile
                </a>
            @endcan
            <div class="profile-activity d-flex mb-2">
                <div class="profile-posts mr-3"><strong>{{ $postCount }} posts</strong></div>
                <div class="profile-followers mr-3"><strong>{{ $followerCount }} followers</strong></div>
                <div class="profile-following mr-3"><strong>{{ $followingCount}} following</strong></div>
            </div>
            <div class="profile-title font-weight-bold">
                {{ $user->profile->title }}
            </div>
            <div class="profile-description">
                <p class="m-0">
                    {{ $user->profile->description }}
                </p>
            </div>
            <div  class="profile-link"><a href="#">{{ $user->profile->url }}</a></div>
        </div>
    </div>
    <hr class="container">
    <div class="row pt-5 mx-auto">
        @if($user->posts->count()<=0)
            <div class="mx-auto">
                <h3>No post yet...</h3>
            </div>
        @endif
        @foreach($user->posts as $post)
            <div class="col-md-4 col-sm-12 pb-3 mx-auto" style="width: 400px;height: 360px;">
                <a href="/p/{{ $post->id }}">
                    <img class="w-100 h-100 rounded" src="/storage/{{ $post->image }}">
                </a>
            </div>
        @endforeach
    </div>
</div>
@endsection
