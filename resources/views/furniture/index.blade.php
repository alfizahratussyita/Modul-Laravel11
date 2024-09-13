<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Furniture List</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Furniture Excluding Seating and Table Types</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Type</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            @foreach($furnitures as $furniture)
                <tr>
                    <td>{{ $furniture->name }}</td>
                    <td>{{ $furniture->type }}</td>
                    <td>${{ number_format($furniture->price, 2) }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
