<template>
     <section id="categories">
          <div class="container">
               <div class="wave"></div>
          </div>
          
          <h2>Cosa vuoi mangiare?</h2>
          <input v-if="typeOfFoods.length == 0 " class="searchbar" v-model="restaurantInput" @keyup="filter()" text="" placeholder="Inserisci nome ristorante. . .">
          <ul v-if="restaurantInput == '' " class="typeOfFoods">
               <li v-for="(category, index) in categories" :value="category.name"> 
                    <img :src="categoryImage + category.name + '.png' " alt="">
                    <div>
                         <input  v-model="typeOfFoods" class="checkbox" type="checkbox" :value="category.id">
                         <span :class="(typeOfFoods.includes(category.id)) ? 'checkbox-active' : '' ">{{category.name}}</span>
                    </div>
               </li>
          </ul>

          
          
          <!-- Ciclare solo 6 ristoranti  -->
          <ul v-if="restaurantInput == '' && typeOfFoods.length == 0" class="restaurants">
               <li v-for="(restaurant, index) in restaurants" v-if="index < 6">
                         <!-- <img src="{{asset('storage/img/sushi.jpg')}}" alt=""> -->
                    <a :href="route + restaurant.id">
                         <h3>   
                              {{restaurant.name}}                              
                         </h3>
                         <div>   
                              <img :src="restaurantImage + restaurant.img" alt="">
                         </div>
                    </a> 
               </li>
          </ul>

          <ul v-else-if="restaurantInput == '' && typeOfFoods.length != 0" class="restaurants">
               <li v-for="(restaurant, index) in categoryFilter()" >
                         <!-- <img src="{{asset('storage/img/sushi.jpg')}}" alt=""> -->
                    <a :href="route + restaurant.id">
                         <h3>
                              {{restaurant.name}}                              
                         </h3>
                         <div>
                              <img :src="restaurantImage + restaurant.img" alt="">
                         </div>
                    </a> 
               </li>
          </ul>
          
          <!-- Ciclare tutti i ristoranti filtrati per nome -->
          <ul v-else class="restaurants">
               <li v-for="restaurant in filter()">
                    <a :href="route + restaurant.id">
                         <h3>{{restaurant.name}}</h3>
                         <div>
                              <!-- <img :src="image" alt="">  -->
                              <img :src="restaurantImage + restaurant.img" alt="">
                         </div>      
                    </a>
               </li>
          </ul>         
     </section>            
           
</template>   

<script>
    export default {
        name: 'SearchComponent',
         data: function() {   
              return{
                   'restaurantInput': '',
                   'categoryId': false,
                   'typeOfFoods': [],
                   'categoryImage': "../../../storage/img/genresImage/",
                   'restaurantImage': "../../../storage/restaurant-img/"
               }
          },
          props: ['restaurants','categories','route','categoryRestaurant'],

          methods: {
               filter: function() {
                    const filteredRestaurants = this.restaurants.filter(element => element.name.toLowerCase().includes(this.restaurantInput.toLowerCase()));
                    return filteredRestaurants;
               },

               categoryFilter: function() {
                    let filteredCategory = [];
                    
                    for (let i = 0; i < this.categoryRestaurant.length; i++) {
                         
                         const elem = this.categoryRestaurant[i];
                         const categories = elem.categories;
                         var category = categories.split(" ");
                         let flag = 0;

                         for (let j = 0; j < category.length; j++) {
                              const item = category[j];
                              
                              for (let k = 0; k < this.typeOfFoods.length; k++) {
                                   const type = this.typeOfFoods[k];
                                   if (item == type) {
                                        flag++;
                                   }
                              }
                              if (flag == this.typeOfFoods.length && !filteredCategory.includes(elem)) {
                                   filteredCategory.push(elem);
                              }
                         }
                    } 
                             
                    return filteredCategory;
               },
          },

        mounted() {
            console.log(this.restaurants);
            console.log(this.categories);
            console.log(this.categoryRestaurant);
        }
     }    
</script>
                    

        
                              
                    
                    
                         
                         
                         
                    

                   
                     
                        
                         
                    
                         
        
              
                   
                    
              
                         
                    
                    
               
                         
                         
                         
                         
                         

                         
                              
