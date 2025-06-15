<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Reset Password</title>
</head>
<body>
    <h2>Halo, {{ $name }}</h2>
    <p>Kami menerima permintaan untuk mengatur ulang kata sandi Anda.</p>
    <p>Silakan klik link berikut untuk mengatur ulang kata sandi Anda:</p>
    <p><a href="{{ $resetUrl }}">Reset Password</a></p>
    <p>Jika Anda tidak meminta reset, abaikan email ini.</p>
</body>
</html>