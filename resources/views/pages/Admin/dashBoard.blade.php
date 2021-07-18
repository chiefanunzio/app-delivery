@extends('layouts.main-layout')
@section('content')
<main id="dashboard">


    <section class="welcome">
        <h1>Bentornato, {{ $user->name }}</h1>
    </section>

    <nav class="navbar nav">
        <ul>
            <li>
                <a class="buttonActive" id ="restaurants" onclick="getRestaurant()" href="#">   
                    <h4>Ristoranti</h4>   
                    <i class="fas fa-utensils"></i>
                </a>
            </li>
            <li>
                <a id="section" onclick="getForm()" href="#">
                    <h4>Nuovo </h4>
                    <i class="far fa-plus-square"></i>
                </a>
            </li>

        </ul>
    </nav>

    <section  id="restaurantSection" class="my-restaurants">
        <h3>I tuoi ristoranti</h3>
        <ul>
            @foreach($user -> restaurants as $restaurant)
                @if(!$restaurant -> deleted)
                    <li>
                        <div>

                            <h3><a
                                    href="{{ route('myProduct' , encrypt($restaurant -> id)) }}">{{ $restaurant -> name }}</a>
                            </h3>
                            <button>Modifica</button>
                            <div class="modifica">
                                <a
                                    href="{{ route('deleteRestaurant', $restaurant -> id) }}">delete</a>
                                <a
                                    href="{{ route('editRestaurant' , encrypt($restaurant -> id)) }}">edit</a>
                            </div>

                        </div>

                        <div>
                            
                            <a href="{{ route('myProduct' , encrypt($restaurant -> id)) }}">
                                <img src="{{ asset('storage/restaurant-img/' . $restaurant -> img) }}"
                                    alt="">
                            </a>
                                
                        </div>
                    </li>
                @endif
            @endforeach
        </ul>
    </section>


    <section id="createSection" class="create" style="display: none;">
          <h2>Hai una nuova attività?</h2>
      
          <form method="POST" action="{{ route('storeRestaurant') }}" enctype="multipart/form-data">
    @csrf
    @method('POST')
    <fieldset>
        <legend>Aggiungi ristorante</legend>
        <div>
            <label class="" for="name">
                <h4>Nome Ristorante</h4>
            </label>
            <input type="text" class="" id="name" name="name" placeholder="Inserisci il nome..">
        </div>

        <div>
            <label class="" for="city">
                <h4>Città</h4>
            </label>
            <input type="text" class="" id="città" name="city" placeholder="Inserisci la città..">
        </div>

        <div>
            <label class="" for="address">
                <h4>Indirizzo</h4>
            </label>
            <input type="text" class="" id="address" name="address" placeholder="Inserisci l'indirizzo..">
        </div>

        <div>
            <label class="" for="telephone">
                <h4>Recapito telefonico</h4>
            </label>
            <input type="number" class="" id="telephone" name="telephone" placeholder="Inserisci il numero..">
        </div>

        <div>
            <label class="" for="pIva">
                <h4>Partita Iva</h4>
            </label>
            <input type="text" class="" id="pIva" name="pIva" placeholder="Inserisci la partita Iva..">
        </div>

        <div class="myfile">
            <label class="" for="img">
                <h4>Immagine del tuo ristorante</h4>
            </label>
            <input id="my-file" type="file" name="img" style="display: none" style="position: absolute">
            <a id="myfilebutton" onclick="document.getElementById('my-file').click()" style="display: block">Scegli qui
                il tuo file</a>
        </div>

        <ul>
            @foreach($categories as $category)
                <li>
                    <input type="checkbox" name="categories[]" value="{{ $category -> id }}">
                    <label for="category">{{ $category->name }}</label>
                </li>
            @endforeach
        </ul>

        <div class="button">
            <button type="submit">
                Aggiungi
            </button>
        </div>
    </fieldset>
    </form>
    </section>

</main>

@endsection

<script>
    
    function getRestaurant() {
        var restaurantSection = document.getElementById('restaurantSection');
        var createSection = document.getElementById('createSection');
        var restaurantButton = document.getElementById('restaurants');
        var sectionButton = document.getElementById('section');
        restaurantButton.classList.add('buttonActive');
        sectionButton.classList.remove('buttonActive');

        createSection.style.display='none';
        restaurantSection.style.display='block';
    }

    function getForm() {
        var restaurantSection = document.getElementById('restaurantSection');
        var createSection = document.getElementById('createSection');
        var sectionButton = document.getElementById('section');
        var restaurantButton = document.getElementById('restaurants');
        sectionButton.classList.add('buttonActive');
        restaurantButton.classList.remove('buttonActive');
        

        createSection.style.display='block';
        restaurantSection.style.display='none';
    }
    
    
</script>


    
