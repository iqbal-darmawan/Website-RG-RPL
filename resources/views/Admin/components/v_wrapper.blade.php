<!DOCTYPE html>
<html>
@include('Admin/components/v_head')
<body>

  @include('Admin/components/v_nav')
    <!-- Header -->
  <div class="main-content" id="panel">
    @include('Admin/components/v_topnav')
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">@yield('title')</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="/"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="/">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
                </ol>
              </nav>
            </div>
        @yield('content')
      
     
            
      @include('Admin/components/v_footer') 
   
 