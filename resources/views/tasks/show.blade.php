<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Details</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        @if ($task)
            <h1>{{ $task->title }}</h1>
            <a href="{{ route('tasks.index') }}" class="btn btn-primary">Back to List</a>
        @else
            <div class="alert alert-danger">
                Task not found.
            </div>
            <a href="{{ route('tasks.index') }}" class="btn btn-primary">Back to List</a>
        @endif
    </div>
</body>
</html>
