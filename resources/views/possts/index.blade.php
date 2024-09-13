<!DOCTYPE html>
<html>
<head>
    <title>Posts</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>{{ $post['title'] }}</h1>
        <p>{{ Str::limit($post['content'], 100) }}</p> <!-- Memotong konten hingga 100 karakter -->
    </div>
</body>
</html>
