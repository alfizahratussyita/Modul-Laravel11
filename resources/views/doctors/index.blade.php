<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctors and Appointments</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Doctors and Appointments</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Doctor Name</th>
                    <th>Specialty</th>
                    <th>Appointment Date</th>
                    <th>Patient Name</th>
                </tr>
            </thead>
            <tbody>
                @foreach($doctors as $doctor)
                    <tr>
                        <td>{{ $doctor->doctor_name }}</td>
                        <td>{{ $doctor->specialty }}</td>
                        <td>{{ $doctor->appointment_date }}</td>
                        <td>{{ $doctor->patient_name }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
