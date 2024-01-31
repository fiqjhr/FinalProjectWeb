<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Project</title>
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
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{('Project.index') }}">Projects</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Profile</a>
            </li>
        </ul>
    </div>
</nav>

    <div class="container">
        <br><br>
        <h3>Create New Project</h3>
        <form action="{{ route('Project.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Project name:</label>
                <input type="text" class="form-control" id="projectname" name="projectname" placeholder="Enter project name" required>
            </div>
            <div class="form-group">
                <label for="name">System PIC:</label>
                <input type="text" class="form-control" id="PICname" name="PICname" placeholder="Enter system PIC" required>
            </div>
            <div class="form-group">
                <label for="date">Project start date:</label>
                <input type="date" class="form-control" id="startDate" name="startDate" placeholder="Enter start date project" required>
            </div>
            <div class="form-group">
                <label for="date">Project end date:</label>
                <input type="date" class="form-control" id="endDate" name="endDate" placeholder="Enter end date project" required>
            </div>
            <div class="form-group">
                <label for="status">System Status:</label>
                <input type="text" class="form-control" id="projectStatus" name="projectStatus" placeholder="Enter system system" required>
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea class="form-control" id="projectDescription" name="projectDescription" rows="3" placeholder="Enter project description" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Create Project</button>
        </form>
    </div>
</body>
</html>
