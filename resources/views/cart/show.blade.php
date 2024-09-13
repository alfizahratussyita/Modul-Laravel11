<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Shopping Cart</title>
</head>
<body>
<div class="container mt-5">
    <h2>Shopping Cart</h2>

    <!-- Display success message -->
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Display cart items -->
    @if (count($cartItems) > 0)
        <ul class="list-group mb-4">
            @foreach ($cartItems as $item)
                <li class="list-group-item">{{ $item }}</li>
            @endforeach
        </ul>

        <!-- Clear Cart Button -->
        <form action="{{ route('cart.clear') }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-danger mb-3">Clear Cart</button>
        </form>
    @else
        <p class="text-muted">Keranjang kosong.</p>
    @endif

    <!-- Add item to cart form -->
    <form action="{{ route('cart.add') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="item" class="form-label">Tambah Item:</label>
            <input type="text" class="form-control" id="item" name="item" required>
        </div>
        <button type="submit" class="btn btn-primary">Add to Cart</button>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
