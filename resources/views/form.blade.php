<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
   

    <title>संस्कृति संचालनालय, भोपाल (म.प्र.)</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/nav.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-bs4.css" rel="stylesheet">
    <script src="js/cities.js"></script>

    <!-- Custom styles for this template -->
  
  </head>

<style>
.labelstrong {
  font-weight: bold;
}
</style>


<body class="bg-white body-color">

   <div class="top-wrpper">
        <header id="header">
            <div class="container">
            <div class="row">

            <div class="col-md-4">
                 <a class="logo" href="/"><img alt="logo of department" src="files/logo-h.png"></a>    
            </div>
   
           </div>
        </div>
        </header>
</div>


      <div class="container">
          <div class="py-5 text-center ">
            <h4 class="head-color"> Artists Registration / कलाकारों का पंजीकरण</h4>
          </div>
      </div>
   
      <!-- Modal -->
  <div class="modal fade" id="successmodal" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          
          <h4 class="modal-title">Alert</h4>
        </div>
        <div class="modal-body">
          <p>{{ session()->get('success') }}.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
     



      <div class="container">

        <div class="row">
            <div class="col-md-1">
            </div>

            <div class="col-md-10">
          
              <form class="needs-validation" method="post" action="/store" enctype="multipart/form-data" onsubmit="return confirm('Do you really want to submit the form?');">
              @csrf
                
                <div class="row">
                  <div class="col-md-4">
                    <label class="labelstrong" for="name">Full Name / पूरा नाम:</label>
                  </div>
                  <div class="col-md-8">

                    <div class="input-group">
                      <input type="text" class="form-control" id="Name" name="name" required>
                      <div class="invalid-feedback">
                        Valid name is required.
                      </div>
                      </div>
                  </div>
                </div>
                
                <br>

                <div class="row">
                  <div class="col-md-4">
                    <label class="labelstrong" for="name">Father's Name / पिता का नाम:</label>
                  </div>
                  <div class="col-md-8">

                    <div class="input-group">
                      <input type="text" class="form-control" id="FatherName" name="fathersname" required>
                      <div class="invalid-feedback">
                        Valid name is required.
                      </div>
                      </div>
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-4">
                    <label class="labelstrong" for="name"> Age (in years) / आयु (वर्षों  में)   :</label>
                  </div>
                  <div class="col-md-8">

                    <div class="input-group">
                      <input type="number" class="form-control" id="dob" name="dob" required>
                      <div class="invalid-feedback">
                        Valid name is required.
                      </div>
                      </div>
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-4">
                    <label class="labelstrong" for="name">Email / ईमेल:</label>
                  </div>
                  <div class="col-md-8">

                    <div class="input-group">
                      <input type="text" class="form-control" id="email" name="email" required>
                     
                      </div>
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-4">
                    <label class="labelstrong" for="name">Phone Number / फ़ोन नंबर :</label>
                  </div>
                  <div class="col-md-8">
                    <div class="input-group">
                     <input type="tel" class="form-control" id="pno" name="pno" minlength="10" maxlength="10" required>
                    </div>
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-4">
                    <label class="labelstrong" for="name">PAN No. (Optional) / पैन नंबर (वैकल्पिक):</label>
                  </div>
                  <div class="col-md-8">

                    <div class="input-group">
                      <input type="tel" class="form-control" minlength="12" maxlength="12" id="adhaar" name="pan"  >
                     
                      </div>
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-4">
                    <label class="labelstrong" for="name">Adhaar No.  / आधार नंबर :</label>
                  </div>
                  <div class="col-md-8">

                    <div class="input-group">
                      <input type="tel" class="form-control" minlength="12" maxlength="12" id="adhaar" name="adhaar" required>
                      </div>
                  </div>
                </div>
                <br>

                <div class="row">
                  <div class="col-md-4">
                    <label class="labelstrong" for="name">Address / पता :</label>
                  </div>
                  <div class="col-md-8">
                    <div class="input-group">
                      <input type="text" class="form-control" id="address" name="address" required>
                      </div>
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-4">
                    <label class="labelstrong" for="name">District / जिला :</label>
                  </div>
                  <div class="col-md-8">
                    <select class="form-control" name="city">
                     @foreach($districts as $district) 
                     <option value="{{$district}}" >{{$district}}</option>
                     @endforeach
                    </select>
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-4">
                    <label class="labelstrong" for="name">Experience / कार्य अनुभव: :</label>
                  </div>
                  <div class="col-md-8">
                    <div class="input-group">
                      <textarea class="form-control" name="experience" required></textarea>
                      </div>
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-4">
                    <label class="labelstrong" for="name">Artist Photo / कलाकार फोटो:</label>
                  </div>
                  <div class="col-md-8">

                    <div class="input-group">
                    
                     <input type="file" class="form-control-file" name="artist_photo">
                      </div>
                  </div>
                </div>
                <br>
                <div id="mode" class="row">
                  <div class="col-md-4">
                    <label class="labelstrong" for="name">कला विधा में सक्रियता: <br> Select as Applicable <br>(लागू के रूप में चयन करें):</label>
                  </div>
                  <div class="col-md-8">
                    @foreach($arts as $art)
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox"  name="creation_mode[]" value="{{$art}}">
                      <label class="form-check-label" for="inlineCheckbox1">{{$art}}</label>
                    </div>
                    @endforeach
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <label class="labelstrong" for="name">Upload Arts (Optional) <br> अपलोड कला (वैकल्पिक):</label>
                  </div>
                  <div class="col-md-8">

                    <div class="input-group">
                    
                    <br>
                    
                     <input type="file" class="form-control" name="creation[]" multiple>&nbsp;
                     Max 5 Photos Allowed (20 Mb Max) <br>&nbsp;अधिकतम 5 तस्वीरें (अधिकतम 20 एमबी )
                    </div>
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-4">
                    <label class="labelstrong" for="name">Youtube Url (Optional) <br> Youtube Url (वैकल्पिक) :</label>
                  </div>
                  <div class="col-md-8">

                    <div class="input-group">
                      <input type="text" class="form-control" id="creation_video_url" name="creation_video_url" >
                     
                      </div>
                  </div>
                </div>
                <br>
                
                <div class="row">
                  <div class="col-md-4">
                    <label class="labelstrong" for="name">Artist's Bank Name (Optional) <br> कलाकार का बैंक नाम (वैकल्पिक):</label>
                  </div>
                  <div class="col-md-8">

                    <div class="input-group">
                      <input type="text" class="form-control"  id="bank_name" name="bank_name"  >
                     
                      </div>
                  </div>
                </div>
                <br>

                <div class="row">
                  <div class="col-md-4">
                    <label class="labelstrong" for="name"> Bank's IFSC Code (Optional) <br> बैंक का IFSC कोड (वैकल्पिक):</label>
                  </div>
                  <div class="col-md-8">

                    <div class="input-group">
                      <input type="text" class="form-control"  id="" name="ifsc_code"  >
                     
                      </div>
                  </div>
                </div>
                <br>

                <div class="row">
                  <div class="col-md-4">
                    <label class="labelstrong" for="name"> Bank Branch Name (Optional) <br> बैंक शाखा का नाम (वैकल्पिक):</label>
                  </div>
                  <div class="col-md-8">

                    <div class="input-group">
                      <input type="text" class="form-control"  id="branch_name" name="branch_name"  >
                     
                      </div>
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-4">
                    <label class="labelstrong" for="name"> Other details (Optional) <br> अन्य विवरण (वैकल्पिक):</label>
                  </div>
                  <div class="col-md-8">

                    <div class="input-group">
                      <textarea class="form-control"  id="other_details" name="other_details" ></textarea>
                     
                      </div>
                  </div>
                </div>

                <br>
                <div class="row">
                  <div class="col-md-12">
                  <p class="labelstrong">Please accept the terms and conditions to submit / कृपया सबमिट करने के लिए नियम और शर्त स्वीकार करें 
                  <br><br><a href="/tnc">नियम व शर्तें / Terms & Condition</a> &nbsp; <input type="checkbox"  onchange="checkedChanged(this)"/> &nbsp; (✔)</p>
                </div>
                </div>             
                <br>

                <button class="btn btn-primary btn-lg" id="tnc" type="submit" disabled="disabled" >Submit</button>
                

          
              </form>
            </div>

            <div class="col-md-1">
            </div>
        </div>
      </div>

</body>

      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; 2019 संस्कृति संचालनालय, मध्यप्रदेश शासन</p>
       
      </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script
  src="http://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
  <script language="javascript">print_state("sts");</script>
   
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/holder.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>    
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
                        
<script>
@if(session()->get('success'))
   $("#successmodal").modal("toggle");
@endif
</script>


   <script>
 
   
    function checkedChanged(element) {
 
 var myLayer = document.getElementById('tnc');
 if (element.checked == true) {
    
     myLayer.disabled = "";
 } else {
     
     myLayer.disabled = "disabled";
 };
}
   </script>
 

    

  </body>
</html>