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

     


      
      <form method="post" action="/admin/print/print_details">
      @csrf
      <button class="btn btn-primary btn-lg" id="subbtn" type="submit">Print Selected Artist</button>
      <br>
      <br>
      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
              <tr>
              <td><input type="checkbox" onclick="checkAll('chk');"> Select All</td>
              <td>Artist Name</td>
              <td>Type Of Artist</td>
              <td>Art / Arts</td>
              <td>Phone Number</td>
              <td>City</td>
              <td>State</td>
              <td>Artist Level</td>
              </tr>
          </thead>
          <tbody>
      @foreach($artists as $artist)
        <tr>
              <td><input type="checkbox" name="artist_id[]" value="{{$artist->id}}"></td>
              <td>{{$artist->name}}</td>
              <td>{{$artist->creation_mode}}</td>
              <td>{{$artist->creation_mode_sub}}</td>
              <td>{{$artist->city}}</td>
              <td>{{$artist->state}}</td>
              <td>{{$artist->pno}}</td>
              <td>{{$artist->artist_level}}</td>
        </tr>
      @endforeach   
      </tbody>
          </table>
        </div>     
      </form>

     
      <script>
      function checkAll(checkId) {
  var inputs = document.getElementsByTagName("input");
  for (var i = 0; i < inputs.length; i++) {
    if (inputs[i].id != checkId) {
      if (inputs[i].type == "checkbox") {
        if (inputs[i].checked == true) {
          inputs[i].checked = false;
        } else if (inputs[i].checked == false) {
          inputs[i].checked = true;
        }
      }
    }
  }
}
      </script>


   

      @endsection