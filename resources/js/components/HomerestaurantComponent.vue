<template>
     <section class="menu">

          <div class="aside-menu">

               <ul>
                    <li class="selected">
                         <a href="#antipasti">
                              Antipasti
                         </a>
                    </li>
               </ul>   
                    
               <ul>
                     <li>
                         <a href="#primi">
                              Primi
                         </a>
                    </li>
               </ul>
       
               <ul>
                    <li>
                         <a href="#secondi">
                              Secondi
                         </a>
                    </li>
               </ul>
              
               <ul>
                    <li>
                         <a href="#dolce">
                              Dolce
                         </a>
                    </li>
               </ul>   
                    
          </div>
    

          <div class="container-menu">   

               <div class="products">

                    <div class="singleProduct" id="antipasti">
                         <div>
                              <h2>Antipasti</h2>
                         </div> 
                         <ul>
                              <li v-for="antipasto in antipasti">   

                                   <!-- <img :src="antipastoImg" alt=""> -->
                                   <img :src="lollipop + antipasto.name + '.jpg' " alt=""> 

                                   <div class="title">
                                        <h3 :value="antipasto.name">{{ antipasto.name }}</h3> 
                                        <h5>{{ antipasto.ingredients }}</h5> 
                                   </div>

                                   <div class="description">
                                        <p>{{ antipasto.description }}</p>
                                   </div>

                                   <div>
                                        <i @click="addProduct(antipasto.name, antipasto.price,antipasto.id)" class="fas fa-plus" v-if="antipasto.availability"></i>  
                                        <h3 v-if="!antipasto.availability">Non Disponibile</h3> 

                                        <h4> 
                                             <i class="fas fa-euro-sign"></i>
                                             {{ antipasto.price }}    
                                        </h4>          
                                   </div>
                              </li>            
                         </ul>
                    </div>

                    <div id="primi">    
                         <h2>Primi</h2>
                         <ul>

                              <li v-for="primo in primi">   
                                   <img :src="lollipop + primo.name + '.jpg' " alt=""> 
                                   <!-- <img :src="primoImg" alt="">  -->

                                   <div class="title">
                                        <h3>{{ primo.name }}</h3> 
                                        <h5>{{ primo.ingredients }}</h5> 
                                   </div>

                                   <div class="description">
                                        <p>{{ primo.description }}</p>
                                   </div>

                                   <div class="price">
                                        <i @click="addProduct(primo.name, primo.price,primo.id)"class="fas fa-plus" v-if="primo.availability"></i> 
                                        <h3 v-if="!primo.availability">Non Disponibile</h3> 

                                        <h4> 
                                             <i class="fas fa-euro-sign"></i>
                                             {{ primo.price }}    
                                        </h4>     
                                   </div>
                              </li> 

                         </ul>
                    </div>

                    <div id="secondi">      
                         <h2>Secondi</h2>
                         <ul>

                              <li v-for="secondo in secondi">   

                                   <!-- <img :src="secondoImg" alt=""> -->
                                   <img :src="lollipop + secondo.name + '.jpg' " alt=""> 

                                   <div class="title">
                                        <h3>{{ secondo.name }}</h3> 
                                        <h5>{{ secondo.ingredients }}</h5> 
                                   </div>

                                   <div class="description">
                                        <p>{{ secondo.description }}</p>
                                   </div>

                                   <div class="price">
                                        <i @click="addProduct(secondo.name, secondo.price,secondo.id)" class="fas fa-plus" v-if="secondo.availability"></i> 
                                        <h3 v-if="!secondo.availability">Non Disponibile</h3> 

                                        <h4> 
                                             <i class="fas fa-euro-sign"></i>
                                             {{ secondo.price }}    
                                        </h4>          
                                   </div>
                              </li>     

                         </ul>
                    </div>

                    <div id="dolce">
                         <h2>Dolce</h2>
                         <ul>

                              <li v-for="dolce in dolci">   
                                   <!-- <img :src="dolceImg " alt=""> -->
                                   <img :src="lollipop + dolce.name + '.jpg' " alt=""> 

                                   <div class="title">
                                        <h3>{{ dolce.name }}</h3> 
                                        <h5>{{ dolce.ingredients }}</h5> 
                                   </div>

                                   <div class="description">
                                       <p>{{ dolce.description }}</p> 
                                   </div>

                                   <div class="price">
                                         <i @click="addProduct(dolce.name, dolce.price,dolce.id)" class="fas fa-plus" v-if="dolce.availability"></i>  
                                        <h3 v-if="!dolce.availability">Non Disponibile</h3> 

                                        <h4> 
                                        {{ dolce.price }}    
                                        <i class="fas fa-euro-sign"></i>
                                        </h4>          
                                   </div>
                              </li>

                         </ul>
                    </div>

               </div>
          </div>

          <div class="carrello-icona">
               <img @click="switchCarrello" :src="carrelloImg" alt="">
               <div v-if="carrello.length != 0 && carrelloFlag == false" class="price">
                    <span>{{totale}}</span>
                    <i class="fas fa-euro-sign"></i>
               </div>
               <div v-else-if="carrello.length == 0 && carrelloFlag == false" class="price">
                    <span>Il tuo carrello è ancora vuoto</span>
               </div>
               <div v-if="carrelloFlag == true" class="carrello-dropdown">
               
                    <h2>Carrello</h2>   
                    <ul v-for ="(ordine, index) in carrello">
                         <li>
                              <div>
                                   <h4>{{ordine.quantita}}x</h4>
                              </div>
                              <div>
                                   <h5>{{ordine.prodotto}}</h5>
                                   <i @click="removeProduct(index)" class="fas fa-minus"></i>
                                   <i  @click="increaseProduct(index)" class="fas fa-plus"></i> 
                              </div>
                              <div>
                                   <div>
                                        <i class="fas fa-euro-sign"></i>
                                        <span>{{ordine.prezzo}} </span>
                                   </div>
                              </div>
                         </li>
                    </ul>
                                   
    
                    <div v-if="carrello.length != 0">
                         <h3>Totale</h3>
                         <div class="totalePrezzo">
                              <i class="fas fa-euro-sign"></i>
                              <span>{{totale}}</span>
                         </div>
                         <div>
                              <button v-on:click="setLocalStorage" type="submit">
                                   <a :href="checkout">
                                        Vai al pagamento
                                   </a>
                              </button>  
                         </div>   
                    </div>

                    <div class="no-products" v-else>
                         <h3>Il tuo carrello è ancora vuoto.</h3>
                    </div>
               </div>
          </div>

          <div class="carrello">
               
                    <h2>Carrello</h2>   
                    <ul v-for ="(ordine, index) in carrello">
                         <li>
                              <div>
                                   <h4>{{ordine.quantita}}x</h4>
                              </div>
                              <div class="cart-product">
                                   <h5>{{ordine.prodotto}}</h5>
                                   <i @click="removeProduct(index)" class="fas fa-minus"></i>
                                   <i  @click="increaseProduct(index)" class="fas fa-plus"></i>
                              </div>
                              <div>
                                   <div>
                                        <i class="fas fa-euro-sign"></i>
                                        <span>{{ordine.prezzo}} </span>
                                   </div>
                              </div>
                         </li>
                    </ul>
                                   
    
                    <div v-if="carrello.length != 0">
                         <h3>Totale</h3>
                         <div class="totalePrezzo">
                              <i class="fas fa-euro-sign"></i>
                              <span>{{totale}}</span>
                         </div>
                         <div>
                              <button v-on:click="setLocalStorage" type="submit">
                                   <a :href="checkout">
                                        Vai al pagamento
                                   </a>
                              </button>  
                         </div>   
                    </div>

                    <div class="no-products" v-else>
                         <h3>Il tuo carrello è ancora vuoto.</h3>
                    </div>
          </div>
        
     </section>
