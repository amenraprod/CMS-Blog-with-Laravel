@extends('layouts.app')

@section('content')

<div class="panel panel-default">
  <div class="panel-heading">
    Create a new post
  </div>
<div class="panel-body">
  <form action="/post/store" method="post">

 {{  csrf_field() }}

 <div class="form-group">

   <label for="title">Title</label>

    <input type="text" name="title" class="form-control">

    <label for="featured">Featured Image</label>

     <input type="file" name="featured" class="form-control">

  </form>

</div>
@stop
