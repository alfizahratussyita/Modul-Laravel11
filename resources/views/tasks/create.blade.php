<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Task</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Add New Task</h1>
        
        <form action="{{ route('tasks.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Task Title</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <button type="submit" class="btn btn-primary">Add Task</button>
        </form>

        <a href="{{ route('tasks.index') }}" class="btn btn-secondary mt-3">Back to List</a>
    </div>
</body>
</html>
