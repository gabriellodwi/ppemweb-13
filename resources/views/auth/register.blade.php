<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <article class="container">
        <h1>Register</h1>
        @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="POST" action="{{ route('register') }}" class="styled-form">
            @csrf
            <div>
                <label>Name:</label>
                <input type="text" name="name" value="{{ old('name') }}" required>
            </div>
            <div>
                <label>Email:</label>
                <input type="email" name="email" value="{{ old('email') }}" required>
            </div>
            <div>
                <label>Password:</label>
                <input type="password" name="password" required>
            </div>
            <div>
                <label>Confirm Password:</label>
                <input type="password" name="password_confirmation" required>
            </div>
            <button type="submit">Register</button>
        </form>
        <button class="btn" onclick="window.location.href='{{ route('dashboard') }}'">Back to Dashboard</button>
        <p style="margin-top:30px;">Already have an account? <a style="font-weight:bold;" href="{{ route('login') }}">Login here</a></p>
    </article>
</body>
</html>
