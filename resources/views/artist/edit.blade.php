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
  
  <h3>Edit "{{$artist->name}}" Artist's Details</h3>
  <br>
  <div class="container">

<div class="row">
    

    <div class="col-md-8">
  
      <form class="needs-validation" method="post" action="/admin/artist/update/{{$artist->id}}" enctype="multipart/form-data" >
      @csrf
        
        <div class="row">
          <div class="col-md-3">
            <label for="name">नाम :</label>
          </div>
          <div class="col-md-9">

            <div class="input-group">
              <input type="text" class="form-control" id="Name" name="name" value="{{$artist->name}}" required>
              <div class="invalid-feedback">
                Valid name is required.
              </div>
              </div>
          </div>
        </div>
        
        <br>

        <div class="row">
          <div class="col-md-3">
            <label for="name">fathers नाम :</label>
          </div>
          <div class="col-md-9">

            <div class="input-group">
              <input type="text" class="form-control" id="FatherName" name="fathersname" value="{{$artist->fathersname}}" required>
              <div class="invalid-feedback">
                Valid name is required.
              </div>
              </div>
          </div>
        </div>
        <br>
        <div class="row">
                  <div class="col-md-3">
                    <label class="labelstrong" for="name">Upload New Artist Photo :</label>
                  </div>
                  <div class="col-md-9">

                    <div class="input-group">
                    
                     <input type="file" class="form-control" name="artist_photo">
                      </div>
                  </div>
                </div>
                <br>
        <div class="row">
          <div class="col-md-3">
            <label for="name">Date of Birth :</label>
          </div>
          <div class="col-md-9">

            <div class="input-group">
              <input type="date" class="form-control" id="dob" name="dob" value="{{$artist->dob}}" required>
              <div class="invalid-feedback">
                Valid name is required.
              </div>
              </div>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-3">
            <label for="name">Gender :</label>
          </div>
          <div class="col-md-9">

            <div class="input-group" >
            @if($artist->gender == 'male')
              <input type="radio" class="form-control" name="gender" checked value="male">Male
            @else
            <input type="radio" class="form-control" name="gender" value="male">Male
            @endif

            @if($artist->gender == 'female')
              <input type="radio" class="form-control" name="gender" checked value="female">Female
              @else
              <input type="radio" class="form-control" name="gender" value="female">Female
              @endif

            @if($artist->gender == 'others')
              <input type="radio" class="form-control" name="gender" checked value="others">Others
              @else
              <input type="radio" class="form-control" name="gender" value="others">Others
              @endif

            </div>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-3">
            <label for="name">Language :</label>
          </div>
          <div class="col-md-9">

            <div class="input-group">
              <select class="form-control" name="language" oldvalue="{{$artist->language}}">
              @foreach($languages as $lang)
                <option value="{{$lang->lang_name}}">{{$lang->lang_name}}</option>
              @endforeach
              </select>
              
              
              </div>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-3">
            <label for="name">Email :</label>
          </div>
          <div class="col-md-9">

            <div class="input-group">
              <input type="text" class="form-control" id="email" name="email" value="{{$artist->email}}" required>
             
              </div>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-3">
            <label for="name">Phone Number :</label>
          </div>
          <div class="col-md-9">

            <div class="input-group">
             <input type="tel" class="form-control" id="pno" name="pno" minlength="10" maxlength="10" placeholder="example: 9000000000" value="{{$artist->pno}}" required>
             
              </div>
          </div>
        </div>
        <br>

        <div class="row">
          <div class="col-md-3">
          <label for="name">State :</label>
          </div>
          <div class="col-md-3">
          

          {{$artist->state}}
            
          </div>
          <div class="col-md-3">
          <label for="name">City :</label>
            
          </div>
          <div class="col-md-3">
          <div class="input-group">
         {{$artist->city}}
              </div>
          </div>

        </div>

        <br>
        <div class="row">
          <div class="col-md-3">
            <label for="name">Address :</label>
          </div>
          <div class="col-md-9">

            <div class="input-group">
              <input type="text" class="form-control" id="address" name="address" value="{{$artist->address}}" required>
             
              </div>
          </div>
        </div>
       
        <br>
        <div class="row">
          <div class="col-md-3">
            <label for="name">Artist Level :</label>
          </div>
          <div class="col-md-9">

            <div class="input-group">
            @if($artist->artist_level == 'State Level')
              <input type="radio" class="form-control" name="artist_level" checked value="State Level">State Level
            @else
            <input type="radio" class="form-control" name="artist_level"  value="State Level">State Level
            @endif

            @if($artist->artist_level == 'National Level')
              <input type="radio" class="form-control" name="artist_level" checked value="National Level">National Level
              @else
              <input type="radio" class="form-control" name="artist_level" value="National Level">National Level
              @endif

            @if($artist->artist_level == 'International Level')
              <input type="radio" class="form-control" name="artist_level" checked value="International Level">International Level
              @else
              <input type="radio" class="form-control" name="artist_level" value="International Level">International Level
              @endif


            </div>
          </div>
        </div>
        <br>
        <div id="mode" class="row">
          <div class="col-md-3">
            <label for="name">मुख्य विधा  :</label>
          </div>
          <div class="col-md-9">

            <div class="input-group">
            
              {{$artist->creation_mode}}
            </div>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-3">
            <label for="name">कला/कलाएं :</label>
          </div>
          <div class="col-md-9">

            <div class="input-group">
                  <div class="checkbox-inline" >
                  @foreach($arts as $arts)
                  <label >{{$arts->art_form_name}} ,  </label>
                  @endforeach
                  </div>
            </div>
          </div>
        </div>
        <br>

        
        <div class="row">
          <div class="col-md-3">
            <label for="name">Video Url (Optional) :</label>
          </div>
          <div class="col-md-9">

            <div class="input-group">
              <input type="text" class="form-control" id="creation_video_url" value="{{$artist->creation_video_url}}" name="creation_video_url" >
             
              </div>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-3">
            <label for="name">Name of Institution (Optional):</label>
          </div>
          <div class="col-md-9">

            <div class="input-group">
              <input type="text" class="form-control" id="name_inst" value="{{$artist->name_inst}}" name="name_inst" >
             
              </div>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-3">
            <label for="name">Institution Address (Optional):</label>
          </div>
          <div class="col-md-9">

            <div class="input-group">
              <input type="text" class="form-control" id="inst_address" value="{{$artist->inst_address}}" name="inst_address" >
             
              </div>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-3">
            <label for="name">Adhaar No. (Optional):</label>
          </div>
          <div class="col-md-9">

            <div class="input-group">
              <input type="tel" class="form-control" minlength="12" maxlength="12" id="adhaar" value="{{$artist->adhaar}}" name="adhaar"  >
             
              </div>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-3">
            <label for="name">Bank Name (Optional):</label>
          </div>
          <div class="col-md-9">

            <div class="input-group">
              <input type="text" class="form-control"  id="bank_name" value="{{$artist->bank_name}}" name="bank_name"  >
             
              </div>
          </div>
        </div>
        <br>

        <div class="row">
          <div class="col-md-3">
            <label for="name">IFSC Code (Optional):</label>
          </div>
          <div class="col-md-9">

            <div class="input-group">
              <input type="text" class="form-control" value="{{$artist->ifsc_code}}" id="" name="ifsc_code"  >
             
              </div>
          </div>
        </div>
        <br>

        <div class="row">
          <div class="col-md-3">
            <label for="name">Branch Name (Optional):</label>
          </div>
          <div class="col-md-9">

            <div class="input-group">
              <input type="text" class="form-control" value="{{$artist->branch_name}}"  id="branch_name" name="branch_name"  >
             
              </div>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-3">
            <label for="name">केन्‍द्र/राज्‍य शासन से किसी योजना में पंजीकृत हो तो उसका विवरण : (Optional):</label>
          </div>
          <div class="col-md-9">

            <div class="input-group">
              <input type="text" class="form-control" value="{{$artist->scheme}}" id="scheme" name="scheme"  >
             
              </div>
          </div>
        </div>
        <br>
        
        <div class="row">
          <div class="col-md-3">
            <label for="name">प्रस्‍तुतकर्ता (पूर्ण विवरण जिनके द्वारा आवेदन किया गया है)(Optional):</label>
          </div>
          <div class="col-md-9">

            <div class="input-group">
              <input type="text" class="form-control" value="{{$artist->presenter}}" id="presenter" name="presenter"  >
             
              </div>
          </div>
        </div>              
        <br>

        
          
        <button class="btn btn-primary btn-lg" id="subbtn" type="submit">Submit</button>
        

  
      </form>
    </div>

    <div class="col-md-4">
    <div class="row">
      <div class="col-sm-12">
      <h4 style="text-align:center;">Artist Photo</h4>
      <img style="width:100%;height:100%;" src="/userfiles/{{$artist->photourl}}">    
      </div>
    </div>
    <br>
    <br>
    <hr>
    <h4 style="text-align:center;">Artist Creations</h4>
  
    @foreach($creations as $creation)
    <div style="margin:10px;padding:10px;">
    <a href="/userfiles/{{$creation->creation_file_name}}" download><img style="height:200px;width:100%;" src="/userfiles/{{$creation->creation_file_name}}"></a><br>
    </div>
    @endforeach
    
    </div>
</div>
</div>
<script src="js/cities.js"></script>



  <script language="javascript">print_state("sts");</script>
        

@endsection