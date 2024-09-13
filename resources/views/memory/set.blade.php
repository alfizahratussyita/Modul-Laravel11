<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Set Memory</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <h1>Set Memory</h1>
    <p>Item telah disimpan dalam memori. <a href="{{ route('memory.delete') }}" class="btn btn-danger">Hapus Item dari Memori</a></p>
</div>
</body>
</html>
