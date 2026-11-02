<!DOCTYPE html>
<html lang="id">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Volt - Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Partial CSS -->
    @include('layouts.admin.css')
</head>

<body>
    <!-- Partial Sidebar -->
    @include('layouts.admin.sidebar')

    <main class="content">
        <!-- Partial Header -->
        @include('layouts.admin.header')

        <!-- Bagian Konten Utama -->
        @yield('content')

        <!-- Partial Footer -->
        @include('layouts.admin.footer')
    </main>

    <!-- Partial JS -->
    @include('layouts.admin.js')
</body>

</html>
