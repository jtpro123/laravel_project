@extends('Template.dashboard')
@section('content')

<body>
    <main>
        <div class="card">
  <div class="card-body">
      
      <form action="{{url('/admin/'.$blog->id)}}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$blog->id}}" id="id" />
        <label>Heading</label></br>
        <input type="text" name="heading" id="name" value="{{$blog->blog_title}}" class="form-control"></br>
        <label>Description</label></br>
        <input type="text" name="desc" id="paragraph" value="{{$blog->blog_desc}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
    </main>

</body>
@endsection