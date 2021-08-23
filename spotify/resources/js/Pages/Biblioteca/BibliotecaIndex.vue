<template>
   <div id="principal-box" class="flex flex-column h-screen md:flex-col lg:flex-row">
       <div id="box-1">
           <!--Header-->
           <div id="Header-Container" class="flex flex-row">
          <a href="/dashboard">   <div id="flecha1" class=" my-1 mx-5 invisible   sm:invisible md:invisible lg:visible flex items-center">
               <span class="mx-4"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
</svg></span>
           </div></a>
           <div id="flecha2" class=" my-1 mx-6 invisible    sm:invisible md:invisible lg:visible flex items-center">
               <i class=" mx-4"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
</svg></i>
           </div>
           
           <div id="Playlistbutton" type="button" class=" my-1 mx-7 invisible cursor-default   sm:invisible md:invisible lg:visible flex items-center ">
           
            <h1 class="font-sans text-xl  font-semibold inline-block text-center mx-3">Playlist</h1>
           </div>
          <div id="Playlistbutton" type="button" class=" my-1 mx-7 invisible cursor-default   sm:invisible md:invisible lg:visible flex items-center">
            <h1 class="font-sans text-xl  font-semibold inline-block text-center mx-2">Podcasts</h1>
           </div>
           <div id="Playlistbutton" type="button" class=" my-1 mx-7 invisible cursor-default   sm:invisible md:invisible lg:visible flex items-center">
            <h1 class="font-sans text-xl  font-semibold inline-block text-center mx-3">Artistas</h1>
           </div>
           <div id="Playlistbutton" type="button" class=" my-1 mx-7 invisible cursor-default   sm:invisible md:invisible lg:visible flex items-center">
             <h1 class="font-sans text-xl  font-semibold inline-block text-center mx-2">Albumes</h1>
           </div>

           <div id="usuario" class=" absolute inset-y-1 right-4 invisible   sm:invisible md:invisible lg:visible flex items-center">
               <span class="mx-4"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
  <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
</svg></span>
           </div>
           
</div>
       </div>
       <div id="box-2">
           <h1 class="font-sans text-2xl font-black">Playlist</h1>
<div id="playlist-file"  class="flex flex-row">
       <div id="plylistcard"  class="cursor-pointer relative mx-4 my-2 bg-gradient-to-r from-blue-600 to-indigo-400 invisible   sm:invisible md:invisible lg:visible">
      
       <button class="absolute bottom-0 right-0 mx-2 my-2" id="botonplay"><svg  xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="  inline-block text-center mx-3 bi bi-play-fill" viewBox="0 0 16 16">
  <path d="m11.596 8.697-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393z"/>
</svg></button>
       
       </div>
 <div id="card-cancion" class="invisible sm:invisible md:invisible lg:visible cursor-pointer mx-4 my-2 ">
<div id="iconomusic" class="cursor-pointer relative mx-10 my-5">
   <button class="absolute bottom-0 right-0 mx-2 my-2" id="botonplayicono"><svg  xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="  inline-block text-center mx-3 bi bi-play-fill" viewBox="0 0 16 16">
  <path d="m11.596 8.697-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393z"/>
</svg></button>
</div>
<h2 class="font-sans font-black mx-10">Mi playlist n.º 1</h2>
       </div>
       <div id="card-cancion" class="invisible sm:invisible md:invisible lg:visible cursor-pointer mx-4 my-2 ">
<div id="iconomusic" class="cursor-pointer relative mx-10 my-5">
   <button class="absolute bottom-0 right-0 mx-2 my-2" id="botonplayicono"><svg  xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="  inline-block text-center mx-3 bi bi-play-fill" viewBox="0 0 16 16">
  <path d="m11.596 8.697-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393z"/>
</svg></button>
</div>
<h2 class="font-sans font-black mx-10">Mi playlist n.º 2</h2>
       </div>
       </div>

      
       </div>
       <!-- /.footer -->
       <div id="box-3">
        <div id="playlist-file"  class="flex flex-row">
 <div id="card-cancion" class="invisible sm:invisible md:invisible lg:visible cursor-pointer mx-4 my-2 ">
<div id="iconomusic" class="cursor-pointer relative mx-10 my-5">
   <button class="absolute bottom-0 right-0 mx-2 my-2" id="botonplayicono"><svg  xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="  inline-block text-center mx-3 bi bi-play-fill" viewBox="0 0 16 16">
  <path d="m11.596 8.697-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393z"/>
</svg></button>
</div>
<h2 class="font-sans font-black mx-10">Mi playlist n.º 3</h2>
       </div>
       <div id="card-cancion" class="invisible sm:invisible md:invisible lg:visible cursor-pointer mx-4 my-2 ">
<div id="iconomusic" class="cursor-pointer relative mx-10 my-5">
   <button class="absolute bottom-0 right-0 mx-2 my-2" id="botonplayicono"><svg  xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="  inline-block text-center mx-3 bi bi-play-fill" viewBox="0 0 16 16">
  <path d="m11.596 8.697-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393z"/>
</svg></button>
</div>
<h2 class="font-sans font-black mx-10">Mi playlist n.º 4</h2>
       </div>
       <div id="card-cancion" class="invisible sm:invisible md:invisible lg:visible cursor-pointer mx-4 my-2 ">
<div id="iconomusic" class="cursor-pointer relative mx-10 my-5">
   <button class="absolute bottom-0 right-0 mx-2 my-2" id="botonplayicono"><svg  xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="  inline-block text-center mx-3 bi bi-play-fill" viewBox="0 0 16 16">
  <path d="m11.596 8.697-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393z"/>
</svg></button>
</div>
<h2 class="font-sans font-black mx-10">Mi playlist n.º 5</h2>
       </div>
         <div id="card-cancion" class="invisible sm:invisible md:invisible lg:visible cursor-pointer mx-4 my-2 ">
<div id="iconomusic" class="cursor-pointer relative mx-10 my-5">
   <button class="absolute bottom-0 right-0 mx-2 my-2" id="botonplayicono"><svg  xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="  inline-block text-center mx-3 bi bi-play-fill" viewBox="0 0 16 16">
  <path d="m11.596 8.697-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393z"/>
</svg></button>
</div>
<h2 class="font-sans font-black mx-10">Mi playlist n.º 6</h2>
       </div>
       </div>
       </div>
       
   </div>
</template>