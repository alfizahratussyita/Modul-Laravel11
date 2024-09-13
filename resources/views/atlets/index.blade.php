<!DOCTYPE html>
<html>
<head>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Daftar Nama Atlet</h2>
        <ul class="list-group">
            @foreach($atletNames as $name)
                <li class="list-group-item">{{ $name }}</li>
            @endforeach
        </ul>
    </div>
</body>
</html>
