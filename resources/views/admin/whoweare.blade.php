@extends('admin')
@section('title','Team | Admin Panel')
@section('content')

<h1>Our team:</h1>
<button class="btn add-duymesi" style="background:lightblue;">Add new team member</button>

<div style="display:none;width:50%;margin-top:20px;margin-bottom:20px;background:rgba(0,0,0,0.5);padding:30px;" class="add-new-slide">
    <form method="POST" action="/admin/who_we_are/staff/add">
      {{ csrf_field() }}
      <label>Name and surname:</label>
      <input type="text"  class="form-control"  name="name_surname">
      <label type="text" style="margin-top:15px;">Job:</label>
      <input  class="form-control"  name="job">
      <label  style="margin-top:15px;" >Image:</label>
      <input type="file" name="image">
      <br>
      <input class="btn btn-primary" type="submit" value="Add">
      <a id="add-new-slide-cancel" class="btn btn-danger">Cancel</a>
    </form>
</div>

<table class="table">
  <thead>
    <th>ID</th>
    <th>NAME SURNAME</th>
    <th>JOB</th>
    <th>IMAGE</th>
  </thead>
  <tbody>
    @foreach($staff as $s)
      <tr>
        <td>{{$s->id}}</td>
        <form action="/admin/who_we_are/staff/update/{{$s->id}}" method="POST">
          {{csrf_field()}}
          <td><input class="form-control" name="name_surname" value="{{$s->name_surname}}"></td>
          <td><input class="form-control" name="job" value="{{$s->job}}"></td>
          <td><label for="image-for-staff-{{$s->id}}"><img style="width:50px;border-radius:50%;" src="/img/team/{{$s->image}}"></label>
              <input type="file" style="display:none;" id="image-for-staff-{{$s->id}}" name="image">
          </td>


        <td>
          <input style="" type="submit" class="btn btn-primary" value="Update">
          <a href="/admin/who_we_are/staff/delete/{{$s->id}}" class="btn btn-danger">Delete</a>
        </td>
        </form>
      </tr>
    @endforeach
  </tbody>
</table>


  <h1>Edit Who We Are side:</h1>
	<div class="row" style="background:rgba(0,0,0,0.1);padding:20px;">
    <form action="/admin/who_we_are/update/{{$whoweare->id}}" method="POST">
      {{ csrf_field() }}
      <label>Title:</label>
      <input  class="form-control" name="title" value="{{$whoweare->title}}"><br>
      <label>Subtitle:</label>
      <input  class="form-control" type="text" name="subtitle" value="{{$whoweare->subtitle}}"><br>
      <label>Text:</label>
      <textarea  class="form-control"  name="text" >{{$whoweare->text}}</textarea>

      <input style="margin-top:10px;" type="submit" value="Update" class="btn btn-success">
    </form>
	</div>

@endsection
