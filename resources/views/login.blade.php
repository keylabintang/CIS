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
</head>


<body>
    <!-- partial:index.partial.html -->
    <div class="screen-1">
        <img src="{{ asset('assets_admin/img/logo/cis-2.png') }}" alt="Logo" class="logo-image">
        <style>
            .logo-image {
                width: 300px;
                height: auto;
                justify-content: center;
            }
        </style>
        <br>
        <div class="email">
            <form action="/login" method="POST">
                @csrf
                <label for="email">Email Address</label>
                <div class="sec-2">
                    <ion-icon name="mail-outline"></ion-icon>
                    <input type="email" name="email">
                </div>
        </div>
        <div class="password">
            <label for="password">Password</label>
            <div class="sec-2">
                <ion-icon name="lock-closed-outline"></ion-icon>
                <input class="pas" type="password" name="password">
            </div>
        </div>
        <button class="login">Login</button>
        </form>
    </div>
    <!-- partial -->
</body>


</html>

