@extends('layouts.main-layout')
@section('content')
<div id="createProduct">


    <form method="POST" action="{{ route('storeProduct', $restaurant -> id) }}">
        @csrf
        @method('POST')

        <fieldset>
            <legend>Nuovo Piatto</legend>

            <label class="" for="name">
                <h4>Nome</h4>
            </label>
            <input type="hidden" name="availability" value='1'>
            <input required type="text" class="" id="name" name="name">

            <label class="" for="ingredients">
                <h4>Ingredienti</h4>
            </label>
            <input required type="text" class="" id="ingredients" name="ingredients">

            <label class="" for="type">
                <h4>Tipo di piatto</h4>
            </label>
            <select required name="type" id="type-food">         
                <option selected value="">Scegli il tipo</option>         
                <option value="Antipasto">Antipasto</option>
                <option value="Primo">Primo</option>   
                <option value="Secondo">Secondo</option>
                <option value="Dolce">Dolce</option>
            </select>   

            <label class="" for="price">
                <h4>Prezzo</h4>
            </label>
            <input required step=".01" type="number" class="" id="price" name="price">

            <label class="" for="description">
                <h4>Descrizione</h4>
            </label>
            <textarea id="description" name="description" id="" cols="30" rows="10"></textarea>

            <button type="submit" class="">AGGIUNGI</button>

        </fieldset>   
    </form>

</div>   
@endsection