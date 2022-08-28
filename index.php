<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>A random lucky number</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            display: flex;
            width: 100%;
            height: 100vh;
            align-items: center;
            justify-content: center;
            font-family: Arial, sans-serif;
        }
    </style>
</head>
<body>
<h1>Your random lucky number is: <?= rand(); ?></h1>
</body>
</html>