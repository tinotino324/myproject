<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
</head>
<body>
    <h2>Hello {{ $userData['name'] }},</h2>
    <p>Thank you for registering with us.</p>
    <p>Your email: {{ $userData['email'] }}</p>
    <p>Your password: {{ $userData['password'] }}</p>
    <p>We’re happy to have you on board!</p>
</body>
</html>
