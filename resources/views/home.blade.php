@extends('layouts.app')
@section('style')
@endsection

@section('content')

<main id="main" class="main">
  <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
          <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item active">Popular Now</li>
          </ol>
      </nav>
  </div><!-- End Page Title -->




  
  <div class="container">
      <div id="movie-list">
          
          
      </div>
  </div>
  <script src="{{ url('assets') }}/js/tmbd.js"></script>

</main><!-- End #main -->

@endsection

@section('script')
@endsection