<template>
  <div class="flex flex-row">
          <div class="dashCardsContainerPrincipal">
        <div class="dashCardsContainerSecondary">
    <div class="flex flex-col px-3 dashboard-config">
      <div class="flex flex-row">
        <div>
          <img src="../../../img/previous.png" class="transform scale-75 cursor-pointer" />
        </div>
        <div>
          <img src="../../../img/next.png" class="transform scale-75 cursor-pointer" />
        </div>
        <div class="pt-1 my-2 ml-auto mx-5 text-center dashButton cursor-pointer">
          <button
            class="
              invisible
              sm:invisible
              md:visible
              invisible
              lg:visible
              scale-100
            "
          >
          <form >
                <jet-dropdown-link as="button" @click="logout"> Log Out </jet-dropdown-link>
              </form>
          </button>
        </div>
        <div class="pt-1 my-2 text-center dashButton cursor-pointer">
          <button
            class="
              invisible
              sm:invisible
              md:visible
              invisible
              lg:visible
              scale-100
            "
          >
            Team AIGJ
          </button>
        </div>
      </div>
        <img class="transform scale-95 cursor-pointer -mb-4" src="../../../img/dashPrincipal.png"/>
      <p class="pl-3 dashTittle">
        Programas para descubrir...
      </p>
            <p class="pl-3 dashDescription">
        Podcast que no vas a parar de escuchar.
      </p>
        <div class="flex flex-1 flex-row mt-3 dashCardRows">
          <div class="flex flex-1 flex-col dashCard cursor-pointer">
            <img class="transform scale-75" src="../../../img/card1.jpg"/>
            <p class="dashCardInnerTittle">Aprende inglés con...</p>
            <p class="dashCardInnerDescription">LinguaBost</p>
          </div>
          <div class="flex flex-1 flex-col dashCard cursor-pointer">
            <img class="transform scale-75" src="../../../img/card2.jpg"/>
            <p class="dashCardInnerTittle">Cuentos Infantiles</p>
            <p class="dashCardInnerDescription">Onírica</p>
          </div>
          <div class="flex flex-1 flex-col dashCard cursor-pointer">
            <img class="transform scale-75" src="../../../img/card3.jpg"/>
            <p class="dashCardInnerTittle">Audiolibros del Éxito</p>
            <p class="dashCardInnerDescription">Audiolibros del Éxito</p>
          </div>
          <div class="flex flex-1 flex-col dashCard cursor-pointer">
            <img class="transform scale-75" src="../../../img/card4.jpg"/>
            <p class="dashCardInnerTittle">Historias perdidas</p>
            <p class="dashCardInnerDescription">Clío Podcast</p>
          </div>
          <div class="flex flex-1 flex-col dashCard cursor-pointer">
            <img class="transform scale-75" src="../../../img/card5.jpg"/>
            <p class="dashCardInnerTittle">Cuentos Infantiles I...</p>
            <p class="dashCardInnerDescription">Naran Xadul</p>
          </div>
        </div>
      <p class="pl-3 dashTittle">
        Los Mejores Podcasts del 2020...
      </p>
            <p class="pl-3 dashDescription">
        Nuestros programas nuevos favoritos del año
      </p>
        <div class="flex flex-1 flex-row mt-3 dashCardRows">
          <div class="flex flex-1 flex-col dashCard cursor-pointer">
            <img class="transform scale-75" src="../../../img/card6.jpg"/>
            <p class="dashCardInnerTittle">Caso 63</p>
            <p class="dashCardInnerDescription">Spotify Studios</p>
          </div>
          <div class="flex flex-1 flex-col dashCard cursor-pointer">
            <img class="transform scale-75" src="../../../img/card7.jpg"/>
            <p class="dashCardInnerTittle">Fausto 2</p>
            <p class="dashCardInnerDescription">Spotify Studios</p>
          </div>
          <div class="flex flex-1 flex-col dashCard cursor-pointer">
            <img class="transform scale-75" src="../../../img/card8.jpg"/>
            <p class="dashCardInnerTittle">99% con Mia Astral</p>
            <p class="dashCardInnerDescription">Spotify Studios</p>
          </div>
          <div class="flex flex-1 flex-col dashCard cursor-pointer">
            <img class="transform scale-75" src="/@/../../images/card9.jpg"/>
            <p class="dashCardInnerTittle">El café de la mañana</p>
            <p class="dashCardInnerDescription">REFORMA & Spotify Studios</p>
          </div>
          <div class="flex flex-1 flex-col dashCard cursor-pointer">
            <img class="transform scale-75" src="/@/../../images/card10.jpg"/>
            <p class="dashCardInnerTittle">La Advertencia</p>
            <p class="dashCardInnerDescription">La Corriente del Golfo Podcast y Antifaz</p>
          </div>
        </div>
      <p class="pl-3 dashTittle">
        Encuentra momentos de alegría
      </p>
            <p class="pl-3 dashDescription">
        Los programas que nos hicieron sonreir incluso en los momentos dificiles
      </p>
        <div class="flex flex-row mt-3 dashCardRows">
          <div class="flex flex-1 flex-col dashCard cursor-pointer">
            <img class="transform scale-75" src="/@/../../images/card11.jpg"/>
            <p class="dashCardInnerTittle">Encuentra en ti</p>
            <p class="dashCardInnerDescription">Paola Zurita</p>
          </div>
          <div class="flex flex-1 flex-col dashCard cursor-pointer">
            <img class="transform scale-75" src="/@/../../images/card12.jpg"/>
            <p class="dashCardInnerTittle">Despertando Podcast</p>
            <p class="dashCardInnerDescription">Dudas Media</p>
          </div>
          <div class="flex flex-1 flex-col dashCard cursor-pointer">
            <img class="transform scale-75" src="/@/../../images/card8.jpg"/>
            <p class="dashCardInnerTittle">99% con Mia Astral</p>
            <p class="dashCardInnerDescription">Spotify Studios</p>
          </div>
          <div class="flex flex-1 flex-col dashCard cursor-pointer">
            <img class="transform scale-75" src="/@/../../images/card13.jpg"/>
            <p class="dashCardInnerTittle">El Observador</p>
            <p class="dashCardInnerDescription">Megaradio Guadalajara</p>
          </div>
          <div class="flex flex-1 flex-col dashCard cursor-pointer">
            <img class="transform scale-75" src="/@/../../images/card14.jpg"/>
            <p class="dashCardInnerTittle">¡Con Amor Carajo!</p>
            <p class="dashCardInnerDescription">Lorena Aguirre | Life Coach | Neuropsicóloga ...</p>
          </div>
        </div>
      <p class="pl-3 dashTittle">
        Historias de resiliencia
      </p>
            <p class="pl-3 dashDescription">
        Escucha las voces fuertes y valientes del 2020
      </p>
        <div class="flex flex-row mt-3 dashCardRows">
          <div class="flex flex-1 flex-col dashCard cursor-pointer">
            <img class="transform scale-75" src="/@/../../images/card15.jpg"/>
            <p class="dashCardInnerTittle">Fist Day Back</p>
            <p class="dashCardInnerDescription">Stitcher and Tally Abecassis</p>
          </div>
          <div class="flex flex-1 flex-col dashCard cursor-pointer">
            <img class="transform scale-75" src="/@/../../images/card16.png"/>
            <p class="dashCardInnerTittle">NATAL</p>
            <p class="dashCardInnerDescription">You Had Me at Black, The Woodshaw</p>
          </div>
          <div class="flex flex-1 flex-col dashCard cursor-pointer">
            <img class="transform scale-75" src="/@/../../images/card17.png"/>
            <p class="dashCardInnerTittle">Resistance</p>
            <p class="dashCardInnerDescription">Gimlet</p>
          </div>
          <div class="flex flex-1 flex-col dashCard cursor-pointer">
            <img class="transform scale-75" src="/@/../../images/card18.jpg"/>
            <p class="dashCardInnerTittle">In the Dark</p>
            <p class="dashCardInnerDescription">APM Reports</p>
          </div>
          <div class="flex flex-1 flex-col dashCard cursor-pointer">
            <img class="transform scale-75" src="/@/../../images/card19.jpg"/>
            <p class="dashCardInnerTittle">TransLash Podcast ...</p>
            <p class="dashCardInnerDescription">TransLash Media</p>
          </div>
        </div>
      <p class="pl-3 dashTittle">
        Música para terminar el día...
      </p>
        <div class="flex flex-row mt-3 dashCardRows">
          <div class="flex flex-1 flex-col dashCard cursor-pointer">
            <img class="transform scale-75" src="/@/../../images/card20.jpg"/>
            <p class="dashCardInnerTittle">Sueño Profundo</p>
            <p class="dashCardInnerDescription">Música ambiental para un sueño profundo.</p>
          </div>
          <div class="flex flex-1 flex-col dashCard cursor-pointer">
            <img class="transform scale-75" src="/@/../../images/card21.jpg"/>
            <p class="dashCardInnerTittle">Lluvia de Noche</p>
            <p class="dashCardInnerDescription">Sonidos de lluvia para desc....</p>
          </div>
          <div class="flex flex-1 flex-col dashCard cursor-pointer">
            <img class="transform scale-75" src="/@/../../images/card22.jpg"/>
            <p class="dashCardInnerTittle">Dark & Gothic</p>
            <p class="dashCardInnerDescription">Release The Bats! Cover: Siouxsie and the...</p>
          </div>
          <div class="flex flex-1 flex-col dashCard cursor-pointer">
            <img class="transform scale-75" src="/@/../../images/card23.jpg"/>
            <p class="dashCardInnerTittle">Lava Lamp</p>
            <p class="dashCardInnerDescription">Contemplate the universe in a bottle of friendly...</p>
          </div>
          <div class="flex flex-1 flex-col dashCard cursor-pointer">
            <img class="transform scale-75" src="/@/../../images/card24.jpg"/>
            <p class="dashCardInnerTittle">Ambiente Max Ric...</p>
            <p class="dashCardInnerDescription">Music to induce calm and a space to think. Cover: ...</p>
          </div>
        </div>
      <p class="pl-3 dashTittle">
        Lo mejor del 2020
      </p>
            <p class="pl-3 dashDescription">
        Vuelve a disfrutar de las mejores canciones del 2020 de cada género
      </p>
        <div class="flex flex-row mt-3 dashCardRows">
          <div class="flex flex-1 flex-col dashCard cursor-pointer">
            <img class="transform scale-75" src="/@/../../images/card25.jpg"/>
            <p class="dashCardInnerTittle">Today's Top Hits Pre...</p>
            <p class="dashCardInnerDescription">Our editors' picks for the best pop songs of the...</p>
          </div>
          <div class="flex flex-1 flex-col dashCard cursor-pointer">
            <img class="transform scale-75" src="/@/../../images/card26.jpg"/>
            <p class="dashCardInnerTittle">Rock This Presents...</p>
            <p class="dashCardInnerDescription">The Best Rock Songs Of The Year Cover: Bring...</p>
          </div>
          <div class="flex flex-1 flex-col dashCard cursor-pointer">
            <img class="transform scale-75" src="/@/../../images/card27.jpg"/>
            <p class="dashCardInnerTittle">La Reina: Lo Mejor...</p>
            <p class="dashCardInnerDescription">Las más llegadoras del 2020, lo mejor de la...</p>
          </div>
          <div class="flex flex-1 flex-col dashCard cursor-pointer">
            <img class="transform scale-75" src="/@/../../images/card28.png"/>
            <p class="dashCardInnerTittle">RapCaviar Presents...</p>
            <p class="dashCardInnerDescription">Editor's Picks: The Best Hip-Hop Songs of 2020...</p>
          </div>
          <div class="flex flex-1 flex-col dashCard cursor-pointer">
            <img class="transform scale-75" src="/@/../../images/card29.png"/>
            <p class="dashCardInnerTittle">Mint Presents... Bes...</p>
            <p class="dashCardInnerDescription">The Best dance songs of 2020, handpicked by u...</p>
          </div>
        </div>
      </div>
      </div>
    </div>
    <!--<div style="width: 27%; background-color: rgb(40, 40, 40)">
      <p class="dashText m-1.5 px-3">Actividad de Amigos</p>
      <h5 class="pl-3" style="color: rgb(230, 230, 230)">
        No hay actividad reciente...
      </h5>
    </div>-->
  </div>
</template>
<script>
import Icons from '../Home/search'
export default {
  search:Icons,
  methods:{
    logout() {
                this.$inertia.post(route('logout'));
        },
  }
}

</script>