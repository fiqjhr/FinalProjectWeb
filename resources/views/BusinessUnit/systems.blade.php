<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registered Systems</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Registered Systems</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>System Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($systems as $system)
                <tr>
                    <td>{{ $businessUnit->id }}</td>
                    <td>{{ $businessUnit->name }}</td>
                    <td>{{ $businessUnit->systemName }}</td>
                    <td>
                        <!-- Add action buttons here -->
                        <a href="{{ route('system.show', $system->id) }}" class="btn btn-info">View</a>
                        <a href="{{ route('system.edit', $system->id) }}" class="btn btn-primary">Edit</a>
                        <!-- Add delete form here if needed -->
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
