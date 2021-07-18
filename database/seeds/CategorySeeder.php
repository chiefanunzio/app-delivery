<?php

use Illuminate\Database\Seeder;
use App\Category;
use App\Restaurant;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories =[
            [
                'name' => 'Cinese',
            ],  
            [
                'name' => 'Giapponese',
            ],
            [
                'name' => 'Italiano',
            ],
            [
                'name' => 'Messicano',
            ],
            [
                'name' => 'Pizzeria',
            ],
            [
                'name' => 'Fast-Food',
            ],
            [
                'name' => 'Greco',
            ],
            [
                'name' => 'Indiano',
            ],
            [
                'name' => 'Paninoteca',
            ],
            [
                'name' => 'Vegetariano',
            ],
        ];
        
        foreach ($categories as $key => $category) {
            DB::table('categories')->insert($category);
        }
    }
}
            
       
            

        

            
                  
            

           


              
            
            


