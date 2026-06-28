<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>ASEAN Hub - Email Verification</title>

        <style>
            body {
                margin: 0;
                padding: 40px 0;
                background: #f5f5f5;
                font-family: Arial, Helvetica, sans-serif;
            }

            .container {
                width: 600px;
                margin: auto;
                background: #ffffff;
                border-radius: 8px;
                padding: 40px;
                box-sizing: border-box;
                text-align: center;
            }

            h1 {
                margin: 0;
                font-size: 40px;
                color: #000;
            }

            p {
                color: #000;
                font-size: 16px;
                line-height: 1.8;
            }

            .otp-box {
                margin: 35px 0;
                padding: 20px;
                background: #f8f9fa;
                border: 1px solid #dddddd;
                border-radius: 6px;
            }

            .otp-code {
                font-size: 42px;
                font-weight: bold;
                letter-spacing: 10px;
                color: #000;
            }

            .footer {
                margin-top: 40px;
                padding-top: 25px;
                border-top: 1px solid #dddddd;
                font-size: 14px;
                color: #000;
            }

            .copyright {
                margin-top: 15px;
                font-size: 14px;
                color: #000;
            }
        </style>
    </head>

    <body>
        <div class="container">

            <h1>ASEAN Hub International Design Competition</h1>
            <p>
                Thank you for registering your account.
                Please use the verification code below
                to verify your email address.
            </p>

            <div class="otp-box">
                <div class="otp-code">
                    {{ $user->otp_code }}
                </div>
            </div>

            <p>
                This verification code will expire in
                <strong>5 minutes.</strong>
            </p>

            <div class="footer">
                If you did not create this account, you can safely ignore this email.
                <div class="copyright">
                    © {{ date('Y') }} ASEAN Hub International Design Competition.All Rights Reserved.
                </div>
            </div>

        </div>
    </body>

</html>
