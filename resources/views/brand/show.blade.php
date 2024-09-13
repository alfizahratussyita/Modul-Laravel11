<!-- resources/views/brand/show.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brand Details</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h1>Brand Details</h1>
        @if($brand)
            <table class="table">
                <tr>
                    <th>ID</th>
                    <td>{{ $brand->id }}</td>
                </tr>
                <tr>
                    <th>Name</th>
                    <td>{{ $brand->name }}</td>
                </tr>
            </table>
        @else
            <p>Brand not found.</p>
        @endif
    </div>
</body>
</html>
