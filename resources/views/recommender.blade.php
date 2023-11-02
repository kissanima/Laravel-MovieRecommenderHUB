@extends('layouts.app')
@section('style')
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

          <div id="response-form" style="display: none;">
            <form class="text-center">
              <label for="response">Tell us more:</label>
              <textarea id="response" name="response"></textarea>
              <button type="submit">Submit</button>
            </form>
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
  
  
@endsection
@section('script')
@endsection
