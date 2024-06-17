<!DOCTYPE html>
<html>
<head>
    <title>Users Table</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <h1>Users Table</h1>
    @if (session('success'))
        <div>{{ session('success') }}</div>
    @endif
    <article class="container">
        <table class="table-style">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Date of Birth</th>
                    <th>Age</th>
                    <th>Address</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->date_of_birth }}</td>
                        <td>{{ $user->age }}</td>
                        <td>{{ $user->address }}</td>
                        <td>
                            <button class="btn-edit" onclick="window.location.href='{{ route('editUser', $user->id) }}'">Edit</button>
                            <form method="POST" action="{{ route('deleteUser', $user->id) }}" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button class="btn-delete" type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div>
            <button class="btn" onclick="window.location.href='{{ route('createUser') }}'">Add New User</button>
            <button class="btn" onclick="window.location.href='{{ route('home') }}'">Back to Home</button>
        </div>
    </article>
</body>
</html>
