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

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard | डैशबोर्ड</h1>
            <a href="/" target="_blank" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-share fa-sm text-white-50"></i> Go To Website</a>
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4"><a href="/admin/artist">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Artists | कलाकार</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{$artist}}</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-male fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
              </a>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Creations | कृतियों</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{$creation}}</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-images fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

           {{--  <div class="col-xl-3 col-md-6 mb-4"><a href="/admin/art">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Art Type | कला प्रकार</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{$art}} </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-paint-brush fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
              </a>
            </div> --}}

            <div class="col-xl-3 col-md-6 mb-4"><a href="/admin/settings">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Users | उपयोगकर्ताओं</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{$user}} </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-users fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
             
            </div>
         

            <!-- Pending Requests Card Example -->
            {{-- <div class="col-xl-3 col-md-6 mb-4"><a href="/admin/language">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Languages | भाषाओं</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{$language}}</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-language fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div> --}}
           
          </div>

          <!-- Content Row -->







@endsection