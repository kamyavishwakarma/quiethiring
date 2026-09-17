<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>
        @yield('title', 'Quiet Hiring')
    </title>

    <meta name="description"
          content="@yield('description', 'Find your dream job with Quiet Hiring.')">

    <!-- Bootstrap -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Custom CSS -->
    @vite([
    'resources/css/app.css',
    'resources/css/companies.css',
     'resources/css/freshers.css',
      'resources/css/internships.css',
      'resources/css/internship-details.css',
    'resources/js/app.js',
    'resources/css/about.css',

])

    @stack('styles')
</head>

<body>

    @include('components.navbar')

    <main>
        @yield('content')
    </main>

    @include('components.footer')

    <!-- Bootstrap JS -->
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
    </script>

    @stack('scripts')

</body>

</html>