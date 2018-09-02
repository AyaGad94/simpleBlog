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
 Image:{{$post->image}}
 </fieldset>




</div>

<div>
<fieldset>
  <legend>comments:</legend>
 Name:{{$comment->user->name}}
 <br>
Comment:{{$comment->comment}}
 <br>
 </fieldset>

</div>



<div>
<form method="post" action="/mypage">
{{csrf_field()}}
Title :- <input type="text" name="title">
<br><br>
Comment :- 
<textarea name="comment "></textarea>
<br>
<br>
Comment Creator
<select class="form-control" name="user_id">
@foreach ($users as $user)
    <option value="{{$user->id}}">{{$user->name}}</option>
@endforeach
</select>
<br>
<input type="submit" value="Submit" class="btn btn-primary">
</form>

</div>

</body>
</html>