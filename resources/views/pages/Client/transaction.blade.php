@extends('layouts.main-layout')
@section('content')
    <main id="transaction" >
        
        <div>
            <h2>LA TUA TRANSAZIONE É ANDATA A BUON FINE</h2>
            
            <h3>id transazione : {{$transaction}}</h3>

            <h3>Controlla tutti i dettagli  dell'ordine nell'email di conferma che ti abbiamo inviato</h3>

            <h2>IL TUO ORDINE É IN PREPARAZIONE</h2>
        </div>       
    </main>     
    <script>
        setTimeout(function () {
   window.location.href= '{{route("homepage")}}'; // the redirect goes here

},5000); // 5 seconds
</script>    
@endsection            