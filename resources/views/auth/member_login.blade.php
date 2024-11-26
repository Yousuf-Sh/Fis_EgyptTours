<!-- resources/views/auth/login.blade.php -->

<form method="POST" action="{{ route('member.authenticate') }}">
    @csrf

    <label for="email">Email:</label>
    <input type="email" name="email" required>

    <label for="password">Password:</label>
    <input type="password" name="password" required>

    <button type="submit">Login</button>
</form>

@if(session('error'))
    <p>{{ session('error') }}</p>
@endif
