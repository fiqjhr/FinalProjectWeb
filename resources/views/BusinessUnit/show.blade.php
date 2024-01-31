<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Show Business Unit</title>
</head>
<body>

<!-- Navigation Bar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">UNITEN ITMS</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('BusinessUnit.index') }}">Back to Business Units</a>
            </li>
        </ul>
    </div>
</nav>

<div class="container">
    <br><br>
    <h3>Show Business Unit</h3>
    <br><br>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Business Unit Name: {{ $businessUnit->name }}</h5>
            <p class="card-text">Business Unit Description: {{ $businessUnit->description }}</p>
        </div>
    </div>
</div>

</body>
</html>
