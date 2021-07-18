<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        div {
            position: relative;
        }
        img {
            height: 100vh;
            width: 100%;
        }
        h1 {
            color: white;
            position: absolute;
            transform: translate(-50% , -50%);
            top: 80%;
            left: 52%;
            font-size: 50px;
        }
    </style>
</head>
<body>
    <div>
        <img src="{{ asset('/storage/img/lord.jpg') }}" alt="">
        <h1>Sainato . . .Unisciti alla compagnia dell'anello </h1>
   </div>
</body>
</html>
