<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Hash Password</title>
</head>
<body>
    <div class="container mt-5">
        <h1>Hash Password</h1>
        <form action="/hash" method="POST">
            @csrf
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary">Hash Password</button>
        </form>

        @if(isset($hashedPassword))
            <div class="alert alert-success mt-3">
                <p><strong>Hashed Password:</strong> {{ $hashedPassword }}</p>
            </div>
        @endif
    </div>
</body>
</html>
