<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Full View Gambar</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f9f9f9;
        }

        img {
            max-width: 100%;
            max-height: 100%;
            border-radius: 8px;
        }
    </style>
</head>
<body>
    <img src="{{ $gambar }}" alt="Full Gambar">
</body>
</html>
