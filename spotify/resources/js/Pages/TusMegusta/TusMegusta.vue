<template>
   <div id="principal-box-tusmegusta" class="flex flex-column h-screen md:flex-col lg:flex-row">
       <div id="box-1-tusmegusta" class="bg-gradient-to-r from-indigo-800 to-indigo-800">
           <div id="Header-Container" class="flex flex-row">
  <a href="/dashboard"> <div id="flecha1-playlists" class=" my-1 mx-5 visible   sm:visible md:visible lg:visible flex items-center">
   
              <span class="mx-4"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/> 
</svg></span> 
           </div></a>
           <div id="flecha2-playlists" class=" my-1 mx-6 visivle    sm:visible md:visible lg:visible flex items-center">
               <i class=" mx-4"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
</svg></i>
           </div>
</div>

            </div>
       <div id="box-2-tusmegusta" class="flex flex-row bg-gradient-to-r from-indigo-800 to-indigo-800">
           <div id="iconomusic-tusmegusta" class="my-20 mx-7 invisible  sm:invisible  md:visible lg:visible"></div>
           <div id="letras-playlist" class="my-20 mx-4 invisible sm:invisible md:invisible lg:visible cursor-none">

              <h1 class="font-black font-sans ">PLAYLIST</h1>
              
                <h1 id="title-playlists" class="cursor-none font-black font-sans my-5 text-6xl">Tus me gusta</h1>
           </div>
           </div>
       <!-- /.footer -->
       <div id="box-3-tusmegusta" class=" h-screen lg:h-screen md:h-screen">
           <div id="puntos">
        
           </div>
        
<div id="contenedor-recomendaciones" class="mx-7">
<div id="recomendaciones" class="flex flex-row">
    <div  v-if="isPlaying==false"><button v-on:click="reproducir()" class=" mx-2 my-2" id="botonplay-tusmegusta"><svg  xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="  inline-block text-center mx-3 bi bi-play-fill" viewBox="0 0 16 16">
  <path d="m11.596 8.697-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393z"/>
</svg></button></div> 

 <div  v-if="isPlaying==true"><button v-on:click="pause()" class=" mx-2 my-2" id="botonplay-tusmegusta"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="mx-4 bi bi-pause-fill" viewBox="0 0 16 16">
  <path d="M5.5 3.5A1.5 1.5 0 0 1 7 5v6a1.5 1.5 0 0 1-3 0V5a1.5 1.5 0 0 1 1.5-1.5zm5 0A1.5 1.5 0 0 1 12 5v6a1.5 1.5 0 0 1-3 0V5a1.5 1.5 0 0 1 1.5-1.5z"/>
</svg></button></div> 
       <div><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="mx-4 my-6 bi bi-arrow-down-circle" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V4.5z"/>
</svg></div>


</div>

<br>
<div id="tabla-recomendaciones" class="flex flex-row">
<br>
<div id="indice-tabla-cancion" class="mx-3">
            #

        </div>

<div id="imagen-tabla-cancion">
           TITULO

        </div>
        <div id="titulo-cancion" class="mx-2">
            
        </div>

        <div id="album-tabla-recomendacion"><h6><font color="#B2BABB">ALBUM</font></h6></div>

         <div class="mx-3" id="contenedor-boton-add">
           <h6><font color="#B2BABB">AGREGADO EL</font></h6>
            </div>
<div class="mx-3" id="contenedor-boton-add">
           <h6><font color="#B2BABB"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-stopwatch" viewBox="0 0 16 16">
  <path d="M8.5 5.6a.5.5 0 1 0-1 0v2.9h-3a.5.5 0 0 0 0 1H8a.5.5 0 0 0 .5-.5V5.6z"/>
  <path d="M6.5 1A.5.5 0 0 1 7 .5h2a.5.5 0 0 1 0 1v.57c1.36.196 2.594.78 3.584 1.64a.715.715 0 0 1 .012-.013l.354-.354-.354-.353a.5.5 0 0 1 .707-.708l1.414 1.415a.5.5 0 1 1-.707.707l-.353-.354-.354.354a.512.512 0 0 1-.013.012A7 7 0 1 1 7 2.071V1.5a.5.5 0 0 1-.5-.5zM8 3a6 6 0 1 0 .001 12A6 6 0 0 0 8 3z"/>
