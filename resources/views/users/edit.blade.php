<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <h1 >Edit User</h1>
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
        <form class="styled-form" action="{{ route('updateUser', $user->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div>
                <label>Name:</label>
                <input type="text" name="name" value="{{ $user->name }}">
            </div>
            <div>
                <label>Email:</label>
                <input type="email" name="email" value="{{ $user->email }}">
            </div>
            <div>
                <label>Date of Birth:</label>
                <input type="date" name="date_of_birth" value="{{ $user->date_of_birth }}">
            </div>
            <div>
                <label>Age:</label>
                <input type="number" name="age" value="{{ $user->age }}">
            </div>
            <div>
                <label>Address:</label>
                <input type="text" name="address" value="{{ $user->address }}">
            </div>
            <button type="submit">Submit</button>
        </form>
    </article>
    
    <footer>
        <button class="btn" onclick="window.location.href='{{ route('viewTable') }}'">Back to Users Table</button>
    </footer>
</body>
</html>
