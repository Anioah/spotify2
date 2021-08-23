<template>
    <app-layout title="Dashboard">
        <div class="wrapper">
            <div class="cul">
                <div class="icons">
                    <Icons></Icons>
                </div>
                <div class="dashboard-config">
                    <Dashboard></Dashboard>
                </div>
            </div>

            <div style="background-color: #181818">
                <Flooter></Flooter>
            </div>
        </div>
    </app-layout>
</template>

<script>
import Dashboard from "@/Pages/Dashboard/dashboard.vue";
import Icons from "@/Pages/Icons/icons.vue";
import Flooter from "@/Pages/Flooter/flooter.vue";
import Megusta from "@/Pages/TusMegusta/TusMegusta.vue";
import Search from "@/Pages/Home/search.vue";
import Playlist from "@/Pages/playlist/playlist.vue";

export default {
    components: {
        Dashboard,
        Icons,
        Flooter,
        Megusta,
        Search,
        Playlist,
    },
};
</script>
