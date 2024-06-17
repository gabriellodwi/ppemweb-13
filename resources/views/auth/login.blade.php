<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <article class="container">
        <h1>Login</h1>
        @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="POST" action="{{ route('login') }}" class="styled-form">
            @csrf
            <div>
                <label>Email:</label>
                <input type="email" name="email" value="{{ old('email') }}" required>
            </div>
            <div>
                <label>Password:</label>
                <input type="password" name="password" required>
            </div>
            <button type="submit">Login</button>
        </form>
        <button class="btn" onclick="window.location.href='{{ route('dashboard') }}'">Back to Dashboard</button>
        <p style="margin-top:30px;">Don't have an account? <a style="font-weight:bold;" href="{{ route('register') }}">Regist now</a></p>
    </article>
</body>
</html>
