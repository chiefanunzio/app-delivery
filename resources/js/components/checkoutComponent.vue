<template>
    <div>
        <label for="Totale">
            <span class="input-label">Totale</span>
            <div class="input-wrapper amount-wrapper">
                <input type="hidden" id="amount" name="amount" placeholder="Amount" :value="getTot()">
                <h2>€ {{getTot()}}</h2>
            </div>
        </label>
        <ul>
            <li v-for="prodotto in prodotti">
                <input type="hidden" name="product_id[]" id="" :value="prodotto.id">
            </li>
        </ul>               
    </div>
</template>
    
<script>
    export default {
        data: function() {
            return {
                prodotti: JSON.parse(localStorage.getItem("prodotti")),
            }
        },
                

        methods: {
            getTot : function() {
                let sum = 0;
                for (let i = 0; i < this.prodotti.length; i++) {
                    const element = this.prodotti[i].prezzo;
                    sum += element;
                }
                return sum;
            }
        }, 
                
        mounted() {
            console.log('Component mounted.');
            console.log(this.prodotti);
        }
            
    }
</script>
            
                
                    
    
    

                
            
                
            
            
            