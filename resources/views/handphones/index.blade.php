<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Handphone List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1 class="mb-4">Handphone List</h1>
    <form action="{{ url('/handphones') }}" method="GET" class="mb-4">
        <div class="row">
            <div class="col-md-4">
                <input type="text" name="name" class="form-control" placeholder="Search by handphone name">
            </div>
            <div class="col-md-4">
                <input type="text" name="brand" class="form-control" placeholder="Search by brand">
            </div>
            <div class="col-md-4">
                <button type="submit" class="btn btn-primary">Search</button>
            </div>
        </div>
    </form>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Brand</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            @foreach($handphones as $handphone)
                <tr>
                    <td>{{ $handphone->name }}</td>
                    <td>{{ $handphone->brand }}</td>
                    <td>${{ $handphone->price }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
