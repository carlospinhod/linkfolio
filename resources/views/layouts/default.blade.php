@extends('profile.index')

@section('seo_title', $profileSeo['title'])
@section('seo_description', $profileSeo['description'])
@section('seo_image', $profileSeo['image'])
@section('keywords', $profileSeo['keywords'])
@section('favicon', $profileSeo['favicon'])
@section('url', $profileSeo['url'])

@section('content')
    <div class="col-12 offset-md-3 col-md-6">
        <div class="d-flex flex-column align-items-center">
            <img class="rounded-circle w-25 mb-2" alt="" src="{{asset('storage/'.$content['profile_image'])}}">
            <h1 class="mb-2">{{$content['username']}}</h1>
        </div>
        <div class="d-flex flex-column align-items-center">
            <p class="mb-2">
                <strong>
                    {{$content['bio']}}
                </strong>
            </p>
        </div>
        <div class="d-flex flex-column justify-content-center mb-4">
            @include('layouts.default.components.links')
        </div>

        <div class="d-flex justify-content-center align-items-center mb-4 gap-3 flex-wrap">
            @include('layouts.default.components.social-links')
        </div>
    </div>
@endsection
