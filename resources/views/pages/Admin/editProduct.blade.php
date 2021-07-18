@extends('layouts.main-layout')
@section('content')

<div id="editProduct">   

  <form method="POST" action="{{ route('updateProduct', $product -> id) }}">
    @csrf
    @method('POST')

    <fieldset>
        <legend>Modifica Il Tuo Piatto</legend>

        <label class="" for="name">
            <h4>Nome</h4>
        </label>
        <input type="text" class="" id="name" name="name" value="{{ $product -> name }}">

        <label class="" for="ingredients">
            <h4>Ingredienti</h4>
        </label>
        <input type="text" class="" id="ingredients" name="ingredients" value="{{ $product -> ingredients }}">

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
        <input step=".01" type="number" class="" id="price" name="price" value="{{ $product -> price }}">
        <label class="" for="type">
            <h4>Disponibilità</h4>
        </label>
        <select required name="availability" id="type-food">
            <option selected value="">Scegli il tipo</option>
            <option value="1">Disponibile</option>
            <option value="0">Non Disponibile</option>
        </select>
            
        <label class="" for="description">
            <h4>Descrizione</h4>
        </label>
        <textarea id="description" name="description" id="" cols="30" rows="10">{{ $product -> description }}</textarea >
        <div>
            <button type="submit" class="">Aggiorna</button>
        </div>
    </fieldset>
  </form>
</div>     
@endsection   
           












          
      
        
