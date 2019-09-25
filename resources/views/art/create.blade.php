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

<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Add Language
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="/admin/art/store">
          <div class="form-group">
              {{csrf_field()}}

              <label for="name">Art Form Name:</label>
              <input type="text" class="form-control" name="art_form_name"/>
          </div>
          <div class="form-group">
              {{csrf_field()}}

              <label for="name">Art Medium Name:</label>
              <select name="category_name" class="form-control" required>
              <option>गायन</option>
              <option>वादन</option>
              <option>नृत्‍य</option>
              <option>चित्र</option>
              <option>शिल्‍प</option>
              <option>आधुनिक रंगमंच</option>
              <option>लोक</option>
              <option>रंगमंच</option>





              </select>
             
          </div>



          <button type="submit" class="btn btn-primary">Add</button>
      </form>
  </div>
</div>



@endsection