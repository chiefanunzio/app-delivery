<?php

use Illuminate\Database\Seeder;
use App\Restaurant;
use App\Category;
class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        

        factory(Restaurant::class, 20)->create() -> each(function($restaurant) {
            $categories = Category::all();
            
            switch ($restaurant['name']) {

                case 'Old Wild West':
                    $restaurant -> categories() -> attach($categories[5]);
                    $restaurant -> categories() -> attach($categories[8]);
                    $restaurant -> save();
                    break;
                
                case 'Cielo':
                    $restaurant -> categories() -> attach($categories[0]);
                    $restaurant -> save();
                    break;

                case 'Sushi San':
                    $restaurant -> categories() -> attach($categories[0]);
                    $restaurant -> categories() -> attach($categories[1]);
                    $restaurant -> save();
                    break;

                case 'Alice Pizza':
                    $restaurant -> categories() -> attach($categories[4]);
                    $restaurant -> categories() -> attach($categories[2]);
                    $restaurant -> save();
                    break;

                case 'Ilios':
                    $restaurant -> categories() -> attach($categories[6]);
                    $restaurant -> categories() -> attach($categories[9]);
                    $restaurant -> save();
                    break;

                case 'Orto Verde Goloso':
                    $restaurant -> categories() -> attach($categories[9]);
                    $restaurant -> save();
                    break;

                case 'Ristorante Cracco':
                    $restaurant -> categories() -> attach($categories[2]);
                    $restaurant -> categories() -> attach($categories[9]);
                    $restaurant -> save();
                    break;

                case 'La Punta Expendio de Agave':
                    $restaurant -> categories() -> attach($categories[3]);
                    $restaurant -> categories() -> attach($categories[5]);
                    $restaurant -> save();
                    break;

                case 'Acropolis':
                    $restaurant -> categories() -> attach($categories[6]);
                    $restaurant -> save();
                    break;

                case 'Saloon Del Panino':
                    $restaurant -> categories() -> attach($categories[5]);
                    $restaurant -> categories() -> attach($categories[8]);
                    $restaurant -> save();
                    break;

                case 'Potter Pizza':
                    $restaurant -> categories() -> attach($categories[4]);
                    $restaurant -> categories() -> attach($categories[2]);
                    $restaurant -> save();
                    break;

                case 'Kamasutra':
                    $restaurant -> categories() -> attach($categories[7]);
                    $restaurant -> save();
                    break;

                case 'El Pueblo':
                    $restaurant -> categories() -> attach($categories[3]);
                    $restaurant -> categories() -> attach($categories[7]);
                    $restaurant -> save();
                    break;

                case 'Verde Pistacchio':
                    $restaurant -> categories() -> attach($categories[2]);
                    $restaurant -> categories() -> attach($categories[9]);
                    $restaurant -> save();
                    break;

                case 'Sakura Sushi':
                    $restaurant -> categories() -> attach($categories[1]);
                    $restaurant -> save();
                    break;

                case 'Villa Crespi':
                    $restaurant -> categories() -> attach($categories[2]);
                    $restaurant -> save();
                    break;

                case "Pork'n roll":
                    $restaurant -> categories() -> attach($categories[4]);
                    $restaurant -> categories() -> attach($categories[5]);
                    $restaurant -> categories() -> attach($categories[8]);
                    $restaurant -> save();
                    break;

                case 'Fantastico':
                    $restaurant -> categories() -> attach($categories[0]);
                    $restaurant -> categories() -> attach($categories[1]);
                    $restaurant -> save();
                    break;

                case 'Taj Mahal':
                    $restaurant -> categories() -> attach($categories[7]);
                    $restaurant -> categories() -> attach($categories[9]);
                    $restaurant -> save();
                    break;

                case 'Ilios':
                    $restaurant -> categories() -> attach($categories[5]);
                    $restaurant -> categories() -> attach($categories[6]);
                    $restaurant -> save();
                    break;

                case 'King Arthur':
                    $restaurant -> categories() -> attach($categories[5]);
                    $restaurant -> categories() -> attach($categories[8]);
                    $restaurant -> save();
                    break;
            }
        });
    }
}
       

        
