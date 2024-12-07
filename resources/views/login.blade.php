<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/logos/favicon.png') }}">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .login-container {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 300px;
            text-align: center;
        }

        h2 {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin: 10px 0 5px;
        }

        input {
            width: 80%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            justify-content: center;
            align-items: center;
        }

        button {
            background-color: #28a745;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 87%;
        }

        button:hover {
            background-color: #218838;
        }

        .error {
            color: red;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login Admin Kajian</h2>
        @if ($errors->has('loginError'))
            <p class="error">{{ $errors->first('loginError') }}</p>
        @endif
        <form action="{{ route('login') }}" method="POST">
            @csrf
            {{-- <label for="username">Username</label> --}}
            <input type="text" id="username" name="username" placeholder="username" required>
            
            {{-- <label for="password">Password</label> --}}
            <input type="password" id="password" name="password" placeholder="password" required>
            
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