</svg></font></h6>
            </div>

</div>


<!--cuerpo de la tabla-->

<div v-for="(item, index) in canciones" :key="index" id="tabla-recomendaciones" v-on:click="play(index,item.rutacancion)"  class="flex flex-row">

<div id="indice-tabla-cancion" v-if="item.estado=='STOP'" class="mx-3">
            {{item.indice}}

        </div>

        <div id="indice-tabla-cancion" class="mx-3 my-6" v-if="item.estado=='PLAY'"><div id="preloader_1">
          <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div></div>

<div id="imagen-tabla-cancion">
            <img :src="item.rutaimagen" alt="">

        </div>
        <div id="titulo-cancion" class="mx-2">
            <h6 class="font-normal font-sans"><font color="#5D6D7E">{{item.nombre}}</font></h6>
            <font color="#B2BABB">{{item.artista}}
            </font>
        </div>

        <div id="album-tabla-recomendacion"><h6><font color="#B2BABB">{{item.album}}</font></h6></div>

         <div class="mx-3" id="contenedor-boton-add">
           <h6><font color="#B2BABB">{{item.agregado}}</font></h6>
            </div>
<div class="mx-3 flex flex-row" id="contenedor-boton-add">
           <div class="mx-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="green" class="bi bi-suit-heart-fill" viewBox="0 0 16 16">
  <path d="M4 1c2.21 0 4 1.755 4 3.92C8 2.755 9.79 1 12 1s4 1.755 4 3.92c0 3.263-3.234 4.414-7.608 9.608a.513.513 0 0 1-.784 0C3.234 9.334 0 8.183 0 4.92 0 2.755 1.79 1 4 1z"/>
</svg></div>
    <div class="mx-2"><h6> <font color="#B2BABB">{{item.duracion}}</font></h6></div>
           
            </div>

</div>

</div>
       </div>
       
   </div>
  
</template>

<script>
import axios from "axios";
export default {
 data() {
            return {
            player: new Audio(),
             isPlaying: false,
             canciones:[],
             idx:0


                
            }
        },
    

   created() {
    axios.get("http://127.0.0.1:8000/AllCanciones").then((result) => {
    
      console.log(result.data);
      this.canciones=result.data;
    })
  },
    

            methods: {
                play(index,cancion)
                {
                    
                    if(this.isPlaying == true)

                    {
                        this.canciones[this.idx]['estado']='STOP';
                        this.player.src=cancion;
                        this.player.play();
                         this.idx=index;
                        this.canciones[index]['estado']='PLAY';
                    }

                    else
                    {
                        this.player.src=cancion;
                        this.player.play();
                        this.idx=index;
                        this.canciones[index]['estado']='PLAY';
                        this.isPlaying = true;

                     }
                        
                        
                   
                },
                pause()
                {
                    this.canciones[this.idx]['estado']='STOP';
                     this.canciones[0]['estado']='STOP';
                    this.player.pause();
                    this.isPlaying = false;
                    
                },


                reproducir()
                {

                    
                        
                    if(this.isPlaying == true)

                    {
                        this.canciones[this.idx]['estado']='STOP';
                        this.canciones[0]['estado']='STOP';
                         this.player.src=this.canciones[0]['rutacancion'];
                        this.player.play();
                         this.idx=0;
                        this.canciones[0]['estado']='PLAY';
                    }

                    else
                    {
                        this.player.src=this.canciones[0]['rutacancion'];
                        this.player.play();
                        this.idx=0;
                        this.canciones[0]['estado']='PLAY';
                        this.isPlaying = true;

                     }

                }
            }
        }

</script>