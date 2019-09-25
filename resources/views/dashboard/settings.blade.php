@extends('layout/admin')

@section('content')


<div class="container">
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div><br />
@endif

<h3> Change Password of Administrator</h3>

<form class="form-horizontal" action="/admin/change_password" method="post">

{{csrf_field()}}
<br>
                
                <div class="row">
                  <div class="col-md-3">
                    <label for="name">Old Password :</label>
                  </div>
                  <div class="col-md-9">

                    <div class="input-group">
                      <input type="password" class="form-control" id="password" name="oldpassword" required>
                      
                      <div class="invalid-feedback">
                        Valid name is required.
                      </div>
                      </div>
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-3">
                    <label for="name">New Password :</label>
                  </div>
                  <div class="col-md-9">

                    <div class="input-group">
                      <input type="password" class="form-control" id="password2" name="newpassword"  required>
                      
                      <div class="invalid-feedback">
                        Valid name is required.
                      </div>
                      </div>
                  </div>
                </div>
                <br>
                <input type="checkbox" onclick="myFunction(),myFunction2()">Show Password<br><br>
                
                <button class="btn btn-primary btn-lg" id="subbtn" type="submit">Change</button>
            

</form>

<script>
function myFunction() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
function myFunction2() {
  var x = document.getElementById("password2");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>


@endsection