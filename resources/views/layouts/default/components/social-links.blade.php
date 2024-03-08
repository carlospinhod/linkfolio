@isset($content['social_links'])
    @foreach($content['social_links'] as $social)
        <a href="{{$social['url']}}" target="_blank" class="text-decoration-none text-light">
            <i class="bi {{$social['icon']}} h2"></i>
        </a>
    @endforeach
@endisset
