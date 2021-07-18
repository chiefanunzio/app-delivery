<template>
     <li class="hamburger-menu">
               <button class="hamburger" @click="switchHamburger()">
                    <div :class ="hambugerFlag == true ? 'line1' : '' "></div>
                    <div :class ="hambugerFlag == true ? 'line2' : '' "></div>
                    <div :class ="hambugerFlag == true ? 'line3' : '' "></div>
               </button>
               <ul :class ="hambugerFlag == true ? 'show' : '' " class="dropdown-menu">
                    <slot></slot>
               </ul>
          </li>
</template>


<script>
     export default {
          data: function() {
            return {
                "hambugerFlag": false,
            }
          },

          methods: {

               switchHamburger : function() {

                    this.hambugerFlag = !this.hambugerFlag;

               }
          },
          mounted() {

               console.log('Component mounted.')
          }
    }
</script>