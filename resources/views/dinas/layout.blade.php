<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .sidebar {
            min-height: 100vh;
            background-color: #ff8c00;
            padding-top: 20px;
            color: white;
        }
        .sidebar a {
            color: white;
            text-decoration: none;
            display: block;
            padding: 10px;
            margin-bottom: 5px;
        }
        .sidebar a:hover {
            background-color: rgba(255,255,255,0.2);
            border-radius: 5px;
        }
    </style>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <div class="col-md-2 sidebar">
            <h4 class="px-3">Menu</h4>
            <a href="{{ url('/dashboard') }}"><i class="bi bi-house-door"></i> Dashboard</a>
            <a href="{{ url('/dinas/karyawan') }}">Karyawan</a>
            <a href="{{ url('/dinas/atasan') }}">Atasan</a>
            <a href="{{ url('/dinas/hrd') }}">HRD</a>
            <a href="{{ url('/dinas/keuangan') }}">Keuangan</a>
        </div>

        <!-- Konten -->
        <div class="col-md-10 p-4">
            @yield('content')
        </div>
    </div>
</div>
</body>
</html>
