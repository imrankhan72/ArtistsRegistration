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
          
         नाम: <br>
          पिता का नाम: <br>
          आयु (वर्षों में): <br>
          लिंग : <br>
          ईमेल : <br>
          फ़ोन नंबर : <br>
          जिला : <br>
           पता : <br>

        </div>
        <div class="col-md-4">
  
        {{$artist->name}}<br>
        {{$artist->fathersname}}<br>
        {{$artist->dob}}<br>
        {{$artist->gender}}<br>
        {{$artist->email}}<br>
        {{$artist->pno}}<br>
        {{$artist->city}}<br>
        {{$artist->address}}<br>
      </div>

</div>
<br>
<h3>Other Details</h3>
<hr>
<div class="row">
    <div class="col-md-4" style="font-weight: bold;">
    
   कला विधा : <br>
     Video URL : <br>
    
     आधार नंबर : <br>
     पैन नंबर : <br>
     बैंक नाम  : <br>
    बैंक IFSC Code : <br>
     बैंक शाखा का नाम : <br>


    </div>
    <div class="col-md-4">
          {{$artist->creation_mode}} <br>
          {{$artist->creation_video_url}}<br>
          {{$artist->adhaar}}<br>
          {{$artist->bank_name}}<br>
          {{$artist->ifsc_code}}<br>
          {{$artist->branch_name}}<br>

    </div>
    <div class="col-md-4">
        <h5>कला</h5>
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