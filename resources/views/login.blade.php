<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet'
        href='https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap'>
    <link rel="stylesheet" href="{{ asset('assets_login/style.css') }}">
    <style>
        .logo-image {
            width: 300px;
            height: auto;
            display: block;
            margin-bottom: 25px; /* Center the logo */
        }
        .alert {
            margin-bottom: 50px;
            padding: 10px;
            background-color: #f8d7da;
            border: 1px solid #f5c6cb;
            color: #721c24;
            border-radius: 4px;
        }
        .alert ul {
            margin: 0;
            padding-left: 20px;
        }
        .email,
        .password {
            margin-bottom: 0px;
        }
        .sec-2 {
            display: flex;
            align-items: center;
            margin-top: 5px;
        }
        .sec-2 ion-icon {
            margin-right: 10px;
        }
        .login {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
            border-radius: 4px;
            font-size: 16px;
            text-align: center;
        }
        .login:hover {
            background-color: #0056b3;
        }
        .back-button {
    display: inline-block;
    width: 100%;
    padding: 10px;
    background-color: #6c757d;
    color: #fff;
    border: none;
    border-radius: 4px;
    font-size: 16px;
    text-align: center;
    cursor: pointer;
    text-decoration: none;
    margin-top: 10px;
}

.back-button a {
    color: #fff;
    text-decoration: none;
}
    
.back-button:hover {
    background-color: #5a6268;
}

.back-button:focus {
    outline: none;
}
        
    </style>
</head>

<body>
    <!-- partial:index.partial.html -->
    <div class="screen-1">
        <img src="{{ asset('assets_admin/img/logo/cis-2.png') }}" alt="Logo" class="logo-image">
        @if ($errors->any())
        <div class="alert">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <div class="email">
            <form action="/login" method="POST">
                @csrf
                <label for="email">Email Address</label>
                <div class="sec-2">
                    <ion-icon name="mail-outline"></ion-icon>
                    <input type="email" name="email" required>
                </div>
        </div>
        <div class="password">
            <label for="password">Password</label>
            <div class="sec-2">
                <ion-icon name="lock-closed-outline"></ion-icon>
                <input class="pas" type="password" name="password" required>
            </div>
        </div>
        <button type="submit" class="login">Login</button>
        <button class="back-button">
            <a href="{{ url('/') }}">Kembali</a>
        </button>
        </form>
    </div>
    <!-- partial -->
</body>

</html>
