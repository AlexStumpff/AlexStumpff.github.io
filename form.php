<!DOCTYPE html>
<html>
<head>
	<title>Add Movie Entry</title>
	<style>
		form {
			display: grid;
			grid-template-columns: repeat(2, 1fr);
			grid-gap: 10px;
			max-width: 800px;
			margin: 0 auto;
			padding: 20px;
			border: 1px solid #ccc;
			border-radius: 5px;
		}

		label {
			display: block;
			margin-bottom: 5px;
			font-weight: bold;
		}

		input[type="text"],
		textarea {
			padding: 5px;
			border: 1px solid #ccc;
			border-radius: 5px;
			width: 100%;
			box-sizing: border-box;
			font-size: 16px;
			margin-bottom: 10px;
		}

		textarea {
			height: 200px;
		}

		input[type="checkbox"] {
			margin-top: 10px;
		}

		input[type="submit"] {
			background-color: #4CAF50;
			color: white;
			padding: 10px 20px;
			border: none;
			border-radius: 5px;
			font-size: 16px;
			cursor: pointer;
		}
	</style>
</head>
<body>
	<h2>Add Movie Entry</h2>
	<form method="post" action="process-form.php">
		<label for="movie">Movie:</label>
		<input type="text" id="movie" name="movie">

		<label for="title">Title:</label>
		<input type="text" id="title" name="title">

		<label for="director">Director:</label>
		<input type="text" id="director" name="director">

		<label for="cast">Cast:</label>
		<input type="text" id="cast" name="cast">

		<label for="genre">Genre:</label>
		<input type="text" id="genre" name="genre">

		<label for="release_date">Release Date:</label>
		<input type="text" id="release_date" name="release_date">

		<label for="runtime">Runtime:</label>
		<input type="text" id="runtime" name="runtime">

		<label for="review">Review:</label>
		<textarea id="review" name="review"></textarea>

		<label for="synopsis">Synopsis:</label>
		<textarea id="synopsis" name="synopsis"></textarea>

		<label for="favorite">Favorite:</label>
		<input type="checkbox" id="favorite" name="favorite" value="1">

		<label for="trailer">Trailer:</label>
		<input type="text" id="trailer" name="trailer">

		<input type="submit" value="Submit">
	</form>
</body>
</html>
