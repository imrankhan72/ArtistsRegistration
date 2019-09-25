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


<form method="post" action="/admin/art/update/{{$art->id}}">
                @csrf
                <div class="form-group">
              {{csrf_field()}}

              <label for="name">Art Form Name:</label>
              <input type="text" class="form-control" name="art_form_name" value="{{$art->art_form_name}}"/>
          </div>
          <div class="form-group">
              {{csrf_field()}}

              <label for="name">Art Medium Name:</label>
              <select name="category_name" class="form-control"  required>

              @if($art->category_name == 'गायन')
              <option selected>गायन</option>
              @else
              <option>गायन</option>
              @endif
              
              @if($art->category_name == 'वादन')
              <option selected>वादन</option>
              @else
              <option>वादन</option>
              @endif
              
              @if($art->category_name == 'नृत्‍य')
              <option selected>नृत्‍य</option>
              @else
              <option>नृत्‍य</option>
              @endif

              
              @if($art->category_name == 'चित्र')
              <option selected>चित्र</option>
              @else
              <option>चित्र</option>
              @endif

              @if($art->category_name == 'शिल्‍प')
              <option selected>शिल्‍प</option>
              @else
              <option>शिल्‍प</option>
              @endif

              @if($art->category_name == 'आधुनिक रंगमंच')
              <option selected>आधुनिक रंगमंच</option>
              @else
              <option>आधुनिक रंगमंच</option>
              @endif


              @if($art->category_name == 'लोक')
              <option selected>लोक</option>
              @else
              <option>लोक</option>
              @endif

              @if($art->category_name == 'रंगमंच')
              <option selected>रंगमंच</option>
              @else
              <option>रंगमंच</option>
              @endif
              
              

              </select>
             
          </div>

        


        <button type="submit" class="btn btn-primary">Update</button>
      </form>

@endsection