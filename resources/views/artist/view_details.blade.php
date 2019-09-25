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
      
      <h3>Basic Details</h3>
      <hr>
      <div class="row">
        <div class="col-md-3"><img style="width:200px;height:200px;" src="/userfiles/{{$artist->photourl}}" alt="No Photo Available"></div>
        <div class="col-md-4" style="font-weight: bold;">
          
          Name : <br>
          Fathers Name : <br>
          Date of Birth : <br>
          Gender : <br>
          Language : <br>
          Email Address : <br>
          Phone Number : <br>
          State : <br>
          City : <br>
          Address : <br>

        </div>
        <div class="col-md-4">
  
        {{$artist->name}}<br>
        {{$artist->fathersname}}<br>
        {{$artist->dob}}<br>
      {{$artist->gender}}<br>
      {{$artist->language}}<br>
      {{$artist->email}}<br>
      {{$artist->pno}}<br>
      {{$artist->state}}<br>
      {{$artist->city}}<br>
      {{$artist->address}}<br>
      </div>

</div>
<br>
<h3>Other Details</h3>
<hr>
<div class="row">
    <div class="col-md-4" style="font-weight: bold;">
    Download Artist Photo : <br>
    Artist Level : <br>
    Art Medium : <br>
    Art Medium Sub-category : <br><br><br>
    Artist Video URL : <br>
    Name of Institute (Associated with Artist) : <br>
    Address of Institute : <br>
    Artist Adhaar Number : <br>
    Artist Bank Name : <br>
    Artist Bank IFSC Code : <br>
    Artist Bank Branch Name : <br>
    Artist's Scheme (Involved In) : <br>
    Artist's Presenter : <br>

    </div>
    <div class="col-md-4">
          <a href="/userfiles/{{$artist->photourl}}" download>Download Photo</a><br>
          {{$artist->artist_level}}<br>
          {{$artist->creation_mode}} <br>
          {{$artist->creation_mode_sub}}<br><br><br>
          {{$artist->creation_video_url}}<br>
          {{$artist->name_inst}}<br>
          {{$artist->inst_address}}<br>
          {{$artist->adhaar}}<br>
          {{$artist->bank_name}}<br>
          {{$artist->ifsc_code}}<br>
          {{$artist->branch_name}}<br>
          {{$artist->scheme}}<br>
          {{$artist->presenter}}<br>
    </div>
    <div class="col-md-4">
        <h5>Creations uploade By Artist</h5>
        (Click on the photo to download)
        <hr>
        <div style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);transition: 0.3s;background-color:lightblue;padding:10px;">
          <div class="row">
          @if($creations == NULL)
          <h4>No Creations Available or Uploaded !!</h4>
          @else
          @foreach ($creations as $creation)
          <div class="col-md-6">
          <a href="/userfiles/{{$creation->creation_file_name}}" download><img style="height:100%;width:100%;" src="/userfiles/{{$creation->creation_file_name}}" alt="No creations Available !!"></a>
           </div>
          @endforeach

          @endif
          
          </div>
          
          
        </div>
    </div>

</div>




        


      @endsection