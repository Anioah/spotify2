
<template>
        <div class="component flex items-center justify-between px-5">

            <!-- Información de la canción-->
            <div class="flex flex-none justify-start">
                 
                    <img class=" transform scale-100" :src="cancionActual.img" width="80" height="80">
            
                    <div class="flex items-center ml-2" style="width: 10rem;">
                        <div>
                            <p class="text-base font-semibold text-gray-100">{{cancionActual.title}}</p>
                            <p class="text-xs font-normal text-white">{{cancionActual.artist}}</p>
                         </div>
                    </div>
                    <!--Mis me gusta-->
                 <div class="flex items-center ml-4">
                    <div>
                        <img src="../../../img/corazon.png" alt="Img Song" width="20" height="20" v-if="!corazon" @click="likeSong">
                        <img src="../../../img/corazonActivo.png" alt="Img Song" width="20" height="20" v-else @click="likeSong">
                    </div>
                </div>
            </div>


           <!--Botones de en medio--> 
            <div class="flex flex-col static  ml-10">
                 <div class="flex items-center justify-center">
                <!--Aleatorio-->
                <div class="flex mr-8">
                    <img class=" transform scale-100" src="../../../img/aleatorio.png" width="30" height="30" v-if="!aleatorio" @click="shuffleToggle">
                    <img class=" transform scale-100" src="../../../img/aleatorioactivo.png" width="30" height="30" v-else @click="shuffleToggle">
                </div>
                <!--Botones anterior-->
                <div class="flex mr-8">
                    <img class=" transform scale-100" src="../../../img/anterior.png" width="30" height="30" @click="skip('backward')">
                </div>
            <!--Play y pausa-->
                <div class="" >
                        <img class=" transform scale-100" src="../../../img/play.png" v-if="!inicia" v-on:click="playCurrentSong" width="40" height="40">
                    <img class=" transform scale-100" src="../../../img/pausa.png"  v-on:click="pause" v-else width="40" height="40">
                </div>
               <!--Botones siguiente-->
                    <div class="flex ml-8">
                    <img class=" transform scale-100" src="../../../img/siguiente.png" width="30" height="30" @click="skip('forward')">
                 </div>

                <!--Repetir canción-->
                <div class="flex ml-8">
                    <img class=" transform scale-100" src="../../../img/repetir.png" width="30" height="30" v-if="!repetir" @click="repeat">
                    <img class=" transform scale-100" src="../../../img/repetirActivo.png" width="30" height="30" v-else @click="repeat">
                    <div class="repeat-info h-3.5 w-3.5 rounded-full text-center text-pink capitalize tracking-wide" v-if="repetir">{{loop.value}}</div>
                </div>
            </div>
              
   
  
            <div class="flex items-start justify-start mt-3">
                    <div class="text-xs mr-2 font-normal text-green-100">
                        <p>{{currentPlayedTime}}</p>
                        <!-- 00:00 -->
                    </div>

                    <!-- Prgress -->
                    <div class="overflow-hidden h-1 flex rounded progress-bar gray-color">
                    <!-- w-96 -->
                    <div :style="{width: progressPercentageValue + '%'}" class="bg-white"></div>
                    <!-- progressPercentageValue -->
                </div>

                    <div class="text-xs ml-2 font-normal text-green-100">
                        <p>{{duration}}</p>
                        <!-- 00:00 -->
                    </div>
            </div>

                <audio :loop="innerLoop" ref="audiofile" :src="cancionActual.cancion" preload style="display: none" controls></audio>
          </div> 
   
   <div class="flex items-center mr-4">
            <img class="mr-2 transform scale-100" src="../../../img/mute.png" width="30" height="30" v-if="volume == 0" @click="mute">
            <img class="mr-2 transform scale-100" src="../../../img/volumen.png" width="30" height="30" v-else @click="mute">

            <div class="overflow-hidden w-20 h-1 flex rounded gray-color">
                <div :style="{width: volume + '%'}" class="bg-white"></div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
  name: 'flooter',
    data(){
         return{
            inicia: false,
            audioPlayer: undefined,
            corazon: false,
            cargando: false,
            isCurrentlyPlaying: "",
            repetir: false,
            aleatorio: false,

            loop: {
                state: false,
                value: 1
            },
            duracionSeg: 0,
            currentSeconds: 0,
            previousVolume: 35,
            volume: 100,
            autoPlay: false,
            progressPercentageValue: 0,

            cancionActual: {
                id: "",
                title: "",
                artist: "",
                album: "",
                cancion: "",
                img: ""
            },
            playlist: {
                currentIndex: 0,

                canciones: [
                    {
                        id: 1,
                        title: "Procura",
                        artist: "Chichi Peralta",
                        album: "salas",
                        cancion: "../../../music/Procura.mp3",
                        img: "../../images/procura.jpg"
                    },
                
                    {
                        id: 2,
                        title: "Disclosure",
                        artist: "You me",
                        album: "elect",
                        cancion: "../../../music/Disclousure.mp3",
                        img: "../../images/disclousure.jpg"
                    },
                    {
                        id: 3,
                        title: "My Happy Ending",
                        artist: "AvrilLavigne",
                        album: "I don´t know",
                        cancion: "../../../music/MyHappyEnding.mp3",
                        img: "../../images/avril.jpg"
                    },
                ]
            },
            previousPlaylistIndex: 0,
            hasNext: false,
            originalSongArray: [],
            showPlaylist: false
         }
        
     },
 methods:{
         playCurrentSong() {
            this.audioPlayer.play();
            this.inicia = true;
        },
        pause() {
            this.audioPlayer.pause();
            this.inicia = false;
            },
        stop() {
            this.audioPlayer.currentTime = 0;
        },
        mute() {
            //this.muted is a computed variable available down below
            this.audioPlayer.muted = !this.audioPlayer.muted
            if (this.volume > 0) {
                this.volume = 0;
            } else {
                this.volume = 100;
            }
        },
        updateTimer() {
            this.currentSeconds = parseInt(this.audioPlayer.currentTime);
            this.progressPercentageValue = (this.currentSeconds / parseInt(this.audioPlayer.duration) * 100 || 0);
        },
        likeSong() {
            this.corazon = this.corazon ? false : true;
        },
        repeat() {
            if (!this.loop.state && !this.repetir) {
                //firstclick
                this.loop.state = true;
                this.loop.value = 1;
                this.repetir = true;
            } else if (this.loop.state && this.repetir && this.loop.value === 1) {
                //second click
                this.loop.state = true;
                this.loop.value = "all";
                this.repetir = true;
            } else if (this.loop.state && this.repetir && this.loop.value === "all") {
                this.loop.state = false;
                this.loop.value = 1;
                this.repetir = false;
            }
        },
        skip(direction) {
            if (direction === "forward") {
                this.playlist.currentIndex += 1;
            } else if (direction === "backward") {
                this.playlist.currentIndex -= 1;
            }

            /**if the current Index of the playlist is greater or equal to the length of the playlist songs (the index is out of range)
             reset the index to 0. It could also mean that the playlist is at its end. */

            if (this.playlist.currentIndex >= this.playlist.canciones.length) {
                this.playlist.currentIndex = 0;
                
            }

            if (this.playlist.currentIndex < 0) {
                this.playlist.currentIndex = this.playlist.canciones.length - 1;
            }

            this.audioPlayer.src = this.playlist.canciones[
                this.playlist.currentIndex
            ].url;
            this.setCurrentSong(this.playlist.canciones[this.playlist.currentIndex]);

            //the code below checks if a song is playing so it can go ahead and auto play
            if (this.inicia) {
                this.audioPlayer;
            }
        },
        shuffleToggle() {
            if (this.aleatorio == false) {
                this.aleatorio = true;
                //shuffle the playlist songs and rearrange
                this.playlist.canciones = this.shuffleArray(this.playlist.canciones);

                 //reset the playlist index when changed and rest the previous playlist index
                this.playlist.currentIndex = this.getObjectIndexFromArray(
                    this.cancionActual,
                    this.playlist.canciones
                );
                this.previousPlaylistIndex = this.playlist.currentIndex;
            } else {
                this.aleatorio = false;
            }
        },
        seek(e) {
            if (this.cargando) {
                let el = e.target.getBoundingClientRect();
                let seekPos = (e.clientX - el.left) / el.width;
                let seekPosPercentage = seekPos * 100 + "%";

                /**
                 *  calculating the portion of the song based on where the user clicked
                 *
                 */

                let songPlayTimeAfterSeek = parseInt(
                this.audioPlayer.duration * seekPos
                );

                this.audioPlayer.currentTime = songPlayTimeAfterSeek;

                this.progressPercentageValue = seekPosPercentage;
            } else {
                throw new Error("Song Not Loaded");
            }
        },
        initPlayer() {
            this.audioPlayer.src = this.playlist.canciones[0].cancion;
            this.setCurrentSong(this.playlist.canciones[0]);

            this.audioPlayer.addEventListener("timeupdate", this.updateTimer);
            this.audioPlayer.addEventListener("loadeddata", this.load);
            this.audioPlayer.addEventListener("pause", () => {
                this.inicia = false;
            });
            this.audioPlayer.addEventListener("play", () => {
                this.inicia = true;
            });

            this.audioPlayer.addEventListener("ended", this.playNextSongInPlaylist);
        },
         play(cancion = {}) {
            if (typeof cancion === "object") {
                if (this.cargando) {
                    //check if song exists in playlist
                    if (this.cancionActual.id === cancion.id && this.inicia) {
                        this.pause();
                    } else if (this.cancionActual.id === cancion.id && !this.inicia) {
                        this.playCurrentSong();
                    } else if (this.cancionActual.id !== cancion.id) {
                        if (!this.containsObjectWithSameId(cancion, this.playlist.canciones)) {
                        this.addToPlaylist(cancion);
                        } else {
                        console.log("playMethod", "song already in playlist");
                        }

                        this.setAudio(cancion.url);
                        this.setCurrentSong(cancion);
                        this.playlist.currentIndex = this.getObjectIndexFromArray(
                        cancion,
                        this.playlist.canciones
                        );
                        this.previousPlaylistIndex = this.playlist.currentIndex;
                        this.audioPlayer.play();
                    }
                } else {
                this.setAudio(cancion.url);
                this.audioPlayer.play();
                }
            this.inicia = true;
            } else {
                throw new Error("Type Error : Song must be an object");
            }
        },
        load() {
            if (this.audioPlayer.readyState >= 2) {
                this.cargando = true;
                this.duracionSeg = parseInt(this.audioPlayer.duration);
            } else {
                throw new Error("Failed to load sound file.");
            }
        },
        formatTime(secs) {
            var minutes = Math.floor(secs / 60) || 0;
            var seconds = Math.floor(secs - minutes * 60) || 0;
            return minutes + ":" + (seconds < 10 ? "0" : "") + seconds;
        },
        setAudio(cancion) {
            this.audioPlayer.src = cancion;
        },
        setCurrentSong(cancion) {
            this.cancionActual.id = cancion.id;
            this.cancionActual.title = cancion.title;
            this.cancionActual.artist = cancion.artist;
            this.cancionActual.album = cancion.album;
            this.cancionActual.cancion = cancion.cancion;
            this.cancionActual.img = cancion.img;

            this.previousPlaylistIndex = this.playlist.currentIndex;
            console.log(this.cancionActual);
        },
         addAndPlayNext() {
            let selectedSong = {
                title: "Song Name 3",
                artist: "Artist Name",
                album: "Album Name",
                url: "./song2.mp3",
                cover_art_url: "/cover/art/url.jpg",
                inicia: false
            };

            //add the song to the playlist

            //get the index of the song that is currently being played in the player

            //insert the song at that position

            let indexOfCurrentSong = this.playlist.currentIndex;

            this.playlist.canciones.splice(indexOfCurrentSong + 1, 0, selectedSong);
        },
        addToPlaylist(song) {
            this.playlist.canciones.unshift(song);
        },
        dragSeek(e) {
            let el = e.target.getBoundingClientRect();
        },
        playNextSongInPlaylist() {
            if (this.repetir && this.loop.value === 1) {
                this.audioPlayer.play();
            } else {
                if (this.playlist.canciones.length > 1) {
                    if (this.random) {
                        //generate a random number
                        let randomNumber = this.generateRandomNumber(
                        0,
                        this.playlist.canciones.length - 1,
                        this.previousPlaylistIndex
                        );

                        //set the current index of the playlist
                        this.playlist.currentIndex = randomNumber;

                        //set the src of the audio player
                        this.audioPlayer.src = this.playlist.canciones[
                        this.playlist.currentIndex
                        ].url;
                        //set the current song
                        this.setCurrentSong(
                        this.playlist.canciones[this.playlist.currentIndex]
                        );
                        //begin to play
                        this.audioPlayer.play();
                    } else {
                        /*if the current Index of the playlist is equal to the index of the last song played skip that song and add 1/

                        if (this.playlist.currentIndex === this.previousPlaylistIndex) {
                        //increment the current index of the playlist by 1
                        this.playlist.currentIndex += 1;
                        }

                        /**if the current Index of the playlist is greater or equal to the length of the playlist songs (the index is out of range)
                         reset the index to 0. It could also mean that the playlist is at its end. */

                        if (this.playlist.currentIndex >= this.playlist.canciones.length) {
                        if (this.repetir && this.loop.value === "all") {
                            //if repeat is on then replay from the top
                            this.playlist.currentIndex = 0;
                        } else {
                            return;
                        }
                        }

                        this.audioPlayer.src = this.playlist.canciones[
                        this.playlist.currentIndex
                        ].url;
                        this.setCurrentSong(
                        this.playlist.canciones[this.playlist.currentIndex]
                        );
                        this.audioPlayer.play();
                        this.playlist.currentIndex++;
                    }
                } else {
                }
            }
        },
        containsObjectWithSameId(obj, list) {
            let i;
            for (i = 0; i < list.length; i++) {
                if (list[i].id === obj.id) {
                return true;
                }
            }
        },
         getObjectIndexFromArray(obj, list) {
            //this function just returns the index of the item with the id
            let i;
            for (i = 0; i < list.length; i++) {
                if (list[i].id === obj.id) {
                return i;
                }
            }
        },
        generateRandomNumber(min, max, except) {
            let num = null;
            num = Math.floor(Math.random() * (max - min + 1)) + min;
            return num === except ? this.generateRandomNumber(min, max, except) : num;
        },
        shuffleArray(array) {
            let ctr = array.length;
            let temp;
            let index;

            // While there are elements in the array
            while (ctr > 0) {
                // Pick a random index
                index = Math.floor(Math.random() * ctr);
                // Decrease ctr by 1
                ctr--;
                // And swap the last element with it
                temp = array[ctr];
                array[ctr] = array[index];
                array[index] = temp;
            }
            return array;
        }

     },
     created() {
        this.innerLoop = this.loop.state;
    },
    mounted() {
        this.audioPlayer = this.$el.querySelectorAll("audio")[0];
        this.initPlayer();
    },
     computed: {
        currentPlayedTime() {
        return this.formatTime(this.currentSeconds);
        },
        duration() {
        return this.formatTime(this.duracionSeg);
        },
        progressPercentage() {
        return parseInt(this.currentSeconds / this.duracionSeg * 100);
        },
        muted() {
        //this returns true or false
        return this.volume / 100 === 0;
        }
    },

}

</script>

<style scoped> 
.progress-bar{
    width: 30rem;
    
}


.gray-color{
    --tw-bg-opacity: 1;
    background-color: #8F8F8F;
}

.repeat-info {
    background-color: #08a830;
    font-size: 9px;
    line-height: 14px;
}

</style>