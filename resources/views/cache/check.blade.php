<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Check Cache</title>
</head>
<body>
<div class="container mt-5">
    <h2>Check Cache Item</h2>

    @if ($exists)
        <div class="alert alert-success" role="alert">
            Item 'key' exists in the cache.
        </div>
    @else
        <div class="alert alert-danger" role="alert">
            Item 'key' does not exist in the cache.
        </div>
    @endif

    <form action="/set-cache" method="POST">
        @csrf
        <button type="submit" class="btn btn-primary">Set Cache</button>
    </form>
</div>
</body>
</html>
