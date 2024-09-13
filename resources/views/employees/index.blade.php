@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Karyawan</h1>
    
    <!-- Menampilkan pesan sukses -->
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <!-- Tabel daftar karyawan -->
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <!-- Looping melalui array karyawan -->
            <?php foreach($employees as $employee): ?>
            <tr>
                <td><?= htmlspecialchars($employee['id'], ENT_QUOTES, 'UTF-8') ?></td>
                <td><?= htmlspecialchars($employee['name'], ENT_QUOTES, 'UTF-8') ?></td>
                <td><?= htmlspecialchars($employee['email'], ENT_QUOTES, 'UTF-8') ?></td>
                <td>
                    <!-- Form untuk menghapus karyawan -->
                    <form action="{{ route('employees.destroy', $employee['id']) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus karyawan ini?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
@endsection
