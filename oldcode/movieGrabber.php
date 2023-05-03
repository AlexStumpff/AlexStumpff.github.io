<?php
// Set your API endpoint and key
$endpoint = "https://movie-database-imdb-alternative.p.rapidapi.com/";
$key = "k_hephcb09";

// Set the movie title you want to search for
$title = "Parasite";

// Set the API parameters
$params = array(
    "r" => "json",
    "t" => $title
);

// Set the API headers
$headers = array(
    "X-RapidAPI-Host: movie-database-imdb-alternative.p.rapidapi.com",
    "X-RapidAPI-Key: " . $key
);

// Build the API URL
$url = $endpoint . "?" . http_build_query($params);

// Set the stream context options
$context = stream_context_create([
    'http' => [
        'method' => 'GET',
        'header' => implode("\r\n", $headers)
    ],
    'ssl' => [
        'verify_peer' => false,
        'verify_peer_name' => false
    ]
]);

// Send the API request and get the response
$response = file_get_contents($url, false, $context);

// Check if the response is empty
if (!$response) {
    echo "No data returned from API.";
    exit;
}

// Parse the API response
$data = json_decode($response, true);

// Check if there was an error with the API request
if (isset($data["status_code"])) {
    echo "API error: " . $data["status_message"];
    exit;
}

// Get the movie ID, director, and cast information
$id = $data["imdbID"];
$director = $data["Director"];
$cast = explode(", ", $data["Actors"]);

// Display the information
echo "Data: " . $data . "<br>";
echo "ID: " . $id . "<br>";
echo "Director: " . $director . "<br>";
echo "Cast: " . implode(", ", $cast);
