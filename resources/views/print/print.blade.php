
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">



<div style="padding:10px;">
<div class="row">
<div class="col-md-9"><h3>Press (Ctrl+P) to Print Locations Slips </h3> </div>
 
<div class="col-md-3"><a style=" background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;" href="/admin/print">Go Back </a></div><br>

</div>
@foreach($artists_info as $artist)
<div class="col-md-12" style="border-style: dotted; padding:10px; margin-bottom:10px;">
Name: {{$artist->name}}<br>
Address: {{$artist->address}}<br>
City : {{$artist->city}}<br>
State : {{$artist->state}}<br>
Phone No. : {{$artist->pno}}<br>
</div>
<br>

@endforeach
</div>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>