<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page with Changing Background</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-color: #3498db;
            overflow: hidden;
            animation: changeBackgroundColor 10s linear infinite;
        }

        .welcome {
            font-family: Arial, sans-serif;
            text-transform: uppercase;
            font-size: 48px;
            color: #fff;
            animation: fadeIn 2s ease-in-out;
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
                transform: translateY(-50px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes changeBackgroundColor {
            0% {
                background-color: #3498db;
            }
            50% {
                background-color: #e74c3c;
            }
            100% {
                background-color: #2ecc71;
            }
        }
    </style>
</head>
<body>
    <div class="welcome">
        Welcome to My first Page!
    </div>
</body>
</html>
