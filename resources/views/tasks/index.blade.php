<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task List</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <div class="alert alert-info">
            {{ $message }}
        </div>

        <a href="{{ route('tasks.create') }}" class="btn btn-primary mb-3">Add New Task</a>

        <ul class="list-group">
            @forelse ($tasks as $task)
                <li class="list-group-item">
                    <a href="{{ route('tasks.show', $task->id) }}">{{ $task->title }}</a>
                </li>
            @empty
                <li class="list-group-item">No tasks found.</li>
            @endforelse
        </ul>
    </div>
</body>
</html>
