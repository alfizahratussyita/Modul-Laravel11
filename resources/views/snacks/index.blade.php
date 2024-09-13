<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack List</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <h1 class="mt-4">Snack List</h1>
    <form action="/snacks" method="GET" class="form-inline mb-4">
        <div class="form-group mx-sm-3 mb-2">
            <label for="type" class="sr-only">Type</label>
            <input type="text" class="form-control" id="type" name="type" placeholder="Type (e.g., sweet, salty)">
        </div>
        <div class="form-group mx-sm-3 mb-2">
            <label for="min_price" class="sr-only">Min Price</label>
            <input type="number" class="form-control" id="min_price" name="min_price" placeholder="Min Price">
        </div>
        <div class="form-group mx-sm-3 mb-2">
            <label for="max_price" class="sr-only">Max Price</label>
            <input type="number" class="form-control" id="max_price" name="max_price" placeholder="Max Price">
        </div>
        <button type="submit" class="btn btn-primary mb-2">Filter</button>
    </form>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Type</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            @foreach($snacks as $snack)
                <tr>
                    <td>{{ $snack->name }}</td>
                    <td>{{ $snack->type }}</td>
                    <td>{{ $snack->price }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
