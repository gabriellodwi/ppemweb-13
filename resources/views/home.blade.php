<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <article class="container">
        <h1>Welcome to User Management</h1>
        <p></p>
        <div>
            <button class="btn" onclick="window.location.href='{{ route('viewTable') }}'">View Users Table</button>
            <button class="btn" onclick="window.location.href='{{ route('createUser') }}'">Add New User</button>
        </div>   
    </article>
    <div style="margin-top:20px;">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="btn-delete" type="submit">Logout</button>
            </form>
    </div> 
</body>
</html>
