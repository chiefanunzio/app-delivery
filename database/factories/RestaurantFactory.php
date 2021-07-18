<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Restaurant;
use Faker\Generator as Faker;

$autoIncrement = autoIncrement();
$factory->define(Restaurant::class, function (Faker $faker) use ($autoIncrement) {
    $restaurants = [
        [
         'name' => 'Old Wild West',
         'address' => 'via Pulcinella, 21',
         'city' => 'Roma',
         'telephone' => '+393467932251',
         'pIva' => rand(100000000, 999999999),
         'img'  => 'Old Wild West.jpeg',
         'deleted'  => false,
         'user_id' => 2,

        ],
        [
         'name' => 'King Arthur',
         'address' => 'Via Carlo Pirzio Biroli, 119',
         'city' => 'Roma',
         'telephone' => '+393438659751',
         'pIva' => rand(100000000, 999999999),
         'img'  => 'King Arthur.jpeg',
         'deleted'  => false,
         'user_id' => 3,
        ],
        [
         'name' => 'Fantastico',
         'address' => 'Via di Bravetta, 778',
         'city' => 'Milano',
         'telephone' => '+393498375653',
         'pIva' => rand(100000000, 999999999),
         'img'  => 'Fantastico.jpeg',
         'deleted'  => false,
         'user_id' => 3,
        ],
        [
         'name' => 'Cielo',
         'address' => 'Via della Torre Clementina, 154',
         'city' => 'Torino',
         'telephone' => '+393433487623',
         'pIva' => rand(100000000, 999999999),
         'img'  => 'Cielo.jpeg',
         'deleted'  => false,
         'user_id' => 4,
        ],
        [
         'name' => 'El Pueblo',
         'address' => 'Via Giacinto de Vecchi Pieralice, 34',
         'city' => 'Firenze',
         'telephone' => '+393409826574',
         'pIva' => rand(100000000, 999999999),
         'img'  => 'El Pueblo.jpeg',
         'deleted'  => false,
         'user_id' => 4,
        ],
        [
         'name' => 'La Punta Expendio de Agave',
         'address' => 'Via Santa Cecilia, 8',
         'city' => 'Firenze',
         'telephone' => '+393469486756',
         'pIva' => rand(100000000, 999999999),
         'img'  => 'La Punta Expendio de Agave.jpeg',
         'deleted'  => false,
         'user_id' => 1,
        ],
        [
         'name' => 'Ristorante Cracco',
         'address' => 'Corso Vittorio Emanuele II',
         'city' => 'Milano',
         'telephone' => '+3934756473641',
         'pIva' => rand(100000000, 999999999),
         'img'  => 'Ristorante Cracco.jpeg',
         'deleted'  => false,
         'user_id' => 3,
        ],
        [
         'name' => 'Villa Crespi',
         'address' => 'Via F, Via Fulcieri Paulucci de Calboli, 5',
         'city' => 'Novara',
         'telephone' => '+393352346656',
         'pIva' => rand(100000000, 999999999),
         'img'  => 'Villa Crespi.jpeg',
         'deleted'  => false,
         'user_id' => 2,
        ],
        [
         'name' => 'Verde Pistacchio',
         'address' => 'Via Ostiense, 181',
         'city' => 'Roma',
         'telephone' => '+393423396012',
         'pIva' => rand(100000000, 999999999),
         'img'  => 'Verde Pistacchio.jpeg',
         'deleted'  => false,
         'user_id' => 2,
        ],
        [
         'name' => 'Orto Verde Goloso',
         'address' => 'Via Giuseppe Gioachino Belli, 142',
         'city' => 'Genova',
         'telephone' => '+393469454756',
         'pIva' => rand(100000000, 999999999),
         'img'  => 'Orto Verde Goloso.jpeg',
         'deleted'  => false,
         'user_id' => 1,
        ],
        [
         'name' => 'Ilios',
         'address' => 'Via Gabriello Chiabrera, 114/120',
         'city' => 'Napoli',
         'telephone' => '+393469423059',
         'pIva' => rand(100000000, 999999999),
         'img'  => 'Ilios.jpeg',
         'deleted'  => false,
         'user_id' => 4,
        ],
        [
         'name' => 'Acropolis',
         'address' => 'Via di S. Francesco a Ripa, 104',
         'city' => 'Roma',
         'telephone' => '+39394758172',
         'pIva' => rand(100000000, 999999999),
         'img'  => 'Acropolis.jpeg',
         'deleted'  => false,
         'user_id' => 2,
        ],
        [
         'name' => 'Potter Pizza',
         'address' => 'Viale dei Colli Portuensi, 346',
         'city' => 'Colleverde',
         'telephone' => '+393947258172',
         'pIva' => rand(100000000, 999999999),
         'img'  => 'Potter Pizza.jpeg',
         'deleted'  => false,
         'user_id' => 3,
        ],
        [
         'name' => 'Alice Pizza',
         'address' => 'Circonvallazione Gianicolense, 278',
         'city' => 'Potenza',
         'telephone' => '+39334948391',
         'pIva' => rand(100000000, 999999999),
         'img'  => 'Alice Pizza.jpeg',
         'deleted'  => false,
         'user_id' => 4,
        ],
        [
         'name' => 'Sushi San',
         'address' => 'Via Nettunense Km. 22,300',
         'city' => 'Lecco',
         'telephone' => '+39334912391',
         'pIva' => rand(100000000, 999999999),
         'img'  => 'Sushi San.jpeg',
         'deleted'  => false,
         'user_id' => 1,
        ],
        [
         'name' => 'Sakura Sushi',
         'address' => 'Piazza Alessandria, 11',
         'city' => 'Como',
         'telephone' => '+39334386391',
         'pIva' => rand(100000000, 999999999),
         'img'  => 'Sakura Sushi.jpeg',
         'deleted'  => false,
         'user_id' => 2,
        ],
        [
         'name' => 'Kamasutra',
         'address' => 'Piazza Gio Cademartori, 34',
         'city' => 'Venezia',
         'telephone' => '+393343863921',
         'pIva' => rand(100000000, 999999999),
         'img'  => 'Kamasutra.jpeg',
         'deleted'  => false,
         'deleted'  => false,
         'user_id' => 3,
        ],
        [
         'name' => 'Taj Mahal',
         'address' => 'Via Palestro, 6',
         'city' => 'Pordenone',
         'telephone' => '+393343604934',
         'pIva' => rand(100000000, 999999999),
         'img'  => 'Taj Mahal.jpeg',
         'deleted'  => false,
         'user_id' => 1,
        ],
        [
            'name' => 'Saloon Del Panino',
            'address' => 'Via Nunzio, 10',
            'city' => 'Salerno',
            'telephone' => '+393654504934',
            'pIva' => rand(100000000, 999999999),
            'img'  => 'Saloon Del Panino.jpeg',
            'deleted'  => false,
            'user_id' => 1 ,
        ],
        [
         'name' => "Pork'n roll",
         'address' => 'Via Garibalidi, 6',
         'city' => 'Roma',
         'telephone' => '+393309897434',
         'pIva' => rand(100000000, 999999999),
         'img'  => "Pork'n roll.jpeg",
         'deleted'  => false,
         'user_id' => 2,
        ],
    ];
    $autoIncrement -> next();
    $index = $autoIncrement -> current();
    // $index = $faker -> unique() -> numberBetween(0,19);
    $restaurant = $restaurants[$index];
    return [

        'name'=> $restaurant['name'],
        'address'=> $restaurant['address'],
        'city' => $restaurant['city'],
        'telephone'=> $restaurant['telephone'],
        'pIva'=> $restaurant['pIva'],
        'img'=> $restaurant['img'],
        'user_id' => $restaurant['user_id'],
    ];
});
function autoIncrement() {
    for ($i = -1; $i < 20; $i++) {
         yield $i;
     }
}
        
