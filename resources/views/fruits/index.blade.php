<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fruits List</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="my-4">Fruits List</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Color</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
                @foreach($fruits as $fruit)
                    <tr>
                        <td>{{ $fruit->id }}</td>
                        <td>{{ $fruit->name }}</td>
                        <td>{{ $fruit->color }}</td>
                        <td>${{ number_format($fruit->price, 2) }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
