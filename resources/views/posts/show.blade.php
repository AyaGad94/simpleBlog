<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <h1>Welcome To Our Website </h1>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>    
<div>
@foreach ($posts as $post)
<ul>
{{$post->title}}
<li>{{$post->description}}</li>
<a href="/mypage">see more</a>
<img src="data:{{$post->image}}"/>
</ul>
@endforeach
</div>
</body>
</html>