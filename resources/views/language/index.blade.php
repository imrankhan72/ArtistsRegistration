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
<div class="col-md-9">
<h3>Languages ({{ $language->count()}})</h3><br>
</div>
<div class="col-md-3">
<a href="/admin/language/create" class="btn btn-primary">Create New Language</a>

</div>

</div>


<div class="table-responsive">
            <table class="table table-striped w-auto">
              <thead>
        <tr>
         <td>Id</td>
          <td>Language Name</td>
          
          <td colspan="3">Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($language as $language)
        <tr>
            <td>{{$loop->iteration }}</td>
            <td>{{$language->lang_name}}</td>
           
            

            <td><a href="language/edit/{{$language->id}}" class="btn btn-primary">Edit</a></td>
            <td>
               <!-- never name route funtion and method of the form same -->
                  <form action="language/{{ $language->id }}" method="post">
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