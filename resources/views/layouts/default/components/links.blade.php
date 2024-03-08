@isset($content['links'])
    @foreach($content['links'] as $links)
        <div class="d-flex flex-column mb-1">
            <a href="{{$links['url']}}" target="_blank" class="btn btn-light text-decoration-none text-dark mb-2 btn-block shadow-sm">
                {{$links['title']}}
            </a>
        </div>
    @endforeach
@endisset
