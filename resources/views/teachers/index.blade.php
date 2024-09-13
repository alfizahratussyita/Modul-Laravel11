<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Guru</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1>Daftar Guru (Matematika)</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Mata Pelajaran</th>
                <th>Umur</th>
            </tr>
        </thead>
        <tbody>
            @foreach($teachers as $teacher)
                <tr>
                    <td>{{ $teacher->name }}</td>
                    <td>{{ $teacher->subject }}</td>
                    <td>{{ $teacher->age }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
