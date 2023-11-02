document.addEventListener('DOMContentLoaded', function () {
  const apiKey = 'e0366701db6c50791d8ee0019e123651';
  let apiUrl = 'https://api.themoviedb.org/3/discover/movie';
  const searchApiUrl = 'https://api.themoviedb.org/3/search/movie';
  const defaultSort = 'popularity.desc'; // Default sort order
  
  const movieList = document.getElementById('movie-list');
  let currentRow = document.createElement('div');
  currentRow.className = 'movie-row';

  const options = {
    method: 'GET',
    headers: {
      accept: 'application/json',
      Authorization: 'Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiJlMDM2NjcwMWRiNmM1MDc9MWQ4ZWUwMDE5ZTEyMzY1MSIsInN1YiI6IjY1MmMwMmNlMWYzZTYw000BhYzRlYzA5NCIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.XDOaam8HORM1xUiaiCUDSaur_bjfc-j6IrJ4HYzNeM0'
    }
  };

  const loadMovies = async (params) => {
    try {
      // Clear the movie list before displaying search results
      movieList.innerHTML = '';
      let response = null; // Set response to null
      let data = null; // Set data to null

      response = await fetch(`${apiUrl}?${new URLSearchParams(params)}`, options);
      data = await response.json();

      
      
      data.results.forEach(movie => {
        if(!movie.poster_path) return;
        const movieCard = document.createElement('div');
        movieCard.className = 'movie-card';

        const movieImage = document.createElement('img');
        movieImage.className = 'movie-image';
        movieImage.src = `https://image.tmdb.org/t/p/w500${movie.poster_path}`;
        movieImage.alt = movie.title;

        const movieDescription = document.createElement('div');
        movieDescription.className = 'movie-description';
        movieDescription.textContent = movie.title;

        movieCard.appendChild(movieImage);
        movieCard.appendChild(movieDescription);
        movieList.appendChild(movieCard);
        currentRow.appendChild(movieCard);

        if (currentRow.children.length >= 7) {
          // Start a new row after 7 items
          movieList.appendChild(currentRow);
          currentRow = document.createElement('div');
          currentRow.className = 'movie-row';
        }
      });
    
      // Add any remaining movies in the last row
      if (currentRow.children.length > 0) {
        movieList.appendChild(currentRow);
      }
    } catch (error) {
      console.error('Error:', error);
    }
  };

  // Function to load default movies
  const loadDefaultMovies = () => {
    const initialParams = {
      api_key: apiKey,
      language: 'en-US',
      sort_by: defaultSort,
      page: 1,
    };
    loadMovies(initialParams);
  };

  // Call the function to load default movies when the page loads
  loadDefaultMovies();

  const searchForm = document.getElementById('search-form');
  const searchInput = document.getElementById('search-input');
 

  searchForm.addEventListener('submit', async (event) => {
    event.preventDefault();
    const query = searchInput.value.trim();
    apiUrl = searchApiUrl;
    
    
    if (query) {
      const searchParams = {
        api_key: apiKey,
        language: 'en-US',
        sort_by: 'distance.desc',
        query: query,
        page: 1,
      };
      loadMovies(searchParams);
    } else {
      // If the search query is empty, you can handle this case or display a message
      console.log('Please enter a search query.');
    }
  });
});
