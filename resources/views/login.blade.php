<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Masuk Aplikasi Surat Menyurat </title>
</head>
<body>
    <div class="container">
        @if (session()->has('loginError'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('loginError') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <form action="/login" method="POST" class="login-email">
            @csrf
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Aplikasi dan Arsip Surat Keluar</p>
            <div class="input-group">
                <input type="text" class="form-control @error('email') is invalid @enderror" placeholder="email" autofocus name="email" id="email" value="{{ old('email') }}" required>
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" name="password" id="password" value=""
                    required>
            </div>
            <div class="input-group">
                <button name="submit" class="btn">Masuk</button>
            </div>
        </form>
    </div>
</body>
</html>
