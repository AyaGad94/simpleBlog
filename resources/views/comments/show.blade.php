<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<div>
<fieldset>
  <legend>Post Info:</legend>
 Title:{{$post->title}}
 <br>
 Description:{{$post->description}}
 <br>
 Date:{{$post->created_at}}
 <br>
 Image:<br> <img src="{{$post->image}}"/>
 </fieldset>
</div>
<div>
<fieldset>
  <legend>comments:</legend>
@foreach($post->comments as $comment)
Comment:{{$comment->comment}}
 <br>
     Comment Creator:{{$comment->user->name}}
     <br>
    @endforeach
 </fieldset>
 <form method="post" action="/mypage">
{{csrf_field()}}
Leave your comment:
<br><br>
Comment :- 
<textarea name="comment"></textarea>
<br>
<br>
Comment Creator :- <input type="text" name="name">
<br>
<input type="submit" value="Submit" class="btn btn-primary">
</form>
</div>
</body>
</html>