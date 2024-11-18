<!-- @extends('layouts.app')

@section('content')
<div class="login-page">
    <div class="login-box">
        <h2>Login</h2>
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="form-group">
                <input type="text" name="username" placeholder="Username" required>
                <span class="icon">👤</span>
            </div>
            <div class="form-group">
                <input type="password" name="password" placeholder="Password" required>
                <span class="icon">🔒</span>
            </div>
            <div class="options">
                <label>
                    <input type="checkbox" name="remember"> Remember me
                </label>
                <a href="#">Forgot password?</a>
            </div>
            <button type="submit" class="btn-login">Login</button>
            <p>Don't have an account? <a href="#">Register</a></p>
        </form>
    </div>
</div>
@endsection

login.blade.php: Login page styled with a custom background. -->