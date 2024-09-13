<!DOCTYPE html>
<html>
<head>
    <title>Event 17 Agustus</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Event 17 Agustus</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama Barang</th>
                <th>Anggaran</th>
                <th>Jumlah Terpakai</th>
                <th>Sisa Anggaran (Raw Expression)</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
                <tr>
                    <td>{{ $project->name }}</td>
                    <td>{{ $project->budget }}</td>
                    <td>{{ $project->spent }}</td>
                    <td>{{ $project->remaining_budget }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
