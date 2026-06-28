<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <title>Email Verification</title>
    </head>

    <body>
        <h2>ASEAN Hub</h2>
        <p>Hello {{ $name }},</p>
        <p>Thank you for registering for the<strong>ASEAN Hub International Design Competition.</strong></p>

        <p>Your One-Time Password (OTP) is:</p>
        <h1>{{ $otp }}</h1>

        <p>This OTP is valid for <strong>5 minutes</strong>.</p>
        <p>If you did not request this verification, please ignore this email.</p>

        <br>
        <p>Regards,<br>ASEAN Hub Team</p>
    </body>

</html>
