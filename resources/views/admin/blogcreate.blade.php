@extends('Template.dashboard')
@section('content')



<div class="card">
  <div class="card-body">
      
    <form action="{{url('/admin')}}" method="post">
        {!! csrf_field() !!}
        
        <label>title</label></br>
        <input type="text" name="blog_title" id="text" class="form-control"></br>
        <label>description</label></br>
        <input type="paragraph" name="blog_desc" id="paragraph" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@endsection