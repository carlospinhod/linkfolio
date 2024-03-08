@extends('profile.index')
@section('content')
    <div class="col-12 offset-md-3 col-md-6">
        <div class="d-flex flex-column align-items-center mb-4">
            <img class="rounded-circle w-25 mb-2" alt="" src="{{asset('storage/'.$content['profile_image'])}}">
            <h1 class="mb-2">{{$content['username']}}</h1>
        </div>
        <div class="d-flex flex-column align-items-center mb-2">
            <p>{{$content['bio']}}</p>
        </div>
        <div class="d-flex flex-column justify-content-center mb-4">
            @include('layouts.default.components.links')
        </div>

        <div class="d-flex justify-content-center align-items-center mb-4 gap-3 flex-wrap">
            @include('layouts.default.components.social-links')
        </div>

    </div>
@endsection
