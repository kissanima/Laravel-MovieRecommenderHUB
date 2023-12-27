@extends('layouts.app')
@section('style')
  <!-- Add any additional styles here -->
@endsection

@section('content')
<main id="main" class="main">
  <div class="row justify-content-center align-items-center">
    @auth
      <div id="question-container" class="text-center" style="margin-top: 200px;">
        <h1><p>How are you today?</p></h1>
        <button id="happy-button">Happy</button>
        <button id="neutral-button">Neutral</button>
        <button id="sad-button">Sad</button>
      </div>

      <div id="occasion-container" style="display: none;">
        <h1><p>What comes closest to your occasion?</p></h1>
        <button id="occasion-alone">Just watching a movie by myself</button>
        <button id="occasion-date">Movie date</button>
        <button id="occasion-friends">Movie night with friends</button>
        <button id="occasion-partner">Date night with boyfriend or girlfriend</button>
        <button id="occasion-family">Watching a movie with family or relatives</button>
      </div>

      <div id="genre-container" style="display: none;">
        <h1><p>Please choose any genre you're interested in.</p></h1>
        <button id="genre-action">Action</button>
        <button id="genre-comedy">Comedy</button>
        <button id="genre-romantic">Romantic Comedy</button>
        <button id="genre-all">I would like to choose from all genres</button>
      </div>

      <div id="age-container" style="display: none;">
        <h1><p>How old would you like the movie to be?</p></h1>
        <button id="age-any">Doesn't matter</button>
        <button id="age-3">Published in the last 3 years</button>
        <button id="age-5">Published in the last 5 years</button>
        <button id="age-10">Published in the last 10 years</button>
        <button id="age-20">Published in the last 20 years</button>
      </div>

      <div id="recommendation-container" style="display: none;">
        <!-- Display recommended movies here -->
      </div>

    @else
      <div id="question-container" class="text-center" style="margin-top: 200px;">
        <h1><p>MOVIE RECOMMENDATION</p></h1>
        <h3><p>You can’t decide between thousands of movies available for streaming?</p></h3>
        <h3><p>Answer these questions and let us do the work!"</p></h3>
      </div>
    @endauth
  </div>
</main><!-- End #main -->

  <div id="recommendation-container" style="display: none;">
    <!-- Display recommended movies here -->
  </div>
@endsection

@section('script')
@endsection
