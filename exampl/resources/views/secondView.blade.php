<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page with Blended Background Animation</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            overflow: hidden;
            animation: moveArrowBackground 8s linear infinite;
            background: linear-gradient(90deg, #3498db, #70a1ff, #e74c3c, #2ecc71);
            background-size: 400% 100%;
        }

        .welcome {
            font-family: Arial, sans-serif;
            text-transform: uppercase;
            font-size: 48px;
            color: #fff;
        }

        @keyframes moveArrowBackground {
            0% {
                background-position: 100% 0;
            }
            100% {
                background-position: -100% 0;
            }
        }
    </style>
</head>
<body>
    <div class="welcome">
        Welcome to My Amazing Page!
    </div>
</body>
</html>
