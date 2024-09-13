<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aggregates Pembeli</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Data Pembeli</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Metode</th>
                    <th>Nilai</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Total Pembelian</td>
                    <td>{{ number_format($totalPembelian, 2) }}</td>
                </tr>
                <tr>
                    <td>Rata-Rata Pembelian</td>
                    <td>{{ number_format($rataRataPembelian, 2) }}</td>
                </tr>
                <tr>
                    <td>Maksimum Pembelian</td>
                    <td>{{ number_format($maksimumPembelian, 2) }}</td>
                </tr>
                <tr>
                    <td>Minimum Pembelian</td>
                    <td>{{ number_format($minimumPembelian, 2) }}</td>
                </tr>
            </tbody>
        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
