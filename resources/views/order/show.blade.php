<!-- resources/views/order/show.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Details</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h1>Order #{{ $order->id }}</h1>
        <p>Date: {{ $order->created_at->format('d M Y') }}</p>
        <p>Status: {{ $order->status }}</p>
        <p>Total: ${{ $order->total }}</p>
        <a href="{{ route('home') }}" class="btn btn-primary">Back to Home</a>
    </div>
</body>
</html>
