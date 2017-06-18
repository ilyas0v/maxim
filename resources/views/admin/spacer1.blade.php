@extends('admin')
@section('title','Edit first spacer')
@section('content')
<div class="container">
  <h1>First spacer:</h1>
	<div class="row">
    <form action="/admin/spacer1/update/{{$spacer1->id}}" method="POST">
      {{ csrf_field() }}
      <label>Text:</label>
      <textarea style="width:80%;" class="form-control" name="quote">{{$spacer1->quote}}</textarea><br>
      <label>Author name:</label>
      <input style="width:80%;" class="form-control" type="text" name="author" value="{{$spacer1->author}}"><br>
      <label>Background color:</label>
      <input style="width:70px;height:40px;"class="fon-rengi" type="color" name="background"  value="{{$spacer1->background}}">
      <a class="btn reset-color" >Reset original</a><hr>
      <input type="submit" value="update" class="btn btn-success">
    </form>
	</div>
</div>
@endsection
