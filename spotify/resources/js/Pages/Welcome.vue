<template>
    <Head title="Welcome" />

    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
        <div v-if="canLogin" class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            <Link v-if="$page.props.user" :href="route('dashboard')" class="text-sm text-gray-700 underline">
                Dashboard
            </Link>

            <template v-else>
                
                <Link :href="route('login')" class="text-sm text-gray-700 underline">
                    Log in
                </Link>

                <Link v-if="canRegister" :href="route('register')" class="ml-4 text-sm text-gray-700 underline">
                    Register
                </Link>
            </template>
        </div>
         

        <div class="max-w-6xl mt-auto sm:px-8 lg:pt-8 absolute inset-x-0 bottom-0">
            <div class="relative flex space-x-2 md:space-x-6 justify-start pt-4">
                <img class="transform scale-75" width="250" height="250" src="/@/../../images/spot.png">
            </div>
            <div class="mb-8 bg-black overflow-hidden shadow sm:rounded-lg">
                
                <div class="carousel relative rounded relative overflow-hidden shadow-xl">
        <div class="carousel-inner relative overflow-hidden w-full">
          <!--Slide 1-->
          <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden=""
            checked="checked">
          <div class="carousel-item absolute opacity-0 bg-center" style="height:450px; background-image: url(https://2.bp.blogspot.com/-JrvVqPPRzdE/UyLfywqFviI/AAAAAAAAEZU/-nx77aD23aQ/w1200-h630-p-k-no-nu/ipod+homer.jpeg)">
          
          </div>
          <label for="carousel-3"
            class="control-1 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden font-bold text-black hover:text-white rounded-full  hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto flex justify-center content-center"></label>
          <label for="carousel-2"
            class="next control-1 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden font-bold text-black hover:text-white rounded-full  hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto"></label>
      
          <!--Slide 2-->
          <input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
          <div class="carousel-item absolute opacity-0 bg-center" style="height:450px; background-image: url(https://img.eldefinido.cl/portadas/1200/2017-02-24-9199ODN2517.jpg)">
          </div>
          <label for="carousel-1"
            class=" control-2 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden font-bold text-black hover:text-white rounded-full  hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto"></label>
          <label for="carousel-3"
            class="next control-2 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden font-bold text-black hover:text-white rounded-full  hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto"></label>
      
          <!--Slide 3-->
          <input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">
          <div class="carousel-item absolute opacity-0 bg-center" style="height:450px; background-image: url(https://img.barks.jp/img/article/1000107578/H/1200.jpg)">
          </div>
          <label for="carousel-2"
            class="control-3 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden font-bold text-black hover:text-white rounded-full  hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto"></label>
          <label for="carousel-1"
            class="next control-3 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden font-bold text-black hover:text-white rounded-full  hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto"></label>
      
        </div>
                
      
        </div>
                </div>
        </div>
    </div>
</template>

<style scoped>
    p{
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    color: white;
    font-weight: bold;
    font-size: xx-large;
}

    .carousel-open:checked+.carousel-item {
          position: static;
          opacity: 100;
        }
      
        .carousel-item {
          -webkit-transition: opacity 0.6s ease-out;
          transition: opacity 0.6s ease-out;
        }
      
        #carousel-1:checked~.control-1,
        #carousel-2:checked~.control-2,
        #carousel-3:checked~.control-3 {
          display: block;
        }
      
        .carousel-indicators {
          list-style: none;
          margin: 0;
          padding: 0;
          position: absolute;
          bottom: 2%;
          left: 0;
          right: 0;
          text-align: center;
          z-index: 10;
        }
      
        #carousel-1:checked~.control-1~.carousel-indicators li:nth-child(1) .carousel-bullet,
        #carousel-2:checked~.control-2~.carousel-indicators li:nth-child(2) .carousel-bullet,
        #carousel-3:checked~.control-3~.carousel-indicators li:nth-child(3) .carousel-bullet {
          color: #2b6cb0;
          /*Set to match the Tailwind colour you want the active one to be */
        }
   

    @media (prefers-color-scheme: dark) {
        .dark\:bg-gray-800 {
            background-color: #000;
            
        }

        .dark\:bg-gray-900 {
            background-color: #000;
            
        }

        .dark\:border-gray-700 {
            border-color: #000;
            border-color: rgba(74, 85, 104, var(--tw-border-opacity));
        }

        .dark\:text-white {
            color: #fff;
            color: rgba(255, 255, 255, var(--tw-text-opacity));
        }

        .dark\:text-gray-400 {
            color: #cbd5e0;
            color: rgba(203, 213, 224, var(--tw-text-opacity));
        }
    }
</style>

<script>
    import { Head, Link } from '@inertiajs/inertia-vue3';

    export default {
        components: {
            Head,
            Link,
        },

        props: {
            canLogin: Boolean,
            canRegister: Boolean,
            laravelVersion: String,
            phpVersion: String,
        }
    }
</script>
