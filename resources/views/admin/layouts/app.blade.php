<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <title>Mopal Admin</title>

    @vite([
        'resources/css/app.css',
        'resources/js/app.js'
    ])

</head>

<body>

<div class="container py-5">

    <nav class="navbar navbar-dark bg-dark mb-5">

<div class="container">

<a
class="navbar-brand"
href="{{ route('admin.dashboard') }}">

Mopal Admin

</a>

<div>

<a
href="{{ route('admin.contacts') }}"
class="btn btn-warning">

Contacts

</a>

</div>

</div>

</nav>

    @yield('content')

</div>

</body>

</html>