<!DOCTYPE html>
<html>
<head>
    <style>
        /* Your existing styles here */

        /* New style for success message and link */
        .success-message {
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            text-align: center;
            margin-top: 20px;
        }

        .success-message a {
            color: #ffffff;
            text-decoration: none;
            font-weight: bold;
            margin-left: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Login</h2>

    </div>

    @if (auth()->check())
        <div class="success-message">
            You have successfully logged in as {{ auth()->user()->name }}
            <a href="{{ route('bikes.index') }}">Go to Main Site</a>
        </div>
    @endif
</body>
</html>

