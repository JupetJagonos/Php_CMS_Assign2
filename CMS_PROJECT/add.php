<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Game</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #343a40;
            color: white;
            font-family: Arial, sans-serif;
        }
        h1 {
            text-align: center;
            margin: 20px 0;
        }
        .form-container {
            display: flex;
            justify-content: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="display-4">Add New Game</h1>
        <div class="row form-container">
            <div class="col-md-6">
                <form method="POST" action="includes/addGame.php">
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title" required>
                    </div>
                    <div class="mb-3">
                        <label for="genre" class="form-label">Genre</label>
                        <input type="text" class="form-control" id="genre" name="genre" required>
                    </div>
                    <div class="mb-3">
                        <label for="publisher" class="form-label">Publisher</label>
                        <input type="text" class="form-control" id="publisher" name="publisher" required>
                    </div>
                    <div class="mb-3">
                        <label for="review_score" class="form-label">Review Score</label>
                        <input type="text" class="form-control" id="review_score" name="review_score" required>
                    </div>
                    <div class="mb-3">
                        <label for="release_year" class="form-label">Release Year</label>
                        <input type="number" class="form-control" id="release_year" name="release_year" required>
                    </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <input type="text" class="form-control" id="description" name="description" required>
                </div>
                <div class="mb-3">
                    <label for="platform" class="form-label">Platform</label>
                    <input type="text" class="form-control" id="platform" name="platform" required>
                </div>
                <div class="mb-3">
                    <label for="multiplayer" class="form-label">Multiplayer</label>
                    <input type="text" class="form-control" id="multiplayer" name="multiplayer" required>
                </div>
                <div class="mb-3">
                    <label for="age_rating" class="form-label">Age Rating</label>
                    <input type="text" class="form-control" id="age_rating" name="age_rating" required>
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="number" class="form-control" id="price" name="price" required>
                </div>
                <button type="submit" class="btn btn-primary">Add Game</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>