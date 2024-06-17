<!DOCTYPE html>
<html>
<head>
    <title>Add New User</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <h1>Add New User</h1>
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <article class="container">
        <form class="styled-form" action="{{ route('storeUser') }}" method="POST">
            @csrf
            <div>
                <label>Name:</label>
                <input type="text" name="name" value="{{ old('name') }}">
            </div>
            <div>
                <label>Email:</label>
                <input type="email" name="email" value="{{ old('email') }}">
            </div>
            <div>
                <label>Password:</label>
                <input type="password" name="password">
            </div>
            <button type="submit">Submit</button>
        </form>
        <div>
            <button class="btn" onclick="window.location.href='{{ route('viewTable') }}'">Back to Users Table</button>
            <button class="btn" onclick="window.location.href='{{ route('home') }}'">Back to Home</button>
        </div>
        </article>
</body>
</html>
