<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Songs</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <form action="{{ route('songs.search') }}" method="GET" class="mb-4">
            <div class="form-group">
                <input type="text" name="query" class="form-control" placeholder="Search for songs">
            </div>
            <button type="submit" class="btn btn-primary">Search</button>
        </form>

        @if(empty($songs))
            <p>No songs found.</p>
        @else
            <ul class="list-group">
                @foreach($songs as $song)
                    <li class="list-group-item">{{ $song['title'] }} by {{ $song['artist'] }}</li>
                @endforeach
            </ul>
        @endif
    </div>
</body>
</html>
