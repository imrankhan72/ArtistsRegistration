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

      <h3>Artists ({{ $all_artist->count()}})</h3>

<div class="table-responsive" >
    <table class="table table-striped" id="myTable">
        <thead>
            <tr>
            <th>ID</th>
            <th>नाम</th>
            <th>कला विधा </th>
            <th>फ़ोन नंबर </th>
            <th>जिला</th>
            <th>Edit</th>
            <th>Delete</th>
            </tr>
        </thead>
         <tbody>
         @foreach($all_artist as $artist)
        <tr>
            <td>{{$loop->iteration }}</td>
            <td><a href="artist/view_details/{{$artist->id}}">{{$artist->name}}</a></td>
            <td>{{$artist->creation_mode}}</td>
            <td>{{$artist->pno}}</td>
            <td>{{$artist->city}}</td>
            <td><a href="artist/edit/{{$artist->id}}" class="btn btn-primary">Edit</a></td>
            <td>
               <!-- never name route funtion and method of the form same -->
                  <form action="artist/destory/{{$artist->id}}" method="post">
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