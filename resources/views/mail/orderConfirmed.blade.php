<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Order Confirmed</title>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Baloo 2' , cursive;
            font-size: 20px;
        }
        .container {
            width: 50%;
            margin: auto;
            background-color: #dadef5;
            padding: 30px 50px;
            color: #25385f;
            border-radius: 10px;
        }

        #first {
            list-style-type: none;
        }

        @media (max-width: 998px){
            
            .container {
                width: 100%;
            }
            
        }

    </style>
</head>
<body>

    <div class="container">
        <h1>Riepilogo dell'ordine:</h1>
        <ul id="first">
            <li><h3>Nome:</h3> {{$order -> name}} {{$order -> lastname}}</li>
            <li><h3>Indirizzo :</h3> {{$order -> address}}</li>
            <li><h3>Metodo di Pagamento :</h3> Visa **** **** **** 4242</li>
            <li><h3>Dettagli dell'ordine :</h3>       

                <ul>
                    @foreach ($order -> products as $product)
                    <li>
                        {{$product -> name}} <span style="margin-left:30px">€ {{$product -> price}}</span>
                    </li>
                    @endforeach
                </ul>
                
            </li>
        </ul>
        <h3> Totale : € {{$order -> amount}}</h3>
        
        <p>Grazie e buona giornata</p>
    </div>
</body>
</html>
                
                
            