</template>
                              
<script>
     export default {
          data: function() {   
               return{
                   'antipastoImg': "../../../storage/img/antipasti.png",
                   'primoImg': "../../../storage/img/primi.png",
                   'secondoImg': "../../../storage/img/secondi.png",
                   'dolceImg': "../../../storage/img/dolce.png",
                   'carrelloImg': "../../../storage/img/carrello.png",
                   'lollipop': "../../../storage/img/productsImage/",
                   'totale': 0,
                   'carrello': [],
                   'carrelloBackup': [],
                   'carrelloFlag': false,
                   'inputs' : {},
                   'errors' : {},
               }
          },
          props: ['antipasti','primi','secondi','dolci','checkout'],

          methods: {
               
               addProduct: function(nomeProdotto, prezzoProdotto, idProdotto) {
                    let currentProduct = {
                        'prodotto': '',
                        'prezzo' : 0,
                        'id' :0,
                        'quantita': 0,
                        'prezzoBase': 0,
                    };
                    currentProduct.prodotto = nomeProdotto;
                    currentProduct.prezzo = parseFloat(prezzoProdotto);
                    currentProduct.prezzoBase = parseFloat(prezzoProdotto);
                    currentProduct.id = parseInt(idProdotto);
                    currentProduct.quantita++;
                    let count = 0;
                    if (this.carrello.length != 0) {
                         for (let j = 0; j < this.carrello.length; j++) {

                              if (this.carrello[j].id == currentProduct.id) {

                                   this.carrello[j].quantita++;
                                   this.carrello[j].prezzo += this.carrello[j].prezzoBase;
                                   this.totale += this.carrello[j].prezzoBase;                                   
                              } else {
                                   count++;
                              }
                         }

                         if (count == this.carrello.length) {
                              this.totale += currentProduct.prezzo;
                              this.carrello.push(currentProduct);
                         }
                                                  
                    } else {
                         this.carrello.push(currentProduct);
                         this.totale += currentProduct.prezzo;
                    }
                    console.log(this.carrello);
               },

               removeProduct: function(index) {
                    if (this.carrello[index].quantita > 1) {
                         this.carrello[index].quantita--;
                         this.carrello[index].prezzo -= this.carrello[index].prezzoBase;
                         this.totale -= this.carrello[index].prezzoBase;
                    } else {
                         this.totale -= this.carrello[index].prezzo;
                         this.carrello.splice(index, 1);
                    }
               },

               increaseProduct: function(index) {
                    this.carrello[index].quantita++;
                    this.carrello[index].prezzo += this.carrello[index].prezzoBase;
                    this.totale += this.carrello[index].prezzoBase;
               },

               setLocalStorage: function () {
                    
                    localStorage.clear();
                    localStorage.setItem("prodotti", JSON.stringify(this.carrello));
                    
               },

               switchCarrello: function() {
                    this.carrelloFlag = !this.carrelloFlag;
               }
          },
          mounted() {
               console.log('Component mounted.')
          }
     }
</script>
                    

                    
                    


               
               
    
               

                    
               
                                   

              
                    

