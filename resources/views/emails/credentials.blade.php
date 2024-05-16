<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Credentials</title>
</head>
<body>
    <h1>Welcome {{ $name }}!</h1>
    <p>You have been registered as an artist. Here are your account login details:</p>
    <ul>
        <li>Email: {{ $email }}</li>
        <li>Password: {{ $password }}</li>
    </ul>
    <p>Please make sure to change your password upon your first login for security reasons.</p>
</body>
</html>
