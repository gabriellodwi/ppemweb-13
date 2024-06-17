<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <article class="container">
        <h1>Welcome to the Dashboard</h1>
        <div>
            <button class="btn" onclick="window.location.href='{{ route('login') }}'">Login</button>
            <button class="btn" onclick="window.location.href='{{ route('register') }}'">Register</button>
        </div>
    </article>
</body>
</html>
