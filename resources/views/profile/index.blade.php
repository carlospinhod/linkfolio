<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> - </title>
    @livewireStyles

</head>
<body>

    <img src="{{asset('storage/'.$content['profile_image'])}}">
    <p>{{$content['bio']}}</p>
    <pre>{{--$content['links']--}}</pre>
    <pre>{{--$content['social_links']--}}</pre>
@livewireScripts
</body>
</html>
