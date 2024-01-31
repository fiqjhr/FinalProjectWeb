<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register System</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
                <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('BusinessUnit.index') }}">Projects <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Settings</a>
            </li>
        </ul>
    </div>
</nav>
    <div class="container">
        <h2>Register system form</h2>
        <form action="{{ route('BusinessUnit.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Enter your name">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email">
            </div>
            <div class="form-group">
                <label for="phoneNO">Phone NO:</label>
                <input type="text" class="form-control" name="phoneNO" id="phoneNO" placeholder="Enter your phone NO">
            </div>
            <div class="form-group">
                <label for="message">Business Unit:</label>
                <input class="form-control" name="BUname" id="BUname" rows="3" placeholder="Enter your business unit"></input>
            </div>
            <div class="form-group">
                <label for="message">System Name:</label>
                <input class="form-control" name="systemName" id="systemName" rows="3" placeholder="Enter your system name"></input>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>
