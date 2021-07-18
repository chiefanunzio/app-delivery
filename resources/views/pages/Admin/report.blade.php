@extends('layouts.main-layout')
@section('content')

<main id="report">


    <section class="jumbotron">
        <h1>{{ $restaurant -> name }}</h1>

        <div>
            @foreach($restaurant -> categories as $category)
                <span> {{ $category -> name }} </span>
            @endforeach
        </div>

        <div>
            <p>{{ $restaurant -> address }}</p>
        </div>
    </section>

    <div class="container-menu">

        <div class="products-box">

            <ul class="info">
                <li>
                    <i class="fas fa-file-signature"></i>
                    <span> {{ $restaurant -> name }}</span>
                </li>

                <li>
                    <i class="fas fa-map-marker"></i>
                    <span>{{ $restaurant -> address }}</span>
                </li>

                <li>
                    <i class="fas fa-city"></i>
                    <span>{{ $restaurant -> city }}</span>
                </li>

                <li>
                    <i class="fas fa-phone-alt"></i>
                    <span>{{ $restaurant -> telephone }}</span>
                </li>

                <li>
                    <i class="far fa-id-card"></i>
                    <span>{{ $restaurant -> pIva }}</span>
                </li>
            </ul>

            <div>

                <div>
                    <button>
                        <a href="{{ route('myProduct' , encrypt($restaurant -> id)) }}">
                            Torna al Menu
                        </a>
                    </button>
                </div>

                <ul class="products">

                    @foreach($orders  as $order)
                        <li class="product-box">   

   
                            <div>
                                <h3> Nome Cliente: <span>{{ $order -> name }}</span></h3>
                            </div>

                            <div>

                                <h3>Indirizzo: <span>{{ $order -> address }}</span></h3>
                            </div>
                            <div>

                                <h3>Email: <span>{{ $order -> email }}</span></h3>
                            </div>

                            <div>

                                <h3>Ordine creato: <span>{{ $order -> created_at }}</span></h3>
                            </div>
                            <div>

                                <h3>Totale: <span>€ {{ $order -> amount }}</span></h3>
                            </div>

                        </li>
                    @endforeach

                </ul>
            </div>

        </div>
    </div>

</main>
@endsection
