@extends('layout/admin')

@section('content')


@if(session()->get('success'))
      <div>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
        {{ session()->get('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>

        </button>
        </div>
      </div>
      @endif

      <div class="row">
<div class="col-md-10">
<h3>Arts/Art ({{ $art->count()}})</h3><br>
</div>
<div class="col-md-2">
<a href="/admin/art/create" class="btn btn-primary">Create New art</a>


</div>

</div>

<p></p>

<div class="table-responsive">
            <table class="table table-striped w-auto">
              <thead>
        <tr>
         <td>Id</td>
          <td>Art Form Name</td>
          <td>Art Medium Name</td>

          
          <td colspan="3">Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($art as $art)
        <tr>
            <td>{{$loop->iteration }}</td>
            <td>{{$art->art_form_name}}</td>

            <td>{{$art->category_name}}</td>
           
            

            <td><a href="art/edit/{{$art->id}}" class="btn btn-primary">Edit</a></td>
            <td>
               <!-- never name route funtion and method of the form same -->
                  <form action="art/{{ $art->id }}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>

        </tr>
        @endforeach
    </tbody>

            </table>
          </div>





@endsection