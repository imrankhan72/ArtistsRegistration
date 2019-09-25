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


<form method="post" action="/admin/language/update/{{$lang->id}}">
                @csrf
        <div class="form-group">

            <label for="language">Language Name:</label>
            <input type="text" class="form-control" name="lang_name" value="{{$lang->lang_name}}"/>
        </div>
        


        <button type="submit" class="btn btn-primary">Update</button>
      </form>

@endsection