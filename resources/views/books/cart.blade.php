@extends('layouts.layout2')
 
@section('titolo', 'Lista dei Libri')
 
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Il Tuo Carrello</title>
    <style>
     body{
        background-color: #366b6b;
     }
        header {
            background-color: #414141;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        .cart-container {
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .cart-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #ddd;
            padding: 10px 0;
            margin-bottom: 10px;
        }

        .cart-item-details {
            flex-grow: 1;
        }

        .cart-total {
            text-align: right;
            font-weight: bold;
            margin-top: 20px;
        }

        .checkout-btn {
            background-color: #4caf50;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .checkout-btn:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <header>
        <h1>Il Tuo Carrello</h1>
    </header>

  
        <div class="cart-item">
          
             <div class="cart-item-details">
                 <!----prodotto --->
                </div>
                    <div class="cart-item-actions">
                          <button>Aggiorna</button>
                          <button>Rimuovi</button>
                </div>
        </div>
        

        <div class="cart-item">
      
            <div class="cart-item-details">
                
                <!----prodotto --->

            </div>

            <div class="cart-item-actions">
                <button>Aggiorna</button>
                <button>Rimuovi</button>
            </div>
        </div>

        <div class="cart-total">
            Totale: $49.98
        </div>

        <button class="checkout-btn">Procedi al Checkout</button>

    
</body>
@endsection