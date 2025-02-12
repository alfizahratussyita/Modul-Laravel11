<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beverage List</title>
    <!-- Tambahkan CSS Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1>Beverage List</h1>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Type</th>
        </tr>
        </thead>
        <tbody>
        @foreach($beverages as $beverage)
            <tr>
                <td>{{ $beverage['id'] }}</td>
                <td>{{ $beverage['name'] }}</td>
                <td>{{ $beverage['type'] }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <!-- Tambahkan komponen pagination Bootstrap -->
    <div class="d-flex justify-content-center">
        {{ $beverages->links('pagination::bootstrap-4') }}
    </div>
</div>

<!-- Tambahkan JS Bootstrap -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
