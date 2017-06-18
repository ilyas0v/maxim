@extends('admin')
@section('title','Slides | Admin Panel')
@section('content')
<div class="container">
  <h1>Header slides:</h1>
  <button class="btn add-duymesi" style="background:lightblue;">Add new slide</button>
  <table class="table slide-cedveli">
    <thead>
      <th>ID</th>
      <th>SENTENCE</th>
    </thead>
    <tbody>
      <tr style="display:none;" class="add-new-slide">
        <td></td>
        <td>
          <form method="POST" action="/admin/slides/add">
            {{ csrf_field() }}
            <textarea style="width:50%;background:rgba(0,0,255,0.1)" id="add-new-slide-textarea" name="cumle"></textarea>
            <br>
            <input class="btn btn-primary" type="submit" value="Add">
            <a id="add-new-slide-cancel" class="btn btn-danger">Cancel</a>
          </form>
        </td>
      </tr>
      @foreach($slides as $slide)
        <tr>
          <td>{{$slide->id}}</td>
          <td>
            <form method="POST" action="/admin/slides/update/{{$slide->id}}">
              {{ csrf_field() }}
            <textarea name="cumle" class="slide-yazisi" id="{{$slide->id}}" disabled>{{$slide->cumle}}</textarea><br>
            <input type="submit" style="display:none;" value="Update" class=" {{$slide->id}} btn btn-primary update-duymesi">
            <a  style='display:none;' class="edit-slide-cancel  {{$slide->id}} btn btn-danger">Cancel</a>
            </form>
          </td>
          <td>
            <button class="btn btn-success edit-duymesi" id="{{$slide->id}}">Edit</button>
            <a class="btn btn-danger" href="/admin/slides/delete/{{$slide->id}}">Delete</a>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection
