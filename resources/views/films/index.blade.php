<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Film</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="my-4">Film</h1>

        @isset($films)
            <!-- Menampilkan daftar film -->
            <table class="table">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Director</th>
                        <th>Release Date</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($films as $film)
                        <tr>
                            <td>{{ $film['title'] }}</td>
                            <td>{{ $film['director'] }}</td>
                            <td>{{ $film['release_date'] }}</td>
                            <td>
                                <a href="{{ route('films.show', $film['id']) }}" class="btn btn-info">Detail</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endisset

        @isset($film)
            <!-- Menampilkan detail film -->
            <div>
                <h2>{{ $film['title'] }}</h2>
                <p><strong>Director:</strong> {{ $film['director'] }}</p>
                <p><strong>Release Date:</strong> {{ $film['release_date'] }}</p>
                <a href="{{ route('films.index') }}" class="btn btn-primary">Kembali</a>
            </div>
        @endisset
    </div>
</body>
</html>
