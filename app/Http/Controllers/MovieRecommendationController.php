<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MovieRecommendationController extends Controller
{
    public function getRecommendations(Request $request)
    {
        // Fetch user responses from the request
        $mood = $request->input('mood');
        $occasion = $request->input('occasion');
        $genre = $request->input('genre');
        $age = $request->input('age');

        // Map user responses to TMDb API parameters (you may need to adjust this based on your requirements)
        $genreMapping = [
            'action' => 28,
            'comedy' => 35,
            'romantic' => 10749,
        ];

        $genreId = $genreMapping[$genre] ?? null;

        // Build TMDb API request parameters
        $tmdbApiKey = 'e0366701db6c50791d8ee0019e123651';
        $tmdbBaseUrl = 'https://api.themoviedb.org/3/discover/movie';

        $params = [
            'api_key' => $tmdbApiKey,
            'language' => 'en-US',
            'sort_by' => 'popularity.desc',
            'with_genres' => $genreId,
            'include_adult' => true,
            'page' => 1,
        ];

        // Make the request to TMDb API
        $response = Http::get($tmdbBaseUrl, $params);

        // Extract and return movie recommendations
        $movies = $response->json('results');
        return response()->json($movies);
    }
}
