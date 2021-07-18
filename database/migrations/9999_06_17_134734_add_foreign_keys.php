<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('category_restaurant', function (Blueprint $table) {
            $table->foreign('category_id' , 'categoryRestaurant')
                    ->references('id')
                    ->on('categories');

            $table->foreign('restaurant_id' , 'restaurantCategory')
                ->references('id')
                ->on('restaurants');
        });

        Schema::table('order_product', function (Blueprint $table) {
            $table->foreign('order_id' , 'orderProduct')
                    ->references('id')
                    ->on('orders');

            $table->foreign('product_id' , 'productOrder')
                ->references('id')
                ->on('products')
                ->onDelete('cascade');
        });

        Schema::table('products', function (Blueprint $table) {
            $table->foreign('restaurant_id' , 'restaurantProduct')
                  ->references('id')
                  ->on('restaurants');
        });

        Schema::table('restaurants', function (Blueprint $table) {
            $table->foreign('user_id' , 'userRestaurant')
                  ->references('id')
                  ->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('category_restaurant', function (Blueprint $table) {
            $table->dropforeign('categoryRestaurant');
                    
            $table->dropforeign('restaurantCategory');
        });
                
        Schema::table('order_product', function (Blueprint $table) {
            $table->dropforeign('orderProduct');
                    
            $table->dropforeign('productOrder');
        });
                    
        Schema::table('products', function (Blueprint $table) {
            $table->dropforeign('restaurantProduct');
        });
                  
        Schema::table('restaurants', function (Blueprint $table) {
            $table->dropforeign('userRestaurant');
        });
    }
}
                  

                  
                  
                
                    



                
                

