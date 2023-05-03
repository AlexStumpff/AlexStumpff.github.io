<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="BearCaveCritics.css">
  <script src="ToggleDarkMode.js"></script>
    <title>Alex Stumpff's Movie Review Website Main Page</title>
</head>
<body>
	<div class="container">
    <div id="websiteHeader" class="websiteHeader">
        <div id="title"> Bear Cave Critic </div>
            <img id="criticLogo" src="MovieContent/BearPaw.png" alt="Image">
    </div>
    <nav>
      <ul>
        <div class="dropdown">
          <button class="dropbtn">Settings &#9776;</button>
          <div class="dropdown-content">
            <button onclick="changeBackgroundMode()" class="darkmodebtn">Toggle Dark Mode</button>
          </div>
        </div>
        <li><a href="#">Home</a></li>
        <li><a href="AboutMe.html">About</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="form.php">Write a review!</a></li>
      </ul>
    </nav>
		<div class="box FavoriteMovies">
      <h2>Favorite Movies</h2>
      <div class="movie-favorite">
        <img src="MovieContent/Nightcrawler.jpg" alt="Movie poster">
        <iframe height="120" width="150"
        src="https://www.youtube.com/embed/watch?v=1lEdwqwOttg">
        </iframe>
        <h3><a href="NightCrawlerReview.html">Nightcrawler</a></h3>
        <p>Movie Description</p>
      </div>
      <div class="movie-favorite">
        <img src="MovieContent/TheThing.jpg" alt="Movie poster">
        <iframe height="120" width="170" allowfullscreen="allowfullscreen"
        src="https://www.youtube.com/embed/5ftmr17M-a4">
        </iframe>
        <h3><a href="TheThingReview.html">The Thing</a></h3>
        <p>Movie Description</p>
      </div>
      <div class="movie-favorite">
        <img src="MovieContent/CityOfGod.jpg" alt="Movie poster">
        <iframe height="120" width="150"
        src="https://www.youtube.com/embed/watch?v=1lEdwqwOttg">
        </iframe>
        <h3><a href="NightCrawlerReview.html">CityOfGod</a></h3>
        <p>Movie Description</p>
      </div>
    </div>
            <div class="box AllReviewed">
              <h2>All Movies</h2>
              <div class="movie-list-all-reviewed">
                <?php
                // Open the text file
                $file = fopen("MovieContent/movielist.txt", "r");
        
                // Loop through the file and generate HTML code for each movie
                while (!feof($file)) {
                  $movie = trim(fgets($file));
                  if ($movie != "") {
                    echo '<div class="movie">';
                    echo '<img class="poster" src="MovieContent/' . $movie . '.jpg" alt="' . $movie . '">';
                    echo '<p><a href="' . $movie . 'Review.html">' . $movie . '</a></p>';
                    echo '</div>';
                  }
                }
        
                // Close the text file
                fclose($file);
                ?>
              </div>
            </div>
          </body>
        </html>
        
      </div>
  </body>
  </html>
</body>
