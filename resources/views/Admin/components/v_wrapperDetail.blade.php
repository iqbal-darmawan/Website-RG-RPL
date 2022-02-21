<!DOCTYPE html>
<html>
@include('Admin/components/v_head')
<body>
  @include('Admin/components/v_nav')
    <!-- Header -->
  <div class="main-content" id="panel">
    @include('Admin/components/v_topnavDetail')
    
      @yield('content')
     @include('Admin/components/v_footer')
   
 