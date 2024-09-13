<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $siteName }} - {{ $tagline }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <header class="my-4">
            <h1 class="text-center">{{ $siteName }}</h1>
            <p class="text-center">{{ $tagline }}</p>
        </header>
        
        <div class="row">
            <div class="col-12">
                <h2>Artikel Terbaru</h2>
                @foreach($articles as $article)
                    <div class="card mb-3">
                        <div class="card-body">
                            <h3 class="card-title">{{ $article['title'] }}</h3>
                            <p class="card-text">{{ $article['content'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <footer class="text-center my-4">
            <p>Hak Cipta © 2024 {{ $siteName }}. Semua hak dilindungi.</p>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
