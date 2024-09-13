<!DOCTYPE html>
<html>
<head>
    <title>Music List</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Music List</h1>
        @include('music.list', ['musics' => $musics])
    </div>
</body>
</html>
