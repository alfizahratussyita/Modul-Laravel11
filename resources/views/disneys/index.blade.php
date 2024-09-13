<!DOCTYPE html>
<html>
<head>
    <title>Disney Characters</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="mt-4">Disney Characters</h1>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Character Name</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($characters as $character)
                    <tr>
                        <td>{{ $character->id }}</td>
                        <td>{{ $character->character_name }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
