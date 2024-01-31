<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Business Unit</title>
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
                <a class="nav-link" href="{{('BusinessUnit.show') }}">Projects</a>
            </li>
        </ul>
    </div>
</nav>

<!-- Jumbotron -->
<div class="jumbotron">
    <h1 class="display-4">I-REQUESTSYSTEM</h1>
    <p class="lead"></p>
    <hr class="my-4">
    <p>Request your system here</p>
    <a class="btn btn-primary btn-lg" href="{{ route('BusinessUnit.create') }}" role="button">Request System</a>
    <p>View list of system here</p>
    <a class="btn btn-primary btn-lg" href="#" role="button">View System</a>
</div>

<div class="jumbotron">
    <h3 class="display-4">Recently View</h3>
    <h5 class="card-title">System 1</h5>
    <p class="card-text">Description on System 1</p>
    <a href="#" class="btn btn-primary">View</a>
    <a href="#" class="btn btn-secondary">Edit</a>
</div>
</body>
</html>
