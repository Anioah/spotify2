

<template>
  <div class="flex flex-col iconConfig">
    <div class="pl-4 pt-2 flex-initial">
      <img class="transform scale-75" src="/@/../../images/menu.png" />
    </div>
    <div class="flex flex-row -my-2 scale-90 iconRow cursor-pointer">
      <img
        class="flex-initial transform scale-50"
        src="/@/../../images/home.png"
      />
      <p
        class="
          flex-initial
          justify-center
          pt-4
          invisible
          sm:visible
          md:visible
          lg:visible
        "
      >
        Inicio
      </p>
    </div>
   
    <div class="flex flex-row -my-2 scale-90 iconRow cursor-pointer" >
   
      <img class="flex-initial transform scale-50" src="/@/../../images/search.png"/>
      <p
        class="
          flex-initial
          justify-center
          pt-4
          invisible
          sm:visible
          md:visible
          lg:visible
        "
      >
        <Link href="/search">Buscar </Link>
      </p>
    </div>
  
    <div class="flex flex-row -my-2 scale-90 iconRow cursor-pointer">
      <img
        class="flex-initial transform scale-50"
        src="/@/../../images/library.png"
      />
      <p
        class="
          flex-initial
          justify-center
          pt-4
          invisible
          sm:visible
          md:visible
          lg:visible
        "
      >
        <Link href="/biblioteca"> Tu Biblioteca </Link>
       
      </p>
    </div>
    <div class="flex flex-col pt-6">
      <div class="flex flex-row -my-2 scale-90 iconRow cursor-pointer">
        <img
          class="flex-initial transform scale-50"
          src="/@/../../images/new.png"
        />
        <p
          class="
            flex-initial
            justify-center
            pt-4
            invisible
            sm:visible
            md:visible
            lg:visible
          "
        >
         
           <Link href="/playlist"> Crear playlist </Link>
        </p>
      </div>
      <div class="flex flex-row -my-2 scale-90 iconRow cursor-pointer">
        <img
          class="flex-initial transform scale-50"
          src="/@/../../images/like.png"
        />
        <p
          class="
            flex-initial
            justify-center
            pt-4
            invisible
            sm:visible
            md:visible
            lg:visible
          "
        >
         <Link href="/tusmegusta"> Tus me gusta</Link>
         
        </p>
      </div>
    </div>
    <hr class="mx-6 mt-3" />
    <div class="iconRow cursor-pointer scale-90">
      <p
        class="
          flex-initial
          scale-90
          justify-center
          pt-4
          invisible
          sm:visible
          md:visible
          lg:visible
        "
      >  <Link href="/playlist">  Mi playlist N.°1 </Link>
       
      </p>
    </div>
  </div>

   
</template>
<script>
import Search from '@/Pages/Home/search.vue'
import Dashboard from '@/Pages/Dashboard/dashboard.vue'
import axios from "axios";
import {Link} from '@inertiajs/inertia-vue3'

    export default {
        components: {
            Link,
            
            
        },
        data(){
         return{
             
         }
        },methods:{

          buscar(){
  axios.get("http://127.0.0.1:8000/search").then((result) => {
    console.log(result);
    })
          }
        }
    }
</script>

