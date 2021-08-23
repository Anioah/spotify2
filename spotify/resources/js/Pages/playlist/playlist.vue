<template>
   <div id="principal-box-playlist" class="flex flex-column h-screen md:flex-col lg:flex-row">
     <div id="box-1-playlist">
           <div id="Header-Container" class="flex flex-row">
   <a href="/dashboard">  <div id="flecha1-playlists" class=" my-1 mx-5 visible   sm:visible md:visible lg:visible flex items-center">
               <span class="mx-4"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
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
       <div id="box-2-playlist" class="flex flex-row">
           <div id="iconomusic-playlist" class="my-20 mx-7 invisible  sm:invisible  md:visible lg:visible cursor-pointer"></div>
           <div id="letras-playlist" class="my-20 mx-4 invisible sm:invisible md:invisible lg:visible cursor-none">

               <h1 class="font-black font-sans">PLAYLIST</h1>
                <h1 id="title-playlists" class="font-black font-sans my-5 text-6xl">Mi playlist</h1>
           </div>
           </div>
       <!-- /.footer -->
       <div id="box-3-playlist" class="">
           <div id="puntos">
               <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="mx-7 bi bi-three-dots mx-7 my-3" viewBox="0 0 16 16">
  <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"/>
</svg>
           </div>
        
<div id="contenedor-recomendaciones" class=" mx-7">
<div id="recomendaciones">
    <h3 class="font-black font-sans my-5 text-3xl">Recomendaciones</h3>
    <h6><font color="#B2BABB">Basado en el contenido de esta playlist</font>
    </h6>
</div>
<br>

<div id="tabla-recomendaciones" class="flex flex-row">



<div id="imagen-tabla-cancion">
            <img src="/@/../../images/gaho.png" alt="">

        </div>
        <div id="titulo-cancion" class="mx-2">
            <h6 class="font-normal font-sans"><font color="#5D6D7E">RIDE</font></h6>
            <font color="#B2BABB">Gaho</font>
        </div>

        <div id="album-tabla-recomendacion"><h6><font color="#B2BABB">RIDE</font></h6></div>

        <div class="mx-3" id="contenedor-boton-add"><button id="boton-recomendaciones" class="btn btn">AÑADIR</button></div>


</div>
<br>
<div id="tabla-recomendaciones" class="flex flex-row">



<div id="imagen-tabla-cancion">
            <img src="/@/../../images/ten.png" alt="">

        </div>
        <div id="titulo-cancion" class="mx-2">
            <h6 class="font-normal font-sans"><font color="#5D6D7E">Paint Me Naked</font></h6>
            <font color="#B2BABB">TEN</font>
        </div>

        <div id="album-tabla-recomendacion"><h6><font color="#B2BABB">SM STATION</font></h6></div>

        <div class="mx-3" id="contenedor-boton-add"><button id="boton-recomendaciones" class="btn btn">AÑADIR</button></div>


</div>

</div>
       </div>
       
   </div>
</template>