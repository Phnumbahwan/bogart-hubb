@extends('layouts.app')

@section('content')
<div class="container p-0 m-0 mx-auto" style="width: 650px;">
    @if ( $users->isEmpty() )
        <div class="text-center">
            <h5><strong>USER NOT FOUND</strong></h5>
        </div>
    @else
        @foreach($users as $user)
            <a href="/profile/{{ $user->id }}" style="text-decoration: none;">
                <search-result userimage="{{ $user->profile->default() }}" username="{{ $user->name }}" userurl="{{ $user->profile->url }}" userdescription="{{ $user->profile->description }}"></search-result>
            </a>
        @endforeach
    @endif
</div>
@endsection
